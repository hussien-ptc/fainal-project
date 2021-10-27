<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Taskcontroller extends Controller
{
    public function index(){
        $tasks=[
            'task-1'=>'Maker your assignment',
            'task-2'=>'Check your phone',
            'task-3'=>'Watch a match'
            ];
         return view('contact',compact('tasks'));

    }
    public function huss(){

        $name = $_REQUEST['name'];
        return view('about',compact('name'));
    }
    public function hus(){
        $name ='Ahmed';
        return view('about',compact('name'));
    }

}
