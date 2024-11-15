@extends('site.layouts.master')
@section('title')
    {{ $product->name }}
@endsection
@section('description')
    {{ $product->short_des }}
@endsection

@section('css')
    <link rel="preload stylesheet" as="style" fetchpriority="low" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
    <link rel="preload stylesheet" as="style" fetchpriority="low" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer fetchpriority="low" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- <link href='/site/css/jquery.mthumbnailscroller.css?v=1811' rel='stylesheet' type='text/css'  media='all'  /> --}}

    <style>
        @media (max-width: 768px) {
            #buy-now {
                display: none;
            }
        }
    </style>
@endsection

@section('content')
    <div id="product" class="productDetail-page" ng-controller="ProductDetailController">
        <div class="breadcrumb-shop">
        </div>
        <div class="product-detail-wrapper pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-box-content">
                            <div class="row product-detail-main">
                                <div class="col-12 col-md-6 product-content-img">
                                    @foreach ($product->galleries as $item)
                                        <a class="fancy-gallery" data-fancybox="gallery"
                                            href="{{ $item->image->path }}"></a>
                                    @endforeach
                                    <div class="product-gallery">
                                        <div class="product-gallery__thumbs-container content light ">
                                            <div class="product-gallery__thumbs thumb-fix">
                                                @foreach ($product->galleries as $key => $item)
                                                <div class="product-gallery__thumb active">
                                                    <a class="product-gallery__thumb-placeholder" href="#thumb{{ $key }}"
                                                        data-image="{{ $item->image->path }}"
                                                        data-zoom-image="{{ $item->image->path }}">
                                                        <img alt=""
                                                            data-image="{{ $item->image->path }}"
                                                            src="{{ $item->image->path }}" loading="lazy">
                                                    </a>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="product-image-detail box__product-gallery scroll">
                                            <div id="sliderproduct"
                                                class="site-box-content slide_product owl-carousel owl-theme not-owl">
                                                @foreach ($product->galleries as $key => $item)
                                                <div class="product-gallery-item gallery-item" data-hash="thumb{{ $key }}"
                                                    data-alt="">
                                                    <img class="product-image-feature"
                                                        src="{{ $item->image->path }}"
                                                        alt="{{ $item->image->name }}">
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <span class="pro-sale">-{{ round(($product->base_price - $product->price) / $product->base_price * 100) }}% </span>
                                </div>
                                <div class="col-12 col-md-6 product-content-desc" id="detail-product">
                                    {{-- <p class="product-type hide">The YÊN</p> --}}
                                    <div class="product-title">
                                        <h1>{{ $product->name }}</h1>
                                        <div class="onireviewapp-loop">
                                            <div class="onireviewapp-loopitem" data-value="5" data-total="1"></div>
                                        </div>
                                    </div>
                                    <div class="product-price" id="price-preview">
                                        <del>{{ formatCurrency($product->base_price) }}₫</del>
                                        <span class="pro-price">{{ formatCurrency($product->price) }}₫</span>
                                    </div>
                                    <div class="product-hrvpmo hrvpmo-minimum">
                                    </div>
                                    <div class="product-desc-short">
                                        {!! $product->intro !!}
                                    </div>
                                    <form id="add-item-form" action="" method="post"
                                        class="variants clearfix">
                                        <div class="select clearfix">
                                            <select id="product-select" name="id">
                                                {{-- @foreach ($product->variants as $variant)
                                                    <option value="{{ $variant->id }}">{{ $variant->name }} - {{ formatCurrency($variant->price) }}₫</option>
                                                @endforeach --}}
                                            </select>
                                        </div>
                                        <div class="select-swatch clearfix">
                                        </div>
                                        <div class="selector-actions">
                                            <div class="quantity-area clearfix">
                                                <input type="button" value="-" onclick="minusQuantity()"
                                                    class="qty-btn qty-btn-minus">
                                                <input type="text" id="quantity" name="quantity" value="1"
                                                    min="1" class="quantity-selector" ng-model="form.quantity">
                                                <input type="button" value="+" onclick="plusQuantity()"
                                                    class="qty-btn qty-btn-plus">
                                            </div>
                                            <div class="wrap-addcart">
                                                <button type="button" id="add-to-cart"
                                                    class=" add-to-cartProduct btn btn-addtocart addtocart-modal"
                                                    name="add" ng-click="addToCartFromProductDetail()">
                                                    Thêm vào giỏ
                                                </button>
                                                <button type="button" id="buy-now"
                                                    class=" add-to-cartProduct btn btn-addtocart addtocart-modal"
                                                    name="add" ng-click="addToCartCheckoutFromProductDetail()">
                                                    Mua ngay
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-trust mb-20">
                                            <img
                                                src="/site/images/product-trust.png?v=1811" />
                                        </div>
                                    </form>
                                    {{-- <div class="tagged_as">
                                        Tags:
                                        <a href="/collections/all/phu-kien">phụ kiện</a>,
                                        <a href="/collections/all/vong-tay">vòng tay</a>,
                                        <a href="/collections/all/qua-tang">quà tặng</a>
                                    </div> --}}
                                    {{-- <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57353288f3360620"></script> --}}
                                    {{-- <div class="mt-20">
                                        <div class="addthis_inline_share_toolbox_37wc"></div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="hrv-pmo-coupon" data-hrvpmo-layout="grids"></div>
                    </div>
                </div>
            </div>
            <div class="product-content-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mt-15">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="product-description product-box-content">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                                    href="#nav-home" role="tab" aria-controls="nav-home"
                                                    aria-selected="true">Thông tin sản phẩm</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                                aria-labelledby="nav-home-tab">
                                                <div class="product-description">
                                                    <div class="description-content expandable-toggle opened">
                                                        <div class="description-productdetail">
                                                            {!! $product->body !!}
                                                        </div>
                                                        <div
                                                            class="layout-btn-toggle d-flex align-items-center justify-content-center">
                                                            <button
                                                                class="btn-more-less expandable-content_toggle js_expandable_content btn-viewmore">
                                                                <span class="expandable-content_toggle-icon"></span>
                                                                <span class="expandable-content_toggle-text">Xem
                                                                    thêm</span>
                                                                <i class="fa-solid fa-angles-down"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fleximageguner">
                                                </div>
                                                <div class="fleximagegunersmall">
                                                </div>
                                            </div>
                                            @include('site.partials.onireview')
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
    <div class="product-related-seen" ng-controller="ListProductController">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="list-productRelated clearfix">
                        <div class="section-heading text-center">
                            <h2 class="section-title">
                                <span>Sản phẩm liên quan</span>
                            </h2>
                        </div>
                        <div class="content-product-list row no-gutters">
                            @foreach ($productsRelated as $item)
                            @include('site.partials.item_product', ['product' => $item])
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <style>
        .fleximagegunersmall {
            width: 770px;
            margin: 0 auto;
            display: none;
        }

        @media (max-width:767px) {
            .fleximagegunersmall {
                display: block;
                max-width: 100%;
            }
        }

        @media (min-width:767px) {
            .fleximageguner {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 5px;
                width: 770px;
                margin: 0 auto;
            }

            .fleximageguner>div {
                border-radius: 5px;
                overflow: hidden;
            }
        }

        .boxwrapervideo {
            width: 800px;
            margin: 0 auto;
            max-width: 100%;
        }

        .videoslider_item img {
            aspect-ratio: 3 / 1.7;
            border-radius: 19px;
            object-fit: cover;
        }

        .videoslider_item {
            position: relative
        }

        .videoslider_item svg {
            fill: #212121;
            fill-opacity: .8;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            left: 50%;
            width: 60px;
            z-index: 999;
        }

        .preorder-video-in-content.video-on-mobile {
            display: none;
        }

        @media (max-width: 991px) {
            .preorder-video-in-content.video-on-mobile {
                display: block;
                margin: 0 -15px 10px;
            }
        }

        .preorder-video-in-content.video-on-mobile .swiper-container {
            width: 100%;
            padding-top: 0;
            padding-bottom: 0;
        }

        .preorder-video-in-content.video-on-mobile .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 245px;
            height: 139px;
            border-radius: 20px;
            opacity: 0;
        }

        .preorder-video-in-content.video-on-mobile .swiper-slide-next {
            z-index: 0;
            opacity: 1;
        }

        .preorder-video-in-content.video-on-mobile .swiper-slide-prev {
            z-index: 0;
            opacity: 1;
        }

        .preorder-video-in-content.video-on-mobile .swiper-slide-active {
            z-index: 20;
            opacity: 1;
        }

        @media (max-width: 767px) {
            .swiper-slide.open-video-popup {
                overflow: hidden;
            }

            .swiper-slide.open-video-popup img {
                aspect-ratio: 245 / 139;
                object-fit: cover;
            }

            .swiper-slide.open-video-popup.swiper-slide-active:after,
            .swiper-slide.open-video-popup.swiper-slide-prev:after,
            .swiper-slide.open-video-popup.swiper-slide-next:after {
                content: "";
                position: absolute;
                z-index: 0;
                background: rgba(255, 255, 255, 0.7);
                width: 100%;
                height: 100%;
                left: 0;
                transition: all .3s ease-out;
            }

            .swiper-slide.open-video-popup.swiper-slide-active:after {
                z-index: 0;
                background: rgba(255, 255, 255, 0);
            }

            .swiper-slide.open-video-popup.swiper-slide-active:before {
                content: "";
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 40px;
                height: 40px;
                background: url(//theme.hstatic.net/1000069970/1001119059/14/youtube-icon.png?v=3680);
                background-repeat: no-repeat;
                background-size: contain;
                background-position: center;
                z-index: 0;
            }

            @media (max-width:767px) {
                .boxwrapervideo {
                    display: none !important
                }
            }

            @media (min-width:768px) {
                .video-on-mobile {
                    display: none !important
                }
            }

            .video-on-mobile svg {
                position: absolute;
                top: 50%;
                transform: translate(-50%, -50%);
                left: 50%;
                width: 27px;
                height: 24px;
            }
        }
    </style>

@endsection

@push('script')
<script>
    app.controller('ProductDetailController', function($scope, $http, $interval, cartItemSync, $rootScope) {
        $scope.product = @json($product);
        $scope.form = {
            quantity: 1
        };

        $scope.addToCartFromProductDetail = function() {
            let quantity = $('form input[name="quantity"]').val();
            url = "{{route('cart.add.item', ['productId' => 'productId'])}}";
            url = url.replace('productId', $scope.product.id);

            jQuery.ajax({
                type: 'POST',
                url: url,
                headers: {
                    'X-CSRF-TOKEN': "{{csrf_token()}}"
                },
                data: {
                    'qty': parseInt(quantity)
                },
                success: function (response) {
                    if (response.success) {
                        if (response.count > 0) {
                            $scope.hasItemInCart = true;
                        }

                        $interval.cancel($rootScope.promise);

                        $rootScope.promise = $interval(function () {
                            cartItemSync.items = response.items;
                            cartItemSync.total = response.total;
                            cartItemSync.count = response.count;
                        }, 1000);
                        toastr.success('Thao tác thành công !')
                    }
                },
                error: function () {
                    toastr.error('Thao tác thất bại !')
                },
                complete: function () {
                    $scope.$applyAsync();
                }
            });
        }

        $scope.addToCartCheckoutFromProductDetail = function() {
            let quantity = $('form input[name="quantity"]').val();
            url = "{{route('cart.add.item', ['productId' => 'productId'])}}";
            url = url.replace('productId', $scope.product.id);

            jQuery.ajax({
                type: 'POST',
                url: url,
                headers: {
                    'X-CSRF-TOKEN': "{{csrf_token()}}"
                },
                data: {
                    'qty': parseInt(quantity)
                },
                success: function (response) {
                    if (response.success) {
                        if (response.count > 0) {
                            $scope.hasItemInCart = true;
                        }

                        $interval.cancel($rootScope.promise);

                        $rootScope.promise = $interval(function () {
                            cartItemSync.items = response.items;
                            cartItemSync.total = response.total;
                            cartItemSync.count = response.count;
                        }, 1000);
                        toastr.success('Thao tác thành công !')
                        window.location.href = "{{route('cart.checkout')}}";
                    }
                },
                error: function () {
                    toastr.error('Thao tác thất bại !')
                },
                complete: function () {
                    $scope.$applyAsync();
                }
            });
        }
    });
</script>
<script>
    $(".product-gallery__thumb img").click(function() {
        $(".product-gallery__thumb").removeClass('active');
        $(this).parents('.product-gallery__thumb').addClass('active');
        var img_thumb = $(this).data('image');
        var total_index = $(this).parents('.product-gallery__thumb').index() + 1;
        $(".gallery-index .current").html(total_index);
        //$(".product-image-detail .product-image-feature").attr("src",$(this).attr("data-image"));
        /*
        setTimeout(function(){
            try{
                $('.zoomContainer').remove();
                jQuery("#sliderproduct .owl-item.active .product-image-feature").elevateZoom({
                    gallery:'product-gallery__thumbs',
                    scrollZoom : true,
                    cursor: "crosshair"
                });
            }catch(e){}
        },300);
        */
    });
    $(".product-gallery__thumb").first().addClass('active');
    /*
    if ($(window).width() > 768) {
        setTimeout(function(){
            try{
                $('.zoomContainer').remove();
                jQuery("#sliderproduct .owl-item.active .product-image-feature").elevateZoom({
                    gallery:'product-gallery__thumbs',
                    scrollZoom : true,
                    cursor: "crosshair"
                });
            }catch(e){}
        },300);
    }
    */
    $(document).on('click', '.zoomLens', function() {
        let currImg = $(this).closest('.zoomContainer').find('.zoomWindowContainer > div').css(
            "background-image").split('"');
        let currImg2 = currImg[1].replace('https:', '');
        $('.fancy-gallery[href="' + currImg2 + '"]').trigger('click')
    });

    var check_variant = true;
    var fIndex = false;

</script>
<script>
    var swatch_size = parseInt($('#add-item-form .select-swatch').children().length);
    jQuery(document).on('click', '#add-item-form .swatch input', function(e) {
        e.preventDefault();
        var $this = $(this);
        var _available = '';
        $this.parent().siblings().find('label').removeClass('sd');
        $this.next().addClass('sd');
        var name = $this.attr('name');
        var value = $this.val();
        if ($(this).hasClass('input-color')) {
            getVariantColorImage(value);
            getImageThumb();
        }



        let currImg = $this.next().find('span').data('image');
        console.log(currImg);
        $('.product-gallery__thumb a[data-image="' + currImg + '"] img').trigger('click');


        $('#add-item-form select[data-option=' + name + ']').val(value).trigger('change');
        if (swatch_size == 2) {
            if (name.indexOf('1') != -1) {
                $('#add-item-form #variant-swatch-1 .swatch-element').find('input').prop('disabled', false);
                $('#add-item-form #variant-swatch-2 .swatch-element').find('input').prop('disabled', false);
                $('#add-item-form #variant-swatch-1 .swatch-element label').removeClass('sd');
                $('#add-item-form #variant-swatch-1 .swatch-element').removeClass('soldout');
                $('#add-item-form .selector-wrapper .single-option-selector').eq(1).find('option').each(
                    function() {
                        var _tam = $(this).val();
                        $(this).parent().val(_tam).trigger('change');
                        if (check_variant) {
                            if (_available == '') {
                                _available = _tam;
                            }
                        } else {
                            $('#add-item-form #variant-swatch-1 .swatch-element[data-value="' + _tam + '"]')
                                .addClass('soldout');
                            $('#add-item-form #variant-swatch-1 .swatch-element[data-value="' + _tam + '"]')
                                .find('input').prop('disabled', true);
                        }
                    })
                $('#add-item-form .selector-wrapper .single-option-selector').eq(1).val(_available).trigger(
                    'change');
                $('#add-item-form #variant-swatch-1 .swatch-element[data-value="' + _available + '"] label')
                    .addClass('sd');
            }
        } else if (swatch_size == 3) {
            var _count_op2 = $('#add-item-form #variant-swatch-1 .swatch-element').length;
            var _count_op3 = $('#add-item-form #variant-swatch-2 .swatch-element').length;
            if (name.indexOf('1') != -1) {
                $('#add-item-form #variant-swatch-1 .swatch-element').find('input').prop('disabled', false);
                $('#add-item-form #variant-swatch-2 .swatch-element').find('input').prop('disabled', false);
                $('#add-item-form #variant-swatch-1 .swatch-element label').removeClass('sd');
                $('#add-item-form #variant-swatch-1 .swatch-element').removeClass('soldout');
                $('#add-item-form #variant-swatch-2 .swatch-element label').removeClass('sd');
                $('#add-item-form #variant-swatch-2 .swatch-element').removeClass('soldout');
                var _avi_op1 = '';
                var _avi_op2 = '';
                $('#add-item-form #variant-swatch-1 .swatch-element').each(function(ind, value) {
                    var _key = $(this).data('value');
                    var _unavi = 0;
                    $('#add-item-form .single-option-selector').eq(1).val(_key).change();
                    $('#add-item-form #variant-swatch-2 .swatch-element label').removeClass('sd');
                    $('#add-item-form #variant-swatch-2 .swatch-element').removeClass('soldout');
                    $('#add-item-form #variant-swatch-2 .swatch-element').find('input').prop('disabled',
                        false);
                    $('#add-item-form #variant-swatch-2 .swatch-element').each(function(i, v) {
                        var _val = $(this).data('value');
                        $('#add-item-form .single-option-selector').eq(2).val(_val).change();
                        if (check_variant == true) {
                            if (_avi_op1 == '') {
                                _avi_op1 = _key;
                            }
                            if (_avi_op2 == '') {
                                _avi_op2 = _val;
                            }
                            //console.log(_avi_op1 + ' -- ' + _avi_op2)
                        } else {
                            _unavi += 1;
                        }
                    })
                    if (_unavi == _count_op3) {
                        $('#add-item-form #variant-swatch-1 .swatch-element[data-value = "' + _key +
                            '"]').addClass('soldout');
                        setTimeout(function() {
                            $('#add-item-form #variant-swatch-1 .swatch-element[data-value = "' +
                                _key + '"] input').attr('disabled', 'disabled');
                        })
                    }
                })
                $('#add-item-form #variant-swatch-1 .swatch-element[data-value="' + _avi_op1 + '"] input')
                    .click();
            } else if (name.indexOf('2') != -1) {
                $('#add-item-form #variant-swatch-2 .swatch-element label').removeClass('sd');
                $('#add-item-form #variant-swatch-2 .swatch-element').removeClass('soldout');
                $('#add-item-form #variant-swatch-2 .swatch-element').find('input').prop('disabled', false);
                $('#add-item-form .selector-wrapper .single-option-selector').eq(2).find('option').each(
                    function() {
                        var _tam = $(this).val();
                        $(this).parent().val(_tam).trigger('change');
                        if (check_variant) {
                            if (_available == '') {
                                _available = _tam;
                            }
                        } else {
                            $('#add-item-form #variant-swatch-2 .swatch-element[data-value="' + _tam + '"]')
                                .addClass('soldout');
                            $('#add-item-form #variant-swatch-2 .swatch-element[data-value="' + _tam + '"]')
                                .find('input').prop('disabled', true);
                        }
                    })
                $('#add-item-form .selector-wrapper .single-option-selector').eq(2).val(_available).trigger(
                    'change');
                $('#add-item-form #variant-swatch-2 .swatch-element[data-value="' + _available + '"] label')
                    .addClass('sd');
            }
        } else {

        }
    })
    $(document).ready(function() {
        var _chage = '';
        $('#add-item-form .swatch-element[data-value="' + $(
                '#add-item-form .selector-wrapper .single-option-selector').eq(0).val() + '"]').find('input')
            .click();
        $('#add-item-form .swatch-element[data-value="' + $(
                '#add-item-form .selector-wrapper .single-option-selector').eq(1).val() + '"]').find('input')
            .click();
        if (swatch_size == 2) {
            var _avi_op1 = '';
            var _avi_op2 = '';
            var _count = $('#add-item-form #variant-swatch-1 .swatch-element').length;
            $('#add-item-form #variant-swatch-0 .swatch-element').each(function(ind, value) {
                var _key = $(this).data('value');
                var _unavi = 0;
                $('#add-item-form .single-option-selector').eq(0).val(_key).change();
                $('#add-item-form #variant-swatch-1 .swatch-element').each(function(i, v) {
                    var _val = $(this).data('value');
                    $('#add-item-form .single-option-selector').eq(1).val(_val).change();
                    if (check_variant == true) {
                        if (_avi_op1 == '') {
                            _avi_op1 = _key;
                        }
                        if (_avi_op2 == '') {
                            _avi_op2 = _val;
                        }
                    } else {
                        _unavi += 1;
                    }
                })
                if (_unavi == _count) {
                    $('#add-item-form #variant-swatch-0 .swatch-element[data-value = "' + _key + '"]')
                        .addClass('soldout');
                    $('#add-item-form #variant-swatch-0 .swatch-element[data-value = "' + _key + '"]')
                        .find('input').attr('disabled', 'disabled');
                }
            })
            $('#add-item-form #variant-swatch-1 .swatch-element[data-value = "' + _avi_op2 + '"] input')
        .click();
            $('#add-item-form #variant-swatch-0 .swatch-element[data-value = "' + _avi_op1 + '"] input')
        .click();
        } else if (swatch_size == 3) {
            var _avi_op1 = '';
            var _avi_op2 = '';
            var _avi_op3 = '';
            var _size_op2 = $('#add-item-form #variant-swatch-1 .swatch-element').length;
            var _size_op3 = $('#add-item-form #variant-swatch-2 .swatch-element').length;

            $('#add-item-form #variant-swatch-0 .swatch-element').each(function(ind, value) {
                var _key_va1 = $(this).data('value');
                var _count_unavi = 0;
                $('#add-item-form .single-option-selector').eq(0).val(_key_va1).change();
                $('#add-item-form #variant-swatch-1 .swatch-element').each(function(i, v) {
                    var _key_va2 = $(this).data('value');
                    var _unavi_2 = 0;
                    $('#add-item-form .single-option-selector').eq(1).val(_key_va2).change();
                    $('#add-item-form #variant-swatch-2 .swatch-element').each(function(j, z) {
                        var _key_va3 = $(this).data('value');
                        $('#add-item-form .single-option-selector').eq(2).val(_key_va3)
                            .change();
                        if (check_variant == true) {
                            if (_avi_op1 == '') {
                                _avi_op1 = _key_va1;
                            }
                            if (_avi_op2 == '') {
                                _avi_op2 = _key_va2;
                            }
                            if (_avi_op3 == '') {
                                _avi_op3 = _key_va3;
                            }
                        } else {
                            _unavi_2 += 1;
                        }
                    })
                    if (_unavi_2 == _size_op3) {
                        _count_unavi += 1;
                    }
                })
                if (_size_op2 == _count_unavi) {
                    $('#add-item-form #variant-swatch-0 .swatch-element[data-value = "' + _key_va1 +
                        '"]').addClass('soldout');
                    $('#add-item-form #variant-swatch-0 .swatch-element[data-value = "' + _key_va1 +
                        '"]').find('input').attr('disabled', 'disabled');
                }
            })
            $('#add-item-form #variant-swatch-0 .swatch-element[data-value = "' + _avi_op1 + '"] input')
        .click();
        }
    });
    $(document).ready(function() {
        var vl = $('#add-item-form .swatch .color input').val();
        $('#add-item-form .swatch .color input').parents(".swatch").find(".header span").html(vl);
        $("#add-item-form .select-swap .color").hover(function() {
            var value = $(this).data("value");
            $(this).parents(".swatch").find(".header span").html(value);
        }, function() {
            var value = $("#add-item-form .select-swap .color label.sd span").html();
            $(this).parents(".swatch").find(".header span").html(value);
        });

        $('#sliderproduct').owlCarousel({
            items: 1,
            loop: false,
            margin: 0,
            autoplayHoverPause: true,

            URLhashListener: false,
            startPosition: 'URLHash'

        });

    });
    /*
    if ($(window).width() > 768) {
        $('.product-image-feature').elevateZoom({
            scrollZoom : true,
            cursor: "crosshair"
        });
    }
    $(document).on('click', '.zoomLens', function (){
        let currImg = $(this).closest('.zoomContainer').find('.zoomWindowContainer > div').css("background-image").split('"');
        let currImg2 = currImg[1].replace('https:', '');
        $('.fancy-gallery[href="'+currImg2+'"]').trigger('click')
    });
    */
</script>
<script>
    jQuery(document).ready(function() {
        var expandable_content_height = $('.expandable-toggle .description-productdetail').height();
        if (expandable_content_height > '500') {
            $('.expandable-toggle .description-productdetail').css({
                "height": "500px",
                "overflow": "hidden"
            });
        } else {
            $('.expandable-content_toggle').addClass('hidden');
        }
        $('body').on('click', '.js_expandable_content', function(e) {
            if (!$('.expandable-toggle').hasClass('opened')) {
                $('.expandable-content_toggle').removeClass('btn-closemore').addClass('btn-viewmore')
                    .find('.expandable-content_toggle-text').html('Xem thêm');
                var curHeight = $('.expandable-toggle .description-productdetail').height();
                expandable_content_height = '500';
                $('.expandable-toggle .description-productdetail').height(curHeight).animate({
                    height: expandable_content_height
                }, 300, function() {
                    $(this).parent().addClass('opened');
                });
                if ($(window).width() < 992) {
                    $('html, body').animate({
                        scrollTop: $(".product-description").offset().top - 45
                    }, 300);
                }
            } else {
                $('.expandable-toggle .description-productdetail').css('height', 'auto');
                $('.expandable-toggle').removeClass('opened');
                $('.expandable-content_toggle').removeClass('btn-viewmore').addClass('btn-closemore')
                    .find('.expandable-content_toggle-text').html('Rút gọn');
            }
        });
    })
</script>
{{-- <script>
    ! function() {
        try {
            var thtm = '';
            var productId = "1057960168";
            if (productId.length > 0) {
                var questions = [];
                $.ajax({
                    type: 'GET',
                    url: `https://reviews.onistudio.net/api/open/questions/247?limit=50&page=1&target_id=${productId}`,
                    async: false,
                    success: function(result) {
                        questions = result.data.list;
                    }
                })
                if (questions.length > 0) {
                    var tbody = ``;
                    $.each(questions, function(index, item) {
                        var tr = `<td>${item.desc}</td>`;
                        $.ajax({
                            type: 'GET',
                            url: `https://reviews.onistudio.net/api/open/comments/247/${item.id}`,
                            async: false,
                            success: function(data) {
                                var rep = '';
                                $.each(data.data, function(i, v) {
                                    rep += `<p>${v.desc}</p>`;
                                })
                                tr += `<td>${rep}</td>`;
                            }
                        })
                        tbody += `<tr>${tr}</tr>`;
                    });
                    thtm = `<div class="table-responsive">
            <table class="table table-bordered">
            <thead>
            <tr><td>Câu hỏi</td><td>Trả lời</td></tr>
</thead>
            <tbody>
            ${tbody}
</tbody>
</table>
</div>`;
                }
            }
            $('body').on('click', '.onirvapp-tab button:last-child', function(e) {
                e.preventDefault();
                $('#onirvapp-question-list').html(thtm);
            })

        } catch (e) {
            console.log(e);
        }
    }();
</script> --}}
<script>
    $(document).ready(function() {
        setTimeout(function() {
            $(".productDetail-page").addClass("callto");
        }, 2000)
    });
    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(function() {
            $(".product-gallery__thumbs .product-gallery__thumb:first-child img").click();
        }, 500);
    });
</script>
@endpush
