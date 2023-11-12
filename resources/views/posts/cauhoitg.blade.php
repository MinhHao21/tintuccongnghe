@extends('layout.layoutchinh')
@section('content')
<style>
    .noidung p{
        padding: 0 0 10px 0;
    }
</style>
<div class="col-span-12 grid grid-cols-12">
    <div class="bg-blue-500 py-2 pl-2 col-span-12">
        <p class="text-white font-bold text-lg">Trả lời câu hỏi</p>
    </div>

    <div class=" col-span-6 grid grid-cols-12" style="">
        <p class="col-span-12 sm:col-span-4 font-bold py-3 px-2 my-2">Người gửi : </p>
        <span class="col-span-12 sm:col-span-8 py-3 my-2">{{$hoidap->name}}</span>

    </div>
    <div class=" col-span-6 grid grid-cols-12" style="">
        <p class="col-span-12 sm:col-span-3 font-bold py-3 px-2 my-2">Địa chỉ : </p>
        <span class="col-span-12 sm:col-span-9 py-3 my-2">{{$hoidap->diachi}}</span>

    </div>
    <div class=" col-span-6 grid grid-cols-12" style="">
        <p class="col-span-12 sm:col-span-3 font-bold py-3 px-2 my-2">Email : </p>
        <span class="col-span-12 sm:col-span-8 py-3 my-2">{{$hoidap->email}}</span>

    </div>
    <div class=" col-span-12 grid grid-cols-12" style="">
        <p class="col-span-12 sm:col-span-2 font-bold py-3 pl-2 my-2">Câu hỏi : </p>
        <span class="col-span-12 sm:col-span-10 py-3 my-2">{{$hoidap->noidung}}</span>

    </div>

    <div class="col-span-12 bg-current my-2" style="height: 1px; ">

    </div>

    <p class=" col-span-12 text-black font-bold text-lg px-3my-2 text-center">Nội dung trả lời</p>
    <!-- <div class="col-span-12 grid grid-cols-12 2" style="">
        <p class="col-span-12 sm:col-span-2 font-bold py-3 pl-2 my-2">Ngày trả lời: </p>
        <span class="col-span-12 sm:col-span-10 p-3 my-2">{{$hoidap->ngaytraloi }}</span>

    </div> -->

    <div class="col-span-12 grid grid-cols-12 2" style="">
        <!-- <p class="col-span-12 sm:col-span-2 font-bold py-3 pl-2 my-2 ">Câu trả lời: </p> -->
        <div class="noidung col-span-12 sm:col-span-12 p-3 my-2 text-justify">
            {!!$hoidap->traloi!!}
        </div>

    </div>
  





</div>
@endsection