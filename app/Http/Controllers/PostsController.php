<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
    	$posts = Post::where(['online' => 1, 'type' => 'post'])->paginate(4);
    	return view('posts.index', compact('posts'));
    }


    public function show(Post $post)
    {
    	return view('posts.show', compact('post'));
    }
}
