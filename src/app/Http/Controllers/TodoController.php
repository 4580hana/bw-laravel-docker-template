<?php
// ToDo一覧表示機能
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todo = new Todo();
        $todos = $todo->all();

        return view('todo.index', ['todos' => $todos]);
      

    }
    public function create()
    {
        
        return view('todo.create'); 

    }


        public function store(Request $request)
    {
        $inputs = $request->all(); // 変更
        dd($inputs); // 追記

        $todo = new Todo();
        $todo->fill($inputs); // 変更
        $todo->save();

        return redirect()->route('todo.index');
    }

}


