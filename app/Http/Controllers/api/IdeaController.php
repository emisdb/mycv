<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function ideas()
    {
        $topics = Idea::with(['descend_counts', 'ideas'])
            ->withCount('ideas')
            ->whereNull('topic_id')
            ->get();
//            ->makeHidden(['created_at', 'updated_at']);
        return response()->json(
            [
                'data' => $topics->toArray(),
            ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): Response
    {
        return response(json_encode(Idea::all()->toArray()), 200)
            ->header('Content-Type', 'application/json');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'description' => 'phrase to address',
            'name' => 'phrase',
        ];
        Idea::create($data);
        return response($data, 200)
            ->header('Content-Type', 'application/json');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Idea $topic
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Idea $idea)
    {
        return response()->json([
            'data' => $idea->load(['ideas.topic','topic'])->toArray(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Idea $topic
     * @return \Illuminate\Http\Response
     */
    public function edit(Idea $topic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Idea $topic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Idea $topic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Idea $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Idea $topic)
    {
        //
    }
}
