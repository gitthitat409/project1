<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $data = [
            'categories' => Category::all(),
        ];
        return view('post.create', $data);
    }

    public function store(Request $request)
    {
        if($request->hasFile('thumbnail')){
            $path = $request->file('thumbnail')->store('thumbnail');
        }else{
            $path = "http://via.p;aceholder.com/150x150";
        }
        $title = $request->input('title');
        $category_id = $request->input('category_id');
        $user_id = auth()->user()->id;
        $detail = $request->input('detail');


        $post = new Post();
        $post->title = $title;
        $post->thumbnail = $path;
        $post->category_id = $category_id;
        $post->user_id = $user_id;
        $post->detail = $detail;



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
