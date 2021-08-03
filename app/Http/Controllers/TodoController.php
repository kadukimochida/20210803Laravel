<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;

class TodoController extends Controller
{
    public function index()
    {
        $items = TodoList::all();
        return view('index',['items' => $items]);
    }
    public function create(Request $request)
    {
        $this->validate($request,TodoList::$rules);
        TodoList::create($request->content);
        return redirect('/');
    }
}
