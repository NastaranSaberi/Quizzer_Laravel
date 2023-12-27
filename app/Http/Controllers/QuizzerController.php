<?php

namespace App\Http\Controllers;

// use app\Http\Controllers\HomeController;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuizzerController extends Controller
{
    function index($id)
    {
        $question = Question::find($id);
        $number_of_questions = Question::count();

        return view("question",[
            "question" => $question,
            "number_of_questions" => $number_of_questions
        ]);
    }

    function check(Request $request)
    {
        $question_id = $request["question_id"];
        $user_choice_id = $request["answer"];
        $correct_choice_id = Answer::where('question_id','=',$question_id)
                                          ->where('is_true','=',1)->first()->id;

        if($user_choice_id == $correct_choice_id)
        {
            $user_score = Session::get("user_score");
            $user_score++;
            Session::put("user_score",$user_score);


        }


        $question_id++;

        $number_of_questions = Question::count();
        
        if($question_id > $number_of_questions)
        {
            return redirect("/final");
        }
        else
        {
            return redirect("/question/$question_id");
        }
        
    }
}
