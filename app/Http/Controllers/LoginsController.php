<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginFormRequest;
use App\Models\User;

class LoginsController extends Controller
{
    public function login()
    {
    	return view('users.login');
    }


    public function effective_login(LoginFormRequest $request)
    {
    	$user = User::whereEmail($request->email)->first();

    	if($user && password_verify($request->password, $user->password))
    	{
    		session_start();
    		$_SESSION = [
    			'auth' => $user
    		];
    		if($user->role == 'admin')
    		{
                flash('Vous êtes maintenant connecté(e) :)');
    			return redirect()->route('posts.index');
    		}
    	}
    	else
    	{
    		flash('Mauvais email ou mot de passe','danger');
    		return redirect()->back();
    	}
    }

    public function logout()
    {
    	session_start();
    	session_unset();
    	session_destroy();

    	session_start();

    	flash('Vous êtes maintenant déconnecté(e)', 'info');

    	return redirect()->route('login_path');
    }
}
