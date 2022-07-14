<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RegistrationController extends Controller
{
    public function index(){
        $listRegisration = Registration::all();
        return response() ->json($listRegisration);
    }
}