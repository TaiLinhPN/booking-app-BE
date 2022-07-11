<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LessonController extends Controller
{
    public function index(){
        $listLesson = DB::table('lessons')->get();
        return response() -> json($listLesson);
    }
    
}