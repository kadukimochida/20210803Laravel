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
        $todo = TodoList::find($request->id);
        return view('index');
    }
    public function update(Request $request)
    {
        $this->validate($request,TodoList::$rules);
        $form = $request->all();
        TodoList::where('id',$request->id)->update($form);
        return redirect('index');
    }
}
