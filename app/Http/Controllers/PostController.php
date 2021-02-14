<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $data = [
            'post' => Post::all(), //Select*from user
        ];
        return view('post.index', $data);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $name = $request->input('title');
        $detail = $request->input('detail');

        $post = new Post();

        $post->title = $name;
        $post->detail = $detail;
        $post->thumbnail = 1;
        $post->user_id = 1;
        $post->category_id = 1;
        $post->save();

        return redirect('/post');
    }

    public function edit($id)
    //select*form where id
    {
        $post = Post::find($id);
        $data = [
            'post' => $post
        ];
        return view('post.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $name = $request->input('title');
        $detail = $request->input('detail');

        $post = Post::find($id);
        $post->title = $name;
        $post->detail = $detail;
        $post->save();

        return redirect('/post');
    }

    public function delete($id)
    //select*form where id
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('/post');
    }
}
