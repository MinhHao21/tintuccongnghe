@extends('layout.trangchu')
@section('content')
@if($baivietchitiet)
<div class="td-main-content-wrap td-container-wrap">

    <div class="td-container td-post-template-default ">
        <div class="td-crumb-container">
            @if($getdanhmuc)
            <div class="entry-crumbs"><span><a title="" class="entry-crumb" href="/">Trang
                        chủ</a></span> <i class="td-icon-right td-bread-sep"></i> <span><a title="" class="entry-crumb"
                        href="#">{{$getdanhmuc->name}}</a></span>
            </div>
            @endif
        </div>

        <div class="td-pb-row">
            <div class="td-pb-span8 td-main-content" role="main">
                <div class="td-ss-main-content">

                    <article id="post-175"
                        class="post-175 post type-post status-publish format-standard has-post-thumbnail category-phap-luat"
                        itemscope itemtype="https://schema.org/Article">
                        <div class="td-post-header">
                            @if($getdanhmuc)
                            <ul class="td-category">
                                <li class="entry-category"><a href="#">{{$getdanhmuc->name}}</a></li>
                            </ul>
                            @endif
                            <header class="td-post-title">
                                <h1 class="entry-title">{{$baivietchitiet->title}}</h1>



                                <div class="td-module-meta-info">
                                    <div class="td-post-author-name">
                                        <div class="td-author-by">Bởi</div> <a
                                            href="/">admin</a>
                                        <div class="td-author-line"> - </div>
                                    </div> <span class="td-post-date"><time class="entry-date updated td-module-date"
                                            datetime="2019-04-16T10:26:31+00:00">{{$baivietchitiet->created_at->format('d/m/Y')}}</time></span>
                                    <div class="td-post-comments"><a href=""><i
                                                class="td-icon-comments"></i>0</a></div>
                                    <div class="td-post-views"><i class="td-icon-views"></i><span
                                            class="td-nr-views-175">102</span></div>
                                </div>

                            </header>

                        </div>

                        <div class="td-post-sharing-top">
                            <div id="td_social_sharing_article_top"
                                class="td-post-sharing td-ps-bg td-ps-notext td-post-sharing-style1 ">
                                <div class="td-post-sharing-visible"><a
                                        class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-facebook"
                                        href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fmauweb.monamedia.net%2Fnguoiduatin%2Fba-chu-nha-nghi-bi-nhan-vien-cu-sat-hai%2F">
                                        <div class="td-social-but-icon"><i class="td-icon-facebook"></i></div>
                                        <div class="td-social-but-text">Facebook</div>
                                    </a><a
                                        class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-twitter"
                                        href="https://twitter.com/intent/tweet?text=B%C3%A0+ch%E1%BB%A7+nh%C3%A0+ngh%E1%BB%89+b%E1%BB%8B+nh%C3%A2n+vi%C3%AAn+c%C5%A9+s%C3%A1t+h%E1%BA%A1i&amp;url=https%3A%2F%2Fmauweb.monamedia.net%2Fnguoiduatin%2Fba-chu-nha-nghi-bi-nhan-vien-cu-sat-hai%2F&amp;via=Ng%C6%B0%E1%BB%9Di+%C4%90%C6%B0a+Tin">
                                        <div class="td-social-but-icon"><i class="td-icon-twitter"></i></div>
                                        <div class="td-social-but-text">Twitter</div>
                                    </a><a
                                        class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-googleplus"
                                        href="https://plus.google.com/share?url=https://mauweb.monamedia.net/nguoiduatin/ba-chu-nha-nghi-bi-nhan-vien-cu-sat-hai/">
                                        <div class="td-social-but-icon"><i class="td-icon-googleplus"></i></div>
                                        <div class="td-social-but-text">Google+</div>
                                    </a><a
                                        class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-pinterest"
                                        href="https://pinterest.com/pin/create/button/?url=https://mauweb.monamedia.net/nguoiduatin/ba-chu-nha-nghi-bi-nhan-vien-cu-sat-hai/&amp;media=https://mauweb.monamedia.net/nguoiduatin/wp-content/uploads/2019/04/pl-2.jpg&amp;description=B%C3%A0+ch%E1%BB%A7+nh%C3%A0+ngh%E1%BB%89+b%E1%BB%8B+nh%C3%A2n+vi%C3%AAn+c%C5%A9+s%C3%A1t+h%E1%BA%A1i">
                                        <div class="td-social-but-icon"><i class="td-icon-pinterest"></i></div>
                                        <div class="td-social-but-text">Pinterest</div>
                                    </a><a
                                        class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-whatsapp"
                                        href="whatsapp://send?text=B%C3%A0+ch%E1%BB%A7+nh%C3%A0+ngh%E1%BB%89+b%E1%BB%8B+nh%C3%A2n+vi%C3%AAn+c%C5%A9+s%C3%A1t+h%E1%BA%A1i %0A%0A https://mauweb.monamedia.net/nguoiduatin/ba-chu-nha-nghi-bi-nhan-vien-cu-sat-hai/">
                                        <div class="td-social-but-icon"><i class="td-icon-whatsapp"></i></div>
                                        <div class="td-social-but-text">WhatsApp</div>
                                    </a></div>
                                <div class="td-social-sharing-hidden">
                                    <ul class="td-pulldown-filter-list"></ul><a
                                        class="td-social-sharing-button td-social-handler td-social-expand-tabs"
                                        href="#" data-block-uid="td_social_sharing_article_top">
                                        <div class="td-social-but-icon"><i
                                                class="td-icon-plus td-social-expand-tabs-icon"></i></div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="td-post-content">

                            
                            <p class="description">{!! $baivietchitiet->content !!}</p>
                            
                        </div>


                        <footer>

                            <div class="td-post-source-tags">
                            </div>

                            <div class="td-post-sharing-bottom">
                                <div class="td-post-sharing-classic"><iframe frameBorder="0"
                                        src="https://www.facebook.com/plugins/like.php?href=https://mauweb.monamedia.net/nguoiduatin/ba-chu-nha-nghi-bi-nhan-vien-cu-sat-hai/&amp;layout=button_count&amp;show_faces=false&amp;width=105&amp;action=like&amp;colorscheme=light&amp;height=21"
                                        style="border:none; overflow:hidden; width:105px; height:21px; background-color:transparent;"></iframe>
                                </div>
                                <div id="td_social_sharing_article_bottom"
                                    class="td-post-sharing td-ps-bg td-ps-notext td-post-sharing-style1 ">
                                    <div class="td-post-sharing-visible"><a
                                            class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-facebook"
                                            href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fmauweb.monamedia.net%2Fnguoiduatin%2Fba-chu-nha-nghi-bi-nhan-vien-cu-sat-hai%2F">
                                            <div class="td-social-but-icon"><i class="td-icon-facebook"></i>
                                            </div>
                                            <div class="td-social-but-text">Facebook</div>
                                        </a><a
                                            class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-twitter"
                                            href="https://twitter.com/intent/tweet?text=B%C3%A0+ch%E1%BB%A7+nh%C3%A0+ngh%E1%BB%89+b%E1%BB%8B+nh%C3%A2n+vi%C3%AAn+c%C5%A9+s%C3%A1t+h%E1%BA%A1i&amp;url=https%3A%2F%2Fmauweb.monamedia.net%2Fnguoiduatin%2Fba-chu-nha-nghi-bi-nhan-vien-cu-sat-hai%2F&amp;via=Ng%C6%B0%E1%BB%9Di+%C4%90%C6%B0a+Tin">
                                            <div class="td-social-but-icon"><i class="td-icon-twitter"></i>
                                            </div>
                                            <div class="td-social-but-text">Twitter</div>
                                        </a><a
                                            class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-googleplus"
                                            href="https://plus.google.com/share?url=https://mauweb.monamedia.net/nguoiduatin/ba-chu-nha-nghi-bi-nhan-vien-cu-sat-hai/">
                                            <div class="td-social-but-icon"><i class="td-icon-googleplus"></i>
                                            </div>
                                            <div class="td-social-but-text">Google+</div>
                                        </a><a
                                            class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-pinterest"
                                            href="https://pinterest.com/pin/create/button/?url=https://mauweb.monamedia.net/nguoiduatin/ba-chu-nha-nghi-bi-nhan-vien-cu-sat-hai/&amp;media=https://mauweb.monamedia.net/nguoiduatin/wp-content/uploads/2019/04/pl-2.jpg&amp;description=B%C3%A0+ch%E1%BB%A7+nh%C3%A0+ngh%E1%BB%89+b%E1%BB%8B+nh%C3%A2n+vi%C3%AAn+c%C5%A9+s%C3%A1t+h%E1%BA%A1i">
                                            <div class="td-social-but-icon"><i class="td-icon-pinterest"></i>
                                            </div>
                                            <div class="td-social-but-text">Pinterest</div>
                                        </a><a
                                            class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-whatsapp"
                                            href="whatsapp://send?text=B%C3%A0+ch%E1%BB%A7+nh%C3%A0+ngh%E1%BB%89+b%E1%BB%8B+nh%C3%A2n+vi%C3%AAn+c%C5%A9+s%C3%A1t+h%E1%BA%A1i %0A%0A https://mauweb.monamedia.net/nguoiduatin/ba-chu-nha-nghi-bi-nhan-vien-cu-sat-hai/">
                                            <div class="td-social-but-icon"><i class="td-icon-whatsapp"></i>
                                            </div>
                                            <div class="td-social-but-text">WhatsApp</div>
                                        </a></div>
                                    <div class="td-social-sharing-hidden">
                                        <ul class="td-pulldown-filter-list"></ul><a
                                            class="td-social-sharing-button td-social-handler td-social-expand-tabs"
                                            href="#" data-block-uid="td_social_sharing_article_bottom">
                                            <div class="td-social-but-icon"><i
                                                    class="td-icon-plus td-social-expand-tabs-icon"></i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="td-block-row td-post-next-prev">
                                <div class="td-block-span6 td-post-prev-post">
                                    <div class="td-post-next-prev-content"><span>Bài trước</span><a
                                            href="../ga-dan-ong-dot-chay-4-can-nha-trong-con-phe-ma-tuy/index.html">Gã
                                            đàn ông đốt cháy 4 căn nhà trong cơn phê ma tuý</a></div>
                                </div>
                                <div class="td-next-prev-separator"></div>
                                <div class="td-block-span6 td-post-next-post">
                                    <div class="td-post-next-prev-content"><span>Bài tiếp theo</span><a
                                            href="../canh-sat-bat-5-nghi-pham-thu-600-kg-ma-tuy-da/index.html">Cảnh
                                            sát bắt 5 nghi phạm, thu 600 kg ma túy đá</a></div>
                                </div>
                            </div> -->
                            <!-- <div class="author-box-wrap"><a href="../author/monamedia/index.html"><img alt=''
                                        src='https://secure.gravatar.com/avatar/56a282550cb77d3a5e15c22c1d16fb24?s=96&amp;d=mm&amp;r=g'
                                        srcset='https://secure.gravatar.com/avatar/56a282550cb77d3a5e15c22c1d16fb24?s=192&#038;d=mm&#038;r=g 2x'
                                        class='avatar avatar-96 photo' height='96' width='96' /></a>
                                <div class="desc">
                                    <div class="td-author-name vcard author"><span class="fn"><a
                                                href="../author/monamedia/index.html">mona</a></span></div>
                                    <div class="td-author-description">Từ năm 2009, tôi đã bắt đầu với vị trí
                                        Front End Developer, vài tháng sau đó tôi kiêm luôn cả .NET cho các dự
                                        án của công ty, mảng phổ thông. Khoản 01 năm sau đó tôi được tham gia
                                        phát triển phần mềm quản lý đầu tiên và cũng là lớn nhất cho tới nay.
                                        Tôi mở công ty sau 02 năm đi làm với nền tảng hơn 50 khách quen đã tích
                                        luỹ được và đội ngũ anh em thiết kế và lập trình đã làm quen trong quá
                                        trình đi làm. Chúng tôi tâm niệm làm tốt nhất những dự án hiện có, khách
                                        sẽ giới thiệu lại thêm nhiều dự án khác và phương châm kinh doanh này
                                        vẫn đang đúng sau gần 10 năm trong nghề của Mona Media.</div>
                                    <div class="td-author-social"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>  -->
                            <span class="td-page-meta" itemprop="author" itemscope
                                itemtype="https://schema.org/Person">
                                <meta itemprop="name" content="mona">
                            </span>
                            <meta itemprop="datePublished" content="2019-04-16T10:26:31+00:00">
                            <meta itemprop="dateModified" content="2019-04-16T10:26:31+00:00">
                            <meta itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage"
                                itemid="index.html" /><span class="td-page-meta" itemprop="publisher" itemscope
                                itemtype="https://schema.org/Organization"><span class="td-page-meta" itemprop="logo"
                                    itemscope itemtype="https://schema.org/ImageObject">
                                    <meta itemprop="url" content="../wp-content/uploads/2019/04/logo-mona-2-300x90.png">
                                </span>
                                <meta itemprop="name" content="Người Đưa Tin">
                            </span>
                            <meta itemprop="headline " content="Bà chủ nhà nghỉ bị nhân viên cũ sát hại"><span
                                class="td-page-meta" itemprop="image" itemscope
                                itemtype="https://schema.org/ImageObject">
                                <meta itemprop="url" content="../wp-content/uploads/2019/04/pl-2.jpg">
                                <meta itemprop="width" content="500">
                                <meta itemprop="height" content="330">
                            </span>
                        </footer>

                    </article> <!-- /.post -->

                    <div class="td_block_wrap td_block_related_posts td_uid_2_6563fbe92c056_rand td_with_ajax_pagination td-pb-border-top td_block_template_1"
                        data-td-block-uid="td_uid_2_6563fbe92c056">
                        <script>
                            var block_td_uid_2_6563fbe92c056 = new tdBlock();
                            block_td_uid_2_6563fbe92c056.id = "td_uid_2_6563fbe92c056";
                            block_td_uid_2_6563fbe92c056.atts = '{"limit":3,"ajax_pagination":"next_prev","live_filter":"cur_post_same_categories","td_ajax_filter_type":"td_custom_related","class":"td_uid_2_6563fbe92c056_rand","td_column_number":3,"live_filter_cur_post_id":175,"live_filter_cur_post_author":"2","block_template_id":"","header_color":"","ajax_pagination_infinite_stop":"","offset":"","td_ajax_preloading":"","td_filter_default_txt":"","td_ajax_filter_ids":"","el_class":"","color_preset":"","border_top":"","css":"","tdc_css":"","tdc_css_class":"td_uid_2_6563fbe92c056_rand","tdc_css_class_style":"td_uid_2_6563fbe92c056_rand_style"}';
                            block_td_uid_2_6563fbe92c056.td_column_number = "3";
                            block_td_uid_2_6563fbe92c056.block_type = "td_block_related_posts";
                            block_td_uid_2_6563fbe92c056.post_count = "3";
                            block_td_uid_2_6563fbe92c056.found_posts = "9";
                            block_td_uid_2_6563fbe92c056.header_color = "";
                            block_td_uid_2_6563fbe92c056.ajax_pagination_infinite_stop = "";
                            block_td_uid_2_6563fbe92c056.max_num_pages = "3";
                            tdBlocksArray.push(block_td_uid_2_6563fbe92c056);
                        </script>
                        <h4 class="td-related-title td-block-title"><a id="td_uid_3_6563fbe92d522"
                                class="td-related-left td-cur-simple-item" data-td_filter_value=""
                                data-td_block_id="td_uid_2_6563fbe92c056" href="#">BÀI VIẾT LIÊN QUAN</a></h4>
                        <div id=td_uid_2_6563fbe92c056 class="td_block_inner">

                            <div class="td-related-row">
                                @foreach($baivietlienquan as $bvlq)
                                <div class="td-related-span4">

                                    <div class="td_module_related_posts td-animation-stack td_mod_related_posts">
                                        <div class="td-module-image">
                                            <div class="td-module-thumb"><a
                                                    href="/chi-tiet-tin-tuc/{{$bvlq->slug}}"
                                                    rel="bookmark" class="td-image-wrap"
                                                    title="{{$bvlq->title}}"><img
                                                        class="entry-thumb"
                                                        src="/storage/{{$bvlq->thumbnail}}"
                                                        alt=""
                                                        title="{{$bvlq->title}}"
                                                        data-type="image_tag"
                                                        data-img-url="/storage/{{$bvlq->thumbnail}}"
                                                        width="218" height="150" style="width:218px !important; height: 150px !important;" /></a></div>
                                        </div>
                                        <div class="item-details">
                                            <h3 class="entry-title td-module-title"><a
                                                    href="/chi-tiet-tin-tuc/{{$bvlq->slug}}"
                                                    rel="bookmark"
                                                    title="{{$bvlq->title}}">{{$bvlq->title}}</a></h3>
                                        </div>
                                    </div>

                                </div> <!-- ./td-related-span4 -->
                                @endforeach
                                
                            </div><!--./row-fluid-->
                        </div>
                    </div> <!-- ./block -->
                    <div class="comments" id="comments">
                        <div id="respond" class="comment-respond">
                            <h3 id="reply-title" class="comment-reply-title">BÌNH LUẬN <small><a rel="nofollow"
                                        id="cancel-comment-reply-link" href="index.html#respond"
                                        style="display:none;">Hủy trả lời</a></small></h3>
                            <form action="https://mauweb.monamedia.net/nguoiduatin/wp-comments-post.php" method="post"
                                id="commentform" class="comment-form" novalidate>
                                <div class="clearfix"></div>
                                <div class="comment-form-input-wrap td-form-comment">
                                    <textarea placeholder="Bình luận:" id="comment" name="comment" cols="45" rows="8"
                                        aria-required="true"></textarea>
                                    <div class="td-warning-comment">Please enter your comment!</div>
                                </div>
                                <div class="comment-form-input-wrap td-form-author">
                                    <input class="" id="author" name="author" placeholder="Tên:*" type="text" value=""
                                        size="30" aria-required='true' />
                                    <div class="td-warning-author">Please enter your name here</div>
                                </div>
                                <div class="comment-form-input-wrap td-form-email">
                                    <input class="" id="email" name="email" placeholder="Email:*" type="text" value=""
                                        size="30" aria-required='true' />
                                    <div class="td-warning-email-error">You have entered an incorrect email
                                        address!</div>
                                    <div class="td-warning-email">Please enter your email address here</div>
                                </div>
                                <div class="comment-form-input-wrap td-form-url">
                                    <input class="" id="url" name="url" placeholder="Website:" type="text" value=""
                                        size="30" />
                                </div>
                                <p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent"
                                        name="wp-comment-cookies-consent" type="checkbox" value="yes" /><label
                                        for="wp-comment-cookies-consent">Save my name, email, and website in
                                        this browser for the next time I comment.</label></p>
                                <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit"
                                        value="Đăng" /> <input type='hidden' name='comment_post_ID' value='175'
                                        id='comment_post_ID' />
                                    <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                </p>
                            </form>
                        </div><!-- #respond -->
                    </div> <!-- /.content -->
                </div>
            </div>
            <div class="td-pb-span4 td-main-sidebar" role="complementary">
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