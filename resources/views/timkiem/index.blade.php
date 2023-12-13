@extends('layout.trangchu')
@section('content')
<div class="td-main-content-wrap td-container-wrap" style="margin-top: 30px;">
    <div class="td-container">

        <!-- content -->
        <div class="td-pb-row">
            <div class="td-pb-span8 td-main-content">
                <div class="td-ss-main-content">
                    
                    
                    <div class="td-block-row">
                        
                        @foreach($post as $ps)
                        <div class="td-block-span6">

                            <div class="td_module_1 td_module_wrap td-animation-stack">
                                <div class="td-module-image">
                                    <div class="td-module-thumb"><a
                                            href="/chi-tiet-tin-tuc/{{$ps->slug}}"
                                            rel="bookmark" class="td-image-wrap"
                                            title="{{$ps->title}}"><img
                                                class="entry-thumb"
                                                src="/storage/{{$ps->thumbnail}}"
                                                alt=""
                                                title="{{$ps->title}}"
                                                data-type="image_tag"
                                                data-img-url="/storage/{{$ps->thumbnail}}"
                                                width="320" height="160" /></a></div>
                                </div>
                                <h3 class="entry-title td-module-title"><a
                                        href="/chi-tiet-tin-tuc/{{$ps->slug}}"
                                        rel="bookmark"
                                        title="{{$ps->title}}">{{$ps->title}}</a></h3>
                                <div class="td-module-meta-info">
                                    <span class="td-post-author-name"><a
                                            href="/">mona</a> <span>-</span> </span>
                                    <span class="td-post-date"><time class="entry-date updated td-module-date"
                                            datetime="2019-04-17T08:38:51+00:00">25 Tháng Mười Một, 2023</time></span>
                                    <div class="td-module-comments"><a
                                            href="/chi-tiet-tin-tuc/{{$ps->slug}}">0</a>
                                    </div>
                                </div>


                            </div>

                        </div> <!-- ./td-block-span6 -->
                    @endforeach

                    </div><!--./row-fluid-->

                    
                </div>
            </div>

            <div class="td-pb-span4 td-main-sidebar">
                <div class="td-ss-main-sidebar">
                
                    <aside class="td_block_template_1 widget widget_recent_entries">
                        <h4 class="block-title"><span>Bài viết mới</span></h4>
                        <ul>
                            @foreach($baimoi as $bm)
                            <li>
                                <a href="/chi-tiet-tin-tuc/{{$bm->slug}}">{{$bm->title}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </aside>
                </div>
            </div>
        </div> <!-- /.td-pb-row -->
    </div> <!-- /.td-container -->
</div> <!-- /.td-main-content-wrap -->
@endsection