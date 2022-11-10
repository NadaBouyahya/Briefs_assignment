<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\brief;
use App\Models\Student;
use Illuminate\Http\Request;

class Brief_controller extends Controller
{

    //select all briefs :
    public function display_briefs(){
        $briefs = brief::all();
        return view('brief_list', compact('briefs'));
    }


    public function insert_brief(Request $brief_form_request){
        $briefs = new brief();
        $briefs->brief_title = $brief_form_request->brief_title;
        $briefs->livrasion_date = $brief_form_request->date_livraison;
        $briefs->creation_date = $brief_form_request->date_creation;
        $briefs->save();

        return redirect('brief_list');
    }

    public function edit_brief_view($id){
        $brief = brief::where('id_brief', $id)->first();
        return view('edit_brief', compact('brief'));
    }

    public function updated_brief(Request $updating_req, $id){
        brief::where('id_brief', $id)
        ->update(array('brief_title'=>$updating_req->brief_title,
                       'creation_date'=>$updating_req->date_creation,
                       'livrasion_date'=>$updating_req->date_livraison));
    }

    public function delete_brief($id_brf){
        $brief = brief::where('id_brief', $id_brf);
        $brief->delete();
        return redirect('brief_list');
    }

    // public function updated_brief(Request $updating_req, $id){
    //     $updated_brief = brief::where('id_brief', $id)->first();

    //     $updated_brief->brief_title = $updating_req->brief_title;
    //     $updated_brief->creation_date = $updating_req->date_creation;
    //     $updated_brief->livrasion_date = $updating_req->date_livraison;

    //     $updated_brief->save();
    // }

    public function attachBrief($brief_id, $student_id){
        $student = Student::where('id', $student_id)->first();
        $student->briefs()->attach($brief_id);
    }

    public function detachBrief($brief_id, $student_id){
        $student = Student::where('id', $student_id)->first();
        $student->briefs()->detach($brief_id);
    }
}
