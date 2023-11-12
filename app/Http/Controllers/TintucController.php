<?php

namespace App\Http\Controllers;
use App\Models\Danhmuc;
use App\Models\Fileupload;
use App\Models\Post;
use Google\Service\AnalyticsReporting\OrderBy;
use Google\Service\Blogger\Resource\Posts;
use App\Models\Luottruycap;
use App\Models\Media;
use App\Models\Banner;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use TheSeer\Tokenizer\Exception;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TintucController extends Controller
{
    public function trangchu()
    {
        $PostsNoibat = Post::where('published_at', '!=', null)->where('danhmuc_id', '=', 130)->orderBy('id', 'desc')->first();
        $Posts_id=[];
        $Posts_id[]=$PostsNoibat->id;
        $quantam = Post::whereNotIn('id',$Posts_id)->where('danhmuc_id',130)->where('published_at', '!=', null)->orderBy('id', 'desc')->take(4)->get();

        $mobile = Post::where('danhmuc_id', 124)->where('published_at', '!=', null)->orderBy('id', 'desc')->take(3)->get();

        $maytinh = Post::where('danhmuc_id', 125)->where('published_at', '!=', null)->orderBy('id', 'desc')->take(2)->get();
        $maytinhId = $maytinh->pluck('id')->toArray();
        $maytinh1 = Post::whereNotIn('id',$maytinhId)->where('danhmuc_id',125)->where('published_at', '!=', null)->orderBy('id', 'desc')->take(4)->get();

        $mayanh = Post::where('published_at', '!=', null)->where('danhmuc_id', '=', 127)->orderBy('id', 'desc')->first();
        $Posts_idMayanh=[];
        $Posts_idMayanh[]=$mayanh->id;
        $mayanhs = Post::whereNotIn('id',$Posts_idMayanh)->where('danhmuc_id',127)->where('published_at', '!=', null)->orderBy('id', 'desc')->take(4)->get();
        return view('posts.home', [
            'PostsNoibat' => $PostsNoibat,
            'quantam' => $quantam,            
            'mobile' => $mobile,
            'maytinh' => $maytinh,
            'maytinh1' => $maytinh1,
            'mayanh' => $mayanh,
            'mayanhs' => $mayanhs,

        ]);
    }
}
