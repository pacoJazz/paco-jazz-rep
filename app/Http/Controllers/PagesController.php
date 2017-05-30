<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PagesController extends Controller
{
    public function show(Post $page)
    {
    	return view('pages.show', compact('page'));
    }
}
