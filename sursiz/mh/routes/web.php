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
    event(new \App\Events\UserActivation(App\User::find(1)));
    return 'done';
});


Route::get('/user/active/email/{token}','PagesController@activation' )->name('activation.account');




//Route::get('/users/{id}/{name}', function($id, $name){
//    return 'This is user '.$name.' with an id of '.$id;
//});


Route::get('/', 'PagesController@index');
Route::get('/sitemap', function () {
    // SitemapGenerator::create('https://sursiz.ir/')->writeToFile('sitemap.xml');
    SitemapGenerator::create('https://sursiz.ir')
   ->getSitemap()

    ->writeToFile('sitemap.xml');
    return ('sucess, created sitemap :)');

});

Route::get('/about', 'PagesController@about');
//Route::get('/about', 'PagesController@about');
Route::get('/services' , 'PagesController@services');
//Route::get('posts/{category}','CategoryController@index');
Route::resource('posts', 'PostsController');

Route::resource('categories','CategoryController');
Route::resource('comments','CommentController');
Route::resource('contact','ContactController');
Route::resource('footer','FooterController');
Route::resource('blog','BlogController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::get('/search','PostsController@search');


// Add sitemap route

