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
    public function admins(){
        $admins=DB::table('users')->orderBy('id','DESC')->get();
        return view('admin.admins',compact('admins'));
    
    } 
    public function promo(){
        $promo= DB::table('coupons')->orderBy('coupons_id','DESC')->get();
        return view('admin.promo',compact('promo'));

    }
    
   
    public function category(){
        $category= DB::table('category')->orderBy('category_id','DESC')->get();
        return view('admin.category',compact('category'));

    }
    
    public function edit_category($id){
        $category= DB::table('category')->where('category_id',$id)->first();
        return view('admin.edit-category',compact('category'));

    }
  
    public function homepage(){

            $homepage= Homepage::first();
            return view('admin.homepage',compact('homepage'));
    }
    public function categorypage(){
        $categorypage= Categorypage::first();
        return view('admin.categorypage',compact('categorypage'));
    }
    public function communitypage(){
        $communitypage= Communitypage::first();
        return view('admin.communitypage',compact('communitypage'));
    }

    public function eventpage(){
        $eventpage= Eventpage::first();
        return view('admin.eventpage',compact('eventpage'));
    }
    public function aboutpage(){
        $aboutpage= Aboutpage::first();
        return view('admin.aboutpage',compact('aboutpage'));
    }
    public function contactpage(){
        $contactpage= Contactpage::first();
        return view('admin.contactpage',compact('contactpage'));
    }
    public function events(){
            
        $events= Events::get();
        return view('admin.events',compact('events'));
    }
    public function blogs(){
        $blogs= Blogs::get();
        return view('admin.blogs',compact('blogs'));
    }
    public function allblogs() {
        $blogs = Blogs::latest()->paginate(10);
        return view('admin.all-blogs', compact('blogs'));
    }
    public function listing() {
        $listing = Listing::get();
        return view('admin.listing', compact('listing'));
    }
    public function communitylisting() {
        $communitylisting = Community_listing::get();
        return view('admin.community-listing', compact('communitylisting'));
    }


    public function edit_question_get($id){
        $questions=DB::table('questions')->where('questions_id',$id)->first();
        return response()->json($questions);

    }
}

