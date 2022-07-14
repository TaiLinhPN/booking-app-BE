<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lesson;
use Illuminate\Support\Facades\DB;
class LessonController extends Controller
{
    public function index(){
        $listLesson = Lesson::all();
        return response() -> json($listLesson);
    }
    
}