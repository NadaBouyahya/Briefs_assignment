<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class students_controller extends Controller
{

    public function form_students($id){
        $id_promo = $id;
        return view('add_students', compact('id_promo'));
    }

    public function add_student(request $request){
        $new_student = new Student();
        $new_student->prénom = $request->fname;
        $new_student->nom = $request->lname;
        $new_student->email = $request->email;
        $new_student->promo_id = $request->promo_id;

        $new_student->save();
        return redirect("edit_form/{$new_student->promo_id}");

    }

    // public function show_students(){
    //     $students = Student::all();
    //     return view('studentsList', compact('students'));
    // }

    public function edit_student_view($id){
        $id_student = $id;
        $student = Student::where('id', $id_student)->first();
        return view('edit_form_student', compact('student'));
    }

    public function update_student(Request $request, $id_student){
        $updated_student = Student::where('id', $id_student)->first();
        $updated_student->nom = $request->lname;
        $updated_student->prénom = $request->fname;
        $updated_student->email = $request->email;
        $updated_student->promo_id = $request->promo_id;
        $updated_student->save();
        
        return redirect("/edit_form/{$updated_student->promo_id}");
    }

    public function delete_student($id_row){
        $target = student::where('id', $id_row)->get();
        $id_promo = $target[0]->promo_id;
        $target[0]->delete();
        return redirect("/edit_form/{$id_promo}");

    }

}
