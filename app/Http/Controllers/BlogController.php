<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    //
  

    public function pageBlog() :View
    {
        return view('blog');
    }
}
