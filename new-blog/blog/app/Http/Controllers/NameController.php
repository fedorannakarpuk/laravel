<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class NameController extends Controller
{
    //

    public function index(){
        $title = "Ссылка № 2";
        $content = "Ссылка № 1";
        return view ('new-front.name1', compact('title','content'));   // другой способ записи
    }


    public  function show(){
//        $userOur = DB::table('name_info')->get();
//        return view ('new-front.name1', compact('usersOur'));


        $users = DB::select('select * from name_info ');

        return view('new-front.name1', 'users');


    }


}
