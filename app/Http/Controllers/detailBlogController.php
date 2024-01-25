<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Carbon\Carbon;
use Illuminate\Http\Request;

class detailBlogController extends Controller
{
    public function pindah_detailBlog($id)
    {
        Carbon::setLocale('id');
        $blog = blog::findOrFail($id);

        $blog->increment('lihat_blog');

        return view('blog.detailBlog', ['blog' => $blog]);
    }
}
