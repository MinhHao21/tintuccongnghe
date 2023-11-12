@extends('layout.layoutchinh')
@section('content')
<div class="w-full">
    <div class="mb-4">
        <h3 class="col-span-12 text-2xl font-bold text-blue-800 mb-8 uppercase" style="border-left:  2px solid blue">
            &nbsp{{$name}}</h3>
    </div>
    <div class="grid grid-cols-12">

        <div class="col-span-12 text-center text-3xl py-4 text-white bg-blue-800 mb-4">
            <p>
                SỞ VĂN HÓA VÀ THỂ THAO NGHỆ AN
            </p>
            <p>
                TRUNG TÂM NGHỆ THUẬT TRUYỀN THỐNG
            </p>
        </div>

        @foreach($dsphongban as $pb)
        @if($pb->thutu == 1)
        <!-- Hiện thị phòng giám đốc -->
        @foreach($pb->tochuc as $tc)

        @if($tc->thutu == 1)
        <div class="col-span-12 text-center">
            <div
                style="width: 210px;height: 210px; background-image: url('/storage/{{ $tc->thumbnail}}'); background-size: cover; background-position-x: center; border: solid 7px #f4f4f4; border-radius: 50%;margin: 0 auto 10px auto;">

            </div>
            <p class="font-bold font-sans">
                {{$tc->chucvu}}
            </p>
            <p class="text-yellow-500 font-bold font-sans">
                {{$tc->name}}
            </p>
            <p>
                email: {{$tc->email}}
            </p>
            <p>
                Điện thoại: {{$tc->dienthoai}}
            </p>
        </div>
        @else
        <div class="col-span-12 lg:col-span-6 m-2 text-center border-solid border">
            <div class="py-2">
                <p class="font-bold font-sans">
                    {{$tc->chucvu}}
                </p>
                <p class="text-yellow-500 font-bold font-sans">
                    {{$tc->name}}
                </p>
                <p>
                    email: {{$tc->email}}
                </p>
                <p>
                    Điện thoại: {{$tc->dienthoai}}
                </p>
            </div>
        </div>

        @endif

        @endforeach
        @else
        <div class="col-span-12 lg:col-span-3 text-center text-xs border-solid border p-4 m-2">
            <div class="text-white   h-12 mb-2 ">
                <p class="py-2 font-bold text-bold text-blue-600 h-full"
                    style="color:#2e99cd; border-bottom: 2px solid #5baec7;"> {{$pb->name}}</p>

            </div>
            @foreach($pb->tochuc as $tc)
            <div class="my-2">
                <p>
                    {{$tc->chucvu}}
                </p>
                <p class="text-yellow-500 font-bold font-sans">
                    {{$tc->name}}
                </p>
                <p>
                    email: {{$tc->email}}
                </p>
                <p>
                    Điện thoại: {{$tc->dienthoai}}
                </p>
            </div>
            @endforeach
        </div>


        @endif
        @endforeach
    </div>

</div>

@endsection