<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Answer;

class AdminController extends Controller
{
    function index()
    {
        return view("admin");
    }

    function addQuestion(Request $request)
    {
        // Add questions
        $question = new Question();

        $question->text = $request["question_text"];
        $question->save();


        // Add answers
        $question_id = Question::all()->last()->id;
        $true_answer = $request["true_answer"];

        foreach($request["answer"] as $i => $answer)
        {
            $answers = new Answer();

            if($i+1 == $true_answer)
            {
                $is_true = 1;
            }
            else
            {
                $is_true = 0;
            }
            
            $answers->text = $answer;
            $answers->question_id = $question_id;
            $answers->is_true = $is_true;
            $answers->save();
        }

        return redirect("/");

    }
}
