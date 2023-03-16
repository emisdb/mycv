<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;
use App\Http\Requests\LanguageRequest;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $lang = new Language();
        $feed = $lang->all()->toArray();
        $params = array_merge(['title' => ['Languages', 'lang']], $lang->params());

        return view('dict.list', [
            'dataset' => $feed,
            'params' => $params
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create()
    {
        $data = [
            'locale' => 'ru-Ru',
            'name' => 'Russian',
        ];
        Language::create($data);
        return redirect()->action([LanguageController::class, 'index'])->with('status', "New language created!");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(LanguageRequest $request)
    {
        $lang = Language::find($request->input('id'));
        $lang->update([
           'name' => $request->input('name'),
           'locale' => $request->input('locale'),
        ]);
        return redirect()->action([LanguageController::class, 'index'])->with('status', "New language created!");
   }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Language $language
     * @return \Illuminate\Http\Response
     */
    public function show(Language $language)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Language $language
     * @return \Illuminate\Http\Response
     */
    public function edit(Language $language)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Language $language
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Language $language)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Language $language
     * @return \Illuminate\Http\Response
     */
    public function destroy(Language $language)
    {
        //
    }
}
