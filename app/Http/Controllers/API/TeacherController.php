<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\DB;
class TeacherController extends Controller
{
    public function index(){
        $listTeacher = Teacher::all();
        return response() -> json($listTeacher);
    }
}