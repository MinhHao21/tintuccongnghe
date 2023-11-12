@extends('layout.layoutchinh')
@section('content')
<div class="grid grid-cols-12 gap-4 text-justify bg-white mx-auto px-2 py-2">
    <div class="lg:col-span-7 col-span-12">
        
        <h3 class="text-blue-800 text-xl font-bold" style="border-left:2px solid blue;">&nbsp Hồ sơ {{$chucDanh}}</h3>

        @if($chitiet)
        <div class="flex-none py-6 px-3 first:pl-6 last:pr-6">
            <div class="flex flex-col items-center justify-center gap-3">
                <div class="grid grid-cols-12">
                    <div class="lg:col-span-4 col-span-6">
                        <img class="w-40 h-40 rounded-full" src="/storage/{{ $chitiet->anhdaidien }}" />

                    </div>
                    <div class="lg:col-span-8 col-span-6 marginleft1 my-auto">
                        <strong class="text-gray-900 sm:text-xl text-base font-medium">Tên nghệ sĩ:{{ $chitiet->name }}</strong>
                        <p>Năm sinh: {{ $chitiet->namsinh->format('d/m/Y') }}</p>
                        <p>Quê quán: {{ $chitiet->quequan }}</p>
                    </div>
                </div>

                <!-- <div class="scrollbar rounded-xl" id="style-2">
                    <div class="force-overflow p-4">{{ $chitiet->quatrinhcongtac }}</div>
                </div> -->
                <div class="text-base  text-justify text-gray-800">
                    <p class="font-bold "> - Quá trình công tác: </p>
                    <p> {!! $chitiet->quatrinhcongtac !!} </p>

                    <p class="font-bold "> - Khen thưởng: </p>
                    <p> {!! $chitiet->khenthuong !!} </p>
                </div>
            </div>
        </div>
        @endif
    </div>
    <div class="lg:col-span-5 col-span-12">
        <h3 class="text-blue-800 text-xl font-bold" style="border-left:2px solid blue;">&nbsp Báo chí về {{$chucDanh}}</h3>
        <div class="col-span-12 grid grid-cols-12 " style="">
            @foreach($tinTucs as $p)
            <div class="col-span-12 grid grid-cols-12 mt-2 border-b-2 p-2  overflow-hidden" style="height: 90px;">
                <div class="col-span-4 mt-2" style="height: 105px;">
                    <img src="/storage/{{ $p->thumbnail }}" alt="" class="w-full">

                </div>
                <div class="col-span-8 pl-4 ">
                    <p class="font-bold text-justify text-sm my-1 text-gray-800">
                        <a class="text-sm" href="/chi-tiet-tin-tuc/{{$p['slug']}}">
                            {{ $p->title }}
                        </a>
                    </p>
                    <p class="text-sm  text-justify text-gray-800">
                        {{ $p->excerpt }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-right text-blue-700 mt-2">
            <span style="border-bottom: solid 1px blue">Xem thêm</span>
        </div>
    </div>

    @if(count($videos)>0)
    <h3 class=" col-span-12 text-blue-800 text-base font-bold mb-4" style="border-left:2px solid blue;">&nbspCác tác phẩm sáng tác</h3>
    <div class="grid grid-cols-12 col-span-12 mx-auto">
        @foreach($videos as $p)
        <div class="sm:col-span-3 lg:col-span-6 col-span-12 margin1">
            <div class="">
                <div class="mx-auto mb-4">
                    <div>
                        <iframe class="video-chitietns"  src=" https://www.youtube.com/embed/{{ $p->linkyoutube }} " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="">
                        <p class="text-center my-1 text-gray-800">
                            <a href="/chi-tiet-video/{{$p['slug']}}">
                                {{ $p->name }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif


    @if(count($videos)>0)
    <h3 class=" col-span-12 text-blue-800 text-base font-bold mb-4" style="border-left:2px solid blue;">&nbsp Các tác phẩm được nghệ sĩ thể hiện</h3>
    <div class="grid grid-cols-12 col-span-12 mx-auto">
        @foreach($videos as $p)
        <div class="sm:col-span-3 lg:col-span-6 col-span-12 margin1">
            <div class="">
                <div class="mx-auto mb-4">
                    <div>
                        <iframe class="video-chitietns"  src=" https://www.youtube.com/embed/{{ $p->linkyoutube }} " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="">
                        <p class="text-center my-1 text-gray-800">
                            <a href="/chi-tiet-video/{{$p['slug']}}">
                                {{ $p->name }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif

    @if(count($audios)>0)
    <h3 class=" col-span-12 text-blue-800 text-base font-bold mb-4" style="border-left:2px solid blue;">&nbsp Audio nghệ sỹ sáng tác, thể hiện</h3>
    <div class="grid grid-cols-12 col-span-12 mx-auto">
        @foreach($audios as $p)
        <div class="sm:col-span-3 col-span-6 mr-4">
            <div class="">
                <div class="mx-auto mb-4">
                    <div class="chitiet-nghesi-img">
                    <img src="/storage/{{ $p->thumbnail }}" alt="" class="w-full">
                    </div>
                    <div class="">
                        <p class="text-center my-1 text-gray-800">
                            <a href="/chi-tiet-video/{{$p['slug']}}">
                                {{ $p->name }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif


    <h3 class=" col-span-12 text-blue-800 text-base font-bold mb-4" style="border-left:2px solid blue;">&nbsp Các {{$chucDanh}} khác</h3>
    <div class="grid grid-cols-12 col-span-12 mx-auto">
        @foreach($ngheSykhac as $p)
        <div class="sm:col-span-3 col-span-6 mr-4">
            <div class="">
                <div class="mx-auto mb-4">
                    <div class="nghesikhac-img">
                    <img src="/storage/{{ $p->anhdaidien }}" alt="" class="w-full">
                    </div>
                    <div class="">
                        <p class="text-center my-1 text-gray-800">
                            <a href="/chi-tiet-video/{{$p['slug']}}">
                                {{ $p->name }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
 
 
</div>

@endsection