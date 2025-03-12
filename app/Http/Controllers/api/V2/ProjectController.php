<?php

namespace App\Http\Controllers\api\V2;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Repositories\IdeaRepository;
use App\Services\IndexService;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    private IndexService $indexService;
    public function __construct(
        IndexService $indexService
    ) {
        $this->indexService = $indexService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index($type = null)
    {
        return response()->json(
            [
                'data' => $this->indexService->getTopics('proj_index')
            ]
        );


        $projs = Project::with(['ideas'=> function ($query)  {
            $query->with('topic')
                ->select('ideas.id','ideas.name','ideas.description', 'topic_id')
            ;
        }])
            ->select('id','name','start', 'finish')
            ->whereHas('ideas', function ($query) use ($type) {
            if(!is_null($type)) {
                if($type == 1) {
                    $query->where('topic_id',28)->where('ideas.name','team');
                } else {
                    $query->where('topic_id',28)->where('ideas.name','individual');
                }
            }
        })
            ->limit(40)
            ->orderBy('start','desc')->get();
        return response()->json(
            [
                'data' => [
                 'projects' => $projs->toArray(),
                ]
            ]
        );
    }

    public function projEdit($id)
    {
        $proj = Project::with(['ideas'=> function ($query) {
            $query->select(['ideas.id','ideas.topic_id'])
                ->with(['topic' => function ($query) {
                    $query->select(['topics.id','topics.topic_id'])
                       ; }])
            ;}])->select(['id'])->find($id);
        $rep = new IdeaRepository();

        return response()->json(
            [
                'data' => $proj->toArray(),
                'dics' => $rep->getDropdown('employment_type')
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
