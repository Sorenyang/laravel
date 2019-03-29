<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//get方法获取路由 （基础路由）
Route::get('basic', function () {
    return 'Hello basic';
});

// post方法设置路由（基础路由）
Route::post('basic2',function () {
	return "hello basic2";
});

//多请求路由
Route::match (['get','post'],'malty1',function (){
	return "hello get";
});

//多请求路由 
Route::any ('multy', function () {
	return 'hello any';
});

// 4.路由参数
// Route::get('user/{id}', function ($id) {
//     return 'User-id '.$id;
// });
// 可选参数
// Route::get('user/{name?}', function ($name = null) {
//     return 'user-name-'.$name;
// });

// Route::get('user/{name?}', function ($name = 'John') {
//     return 'user-name-'.$name;
// });
// 正则约束
// Route::get('user/{name}', function ($name) {
//     return 'user-name-'.$name;
// })->where('name', '[A-Za-z]+');
Route::get('user/{id}/{name}', function ($id,$name) {
    return 'user-id='.$id.'-name='.$name;
})->where(['id'  => '[0-9]+','name'=> '[A-Za-z]+']);
// 路由别名,可以用route函数生成别名对应的url
Route::get('user/profile', ['as' => 'profile', function () {
    return route('profile');
}]);

