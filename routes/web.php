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
/**
 * 在下面代码的代码中，我们为 get 方法传递了两个参数，第一个参数指明了 URL，
 * 第二个参数指明了处理该 URL 的控制器动作。get 表明这个路由将会响应 GET 请求，
 * 并将请求映射到指定的控制器动作上。比方说，我们向 http://sample.test/ 发出了一个请求，
 * 则该请求将会由 StaticPagesController 的 home 方法进行处理。
 * 我们将在下节创建 StaticPagesController，为你讲解控制器在收到请求后如何进行相关操作。
 */
Route::get('/','StaticPagesController@home')->name('home'); // 首页
Route::get('/help','StaticPagesController@help')->name('help'); // 帮助页
Route::get('/about','StaticPagesController@about')->name('about');// 关于页

Route::get('signup','UsersController@create')->name('signup');// 注册页
Route::resource('users','UsersController');//
Route::get('/users/{user}','UsersController@show')->name('users.show');//
