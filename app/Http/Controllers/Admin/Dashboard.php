<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Category;
use App\Models\Homepage;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{
    public function index(){
        $questions=DB::table('questions')->orderBy('questions_id','DESC')->get();
        
        return view('admin.index',compact('questions'));
    }


    public function questions(){
        $questions=DB::table('questions')->orderBy('questions_id','DESC')->join('categories','questions_category','=','categories_id')->get();
        $categories=DB::table('categories')->orderBy('categories_id','DESC')->get();

        return view('admin.questions',compact('questions','categories'));

    }

    public function categories(){
        $categories=DB::table('categories')->orderBy('categories_id','DESC')->get();

        return view('admin.category',compact('categories'));

    } 

    
   
    public function category(){
        $category= DB::table('category')->orderBy('category_id','DESC')->get();
        return view('admin.category',compact('category'));

    }
    
    public function edit_category($id){
        $category= DB::table('category')->where('category_id',$id)->first();
        return view('admin.edit-category',compact('category'));

    }
  

    public function edit_question_get($id){
        $questions=DB::table('questions')->where('questions_id',$id)->first();
        return response()->json($questions);

    }
}

