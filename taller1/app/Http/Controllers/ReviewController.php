<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Review;
use Illuminate\Routing\Redirector;

class ReviewController extends Controller
{
    /*public static $reviews = [
        ["id"=>"1", "title"=>"Mind blowing", "body"=>"aaaaaaaaa","rating"=>"5"],
        ["id"=>"2", "title"=>"Interesting", "autor"=>"b", "recipe"=>"tequila", "body"=>"bbbbbbb","rating"=>"1"],
        ["id"=>"3", "title"=>"Strong,powerful", "autor"=>"c", "recipe"=>"vodka", "body"=>"cccc","rating"=>"4"],
        ["id"=>"4", "title"=>"seet", "autor"=>"s", "recipe"=>"idk", "body"=>"sadafadsasd","rating"=>"3"]
    ];*/

    public function index(): View
    {
        $viewData = [];
        $viewData["title"] = "All Reviews";
        $viewData["reviews"] = Review::all();
        return view('review.index')->with("viewData", $viewData);
    }

    public function show(string $id) 
    {
        $viewData = [];
        try{
            $review = Review::findOrFail($id);
        }catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e){
            return redirect()->route("home.index");
        }
        $viewData["title"] = $review["title"]." - review";
        $viewData["review"] = $review;
        $viewData["id"]=$id;
        return view('review.show')->with("viewData", $viewData);
    }

    public function delete(string $id){
        $review = Review::findOrFail($id);
        $review->delete();
        
        return redirect()->route("review.index");
    }

    public function create(): View
    {
        return view('review.create');
    }

    public function save(Request $request)
    {
        $request->validate([
            "title" => "required",
            "body" => "required",
            "rating" => "required"
        ]);
        Review::create($request->only(["title","body","rating"]));

        return view('review.verification');
        
        //here will be the code to call the model and save it to the database
    }

    public function verification(): View{
        return view('verification.index');
    }

}
