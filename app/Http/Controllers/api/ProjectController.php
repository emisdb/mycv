<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Repositories\IdeaRepository;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index($type = null)
    {
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

        public function indi()
    {
        $projs = Project::whereHas('ideas', function ($query) {
            $query->where('topic_id', 28)
                ->where('name', 'individual');
        })
            ->orderBy('start', 'desc')
            ->get();
        return response()->json(
            [
                'data' => [
                    'projects' => $projs->toArray(),
                ]
            ]
        );
    }
    public function team()
    {
        $projs = Project::whereHas('ideas', function ($query) {
            $query->where('topic_id', 28)
                ->where('name', 'team');
        })
            ->orderBy('start', 'desc')
            ->get();
        return response()->json(
            [
                'data' => [
                    'projects' => $projs->toArray(),
                ]
            ]
        );
    }
    public function proj($id)
    {
        $proj = Project::with(['ideas'=> function ($query) {
            $query->select(['ideas.id','ideas.description','ideas.name','ideas.topic_id'])
                ->with(['topic' => function ($query) {
                    $query->select(['topics.id','topics.description','topics.name','topics.topic_id'])
                        ->with(['topic']);}])
            ;}])->find($id);
        return response()->json(
            [
                'data' => $proj->toArray(),
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
