<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Questions;
use App\Models\Category;

class Main extends Controller
{
    public function index(Request $request){
        $category_id = $request->category;
        $questions = Questions::where('questions_category',$category_id)->get(['questions_question as question', 'questions_answer', 'questions_correct_answer as CorrectanswerIndex']);
        if(count($questions) <= 0){
            return response()->json([
                'status' => 204,
                'message' => 'Request Succeed But No Data Avaiable',
            ]);
        }
        else{
            return response()->json([
                'status' => 200,
                'questions'=>$questions,
            ]);
        }
    }
}
