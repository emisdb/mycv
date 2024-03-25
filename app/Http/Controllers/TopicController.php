<?php

namespace App\Http\Controllers;

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
        $topics = Topic::with('descendants')->whereNull('topic_id')->get();
        return view('dashboard.topics', compact('topics'));
    }

    public function topic_ideas()
    {
        $topics = Topic::with('descendants')->with('ideas')->get();
        return view('dashboard.topic_ideas', compact('topics'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): Response
    {
        $topics = Topic::with(['topic' => function ($query) {
            $query->select('id', 'name');
        }])
            ->select('id', 'name', 'description', 'topic_id')
            ->get();

        $topicsArray = $topics->map(function ($topic) {
            return [
                'id' => $topic->id,
                'name' => $topic->name,
                'description' => $topic->description,
                'topic_id' => $topic->topic_id,
                'topic_name' => $topic->topic ? $topic->topic->name : null,
            ];
        });

        $topicsArray = $topicsArray->toArray();
        return response(json_encode($topicsArray), 200)
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
     * @return \Illuminate\Http\Response
     */
    public function show(Topic $topic)
    {
        //
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
