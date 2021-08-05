<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;

class TodoController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function create(Request $request)
    {
        $items = TodoList::all();
        $this->validate($request,TodoList::$rules);
        $form = $request->all();
        TodoList::create($form);
        return view('add',['items'=>$items]);
    }
}
