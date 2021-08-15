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

  
    public function update(Request $request, Todo $todo)
    {
        //
    }

  
    public function destroy($id)
    {
        Todo::where('id',$id)->delete();
    
        return redirect()->route('todo.show')
                        ->with('success','Task deleted successfully');
    }

    
    public function restore(Request $request){
        $id = $request->id;
        Todo::where('id', $id)->update(['completed'=> '0']);
        return redirect()->route('todo.show');

      }
}
