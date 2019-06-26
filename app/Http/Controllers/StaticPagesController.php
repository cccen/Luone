<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;

class StaticPagesController extends Controller
{
    public function home(User $user)
    {
        $feed_items=[];
        if(Auth::check()){
            $feed_items=Auth::user()->feed()->paginate(30);
        }
        return view('StaticPages/home',compact('feed_items','user'));
    }

    public function help()
    {
        return view('StaticPages.help');
    }

    public function about()
    {
        return view('StaticPages.about');
    }
}
