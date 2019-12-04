<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function index(){
        $users = ['Bla', 'Jhon', 'Alex'];
//        dd($users);   оманда ввыводит наш массив, показывает код ошибки
        return view('front.users', [
        
        'users'=>$users
 
        ]);
                    

                    
    }
    
    
}
