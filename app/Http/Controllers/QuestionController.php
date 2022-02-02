<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Models\Category;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //

    public function index()

    {
        $categories=Category::all();
        $questions=Question::all();
        return view('question.index', compact('categories', 'questions'));
    }

    public function create()

    {
        $categories=Category::all();
        return view('question.create', compact('categories'));
    }


    public function store(QuestionRequest $request, Question $question)

    {
        $question->createQuestion($request->all());        
        return redirect('/question');
    }

    public function edit($id)
    {
        $question=Question::find($id);
        $categories=Category::all();
        return view('question.edit', compact('categories', 'question'));
    }


    public function update(Request $request, $id)

    { 
        Question::updateQuestion($request, $id);
        return redirect('/question');
    }


    public function destroy($id)

    {
        $question=Question::find($id);
        
        $question->delete();
        return redirect('/question');
    }
}
