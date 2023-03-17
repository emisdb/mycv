<?php

namespace App\Http\Controllers;

use App\Components\RepDispatcher;
use Illuminate\Http\Request;



class DictController extends Controller
{
    public function index($tab)
    {
        $class = RepDispatcher::dispatch($tab);
        return view('dict.list',['model'=>$class->getList()]);
    }

    public function subindex($tab,$id)
    {
        $class = RepDispatcher::ml_dispatch($tab);
        return view('dict.list',['model'=>$class->getSubList($id),'path'=>$class->getPath($id)]);
    }

    public function form($tab, $id)
    {
        $class = RepDispatcher::dispatch($tab);
        return view('dict.form',['model'=>$class->getForm($id)]);
   }

    public function store(Request $request, $tab, $id=0)
    {
        $class = RepDispatcher::dispatch($tab);
       $result = $class->setData($request,$id);
        return redirect()->action([self::class, 'index'],$tab)->with($result ? 'success' : 'failure', $this->getMessage($class->name(), $id, $result));
    }

    public function test($tab)
    {
        $class = RepDispatcher::dispatch($tab);
        var_dump($class->test());
    }

    protected function getMessage($name, $id, $fail=false) : string
    {
        $message = $name.": ";
        if($fail){
            if($id) {
                $message .= "Failure to edit $id";
            } else {
                $message .= "Failure to creat";
            }
        } else {
            if($id) {
                $message .= "$id was edited";
            } else {
                $message .= "New is created";
            }
        }
        return $message;
    }
}
