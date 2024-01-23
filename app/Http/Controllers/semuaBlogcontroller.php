<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class semuaBlogController extends Controller
{
    public function pindah_semuaBlog()
    {
        $blogs = blog::all();

        return view('blog.semuaBlog', ['blogs' => $blogs]);
    }
    
}
