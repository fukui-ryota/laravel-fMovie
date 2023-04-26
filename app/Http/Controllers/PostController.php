<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // private $posts = [
    //     'list a',
    //     'list b',
    //     'list c',
    // ];

    public function index()
    {
        // $posts = Post::all();
        // $posts = Post::orderBy('created_at', 'desc')->get();
        $posts = Post::latest()->get();

        return view('index')
            ->with(['posts' => $posts]);
    }

    // URLから渡されたidを元に暗黙的にモデルのデータに結びつけてくれるImplicit Binding
    public function show(Post $post)
    {
        // $post = Post::findOrFail($id);

        return view('posts.show')
            ->with(['post' => $post]);
    }
}
