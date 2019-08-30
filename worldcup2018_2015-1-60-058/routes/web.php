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
    return view('home1');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home','PagesController@home');
Route::get('/stadium','PagesController@stadium');
Route::get('/team','PagesController@team');
Route::get('/player','PagesController@player');
Route::get('/match','PagesController@match');
Route::get('/story1','PagesController@story1');

Route::get('/admin','adminController@adminCall');
Route::get('/admin stadium','adminController@admin_stadium');

Route::post('/save_stadium','adminController@add_stadium');

Route::get('/admin stadium display','adminController@admin_stadium_display');
Route::get('/edit_stadium/{id}','adminController@edit_stadium');
Route::get('/delete_stadium/{id}','adminController@delete_stadium');
Route::post('/update_stadium/{id}','adminController@update_stadium');


Route::get('/admin_team','adminController@admin_team');
Route::post('/save_team','adminController@add_team');
Route::get('/admin_team_display','adminController@admin_team_display');
Route::get('/edit_team/{id}','adminController@edit_team');
Route::get('/delete_team/{id}','adminController@delete_team');
Route::post('/update_team/{id}','adminController@update_team');

Route::post('/save_player','adminController@add_player');
Route::get('/admin_player','adminController@admin_player');
Route::get('/admin_player_display','adminController@admin_player_display');
Route::get('/edit_player/{id}','adminController@edit_team');
Route::get('/delete_player/{id}','adminController@delete_team');
Route::post('/update_player/{id}','adminController@update_player');

Route::post('/save_match','adminController@add_match');
Route::get('/admin_match','adminController@admin_match');
Route::get('/admin_match_display','adminController@admin_match_display');
Route::get('/edit_match/{id}','adminController@edit_match');
Route::get('/delete_match/{id}','adminController@delete_match');
Route::post('/update_match/{id}','adminController@update_match');
