<?php

namespace App\Http\Controllers;


use App\Post;
use App\Contact;
use App\Category;
use App\Menu;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    
    public $menu;

    public function __construct() {
       
        $this->menu = Menu::all();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front', ['menu' => $this->menu]);
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

        return view('contact', ['menu' => $this->menu]);
    }
    public function blog($id=null)
    {
        
           $posts = $id ? Category::find($id)->posts : Post::all();
       
        $categories = Category::all();
        return view('blog', [
                             'menu' => $this->menu,
                             'posts' => $posts, 
                             'categories' => $categories]
                   );
    }
}
