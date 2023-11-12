<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cổng TTĐT Sở Tư Pháp Hà Tĩnh</title>
    <!--  -->
    <link href="/fonts/fontawesome-free-6.1.1/css/all.min.css" rel="stylesheet">

    <!-- font-google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap"
        rel="stylesheet">
    <!-- taiwind css -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <!-- <link rel="stylesheet" href="/css/tailwind.css"> -->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="   w-full mx-auto background-pc shadow-xl">
    <style>
    [v-cloak] {
        display: none;
    }
    </style>
    <div>
        <div id="trangchu">
            <div>
                <div class="grid grid-cols-12  mx-auto" style="background-color: #004c96; max-width: 1002px;">
                    <div class=" col-span-6">
                        <i @click="openShow" class="fa fa-bars p-2 text-white" style="font-size: 1.5em;"></i>
                    </div>
                    <div class="sm:col-span-5 col-span-4 text-right">
                        <div class=" font-bold text-sm border-r text-white border-white">
                            <a href="/timkiem"> <i
                                    class="fa fa-search p-2 border bg-white text-blue-600 rounded-full mt-1 "
                                    style="font-size: 1em;"></i> Tìm kiếm </a>
                        </div>

                    </div>
                    <div class="sm:col-span-1 col-span-2 text-right">
                        <a href="/nova"><i class="fa fa-user py-2 px-4 text-white"
                                style="font-size: 1.5em; border-left: 1px solid #164370;"></i> </a>
                    </div>
                </div>
                <div class="grid grid-cols-12 mx-auto sm:block hidden " style="max-width: 1002px">
                    <div class="col-span-12 grid grid-cols-12"
                        style="background-image: url(/storage/bg_header_sky7.jpg) ;position: relative;height:162px ">
                        <div class="col-span-6 pl-2 pt-8" style=" position: absolute; left: 0">
                            <img src="/storage/logo_sotuphap22.png" alt="">
                        </div>
                        <div class="col-span-6" style=" position: absolute; right:0;">
                            <img src="/storage/banner3.png" alt="">
                        </div>
                    </div>

                </div>
                <div class="my-8 sm:hidden block  ">
                    <img style="width:70%" src="/images/logo_sotuphap22.png" alt="">
                </div>
            </div>

            <div v-cloak v-bind:class="{ hidden: isActivemodal }" style="z-index: 100"
                class="min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0  justify-center items-center inset-0 outline-none focus:outline-none bg-no-repeat bg-center bg-cover">
                <div @click="closemodal()" class="absolute bg-black opacity-80 inset-0 z-0"></div>
                <div class="  relative text-white  my-auto  shadow-lg "
                    style="width:290px;  height:100%; overflow: scroll;">
                    <!--content-->
                    <div class="pt-3 px-4" style="border-bottom:  1px solid #31455f; background-color:#1a304d;">
                        <a href="/" class="text-white font-bold my-4 text-justify  sm:text-base text-sm"
                            style="text-transform:uppercase;">HOME </a>
                    </div>
                    @foreach ($menuleft as $dm)
                    <div class="pt-3 px-4" style="border-bottom:  1px solid #31455f; background-color:#1a304d;">
                        <a href="#" class="text-white font-bold my-4 text-justify sm:text-base text-sm"
                            style="text-transform:uppercase;">{{$dm['label']}} </a>

                        @if ($dm['kiemtra']==1)
                        @include('layout.childmenu', ['danhmuc' => $dm['children']])
                        @endif
                    </div>
                    @endforeach
                    <!--body-->

                </div>
            </div>
        </div>
    </div>
    <div class="bg-white sm:w-full mx-auto shadow-2xl sm:block hidden   "
        style="max-width: 1002px; font-family: Arial;">
        <header>
            <div class=" h-to sm:block hidden" style="">
                <!-- menu mobile -->
                <div class="sidebar flex text-white shadow-2xl" style="border: 1px solid #fff; width:97.5% " id='menu'>
                    <nav class="mr-4 lg:mr-0" style="width:100%">
                        <ul class="mx-auto set-menu"
                            style="width:100%; box-shadow:inset 0px 24px 0px 0px rgb(255 255 255 / 20%);">
                            <li class="cap1">
                                <a href="/" class="text-white " style="font-size: 14px;text-transform:uppercase;">
                                    TRANG CHỦ
                                </a>
                            </li>
                            @foreach ($danhmuc as $dm)
                            <li class="cap1" style="border-left: 1px solid #fff; ">
                                @if($dm['loaidanhmuc_id'] == 3 || $dm['loaidanhmuc_id'] == 1 || $dm['loaidanhmuc_id'] ==
                                7)
                                <a href="#" class="text-white "
                                    style="font-size: 14px;text-transform:uppercase;">{{$dm['label']}} </a>
                                @else
                                <a href="/danh-muc/{{$dm['slug']}}" class="text-white "
                                    style="font-size: 14px;text-transform:uppercase;">{{$dm['label']}}</a>
                                @endif
                                @if ($dm['kiemtra']==1)
                                @include('layout.childmobile', ['danhmuc' => $dm['children']])
                                @endif
                            </li>
                            @endforeach
                        </ul>
                        <div class="icon">
                            <i class="fas fa-bars"></i>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
    </div>
    <div class="bd-content">
        <div class="grid grid-cols-12 shadow-xl sm:p-0 sm:m-0 lg:p-2 set-web lg:mx-auto bg-white"
            style="max-width: 1002px;">
            <div class="lg:col-span-8 col-span-12 sm:pl-0 sm:mr-4">
                @yield('content')

            </div>
            <!-- Cột 3 -->
            <div class="lg:col-span-4 col-span-12 lg:block hidden">
                <div class="border-2 border-gray-100 ">
                    <div class="text-blue-600 text-center bg-gray-100 mt-1" style="color:rgba(2, 57, 119, 0.8);">
                        <p class="font-bold text-center text-white text-xl mb-4 pt-1"
                            style="background-image: url(/storage/bg-red.jpg); backround-size: cover; height:36px"> TIN
                            NỔI BẬT</p>
                    </div>
                    <div class="">
                        <div class="">
                            <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2" direction="up"
                                height="250px">
                                @foreach($tinnoibatnb as $tnbnb)
                                <div class="grid grid-cols-12 mb-2" style="border-bottom: 1px dashed #C7C7C7;">
                                    <div class="col-span-12 ml-3 ">
                                        <a href="/chi-tiet-tin-tuc/{{$tnbnb->slug}}">
                                            <p class="font-medium text-justify text-gray-800 " style="font-size: 13px;">
                                                {{$tnbnb->title}}</p>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </marquee>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="mb-1">
                        <a href="/lich-cong-tac">
                            <img src="/images/lichcongtac.jpg" alt="" class="w-full">
                        </a>
                    </div>
                    <div class="mb-1">
                        <a href="/danh-muc/trung-tam-tro-giup-phap-ly">
                            <img src="/images/trung-tam-tro-giup-phap-ly1.jpg" alt="" class="w-full">
                        </a>
                    </div>
                    <div class="mb-1">
                        <a href="https://daugia.hatinh.gov.vn/">
                            <img src="/images/trung-tam-dau-gia-tai-san3.jpg" alt="" class="w-full">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <footer class="footer text-white mt-4 pl-2 py-8"
        style="background-image: url(/storage/bg_footer.png); height:200px; background-size: cover;">
        <div class=" mx-auto" style="max-width: 1002px;">
            <div>
                @foreach ($danhmuc as $dm)
                <span>{{$dm['label']}} |</span>
                @endforeach
            </div>
            <div class="text-xl text-white" style="font-size: 15px; font: Arial 600;">
                CỔNG THÔNG TIN ĐIỆN TỬ SỞ TƯ PHÁP HÀ TĨNH
            </div>
            <div class="text-white mt-2" style="font-size: 15px; font: Arial 600;">
                Email: sotuphap@hatinh.gov.vn
            </div>
            <div class="text-white mt-2" style="font-size: 15px; font: Arial 600;">
                Địa chỉ: Số 92, đường Phan Đình Phùng, thành phố Hà Tĩnh, tỉnh Hà Tĩnh
            </div>
            <div class="text-white mt-2" style="font-size: 15px; font: Arial 600;">
                Điện thoại/ Fax: 0239.3856654
            </div>
            <div class="text-white mt-2" style="font-size: 15px; font: Arial 600;">
                Ghi rõ nguồn Cổng thông tin điện tử Sở Tư pháp (http://tuphap.hatinh.gov.vn/) khi trích dẫn lại tin từ
                địa chỉ này.
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script>
    var vm = new Vue({
        el: '#trangchu',
        data: {
            dsvanban: [],
            sokyhieu: '',
            show: false,
            isActivemodal: true,
        },
        // chạy ngay khi web load
        mounted: function() {
            const self = this;
            console.log('1')
        },
        // chạy khi thực hiện event
        methods: {
            openShow() {
                this.openmodal();
            },
            closemodal() {
                this.isActivemodal = true;
            },
            openmodal() {
                this.isActivemodal = false;
            },
            closemodal() {
                this.isActivemodal = true;
            },
        }
    })
    </script>
    
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var nut = document.querySelector('div.icon i');
        var mobile = document.querySelector('ul');
        nut.addEventListener('click', function() {
            mobile.classList.toggle('active');
        })
    })
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        autoplay: false,
        autoplayTimeout: 1000,
        autoplayHoverPause: true
    });
    $('.play').on('click', function() {
        owl.trigger('play.owl.autoplay', [1000])
    })
    $('.stop').on('click', function() {
        owl.trigger('stop.owl.autoplay')
    })
    </script>
</body>

</html>