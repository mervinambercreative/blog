<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){
        $todos = Todo::all();
        return view('todos')->with('todos', $todos);
    }

    public function delete($id){
        $todo = Todo::find($id);
        $todo->delete();
        return redirect()->back();
    }

    public function store(Request $request){
        /* dd($request->all()); */
        $todo = new Todo;

        $todo->todo = $request->todo;
        $todo->save();
        return redirect()->back();
    }
}
