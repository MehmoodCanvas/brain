<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Questions;
use App\Models\Category;

use Illuminate\Support\Facades\Hash;

class Process extends Controller
{
    public function store_question(Request $request){
    
        $question= new Questions();
        $question->questions_question=$request->questions_question;
        $question->questions_answer=json_encode($request->questions_answer);
        $question->questions_correct_answer=$request->questions_correct_answer;
        $question->questions_category=$request->questions_category;

        $question->save();
        return redirect()->back()->with('success', 'Question Added!');
    }

    public function update_question(Request $request,$id){
        $question= Questions::find($id);
        $question->questions_question=$request->questions_question;
        $question->questions_answer=$request->questions_answer;
        $question->save();
        return redirect()->back()->with('success', 'Question Updated!');
    }
    public function store_category(Request $request){
        $category= new Category(); 
        $category->categories_name=$request->categories_name;
        $category->categories_description=$request->categories_description;
        $category->save();
        return redirect()->back()->with('success', 'Category Updated!');
    }
 

    public function delete($path,$id){
        if($path =='question'){
            $question = Questions::find($id);
            
            $question->delete();
        }

        if($path =='category'){
            $category = Category::find($id);
            
            $category->delete();
        }
        if($path =='promo'){
            $promo = Promo::find($id);
            
            $promo->delete();
        }
        if($path =='blogs'){
            $blogs = Blogs::find($id);
            
            $blogs->delete();
        }
        if($path =='community-listing'){
            $communitylisting = Community_listing::find($id);
            
            $communitylisting->delete();
        }
        if($path =='listing'){
            $listing = Listing::find($id);
            
            $listing->delete();
        }

        if($path =='event'){
            $event = Events::find($id);
            
            $event->delete();
        }
        
        return redirect()->back()->with('success', 'Deleted!');
    }

}
