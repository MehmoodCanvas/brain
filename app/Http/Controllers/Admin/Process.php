<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Questions;
use Illuminate\Support\Facades\Hash;

class Process extends Controller
{
    public function store_question(Request $request){
        $question= new Questions();
        $question->questions_question=$request->questions_question;
        $question->questions_answer=$request->questions_answer;
        $question->save();
        return redirect()->back()->with('success', 'Question Added!');
    }
    public function update_category(Request $request,$id){
        $category= Category::find($id);
        if($request->hasFile('category_image')){
            $file = $request->file('category_image');
            $filename = time().$file->getClientOriginalName();
            $file->move(public_path('storage/category'), $filename);
            $category->category_image=$filename;
        }
        $category->category_name=$request->category_name;
        $category->category_description=$request->category_description;
        $category->update();
        return redirect()->back()->with('success', 'Category Updated!');
    }
    public function store_promo(Request $request){
        $promo= new Promo();
        $promo->coupons_name=$request->coupons_name;
        $promo->coupons_discount=$request->coupons_discount;
        $promo->coupons_date=$request->coupons_date;
        $promo->save();
        return redirect()->back()->with('success', 'Promo Added!');
    }

    public function store_admin(Request $request){
        $user= new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->designation=$request->designation;
        $user->country=$request->country;
        $user->phone=$request->phone;

        $user->save();
        return redirect()->back()->with('success', 'Admin Added!');

    }
  

    public function insert_categoray(Request $request){
        $categorypage= Categorypage::find(1);
        if($request->hasFile('categorypages_image')){
            $file = $request->file('categorypages_image');
            $filename = time().$file->getClientOriginalName();
            $file->move(public_path('storage/categorypage'), $filename);
            $categorypage->categorypages_image=$filename;
        }
        $categorypage->categorypages_sec_one_main_heading=$request->categorypages_sec_one_main_heading;
        $categorypage->categorypages_sec_one_text=$request->categorypages_sec_one_text;
        $categorypage->categorypages_sec_two_heading=$request->categorypages_sec_two_heading;
        

        $categorypage->update();
        return redirect()->back()->with('success', 'Category Page Updated!');
    }

    public function communitypage(Request $request){
        $communitypage= Communitypage::find(1);
        if($request->hasFile('communitypages_banner_image')){
            $file = $request->file('communitypages_banner_image');
            $filename = time().$file->getClientOriginalName();
            $file->move(public_path('storage/communitypage'), $filename);
            $communitypage->communitypages_banner_image=$filename;
        }
        $communitypage->communitypages_sec_one_main_heading=$request->communitypages_sec_one_main_heading;
        $communitypage->communitypages_sec_one_main_heading_text=$request->communitypages_sec_one_main_heading_text;
        $communitypage->communitypages_sec_one_main_heading_button_text=$request->communitypages_sec_one_main_heading_button_text;
        $communitypage->communitypages_sec_one_main_heading_button_link=$request->communitypages_sec_one_main_heading_button_link;
        $communitypage->communitypages_sec_two_heading=$request->communitypages_sec_two_heading;
        $communitypage->communitypages_sec_two_heading_text=$request->communitypages_sec_two_heading_text;
        

        $communitypage->update();
        return redirect()->back()->with('success', 'Communty Page Updated!');
    }

    public function eventpage(Request $request){
        $eventpage= Eventpage::find(1);
        if($request->hasFile('eventpages_banner_image')){
            $file = $request->file('eventpages_banner_image');
            $filename = time().$file->getClientOriginalName();
            $file->move(public_path('storage/eventpage'), $filename);
            $eventpage->eventpages_banner_image=$filename;
        }
        $eventpage->eventpages_sec_one_main_heading=$request->eventpages_sec_one_main_heading;
        $eventpage->eventpages_sec_one_main_heading_text=$request->eventpages_sec_one_main_heading_text;
        $eventpage->eventpages_sec_two_main_heading=$request->eventpages_sec_two_main_heading;
        

        $eventpage->update();
        return redirect()->back()->with('success', 'Event Page Updated!');
    }

