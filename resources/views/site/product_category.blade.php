@extends('site.layouts.master')
@section('title')
    <title>{{ $category->meta_title ? $category->meta_title : $category->name }}</title>
@endsection

@section('css')
@endsection

@section('content')
    <div id="collection" class="collection-page">
        <div class="breadcrumb-shop">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <div class="breadcrumb-big">
                                <h2>
                                    {{ $category->name }}
                                </h2>
                            </div>
                        </div>
                        <ol class="breadcrumb breadcrumb-arrows" itemscope itemtype="http://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <a href="{{ route('front.home-page') }}" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
                                <meta itemprop="position" content="1" />
                            </li>
                            <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <span itemprop="item" content=""><span itemprop="name">{{ $category->name }}</span></span>
                                <meta itemprop="position" content="2" />
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content ">
            <div class="container">
                <div id="collection-body" class="py-5">
                    <div class="wrapper-collection-hrvpmo hrvpmo-grids">
                        <div class="hrv-pmo-coupon" data-hrvpmo-layout="grids"></div>
                        <div class="hrv-pmo-discount" data-hrvpmo-layout="grids"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="wrap-collection-title">
                                <div class="heading-collection mb-10">
                                    <h1 class="title hide">
                                        {{ $category->name }}
                                    </h1>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="filter-mb">
                                            <button class="filter-mb-btn btn borderFilterMobile"
                                                onclick="initFilter('open')">
                                                <span class="filter-icon">
                                                    <i class="fal fa-filter"></i>
                                                </span>
                                                <span>Bộ lọc</span>
                                            </button>
                                        </div>
                                        <div class="option browse-tags">
                                            <label class="lb-filter hide" for="sort-by">Sắp xếp theo:</label>
                                            <span class="custom-dropdown custom-dropdown--grey borderFilterMobile">
                                                <select class="sort-by custom-dropdown__select">
                                                    <option value="manual">Sản phẩm nổi bật</option>
                                                    <option value="price-ascending"
                                                        data-filter="&sortby=(price:product=asc)">Giá: Tăng dần</option>
                                                    <option value="price-descending"
                                                        data-filter="&sortby=(price:product=desc)">Giá: Giảm dần</option>
                                                    <option value="title-ascending"
                                                        data-filter="&sortby=(title:product=asc)">Tên: A-Z</option>
                                                    <option value="title-descending"
                                                        data-filter="&sortby=(price:product=desc)">Tên: Z-A</option>
                                                    <option value="created-ascending"
                                                        data-filter="&sortby=(updated_at:product=desc)">Cũ nhất</option>
                                                    <option value="created-descending"
                                                        data-filter="&sortby=(updated_at:product=asc)">Mới nhất</option>
                                                    <option value="best-selling"
                                                        data-filter="&sortby=(sold_quantity:product=desc)">Bán chạy nhất
                                                    </option>
                                                    <option value="quantity-descending">Tồn kho: Giảm dần</option>
                                                </select>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-filter">
                                    <div class="box_sidebar">
                                        <div class="header">
                                            <span>FILTER</span>
                                            <a href="javascript:;" onclick="initFilter('close')"><i
                                                    class="fal fa-times"></i></a>
                                        </div>
                                        <div class="block left-module">
                                            <div class=" filter_xs">
                                                <div class="layered">
                                                    <div class="sidebar-block block_content mb-4">
                                                        <!-- ./filter brand -->
                                                        <div class="group-filter" aria-expanded="false">
                                                            <div class="layered_subtitle dropdown-filter"><span>Thương
                                                                    hiệu</span><span class="icon-control"><i
                                                                        class="fal fa-angle-up"></i></span></div>
                                                            <div class="layered-content bl-filter filter-brand">
                                                                <ul class="check-box-list">
                                                                    <li>
                                                                        <input type="checkbox" id="data-brand-p1"
                                                                            value="The YÊN" name="brand-filter"
                                                                            data-vendor="(vendor:product contains The YÊN)" />
                                                                        <label for="data-brand-p1">The YÊN</label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" id="data-brand-p2"
                                                                            value="Khác" name="brand-filter"
                                                                            data-vendor="(vendor:product contains Khác)" />
                                                                        <label for="data-brand-p2">Khác</label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" id="data-brand-p3"
                                                                            value="Gocnha" name="brand-filter"
                                                                            data-vendor="(vendor:product contains Gocnha)" />
                                                                        <label for="data-brand-p3">Gocnha</label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- ./filter price -->
                                                        <div class="group-filter" aria-expanded="false">
                                                            <div class="layered_subtitle dropdown-filter"><span>Giá sản
                                                                    phẩm</span><span class="icon-control"><i
                                                                        class="fal fa-angle-up"></i></span></div>
                                                            <div class="layered-content bl-filter filter-price">
                                                                <ul class="check-box-list">
                                                                    <li>
                                                                        <input type="checkbox" id="p1"
                                                                            name="cc"
                                                                            data-price="(price:product<=500000)" />
                                                                        <label for="p1">
                                                                            <span>Dưới</span> 500,000₫
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" id="p2"
                                                                            name="cc"
                                                                            data-price="((price:product>500000)&amp;&amp;(price:product<=1000000))" />
                                                                        <label for="p2">
                                                                            500,000₫ - 1,000,000₫
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" id="p3"
                                                                            name="cc"
                                                                            data-price="((price:product>1000000)&amp;&amp;(price:product<=1500000))" />
                                                                        <label for="p3">
                                                                            1,000,000₫ - 1,500,000₫
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" id="p4"
                                                                            name="cc"
                                                                            data-price="((price:product>2000000)&amp;&amp;(price:product<=5000000))" />
                                                                        <label for="p4">
                                                                            2,000,000₫ - 5,000,000₫
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" id="p5"
                                                                            name="cc"
                                                                            data-price="(price:product>=5000000)" />
                                                                        <label for="p5">
                                                                            <span>Trên</span> 5,000,000₫
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- ./filter color -->
                                                        <div class="group-filter" aria-expanded="false">
                                                            <div class="layered_subtitle dropdown-filter"><span>Màu
                                                                    sắc</span><span class="icon-control"><i
                                                                        class="fal fa-angle-up"></i></span></div>
                                                            <div class="layered-content filter-color s-filter">
                                                                <ul class="check-box-list">
                                                                    <li>
                                                                        <input type="checkbox" id="data-color-p1"
                                                                            value="Hồng" name="color-filter"
                                                                            data-color="(variant:product contains Hồng)"
                                                                            style="background-color: #ef5777" />
                                                                        <label for="data-color-p1">
                                                                            Hồng
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" id="data-color-p2"
                                                                            value="Vàng" name="color-filter"
                                                                            data-color="(variant:product contains Vàng)"
                                                                            style="background-color: #ffd32a" />
                                                                        <label for="data-color-p2">
                                                                            Vàng
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" id="data-color-p3"
                                                                            value="Xám" name="color-filter"
                                                                            data-color="(variant:product contains Xám)"
                                                                            style="background-color: #d2dae2" />
                                                                        <label for="data-color-p3">
                                                                            Xám
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" id="data-color-p4"
                                                                            value="Xanh" name="color-filter"
                                                                            data-color="(variant:product contains Xanh)"
                                                                            style="background-color: #3c40c6" />
                                                                        <label for="data-color-p4">
                                                                            Xanh
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" id="data-color-p5"
                                                                            value="Xanh lá" name="color-filter"
                                                                            data-color="(variant:product contains Xanh lá)"
                                                                            style="background-color: #0be881" />
                                                                        <label for="data-color-p5">
                                                                            Xanh lá
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" id="data-color-p6"
                                                                            value="Sen" name="color-filter"
                                                                            data-color="(variant:product contains Sen)"
                                                                            style="background-color: #f53b57" />
                                                                        <label for="data-color-p6">
                                                                            Sen
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" id="data-color-p7"
                                                                            value="Xanh biển" name="color-filter"
                                                                            data-color="(variant:product contains Xanh biển)"
                                                                            style="background-color: #0fbcf9" />
                                                                        <label for="data-color-p7">
                                                                            Xanh biển
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" id="data-color-p8"
                                                                            value="Đen" name="color-filter"
                                                                            data-color="(variant:product contains Đen)"
                                                                            style="background-color: #000000" />
                                                                        <label for="data-color-p8">
                                                                            Đen
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" id="data-color-p9"
                                                                            value="Trắng" name="color-filter"
                                                                            data-color="(variant:product contains Trắng)"
                                                                            style="background-color: #ffffff" />
                                                                        <label for="data-color-p9">
                                                                            Trắng
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" id="data-color-p10"
                                                                            value="Đỏ" name="color-filter"
                                                                            data-color="(variant:product contains Đỏ)"
                                                                            style="background-color: #ff3f34" />
                                                                        <label for="data-color-p10">
                                                                            Đỏ
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" id="data-color-p11"
                                                                            value="Tím" name="color-filter"
                                                                            data-color="(variant:product contains Tím)"
                                                                            style="background-color: #a55eea" />
                                                                        <label for="data-color-p11">
                                                                            Tím
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" id="data-color-p12"
                                                                            value="Pure Apple" name="color-filter"
                                                                            data-color="(variant:product contains Pure Apple)"
                                                                            style="background-color: #6ab04c" />
                                                                        <label for="data-color-p12">
                                                                            Pure Apple
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" id="data-color-p13"
                                                                            value="Blue" name="color-filter"
                                                                            data-color="(variant:product contains Blue)"
                                                                            style="background-color: #0c2461" />
                                                                        <label for="data-color-p13">
                                                                            Blue
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" id="data-color-p14"
                                                                            value="Cam" name="color-filter"
                                                                            data-color="(variant:product contains Cam)"
                                                                            style="background-color: #fa8231" />
                                                                        <label for="data-color-p14">
                                                                            Cam
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- ./filter size -->
                                                        <div class="group-filter" aria-expanded="false">
                                                            <div class="layered_subtitle dropdown-filter"><span>Kích
                                                                    thước</span><span class="icon-control"><i
                                                                        class="fal fa-angle-up"></i></span></div>
                                                            <div class="layered-content filter-size s-filter">
                                                                <ul class="check-box-list clearfix">
                                                                    <li>
                                                                        <input type="checkbox" id="data-size-p1"
                                                                            value="7" name="size-filter"
                                                                            data-size="(variant:product contains 7)" />
                                                                        <label for="data-size-p1">7</label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" id="data-size-p2"
                                                                            value="7.5" name="size-filter"
                                                                            data-size="(variant:product contains 7.5)" />
                                                                        <label for="data-size-p2">7.5</label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" id="data-size-p3"
                                                                            value="8" name="size-filter"
                                                                            data-size="(variant:product contains 8)" />
                                                                        <label for="data-size-p3">8</label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" id="data-size-p4"
                                                                            value="8.5" name="size-filter"
                                                                            data-size="(variant:product contains 8.5)" />
                                                                        <label for="data-size-p4">8.5</label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" id="data-size-p5"
                                                                            value="9" name="size-filter"
                                                                            data-size="(variant:product contains 9)" />
                                                                        <label for="data-size-p5">9</label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" id="data-size-p6"
                                                                            value="9.5" name="size-filter"
                                                                            data-size="(variant:product contains 9.5)" />
                                                                        <label for="data-size-p6">9.5</label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" id="data-size-p7"
                                                                            value="10" name="size-filter"
                                                                            data-size="(variant:product contains 10)" />
                                                                        <label for="data-size-p7">10</label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        jQuery(document).ready(function() {
                                            jQuery('.check-box-list li > input').click(function() {
                                                //$('.custom-loader').show();
                                                jQuery(this).parent().toggleClass('active');

                                                Stringfilter();
                                                var indexTitle = jQuery(this).parents('.group-filter').index();
                                                if (jQuery(this).parents('.group-filter').find('li.active').length > 0) {
                                                    var textFilter = [];
                                                    jQuery(this).parents('.group-filter').find('li.active').each(function() {
                                                        var textVal = $(this).find('label').html();
                                                        textFilter.push(textVal);
                                                    });
                                                    $('.filter_tags:eq(' + indexTitle + ') b').html(textFilter.join(',')).parent().addClass(
                                                        'opened');
                                                    if ($('.filter_tags:not(.filter_tags_remove_all).opened').length > 1) {
                                                        $('.filter_tags_remove_all').addClass('opened');
                                                    }
                                                } else {
                                                    $('.filter_tags:eq(' + indexTitle + ') b').html('').parent().removeClass('opened');
                                                    $('.filter_tags_remove_all').removeClass('opened');
                                                }

                                            })
                                            jQuery('.filter_tags_remove').click(function() {
                                                $(this).parent().removeClass('opened').find('b').html();
                                                var indexClick = $(this).parent().index();

                                                $('.group-filter:eq(' + indexClick + ') li.active input').prop('checked', false);
                                                $('.group-filter:eq(' + indexClick + ') li.active').removeClass('active');
                                                if ($('.filter_tags:not(.filter_tags_remove_all).opened').length == 1) {
                                                    $('.filter_tags_remove_all').removeClass('opened');
                                                }
                                                Stringfilter();
                                            });
                                            jQuery('.filter_tags_remove_all').click(function() {
                                                $('.group-filter li.active input').prop('checked', false);
                                                $('.group-filter li.active').removeClass('active');
                                                $('.filter_tags b').html('').parent().removeClass('opened');
                                                $('.filter_tags_remove_all').removeClass('opened');
                                                Stringfilter();
                                            });
                                            str = "";
                                            var Stringfilter = function() {
                                                var q = "",
                                                    gia = "",
                                                    vendor = "",
                                                    color = "",
                                                    size = "",
                                                    total_page = 0,
                                                    cur_page = 1;
                                                var handle_coll = $('#coll-handle').val();
                                                var str_url = 'filter=';
                                                q = "(" + handle_coll + ")";
                                                jQuery('.filter-price ul.check-box-list li.active').each(function() {
                                                    gia = gia + jQuery(this).find('input').data('price') + '||';
                                                })
                                                gia = gia.substring(0, gia.length - 2);
                                                if (gia != "") {
                                                    gia = '(' + gia + ')';
                                                    q += '&&' + gia;
                                                }
                                                jQuery('.filter-brand ul.check-box-list li.active').each(function() {
                                                    vendor = vendor + jQuery(this).find('input').data('vendor') + '||';
                                                })
                                                vendor = vendor.substring(0, vendor.length - 2);
                                                if (vendor != "") {
                                                    vendor = '(' + vendor + ')';
                                                    q += '&&' + vendor;
                                                }
                                                jQuery('.filter-color ul.check-box-list li.active').each(function() {
                                                    color = color + jQuery(this).find('input').data('color') + '||';
                                                    //size2 = size2 + jQuery(this).data('s') + '--';
                                                })
                                                color = color.substring(0, color.length - 2);
                                                if (color != "") {
                                                    color = '(' + color + ')';
                                                    q += '&&' + color;
                                                }
                                                jQuery('.filter-size ul.check-box-list li.active').each(function() {
                                                    size = size + jQuery(this).find('input').data('size') + '||';
                                                })
                                                size = size.substring(0, size.length - 2);
                                                if (size != "") {
                                                    size = '(' + size + ')';
                                                    q += '&&' + size;
                                                }
                                                console.log(str_url + q)
                                                str_url += encodeURIComponent(q);
                                                str = str_url;
                                                jQuery.ajax({ // lấy tổng số trang của kết quả filter
                                                    url: "/search?q=" + str_url + "&view=page",
                                                    async: false,
                                                    success: function(data) {
                                                        total_page = parseInt(data);
                                                    }
                                                })
                                                //console.log(total_page);
                                                if (cur_page <= total_page) {
                                                    jQuery('.pagi').show();
                                                    jQuery.ajax({
                                                        url: "/search?q=" + str_url + "&view=filter",
                                                        success: function(data) {
                                                            jQuery(".product-list.filter").html(data);
                                                            /*
                                                                            // fix lazyload
                                                                                jQuery('.content-product-list img').imagesLoaded( function() {
                                                                                    jQuery(window).resize();
                                                                                });
                                                                */
                                                            jQuery(".product-list.filter").removeClass('border');
                                                            jQuery(".alert-no-filter").hide();
                                                        }
                                                    })
                                                    jQuery.ajax({ // đoạn code
                                                        url: "/search?q=" + str_url + "&view=paginate",
                                                        async: false,
                                                        success: function(data) {
                                                            //jQuery(".pagi-filter").html(data); // in phân trang
                                                            jQuery(".pagi").html(data); // in phân trang
                                                        }
                                                    })
                                                } else {
                                                    if (jQuery('.alert-no').length > 0) {
                                                        jQuery(".alert-no").html("<p>Không tìm thấy sản phẩm nào phù hợp!</p>");
                                                    } else {
                                                        jQuery(".alert-no-filter").show().html("<p>Không tìm thấy sản phẩm nào phù hợp!</p>");
                                                    }
                                                    //jQuery(".product-list.filter").html("<div class='col-sm-12 col-xs-12 text-center no-product'><p>Không tìm thấy sản phẩm nào phù hợp!</p></div>");
                                                    jQuery(".product-list.filter").html('');
                                                    jQuery(".product-list.filter").addClass('border');
                                                    jQuery('.pagi').hide();
                                                }
                                                jQuery('.pagi').on("click", "a", function() { // bắt sự kiện click các nút phân trang
                                                    var link = jQuery(this).attr("data-link");
                                                    if (link == 'm') {
                                                        link = cur_page - 1;
                                                    }
                                                    if (link == 'p') {
                                                        link = cur_page + 1;
                                                    }
                                                    link = parseInt(link);
                                                    jQuery.ajax({
                                                        url: "/search?q=" + str + "&view=filter&page=" + link,
                                                        success: function(data) {
                                                            jQuery(".product-list.filter").html(data);
                                                            cur_page = link;
                                                        }
                                                    })
                                                    //console.log("/search?q="+str+"&view=paginate&page="+link);
                                                    jQuery.ajax({
                                                        url: "/search?q=" + str + "&view=paginate&page=" + link,
                                                        success: function(data) {
                                                            //jQuery(".pagi-filter").html(data); // in phân trang
                                                            jQuery(".pagi").html(data); // in phân trang
                                                        }
                                                    })
                                                });
                                                var x = $('.wrap-collection-title').offset().top;
                                                smoothScroll(x - 10, 500);
                                            }
                                        })
                                    </script>
                                </div>
                            </div>
                            <div class="layered_filter_tags">
                                <div class="filter_tags">
                                    Thương hiệu: <b></b>
                                    <span class="filter_tags_remove">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            version="1.1" x="0px" y="0px" viewBox="0 0 50 50" xml:space="preserve">
                                            <path fill="#333"
                                                d="M9.016 40.837a1.001 1.001 0 0 0 1.415-.001l14.292-14.309 14.292 14.309a1 1 0 1 0 1.416-1.413L26.153 25.129 40.43 10.836a1 1 0 1 0-1.415-1.413L24.722 23.732 10.43 9.423a1 1 0 1 0-1.415 1.413l14.276 14.293L9.015 39.423a1 1 0 0 0 .001 1.414z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="filter_tags">
                                    Giá sản phẩm: <b></b>
                                    <span class="filter_tags_remove">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            version="1.1" x="0px" y="0px" viewBox="0 0 50 50" xml:space="preserve">
                                            <path fill="#333"
                                                d="M9.016 40.837a1.001 1.001 0 0 0 1.415-.001l14.292-14.309 14.292 14.309a1 1 0 1 0 1.416-1.413L26.153 25.129 40.43 10.836a1 1 0 1 0-1.415-1.413L24.722 23.732 10.43 9.423a1 1 0 1 0-1.415 1.413l14.276 14.293L9.015 39.423a1 1 0 0 0 .001 1.414z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="filter_tags">
                                    Màu sắc: <b></b>
                                    <span class="filter_tags_remove">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            version="1.1" x="0px" y="0px" viewBox="0 0 50 50" xml:space="preserve">
                                            <path fill="#333"
                                                d="M9.016 40.837a1.001 1.001 0 0 0 1.415-.001l14.292-14.309 14.292 14.309a1 1 0 1 0 1.416-1.413L26.153 25.129 40.43 10.836a1 1 0 1 0-1.415-1.413L24.722 23.732 10.43 9.423a1 1 0 1 0-1.415 1.413l14.276 14.293L9.015 39.423a1 1 0 0 0 .001 1.414z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="filter_tags">
                                    Kích thước: <b></b>
                                    <span class="filter_tags_remove">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            version="1.1" x="0px" y="0px" viewBox="0 0 50 50" xml:space="preserve">
                                            <path fill="#333"
                                                d="M9.016 40.837a1.001 1.001 0 0 0 1.415-.001l14.292-14.309 14.292 14.309a1 1 0 1 0 1.416-1.413L26.153 25.129 40.43 10.836a1 1 0 1 0-1.415-1.413L24.722 23.732 10.43 9.423a1 1 0 1 0-1.415 1.413l14.276 14.293L9.015 39.423a1 1 0 0 0 .001 1.414z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="filter_tags filter_tags_remove_all"><span>Xóa hết </span></div>
                            </div>
                            <div class="alert-no-filter"></div>
                            <div class=" filter-here">
                                <div class="row content-product-list product-list filter no-gutters mb-30">
                                    @foreach ($products as $product)
                                    @include('site.partials.item_product', compact('product'))
                                    @endforeach
                                </div>
                                <div class="sortpagibar pagi text-center">
                                    <div id="pagination" class="clearfix">
                                        {{ $products->links() }}
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
