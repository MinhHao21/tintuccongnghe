@extends('layout.layoutchinh')
@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<link rel="stylesheet" href="https://codepen.io/fancyapps/pen/Kxdwjj" />
<style>
    th,
    td {
        padding-top: 5px;
        padding-bottom: 5px;
        padding-left: 10px;
        padding-right: 10px;
    }
</style>
<div id="searchvanban" class="set-web mx-auto col-span-12">
    <div class="grid grid-cols-12 w-full mb-2">
        <div class="col-span-6 grid grid-cols-12 mr-2">
            <div class="col-span-3" style="background: rgb(205 205 205)">
                <a href="/danh-muc/Quyet-Dinh">
                    <img class="mx-auto" style="padding: 5px; width: 80%;" src="/images/logostp.png" alt="">
                </a>
            </div>
            <div class="col-span-9 flex items-center " style="background: #eeeeee;">
                <a href="/danh-muc/Quyet-Dinh" class="  p-2 pl-2 pr-2 w-full text-center text-blue-800 text-base uppercase font-semibold">Văn
                    bản địa phương</a>
            </div>
        </div>

        <div class="col-span-6 grid grid-cols-12  ">

            <div class="col-span-3 flex items-center " style="background: rgb(205 205 205)">
                <a href="https://vbpl.vn/TW/Pages/home.aspx ">
                    <img class="mx-auto" style="padding: 5px; width: 80%; " src="/images/favicon.png" alt="">
                </a>
            </div>
            <div class="col-span-9 flex items-center " style="background: #eeeeee;">
                <a href="https://vbpl.vn/TW/Pages/home.aspx" class="  p-2 pl-2 pr-2 w-full text-center  text-blue-800 text-base uppercase font-semibold">Văn
                    bản Trung Ương</a>
            </div>
        </div>

    </div>
    <div class="w-full mb-6 ">
        <div class="border-blue-700 px-3 py-2 font-bold text-xl text-white w-2/4 mx-auto mb-4 text-center" style="background-color: #436eaf;height: 45px;">
            Tìm kiếm văn bản
        </div>
        <div class=" border-blue-700 border-4" style="border-width: 1px; border-color:#ddd; border-style: solid;">

            <!--  -->


            <!--  -->
            <div class="grid grid-cols-12 w-full px-2">
                <div class="col-span-12 sm:col-span-6 m-2">


                    <input v-model="tenvanban" type="text" name="" id="" class=" block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded col-span-8" style="border-width: 1px; border-color:#c2c2c2 ; border-style: solid;" placeholder="Tên văn bản">

                </div>
                <div class="col-span-12 sm:col-span-6 m-2">


                    <input v-model="sokyhieu" type="text" name="" id="" class=" block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded col-span-8" style="border-width: 1px; border-color:#c2c2c2 ; border-style: solid;" placeholder="Số ký hiệu">

                </div>
                <!--  -->
                <div class="col-span-12 sm:col-span-6 m-2">


                    <select v-model="chuyenmuc_id" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded col-span-8" id="grid-state" style="border-width: 1px; border-color:#c2c2c2 ; border-style: solid;">
                        <option value="0"> -- Chuyên Mục --</option>
                        <option v-for="cm in chuyenmuc" :value="cm.value">
                            @{{ cm.name }}
                        </option>
                    </select>

                </div>
                <!--  -->
                <div class="col-span-12 sm:col-span-6 m-2">

                    <select v-model="linhvuc_id" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded col-span-8" id="grid-state" style="border-width: 1px; border-color:#c2c2c2 ; border-style: solid;">
                        <option value="0"> -- Lĩnh vực văn bản --</option>
                        <option v-for="lv in linhvuc" :value="lv.value">
                            @{{ lv.name }}
                        </option>

                    </select>

                </div>
                <!--  -->
            </div>
            <div class="grid grid-cols-12 w-full p-2">


                <!--  -->
                <div class="col-span-12 sm:col-span-6 m-2">


                    <select v-model="coquanbanhanh_id" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded col-span-8" id="grid-state" style="border-width: 1px; border-color:#c2c2c2 ; border-style: solid;">
                        <option value="0"> -- Đơn vị ban hành --</option>
                        <option v-for="cqbh in coquanbanhanh" :value="cqbh.value">
                            @{{ cqbh.name }}
                        </option>
                    </select>

                </div>
                <!--  -->
                <div class="col-span-12 sm:col-span-6 m-2">

                    <input v-model="ngaybanhanh" type="date" name="" id="" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded col-span-8" style="border-width: 1px; border-color:#c2c2c2 ; border-style: solid;">

                </div>
                <div class="col-start-10 col-end-13 sm:col-start-10 col-end-13 sm:mx-3">

                    <button @click="search()" class="p-1 pl-5 pr-5 bg-transparent border-2 border-blue-500 text-blue-500 text-lg rounded-lg hover:bg-blue-500 hover:text-gray-100 focus:border-4 focus:border-blue-300" style="    background: #3b82f6;
    color: white;">Tìm
                        kiếm</button>
                </div>
                <!--  -->
            </div>
        </div>
        <!--  -->
        <div class=" mt-3 sm:mb-0 mb-3" style="overflow-x:auto;">
            <table class="table is-bordered w-full" style="font-size:13px; border: 1px solid #ddd">
                <thead>
                    <tr class="py-1.5 text-center font-bold" style="">
                        <td class="" style="border-width: 1px; border-color:#ddd; border-style: solid;">
                            Số/Ký hiệu
                        </td>
                        <td class="" style="border-width: 1px; border-color:#ddd; border-style: solid;">
                            Trích yếu
                        </td>
                        <td class="" style="border-width: 1px; border-color:#ddd; border-style: solid;">
                            Ngày BH
                        </td>
                        <td class="" style="border-width: 1px; border-color:#ddd; border-style: solid;">
                            Ngày có hiệu lực
                        </td>
                        <td class="" style="border-width: 1px; border-color:#ddd; border-style: solid;">
                            File gắn
                        </td>
                    </tr>
                </thead>
                <tbody class="py-2" style="border-bottom: 1px solid #c7c7c7">
                    <tr class="text-justify" v-for="dt in dsvanban" style="">
                        <td class="text-center" style="border-width: 1px; border-color:#ddd; border-style: solid;"> <a :href="'/van-ban-chi-tiet/'+dt.id">@{{dt.sokyhieu}}</a></td>
                        <td style="border-width: 1px; border-color:#ddd; border-style: solid;"> <a :href="'/van-ban-chi-tiet/'+dt.id"> @{{dt.trichyeu}}</a></td>
                        <td style="border-width: 1px; border-color:#ddd; border-style: solid;"> <a :href="'/van-ban-chi-tiet/'+dt.id"> @{{dt.ngaybh}}</a></td>
                        <td style="border-width: 1px; border-color:#ddd; border-style: solid;"> <a :href="'/van-ban-chi-tiet/'+dt.id"> @{{dt.ngayhl}}</a></td>
                        <td style="border-width: 1px; border-color:#ddd; border-style: solid;">
                            <div v-for="i in dt.file">

                                <a class="block mt-1" data-fancybox data-type="iframe" :href="i.linkview" data-small-btn="true" data-iframe='{"preload":false}'>
                                    <div class="items-center flex overflow-hidden">
                                        <img v-if="i.duoifile == 'pptx' || i.duoifile ==  'ppt'|| i.duoifile ==  'pps' " class="w-6 h-8 mr-2" src="https://banner2.cleanpng.com/20180205/wbq/kisspng-microsoft-powerpoint-microsoft-publisher-presentat-ms-powerpoint-transparent-background-5a78abcf270e40.63961649151785774316.jpg" alt="">
                                        <img v-if="i.duoifile == 'doc' || i.duoifile == 'docx'" class="w-6 h-8 mr-2" src="https://banner2.cleanpng.com/20180425/hze/kisspng-microsoft-word-computer-icons-microsoft-office-5ae03fddba9b65.6523323015246458537644.jpg" alt="">
                                        <img v-if="i.duoifile == 'xlsm' || i.duoifile ==  'xls'|| i.duoifile ==  'xlsx' " class="w-6 h-8 mr-2" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Microsoft_Office_Excel_%282019%E2%80%93present%29.svg/826px-Microsoft_Office_Excel_%282019%E2%80%93present%29.svg.png" alt="">
                                        <img v-if="i.duoifile == 'pdf' " class="w-6 h-8 mr-2" src="https://iconarchive.com/download/i100036/iynque/flat-ios7-style-documents/pdf.ico" alt="">

                                        <div v-if="i.duoifile == 'jpg' || i.duoifile == 'jpeg'|| i.duoifile == 'png'|| i.duoifile == 'gif'|| i.duoifile == 'svg'|| i.duoifile == 'bmp'|| i.duoifile == 'tiff'">
                                            <img :src=" i.link1" alt="">
                                        </div>
                                    </div>

                                </a>



                            </div>

                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
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
<script>
    var vm = new Vue({
        el: '#searchvanban',
        data: {
            dsvanban: [],
            chuyenmuc: [],
            linhvuc: [],
            coquanbanhanh: [],
            sokyhieu: '',
            tennganh: '',
            ngaybanhanh: '',
            ngayhethan: '',
            coquanbanhanh: '',
            tenvanban: '',
            linhvuc_id: '',
            chuyenmuc_id: '',
            coquanbanhanh_id: '',
            loaivb: <?php echo $chuyenmuc->id; ?>,
            idvb: '27',
        },
        // chạy ngay khi web load
        mounted: function() {
            const self = this;
            self.search();
            axios.get('/ajax-chuyen-muc?loaivb=' + self.loaivb)
                .then(function(response) {
                    self.chuyenmuc = response.data.chuyenmuc;
                    self.linhvuc = response.data.linhvuc;
                    self.coquanbanhanh = response.data.coquanbanhanh;
                    self.linhvuc_id = 0;
                    self.chuyenmuc_id = 0;
                    self.coquanbanhanh_id = 0;
                })
        },
        // chạy khi thực hiện event
        methods: {
            search: function() {
                const self = this;

                axios.get('/ajax-van-ban?sokyhieu=' + self.sokyhieu +
                        "&ngaybanhanh=" + self.ngaybanhanh +
                        "&linhvuc_id=" + self.linhvuc_id +
                        "&chuyenmuc_id=" + self.chuyenmuc_id +
                        "&loaivb=" + self.loaivb +
                        "&tenvanban=" + self.tenvanban)

                    .then(function(response) {
                        self.dsvanban = response.data;

                    })
            }
        }
    })
</script>

@endsection