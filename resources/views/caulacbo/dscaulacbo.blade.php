@extends('layout.layoutchinh')
@section('content')

<div class=" mb-5">
    <div class="my-4">
        <span class=" text-lg text-blue-700"> Trang chủ >  </span>
    </div>

    <div class="grid grid-cols-12 ">
        <div class="col-span-12">
             @foreach($datas as $ps)
            <div class="grid grid-cols-12 my-2 pb-4">
                <div class="col-span-4">
                    <div class="dsdisan-img-l rounded-xl">
                        <a href="/di-san-dan-ca/{{ $ps->slug}}">
                            <img class="w-full" src="/storage/{{ $ps->thumbnail }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-span-8 text-justify ml-5">
                    <a href="/he-thong-cau-lac-bo/{{ $ps->slug}}">
                        <p class="text-lg text-gray-700 hover:text-blue-700 font-bold mb-4">{{ $ps->name }}</p>
                    </a>
                    <p class="mb-0"> <span class="font-bold"> Địa chỉ: </span>{{ $ps->diachi }} </p>
                    <p class="mb-0"> <span class="font-bold"> Lượng thành viên:</span> {{ $ps->luongthanhvien }} </p>
                    <p class="mt-1" style="height: 99px; overflow: hidden;"><span class="font-bold">Quy chế:</span> {{ $ps->quyche }}</p>
                </div>
            </div>
            @endforeach
            <div>
            @if( $datas )
            {{$datas->links()}}
            @endif
            </div>
        </div>

    </div>

</div>
@endsection
