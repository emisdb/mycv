<?php

namespace App\Models\Repositories;

use App\Models\Idea;
use App\Models\Topic;
use Illuminate\Http\Request;

class IdeaRepository extends MultiLevelDictRepository
{
    const DICT_ID = "idea";
    const DICT_PARENT = "topic";
    const DICT_LABEL_LIST = "Ideas";
    const DICT_LABEL_FORM = "Idea";
    const DICT_PARENT_ID = "topic_id";
    const DICT_LIST_PICT = "dear";
    const DICT_FORM_PICT = "legs";


    protected $model;
    protected $path;

    public function getSubForm($id): array
    {
        return ['dataset' => ['topic_id' => $id], 'params' => $this->columns(), 'title' => $this->getId()];
    }

    public function getSubList($id): array
    {
        return ['dataset' => $this->getSubData($id), 'params' => $this->columns(), 'title' => $this->getId()];
    }

    protected function makePath(Topic $topic)
    {
        $topic_p = $topic->topic;
        if ($topic_p) {
            array_unshift($this->path, $this->makeLink($topic_p->id, $topic_p->name, self::DICT_PARENT));
            $this->makePath($topic_p);
        }
    }

    public function getPath($id): array
    {
        $this->path = [];
        if ($topic = Topic::find($id)) {
            $this->path = [$topic->name];
            $this->makePath($topic);
        }
        return $this->path;
    }

    public function getSubData($id): array
    {
        $this->model = Idea::query();

        return $this->model->where('topic_id', '=', $id)->withCount(['ideas'])->get()->toArray();
    }

    public function getData($id = 0): array
    {
        $this->model = new Idea();
        if ($id) {
            return $this->model->find($id)->toArray();
        } else {
            return $this->model->all()->toArray();
        }
    }

    public function getDropdown($sysname)
    {
        $ids = $this->getIndexId($sysname);
 //       dd($ids);
        if ($ids) {
            if(count($ids)==1){
 //               $ideas = Idea::where('topic_id', $ids[0])->select(['id','name','description'])->get();
                $ideas = Idea::where('topic_id', $ids[0])->pluck('description','id');
                return $ideas->toArray();
            }
        }
    }

    protected function getIndexId($sysname)
    {
        $values = config('sys.proj.' . $sysname);


        if (empty($values)) {
            throw new \Exception('Configuration sys.index is empty');
        }

        $query = Topic::select(['id'])->where('name', array_shift($values));

        foreach ($values as $value) {
            $query = Topic::select(['id', 'description'])
                ->where('name', $value)
                ->whereIn('topic_id', function ($subQuery) use ($query) {
                    $subQuery->select('id')->fromSub($query, 'sub');
                });
        }
        return $query->pluck('description')->toArray();
    }

    public function setData(Request $request, $id = 0): bool
    {
        $request->validate($this->getValidation());
        $this->model = new Idea();
        if ($id) {
            return $this->model->find($id)->update($request->all());
        } else {
            return is_object($this->model->create($request->all()));
        }
    }

    public function delete($id): array
    {
        $this->model = new Idea();
        $rec = $this->model->find($id);
        $result['parent'] = $rec->topic_id;
        $result['success'] = $rec->delete();
        return $result;
    }

    public function columns(): array
    {
        /*
         * parameter length must sum up 9 in the end
         */
        return [
            [
                'name' => 'name',
                'label' => 'Name',
                'validation' => ['required', 'string', 'max:64'],
                'length' => 3,
                'type' => 'text',
            ],
            [
                'name' => 'description',
                'label' => 'Description',
                'validation' => ['required', 'string', 'max:256'],
                'length' => 6,
                'type' => 'text',
            ],
            [
                'name' => 'topic_id',
                'parent' => true,
                'label' => 'Topic',
                'validation' => [],
                'length' => 0,
                'type' => 'hidden'
            ],
        ];
    }


}
