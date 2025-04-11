<?php

namespace App\Models\Feeds;

use App\Components\DateFormat;
use App\Models\Repositories\TopicRepository;
use App\Models\Topic;
use App\Models\Idea;
use App\Models\Project;

class Skills implements FeedInterface
{
    const TECHNOLOGY = 'technology';
    const LANGUAGE = 1;
    const PICTURE = 'technologies';

    public function getData(): array
    {
        $topic = new Topic();
        $id = ($arr = $topic->select('id')->where('name', self::TECHNOLOGY)->whereNull('topic_id')->get()->toArray()) ?? $arr[0]['id'];
        $topics = TopicRepository::getSubIds($id);
        $ideas = Idea::query()
            ->with(['topic' => function ($query) {
                $query->select('id', 'name', 'description')
                    ->addSelect([
                        'sort' => Idea::select('description')
                            ->whereColumn('topic_id', 'topics.id')
                            ->where('name', 'sort')
                            ->limit(1)
                    ])
                    ->orderBy('id', 'asc');
            }])
            ->with(['text' => function ($query) {
                $query->where('language_id', '=', 1);
            }])
            ->with(['ideas' => function ($query) {
                $query->with(['topic']);
            }])
            ->whereIn('topic_id', $topics)
            ->where('name', '<>', 'sort')
//            ->select(['id','name'])
            ->get()->sortBy([['topic.id', 'asc'], ['id', 'asc']])->toArray();
//        dd($ideas);

        return $this->formatData($ideas);

    }

    private function formatData($ideas): array
    {
        $return = [];
        foreach ($ideas as $idea) {
            $result = [];
            $id = $idea['id'];
            $result['id'] = $idea['id'];
            $result['name'] = $idea['name'];
            $result['description'] = isset($idea['text']) ? $idea['text']['txt'] : $idea['description'];
            $result['c_id'] = $idea['topic']['id'];
            $result['c_name'] = $idea['topic']['name'];
            $result['c_desc'] = $idea['topic']['description'];
            $result['sort'] = $idea['topic']['sort'];
             if (isset($idea['ideas'])) {
                foreach ($idea['ideas'] as $idea_) {
                    if ($idea_['topic']['name'] == self::PICTURE) {
                        $result['pic'] = $idea_['description'];
                    }
                }
            }
            $max = Project::whereHas('idea', function ($query) use ($id) {
                $query->where('idea_id', '=', $id);
            })->max('finish');
            $min = Project::whereHas('idea', function ($query) use ($id) {
                $query->where('idea_id', '=', $id);
            })->min('start');
            if (($max > 0) && ($min > 0)) {
                $result['start'] = DateFormat::getDate($min);
                $result['len'] = $max - $min;
                $result['length'] = DateFormat::getLength($max - $min);
            } else {

            }
            $return[] = $result;
        }
        $sorted = collect($return)->sortBy([
            ['sort', 'asc'],
            ['len', 'desc'],
        ])->values()->toArray();
//        dd($sorted);
        return $sorted;
    }

    public function getText(): array
    {
        return [];
    }

}
