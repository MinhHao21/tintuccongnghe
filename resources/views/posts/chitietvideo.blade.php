@extends('layout.trangchu')

@section('ogp')
<link rel="shortcut icon" type="image/png" href="images/logo.png" />
<link rel="stylesheet" href="/css/chitiet.css">
<meta property="og:type" content="website" />
<meta property="og:image:alt" content="{{$baivietchitiet->title}}">
<meta property="og:title" content="{{$baivietchitiet->title}}" />
{{-- <meta property="og:description" content="{{substr(strip_tags($baivietchitiet->lichsu), 135, 0)}} " /> --}}
<meta property="og:url" content="/chi-tiet-tin-tuc/{{$baivietchitiet->id}}">
<meta property="og:image" content="http://vanhoanghean.vn/storage/{{$baivietchitiet->thumbnail}}" />

@endsection
<style>
    img {
        height: auto !important;
    }
</style>
@section('content')
<div class="col-sm-9">
    <div class="section-header" style="padding: 12px;">
        <h2>Videos</h2>
    </div>
    <h3 class="title-child-page" style="text-align:justify;">
        {{$baivietchitiet->title}}
    </h3>


    <div class="detail-content-wrap clearfix" >
        <div class="post-meta">
            <div class="row">
                <div class="col-sm-6">
                    <div class="social-group">
                    <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v16.0" nonce="vqvV1eI6"></script>
                        <!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v16.0" nonce="OtFhXf6i"></script> -->
                        <!-- AddThis Button BEGIN -->
                        <div class="fb-share-button" data-href="http://vanhoanghean.vn/chi-tiet-tin-tuc/{{$baivietchitiet->slug}}" data-layout="" data-size=""><a target="_top" href="https://www.facebook.com/sharer/sharer.php?u=http://vanhoanghean.com.vn/chi-tiet-tin-tuc/thanh-chuong-don-bang-di-tich-cap-tinh-den-cao-son" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                        <!-- <div class="fb-like" data-href="https://www.facebook.com/groups/4129142513833497/?hoisted_section_header_type=recently_seen&multi_permalinks=5675262042554862" data-width="" data-layout="" data-action="" data-size="" data-share="false"></div> -->
                       
                        <!-- AddThis Button END -->
                    </div>
                </div>

                <div class="col-sm-6 text-right" style="font-size: 16px;">
                    {{$baivietchitiet->created_by}} <br>
                    <span class="tie-date">
                        <i class="fa fa-clock-o"></i>
                        <span class="p-time" data-date="" style="font-size: 14px;"> {{$baivietchitiet->ngaydangbai}} </span>
                    </span>

                </div>
            </div>
        </div>
        <!-- <div class="row" style="text-align: justify; margin-left:0px !important; font-size: 14.2pt !important; line-height: 115% !important; font-family: serif !important; width:100%;">
            <div class=" detail-content-body">
                <article id="the-post-content" class="entry" style="text-indent:30px;">
                    <p style="text-align: justify;">
                        {!!$baivietchitiet->description!!}
                    </p>
                </article>
            </div>
        </div> -->
        <div class="mt-2 text-center">
            <iframe style="width: 100%; height: 400px" src="{{$baivietchitiet->linkyoutube}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            <!-- <img src="/storage/{{$baivietchitiet->thumbnail}}" alt="" srcset=""> -->
        </div>
        <!-- @if($baivietchitiet->thumbnail == null)
        <img src="/images/noimg.jpg" alt="{{$baivietchitiet->title}}" id="imghot">
        @else
        <img src="/storage/{{$baivietchitiet->thumbnail}}" alt="{{$baivietchitiet->title}}"
            style="object-fit:contain; width:100%;">
        @endif -->
        <div class="row" style="margin-left:0px !important; font-size: 14.2pt !important; line-height: 115% !important; font-family: serif !important; width:100%">
            <div class=" detail-content-body">
                <article id="the-post-content" class="entry" style="text-indent:30px;">
                    <p style="text-align: justify;">
                    {!!$baivietchitiet->description!!}
                    </p>
                </article>
            </div>
        </div>
    </div>

    
    <style>
        #the-post-content img{
            display:block;
            margin: 0 auto;
        }
        @media (max-width: 760px) {

            #mybox-comments {
                flex-direction: column
            }


        }
    </style>

    <script>
        var vm = new Vue({
            el: '#test',
            data: {
                datatb: {

                    // đường dẫn đến ajax
                    url: '/ajax-comment',
                    // Số bản ghi trên 1 trang
                    length: 10,

                    // Biến tìm kiếm
                    searchnow: '',
                    // Số trang
                    total: '',
                    // Dữ liệu danh sách bảng
                    tableData: Array(),

                    total: '',

                    paginatenow: 1,
                    // Trang hiện tại đang ở

                },
                rowId: '',
                statusForm: '',
                dataForm: form({
                        content: '',
                        userId: '',
                        postId: ''
                    })
                    .rules({

                        content: 'required',
                        userId: 'required',
                    })
                    .messages({
                        'content.required': 'không được để trống',
                        'userId.required': 'không được để trống',
                    }),


            },
            watch: {

            },
            mounted: function() {

                this.dataForm.postId = '<?php echo '' . $slug; ?>'
                this.loadData();
                const self = this;
            },
            methods: {
                

                closemodal() {
                    this.dataForm.errors().messages = {};
                },
                resetform() {

                    this.dataForm.content = '';
                    this.dataForm.userId = '';
                },
                saveform() {
                    // console.log(1);
                    this.statusForm = "insert";
                    this.submitform();
                },
                submitform() {
                    if (this.dataForm.validate().errors().any()) {
                        return;
                    }
                    const self = this;
                    // grecaptcha.getResponse();
                    console.log(self.dataForm.data);
                    if (this.statusForm == "insert") {

                        axios.post("/save-comment", {...self.dataForm.data, captchaCode: grecaptcha.getResponse()})
                            .then(function(response) {
                                if(response.data){
                                    console.log(response.data)
                                    self.resetform()
                                    self.loadData();

                                }
                            })
                            .catch(error => {
                                // self.thongbaothatbai(error);
                            });
                    } else {
                        console.log(self.rowId)
                        axios.post("/Admin/ChinhSach/Edit", {
                                id: self.rowId,
                                HoTroXTTM: self.dataForm.data.HoTroXTTM,


                            })
                            .then(function(response) {
                                self.thongbaothanhcong('Sửa thành công')
                                self.loadData();
                            })
                            .catch(error => {
                                self.thongbaothatbai(error);
                            });
                    }
                },
                pagination(data) {
                    /*console.log(data)*/
                    // Gán lại giá trị paginatenow
                    this.datatb.paginatenow = data;
                    // Load lại bảng
                    this.loadData();
                    /*console.log(this.datatb.start)*/
                },

                loadData() {
                    const self = this;
                    // Lấy index bản ghi bắt đầu
                    var start = this.datatb.length * (this.datatb.paginatenow - 1);
                    // console.log(start)
                    this.datatb.start = start;
                    console.log(11)
                    // Ajax dữ liệu
                    axios.get(self.datatb.url+"?slug="+self.dataForm.postId)
                        .then(function(response) {
                            // Tổng số trang hiện có
                            self.datatb.tableData = response.data;
                            console.log(response.data)


                            self.data.total = Math.ceil(
                                response.data.recordsTotal / 10
                            );
                            /*console.log(response.data)*/
                            // Dữ liệu bảng



                        });
                },
                //data table
                doAlertEdit(data) {
                    const self = this;
                    // Gán giá trị cho form
                    self.dataForm.HoTroXTTM = data.HoTroXTTM;
                    // Sửa tình trạng form
                    this.statusForm = "update";
                    this.rowId = data.Id;
                    this.openmodal('sua');
                },
                doAlertDelete(data) {
                    const self = this;
                    this.$confirm('Thao tác này không thể quay lại, bạn chắc chắn tiếp tục?', 'Cảnh báo', {
                        confirmButtonText: 'Vâng, xóa nó!',
                        cancelButtonText: 'Không xóa!',
                        type: 'warning',
                        center: true
                    }).then(() => {
                        axios.post("/Admin/ChinhSach/Delete", data)
                            .then(function(response) {
                                self.loadData();
                                console.log(response.data.status)
                                if (response.data.status) {
                                    self.$message({
                                        type: 'success',
                                        message: 'Xóa thành công'
                                    });
                                } else {

                                    self.thongbaothatbai("Không thể xóa bản ghi này")
                                }
                            })
                            .catch(function(error) {
                                // Thông báo xóa thất bại
                                self.thongbaothatbai(error)
                            });
                        // this.$message({
                        //     type: 'success',
                        //     message: 'Xóa thành công'
                        // });

                    }).catch(() => {
                        this.$message({
                            type: 'info',
                            message: 'Đã hủy xóa'
                        });
                    });
                },
                
            }
        })
    </script>
    


</div>
@endsection