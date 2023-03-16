<?php

namespace App\Http\Controllers;

use App\Components\RepDispatcher;
use App\Models\Feature;
use App\Models\Topic;
use Illuminate\Http\Request;
use App\Http\Requests\FeatureRequest;

class MainController extends Controller
{
    public function form($tab, $id)
    {

        $feat = Feature::find($id)->toArray();
        return view('edit', ['tab' => $tab, 'feat' => $feat]);
    }

    public function edit($type, $id)
    {
        $model = RepDispatcher::dispatch($type, $id);
        return view('form', ['model' => $model]);
    }

    public function features(FeatureRequest $req)
    {
        return view('req', ['req' => $req]);
    }

    public function topic($id)
    {
        $topic = Topic::query()->with(['topic'
        => function ($query) {
                $query->select('name');
            }])->find($id);
        if ($topic) {
            var_dump($topic->toArray());
            if ($topic->topic) {
                var_dump($topic->topic->toArray());
            }
        }
        return "<h3>TOPIC</h3>";
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feat = Feature::all();
        $features = $feat->toArray();
        return view('list', ['dataset' => $features]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param FeatureRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(FeatureRequest $request)
    {
        $feature = new Feature();
        $feature->feature = $request->input('feature');
        $feature->description = $request->input('description');
        $feature->save();
        return redirect()->action([MainController::class, 'index'])->with('status', "Feature {$feature->id} created!");
    }

    public function skills($type = 'web')
    {
        switch ($type) {
            case 'web':
                return view('skills-accordion');
            default:
                return view('skills');
        }
    }

}
