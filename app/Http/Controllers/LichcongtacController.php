<?php

namespace App\Http\Controllers;

use App\Models\Fileupload;
use App\Models\Lichcongtac;
use App\Models\Trucbaove;
use Carbon\Carbon;


use Illuminate\Http\Request;

class LichcongtacController extends Controller
{
  public function lichcongtac()
  {
    // $now = Carbon::now();

    // return $trucbaove;
    $thungay = Carbon::now()->format('l');
    if ($thungay == 'Monday' || $thungay == 'Wednesday' || $thungay == 'Friday' || $thungay == 'Sunday') {
      $trucbaove = Trucbaove::orderBy('id', 'desc')->first()->trucbaove;
    } else {
      $trucbaove = Trucbaove::orderBy('id', 'desc')->first()->ngayle;
    }

    // $year = Carbon::now()->year; //15
    // $month = Carbon::now()->month; //2
    // $day = Carbon::now()->day;
    $now = Carbon::now()->format('Y-m-d');
    $notnow = Carbon::now()->addDays(7)->format('Y-m-d');
    $lich = Lichcongtac::whereDate('ngay', '>=', $now)->whereDate('ngay', '<', $notnow)->orderBy('ngay', 'asc')->get();
    $check = array();
    $date = '';
    $array = array();
    $dem = 1;
    $maxdem = 0;

    foreach ($lich as $ls) {
      if ($dem === 1) {
        $maxdem += 1;
      }
      $ngay = ($ls->ngay)->format('d-m-Y');
      if ($ngay ==  $date) {
        $dem += 1;
      } else {
        $date = $ngay;
        $dem = 1;
      }
      $check['name'] = $ngay;
      $check['dem'] = $dem;
      $array[] = $check;
      $ls->dk = Fileupload::where('tenbang', 'lichcongtacs')->where('idtruong', $ls->id)->get();
    };
    $max = count($array);
    $i = 1;
    while ($i < $max) {
      if ($array[$i]['name'] == $array[$i - 1]['name']) {
        unset($array[$i - 1]);
      }
      $i++;
    }
    // return $trucbaove;
    return view('posts.lichcongtac', [
      'lich' => $lich,
      'array' => $array,
      'trucbaove' => $trucbaove,
    ]);
  }
  public function lich()
  {
    $now = Carbon::now();
    $tomorrow = Carbon::tomorrow();
    $lich = Lichcongtac::where([
      ['ngay', '>', $now],
      ['ngay', '<', $tomorrow]
    ])->orderBy('ngay', 'asc')->get();
    $lichtieptheo = Lichcongtac::where('ngay', '>', $now)->orderBy('ngay', 'asc')->take(1)->first();
    $lichtrongtuan = Lichcongtac::where('ngay', '>', $now)->orderBy('ngay', 'asc')->get();
    $check = array();
    $date = '';
    $array = array();
    $dem = 1;
    foreach ($lich as $ls) {
      $ngay = ($ls->ngay)->format('d-m-Y');
      if ($ngay ==  $date) {
        $dem += 1;
      } else {
        $date = $ngay;
        $dem = 1;
      }
      $check['name'] = $ngay;
      $check['dem'] = $dem;
      $array[] = $check;
    };
    for ($i = 1; $i < count($array); $i++) {
      if ($array[$i]['name'] == $array[$i - 1]['name']) {
        unset($array[$i - 1]);
      }
    }
    return view('lich.lich', [
      'lich' => $lich,
      'array' => $array,
      'lichtieptheo' => $lichtieptheo,
      'lichtrongtuan' => $lichtrongtuan
    ]);
  }
}
