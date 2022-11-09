<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\brief;
use Illuminate\Http\Request;

class Brief_controller extends Controller
{
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


    }
}
