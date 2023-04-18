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

    protected $type;
    protected $details;
    protected $clients;

    public function __construct($type = 0)
    {
        if ($type) {
            $this->type = self::INDI;
        } else {
            $this->type = self::TEAM;
       }
        $this->details = array_column(Topic::query()->select(['id'])->where('topic_id',self::DETAILS)->get()->toArray(),'id');
        $this->clients = array_column(Topic::query()->select(['id'])->where('topic_id',self::CLIENTS)->get()->toArray(),'id');
    }

    public function getData(): array
    {
        $projects = Project::query()->select(['id', 'name', 'start', 'finish'])
            ->whereHas('ideas', function ($query) {
                $query->where('topic_id',self::TYPE)->where('ideas.name',$this->type);})
            ->with(['ideas' => function ($query){ $query->with(['topic','ideas']);}])
            ->orderBy('start', 'desc')->get()->toArray();
        //with(['topic'])->with(['ideas'=> function ($query) {
        //                    $query->with(['topic'])
        //                        ->
  // ->where("topic_id",self::SHORTS);}])
        /*        $id = ($arr=$topic->select('id')->where('name',self::TECHNOLOGY)->whereNull('topic_id')->get()->toArray()) ?? $arr[0]['id'];
                $topics = TopicRepository::getSubIds($id);
                $ideas = Idea::query()
                    ->with(['topic' => function ($query) { $query->select('id', 'name','description')->orderBy('id','asc'); }])
                    ->with(['text' => function ($query){ $query->where('language_id','=', 1);}])
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
            $details = [];
            $topics = [];
            $clients = [];
            $tech = '';
            if (isset($idea['ideas'])) {

                foreach ($idea['ideas'] as $key => $idea_) {
                    if ($idea_['topic_id'] == self::TECH) {
                        $tech = $idea_['name'];
                        $techs[$idea_['name']]['name']= $idea_['description'];
                     }
                    if(!empty($idea_['ideas'])){
                        $result['techs'][] = $idea_['ideas'][0]['name'];
                   }
                    if(in_array($idea_['topic']['topic_id'],$this->details)){
                        $details = Idea::query()->where('topic_id',$idea_['topic_id'])->get()->toArray();
                        $topics = Topic::query()->where('topic_id',$idea_['topic_id'])->with('ideas')->get()->toArray();
                    }
                    if(in_array($idea_['topic_id'],$this->clients)){
                        $clients = Idea::query()->where('topic_id',$idea_['topic_id'])->get()->toArray();
                    }
                    unset($idea['ideas'][$key]);
                }
            } else continue;
            $details = $this->getIdeas($details);
             $result['id'] = $idea['id'];
            $result['name'] = $idea['name'];
            $result['start'] = DateFormat::getDate($idea['start']);
            $result['finish'] = DateFormat::getDate($idea['finish']);
            $result['tech'] = $tech;
            $result['details'] = $details;
            $result['topics'] = $topics;
            $result['client'] = $clients;
            $return[] = $result;
        }
        return ['data' => $return, 'techs' => $this->setColor($techs)];
    }
    protected function getIdeas($details)
    {
        foreach($details as $key => $detail){
            if(substr($detail['name'],-6)=='_ideas'){
                $name = substr($detail['name'],0,strlen($detail['name'])-6);
                $idea = Idea::query()->with('ideas')->find($detail['id'])->toArray();
                $details[$key][$name] = array_column($idea['ideas'],'name');
            }
        }
        return $details;
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
