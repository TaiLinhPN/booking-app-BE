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
    public function store(Request $request){
        $lesson = new Lesson();
        $lesson->title = $request->input('title');
        $lesson->start_time = $request->input('start_time');
        $lesson->end_time = $request->input('end_time');
        $lesson->save(); 
        return response() -> json(['sucess'=>"thanhcong"],200);
    }
}