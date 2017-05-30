<?php 

use App\Models\Post;

if(! function_exists('set_active_route'))
{
	function set_active_route($route)
	{
		return Route::is($route) ? 'active' : '' ;
	}
}


if(! function_exists('get_nav'))
{
	function get_nav()
	{
		return Post::where(['online' => 1, 'type' => 'page'])->get();
	}
}


if(! function_exists('user_role'))
{
	function user_role($role)
	{
		if(session_status() == PHP_SESSION_NONE)
		{
			session_start();
		}
		return $_SESSION['auth']->$role;
	}
}

if(! function_exists('is_logged_in'))
{
	function is_logged_in()
	{
		if(session_status() == PHP_SESSION_NONE)
		{
			session_start();
		}
		return isset($_SESSION['auth']);
	}
}

if(! function_exists('flash'))
{
	function flash($message, $type='success')
	{
		session()->flash('notification.message', $message);
		session()->flash('notification.type', $type);
	}
}