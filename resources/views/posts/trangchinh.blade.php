@extends('layout.trangchu')
@section('content')
<main id="testthu" class=" w-full px-2 sm:pt-4 pt-2 background-pc2">
    <div class="set-web mx-auto grid grid-cols-12">
        <!-- LEFT WEB -->
        <div class="sm:col-span-9 col-span-12 grid grid-cols-12 mb-2">
            <div class="container col-span-12 grid grid-cols-12">
                <div class=" col-span-12 grid grid-cols-12 ">
                    <div class="product col-span-12 grid grid-cols-12">
                        <div class="sm:col-span-7 col-span-12 sm:px-2 px-0 bg-white">
                            <div class="image w-full">
                                <div class="tinmoi-img-l" style="height: 308px;">
                                    <a>
                                        <img v-bind:src=" '/storage/' + linkanh" alt="" style="height:100%"
                                            class="w-full h-full">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="product-content sm:pr-4 pr-0 sm:mt-0  sm:col-span-5 col-span-12 sm:px-2 px-0">
                            <a href="/danh-muc/Tin-noi-bat">
                                <div class="text-blue-600 text-center " style="color:rgba(2, 57, 119, 0.8);">
                                    <p class="font-bold text-center text-white pt-1"
                                        style="background-image: url(/storage/bg-red.jpg); backround-size: cover; height:30px; font-siz: 17px;">
                                        TIN NỔI BẬT</p>
                                </div>
                            </a>
                            <div class="wrapper-color px-2 h-tang bg-white" style="border:solid 1px #C7C7C7; ">
                                <div class="list-color">
                                    <!-- <p class="color-text">@{{ getProduct.title }}</p> -->
                                    <div class="pt-2" style="border-top:solid 1px #C7C7C7;"
                                        v-for="(item, index) in listProductDetail">
                                        <a :href="'/chi-tiet-tin-tuc/'+item.slug">
                                            <p class="text-justify font-medium" style="font-size: 14px;"
                                                v-on:mouseover='doianh(item.thumbnail, item.title)'>@{{ item.title }}
                                            </p>
                                            <p class="text-xs font-medium text-gray-500 ">Lượt xem: @{{ item.luotxem}}
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- RIGHT WEB -->

        <div class="sm:col-span-3 col-span-12 dm:px-2 px-0  ">
            <div class="border-2 border-gray-100 " style="    height: 88%;">

                <a href="/danh-muc/Thong-bao">
                    <div class="text-blue-600 text-center bg-gray-200 " style="color:rgba(2, 57, 119, 0.8);">
                        <p class="font-bold text-red-600 pt-1"
                            style="height: 30px; border-top: 2px solid #da2625;border-bottom:solid 1px #C7C7C7;border-right:solid 1px #C7C7C7;border-left:solid 1px #C7C7C7; font-siz: 17px;">
                            THÔNG BÁO</p>
                    </div>
                </a>
                <div class="bg-white " style="border:solid 1px #C7C7C7; height: 100%;">
                    <div class="">
                        <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2" direction="up"
                            height="250px">
                            @foreach ($thongbao as $tb)
                            <div class="p-2 mb-1 grid grid-cols-12"
                                style="font-size: 14px;border-bottom: dashed 1px #75bdcd ">
                                <div class="col-span-1 pt-1">
                                    <img src="/images/notify-icon.gif" alt="">
                                </div>
                                <div class="col-span-10">
                                    <div>
                                        <div class=" mb-1 text-justify">
                                            <span class=" inline" style=""><a
                                                    href="/chi-tiet-tin-tuc/{{$tb->slug}}">{{$tb->title}} </a> <img
                                                    class="inline" src="/images/news.gif" alt=""></span>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            @endforeach @foreach ($thongbaodaugia as $tbdg)
                            <div class="p-2 mb-1 grid grid-cols-12"
                                style="font-size: 14px;border-bottom: dashed 1px #75bdcd ">
                                <div class="col-span-1 pt-1">
                                    <img src="/images/notify-icon.gif" alt="">
                                </div>
                                <div class="col-span-10">
                                    <div class="float-left">
                                        <a href="/chi-tiet-tin-tuc/{{$tbdg->slug}}">
                                            <div class=" mb-1 ">
                                                <p class="text-justify" style="">{{$tbdg->title}}</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="">
                                        <img src="/images/news.gif" alt="">
                                    </div>
                                </div>

                            </div>
                            @endforeach
                        </marquee>
                    </div>
                </div>
            </div>
            <!-- <div id="menu">
                menu dọc
                <div class="uldoc mx-auto">
                    @foreach ($menuleft as $dm)
                    <div class="lidoc font-bold">
                        <a href="/danh-muc/{{$dm['slug']}}" class="text-white font-bold">{{$dm['label']}}</a> @if ($dm['kiemtra']==1) @include('layout.childleft', ['danhmuc' => $dm['children']]) @endif
                    </div>
                    @endforeach
                </div>
            </div> -->
        </div>
    </div>

    <div class="grid grid-cols-10 sm:pb-4 pb-2 pt-2">
        <div class="sm:col-span-2 col-span-6 sm:ml-2 ml-0 mr-0 sm:mr-4">
            <a href="http://vbpl.vn/Pages/portal.aspx"><img src="/storage/58126a8b-ff21-49a5-ba6a-d60e3d1c871e.jpg"
                    class="w-full h-full " alt="" style="max-height: 86px; border: 2px solid #c7c7c7;">
            </a>
        </div>
        <div class="sm:col-span-2 col-span-6 sm:mr-2 mr-0 ml-2 sm:ml-0">
            <a href="https://qppl.hatinh.gov.vn/"><img src="/storage/93066e4d-06ce-41e2-a62a-6e815d54c80a.jpg"
                    class="w-full h-full" alt="" style="max-height: 86px; border: 2px solid #c7c7c7;">
            </a>
        </div>
        <div class="sm:col-span-2 col-span-6 sm:mr-2 mr-0 ml-2 sm:ml-0">
            <a href="https://dichvucong.hatinh.gov.vn/portaldvc/KenhTin/chi-tiet-thu-tuc.aspx?_nlv=STP"><img
                    src="/storage/203d764e-575d-4b4a-860d-afe08366543b.jpg" class="w-full h-full" alt=""
                    style="max-height: 86px; border: 2px solid #c7c7c7;">
            </a>
        </div>
        <div class="sm:col-span-2 col-span-6 sm:mr-2 mr-0 ml-2 sm:ml-0">
            <a
                href="https://dichvucong.hatinh.gov.vn/portaldvc/KenhTin/dich-vu-cong-truc-tuyen.aspx?_dv=578E3597-D1C6-FEA0-1671-D63152DA1967&_tk="><img
                    src="/storage/7d661f51-4885-4487-a6f9-8177fe1d8470.jpg" class="w-full h-full" alt=""
                    style="max-height: 86px; border: 2px solid #c7c7c7;">
            </a>
        </div>
        <div class="sm:col-span-2 col-span-6 sm:mr-2 mr-0 ml-2 sm:ml-0">
            <a href="/danh-muc/chuyen-doi-so"><img src="/images/banner2.png" class="w-full h-full" alt=""
                    style="max-height: 86px; border: 2px solid #c7c7c7;">
            </a>
        </div>

    </div>

    <!-- TIN TỨC CHUYÊN NGÀNH -->
    <div class="grid grid-cols-12 set-web mx-auto sm:px-2 px-0 sm:pt-4 pt-2" style="border-top: 1px solid #d3cbcb;">
        <div class="sm:col-span-3 col-span-12">
            <div id="menu">
                <div class="uldoc mx-auto">
                    @foreach ($menuleft as $dm)
                    <div class="lidoc font-bold grid grid-cols-12" style="text-transform:uppercase; font-size:12px; ">
                        <div class="col-span-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 " fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>

                        @if ($dm['kiemtra']==1)
                        <div class="col-span-10">
                            <a class="text-white font-bold">{{$dm['label']}}</a>
                        </div>
                        <div class="col-span-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 " fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                        @include('layout.childleft', ['danhmuc' => $dm['children']])
                        @else
                        <div class="col-span-10">
                            <a href="/danh-muc/{{$dm['slug']}}" class="text-white font-bold">{{$dm['label']}}</a>
                        </div>

                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="mt-2">
                <a href="/lich-cong-tac"><img src="/images/lichcongtac.jpg" alt="" class="w-full"></a>
            </div>
            <div class="mt-2">
                <a href="/danh-muc/Trung-tam-tro-giup-Phap-ly"><img src="/storage/trung-tam-tro-giup-phap-ly1.jpg"
                        alt="" class="w-full"></a>

            </div>
            <div class="mt-2">
                <a href="https://daugia.hatinh.gov.vn/"><img src="/storage/trung-tam-dau-gia-tai-san3.jpg" alt=""
                        class="w-full"></a>
            </div>

            <div class="mt-2 shadow-lg" style="border: 1px solid #C7C7C7;">

                <div class="grid grid-cols-12 px-2">
                    @if($videodautien)
                    <div class="sm:col-span-12 col-span-12">
                        <video class="w-full video-video-l rounded-xl sm:mt-2" width="320" height="240" controls>
                            <source src="{{ $videodautien['linkyoutube'] }}" type="video/mp4">
                        </video>
                        <p class="text-justify text-sm text-gray-800 mt-2 pb-2">{{ $videodautien['name'] }}</p>
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-span-12 mt-2">
                <div class=" shadow-lg" style="border: 1px solid #C7C7C7;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3787.152340590475!2d105.90410561439523!3d18.34033317944948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31384e38d981a86f%3A0xd33bafd48e146081!2zU-G7nyBUxrAgUGjDoXAgSMOgIFTEqW5o!5e0!3m2!1svi!2s!4v1644303670073!5m2!1svi!2s"
                        width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="col-span-12 mt-2">

                <div class=" shadow-lg" style="border: 1px solid #C7C7C7;">
                    <p class="text-white py-2 font-bold text-center text-base " style="background-color: #024fc3;">
                        LƯỢT TRUY CẬP</p>
                    <div class="flex p-2">
                        <i class="fa-solid fa-star" style="margin-top: 2px;"></i>
                        <p class="px-2"> Tháng : {{ $tongthangtruycap }}</p>
                    </div>
                    <div class="flex p-2 ">
                        <i class="fa-solid fa-star" style="margin-top: 2px;"></i>
                        <p class="px-2"> Tổng : {{ $tongluottruycap }}</p>
                    </div>

                </div>
            </div>

        </div>
        <div class="sm:col-span-9 col-span-12 sm:pl-4 pl-0">

            <div>
                @if($Banner->thumbnail)
                <img src="/storage/{{$Banner->thumbnail}}" alt="">
                @else

                <img src="{{$Banner->linkthumbnail}}" alt="">
                @endif
            </div>
            <div>
                <a href="/danh-muc/Hoat-dong-Tu-phap">
                    <p class="text-white py-2 font-bold text-center text-xl mt-4" style="background-color: #024fc3;">
                        HOẠT ĐỘNG TƯ PHÁP</p>
                </a>
                <div class="grid grid-cols-12 py-4" style="border: 1px solid rgb(211, 203, 203);">
                    <div class="sm:col-span-6 col-span-12 sm:pl-2 ml-2 sm:pr-0 pr-2">
                        @if($hdtuphapnb)
                        <a href="/chi-tiet-tin-tuc/{{$hdtuphapnb['slug']}}">
                            <div class="hoatdong-img-l">
                                <img class="w-full h-full" src="/storage/{{$hdtuphapnb->thumbnail}}" alt="">
                            </div>
                            <div class="mt-2 text-justify">
                                <p>{{$hdtuphapnb->title}}</p>
                                <span class="text-xs font-medium text-gray-500">Lượt xem:
                                    {{$hdtuphapnb->luotxem}}</span>
                                @if($hdtuphapnb->published_at)
                                <span class="float-right text-xs font-medium text-gray-500"><i
                                        class="fas fa-calendar-alt"></i>
                                    {{$hdtuphapnb->published_at->format('d/m/Y')}}</span>
                                @endif
                            </div>
                        </a>


                        @endif
                    </div>
                    <div class="sm:col-span-6 col-span-12 px-4 sm:mt-0  ">
                        @foreach($hdtuphap as $hdtp)
                        <div class=" grid grid-cols-12 mb-6">

                            <div class="col-span-5">
                                <a href="/chi-tiet-tin-tuc/{{$hdtp['slug']}}">
                                    <div class="hoatdong-img-s">
                                        <img class="w-full h-full" src="/storage/{{$hdtp->thumbnail}}" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-7 ml-2">
                                <div class=" text-justify text-sm">
                                    <a href="/chi-tiet-tin-tuc/{{$hdtp['slug']}}">
                                        <p class="mb-1 ">{{$hdtp->title}}</p>
                                        <p class="text-xs font-medium text-gray-500">Lượt xem: {{$hdtp->luotxem}}</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <a href="/danh-muc/Pho-bien-giao-duc-PL">
                    <p class="text-white py-2 font-bold text-center sm:text-xl text-lg mt-4"
                        style="background-color: #024fc3;">PHỔ BIẾN, GIÁO DỤC PHÁP LUẬT</p>
                </a>
                <div class="grid grid-cols-12 pb-4 pt-1">
                    <div class="sm:col-span-4 col-span-12" style="border: 2px solid #d7cfcf;">
                        <a href="/danh-muc/Chi-dao--huong-dan">
                            <p class=" font-bold text-white text-center pt-2"
                                style="background-image: url(./images/bg-gray.gif);; height: 40px">CHỈ ĐẠO, HƯỚNG DẪN
                            </p>
                        </a>
                        @foreach($chidaohuongdan as $cdhd)
                        <div class="col-span-12 p-2"
                            style="border-bottom:1px solid rgba(204, 204, 204, 0.678); height: 70px; overflow: hidden">
                            <a href="/chi-tiet-tin-tuc/{{$cdhd->slug}}">
                                <div class="px-2">
                                    <i class="fas fa-circle text-red-700 mr-2 mt-2 float-left"
                                        style="font-size: 9px;"></i>
                                    <p class="text-sm text-justify">{{$cdhd->title}}</p>
                                </div>
                            </a>

                        </div>
                        @endforeach
                    </div>
                    <div class="sm:col-span-4 col-span-12" style="border: 2px solid #d7cfcf;">
                        <a href="/danh-muc/Van-ban-phap-luat-moi">
                            <p class=" font-bold text-white text-center pt-2"
                                style="background-image: url(./images/bg-gray.gif);; height: 40px">VĂN BẢN PHÁP LUẬT MỚI
                            </p>
                        </a>
                        @foreach($vanbanphapluatmoi as $cdhd)
                        <div class="col-span-12 p-2"
                            style="border-bottom:1px solid rgba(204, 204, 204, 0.678); height: 70px; overflow: hidden">
                            <a href="/chi-tiet-tin-tuc/{{$cdhd->slug}}">
                                <div class="px-2">
                                    <i class="fas fa-circle text-red-700 mr-2 mt-2 float-left"
                                        style="font-size: 9px;"></i>
                                    <p class="text-sm text-justify">{{$cdhd->title}}</p>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="sm:col-span-4 col-span-12" style="border: 2px solid #d7cfcf;">
                        <a href="/danh-muc/Tai-lieu-PBGDPL">
                            <p class=" font-bold text-white text-center pt-2"
                                style="background-image: url(./images/bg-gray.gif);; height: 40px">TÀI LIỆU PBGDPL</p>
                        </a>
                        @foreach($phobienphapluat as $cdhd)
                        <div class="col-span-12 p-2"
                            style="border-bottom:1px solid rgba(204, 204, 204, 0.678); height: 70px; overflow: hidden">
                            <a href="/chi-tiet-tin-tuc/{{$cdhd->slug}}">
                                <div class="px-2">
                                    <i class="fas fa-circle text-red-700 mr-2 mt-2 float-left"
                                        style="font-size: 9px;"></i>
                                    <p class="text-sm text-justify">{{$cdhd->title}}</p>
                                </div>
                            </a>

                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div>
                <a href="/danh-muc/Hoat-dong-co-so">
                    <p class="text-white py-2 font-bold text-center text-xl " style="background-color: #024fc3;">HOẠT
                        ĐỘNG CƠ SỞ</p>
                </a>
                <div class="grid grid-cols-12 py-4" style="border: 1px solid rgb(211, 203, 203);">
                    <div class="sm:col-span-6 col-span-12 sm:pl-4 ml-2 sm:pr-0 pr-2">
                        @if($hdcosonb)
                        <a href="/chi-tiet-tin-tuc/{{$hdcosonb['slug']}}">
                            <div class="hoatdong-img-l">
                                <img class="w-full h-full" src="/storage/{{$hdcosonb->thumbnail}}" alt="">
                            </div>
                            <div class="mt-2 text-justify">
                                <p>{{$hdcosonb->title}}</p>
                                <span class="text-xs font-medium text-gray-500">Lượt xem: {{$hdcosonb->luotxem}}</span>
                                @if($hdcosonb->published_at)
                                <span class="float-right text-xs font-medium text-gray-500"><i
                                        class="fas fa-calendar-alt"></i>
                                    {{$hdcosonb->published_at->format('d/m/Y')}}</span>
                                @endif
                            </div>
                        </a>


                        @endif
                    </div>
                    <div class="sm:col-span-6 col-span-12 sm:mt-0 px-4">
                        @foreach($hdcoso as $hdtp)
                        <div class="grid grid-cols-12 mb-6">

                            <div class="col-span-5">
                                <a href="/chi-tiet-tin-tuc/{{$hdtp['slug']}}">
                                    <div class="hoatdong-img-s">
                                        <img class="w-full h-full" src="/storage/{{$hdtp->thumbnail}}" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-7 ml-2">
                                <div class=" text-justify text-sm">
                                    <a href="/chi-tiet-tin-tuc/{{$hdtp['slug']}}">
                                        <p class="mb-1 ">{{$hdtp->title}}</p>
                                        <p class="text-xs font-medium text-gray-500">Lượt xem: {{$hdtp->luotxem}}</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <div class="grid grid-cols-12">
                    <div class="sm:col-span-4 col-span-12">
                        <p class="text-white py-2 font-bold text-center text-sm" style="background: #024fc3">
                            <a href="https://dichvucong.hatinh.gov.vn/portaldvc/Home/default.aspx">
                                DỊCH VỤ CÔNG TRỰC TUYẾN
                            </a>
                        </p>
                        <div>
                            <div style="border: 1px solid #C7C7C7;" class="p-2">
                                <iframe width="100%" class="bttpht" src="https://www.youtube.com/embed/cyfg57zTask"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-4 col-span-12 sm:ml-4 ml-0 sm:mt-0 ">
                        <p class="text-white py-2 font-bold text-center text-sm" style="background: #024fc3">
                            <a href="/danh-muc/Thu-vien-anh-chinh">
                                THƯ VIỆN
                                ẢNH
                            </a>
                        </p>
                        <div class="p-2" style="border:solid 1px #C7C7C7">
                            <a href="/thu-vien-anh/{{$image->slug}}">
                                <img class="w-full h-full bttpht" src="/storage/{{$image->thumbnail}}" style="" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="sm:col-span-4 col-span-12 sm:ml-4 ml-0 sm:mt-0 ">
                        <p class="text-white py-2 font-bold text-center text-sm" style="background: #024fc3">
                            <a href="/danh-muc/ban-tin-tu-phap-ha--tinh">BẢN TIN TƯ
                                PHÁP HÀ TĨNH</a>
                        </p>
                        <div class="p-2" style="border:solid 1px #C7C7C7">
                            <a href="/images/Tu phap so 4-2019_Duyet in OK.pdf">
                                <img class="w-full h-full bttpht" src="./images/logo_ban_tin.jpg" style="" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 my-4 pt-2" style="border-top: 3px solid #C7C7C7; border-bottom: 3px solid #C7C7C7">
                <p class="font-bold mb-2 text-gray-500">Đơn vị liên kết</p>
                <marquee width="100%" Behavior="Scroll" onmouseover="this.stop()" onmouseout="this.start()"
                    direction="left" height="auto">
                    <div class="float-left mr-1" style="border: 1px solid #C7C7C7;">
                        <a href="https://baophapluat.vn/">
                            <img src="/storage/5da698a1-6253-479b-91c9-3d274eebe19f.jpg" width="100" height="100"
                                alt="Natural" />
                        </a>
                    </div>
                    <div class=" float-left mr-1" style="border: 1px solid #C7C7C7;">
                        <a href="https://moj.gov.vn/Pages/home.aspx">
                            <img src="/storage/1d469a58-8907-41cd-9a1a-31afd5a6b83a.jpg" width="100" height="100"
                                alt="Natural" />
                        </a>
                    </div>
                    <div class=" float-left mr-1" style="border: 1px solid #C7C7C7;">
                        <a href="https://moj.gov.vn/qt/Pages/co-cau-to-chuc.aspx?ItemID=26">
                            <img src="/storage/9ce329e1-79f9-47c7-9e03-a5bc0523e69c.jpg" width="100" height="100"
                                alt="Natural" />
                        </a>
                    </div>
                    <div class=" float-left mr-1" style="border: 1px solid #C7C7C7;">
                        <a href="https://baohatinh.vn/">
                            <img src="/storage/d6e08460-e57d-49a8-be77-1021c7fb337f.jpg" width="100" height="100"
                                alt="Natural" />
                        </a>
                    </div>
                    <div class="float-left mr-1" style="border: 1px solid #C7C7C7;">
                        <a href="https://hatinh.gov.vn/tin-tuc-su-kien/28">
                            <img src="/storage/5223f7b8-a27a-4f03-9d58-b4149cd6a567.jpg" width="100" height="100"
                                alt="Natural" />
                        </a>
                    </div>
                    <div class="float-left" style="border: 1px solid #C7C7C7;width: 100px;height:50px;">
                        <a href="https://www.qdnd.vn/">
                            <img src="/images/quandoinhandan.jpg" style="height: 50px;" alt="Natural" />
                        </a>
                    </div>
                </marquee>
            </div>
        </div>
        <!-- <div class="sm:col-span-9"> 
             sssssss
        </div> -->
    </div>



</main>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
var vueInstance = new Vue({
    el: '#testthu',
    data: {
        listProductDetail: [],
        soLuotxem: 0,
        linkanh: '',
        tenbaiviet: '',
    },
    mounted: function() {

        const self = this;
        axios.get("/listPost")
            .then(function(response) {
                // self.Kvcha = response.data[0];
                self.listProductDetail = response.data;
                self.linkanh = response.data[0].thumbnail;
                self.tenbaiviet = response.data[0].title;

            });
        // window.location = '/danhsach/'+ item.slug+ '/' + this.slug  ;

    },
    methods: {
        tinhLuotxem(item) {

            const x = Number(item.luotxem);
            this.soLuotxem = x + 1;
            const self = this;
            axios.put("/tinhLuotxem?id=" + item.id + '&luotxem=' + self.soLuotxem)
                .then(function(response) {});
            // window.location = '/danhsach/'+ item.slug+ '/' + this.slug  ;
        },
        doianh(linkanh, tenbaiviet) {
            this.linkanh = linkanh;
            this.tenbaiviet = tenbaiviet;

        },
    },
    computed: {

    }
});
</script>
@endsection