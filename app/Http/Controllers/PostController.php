<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('updated_at','desc')->paginate(5);
        return view('post/index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('post/create');
    }

    public function store(Request $request)
    {
        Post::create(
            $request->validate([
                'title' => ['required', 'max:90'],
                'description' => ['required'],
            ])
        );
        return Redirect::route('posts.index');
    }


    public function edit($id)
    {
        $post = Post::find($id);
        return view('post/edit', compact('post'));
    }


    public function update($id, Request $request,)
    {
        $request->validate([
            'title' => ['required', 'max:90'],
            'description' => ['required'],
        ]);
        $post = Post::find($id);
        // Getting values from the blade template form
        $post->title =  $request->get('title');
        $post->description = $request->get('description');
        $post->save();
        return Redirect::route('posts.index');
    }


    public function destroy($id)
    {
        $post=Post::find($id);
        $post->delete();
        return Redirect::route('posts.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */

}
