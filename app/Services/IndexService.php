<?php

namespace App\Services;

use App\Models\Idea;
use App\Models\Topic;

class IndexService
{
    public function getIdeas($sysname)
    {

        $id = $this->getIndexId($sysname);
        if ($id) {
                $ideas = Idea::where('topic_id', $id)->select(['id','name','description'])->get();
                return $ideas->toArray();
            }
    }
    public function getTopics($sysname)
    {
        $id = $this->getIndexId($sysname,'id');
        if ($id) {
                $ideas = Topic::where('topic_id', $id)->select(['id','name','description'])->get();
                return $ideas->toArray();
        }
    }

    protected function getIndexId($sysname, $type = 'description'): string
    {
        $values = config('sys.proj.' . $sysname);

        if (empty($values)) {
            throw new \Exception('Configuration sys.index is empty');
        }

        $query = Topic::select('id')->where('name', array_shift($values));

        foreach ($values as $value) {
            $query = Topic::select(['id', 'description'])
                ->where('name', $value)
                ->where('topic_id', function ($subQuery) use ($query) {
                    $subQuery->select('id')->fromSub($query, 't'); // Use explicit alias 't'
                });
        }

        // Dump SQL for debugging
//        dd($query->toSql(), $query->getBindings());

        return $query->value($type);
    }


}
