@extends('layout.Layoutlichcongtac')

@section('title', 'Lịch công tác')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<link rel="stylesheet" href="https://codepen.io/fancyapps/pen/Kxdwjj" />
<style>
#customers {
    border-collapse: collapse;
}

#customers td,
#customers th {
    border: 1px solid #A4A4A4;
    padding: 8px;
    background-color: #f2f2f2;
}

#customers tr:nth-child(even) {
    background-color: #f2f2f2;
}

#customers tr:hover {
    background-color: #ddd;
}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #4CAF50;
    color: white;
}
</style>
@section('content')

<div class="mt-10 mb-2 w-full text-right">

    <p class="text-gray-100">Trực bảo vệ : {{$trucbaove}}</p>
 
</div>

<div class="w-full bg-white " style="background-color:#30A6A6">
    <table id="customers" class=" w-full ">
        <tr class="w-full mt-4   ">
            <th class="sm:w-1/12  col-span-12">
                <div class="flex justify-center ">
                    <div class="mt-1 ml-1 sm:mt-2">
                        Ngày
                    </div>
                </div>
            </th>
            <th class=" sm:w-1/12 col-span-12">
                <div class="flex justify-center ">
                    <div class="mt-1 ml-1 sm:ml-0 sm:mt-2">
                        Giờ
                    </div>
                </div>
            </th>
            <th class="sm:w-2/12 col-span-12 ">
                <div class="flex justify-center  ">

                    <div class="mt-1 ml-1 sm:mt-2">
                        Nội dung
                    </div>
                </div>
            </th>

            <th class="sm:w-2/12 col-span-12">
                <div class="flex justify-center ">
                    <div class="mt-1 sm:mt-2">
                        Thành phần
                    </div>
                </div>
            </th>
            <th class="sm:w-2/12 col-span-12 ">
                <div class="flex justify-center ">

                    <div class="mt-1 ml-1 sm:mt-2">
                        Địa điểm
                    </div>
                </div>
            </th>
            <th class="sm:w-2/12 col-span-12">
                <div class="flex justify-center ">

                    <div class="mt-1">
                        Chủ trì
                    </div>
                </div>
            </th>
            <!-- <th class="sm:w-2/12 col-span-12">
                <div class="flex justify-center ">
                    <div class="mt-1">
                        Trực bảo vệ 
                    </div>
                </div>
            </th> -->
            <th class="sm:w-1/12  col-span-12">
                <div class="flex justify-center ">
                    <i class="fa fa-download mr-1" aria-hidden="true" style="font-size:25px;"></i>
                    Đính kèm
                </div>
            </th>
        </tr>


        {{$date = ''}}
        {{$check =''}}
        @if($lich)

        @foreach($lich as $lh)
        <tr class=" text-center">

            @if($date != $lh->ngay->format('d-m-Y'))
            @foreach($array as $arr)
            @if ( $lh->ngay->format('d-m-Y') == $arr['name'])
            <td rowspan=" {{$arr['dem']}}">
                <div class="text-white p-2 rounded-full" style="background-color:#1977bb">
                    <?php
            $timeEng = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            $timeVie = ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy', 'Một', 'Hai', 'Ba', 'Tư', 'Năm', 'Sáu', 'Bảy', 'Tám', 'Chín', 'Mười', 'Mười Một', 'Mười Hai'];
            $time = str_replace($timeEng, $timeVie, $lh->ngay->format('D d/m/Y'));

            ?>
                    {{$time}}
                </div>
            </td>
            @endif
            @endforeach
            @php $date = $lh->ngay->format('d-m-Y') @endphp
            @else
            @php $check = 'no' @endphp

            @endif

            <td>
                <div class="p-1 text-white rounded-full" style="background-color:#c9be11">
                    {{$lh->ngay->format('H:i')}}
                </div>
            </td>
            <td style="text-align: justify;">
                {!!$lh->noidung!!}
            </td>

            <td>
                {{$lh->thanhphan}}
            </td>
            <td>
                {{$lh->diachi}}
            </td>
            <td>
                {{$lh->giaymoi}}
            </td>
   

            <td>
                <div class="flex justify-center">
                    @if($lh->dk)
                    @foreach($lh->dk as $dk)
                    <a href="{{$dk->link}}">
                        <div>
                            <i class="fa fa-download mr-1" aria-hidden="true" style="font-size:25px;"></i>
                            <!-- <div>{{$dk}}</div> -->
                        </div>
                    </a>
                    @endforeach
                    @endif
                </div>

            </td>
        </tr>
        @endforeach
        @endif
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
<script>
$(document).ready(function() {
    $('.fancybox').fancybox({
        toolbar: false,
        smallBtn: true,
        iframe: {
            preload: false
        }
    })
    // Close current fancybox instance
    parent.jQuery.fancybox.getInstance().close();

    // Adjust iframe height according to the contents
    parent.jQuery.fancybox.getInstance().update();
});
</script>
<script type="text/javascript">
var today = new Date();

function reFresh() {
    window.open(location.reload(true))
}

window.setInterval("kiemtratg()", 30000);

function kiemtratg() {
    reFresh()
}
</script>
@endsection