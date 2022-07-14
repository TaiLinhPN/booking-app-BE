<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    public function teacher(){
        return $this->belongsTo(\App\Models\Teacher::class);
    }
    public function registations()
    {
        return $this->hasMany(\App\Models\Registration::class);
    }
}
