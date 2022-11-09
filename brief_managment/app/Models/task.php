<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    // use HasFactory;
    protected $table = 'task';
    public function brief(){
        return $this->belongsTo(brief::class, 'briefTask_id', 'id_task');
    }
}
