<div class="header-main " ng-controller="HeaderPartialController" ng-cloak>
    <header id="header">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between">
                <div class="header-logo">
                    <div class="header-logo wrap-logo" itemscope="" itemtype="http://schema.org/Organization">
                        <a href="{{route('front.home-page')}}" itemprop="url" aria-label="{{$config->web_title}}">
                            <img itemprop="logo"
                                src="{{$config->image->path}}" alt="{{$config->web_title}}" loading="lazy"
                                class="img-responsive logoimg" />
                        </a>
                    </div>
                </div>
                <div class="header-menu-desktop menu-desktop d-none d-lg-block">
                    <div class="header-navbar-menu">
                        <div class="wrap-logo wrap-logo-sticky">
                            <a href="{{route('front.home-page')}}" aria-label="{{$config->web_title}}">
                                <img src="{{$config->image->path}}" alt="{{$config->web_title}}" loading="lazy"
                                    class="img-responsive logoimg" />
                            </a>
                        </div>
                        <div class="navbar-mainmenu">
                            <div id="nav">
                                <nav class="main-nav">
                                    <ul class="clearfix">
                                        <li class=" dropdown">
                                            <a class="red-text" href="{{route('front.home-page')}}">
                                                Trang chủ </a>
                                        </li>
                                        @foreach ($productCategories as $category)
                                        <li class=" dropdown">
                                            <a class="" href="{{route('front.show-product-category', $category->slug)}}">
                                                {{ $category->name }}
                                                @if ($category->childs->count() > 0)
                                                <i class="fal fa-chevron-down" aria-hidden="true"></i>
                                                @endif
                                            </a>
                                            @if ($category->childs->count() > 0)
                                            <ul class="sub_menu">
                                                @foreach ($category->childs as $child)
                                                <li class="">
                                                    <a href="{{route('front.show-product-category', $child->slug)}}">
                                                        {{ $child->name }}
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                            @endif
                                        </li>
                                        @endforeach
                                        {{-- <li class=" dropdown">
                                            <a class="red-text" href="/pages/voucher">
                                                MÃ GIẢM GIÁ
                                            </a>
                                        </li> --}}
                                        <li class=" dropdown">
                                            <a class="" href="{{route('front.index-blog')}}">
                                                TIỆM KỂ BẠN NGHE
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <div class="header-account text-right">
                        {{-- <a class="header-icon-user" href="javascript:;" onclick="initLogin('open')">
                            <i class="pe-7s-user"></i>
                        </a> --}}
                        <a class="header-icon-search" href="javascript:;">
                            <i class="pe-7s-search"></i>
                        </a>
                        <div class="header-icon-cart position-relative">
                            <div class="header-icon-cart__header cursor-pointer" onclick="initCart('open')">
                                <i class="pe-7s-cart"></i>
                                <span class="count-holder" ng-if="hasItemInCart">
                                    <span class="count"><% cart.count %></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-upper-icon d-lg-none">
                    <div class="header-wrap-icon d-flex justify-content-end">
                        <div class="header-action_menu ml-4 d-lg-none">
                            <a class="close-nav" id="site-menu-handle" onclick="initNav('open')"><i
                                    class="fal fa-bars fz-20"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="header-search">
        <div class="container">
            <div class="main-search d-flex align-items-center justify-content-end">
                <a class="close-search" href="javascript:void(0);" onclick="initSearch('close')">
                    <img src="//theme.hstatic.net/200000541929/1001190790/14/icon-close.png?v=1803" alt="close" />
                </a>
                <div class="search-box wpo-wrapper-search">
                    <form action="/search" class="searchform-product ultimate-search">
                        <button type="submit" class="btn-search " id="btnSearchAuto-3" aria-label="Tìm kiếm">
                            <i class="fal fa-search"></i>
                        </button>
                        <div class="wpo-search-inner">
                            <input type="hidden" name="type" value="product" />
                            <input required id="inputSearchAuto-3" class="input-search" name="q" maxlength="40"
                                autocomplete="off" type="text" size="20" placeholder="Tìm kiếm sản phẩm..."
                                aria-label="input search">
                            <span class="close-search">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                                    </path>
                                </svg>
                            </span>
                        </div>
                    </form>
                    <button class="search-close">
                        <i class="fal fa-times"></i>
                    </button>
                    <div class="smart-search-wrapper ajaxSearchResults" id="ajaxSearchResults-3"
                        style="display: none">
                        <div class="resultsContent"></div>
                    </div>
                    <div class="searchform-backdrop"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('site.partials.card_product')
<script>
    app.controller('HeaderPartialController', function ($scope, cartItemSync, $timeout) {
        $scope.hasItemInCart = true;
        $scope.cart = cartItemSync;
    });
</script>
