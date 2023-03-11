<?php

namespace App\Http\Controllers;

use App\Components\RepDispatcher;
use Illuminate\Http\Request;
use App\Components\ListFactory;
use App\Components\FormFactory;

class DictController extends Controller
{
    public function index($tab)
    {
        $class = RepDispatcher::dispatch($tab);
        $product = new ListFactory($class);
        return view('dict.list',['model'=>$product->manage()]);
     }
    public function form($tab, $id)
    {
        $class = RepDispatcher::dispatch($tab);
        $product = new FormFactory($class, $id);
        return view('dict.form',['model'=>$product->manage()]);
   }
}
