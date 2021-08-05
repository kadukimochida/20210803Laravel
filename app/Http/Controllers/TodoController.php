<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;

class TodoController extends Controller
{
    public function index()
    {
        $items = TodoList::all();
        return view('index',['items'=>$items]);
    }
    public function create(Request $request)
    {
        $this->validate($request,TodoList::$rules);
        $form = $request->all();
        TodoList::create($form);
        return redirect('/');
    }
    public function  edit(Request $request)
    {
        $todo = TodoList::where('id',$request->input('id'))->where('content',$request->input('content'))->get();
        return view('index');
    }
    public function update(Request $request)
    {
        $this->validate($request,TodoList::$rules);
        $form = $request->all();
        unset($form['_token']);
        TodoList::where('id',$request->input('id'))->update($form);
        return redirect('/');
    }
}
