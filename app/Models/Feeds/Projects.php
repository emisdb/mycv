<?php

namespace App\Models\Feeds;

use App\Components\DateFormat;
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

    protected $type;

    public function __construct($type = 0)
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
            ->with(['ideas' => function ($query) {
                $query->with(['topic'])->with(['ideas'=> function ($query) {
                    $query->with(['topic'])->where("topic_id",self::SHORTS);
                }]);
            }])
            ->orderBy('start', 'desc')->get()->toArray();
        /*        $id = ($arr=$topic->select('id')->where('name',self::TECHNOLOGY)->whereNull('topic_id')->get()->toArray()) ?? $arr[0]['id'];
                $topics = TopicRepository::getSubIds($id);
                $ideas = Idea::query()
                    ->with(['topic' => function ($query) { $query->select('id', 'name','description')->orderBy('id','asc'); }])
                    ->with(['text' => function ($query){ $query->where('language_id','=', 1);}])
                    ->with(['ideas' => function ($query){ $query->with(['topic']);}])
                    ->whereIn('topic_id',$topics)
        //            ->select(['id','name'])
                    ->get()->sortBy([['topic.id','asc'],['id','asc']])->toArray();
        */
        return $this->formatData($projects);
        //       return $projects;

    }

    private function formatData($ideas): array
    {
        $return = [];
        $techs = [];
        foreach ($ideas as $idea) {
            $result = [];
            $pass = true;
            $tech = '';
            if (isset($idea['ideas'])) {
                foreach ($idea['ideas'] as $key => $idea_) {
                    if (($idea_['topic_id'] == self::TYPE) && ($idea_['name'] != $this->type)) {
                        $pass = false;
                        unset($idea['ideas'][$key]);
                        break;
                    }
                    if ($idea_['topic_id'] == self::TECH) {
                        $tech = $idea_['name'];
                        $techs[$idea_['name']]['name']= $idea_['description'];
                     }
                    if(!empty($idea_['ideas'])){
                        $result['techs'][] = $idea_['ideas'][0]['name'];
                   }
                    unset($idea['ideas'][$key]);
                }
            } else continue;
            if (!$pass) continue;
            $result['id'] = $idea['id'];
            $result['name'] = $idea['name'];
            $result['start'] = DateFormat::getDate($idea['start']);
            $result['finish'] = DateFormat::getDate($idea['finish']);
            $result['tech'] = $tech;
            $return[] = $result;
        }
        return ['data' => $return, 'techs' => $this->setColor($techs)];
    }

    protected function setColor($arr)
    {
        $colors = [['pale-red','red'], ['pale-yellow',"yellow"], ['pale-green','light-green'], ['pale-blue','blue'], ['light-gray','gray'], ['sand'.'khaki']];
        $counter = 0;
        foreach ($arr as $name => $value){
            $arr[$name]['color'] = $colors[$counter++];
            if ($counter>3) $counter = 0;
       }
        return $arr;
    }


    public function getText(): array
    {
        return [];
    }

}
