<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Disannghethuat;
use App\Models\Post;
use App\Models\Video;
use App\Models\Thuvienanh;
use App\Models\Danhmuc;
use App\Models\Luottruycap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Nova\Fields\Image;
use Carbon\Carbon;
class PostController extends Controller
{
    public function danhmuc($slug)
    {
        $danhmuc = Danhmuc::all();
        foreach ($danhmuc as $dm) {
            if (Danhmuc::where('danhmuc_id', $dm->id)->count() > 0) {
                $dm->con = Danhmuc::where('danhmuc_id', $dm->id)->get();
            };
        };
        return $danhmuc;
        return view('posts.trangchinh', [
            // 'chiTiet' => $chiTiet,
            // 'danhmuc' => $danhmuc,
            'danhmuc' => $danhmuc,
        ]);
    }

    public function trangchu()
    {
       

        // DANHMUC_ID = TAG_ID
        
        // Hoat dong tu phap id =22
        $baiviet_id = DB::table('post_tag')->where('tag_id', 22)->get();
       
        $arr = [];
        foreach ($baiviet_id as $bv) {
            $arr[]  = $bv->post_id;
        }
        $hdtuphapnb = Post::orderBy('id', 'desc')->whereIn('id', $arr)->where('published_at', '!=', null)->first();
        $hdtuphapnb->title = self::catchuoi($hdtuphapnb->title, 15) . "...";
        // if (strlen($hdtuphapnb->title) > 90) {
        //     $hdtuphapnb->title = substr($hdtuphapnb->title,0,70 ) . "...";
        //     // return strlen($hdtuphapnb->title);
        // }
        $hdtuphap = Post::orderBy('id', 'desc')->whereIn('id', $arr)->where('id', '!=', $hdtuphapnb->id)->where('published_at', '!=', null)->take(3)->get();
        foreach ($hdtuphap as $hdtp) {
            $hdtp->title = self::catchuoi($hdtp->title, 10) . "...";
            // if (strlen($hdtp->title) > 90) {
            //     $hdtp->title = substr($hdtp->title,0,70 ) . "...";
            // }
        }

        // Hoat dong co so id =24
        $baiviet_id = DB::table('post_tag')->where('tag_id', 24)->get();
        $arr = [];
        foreach ($baiviet_id as $bv) {
            $arr[]  = $bv->post_id;
        }
        $hdcosonb = Post::orderBy('id', 'desc')->whereIn('id', $arr)->where('published_at', '!=', null)->first();
        $hdcosonb->title = self::catchuoi($hdcosonb->title, 17) . "...";
        // $hdcosonb = Post::orderBy('id', 'desc')->whereIn('id', $arr)->first();

        // if (strlen($hdcosonb->title) > 90) {
        //     $hdcosonb->title = substr($hdcosonb->title,0,65 ) . "...";
        // }
        $hdcoso = Post::orderBy('id', 'desc')->whereIn('id', $arr)->where('id', '!=', $hdcosonb->id)->where('published_at', '!=', null)->take(3)->get();
        foreach ($hdcoso as $hdcs) {
            $hdcs->title = self::catchuoi($hdcs->title, 10) . "...";
            // if (strlen($hdcs->title) > 90) {
            //     $hdcs->title = substr($hdcs->title,0,70 ) . "...";
            // }
        }

        // Tin noi bat id =25
        $baiviet_id = DB::table('post_tag')->where('tag_id', 25)->get();
        $arr = [];
        foreach ($baiviet_id as $bv) {
            $arr[]  = $bv->post_id;
        }
        $tinnoibatnb = Post::orderBy('id', 'desc')->whereIn('id', $arr)->where('published_at', '!=', null)->first();
        $tinnoibat = Post::orderBy('id', 'desc')->whereIn('id', $arr)->where('id', '!=', $tinnoibatnb->id)->where('published_at', '!=', null)->where(function ($query) {
            $query->where('noibat', '2')
                ->orWhere('noibat', null);
        })->take(3)->get();
    
        // Tin tuc tu phap id =44
        $baiviet_id = DB::table('post_tag')->where('tag_id', 25)->get();
        $arr = [];
        foreach ($baiviet_id as $bv) {
            $arr[]  = $bv->post_id;
        }
        $tintuctuphap = Post::orderBy('id', 'desc')->whereIn('id', $arr)->where('published_at', '!=', null)->take(3)->get();
        // Chỉ đạo hướng dẫn id = 92
        $baiviet_id = DB::table('post_tag')->where('tag_id', 92)->get();
        $arr = [];
        foreach ($baiviet_id as $bv) {
            $arr[]  = $bv->post_id;
        }
  
        $chidaohuongdan = Post::whereIn('id', $arr)->where('published_at', '!=', null)->orderBy('id', 'desc')->take(3)->get();
     
        foreach ($chidaohuongdan as $cdhd) {
            
            // $cdhd->title = self::catchuoi($cdhd->title, 10) . "...";
            
        }
        //return  $chidaohuongdan;
        // Văn bản pháp luật mới dẫn id = 93
        $baiviet_id = DB::table('post_tag')->where('tag_id', 93)->get();
        $arr = [];

        foreach ($baiviet_id as $bv) {
            $arr[]  = $bv->post_id;
        }
       
        $vanbanphapluatmoi = Post::orderBy('id', 'desc')->whereIn('id', $arr)->where('published_at', '!=', null)->take(3)->get();
    
        foreach ($vanbanphapluatmoi as $vbplm) {
            $vbplm->title = self::catchuoi($vbplm->title, 11) . "...";
            // if (strlen($vbplm->title) > 90) {
            //     $vbplm->title = substr($vbplm->title,0,70 ) . "...";
            // }
        }
       
        // Thông báo id = 84
        $baiviet_id = DB::table('post_tag')->where('tag_id', 84)->get();
        $arr = [];
        foreach ($baiviet_id as $bv) {
            $arr[]  = $bv->post_id;
        }
        $thongbao = Post::orderBy('id', 'desc')->whereIn('id', $arr)->where('published_at', '!=', null)->take(5)->get();
        // return $thongbao;
        // Thông báo đấu giá id = 144
        $baiviet_id = DB::table('post_tag')->where('tag_id', 144)->get();
        $arr = [];
        foreach ($baiviet_id as $bv) {
            $arr[]  = $bv->post_id;
        }
        $thongbaodaugia = Post::orderBy('id', 'desc')->whereIn('id', $arr)->where('published_at', '!=', null)->take(5)->get();

        // phổ biến giao dục pháp luật dẫn id = 54
        $baiviet_id = DB::table('post_tag')->where('tag_id', 43)->get();
        $arr = [];
        foreach ($baiviet_id as $bv) {
            $arr[]  = $bv->post_id;
        }
        $phobienphapluat = Post::orderBy('id', 'desc')->whereIn('id', $arr)->where('published_at', '!=', null)->take(3)->get();
        foreach ($phobienphapluat as $pbpl) {
            if (strpos($pbpl->slug, '/') !== false) {
                $pbpl->slug = str_replace('/', '-', $pbpl->slug);
            }
            $pbpl->title = self::catchuoi($pbpl->title, 13) . "...";
            // if (strlen($pbpl->title) > 90) {
            //     $pbpl->title = substr($pbpl->title,0,70 ) . "...";
            // }
        }
        
        $baiviet_id = DB::table('post_tag')->where('tag_id', 181)->get();
        $arr = [];
        foreach ($baiviet_id as $bv) {
            $arr[]  = $bv->post_id;
        }
        $trungtamphaply = Post::orderBy('id', 'desc')->whereIn('id', $arr)->where('published_at', '!=', null)->take(3)->get();
        foreach ($trungtamphaply as $ttpl) {
            $ttpl->title = self::catchuoi($ttpl->title, 13) . "...";
            // if (strlen($pbpl->title) > 90) {
            //     $pbpl->title = substr($pbpl->title,0,70 ) . "...";
            // }
        }
        // return $trungtamphaply;
        $image = Thuvienanh::orderBy('id', 'desc')->first();
        $video = Video::orderBy('id', 'desc')->paginate(10);
        $danhsachvideo = [];
        foreach ($video as $p) {
            $chuoi = explode(".", $p->linkyoutube);
            if ($chuoi[1] == 'mp4') {
                $danhsachvideo[] = $p;
            }
        }
        $videodautien = $danhsachvideo[0];
        // return $tinnoibatnb;
        $Banner = Banner::where('hienthi',1)->orderBy('id', 'desc')->first();
        // lấy thời gian hiện tại 
      
        $datetime = Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString();
        $date = Carbon::createFromFormat('Y-m-d H:i:s',$datetime)->format('m/Y');
        // kiểm tra tháng hiện tại đã lưu chưa 
        $checkthang = Luottruycap::where('thoigian',$date)->first();
        if($checkthang){
            $checkthang->soluong=  $checkthang->soluong+1;
            $checkthang->save();
        }else{
            $taothang = new Luottruycap();
            $taothang->soluong= 1;
            $taothang->thoigian= $date;
            $taothang->save();
        }
        $infoLuottruycap= Luottruycap::orderBy('id', 'desc')->get();
        $tongluottruycap= 8000;
        foreach($infoLuottruycap as $truycap){
            $tongluottruycap = $tongluottruycap + $truycap->soluong;
        }
 
        return view('posts.trangchinh', [
            'tongluottruycap' => $tongluottruycap,
            'tongthangtruycap'=> $checkthang->soluong,
            'trungtamphaply' => $trungtamphaply,
            'tinnoibatnb' => $tinnoibatnb,
            'tinnoibat' => $tinnoibat,
            'hdtuphapnb' => $hdtuphapnb,
            'hdtuphap' => $hdtuphap,
            'tintuctuphap' => $tintuctuphap,
            'hdcosonb' => $hdcosonb,
            'hdcoso' => $hdcoso,
            'chidaohuongdan' => $chidaohuongdan,
            'vanbanphapluatmoi' => $vanbanphapluatmoi,
            'phobienphapluat' => $phobienphapluat,
            'danhsachvideo' => $danhsachvideo,
            'videodautien' => $videodautien,
            'thongbao' => $thongbao,
            'thongbaodaugia' => $thongbaodaugia,
            'image' => $image,
            'Banner' => $Banner
        ]);
    }

   
    public function trogiupphaplly()
    {   
        // Trợ giúp pháp lý trong hoạt động tố tụng id= 47
        $baiviet_id = DB::table('post_tag')->where('tag_id', 47)->get();
        $arr = [];
        foreach ($baiviet_id as $bv) {
            $arr[]  = $bv->post_id;
        }
        $tgplthdttnb = Post::orderBy('id', 'desc')->whereIn('id', $arr)->where('published_at', '!=', null)->first();
        $tgplthdttnb->title = self::catchuoi($tgplthdttnb->title, 15) . "...";
        $tgplthdtt = Post::orderBy('id', 'desc')->whereIn('id', $arr)->where('id', '!=', $tgplthdtt->id)->where('published_at', '!=', null)->take(3)->get();
        foreach ($tgplthdtt as $thdtt) {
            $thdtt->title = self::catchuoi($thdtt->title, 10) . "...";
        }
        return $tgplthdttnb;
        return view('trogiupphaply.trangchinh', [
            // 'hoatdongtgpl' => $hoatdongtgpl,
            'tgplthdttnb' => $tgplthdttnb,
            'tgplthdtt' => $tgplthdtt,
        ]);
    }
    
    public function catchuoi($chuoi, $dodai)
    {

        $mang = explode(' ', $chuoi);
        // return count($mang);
        $dodaimang = count($mang);
        if ($dodaimang > $dodai) {
            $dodaimang = $dodai;
        }
        $i = 0;
        $tieude = '';
        while ($i < $dodaimang) {
            $tieude = $tieude . ' ' . $mang[$i];
            $i = $i + 1;
        }
        return $tieude;
    }
}
