<?php

namespace App\Http\Controllers;

use App\Components\RepDispatcher;
use Illuminate\Http\Request;
use App\Components\ListFactory;

class DictController extends Controller
{
    public function index($tab)
    {
        $class = RepDispatcher::dispatch($tab);
        $product = new ListFactory($class);
        return view('dict.list',['model'=>$product->manage()]);
     }
}
