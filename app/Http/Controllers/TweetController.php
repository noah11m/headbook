<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;

class TweetController extends Controller
{
    public function store()
    {
        $attributes = request()->validate(["body" => "required|max:300"]);
        Tweet::create([
            "user_id" => auth()->id(),
            "body" => $attributes["body"]
        ]);
        flash("Posten har skapats!")->success();
        return redirect()->route("home");
    }

    public function index()
    {
        return view('tweets.index', [
           "tweets" => auth()->user()->timeline()
        ]);
    }

    public function destroy(Tweet $tweet)
    {
        $tweet->delete();
        flash("Posten har raderats!")->warning();
        return back();
    }
}
