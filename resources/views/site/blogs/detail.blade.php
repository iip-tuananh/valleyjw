@extends('site.layouts.master')
@section('title')
    <title>{{ $blog_title }}</title>
@endsection

@section('css')
@endsection

@section('content')
    <div id="article">
        <div class="breadcrumb-shop">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <div class="breadcrumb-big">
                                <h2>
                                    {{ $blog_title }}
                                </h2>
                            </div>
                        </div>
                        <ol class="breadcrumb breadcrumb-arrows" itemscope itemtype="http://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <a href="{{ route('front.home-page') }}" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
                                <meta itemprop="position" content="1" />
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <a href="{{ route('front.index-blog') }}" itemprop="item">
                                    <span itemprop="name">Tin tức</span>
                                </a>
                                <meta itemprop="position" content="2" />
                            </li>
                            <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <span itemprop="item"
                                    content="{{ route('front.detail-blog', $blog->slug) }}"><span
                                        itemprop="name">{{ $blog_title }}</span></span>
                                <meta itemprop="position" content="3" />
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper-row pd-page py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-9">
                        <div class="content-page">
                            <div class="article-content">
                                <div class="box-article-heading">
                                    <h1 class="sb-title-article mt-0">{{ $blog_title }}</h1>
                                    <ul class="article-info-more">
                                        <li> Người viết: Admin lúc <time pubdate datetime="{{ $blog->created_at->format('Y-m-d') }}">{{ $blog->created_at->format('d.m.Y') }}</time></li>
                                        <li><i class="fa fa-file-text-o"></i><a href="{{ route('front.index-blog') }}"> Tin tức</a> </li>
                                        {{-- <li>- <i class="comment-icon fa fa-comment-o"></i>
                                            <a
                                                href="/blogs/tin-tuc/cac-con-so-chu-dao-y-nghia-va-goi-y-nghe-nghiep#comments">
                                                0<span> Bình luận</span>
                                            </a>
                                        </li> --}}
                                    </ul>
                                </div>
                                <div class="article-pages">
                                    {!! $blog->body !!}
                                </div>
                                <div class="post-navigation-cus">
                                    @if ($other_blogs->count() > 1)
                                        <div class="left" data-handle="tong-hop-cac-bo-phim-dang-xem-vao-mua-don"><a
                                                href="{{ route('front.detail-blog', $other_blogs[0]->slug) }}"
                                            title="">&larr; Bài trước</a></div>
                                        <div class="right" data-handle="loai-hoa-nao-dai-dien-cho-thang-sinh-cua-ban"><a
                                                href="{{ route('front.detail-blog', $other_blogs[1]->slug) }}"
                                                title="">Bài sau &rarr;</a></div>
                                    @endif
                                </div>
                            </div>
                            {{-- <div role="tabpanel" class="article-comment">
                                <div class="title-bl">
                                    <h2>
                                        <a data-spy="scroll" data-target="#comment" href="#comment"
                                            aria-controls="comment" role="tab">Viết bình luận</a>
                                    </h2>
                                </div>
                                <div id="comment">
                                    <div id="comments" class="comments ">
                                        <div class="comment_form">
                                            <form accept-charset='UTF-8'
                                                action='/blogs/tin-tuc/cac-con-so-chu-dao-y-nghia-va-goi-y-nghe-nghiep/comments'
                                                class='comment-form' id='article--comment-form' method='post'>
                                                <input name='form_type' type='hidden' value='new_comment'>
                                                <input name='utf8' type='hidden' value='✓'>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input required type="text" id="comment_author"
                                                                name="comment[author]" size="40"
                                                                class="text form-control" placeholder="Tên của bạn "
                                                                required="required" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input required type="text" id="comment_email"
                                                                name="comment[email]" size="40"
                                                                class="text form-control" placeholder="Email của bạn"
                                                                required="required" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <textarea id="comment_body" name="comment[body]" cols="40" rows="5" class="text form-control"
                                                        placeholder="Viết bình luận ..." required="required"></textarea>
                                                    <div class="sitebox-recaptcha ">
                                                        This site is protected by reCAPTCHA and the Google
                                                        <a href="https://policies.google.com/privacy" target="_blank"
                                                            rel="noreferrer">Privacy Policy</a>
                                                        and <a href="https://policies.google.com/terms" target="_blank"
                                                            rel="noreferrer">Terms of Service</a> apply.
                                                    </div>
                                                </div>
                                                <button type="submit" class="readmore btn-rb clear-fix"
                                                    id="comment-submit">Gửi bài viết</button>
                                                <input id='d436c1597cee47b097bbdb2c7a201eed' name='g-recaptcha-response'
                                                    type='hidden'>
                                                <script src='https://www.google.com/recaptcha/api.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-'></script>
                                                <script>
                                                    grecaptcha.ready(function() {
                                                        grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {
                                                            action: 'submit'
                                                        }).then(function(token) {
                                                            document.getElementById('d436c1597cee47b097bbdb2c7a201eed').value = token;
                                                        });
                                                    });
                                                </script>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="sidebar-blog">
                            <div class="menu-blog">
                                <div class="group-menu">
                                    <div class="sidebar-title title_block">
                                        <h3>Danh mục blog<span class="fal fa-angle-down"></span></h3>
                                    </div>
                                    <div class="layered layered-category">
                                        <div class="layered-content">
                                            <ul class="tree-menu">
                                                <li class="">
                                                    <span></span>
                                                    <a class="" href="{{ route('front.home-page') }}"
                                                        title="Trang chủ" target="_self">
                                                        <i class="fal fa-angle-right"></i>Trang chủ </a>
                                                </li>
                                                <li class="tree-menu-lv1 has-child">
                                                    <a class="" href="/collections/an-yen" title="AN YÊN"
                                                        target="_self">
                                                        <span class=""><i class="fal fa-angle-right"></i>AN
                                                            YÊN</span>
                                                        <span class="icon-control"><i
                                                                class="fal fa-angle-down"></i></span>
                                                    </a>
                                                    <ul class="tree-menu-sub">
                                                        <li class="">
                                                            <span></span>
                                                            <a href="/collections/vong-tay" title="VÒNG TAY">
                                                                VÒNG TAY
                                                            </a>
                                                        </li>
                                                        <li class="">
                                                            <span></span>
                                                            <a href="/collections/moc-treo" title="MÓC TREO">
                                                                MÓC TREO
                                                            </a>
                                                        </li>
                                                        <li class="">
                                                            <span></span>
                                                            <a href="/collections/phu-kien-khac" title="VẬT PHẨM KHÁC">
                                                                VẬT PHẨM KHÁC
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="tree-menu-lv1 has-child">
                                                    <a class="" href="/collections/binh-an" title="BÌNH AN"
                                                        target="_self">
                                                        <span class=""><i class="fal fa-angle-right"></i>BÌNH
                                                            AN</span>
                                                        <span class="icon-control"><i
                                                                class="fal fa-angle-down"></i></span>
                                                    </a>
                                                    <ul class="tree-menu-sub">
                                                        <li class="">
                                                            <span></span>
                                                            <a href="/collections/tuong" title="TƯỢNG">
                                                                TƯỢNG
                                                            </a>
                                                        </li>
                                                        <li class="">
                                                            <span></span>
                                                            <a href="/collections/chuong-gio" title="CHUÔNG">
                                                                CHUÔNG
                                                            </a>
                                                        </li>
                                                        <li class="">
                                                            <span></span>
                                                            <a href="/collections/lu-tram" title="LƯ TRẦM">
                                                                LƯ TRẦM
                                                            </a>
                                                        </li>
                                                        <li class="">
                                                            <span></span>
                                                            <a href="/collections/san-pham-khac" title="TẶNG PHẨM KHÁC">
                                                                TẶNG PHẨM KHÁC
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="">
                                                    <span></span>
                                                    <a class="" href="/collections/hot-combo" title="HOT COMBO"
                                                        target="_self">
                                                        <i class="fal fa-angle-right"></i>HOT COMBO
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <span></span>
                                                    <a class="" href="/pages/voucher" title="MÃ GIẢM GIÁ"
                                                        target="_self">
                                                        <i class="fal fa-angle-right"></i>MÃ GIẢM GIÁ
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <span></span>
                                                    <a class="" href="{{ route('front.index-blog') }}" title="TIỆM KỂ BẠN NGHE"
                                                        target="_self">
                                                        <i class="fal fa-angle-right"></i>TIỆM KỂ BẠN NGHE
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
