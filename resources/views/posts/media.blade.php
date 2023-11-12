@extends('layout.trangchu')
@section('content')
<style>
    #changeBackghoundMedia{
        width: 50%; height: 320px;
    }
    @media (min-width: 640px) {
        #changeBackghoundMedia{
            width: 30%; height: 320px;
        }
    }
</style>
<div class="main-content-wrap page-news col-sm-9">
    @if($hightLight)
    <a href="/video/{{$hightLight->slug}}">
        <div style="display: flex; justify-content: right;">
            <div id="changeBackghoundMedia" style="position: relative; left:0; top:0; background-color: #e21f26;  
            box-shadow: 10px 10px 5px 0 #dedfdf;
            padding: 20px 20px 20px 14px;
            vertical-align: middle;
            position: absolute;
            float: left;
            margin: 50px 0 50px 15px;
            color: #fff;">
                <h1  style="font-size: 23px; padding-bottom: 10px; text-align: center;">
                    {{ $hightLight->title }}
                </h1>
                <h3 id="content-post_hightlight" style="font-size: 16px; text-align: justify; line-height: 1.4;
                display: block;
                overflow: hidden;
                width: 235px;
                display: -webkit-box;
                height: 16px*1.4*3;
                -webkit-line-clamp: 8;  /* số dòng hiển thị */
                -webkit-box-orient: vertical;
                overflow: hidden;
                text-overflow: ellipsis;
            ">

                    {!! $hightLight->description !!}
                    <p style="position: absolute; right: 0; padding: 5px 20px 5px 14px;">
        
                        {{ $hightLight->created_by }}
                    </p>
                </h3>
            </div>
            <div style="flex: 0 0 80%;">
                <!-- <img style="width: 100%;" src="./js/images/Dai-Dien-Ocop6a3a.jpg" alt="">
                -->
                <iframe style="width: 100%; height: 400px" src="{{$hightLight->linkyoutube}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </a>
    @endif
    <div class="flex" style="padding: 15px 0; margin: 10px auto;">
        @if($notHightLight)
        @foreach($notHightLight as $nh)
        <a href="/video/{{$hightLight->slug}}">
            <div class="box-video" style=" margin: 0 10px;">
                <iframe style="width: 100%; height: 400px" src="{{$nh->linkyoutube}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <h2 class="title-video" style="font-size: 26px; text-align: center;">{{$nh->title}} <br>
                    <p style="
                        display: block;
                        display: -webkit-box;
                        height: 16px*1.3*3;
                        font-size: 16px;
                        line-height: 1.3;
                        -webkit-line-clamp: 3;  /* số dòng hiển thị */
                        -webkit-box-orient: vertical;
                        overflow: hidden;
                        text-overflow: ellipsis;
                        margin-top:10px;
                    ">
                    {!! $nh->description !!}
                    </p>
                </h2>
            </div>
        <a>
        @endforeach
        {{$notHightLight->links()}}
        @endif
    </div>

</div>


@endsection