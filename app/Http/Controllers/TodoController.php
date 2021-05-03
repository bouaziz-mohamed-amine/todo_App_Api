<?php

namespace App\Http\Controllers;

use App\Http\Resources\TodoResource;
use App\Http\Resources\Todos;
use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{


    public function index()
    {



    }
    public function show($id){
        $todo= Todo::where( 'id','=',$id)->get();

        return new TodoResource($todo);
    }


}



