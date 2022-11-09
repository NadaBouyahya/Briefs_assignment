<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\task;
use Illuminate\Http\Request;

class task_controller extends Controller
{
    // public function display_task(){
    //     $tasks = task::all();
    //     return $tasks;
    // }

    public function add_task_view($id_brief){
        $id_brief_task = $id_brief;
        return view('addTask_form', compact('id_brief_task'));
    }

    public function insert_task(Request $add_req){
        $new_task = new task();
        $new_task->task_title = $add_req->task_title;
        $new_task->task_description = $add_req->task_descrip;
        $new_task->task_start_time = $add_req->task_start_time;
        $new_task->task_end_time = $add_req->task_end_time;
        $new_task->briefTask_id = $add_req->brief_id;
        $new_task->save();

        return redirect("edit_brief/{$new_task->briefTask_id}");

    }
}
