<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TodoResource;
use App\Http\Resources\Todos;
use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * @return Todos
     */
    public function index()
    {
        $todos = Todo::all();

        return new Todos($todos);
    }

    /**
     * @param Request $request
     * @return TodoResource
     */
    public function store(Request $request)
    {

        $request->validate([
            'todo_description'=> 'required' ,
            'todo_responsible' => 'required',
            'todo_priority' =>'required',
            'todo_completed'=>'required',

        ]);
        $todo = new Todo();
        $todo->description=$request->get('todo_description');
        $todo->responsible=$request->get('todo_responsible');
        $todo->priority=$request->get('todo_priority');
        $todo->complited=$request->get('todo_completed');
        $todo->save();

        return new TodoResource($todo);
    }

    /**
     * @param $id
     * @return TodoResource
     */
    public function show($id)
    {
        $todo= Todo::where( 'id','=',$id)->get();

        return new TodoResource($todo);
    }

    /**
     * @param Request $request
     * @param $id
     * @return TodoResource
     */
    public function update(Request $request, $id)
    {
        $todo=Todo::find($id);
        /*
         * $request->validate([
                todo_description => 'required',
                todo_responsible => 'required',
                todo_priority => 'required',
                todo_completed => 'required' ,
        ]);
         */
        $todo->description=$request->get('todo_description');
        $todo->responsible=$request->get('todo_responsible');
        $todo->priority=$request->get('todo_priority');
        $todo->complited=$request->get('todo_completed');
        $todo->save();

        return  new TodoResource($todo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
