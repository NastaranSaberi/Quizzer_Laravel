<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{
    function index()
    {
        Session::put("user_score",0);
        $number_of_questions = Question::count();

        return view("index",[
            "number_of_questions" => $number_of_questions,
        ]);
    }
}
