<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    public function index(){
        $listStudent = DB::table('students')->get();
        return response() -> json($listStudent);
    }
}