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

    public function edit_task_form($id_task){
        $task = task::where('id_task', $id_task)->first();
        return view('edit_task', compact('task'));
    }

    public function update_task(Request $updating_req, $id_task){
        task::where('id_task', $id_task)
        ->update(array('task_title'=>$updating_req->task_title,
                       'task_description'=>$updating_req->task_descrip,
                       'task_start_time'=>$updating_req->task_start_time,
                       'task_end_time'=>$updating_req->task_end_time,
                       'briefTask_id'=>$updating_req->brief_id
                    ));
        return redirect("edit_brief/". $updating_req->brief_id);
    }
}