    public function aboutpage(Request $request){
        $aboutpage= Aboutpage::find(1);
        if($request->hasFile('aboutpages_banner_image')){
            $file = $request->file('aboutpages_banner_image');
            $filename = time().$file->getClientOriginalName();
            $file->move(public_path('storage/aboutpage'), $filename);
            $aboutpage->aboutpages_banner_image=$filename;
        }
        if($request->hasFile('aboutpages_sec_two_image')){
            $file = $request->file('aboutpages_sec_two_image');
            $filename = time().$file->getClientOriginalName();
            $file->move(public_path('storage/aboutpage'), $filename);
            $aboutpage->aboutpages_sec_two_image=$filename;
        }
        if($request->hasFile('aboutpages_sec_three_image')){
            $file = $request->file('aboutpages_sec_three_image');
            $filename = time().$file->getClientOriginalName();
            $file->move(public_path('storage/aboutpage'), $filename);
            $aboutpage->aboutpages_sec_three_image=$filename;
        }
        if($request->hasFile('aboutpages_sec_four_heading_image')){
            $file = $request->file('aboutpages_sec_four_heading_image');
            $filename = time().$file->getClientOriginalName();
            $file->move(public_path('storage/aboutpage'), $filename);
            $aboutpage->aboutpages_sec_four_heading_image=$filename;
        }
        
        $aboutpage->aboutpages_sec_one_main_heading=$request->aboutpages_sec_one_main_heading;
        $aboutpage->aboutpages_sec_one_main_heading_text=$request->aboutpages_sec_one_main_heading_text;
        $aboutpage->aboutpages_sec_two_heading=$request->aboutpages_sec_two_heading;
        $aboutpage->aboutpages_sec_two_image_name=$request->aboutpages_sec_two_image_name;
        $aboutpage->aboutpages_sec_two_image_text=$request->aboutpages_sec_two_image_text;
        $aboutpage->aboutpages_sec_three_image_name=$request->aboutpages_sec_three_image_name;
        $aboutpage->aboutpages_sec_three_image_text=$request->aboutpages_sec_three_image_text;
        $aboutpage->aboutpages_sec_four_heading=$request->aboutpages_sec_four_heading;
        $aboutpage->aboutpages_sec_four_heading_image_text=$request->aboutpages_sec_four_heading_image_text;
        $aboutpage->aboutpages_sec_five_heading=$request->aboutpages_sec_five_heading;
        $aboutpage->aboutpages_sec_five_heading_text=$request->aboutpages_sec_five_heading_text;
        $aboutpage->aboutpages_sec_six_heading_one=$request->aboutpages_sec_six_heading_one;
        $aboutpage->aboutpages_sec_six_heading_two=$request->aboutpages_sec_six_heading_two;
        $aboutpage->aboutpages_sec_six_button_text=$request->aboutpages_sec_six_button_text;
        

        $aboutpage->update();
        return redirect()->back()->with('success', 'Event Page Updated!');
    }

    public function contactpage(Request $request){
        $contactpage=  Contactpage::find(1);
        if($request->hasFile('contactpages_banner_image')){
            $file = $request->file('contactpages_banner_image');
            $filename = time().$file->getClientOriginalName();
            $file->move(public_path('storage/contactpage'), $filename);
            $contactpage->contactpages_banner_image=$filename;
        }
        $contactpage->contactpages_main_heading=$request->contactpages_main_heading;
        $contactpage->contactpages_main_heading_text=$request->contactpages_main_heading_text;
        $contactpage->contactpages_button_text=$request->contactpages_button_text;
        

        $contactpage->update();
        return redirect()->back()->with('success', 'Event Page Updated!');
    }
    public function store_event(Request $request){
        $event= new Events;
        if($request->hasFile('events_image')){
            $file = $request->file('events_image');
            $filename = time().$file->getClientOriginalName();
            $file->move(public_path('storage/events'), $filename);
            $event->events_image=$filename;
        }
        $event->events_title=$request->events_title;
        $event->events_description=$request->events_description;
        $event->events_location=$request->events_location;
        $event->events_time_from=$request->events_time_from;
        $event->events_time_to=$request->events_time_to;
        $event->events_date_from=$request->events_date_from;
        $event->events_date_to=$request->events_date_to;
        $event->save();
        return redirect()->back()->with('success', 'Event Added!');
    }

    public function blogs(Request $request){
        $blogs= new Blogs();
        if($request->hasFile('blogs_image')){
            $file = $request->file('blogs_image');
            $filename = time().$file->getClientOriginalName();
            $file->move(public_path('storage/blogs'), $filename);
            $blogs->blogs_image=$filename;
        }
        $blogs->blogs_heading=$request->blogs_heading;
        $blogs->blogs_description=$request->blogs_description;
        $blogs->blogs_slug=$request->blogs_slug;
        $blogs->save();
        return redirect()->back()->with('success', 'Event Added!');
    }
    public function updateListing(Request $request, $id) {
        $listing = Listing::find($id);
        if (!$listing) {
            return response()->json(['error' => 'Listing not found!'], 404);
        }


        $listing->listing_name = $request->name;
        $listing->listing_description = $request->description;
        $listing->listing_status = $request->status; 
        $listing->update();
    
        return response()->json(['success' => 'Listing updated successfully!']);
    }
    public function updateCommunityListing(Request $request, $id) {
        $communitylisting = Community_listing::find($id);
        if (!$communitylisting) {
            return response()->json(['error' => 'Listing not found!'], 404);
        }


        $communitylisting->community_listing_name = $request->name;
        $communitylisting->community_listing_description = $request->description;
        $communitylisting->community_listing_status = $request->status;
        $communitylisting->update();
    
        return response()->json(['success' => 'Listing updated successfully!']);
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
