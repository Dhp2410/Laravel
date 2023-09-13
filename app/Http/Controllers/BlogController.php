<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function danhSachBlog(){
        return view('Admin.Blog.danhsachblog');
    }
}
