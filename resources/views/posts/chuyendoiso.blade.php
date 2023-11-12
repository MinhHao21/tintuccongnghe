@extends('layout.layoutchinh')
@section('content')

<div class="col-span-12 mb-2">
    <div class="bg-blue-700 py-2 pl-2">
        <p class="text-white font-bold text-lg">Chuyển đổi số</p>
    </div>

</div>
<div class="owl-carousel owl-theme">
    @foreach($postscarousel as $pct)
    <div class="item">
        <img src="/storage/{{$pct->thumbnail}}" class="block w-full h-96" alt="Motorbike Smoke" />
        <div class=" hidden md:block absolute text-center text-white  bg-gray-700 opacity-70 bottom-0 p-4 w-full">
            <h5 style="display: -webkit-box; -webkit-line-clamp:1;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;"
                class="text-xl"> {{$pct->title}}</h5>
            <p
                style="display: -webkit-box; -webkit-line-clamp:2;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">
                {{$pct->excerpt}}</p>
        </div>
    </div>
    @endforeach


</div>



<div class="col-span-12 grid grid-cols-12 mt-4">
    <div class="col-span-12 py-2" style="border-bottom: solid; border-color: #1d4ed8;">
        <p class="text-blue-600 font-bold text-sm ">TIN TỨC SỰ KIỆN</p>
    </div>
    @foreach($poststhumbnail as $pt)
    <div class="col-span-12 mt-2 " style="border-bottom: solid; border-color: #1d4ed8;">

        <div class="m-2 grid grid-cols-12 pb-2">
            <div class="col-span-4 h-40">
                <a href="/chi-tiet-tin-tuc/{{$pt['slug']}}">
                    <img class="h-full w-full" src="/storage/{{$pt->thumbnail}}" alt="">
                </a>

            </div>
            <div class="col-span-8 pl-4 h-full" style="border-bottom: solid; border-color: #cdced1;">
                <a href="/chi-tiet-tin-tuc/{{$pt['slug']}}">
                    <p class="text-blue-500 font-bold text-sm mb-2"
                        style="display: -webkit-box; -webkit-line-clamp:2;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">
                        {{$pt->title}}
                    </p>
                </a>

                <span class=" text-sm font-medium text-gray-500 "><i class="fas fa-calendar-alt"></i>
                    {{$pt->published_at->format('d/m/Y')}}</span>
                <a href="/chi-tiet-tin-tuc/{{$pt['slug']}}">
                    <p class=" text-sm mb-2"
                        style="display: -webkit-box; -webkit-line-clamp:5;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">
                        {{$pt->excerpt}}
                    </p>

                </a>
            </div>
        </div>

    </div>
    @endforeach
    {{$postsnotthumbnail}}
    @foreach($postsnotthumbnail as $pnt)
    <div class="col-span-12 mt-2 p-2 " style="border-bottom: solid; border-color: #cdced1;">
        <a href="/chi-tiet-tin-tuc/{{$pnt['slug']}}">
            <p class="text-blue-500 font-bold text-sm mb-2"
                style="display: -webkit-box; -webkit-line-clamp:2;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">
                {{$pnt->title}}
            </p>
        </a>

        <span class=" text-sm font-medium text-gray-500 "><i class="fas fa-calendar-alt"></i>
            {{$pnt->published_at->format('d/m/Y')}}</span>
        <a href="/chi-tiet-tin-tuc/{{$pnt['slug']}}">
            <p class=" text-sm mb-2"
                style="display: -webkit-box; -webkit-line-clamp:5;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">
                {{$pnt->excerpt}}
            </p>

        </a>
    </div>
    @endforeach
</div>
<div class="col-span-12 mt-2">
    <div class="bg-blue-700 py-2 pl-2">
        <p class="text-white font-bold text-lg">Video</p>
    </div>

    <div class="col-span-12 mt-2 p-2  ">
        @foreach($video as $v)
        <div class="m-2 grid grid-cols-12 pb-2">
            <div class="col-span-4 h-40">
                <iframe width="100%" height="100%" src="http://www.youtube.com/embed/{{$v->youtube_id}}" frameborder="0"
                    allowfullscreen></iframe>

            </div>
            <div class="col-span-8 pl-4 h-full" style="border-bottom: solid; border-color: #cdced1;">

                <p class="text-blue-500 font-bold text-sm mb-2"
                    style="display: -webkit-box; -webkit-line-clamp:2;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">
                    {{$v->title}}
                </p>

                <span class=" text-sm font-medium text-gray-500 "><i class="fas fa-calendar-alt"></i>
                    {{$v->published_at->format('d/m/Y')}}</span>


                <p class=" text-sm mt-2"
                    style="display: -webkit-box; -webkit-line-clamp:5;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">
                    {{$v->excerpt}}
                </p>

            </div>

        </div>
        @endforeach
    </div>

</div>

@endsection