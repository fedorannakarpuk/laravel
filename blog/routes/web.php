<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');//  @- это говорит сразу к какому методу обращаться, в нашем случае в контроллере это индекс(наш метод)/ Прописываем все пути на нашем сайте
Route::get('/users', 'UsersController@index');//  
Route::get('/posts', 'PostController@show');//

 
// get - метод, по которому передаем данные  (GET   ИЛИ POST)
//   /рщьу - путь в адресной строке
// HomeController - класс
// index - метод (action)
// dct hjens [hfybv d цуи]