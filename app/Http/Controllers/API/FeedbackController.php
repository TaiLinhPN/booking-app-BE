<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FeedbackController extends Controller
{
    public function index(){
        $listFeedback = DB::table('feedback')->get();
        return response() ->json($listFeedback);
    }
}