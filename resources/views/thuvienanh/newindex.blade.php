@extends('layout.layoutchinh')
@section('content')
<div class="col-span-9">
    <div class="mb-4 ">
        <h3 class="col-span-12 text-2xl font-bold text-blue-800 mb-8 uppercase px-2"
            style="border-left:  2px solid blue">
            {{$chuyenmuc->name}}
        </h3>
    </div>
    <div class="grid grid-cols-12">
        @foreach($dsablums as $ab)
        <div class=" col-span-6 mx-2 shadow-2xl" style="">

            <img class="w-full h-3/4 rounded-t-md " src="/storage/{{ $ab->path }}" alt="">
            <div class="h-1/4 text-center py-2 truncate ">
                <a href="/chi-tiet-albums/{{$ab->slug}}">
                    {{$ab->name}}
                </a>
            </div>



        </div>

        @endforeach
    </div>

</div>

@endsection