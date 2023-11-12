@extends('layout.layoutchinh')
@section('content')




<div class=" mb-5">
@if($chiTiet)
    <div class="my-4">
        <span class=" text-lg text-blue-700"> Trang chủ > Chi tiết</span>
    </div>

    <div>
        <p class="text-lg text-gray-700 hover:text-blue-700 font-bold mb-4"> {{$chiTiet->name}}</p>
        <div class=" rounded-xl">
                        <a href="">
                            <img class="w-full" src="/storage/{{$chiTiet->thumbnail}}" alt="">
                        </a>
                    </div>
        <p class="mt-3">Ngày đăng: {{ $chiTiet->created_at->format('d/m/Y') }}</p>
        <p class=" font-bold mt-2 ">Sáng tác: {{$chiTiet->sangtac}} | Thể hiện: {{$chiTiet->thehien}} </p>
        <p class=" font-bold my-2">Lời mới: {{$chiTiet->loimoi}} | Phối khí: {{$chiTiet->phoikhi}} </p>
        <div>
        {{$chiTiet->noidung}}
        </div>
    </div>
    @endif
</div>
@endsection
