@extends('layout.layoutchinh')
@section('content')

<div class="col-span-9">
    <div class="mb-4 ">
        <h3 class="col-span-12 text-2xl font-bold text-blue-800 mb-8 uppercase px-2"
            style="border-left:  2px solid blue">
            ablums : {{$info_ablums->name}}
        </h3>
    </div>


</div>
<div class="owl-carousel owl-theme">
    @foreach($datas_photos as $pts)
    <div class="item">
        <img src="/storage/{{ $pts->path }}" class="block w-full h-96" alt="Motorbike Smoke" />
        <div class=" hidden md:block absolute text-center text-white  bg-gray-700 opacity-70 bottom-0 p-4 w-full">
            <p
                style="display: -webkit-box; -webkit-line-clamp:2;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">
                {{$pts->description}}</p>
        </div>
    </div>
    @endforeach


</div>

@endsection