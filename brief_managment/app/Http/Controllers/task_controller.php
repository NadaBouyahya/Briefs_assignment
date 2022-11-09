<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\task;
use Illuminate\Http\Request;

class task_controller extends Controller
{
    public function display_task(){
        $tasks = task::all();
        return $tasks;
    }
}
