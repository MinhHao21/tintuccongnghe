@extends('layout.layouttgpl')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<link rel="stylesheet" href="https://codepen.io/fancyapps/pen/Kxdwjj" />
<style>
.fancybox-button svg {
    background: white;
}
</style>
<div class="sm:col-span-12 col-span-12 m-3 text-justify bg-white"
    style="border-top: 2px solid black; font-family: Cambria, Georgia, serif;">

    <div class="text-lg  font-bold mb-4 pt-3 sm:px-0 px-2">
        <span class="danhmuc-text"><a href="/"><i class="fa fa-home"></i></a> > </span>
        <span class="danhmuc-text"> {{$tenDanhmuccha->name}} </span>
        <span class="danhmuc-text"> > </span>
        <span class="danhmuc-text"> {{ $chuyenmuc->name }} </span>
    </div>

    <div class="p-2" style="border:1px solid #c7c7c7; font-family: Times New Roman, Times, serif; ">
        @if($chitiet)
        <div class="grid grid-cols-12 mb-2 border-b">
            <div class="col-span-3">
                    <p class="text-gray-500 sm:text-base text-sm"><i class="fas fa-calendar-alt"></i>
                        {{$chitiet->published_at->format('d/m/Y')}}</p>
            </div>
            <div class="flex justify-end col-span-9">
              
                <button style="font-size:24px; color: #024fc3"><i class="mr-2  fa-brands fa-facebook-square"></i></button>
                <button><img class="w-6 mr-2" src="/images/message.png" alt=""></i></button>
                <button><img class="w-6 mr-2" src="/images/twitter.png" alt=""> </button>
                <button><img class="w-6 mr-2" src="/images/in.png" alt=""> </button>
                <button> <img class="w-6 mr-2" src="/images/pinterest.png" alt=""></button>
                <button> <img class="w-6" src="/images/email.png" alt=""></button>

            </div>
        </div>

        <p class="font-bold text-3xl text-justify  text-gray-800">{{ $chitiet->title }}</p>

        <!-- <p class="mx-auto"><img src="/storage/{{ $chitiet->thumbnail }}" alt="" class="w-full mx-auto"></p> -->
        <div class="text-gray-600 font-inclined text-lg text-justify mt-2 italic" style="font-size:19px;">
            {{ $chitiet->excerpt }}</div>
        @if($chitiet->link)
        <a class="mt-1" data-fancybox data-type="iframe"
            href="http://docs.google.com/gview?url=http://tuphap.hatinh.gov.vn/{{$chitiet->link}}&embedded=true"
            data-small-btn="true" data-iframe='{"preload":false}'>
            <div
                class="items-center mb-2 overflow-hidden text-gray-700 hover:text-blue-700 underline  hover:decoration-1">
                Tải về tại đây
            </div>
        </a>
        @else
        <div class=" text-lg mt-2  px-auto text-justify" style="font-size: 19px; line-height:25px">{!! $chitiet->content
            !!}</div>
        @endif
        @foreach( $upload as $ul)
        @if( $ul->duoifile == 'jpg' || $ul->duoifile == 'png' )

        <img class="w-full mx-auto" src="/{{$ul->link}}" alt="">
        @elseif ( $ul->duoifile == 'pdf' )
        <a class="hidden xl:block mt-1" data-fancybox data-type="iframe"
            href="http://docs.google.com/gview?url=http://tuphap.hatinh.gov.vn/{{$ul->link}}&embedded=true"
            data-small-btn="true" data-iframe='{"preload":false}'>
            <div class="items-center mb-2 overflow-hidden">
                <img class="w-6 float-left "
                    src="https://iconarchive.com/download/i100036/iynque/flat-ios7-style-documents/pdf.ico" alt="">
                <span class="py-auto ml-4"> {{$ul->tenfile}}
            </div>
        </a>
        <!-- <a target="_blank" href="/{{$ul->link}}"><img class="w-6 float-left " src="https://iconarchive.com/download/i100036/iynque/flat-ios7-style-documents/pdf.ico" alt=""> <span class="py-auto ml-4"> {{$ul->tenfile}}  </span></a> -->
        @elseif ( $ul->duoifile == 'doc' || $ul->duoifile == 'docx' )
        <a class="hidden xl:block mt-1" data-fancybox data-type="iframe"
            href="http://docs.google.com/gview?url=http://tuphap.hatinh.gov.vn/{{$ul->link}}&embedded=true"
            data-small-btn="true" data-iframe='{"preload":false}'>
            <div class="items-center mb-2 overflow-hidden">
                <img class="w-6 float-left "
                    src="https://banner2.cleanpng.com/20180425/hze/kisspng-microsoft-word-computer-icons-microsoft-office-5ae03fddba9b65.6523323015246458537644.jpg"
                    alt=""> <span class="py-auto ml-4"> {{$ul->tenfile}}
            </div>
        </a>
        <!-- <a target="_blank" href="/{{$ul->link}}" ><img class="w-6 float-left " src="https://banner2.cleanpng.com/20180425/hze/kisspng-microsoft-word-computer-icons-microsoft-office-5ae03fddba9b65.6523323015246458537644.jpg" alt=""> <span class="py-auto ml-4"> {{$ul->tenfile}} </span></a> -->
        @elseif ( $ul->duoifile == 'pptx' || $ul->duoifile == 'ppt' || $ul->duoifile == 'pps' )
        <a class="hidden xl:block mt-1" data-fancybox data-type="iframe"
            href="http://docs.google.com/gview?url=http://tuphap.hatinh.gov.vn/{{$ul->link}}&embedded=true"
            data-small-btn="true" data-iframe='{"preload":false}'>
            <div class="items-center mb-2 overflow-hidden">
                <img class="w-6 float-left "
                    src="https://banner2.cleanpng.com/20180205/wbq/kisspng-microsoft-powerpoint-microsoft-publisher-presentat-ms-powerpoint-transparent-background-5a78abcf270e40.63961649151785774316.jpg"
                    alt=""> <span class="py-auto ml-4"> {{$ul->tenfile}}
            </div>
        </a>
        @elseif ( $ul->duoifile == 'xlsx' || $ul->duoifile == 'xls' )
        <a class="hidden xl:block mt-1" data-fancybox data-type="iframe"
            href="http://docs.google.com/gview?url=http://tuphap.hatinh.gov.vn/{{$ul->link}}&embedded=true"
            data-small-btn="true" data-iframe='{"preload":false}'>
            <div class="items-center mb-2 overflow-hidden">
                <img class="w-6 float-left "
                    src="https://banner2.cleanpng.com/20180205/wbq/kisspng-microsoft-powerpoint-microsoft-publisher-presentat-ms-powerpoint-transparent-background-5a78abcf270e40.63961649151785774316.jpg"
                    alt=""> <span class="py-auto ml-4"> {{$ul->tenfile}}
            </div>
        </a>
        @elseif ( $ul->duoifile == 'rar' || $ul->duoifile == 'zip' || $ul->duoifile == 'zipx' || $ul->duoifile == '7z'
        || $ul->duoifile == 'bin' )
        <a class="hidden xl:block mt-1" href="/{{$ul->link}}">
            <div class="items-center mb-2 overflow-hidden">
                <img class="w-6 float-left "
                    src="https://banner2.cleanpng.com/20180205/wbq/kisspng-microsoft-powerpoint-microsoft-publisher-presentat-ms-powerpoint-transparent-background-5a78abcf270e40.63961649151785774316.jpg"
                    alt=""> <span class="py-auto ml-4"> {{$ul->tenfile}}
            </div>
        </a>
        <!-- <a target="_blank" href="/{{$ul->link}}" ><img class="w-6 float-left " src="https://banner2.cleanpng.com/20180205/wbq/kisspng-microsoft-powerpoint-microsoft-publisher-presentat-ms-powerpoint-transparent-background-5a78abcf270e40.63961649151785774316.jpg" alt=""> <span class="py-auto ml-4">{{$ul->tenfile}} </span></a> -->
        @else
        <video width="100%" loop muted autoplay>
            <source src="/{{$ul->link}}" type="video/mp4">
            Your browser does not support HTML video.
        </video>
        @endif
        @endforeach
        @endif
    </div>
    <h3 class="mt-4 text-red-700" style="border-left:2px solid red;">&nbspTIN TỨC LIÊN QUAN</h3>
    <div class="p-2 mt-2" style="border:1px solid #c7c7c7;">
        @foreach($tinlienquan as $p)
        <div class="col-span-12 grid grid-cols-12 mb-4 mt-2 border-b-2"
            style="font-family: Times New Roman, Times, serif;">
            <div class="sm:col-span-2 col-span-12 mt-2 p2">
                <img src="/storage/{{ $p->thumbnail }}" alt="" class="w-full">
            </div>
            <div class="sm:col-span-10  col-span-12 pl-2 pt-2">
                <p class="font-bold text-justify my-1 text-gray-800">
                    <a href="/chi-tiet-tin-tucs/{{$p['slug']}}">
                        {{ $p->title }}
                    </a>
                </p>
                <p class="text-base  text-justify text-gray-800">
                    {{ $p->excerpt }}
                </p>
            </div>
        </div>
        @endforeach
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
<script>
$(document).ready(function() {
    $('.fancybox').fancybox({
        toolbar: false,
        smallBtn: true,
        iframe: {
            preload: false
        }
    })
    // Close current fancybox instance
    parent.jQuery.fancybox.getInstance().close();

    // Adjust iframe height according to the contents
    parent.jQuery.fancybox.getInstance().update();
});
</script>
@endsection