@extends('layout.layoutchinh')
@section('content')

<div class="vanban-content sm:px-0 px-2">

    <div class="w-full mt-3 sm:mb-0 mb-3">
        <table class="w-full rounded-lg" style="font-size: 12px;">
            
            <tr>
                <td  class="px-3 py-3 text-left w-2/6 sm:w-1/5  border-2 tracking-wider" style="font-size: 12px;">
                    Số ký kiệu: </td>
                <td class="px-3 py-3 text-left hover:bg-gray-200 border-gray-300 tracking-wider" style="font-size: 12px;">
                    {{$ctvanban['sokyhieu']}}</td>
            </tr>
            <tr>
                <td
                     class="px-3 py-3 text-left w-2/6 sm:w-1/5  border-2 tracking-wider" style="font-size: 12px;">
                    Trích yếu: </td>
                <td
                     class="px-3 py-3 text-left hover:bg-gray-200 border-gray-300 tracking-wider" style="font-size: 12px;">
                    {{$ctvanban['trichyeu']}}</td>
            </tr>
            <tr>
                <td
                     class="px-3 py-3 text-left w-2/6 sm:w-1/5  border-2 tracking-wider" style="font-size: 12px;">
                    Ngày ban hành: </td>
                <td
                     class="px-3 py-3 text-left hover:bg-gray-200 border-gray-300 tracking-wider" style="font-size: 12px;">
                    {{$ctvanban['ngaybanhanh']}}</td>
            </tr>
            <tr>
                <td
                     class="px-3 py-3 text-left w-2/6 sm:w-1/5  border-2 tracking-wider" style="font-size: 12px;">
                    Ngày hết hạn: </td>
                <td
                     class="px-3 py-3 text-left hover:bg-gray-200 border-gray-300 tracking-wider" style="font-size: 12px;">
                    {{$ctvanban['ngayhethan']}}</td>
            </tr>
            <tr>
                <td
                     class="px-3 py-3 text-left w-2/6 sm:w-1/5  border-2 tracking-wider" style="font-size: 12px;">
                    Người ký văn bản: </td>
                <td
                     class="px-3 py-3 text-left hover:bg-gray-200 border-gray-300 tracking-wider" style="font-size: 12px;">
                    {{$ctvanban['nguoiky']}}</td>
            </tr>
            <tr>
                <td
                     class="px-3 py-3 text-left w-2/6 sm:w-1/5  border-2 tracking-wider" style="font-size: 12px;">
                    Chức vụ: </td>
                <td
                     class="px-3 py-3 text-left hover:bg-gray-200 border-gray-300 tracking-wider" style="font-size: 12px;">
                    {{$ctvanban['chucvu']}}</td>
            </tr>
            <tr>
                <td
                     class="px-3 py-3 text-left w-2/6 sm:w-1/5  border-2 tracking-wider" style="font-size: 12px;">
                    Cơ quan ban hành: </td>
                <td
                     class="px-3 py-3 text-left hover:bg-gray-200 border-gray-300 tracking-wider" style="font-size: 12px;">
                    {{$ctvanban['coquanbanhanh']}}

                </td>
            </tr>
            <tr>
                <td
                     class="px-3 py-3 text-left w-2/6 sm:w-1/5  border-2 tracking-wider" style="font-size: 12px;">
                    Đính kèm: </td>
                    <td  class="px-3 py-3 text-left hover:bg-gray-200 border-gray-300 tracking-wider" style="font-size: 12px;">
                        @if($ctvanban['dinhkem'])
                        @foreach($ctvanban['dinhkem'] as $dk)
                        <a href="/storage/{{$dk}}" download>
                            {{ $dk}}
                        </a>
                        @endforeach
                        @endif
                    </td>

            </tr>
    
        </table>
    </div>
</div>
@endsection