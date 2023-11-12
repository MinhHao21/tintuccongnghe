@extends('layout.layoutchinh')
@section('content')
<div id="nghesi" class=" mx-auto">
    <!-- <div class="text-sm border-b border-red-700 text-blue-800 mb-4">{{ $chuyenmuc->name }} </div> -->
    <h3 class=" text-2xl font-bold text-blue-800 mb-8" style="border-left:  2px solid blue">&nbsp@{{nameDm}}</h3>
    <div class="grid grid-cols-12">
    <div class=" grid grid-cols-12 col-span-12">
            <div class="sm:col-span-6 col-span-12">
                <div class="input-group relative flex flex-wrap items-stretch w-full mb-4 padding1">
                    <input  v-on:keyup="searchText($event)" width="100%" type="search" class="form-control relative flex-auto min-w-0 block  px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-l transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Tìm kiếm..." aria-label="Search" aria-describedby="button-addon2">
                    <!-- <button style="width:20%" class="btn px-5 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-r shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center" type="button" id="button-addon2">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                        </svg>
                    </button> -->
                </div>
            </div>
            <div class="sm:col-span-6 col-span-12 padding1">
                <div class="inline-block relative w-full">
                    <select @change=" chonKhuvuc($event) " class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                        <option value="">--- Chọn khu vực ---</option>
                        <option v-for="kv in listDiaban" :value="kv.id"> @{{kv.name}} </option>

                    </select>
                   
                </div>
             
            </div>
        </div>
        <div  v-for="ns in listNghesi " class="sm:col-span-6 col-span-12 margin1 mb-4 p-4" style="border: solid 1px #7dc5bb;">
            <div class="grid grid-cols-12">
                <div class="col-span-4 mr-5">
                    <div>
                  <a :href="/chi-tiet-nghe-sy/+ ns.slug"> <img class="w-full" :src="/storage/+ ns.anhdaidien" alt=""></a> 
                    </div>

                </div>
                <div class="col-span-8">
                <p class="mb-2 sm:text-sm text-xs" style="border-bottom: 1px dashed #bbbbbb"><span class=" font-bold  ">Họ và tên:</span> <a :href="/chi-tiet-nghe-sy/+ ns.slug"> @{{ ns.name }}</a> </p>
                    <p class="mb-2 sm:text-sm text-xs" style="border-bottom: 1px dashed #bbbbbb"><span class=" font-bold  ">Năm sinh:</span> @{{ ns.nam }}</p>
                    <p class="mb-2 sm:text-sm text-xs" style="border-bottom: 1px dashed #bbbbbb"><span class=" font-bold  ">Quê quán:</span> @{{ ns.quequan }}</p>
                    <p class="sm:text-sm text-xs"><span class="font-bold  ">Địa chỉ:</span> @{{ ns.diachi }}</p>

                </div>
            </div>
            
        </div>
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-10 mb-5">
                <div class="" style="padding-left: 80%">
                    <!-- <li class=" rounded-lg" style="background-color: #4d6e64;" v-if="phantrang.trangtruoc > 1">
                            <a class=" text-white pagination__link" href="javascript:;" v-on:click="chuyenTrang(1)">
                                <i class="w-4 h-4" data-feather="chevrons-left"></i>
                            </a>
                        </li>
                        <li class=" rounded-lg" style="background-color: #4d6e64;" v-if="phantrang.tranghientai > 1">
                            <a class=" text-white pagination__link" href="javascript:;" v-on:click="chuyenTrang(phantrang.trangtruoc)">
                                <i class="w-4 h-4" data-feather="chevron-left"></i>
                            </a>
                        </li> -->
                    <!-- <li class=" rounded " style="background-color: #4d6e64;" v-if="phantrang.trangtruoc > 1">
                            <a class=" text-lg  text-white pagination__link" href="javascript:;">...</a>
                        </li> -->
                    <span class=" rounded px-2 py-1 " style="background-color: #769f93; height:unset" class="my-auto mx-4" v-if="phantrang.tranghientai != 1" v-on:click="chuyenTrang(phantrang.trangtruoc)">
                        <a href="javascript:;" style="color:white; font-size: 16px;">@{{phantrang.trangtruoc}}</a>
                    </span>
                    <span class=" rounded px-2 py-1 " style="background-color: #4d6e64; height:unset">
                        <a style="color:white; font-size: 16px;">@{{phantrang.tranghientai}}</a>
                    </span>
                    <span class=" rounded px-2 py-1 " style="background-color: #769f93; height:unset" class="my-auto mx-4 " v-if="phantrang.tranghientai < phantrang.tongtrang && phantrang.tongtrang>0">
                        <a href="javascript:;" style="color:white; font-size: 16px;" v-on:click="chuyenTrang(phantrang.trangtieptheo)">@{{phantrang.trangtieptheo}}</a>
                    </span>
                    <!-- <li class=" rounded " style="background-color: #4d6e64;" v-if="phantrang.tranghientai < phantrang.tongtrang && phantrang.tongtrang>0">
                            <a class=" text-lg  text-white pagination__link" href="javascript:;">...</a>
                        </li> -->
                    <!-- <li class=" rounded-lg" style="background-color: #4d6e64;" v-if="phantrang.tranghientai < phantrang.tongtrang && phantrang.tongtrang>0">
                            <a class=" text-white pagination__link" href="javascript:;" v-on:click="chuyenTrang(phantrang.trangtieptheo)">
                                <i class="w-4 h-4" data-feather="chevron-right"></i>
                            </a>
                        </li>
                        <li class=" rounded-lg" style="background-color: #4d6e64;" v-if="phantrang.tranghientai < phantrang.tongtrang && phantrang.tongtrang>0">
                            <a class=" text-white pagination__link" href="javascript:;" v-on:click="chuyenTrang(phantrang.tongtrang)">
                                <i class="w-4 h-4" data-feather="chevrons-right"></i>
                            </a>
                        </li> -->
                </div>
            </div>
    </div>


    

