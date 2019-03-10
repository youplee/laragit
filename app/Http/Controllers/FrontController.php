<?php

namespace App\Http\Controllers;


use App\Post;
use App\Contact;
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

    public function storeContact(Request $request)
    {

        $nom = $request->get('nom');
        $email = $request->get('email');
        $message = $request->get('message');
        $newContact =  new Contact;
        $newContact->nom = $nom;
        $newContact->email = $email;
        $newContact->message = $message;
        $newContact->save();

        return 1;
    }

    public function contact()
    {

        return view('contact');
    }
    public function blog()
    {
        $posts = Post::all();
        $categories = Category::all();
        return view('blog', compact('posts', 'categories'));
    }
}
