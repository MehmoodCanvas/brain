<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Questions;

class Main extends Controller
{
    public function index(){
        $questions = Questions::all();
        if(count($questions) <= 0){
            return response()->json([
                'status' => 204,
                'message' => 'Succeed No Data Avaiable',
            ]);
        }else{
            return response()->json([
                'status' => 200,
                'data'=>$questions,
            ]);
        }
       
    }
}
