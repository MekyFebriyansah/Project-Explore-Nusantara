<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tambahBlogController extends Controller
{
    public function pindah_tambahBlog() 
    {
        return view("blog.tambahBlog");
    }
}
