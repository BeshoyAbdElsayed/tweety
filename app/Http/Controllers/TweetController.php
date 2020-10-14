<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Support\Facades\Auth;


class TweetController extends Controller
{
    public function index()
    {
        return view('home', [
            'tweets' => Auth::user()->timeline()
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'body' => 'required|max:256'
        ]);
        Tweet::create([
            'user_id' => Auth::id(),
            'body' => $attributes['body']
        ]);

        return redirect('home');
    }
}
