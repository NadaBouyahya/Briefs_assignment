<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Http\Request;

class promotions_controller extends Controller
{
    public function create(){
        $promotions = Promotion::all();
        return view('list', compact('promotions'));
    }

    public function insert_form(){
        return view('form');
    }

    public function insert_data(Request $add){
        $promotions = new Promotion();
        $promotions->name = $add->name;
        $promotions->save();

        return redirect('/index');
    }

    public function selectBy_id($id_prom){
        $new_data = Promotion::select(
            'promotions.id as id_promotion',
            'students.id as id_student',
            'name',
            'prénom',
            'nom',
            'email'
        )
        ->leftJoin('students', 'promotions.id', '=', 'students.promo_id')
        ->where('promotions.id', $id_prom)
        ->get();

        return view('edit_form', compact('new_data'));
    }
    // public function selectBy_id($id_parametre){
    //     $promotion = Promotion::where('id', $id_parametre)->get();
    //     return view('edit_form', compact('promotion'));
    // }

    public function save_edit(Request $request, $id){
        $promotion = Promotion::where('id', $id)->first();
        $promotion->name = $request->name;
        $promotion->save();

        return redirect('/index');

    }

    public function search_data($name=null){
        if($name == null){
            $promotion = Promotion::all();
            return view('search_result', compact('promotion'));
        }

        else{
            $promotion = Promotion::where('name', 'like',  "%$name%")->get();
            return view('search_result', compact('promotion'));
        }

    }

    public function delet_promotion($id_promo){
        $targeted_promo = Promotion::where('id', $id_promo);
        $targeted_promo->delete();
        return redirect('/index');
    }

}


