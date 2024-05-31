<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class Postcontroller extends Controller
{
    //closures posts dan single post diambil dari routes/web.php
    public function index() {
        $title = '';
        if(request('category'))  {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        if(request('author'))  {
            $author = User::firstWhere('username', request('author'));
            $title = ' in ' . $author->name;
        }

        return view('posts', [
            'title' => 'All Posts' . $title,
            'active' => 'posts',
            // 'posts' => Post::all()
            // 'posts' => Post::with(['category','author'])->latest()->get() eager load dipindah ke model
            'posts' => Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString() // gapake get() lagi
        ]); //tambahin filter request yg prosesnya dari model Post
    }

    public function show(Post $post) {
        return view('post', [
            'title' => 'All Posts',
            'active' => 'posts',
            // 'post' => Post::find($slug) karena model Post ditarik ke param diatas
            'post' => $post
        ]);
    }
}
