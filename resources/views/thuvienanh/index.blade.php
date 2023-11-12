@extends('layout.layoutchinh')
@section('content')
<div class="col-span-9">
    <div class="mb-4">
        <h3 class="col-span-12 text-2xl font-bold text-blue-800 mb-8 uppercase" style="border-left:  2px solid blue">
            Thư viện ảnh : {{$name}}</h3>
    </div>
    <div class="grid grid-cols-12">
    @foreach($dsthuvienanh as $dstva)
    <div class=" col-span-4 mr-4 mb-4" style="">
        <img src="../{{ $dstva->link }}" alt="">
    </div>
    @endforeach
    </div>
   
</div>

@endsection