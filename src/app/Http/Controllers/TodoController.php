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
      
       return view('todo.create'); // 追記

}

}