</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    // Vue.use(VTooltip)
    var vm = new Vue({
        el: '#nghesi',
        data: {
            nameDm: '',
            listNghesi: [],
            slug: '<?php echo $slug ?> ',
            phantrang: {
                tranghientai: 1,
                trangtieptheo: '',
                trangtruoc: '',
                trangcuoi: '',
                tongtrang: '',
            },
            listDiaban: [],
            searchName:'',
            khuVuc:'',
        },
        mounted: function() {
            this.reloadData();
            this.getDiaban();


        },

        methods: {
            chonKhuvuc(e){
                this.khuVuc = e.target.value;
                this.reloadData();
            },
            searchText(e){
                this.searchName = e.target.value;
                this.reloadData();
            },
            getDiaban() {
                const self = this;
                axios.get("/getDiaban")
                    .then(function(response) {
                        self.listDiaban = response.data;

                    });
            },
            chuyenTrang(sotrang) {
                const self = this;
                self.phantrang.tranghientai = sotrang;
                self.reloadData();
            },
            reloadData() {
                const self = this;
                axios.get("/reloadNghenhan?trang=" + self.phantrang.tranghientai + '&slug=' + self.slug +  '&searchName=' + self.searchName +  '&khuVuc=' + self.khuVuc  )
                    .then(function(response) {
                        self.listNghesi = response.data.dsNghenhan;
                        self.nameDm = response.data.nameDanhmuc;

                        self.phantrang.tongtrang = parseInt(response.data.sotrang);
                        // Từ trang hiện tại tính trang tiếp theo,trang trươc ...
                        if (self.phantrang.tranghientai < self.phantrang.tongtrang) {
                            self.phantrang.trangtieptheo = self.phantrang.tranghientai + 1
                        } else {
                            self.phantrang.trangtieptheo = null;
                        }
                        if (self.phantrang.tranghientai > 1) {
                            self.phantrang.trangtruoc = self.phantrang.tranghientai - 1
                        } else {
                            self.phantrang.trangtruoc = null;
                        }
                    });
            },


        }
    })
</script>
@endsection