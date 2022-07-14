<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    public function index(){
        $listStudent = Student::all();
        return response() -> json($listStudent);
    }
}
