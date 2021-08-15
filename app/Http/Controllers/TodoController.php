<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos=Todo::where('completed','0')->get();
        return view('todo.todo',compact('todos'));
    }

    public function complete(Request $request){
        $id = $request->id;
        Todo::where('id', $id)->update(['completed'=> '1']);
        return redirect()->route('todo.show');

      }
 
    public function store(Request $request)
    {
        $todo=Todo::create([
            'name'=>$request->todo,
            'completed'=>0,
        ]);

        return redirect('/todo');
    }

    public function show()
    {
        $todos=Todo::where('completed','1')->get();
        return view('todo.completed_tasks',compact('todos'));
    }

    
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        //
    }
}
