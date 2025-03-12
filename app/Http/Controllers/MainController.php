<?php

namespace App\Http\Controllers;

use App\Components\RepDispatcher;
use App\Models\Feature;
use App\Models\Feeds\FeedInterface;
use App\Models\Feeds\Projects;
use App\Models\Feeds\Skills;
use App\Models\Feeds\Education;
use App\Models\Project;
use App\Models\Repositories\TopicRepository;
use App\Models\Topic;
use Illuminate\Http\Request;
use App\Http\Requests\FeatureRequest;
use App\Models\Feeds\Index;
use App\Services\DataParser;

class MainController extends Controller
{
    public function home(FeedInterface $feed)
    {
        $parser = new DataParser($feed);
        $result = $parser->handle();
//        dd($result);
        return view('pages.index', ['model' => $result[0],'dialogs' => $result[1]]);
   }

    public function skills()
    {
        $skills= new Skills();
        $res = $skills->getData();
//        dd($res);
        return view('pages.skills', ['model' => $res]);
    }
    public function edu()
    {
        $skills= new Education();
        $res = $skills->getData();
//        dd($res);
        return view('pages.edu', ['model' => $res]);
    }
    public function projects($type = 0)
    {
        $proj= new Projects($type);
//        $proj= new Projects($type);
        $res = $proj->getData();
        if($type == 100) dd($res);
        if($type) {
            return view('pages.time', ['model' => $res]);
        } else {
            return view('pages.team', ['model' => $res]);

        }
    }

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
                $query->select('id', 'name');
            }])->find($id);
//        dd(compact('topic'));
        return view('topic', compact('topic'));
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

}
