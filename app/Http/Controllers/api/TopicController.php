<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function topics()
    {
        $topics = Topic::with(['descend_counts', 'ideas'])
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
        return response(json_encode(Topic::all()->toArray()), 200)
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
        Topic::create($data);
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
     * @param \App\Models\Topic $topic
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Topic $topic)
    {
        return response()->json([
            'data' => $topic->load(['topic', 'descendants', 'ideas'])->toArray(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Topic $topic
     * @return \Illuminate\Http\JsonResponse
     */
    public function tech(Topic $topic)
    {
        return response()->json([
            'data' => $topic->load(['topic', 'descend_ideas', 'ideas'])->toArray(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Topic $topic
     * @return \Illuminate\Http\Response
     */
    public function edit(Topic $topic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Topic $topic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topic $topic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Topic $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topic $topic)
    {
        //
    }
}
