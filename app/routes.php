<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('before'=>'reload', function()
{
	return View::make('introduction',array('class'=>'intro'));
}));

Route::get('email/{userid}', function($userid)
{
	$user = User::find($userid);
	if(is_null($userid) || is_null($user)){
		return Redirect::to('/');
	}else{
		return View::make('emails.download',array('fname'=>$user->fname, 'sname'=>$user->lname, 'userid'=>$userid));
	}
});
Route::get('cookies', function()
{
	return View::make('legal.cookies');
});
Route::get('privacy', function()
{
	return View::make('legal.privacy');
});
Route::group(array('prefix' => 'quiz'), function()
{
	//Route::get('/', array('as'=> 'introduction', 'uses' => 'PageController@showIntro'));
	Route::post('{section}/page{pagenum}', array('uses' => 'AssesmentController@savePage'));
	Route::get('{section}/page{pagenum}', array('uses' => 'AssesmentController@getPage'));
	Route::get('complete', array('uses' => 'AssesmentController@getComplete'));
	Route::post('complete', array('uses' => 'AssesmentController@postComplete'));
	Route::get('download/{userid}', array('uses' => 'AssesmentController@getDownload'));
});