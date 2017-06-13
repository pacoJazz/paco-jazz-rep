<?php

Route::resource('admin/posts', 'AdminPostsController');

Route::resource('admin/pages', 'AdminPagesController');

Route::get('/', [
	'as' => 'welcome',
	'uses' => 'WelcomesController@welcome'
]);


Route::get('/posts', [
	'as' => 'posts_path',
	'uses' => 'PostsController@index'
]);

Route::get('posts/{post}', [
	'as' => 'post_path',
	'uses' => 'PostsController@show'
]);


Route::get('pages/{page}', [
	'as' => 'page_path',
	'uses' => 'PagesController@show'
]);


Route::get('/users/login', [
	'as' => 'login_path',
	'uses' => 'LoginsController@login'
]);


Route::post('/users/effective_login', [
	'as' => 'effective_login',
	'uses' => 'LoginsController@effective_login'
]);


Route::get('/users/logout', [
	'as' => 'logout_path',
	'uses' => 'LoginsController@logout'
]);


Route::get('/email', [
	'as' => 'forget_path',
	'uses' => 'ResetPasswordController@forget'
]);


Route::post('/send-email', [
	'as' => 'send_path',
	'uses' => 'ResetPasswordController@send_link'
]);

Route::get('/reset-id/{reset_id}/reset-token/{reset_token}', [
	'as' => 'reset_path',
	'uses' => 'ResetPasswordController@reset_link'
]);

Route::get('/password/recovery/{user}', [
	'as' => 'recovery',
	'uses' => 'ResetPasswordController@recovery'
]);

Route::put('/password/effective_recovery/{user}', [
	'as' => 'eff_recovery',
	'uses' => 'ResetPasswordController@effective_recovery'
]);

