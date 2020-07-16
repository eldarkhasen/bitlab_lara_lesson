<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return view('questions',compact('questions'));
    }

    public function show(Question $question)
    {
        return view('show-question',compact('question'));
    }
}
