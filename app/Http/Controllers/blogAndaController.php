<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class blogAndaController extends Controller
{
    public function pindah_blogAnda()
    {   
        $userEmail = Auth::user()->email;
        $blogs = blog::where('email', $userEmail)->get();
        return view ('blog.blogAnda', ['blogs' => $blogs]);
    }
}
