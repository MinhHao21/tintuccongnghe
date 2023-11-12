@extends('layout.layoutchinh')
@section('content')
<!-- <div class="set-web mx-auto">
        <div class="text-3xl border-b border-red-700 text-blue-800 mb-4">{{ $chuyenmuc->name }} </div>
        <main class="grid grid-cols-12">
            <div class="col-span-12 grid grid-cols-12 mr-6">
                @foreach($posts as $p)
                    <div class="col-span-12 grid grid-cols-12 mb-4 mt-2 border-b-2">
                        <div class="col-span-3 mt-2 p2">
                            <img src="/storage/{{ $p->thumbnail }}" alt="" class="w-full">
                        </div>
                        <div class="col-span-9 pl-2 pt-2">
                            <p class="font-bold text-justify text-xl my-1 text-gray-800">
                                <a href="/chi-tiet-di-san-nghe-thuat/{{$p['slug']}}">
                                    {{ $p->name }}
                                </a> </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>
    </div> -->



<div class=" mb-5">
    <div class="my-4">
        <span class=" text-lg text-blue-700"> Trang chủ > {{$name->name}} </span>
    </div>

    <div class="grid grid-cols-12 ">
        <div class="col-span-12">
             @foreach($posts as $ps)
            <div class="grid grid-cols-12 my-2 pb-4">
                <div class="col-span-4">
                    <div class="dsdisan-img-l rounded-xl">
                        <a href="/di-san-dan-ca/{{ $ps->slug}}">
                            <img class="w-full" src="/storage/{{ $ps->thumbnail }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-span-8 text-justify ml-5">
                    <a href="/di-san-dan-ca/{{ $ps->slug}}">
                        <p class="text-lg text-gray-700 hover:text-blue-700 font-bold mb-4">{{ $ps->name }}</p>
                    </a>
                    <p class="mb-0">Ngày đăng: {{ $ps->created_at->format('d/m/Y') }} </p>
                    <p class="mt-3">Sáng tác: {{ $ps->sangtac }} | Thể hiện: {{ $ps->thehien }} </p>
                    <p class="mt-1" style="height: 99px; overflow: hidden;">{{ $ps->noidung }}</p>
                </div>
            </div>
            @endforeach
            <div>
                @if($posts)
            {{$posts->links()}}
            @endif
            </div>
        </div>

    </div>

</div>
@endsection
