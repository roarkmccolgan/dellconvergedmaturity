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
	$form_source = Input::get('form_source');
	$source = array(
		'C_emailAddress'=>Input::get('C_emailAddress'),
		'C_FirstName'=>Input::get('C_FirstName'),
		'C_LastName'=>Input::get('C_LastName'),
		'C_Company'=>Input::get('C_Company'),
		'C_Country'=>Input::get('C_Country'),
		'C_BusPhone'=>Input::get('C_BusPhone'),
		'form_source'=>Input::get('form_source','HP Tech Fit Quiz')
	);
	Session::put('source', $source);

	$return_visitor = Cookie::has('quiz_progress');
	$data = array(
		'class'=>'intro',
		'return_visitor'=>$return_visitor
	);
	return View::make('introduction',$data);
}));

Route::get('email/{userid}', function($userid)
{
	$user = User::find($userid);
	if(is_null($userid) || is_null($user)){
		return Redirect::to('/');
	}else{
		return View::make('emails.download2',array('fname'=>$user->fname, 'sname'=>$user->lname, 'userid'=>$userid));
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
Route::get('restart', function()
{
	if(Cookie::has('quiz_progress')){
		$progress_id = Cookie::get('quiz_progress');
		$progress = Progress::find($progress_id);
		if($progress) $progress->delete();
		
	}
	$cookie = Cookie::forget('quiz_progress');
	return Redirect::to('/')->withCookie($cookie);
});
Route::get('continue', array('before'=>'reload', function()
{
	if(!Cookie::has('quiz_progress')) return Redirect::to('/');
	
	$questions = Config::get('questions');
	$progress_id = Cookie::get('quiz_progress');
	$progress = Progress::find($progress_id);
	
	if(!$progress) return Redirect::to('/');
	
	$saved_progress = json_decode($progress->progress, true);
	
	$new_questions = array_merge_recursive($questions,$saved_progress);
	
	reset($new_questions);
	
	//add to session
	Session::put('questions', $new_questions);
	Session::put('source', json_decode($progress->source, true));
	
	foreach($new_questions as $section=>$pages){
		foreach($pages['pages'] as $page=>$details){
			if(!isset($details['done'])){
				$last_set['section'] = $section;
				$last_set['page'] = $page;
				break 2;
			}
		}
	}
	//must be finished?
	if(!isset($last_set)){
		return Redirect::to('/quiz/complete');
	}else{
		return Redirect::to('/quiz/'.$last_set['section'].'/'.$last_set['page']);
	}
}));