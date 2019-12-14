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
// этот файл отвечает за маршрутизацию

//Мы вызываем класс Route (это путь  в адресной строке, по которомц мы перемещаемся) и вызываем у него статический метод  ::get,
//  в который мы передаем первым параметром патерн (наш шаблон), по которому нам нужно достучаться до приложения,
// чтобы по переходу по ссылке, нам передавалась какая-то вьюха


//

Route::get('/', function () {
    return view('welcome');
});

Route::get('/name', function () {
    return view('new-front.name');
});



Route::get('/blog', 'NameController@index');  //  @- это говорит сразу к какому методу обращаться,
//// в нашем случае в контроллере это индекс(наш метод)/ Прописываем все пути на нашем сайте
//

