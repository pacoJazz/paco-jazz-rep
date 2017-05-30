<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use App\Http\Requests\AdminPageFormRequest;

class AdminPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Post::whereType('page')->get();
        return view('admin.pages.index', compact('pages'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminPageFormRequest $request)
    {
        Post::create([
            'name' => $request->name,
            'content' => $request->content,
            'online' => $request->online,
            'type' => $request->type
        ]);

        flash("La page a bien été créée :)");

        return redirect()->route('pages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $page)
    {
        return view('admin.pages.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminPageFormRequest $request, Post $page)
    {
        $page->update([
            'name' => $request->name,
            'content' => $request->content,
            'online' => $request->online,
            'type' => $request->type
        ]);

        flash("La page #" . $page->id . " a bien été mise à jour :)");

        return redirect()->route('pages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $page)
    {
        $page->delete();
        flash("La page #" . $page->id . " a bien été supprimée :)", 'danger');
        return redirect()->route('pages.index');
    }
}
