@extends('layout.trangchu')
@section('content')

<div class="vanban-content sm:px-0 px-2">
    <div class="w-full mt-3 sm:mb-0 mb-3">
        <table class="w-full rounded-lg" style="font-size:12px;">

            <tr>
                <td class="font-bold px-3 py-3 text-left w-2/6 sm:w-1/5 font-medium  border-2 tracking-wider"
                    style="border-width: 1px; border-color:#ddd; border-style: solid;  background: #F9F9F9;">
                    Số ký kiệu : </td>
                <td class="px-3 py-3 text-left hover:bg-gray-200 font-medium border-2 border-gray-300 tracking-wider"
                    style="border-width: 1px; border-color:#ddd; border-style: solid;">
                    {{$ctvanban->sokyhieu}}</td>
            </tr>
            <tr>
                <td class="font-bold px-3 py-3 text-left w-2/6 sm:w-1/5 font-medium  border-2 tracking-wider"
                    style="border-width: 1px; border-color:#ddd; border-style: solid;    background: #F9F9F9;">
                    Trích yếu : </td>
                <td style="border-width: 1px; border-color:#ddd; border-style: solid;"
                    class="px-3 py-3 text-left hover:bg-gray-200 font-medium border-2 border-gray-300 tracking-wider">
                    {{$ctvanban->trichyeu}}</td>
            </tr>
            <tr>
                <td style="border-width: 1px; border-color:#ddd; border-style: solid;    background: #F9F9F9;"
                    class="font-bold px-3 py-3 text-left w-2/6 sm:w-1/5 font-medium  border-2 tracking-wider">
                    Ngày ban hành : </td>
                <td style="border-width: 1px; border-color:#ddd; border-style: solid;"
                    class="px-3 py-3 text-left hover:bg-gray-200 font-medium border-2 border-gray-300 tracking-wider">
                    {{$ctvanban->ngaybanhanh}}</td>
            </tr>
            <tr>
                <td style="border-width: 1px; border-color:#ddd; border-style: solid;    background: #F9F9F9;"
                    class="font-bold px-3 py-3 text-left w-2/6 sm:w-1/5 font-medium  border-2 tracking-wider">
                    Ngày hết hạn : </td>
                <td style="border-width: 1px; border-color:#ddd; border-style: solid;"
                    class="px-3 py-3 text-left hover:bg-gray-200 font-medium border-2 border-gray-300 tracking-wider">
                    {{$ctvanban->ngayhethan}}</td>
            </tr>
            <tr>
                <td style="border-width: 1px; border-color:#ddd; border-style: solid;    background: #F9F9F9;"
                    class="font-bold px-3 py-3 text-left w-2/6 sm:w-1/5 font-medium  border-2 tracking-wider">
                    Người ký văn bản : </td>
                <td style="border-width: 1px; border-color:#ddd; border-style: solid;"
                    class="px-3 py-3 text-left hover:bg-gray-200 font-medium border-2 border-gray-300 tracking-wider">
                    {{$ctvanban->nguoiky}}</td>
            </tr>
            <tr>
                <td style="border-width: 1px; border-color:#ddd; border-style: solid;    background: #F9F9F9;"
                    class="font-bold px-3 py-3 text-left w-2/6 sm:w-1/5 font-medium  border-2 tracking-wider">
                    Chức vụ : </td>
                <td style="border-width: 1px; border-color:#ddd; border-style: solid;"
                    class="px-3 py-3 text-left hover:bg-gray-200 font-medium border-2 border-gray-300 tracking-wider">
                    {{$ctvanban->chucvu}}</td>
            </tr>
            <tr>
                <td style="border-width: 1px; border-color:#ddd; border-style: solid;    background: #F9F9F9;"
                    class="font-bold px-3 py-3 text-left w-2/6 sm:w-1/5 font-medium  border-2 tracking-wider">
                    Cơ quan ban hành : </td>
                <td style="border-width: 1px; border-color:#ddd; border-style: solid;"
                    class="px-3 py-3 text-left hover:bg-gray-200 font-medium border-2 border-gray-300 tracking-wider">
                    {{$ctvanban->coquanbanhanh}}

                </td>
            </tr>
            <tr>
                <td style="border-width: 1px; border-color:#ddd; border-style: solid;    background: #F9F9F9;"
                    class="font-bold px-3 py-3 text-left w-2/6 sm:w-1/5 font-medium  border-2 tracking-wider">
                    Đính kèm : </td>
                <td style="border-width: 1px; border-color:#ddd; border-style: solid;"
                    class="px-3 py-3 text-left hover:bg-gray-200 font-medium border-2 border-gray-300 tracking-wider">
                    @if($ctvanban->dinhkem)
                    @foreach($ctvanban->dinhkem as $dk)
                    @if($dk['duoifile'] == 'pdf')
                    <div class="mb-4">
                        <a class="grid grid-cols-12" target="_blank" href="{{$dk['link']}}" download><img
                                class="col-span-12 w-6 "
                                src="https://iconarchive.com/download/i100036/iynque/flat-ios7-style-documents/pdf.ico"
                                alt="">
                            {{ $dk['tenfile']}} </a>

                    </div>
                    @elseif($dk['duoifile'] == 'doc' || $dk['duoifile'] == 'docx')
                    <div class="mb-4">
                        <a class="grid grid-cols-12" target="_blank" href="{{$dk['link']}}" download><img
                                class="col-span-12 w-6 "
                                src="https://banner2.cleanpng.com/20180425/hze/kisspng-microsoft-word-computer-icons-microsoft-office-5ae03fddba9b65.6523323015246458537644.jpg"
                                alt=""> {{ $dk['tenfile']}} </a>
                    </div>
                    @elseif($dk['duoifile'] == 'pptx' || $dk['duoifile'] == 'ppt' || $dk['duoifile'] == 'pps')
                    <div class="mb-4">
                        <a class="grid grid-cols-12" target="_blank" href="{{$dk['link']}}" download><img
                                class="col-span-12 w-6 "
                                src="https://banner2.cleanpng.com/20180205/wbq/kisspng-microsoft-powerpoint-microsoft-publisher-presentat-ms-powerpoint-transparent-background-5a78abcf270e40.63961649151785774316.jpg"
                                alt=""> {{ $dk['tenfile']}} </a>
                    </div>
                    @endif

                    </a>
                    @endforeach
                    @endif
                </td>

            </tr>

        </table>
    </div>

</div>
@endsection