@extends('layout.layoutchinh')
@section('content')
<style>
th,
td {
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 10px;
    padding-right: 10px;
}

button:focus {
    outline: none;
}
</style>
<div class="sm:col-span-9 col-span-12 m-3 text-justify bg-white" style="border-top: 2px solid black">
    <div class="" style="border:1px solid #c7c7c7;">
        @if($chiTiet)
        <div class="flex justify-end">
            <button style="font-size:24px; color: #024fc3"><i class="mr-2 fa-brands fa-facebook-square"></i></button>
            <button><img class="w-6 mr-2" src="/images/message.png" alt=""></i></button>
            <button><img class="w-6 mr-2" src="/images/twitter.png" alt=""> </button>
            <button><img class="w-6 mr-2" src="/images/in.png" alt=""> </button>
            <button> <img class="w-6 mr-2" src="/images/pinterest.png" alt=""></button>
            <button> <img class="w-6" src="/images/email.png" alt=""></button>
        </div>
        <table class="w-full text-center"
            style="font-size:13px; border-width: 1px; border-color:#ddd; border-style: solid;">
            <tr style="border-width: 1px; border-color:#ddd; border-style: solid;">
                <th class="font-bold" style="border-width: 1px; border-color:#ddd; border-style: solid;">Trích yếu </th>
                <td>
                    <p class=" text-justify " style="">{{ $chiTiet->noidung }}</p>
                </td>
            </tr>
            @if($chiTiet->ngaybatdau)
            <tr style="border-width: 1px; border-color:#ddd; border-style: solid;">
                <th class="font-bold" style="border-width: 1px; border-color:#ddd; border-style: solid;">Từ ngày</th>
                <td>
                    <p class="text-center " style="">{{ $chiTiet->ngaybatdau->format('d/m/Y') }}</p>
                </td>
            </tr>
            @endif
            @if($chiTiet->ngayketthuc)
            <tr style="border-width: 1px; border-color:#ddd; border-style: solid;">
                <th class="font-bold" style="border-width: 1px; border-color:#ddd; border-style: solid;">Đến ngày</th>
                <td>
                    <p class="text-center " style="">{{ $chiTiet->ngayketthuc->format('d/m/Y') }}</p>
                </td>
            </tr>
            @endif
            <tr style="border-width: 1px; border-color:#ddd; border-style: solid;">
                <th style="border-width: 1px; border-color:#ddd; border-style: solid;">Đính kèm</th>
                <td>
                    @foreach( $upload as $ul)
                    @if( $ul->duoifile == 'jpg' || $ul->duoifile == 'png' )

                    <img class="w-full mx-auto" src="/{{$ul->link}}" alt="">
                    @elseif ( $ul->duoifile == 'pdf' || $ul->duoifile == 'docx' )
                    <a href="{{$ul->link}}" download><i class="fas fa-file-pdf text-red-700"></i></a>
                    @else
                    <video width="100%" loop muted autoplay>
                        <source src="/{{$ul->link}}" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                    @endif
                    @endforeach
                </td>
            </tr>
        </table>
        @endif
    </div>
    <form action="{{ route('posts.luugopy')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mt-4 border-gray-700 border-4" style="border-width: 1px; border-color:#ddd; border-style: solid;">
            <div class="grid grid-cols-12 w-full p-2">
                <div class="col-span-12 sm:col-span-12">
                    <div class="grid grid-cols-12 py-2 items-center w-full">
                        <p class="text-sx col-span-4 text-gray-600">
                            Họ tên :
                        </p>
                        <input type="text" id="hoten" name="hoten"
                            class="col-span-8 outline-none focus:border-blue-400 w-full px-3 py-1 border-2 border-gray-300 rounded-md"
                            style="border-width: 1px; border-color:#c2c2c2 ; border-style: solid;">
                    </div>
                    <div class="col-span-12">
                        @error('hoten')
                        <small class="text-red-500 px-1">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <!--  -->
                <div class="col-span-12 sm:col-span-12">
                    <div class="grid grid-cols-12 py-2 items-center w-full">
                        <p class="text-sx col-span-4 text-gray-600">
                            Địa chỉ :
                        </p>
                        <input type="text" id="diachi" name="diachi"
                            class="col-span-8 outline-none focus:border-blue-400 w-full px-3 py-1 border-2 border-gray-300 rounded-md"
                            style="border-width: 1px; border-color:#c2c2c2 ; border-style: solid;">
                    </div>
                    <div class="col-span-12">
                        @error('diachi')
                        <small class="text-red-500 px-1">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <!--  -->
                <div class="col-span-12 sm:col-span-12">
                    <div class="grid grid-cols-12 py-2 items-center w-full">
                        <p class="text-sx col-span-4 text-gray-600">
                            Email :
                        </p>
                        <input type="text" id="email" name="email"
                            class="col-span-8 outline-none focus:border-blue-400 w-full px-3 py-1 border-2 border-gray-300 rounded-md"
                            style="border-width: 1px; border-color:#c2c2c2 ; border-style: solid;">
                    </div>
                    <div class="col-span-12">
                        @error('email')
                        <small class="text-red-500 px-1">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <!--  -->
            </div>
            <div class="grid grid-cols-12 w-full p-2">

                <!--  -->

                <div class="col-span-12 sm:col-span-12">
                    <div class="grid grid-cols-12 py-2 items-center w-full">
                        <p class="text-sx col-span-4 text-gray-600">
                            Số điện thoại :
                        </p>
                        <input type="text" id="sdt" name="sdt"
                            class="col-span-8 outline-none focus:border-blue-400 w-full px-3 py-1 border-2 border-gray-300 rounded-md"
                            style="border-width: 1px; border-color:#c2c2c2 ; border-style: solid;">
                    </div>
                    <div class="col-span-12">
                        @error('sdt')
                        <small class="text-red-500 px-1">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <!--  -->
                <div class="col-span-12 sm:col-span-12">
                    <div class="grid grid-cols-12 py-2 items-center w-full">
                        <p class="text-sx col-span-4 text-gray-600">
                            Tiêu đề :
                        </p>
                        <input type="text" id="tieude" name="tieude"
                            class="col-span-8 outline-none focus:border-blue-400 w-full px-3 py-1 border-2 border-gray-300 rounded-md"
                            style="border-width: 1px; border-color:#c2c2c2 ; border-style: solid;">
                    </div>
                    <div class="col-span-12">
                        @error('tieude')
                        <small class="text-red-500 px-1">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-12">
                    <div class="grid grid-cols-12 py-2 items-center w-full">
                        <p class="text-sx col-span-4 text-gray-600">
                            Nội dung :
                        </p>
                        <input type="text" id="noidung" name="noidung"
                            class="col-span-8 outline-none focus:border-blue-400 w-full px-3 py-1 border-2 border-gray-300 rounded-md"
                            style="border-width: 1px; border-color:#c2c2c2 ; border-style: solid;">
                    </div>
                    <div class="col-span-12">
                        @error('noidung')
                        <small class="text-red-500 px-1">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-12 hidden">
                    <div class="grid grid-cols-12 py-2 items-center w-full">
                        <p class="text-sx col-span-4 text-gray-600">
                            Slug Văn bản :
                        </p>
                        <input type="text" id="slug" name="slug" value="{{ $chiTiet->slug }}"
                            class="col-span-8 outline-none focus:border-blue-400 w-full px-3 py-1 border-2 border-gray-300 rounded-md"
                            style="border-width: 1px; border-color:#c2c2c2 ; border-style: solid;">
                    </div>

                </div>
                <div class="col-span-12 flex  justify-end">
                    <div class="grid grid-cols-12">
                        <div class="col-span-12">
                            {!! NoCaptcha::renderJs('vn', false, 'onloadCallback') !!}
                            {!! NoCaptcha::display() !!}
                        </div>

                        <div class="col-span-12">
                            @error('g-recaptcha-response')
                            <small class="text-red-500 px-1">{{$message}}</small>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="col-span-12 sm:col-span-12 sm:mx-3 mt-8 text-right">
                    <button type="submit"
                        class="ml-auto px-3 py-1 rounded-lg text-lg text-white transition bg-blue-500 hover:bg-red-600">GỬI
                        ĐÓNG GÓP Ý KIẾN</button>
                </div>
                <!--  -->
            </div>
        </div>
    </form>
    @if(session('message'))
    <div id="alertSuc"
        class="thongbao-tc absolute alert flex flex-row items-center bg-green-200 p-5 rounded border-b-2 border-green-300">
        <div
            class="alert-icon flex items-center bg-green-100 border-2 border-green-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
            <span class="text-green-500">
                <svg fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
                    <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </span>
        </div>
        <div class="alert-content ml-4">
            <div class="alert-title font-semibold text-lg text-green-800">
                Thành công
            </div>
            <div class="alert-description text-sm text-green-600">
                {{ session('message') }}
            </div>
        </div>
    </div>
    @endif
</div>

@endsection