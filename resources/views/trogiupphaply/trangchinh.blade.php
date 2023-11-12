@extends('layout.layouttgpl')
@section('content')
<div class=" col-span-12 set-web mx-auto sm:px-2 px-0 sm:pt-4 pt-2 px-4  " style="border-top: 1px solid #d3cbcb;">
        <span class="danhmuc-text text-lg"><a href="/"><i class="fa fa-home"></i></a> > </span> <span
            class="danhmuc-text  text-lg">
            {{ $chuyenmuc->name }} </span>
    
</div>
<div class="col-span-12 set-web mx-auto sm:px-2 px-0 sm:pt-4 pt-2 sm:mx-2">
    <img src="/images/064273d4-4609-41fe-bd45-e906eb451fb3.jpg" alt="">
</div>
<div class="col-span-12  my-4 pt-2 mx-2 flex  grid grid-cols-12" style="border-top: 3px solid #C7C7C7; border-bottom: 3px solid #C7C7C7">
    <p class="font-bold mb-2 text-gray-500 col-span-4">ĐƯỜNG DÂY NÓNG</p>
    <marquee width="100%" Behavior="Scroll" onmouseover="this.stop()" onmouseout="this.start()" direction="left"
        height="auto" class="col-span-8">
        <div class="float-left mr-1" style="border: 1px solid #C7C7C7;">
            <a href="">
                <h1>0911.219.677</h1>
            </a>
        </div>

    </marquee>
</div>
@endsection