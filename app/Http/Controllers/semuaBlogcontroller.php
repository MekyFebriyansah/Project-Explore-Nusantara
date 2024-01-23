<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class semuaBlogcontroller extends Controller
{
    public function pindah_semuaBlog()
    {
        return view ('blog.semuaBlog');
    }
}
