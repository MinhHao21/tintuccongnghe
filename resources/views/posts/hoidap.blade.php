@extends('layout.layoutchinh')
@section('content')
<div class="col-span-12">
    <div class="w-full pt-3 sm:px-0 px-2">

        <div class="w-full pt-2 pb-2">
            <!-- 
            <h3 class="w-full font-bold mb-3 text-lg uppercase">Tư vấn pháp Luật</h3> -->
            <div class="w-full">
                <p class="text-base w-full font-bold text-blue-600 pb-3 border-b-2 border-gray-200">Bạn có thắc mắc gì,
                    hãy gửi ngay câu hỏi cho chúng tôi!</p>


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


                <form action="{{ route('posts.luuhd')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <p class="mb-4 mt-3 italic text-base">
                        Chúng tôi sẽ giải đáp câu hỏi của bạn sớm nhất.
                    </p>
                    <div class="grid grid-cols-12">
                        <div class="col-span-12 mb-6">
                            <div class="grid grid-cols-12">
                                <div class="col-span-3 flex items-center">
                                    <p class="text-base text-gray-600 font-bold">Họ tên: <span
                                            class="text-red-500">(*)</span></p>
                                </div>
                                <div class="col-span-9">
                                    <input id="name" name="name"
                                        class="w-full px-3 py-1 rounded-lg bg-gray-200 border-2 border-gray-300 focus:outline-none focus:border-blue-300"
                                        placeholder="Nhập họ tên ..." type="text">
                                </div>
                                <div class="col-span-12">
                                    @error('name')
                                    <small class="text-red-500 px-1">{{$message}}</small>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <div class="col-span-12 mb-6">
                            <div class="grid grid-cols-12">
                                <div class="col-span-3 flex items-center">
                                    <p class="text-base text-gray-600 font-bold">Địa chỉ:</p>
                                </div>
                                <div class="col-span-9">
                                    <input id="diachi" name="diachi"
                                        class="w-full px-3 py-1 rounded-lg bg-gray-200 border-2 border-gray-300 focus:outline-none focus:border-blue-300"
                                        placeholder="Nhập địa chỉ ..." type="text">
                                </div>
                                <div class="col-span-12">
                                    @error('diachi')
                                    <small class="text-red-500 px-1">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-span-12 mb-6">
                            <div class="grid grid-cols-12">
                                <div class="col-span-3 flex items-center">
                                    <p class="text-base text-gray-600 font-bold">Email: <span
                                            class="text-red-500">(*)</span></p>
                                </div>
                                <div class="col-span-9">
                                    <input id="email" name="email"
                                        class="w-full px-3 py-1 rounded-lg bg-gray-200 border-2 border-gray-300 focus:outline-none focus:border-blue-300"
                                        placeholder="Nhập Email ..." type="email">
                                </div>
                                <div class="col-span-12">
                                    @error('email')
                                    <small class="text-red-500 px-1">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-span-12 mb-6">
                            <div class="grid grid-cols-12">
                                <div class="col-span-3">
                                    <p class="text-base text-gray-600 font-bold">Nội dung câu hỏi <span
                                            class="text-red-500">(*)</span></p>
                                </div>
                                <div class="col-span-9">
                                    <textarea id="noidung" name="noidung"
                                        class="w-full px-3 py-1 rounded-lg bg-gray-200 border-2 border-gray-300 focus:outline-none focus:border-blue-300"
                                        name="" id="" rows="6" placeholder="Nhập nội dung ..."></textarea>
                                </div>
                                <div class="col-span-12">
                                    @error('noidung')
                                    <small class="text-red-500 px-1">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!--  -->
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
                    </div>


                    <div class="w-full text-right mt-4">
                        <button type="submit"
                            class="ml-auto px-3 py-1 rounded-lg text-lg text-white transition bg-blue-500 hover:bg-red-600">
                            GỬI CÂU HỎI
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-span-12 bg-current my-2" style="height: 1px; ">

        </div>
        <h3 class="w-full font-bold mb-3 text-lg uppercase text-center">Câu hỏi thường gặp</h3>
        <!-- danh sach câu hỏi -->
        <div class="col-span-12">

            @foreach ($hoidap as $key=>$hd)
            <div class="mt-2 p-4">
                <!-- <span style="font-family: Inter;font-style: normal;font-weight: 500;font-size: 18px;line-height: 20px; color: #1e5469;">{{$hd->name}} - {{$hd->ngaytaocauhoi}}</span> -->
                <a class="flex text-lg " href="/cau-hoi-thuong-gap/{{$hd->id}}">
                    <span class="font-bold ">{{$key+1}}.</span>
                    <p class="px-2"> {{$hd->noidung}} </p>
                </a>
            </div>
            @endforeach
        </div>
        {{ $hoidap->links('vendor.pagination.default') }}
        <!-- end danh sách câu hỏi -->
    </div>
</div>
<script>
var onloadCallback = function() {
    alert("grecaptcha is ready!")
};
</script>
<script>
$(function() {
    setTimeout(function() {
        $("#alertSuc").fadeOut(1500);
    }, 2000)
})
</script>
@endsection