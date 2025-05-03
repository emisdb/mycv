<?php

namespace App\Models\Feeds;

use App\Components\DateFormat;
use App\Models\IdeaToIdea;
use App\Models\Repositories\TopicRepository;
use App\Models\Topic;
use App\Models\Idea;
use App\Models\Project;

class Projects implements FeedInterface
{
    const LANGUAGE = 1;
    const PICTURE = 'technologies';
    const TYPE = 28;
    const TEAM = 'team';
    const INDI = 'individual';
    const TECH = 30;
    const SHORTS = 29;
    const DETAILS = 21;
    const CLIENTS = 31;
    const INDUSTRIES = 38;

    protected $type;
    protected $details;
    protected $clients;

    public function __construct()
    {
        $this->details = array_column(Topic::query()->select(['id'])->where('topic_id', self::DETAILS)->get()->toArray(), 'id');
        $this->clients = array_column(Topic::query()->select(['id'])->where('topic_id', self::CLIENTS)->get()->toArray(), 'id');
    }

    public function setType($type = 0)
    {
        if ($type) {
            $this->type = self::INDI;
        } else {
            $this->type = self::TEAM;
        }
    }

    public function getData(): array
    {
        $projects = Project::query()->select(['id', 'name', 'start', 'finish'])
            ->whereHas('ideas', function ($query) {
                $query->where('topic_id', self::TYPE)->where('ideas.name', $this->type);
            })
            ->with(['ideas' => function ($query) {
                $query->with(['topic',
                    'ideas' => function ($query) {
                        $query->where("topic_id", self::SHORTS);
                    }]);
            }])->orderBy('start', 'desc')->get()->toArray();

        return $this->formatProjects($projects);
    }

    public function getProject($id): array
    {
        $projects = Project::query()->select(['id', 'name', 'start', 'finish'])
            ->with(['ideas' => function ($query) {
                $query->with(['topic',
                    'ideas' => function ($query) {
                        $query->where("topic_id", self::SHORTS);
                    }]);
            }])
 //           ->where('id', $id)
            ->find($id)->toArray();
        return $this->formatData($projects);
    }

    private function formatProjects($projects): array
    {
        $return = [];
        $techs = [];
        foreach ($projects as $project) {
            $ret = $this->formatData($project);
            $techs[$ret['tech']]['name'] = $ret['tech_type'];
            $return[] = $ret;
        }
         return ['data' => $return, 'techs' => $this->setColor($techs)];
    }
    private function formatData($idea): array
    {
        $result = [];
        $details = [];
        $topics = [];
        $clients = [];
        $tech = '';
        $techType = '';
        if (isset($idea['ideas'])) {

            foreach ($idea['ideas'] as $key => $idea_) {
                if ($idea_['topic_id'] == self::TECH) {
                    $tech = $idea_['name'];
                    $techType = $idea_['description'];
//                    $techs[$idea_['name']]['name'] = $idea_['description'];

                }
                if (!empty($idea_['ideas'])) {
                    $result['techs'][] = [$idea_['ideas'][0]['name'], $idea_['ideas'][0]['description'], $idea_['description']];
                }
                if (in_array($idea_['topic']['topic_id'], $this->details)) {
                    $details = Idea::query()->where('topic_id', $idea_['topic_id'])->get()->toArray();
                    $topics = Topic::query()->where('topic_id', $idea_['topic_id'])->with('ideas')->get()->toArray();
                }
                if (in_array($idea_['topic_id'], $this->clients)) {
                    $clients = Idea::query()->with('ideas')->where('topic_id', $idea_['topic_id'])->get()->toArray();
                }
                unset($idea['ideas'][$key]);
            }
        } ;
        $details = $this->getIdeas($details);
        $clients = $this->getClients($clients);
        usort($result['techs'], function ($a, $b) {
            return (int)$a[1] > $b[1];
        });
        $result['id'] = $idea['id'];
        $result['name'] = $idea['name'];
        $result['start'] = DateFormat::getDate($idea['start']);
        $result['finish'] = DateFormat::getDate($idea['finish']);
        $result['tech'] = $tech;
        $result['tech_type'] = $techType;
        $result['details'] = $details;
        $result['topics'] = $topics;
        $result['client'] = $clients;
        return $result;
    }

    protected function getIdeas($details)
    {
        foreach ($details as $key => $detail) {
            if (substr($detail['name'], -6) == '_ideas') {
                $name = substr($detail['name'], 0, strlen($detail['name']) - 6);
                $idea = Idea::with('ideas')->find($detail['id']);
                $details[$key][$name] = $idea->ideas->map(function ($item) {
                    return [
                        'name' => $item->name,
                        'description' => $item->description,
                    ];
                })->toArray();
            }
        }
        return $details;
    }

    protected function getClients($details)
    {
        $address = ['name', 'link', 'location', 'industry'];
        $vals = [];
        $valsa = [];
        foreach ($details as $detail) {
            if (in_array($detail['name'], $address)) {
                $vals[$detail['name']] = $detail['description'];
            } else
                $valsa[$detail['name']] = $detail['description'];
        }
        return ['names' => $vals, 'other' => $valsa];
    }

    protected function setColor($arr)
    {
        $colors = [['pale-blue', 'blue'], ['pale-green', 'light-green'], ['sand', 'khaki'], ['pale-yellow', "yellow"], ['pale-red', 'red'], ['light-gray', 'gray']];
        $counter = 0;
        foreach ($arr as $name => $value) {
            $arr[$name]['color'] = $colors[$counter++];
            if ($counter > 3) $counter = 0;
        }
        return $arr;
    }


    public function getText(): array
    {
        return [];
    }

}
