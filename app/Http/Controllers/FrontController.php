<?php

namespace App\Http\Controllers;


use App\Post;
use App\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front');
    }

    public function blog()
    {
        $posts = Post::all();
        $categories = Category::all();
        return view('blog', compact('posts', 'categories'));
    }
}
