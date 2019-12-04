<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title = "Домашняя страница";
        $content = "Контент";
        return view('front.home', [
        
        'title'=>$title, 
        'content'=>$content 
        ]);
                    
//           return view ('front.home', compact('title', 'content'));   // другой способ записи        
                    
    }
}


// прошли три этапа ларавел.