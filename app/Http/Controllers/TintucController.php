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
        $Posts_id = [];
        $Posts_id[] = $PostsNoibat->id;
        $quantam = Post::whereNotIn('id', $Posts_id)->where('danhmuc_id', 130)->where('published_at', '!=', null)->orderBy('id', 'desc')->take(4)->get();

        $mobile = Post::where('danhmuc_id', 124)->where('published_at', '!=', null)->orderBy('id', 'desc')->take(3)->get();

        $maytinh = Post::where('danhmuc_id', 125)->where('published_at', '!=', null)->orderBy('id', 'desc')->take(2)->get();
        $maytinhId = $maytinh->pluck('id')->toArray();
        $maytinh1 = Post::whereNotIn('id', $maytinhId)->where('danhmuc_id', 125)->where('published_at', '!=', null)->orderBy('id', 'desc')->take(4)->get();

        $mayanh = Post::where('published_at', '!=', null)->where('danhmuc_id', '=', 127)->orderBy('id', 'desc')->first();
        $Posts_idMayanh = [];
        $Posts_idMayanh[] = $mayanh->id;
        $mayanhs = Post::whereNotIn('id', $Posts_idMayanh)->where('danhmuc_id', 127)->where('published_at', '!=', null)->orderBy('id', 'desc')->take(4)->get();

        $game = Post::where('published_at', '!=', null)->where('danhmuc_id', '=', 129)->orderBy('id', 'desc')->first();
        $Posts_idGame = [];
        $Posts_idGame[] = $game->id;
        $games = Post::whereNotIn('id', $Posts_idGame)->where('danhmuc_id', 129)->where('published_at', '!=', null)->orderBy('id', 'desc')->take(4)->get();

        $xe = Post::where('published_at', '!=', null)->where('danhmuc_id', '=', 128)->orderBy('id', 'desc')->take(3)->get();

        $phukien = Post::where('published_at', '!=', null)->where('danhmuc_id', '=', 131)->orderBy('id', 'desc')->first();
        $Posts_idPhukien = [];
        $Posts_idPhukien[] = $phukien->id;
        $phukiens = Post::whereNotIn('id', $Posts_idPhukien)->where('danhmuc_id', 131)->where('published_at', '!=', null)->orderBy('id', 'desc')->take(4)->get();

        $docnhieunhat = Post::where('published_at', '!=', null)->where('noibat', '=', 1)->orderBy('id', 'desc')->take(7)->get();
        $video = Media::orderBy('id', 'desc')->first();
        return view('posts.home', [
            'PostsNoibat' => $PostsNoibat,
            'quantam' => $quantam,
            'mobile' => $mobile,
            'maytinh' => $maytinh,
            'maytinh1' => $maytinh1,
            'mayanh' => $mayanh,
            'mayanhs' => $mayanhs,
            'game' => $game,
            'games' => $games,
            'xe' => $xe,
            'phukien' => $phukien,
            'phukiens' => $phukiens,
            'video' => $video,
            'docnhieunhat' => $docnhieunhat,
        ]);
    }

    public function tintuc($slug)
    {
        $getdanhmuc = Danhmuc::where('slug', $slug)->first();
        $firstPost = Post::where('danhmuc_id', $getdanhmuc->id)
            ->where('published_at', '!=', null)
            ->orderBy('id', 'desc')
            ->first();

        $nextFourPosts = [];
        $nextFourPosts[] = $firstPost->id;

        // Lấy thêm 4 bài viết không trùng với bài đầu tiên
        $fourposts = Post::where('danhmuc_id', $getdanhmuc->id)
            ->where('published_at', '!=', null)
            ->whereNotIn('id', $nextFourPosts)
            ->orderBy('id', 'desc')
            ->take(4)
            ->get();

        // Lấy thêm 3 bài viết không trùng với bài đầu tiên và bài tiếp theo
        $remainingThreePosts = Post::where('danhmuc_id', $getdanhmuc->id)
            ->where('published_at', '!=', null)
            ->whereNotIn('id', $nextFourPosts)
            ->whereNotIn('id', $fourposts->pluck('id')->toArray())
            ->orderBy('id', 'desc')
            ->take(3)
            ->get();

        $baimoi = Post::where('danhmuc_id', $getdanhmuc->id)
        ->where('published_at', '!=', null)->where('noibat', '=', 1)
        ->orderBy('id', 'desc')
        ->take(5);

        return view('posts.tintuc', [
            'getdanhmuc' => $getdanhmuc,
            'firstPost' => $firstPost,
            'fourposts' => $fourposts,
            'remainingThreePosts' => $remainingThreePosts,
            'baimoi' => $baimoi,

        ]);
    }

    public function chitiettintuc($slug)
    {
        $baivietchitiet = Post::where('slug', $slug)->where('published_at', '!=', null)->first();
        $getdanhmuc = Danhmuc::where('id', $baivietchitiet->danhmuc_id)->first();
        $baivietlienquan = Post::orderBy('id', 'desc')->where('danhmuc_id', $getdanhmuc->id)->where('published_at', '!=', null)->take(3)->get();
        $baimoi = Post::where('danhmuc_id', $getdanhmuc->id)
        ->where('published_at', '!=', null)->where('noibat', '=', 1)
        ->orderBy('id', 'desc')
        ->take(5);
        return view('posts.chitiettintuc', [
            'baivietchitiet' => $baivietchitiet,
            'getdanhmuc' => $getdanhmuc,
            'baivietlienquan' => $baivietlienquan,
            'baimoi' => $baimoi,

        ]);
    }


    public function timkiempost(Request $request)
    {

        $post = Post::orderBy('id', 'desc')->where('published_at', '!=', null);
        if ($request->search) {
            $post =  $post->where(function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->search . '%')
                    ->orWhere('title', 'like', $request->search . '%')
                    ->orWhere('title', 'like', '%' . $request->search);
            });
        }
        $post = $post->paginate(16);

        // return count($post);
        $baimoi = Post::where('published_at', '!=', null)->where('noibat', '=', 1)
        ->orderBy('id', 'desc')
        ->take(5);

        return view('timkiem.index', [
            'post' => $post,
            'baimoi' => $baimoi,

        ]);
    }
}
