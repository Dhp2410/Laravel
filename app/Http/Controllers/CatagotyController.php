<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    public function danhSachSanPham(){
        return view('Admin.catagory.danhsach');
    }
    
}
