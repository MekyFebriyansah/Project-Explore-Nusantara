<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class blogAndaController extends Controller
{
    public function pindah_blogAnda()
    {   
        $userEmail = Auth::user()->email;
        $blogs = masukController::where('email', $userEmail)->get();
        return view ('blog.blogAnda', ['blogs' => $blogs]);
    }
}
