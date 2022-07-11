<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TeacherController extends Controller
{
    public function index(){
        $listTeacher = DB::table('teachers')->get();
        return response() -> json($listTeacher);
    }
}