@extends('site.layouts.master')
@section('title')
    {{ $cate_title }}
@endsection
@section('description')
    {{ $cate_des ?? '' }}
@endsection

@section('css')
@endsection

@section('content')
    <div id="blog">
        <div class="breadcrumb-shop">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <div class="breadcrumb-big">
                                <h2>
                                    {{ $cate_title }}
                                </h2>
                            </div>
                        </div>
                        <ol class="breadcrumb breadcrumb-arrows" itemscope itemtype="http://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <a href="{{ route('front.home-page') }}" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
                                <meta itemprop="position" content="1" />
                            </li>
                            <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <span itemprop="item" content="{{ route('front.index-blog') }}"><span
                                        itemprop="name">Tin tức</span></span>
                                <meta itemprop="position" content="2" />
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper-row pd-page py-5">
            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <div class="heading-page hide">
                            <h1>{{ $cate_title }}</h1>
                        </div>
                        <div class="blog-content">
                            <div class="list-article-content row">
                                <!-- Begin: Nội dung blog -->
                                {{-- <div class="col-12 ">
                                    <div class="article-item ">
                                        <div class="article-photo">
                                            <a href="/blogs/tin-tuc/tong-hop-cac-bo-phim-dang-xem-vao-mua-don">
                                                <img src="https://file.hstatic.net/200000541929/article/the_chronicles_of_narnia_the_lion__the_witch__and_the_wardrobe__2005__f3dd63746918405a924b797ec01620c1.jpg"
                                                    alt="TỔNG HỢP CÁC BỘ PHIM ĐÁNG XEM VÀO MÙA ĐÔN" />
                                            </a>
                                            <div class="article-info-wrap">
                                                <span class="article-author">Đăng bởi oni </span>
                                                <h3 class="article-title text2line text-justify">
                                                    <a href="/blogs/tin-tuc/tong-hop-cac-bo-phim-dang-xem-vao-mua-don"
                                                        title="TỔNG HỢP CÁC BỘ PHIM ĐÁNG XEM VÀO MÙA ĐÔN">TỔNG HỢP CÁC BỘ
                                                        PHIM ĐÁNG XEM VÀO MÙA ĐÔN</a>
                                                </h3>
                                                <span class="article-date">07/11/2024</span>
                                            </div>
                                        </div>
                                        <div class="article-info">
                                            <div class="article-desc">
                                                Mùa đông là thời điểm lý tưởng để quây quần bên gia đình, bạn bè và thư giãn
                                                trong không gian ấm áp với...
                                            </div>
                                            <a href="/blogs/tin-tuc/tong-hop-cac-bo-phim-dang-xem-vao-mua-don"
                                                class="article-btn btn">Đọc tiếp</a>
                                        </div>
                                    </div>
                                </div> --}}
                                @foreach ($blogs as $item)
                                    <div class="col-12 col-md-6">
                                        <div class="article-item ">
                                            <div class="article-photo">
                                                <a href="{{ route('front.detail-blog', $item->slug) }}">
                                                    <img src="{{ $item->image->path }}"
                                                        alt="{{ $item->image->name }}" />
                                                </a>
                                                <div class="article-info-wrap">
                                                    {{-- <span class="article-author">Đăng bởi oni </span> --}}
                                                    <h3 class="article-title text2line text-justify">
                                                        <a href="{{ route('front.detail-blog', $item->slug) }}"
                                                            title="{{ $item->name }}">{{ $item->name }}</a>
                                                    </h3>
                                                    <span class="article-date">{{ $item->created_at->format('d/m/Y') }}</span>
                                                </div>
                                            </div>
                                            <div class="article-info">
                                                <div class="article-desc">
                                                    {!! $item->intro !!}
                                                </div>
                                                <a href="{{ route('front.detail-blog', $item->slug) }}"
                                                    class="article-btn btn">Đọc tiếp</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div id="pagination" class="clearfix">
                                {{ $blogs->links() }}
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
