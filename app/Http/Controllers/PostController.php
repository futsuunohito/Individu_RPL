<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Session;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::get();
        // // dd($posts);
        $posts = Post::all();
        $posts = $posts->sortByDesc('created_at');
        // dd($posts);     
        return view('post.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('post.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'content' => 'required'
        ]);
        Post::create([
        'title' => request('title'),
        'user_id' => auth()->id(),
        'categories_id' => request('categories_id'),
        'content' => request('content'),
        'slug' => str_slug(request('title'))
        ]);

        return redirect()->route('post.index')->withInfo('Entry has been successfully made');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $posts)
    {
        return view('post.show',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $posts)
    {
        $categories = Category::all();
        return view('post.edit', compact('posts','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Post $posts)
    {
        $posts->update([
            'title' => request('title'),
            'content' => request('content'),
            'categories_id' => request('categories_id')
        ]);
        return redirect()->route('post.index')->withInfo('Entry has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $posts)
    {
        $posts->delete();

        return redirect()->route('post.index')->withInfo('Entry deleted');
    }
}