<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FinalController extends Controller
{
    function index()
    {
        $number_of_questions = Question::count();
        $total_score = Session::get("user_score");
        
        return view("final",[
            "number_of_questions" => $number_of_questions,
            "total_score" => $total_score
        ]);
    }
}
