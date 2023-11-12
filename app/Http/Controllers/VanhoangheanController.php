<?php

namespace App\Http\Controllers;

use App\Models\Danhmuc;
use Illuminate\Http\Request;

class VanhoangheanController extends Controller
{
    public function trangchu()
    {
        // $danhmuc = Danhmuc::where('danhmuc_id', 0)->get();
        // return $danhmuc;
        return view('posts.home', []);
    }
}
