@extends('layout.layouttgpl')
@section('content')
<div id='luotxem' class="set-web mx-auto sm:col-span-12 col-span-12 mt-1 background-pc2 p-2 w-full">
    <div class="text-lg border-b border-red-700 font-bold mb-4 pt-3 sm:px-0 px-2" style="border-top: 3px solid black">
        <span class="danhmuc-text "><a href="/"><i class="fa fa-home"></i></a> > </span> 
        <span class="danhmuc-text "> {{$tenDanhmuccha->name}} </span> 
        <span class="danhmuc-text "> > </span> 
        <span  class="danhmuc-text"> {{ $chuyenmuc->name }} </span>
    </div>
    <main class="grid grid-cols-12 sm:px-0 px-2">
        <div class="col-span-12">

            @foreach($posts as $p)
            @if( $slug == 'Tin-noi-bat' || $slug == 'Hoat-dong-Tu-phap')
            <div class="grid grid-cols-12 my-2 bg-white p-4" style="border: 1px solid gray">
                <div class="col-span-3">
                    <div>
                        <img src="/storage/{{ $p->thumbnail }}" alt="">
                    </div>
                </div>
                <div class="col-span-8 ml-4">
                    <div class="col-span-12 text-justify ">
                        <a href="/chi-tiet-tin-tucs/{{$p['slug']}}">
                            <p class="sm:text-lg text-base  text-blue-600 hover:text-black  font-bold mb-4" >
                                {{ $p->title }}</p>
                        </a>
                    </div>
                    @if($p->published_at)
                    <div class="col-span-12">
                        <p class="text-gray-500 sm:text-base text-sm"><i class="fas fa-calendar-alt"></i>
                            {{$p->published_at->format('d/m/Y')}}</p>
                    </div>
                    @endif
                </div>

            </div>
            @else
            <div class="grid grid-cols-12 my-2 bg-white p-4" style="border: 1px solid gray">


                <div class="col-span-12 text-justify ">
                    <a href="/chi-tiet-tin-tucs/{{$p['slug']}}">
                        <p class="sm:text-lg text-base text-blue-600 hover:text-black  font-bold mb-4" >
                            {{ $p->title }}</p>
                    </a>
                </div>
                @if($p->published_at)
                <div class="col-span-12">
                    <p class="text-gray-500 sm:text-base text-sm"><i class="fas fa-calendar-alt"></i>
                        {{$p->published_at->format('d/m/Y')}}</p>
                </div>
                @endif


            </div>
            @endif
            @endforeach

            <div>
                {{ $posts->links() }}
            </div>
        </div>
    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
var vm = new Vue({
    el: '#luotxem',
    data: {
        dsvanban: [],
        sokyhieu: '',
        tennganh: '',
        ngaybanhanh: '',
        ngayhethan: '',
        coquanbanhanh: '',
        loaivb: '',
        idvb: '27',
        soLuotxem: 0,

    },
    // chạy ngay khi web load
    mounted: function() {
        const self = this;

    },
    // chạy khi thực hiện event
    methods: {
        tinhLuotxem(item) {
            //console.log(item)
            const x = Number(item.luotxem);
            this.soLuotxem = x + 1;
            console.log(this.soLuotxem)
            const self = this;
            axios.put("/tinhLuotxem?id=" + item.id + '&luotxem=' + self.soLuotxem)
                .then(function(response) {});
            // window.location = '/danhsach/'+ item.slug+ '/' + this.slug  ;
        },

        doianh() {
            console.log('vao ham doi anh');
        },
    }
})
</script>
@endsection