<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RegistrationController extends Controller
{
    public function index(){
        $listRegisration = DB::table('registrations')->get();
        return response() ->json($listRegisration);
    }
}