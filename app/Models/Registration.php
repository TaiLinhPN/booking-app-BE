<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    public function lesson(){
        return $this->belongsTo(\App\Models\Lesson::class);
    }
    public function teacher(){
        return $this->belongsTo(\App\Models\Teacher::class);
    }
    public function student(){
        return $this->belongsTo(\App\Models\Student::class);
    }
}
