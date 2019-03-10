<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{

    public function create($request request)
    {

    	$contact = $request->get('contact');

    	return 1;
    }
}
