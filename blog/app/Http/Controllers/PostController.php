<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //
    public function show()
    {
    $posts = Post::all();
//    dd($posts);  // как вардамп и смерть

        return view('front.post', compact('posts'));
            }






}
