@extends('layout.layoutchinh')
@section('content')
<style>
th,
td {
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 10px;
    padding-right: 10px;
}
</style>
<div style="background-color: #024fc3;height: 28px;background-image: linear-gradient(to right, #024fc3 , white);">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 float-left text-white" fill="none" viewBox="0 0 24 24"
        stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
    </svg>
    <div class="float-left ml-2 pt-1 text-white" style="font-size: 14px;">GÓP Ý QUY HOẠCH, KẾ HOẠCH, ĐỀ ÁN</div>
</div>
<div class=" mt-3 sm:mb-0 mb-3" style="overflow-x:auto;">
    <table class="table is-bordered w-full table-auto" style="border: 1px solid #ddd">
        <thead>
            <tr class="font-bold text-center text-gray-800 py-8" style="font-size: 13px;">
                <td class="w-5/10" style="border-right: 1px solid #ddd; border-bottom: 1px solid #ddd">
                    Trích yếu
                </td>
                <td class="w-3/10" style="border-right: 1px solid #ddd; border-bottom: 1px solid #ddd">
                    Thời gian lấy ý kiến
                </td>
                <td class="w-2/10" style="border-bottom: 1px solid #ddd">
                    Đính kèm
                </td>
            </tr>
        </thead>
        <tbody class="py-2" style="border-bottom: 1px solid #c7c7c7 ;font-size: 13px;">
            @foreach( $vanbangopy as $vbgy)
            <tr class="text-center" style="color: black;">
                <td class="text-justify" style="border-right: 1px solid #ddd; border-bottom: 1px solid #ddd"> <a
                        href="/chi-tiet-van-ban-gop-y/{{$vbgy['slug']}}">{{$vbgy->noidung}}</a></td>
                <td style="border-right: 1px solid #ddd; border-bottom: 1px solid #ddd"> <a href="">- Từ ngày :
                        {{$vbgy->ngaybatdau}}<br>- Đến ngày : {{$vbgy->ngayketthuc}}</a></td>
                <td style="border-bottom: 1px solid #ddd">
                   
                    @foreach( $vbgy->upload as $ul)
                 
                    @if( $ul->duoifile == 'jpg' || $ul->duoifile == 'png' )

                    <img class="w-full mx-auto" src="/{{$ul->link}}" alt="">
                    @elseif ( $ul->duoifile == 'pdf' )
                    <a class="hidden xl:block mt-1" data-fancybox data-type="iframe"
                        href="http://docs.google.com/gview?url=http://tuphap.hatinh.gov.vn/{{$ul->link}}&embedded=true"
                        data-small-btn="true" data-iframe='{"preload":false}'>
                        <div class="items-center mb-2 overflow-hidden">
                            <img class="w-6 float-left "
                                src="https://iconarchive.com/download/i100036/iynque/flat-ios7-style-documents/pdf.ico"
                                alt="">
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
                    @elseif ( $ul->duoifile == 'rar' || $ul->duoifile == 'zip' || $ul->duoifile == 'zipx' ||
                    $ul->duoifile == '7z'
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
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

</div>

@endsection