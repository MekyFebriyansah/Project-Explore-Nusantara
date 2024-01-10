<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detailBlogController extends Controller
{
    public function pindah_detailBlog()
    {
        return view ('detailBlog');
    }
}
