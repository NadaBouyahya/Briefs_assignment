<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // use HasFactory;
    public function briefs(){
        return $this->belongsToMany(brief::class, 'students_briefs', 'brief_id', 'student_id');
    }
}
