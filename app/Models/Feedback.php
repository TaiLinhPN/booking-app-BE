<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    public function student(){
        return $this->belongsTo(\App\Models\Student::class);
    }
    public function teacher(){
        return $this->belongsTo(\App\Models\Teacher::class);
    }
    
}
