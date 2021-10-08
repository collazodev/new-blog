<?php

namespace App\Http\Controllers\Admin;
use App\Models\post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class blogcontroller extends Controller
{
    //
    public function welcome_index(){
        $posts = post::all();
        //return $posts;
        return view('public.welcome');
    }
}
