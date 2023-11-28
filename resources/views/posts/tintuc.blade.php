@extends('layout.trangchu')
@section('content')
@if($getdanhmuc)
<!-- subcategory -->
<div class="td-category-header td-container-wrap">
    <div class="td-container">
        <div class="td-pb-row">
            <div class="td-pb-span12">
                <div class="td-crumb-container">
                    <div class="entry-crumbs"><span><a title="" class="entry-crumb" href="/">Trang
                                chủ</a></span> <i class="td-icon-right td-bread-sep td-bred-no-url-last"></i> <span
                            class="td-bred-no-url-last">{{$getdanhmuc->name}}</span></div>
                </div>

                <h1 class="entry-title td-page-title">{{$getdanhmuc->name}}</h1>

            </div>
        </div>
        
    </div>
</div>


<!-- big grid -->
<div class="td-category-grid td-category-grid-fl td-container-wrap">
    <div class="td-container">
        <div class="td-pb-row">
            <div class="td-pb-span12">
                <div class="td_block_wrap td_block_big_grid_fl_8 td_uid_8_6563fbb3be3a7_rand td-grid-style-1 td-hover-1 td-big-grids-fl td-big-grids-scroll td-big-grids-margin td-pb-border-top td_block_template_1"
                    data-td-block-uid="td_uid_8_6563fbb3be3a7">
                    <style>
                        /* custom css */


                        /* phone */
                        @media (max-width: 767px) {
                            .td_uid_8_6563fbb3be3a7_rand .td_block_inner .td-big-grid-scroll .td-big-grid-meta .entry-title {
                                @mx25f_title
                            }

                            .td_uid_8_6563fbb3be3a7_rand .td-big-grid-scroll .td-post-category {
                                @mx25f_cat
                            }
                        }
                    </style>
                    <div id=td_uid_8_6563fbb3be3a7 class="td_block_inner">
                        <div class="td-big-grid-wrapper td-posts-5">
                            @if($firstPost)
                            <div
                                class="td_module_mx19 td_module_wrap td-animation-stack td-big-grid-post-0 td-big-grid-post td-mx-23">
                                <div class="td-module-image">
                                    <div class="td-module-thumb"><a
                                            href="/chi-tiet-tin-tuc/{{$firstPost->slug}}"
                                            rel="bookmark" class="td-image-wrap"
                                            title="{{$firstPost->title}}"><span
                                                class="entry-thumb td-thumb-css" data-type="css_image"
                                                data-img-url="/storage/{{$firstPost->thumbnail}}"></span></a>
                                    </div>
                                </div>

                                <div class="td-meta-info-container">
                                    <div class="td-meta-align">
                                        <div class="td-big-grid-meta">
                                            <h3 class="entry-title td-module-title"><a
                                                    href="/chi-tiet-tin-tuc/{{$firstPost->slug}}"
                                                    rel="bookmark"
                                                    title="{{$firstPost->title}}">{{$firstPost->title}}</a></h3>
                                        </div>

                                        <div class="td-module-meta-info">
                                            <span class="td-post-author-name"><a
                                                    href="/">mona</a> <span>-</span>
                                            </span> <span class="td-post-date"><time
                                                    class="entry-date updated td-module-date"
                                                    datetime="2019-04-17T08:53:12+00:00">17 Tháng Mười Một, 2023</time></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                            <div class="td-big-grid-scroll">
                                @foreach($fourposts as $fp)
                                <div
                                    class="td_module_mx25 td_module_wrap td-animation-stack td-big-grid-post-1 td-big-grid-post td-mx-15">
                                    <div class="td-module-image">
                                        <div class="td-module-thumb"><a
                                                href="/chi-tiet-tin-tuc/{{$fp->slug}}"
                                                rel="bookmark" class="td-image-wrap"
                                                title="{{$fp->title}}"><span
                                                    class="entry-thumb td-thumb-css" data-type="css_image"
                                                    data-img-url="/storage/{{$fp->thumbnail}}"></span></a>
                                        </div>
                                    </div>

                                    <div class="td-meta-info-container">
                                        <div class="td-meta-align">
                                            <div class="td-big-grid-meta">
                                                <h3 class="entry-title td-module-title"><a
                                                        href="/chi-tiet-tin-tuc/{{$fp->slug}}"
                                                        rel="bookmark"
                                                        title="{{$fp->title}}">{{$fp->title}}</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div> <!-- ./block -->
            </div>
        </div>
    </div>
</div>

<div class="td-main-content-wrap td-container-wrap">
    <div class="td-container">

        <!-- content -->
        <div class="td-pb-row">
            <div class="td-pb-span8 td-main-content">
                <div class="td-ss-main-content">
                    
                    
                    <div class="td-block-row">
                        
                        @foreach($remainingThreePosts as $rtp)
                        <div class="td-block-span6">

                            <div class="td_module_1 td_module_wrap td-animation-stack">
                                <div class="td-module-image">
                                    <div class="td-module-thumb"><a
                                            href="/chi-tiet-tin-tuc/{{$rtp->slug}}"
                                            rel="bookmark" class="td-image-wrap"
                                            title="{{$rtp->title}}"><img
                                                class="entry-thumb"
                                                src="/storage/{{$rtp->thumbnail}}"
                                                alt=""
                                                title="{{$rtp->title}}"
                                                data-type="image_tag"
                                                data-img-url="/storage/{{$rtp->thumbnail}}"
                                                width="320" height="160" /></a></div>
                                </div>
                                <h3 class="entry-title td-module-title"><a
                                        href="/chi-tiet-tin-tuc/{{$rtp->slug}}"
                                        rel="bookmark"
                                        title="{{$rtp->title}}">{{$rtp->title}}</a></h3>
                                <div class="td-module-meta-info">
                                    <span class="td-post-author-name"><a
                                            href="/">mona</a> <span>-</span> </span>
                                    <span class="td-post-date"><time class="entry-date updated td-module-date"
                                            datetime="2019-04-17T08:38:51+00:00">25 Tháng Mười Một, 2023</time></span>
                                    <div class="td-module-comments"><a
                                            href="/chi-tiet-tin-tuc/{{$rtp->slug}}">0</a>
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
@endif
@endsection