@extends('layout.layoutchinh')
@section('content')
<div class="border-blue-700 px-3 py-2 font-bold text-xl text-white w-2/4     mb-4 text-center"
            style="background-color: #436eaf;height: 45px;">
            Sơ đồ cổng
        </div>
<div class="ml-5 mt-3 leading-8 " >
    <div class="">
         <i class="fa-solid fa-folder-open text-blue-900 hover:text-blue-600"  ></i></i><a href="/"
            class="text-blue-900  font-bold text-lg hover:text-blue-600" >Trang chủ </a>
    </div>

    @foreach ($danhmuc as $dm)

    <div class="">
        <i class="fa-solid fa-folder-open text-blue-900 hover:text-blue-600" ></i>

        @if($dm['loaidanhmuc_id'] == 3 || $dm['loaidanhmuc_id'] == 1 )
        <a href="/danh-muc/{{$dm['slug']}}" class="text-blue-900  font-bold text-lg hover:text-blue-600 " >{{$dm['label']}}
        </a>
        @else

        @if($dm['loaidanhmuc_id'] == 7)
        <a href="{{$dm['url']}}" class="text-blue-900  font-bold text-lg hover:text-blue-600 " >{{$dm['label']}}</a>

        @else
        <a href="/danh-muc/{{$dm['slug']}}"
            class="text-blue-900  font-bold text-lg hover:text-blue-600" >{{$dm['label']}}</a>

        @endif

        @endif
        @if ($dm['kiemtra']==1)
        @include('layout.childsodoweb', ['danhmuc' => $dm['children']])
        @endif
    </div>
    @endforeach
    <div>
        <i class="fa-solid fa-folder-open text-blue-900 hover:text-blue-600" ></i></i><a href="/hoi-dap"
            class="text-blue-900  font-bold text-lg hover:text-blue-600" >Hỏi đáp </a>
    </div>
    <div>
        <i class="fa-solid fa-folder-open text-blue-900 hover:text-blue-600" ></i></i><a href="/lien-he"
            class="text-blue-900  font-bold text-lg hover:text-blue-600" >Liên hệ </a>
    </div>

</div>





@endsection