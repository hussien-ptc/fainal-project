<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;
class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

      //  $tasks = DB::table('tasks')->get();
$tasks= Task::orderBy('name','Desc')->paginate(2);
        return view('tasks', compact('tasks'));

    }
    public function store(Request $request){

//         DB::table('tasks')->insert([
// 'name' => $request-> name,
// 'created_at' => now(),
// 'updated_at' => now()
//     ]);
    $task = new Task;

    $task->name = $request->name;

    $task->save();

return redirect()->back();

    }
    public function delete ($id){
                // DB::table('tasks')->where('id','=',$id)->delete();
                Task::find($id)->delete();
                // Task::destroy($id);


                return redirect()->back();
    }

}
