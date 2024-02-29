<?php

namespace App\Http\Controllers;

use App\Components\RepDispatcher;
use Illuminate\Http\Request;


class DictController extends Controller
{
    public function index(Request $request, $tab)
    {
        $class = RepDispatcher::dispatch($tab);
        return view('dict.list', ['model' => $class->getList(), 'dd' => explode('/', $request->path())[1] ?? null]);
    }

    public function subindex($tab, $id)
    {
        $class = RepDispatcher::mlDispatch($tab);
        return view('dict.list', ['model' => $class->getSubList($id), 'path' => $class->getPath($id), 'id' => $id]);
    }

    public function form($tab, $id)
    {
        $class = RepDispatcher::dispatch($tab);
        return view('dict.form', ['model' => $class->getForm($id)]);
    }

    public function destroy($tab, $id)
    {
        $class = RepDispatcher::dispatch($tab);
        $result = $class->delete($id);
        if (is_array($result)) {
            if ($result['parent'] == 0) {
                return redirect()->action([self::class, 'index'], $tab)
                    ->with($result['success'] ? 'success' : 'failure',
                        $this->getMessage($class->name(), $id, !$result['success'], true));

            } else {
                return redirect()->action([self::class, 'subindex'], [$tab, $result['parent']])
                    ->with($result ? 'success' : 'failure',
                        $this->getMessage($class->name(), $id, !$result['success'], true));

            }
        }

    }

    public function subform($tab, $id)
    {
        $class = RepDispatcher::mlDispatch($tab);
        return view('dict.form', ['model' => $class->getSubForm($id), 'path' => $class->getPath($id),]);
    }

    public function store(Request $request, $tab, $id = 0)
    {
        $class = RepDispatcher::dispatch($tab);
        $result = $class->setData($request, $id);
        return redirect()->action([self::class, 'index'], $tab)->with($result ? 'success' : 'failure', $this->getMessage($class->name(), $id, !$result));
    }

    public function substore(Request $request, $tab, $id = 0, $parent = 0)
    {
        $class = RepDispatcher::mlDispatch($tab);
        $result = $class->setData($request, $id);
        return redirect()->action([self::class, 'subindex'], [$tab, $parent])->with($result ? 'success' : 'failure', $this->getMessage($class->name(), $id, !$result));
    }

    public function test($tab)
    {
        $class = RepDispatcher::dispatch($tab);
        var_dump($class->test());
    }

    protected function getMessage($name, $id, $fail = false, $delete = false): string
    {
        $message = $name . ": ";
        $message .= $fail ? " Failure" : "Success";
        if ($delete) {
            $message .= " to delete $id";
        } elseif ($id) {
            $message .= " to edit $id";
        } else {
            $message .= " to create";
        }

        return $message;
    }
}
