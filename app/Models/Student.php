<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Laravel\Sanctum\HasApiTokens;
class Student extends Model implements ShouldQueue
{
    use HasApiTokens, HasFactory, Notifiable;

    use HasFactory;
    protected $table = "students";
    protected $fillable = ['name', 'email', 'password'];
    public function feedbacks()
    {
        return $this->hasMany(\App\Models\Feedback::class,);
    }
    

}