@extends('layout.layoutchinh')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<link rel="stylesheet" href="https://codepen.io/fancyapps/pen/Kxdwjj" />
<style>
    .fancybox-button svg {
    background: white;
}
</style>
<div class="sm:col-span-9 col-span-12 m-3 text-justify bg-white" style="border-top: 2px solid black; font-family: Cambria, Georgia, serif;">
    <div class="p-2" style="border:1px solid #c7c7c7; font-family: Times New Roman, Times, serif; ">
        @if($chitiet)
            
            <p class="font-bold text-3xl text-justify  text-gray-800">{{ $chitiet->title }}</p>
                
                <!-- <p class="mx-auto"><img src="/storage/{{ $chitiet->thumbnail }}" alt="" class="w-full mx-auto"></p> -->
                <div class="text-gray-600 font-inclined text-lg text-justify mt-2 italic" style="font-size:19px;">{{ $chitiet->excerpt }}</div>
            <div class=" text-lg mt-2  px-auto text-justify" style="font-size: 19px; line-height:25px">{!! $chitiet->content !!}</div>
            @foreach($upload as $dk)
            <iframe src="http://docs.google.com/gview?url=http://tuphap.hatinh.gov.vn/{{$dk->link}}&embedded=true"style="width:600px;height:500px;"frameborder="0"></iframe>

                <a class="hidden xl:block mt-1" data-fancybox data-type="iframe" href="http://docs.google.com/gview?url=http://tuphap.hatinh.gov.vn/{{$dk->link}}&embedded=true" data-small-btn="true" data-iframe='{"preload":false}'>
                    <div class="items-center mb-2 overflow-hidden">
                        <span class=" w-max px-2 py-1 text-white rounded-lg sm:bg-blue-400 hover:bg-blue-500 bg-blue-500 transition duration-300 ease-in-out">
                            {{ $dk->tenfile}}
                        </span>
                    </div>
                </a>
                
            @endforeach
        @endif
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
