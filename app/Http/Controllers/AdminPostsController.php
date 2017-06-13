<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use App\Http\Requests\AdminPostFormRequest;

class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!is_logged_in())
        {
            return redirect()->route('login_path');
        }
        $posts = Post::whereType('post')->paginate(4);
        return view('admin.posts.index', compact('posts'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminPostFormRequest $request)
    {
        Post::create([
            'name' => $request->name,
            'content' => $request->content,
            'online' => $request->online,
            'type' => $request->type
        ]);

        flash("L'article a bien été créé :)");

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminPostFormRequest $request, Post $post)
    {
        $post->update([
            'name' => $request->name,
            'content' => $request->content,
            'online' => $request->online,
            'type' => $request->type
        ]);

        flash("L'article #" . $post->id . " a bien été mis à jour :)");

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        flash("L'article #" . $post->id . " a bien été supprimé :)", 'danger');
        return redirect()->route('posts.index');
    }
}
