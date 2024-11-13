@extends('site.layouts.master')
@section('title')
    Giỏ hàng
@endsection

@section('css')
@endsection

@section('content')
    <div class="layoutPage-cart" id="layout-cart" ng-controller="CartController" ng-cloak>
        <div class="breadcrumb-shop">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <div class="breadcrumb-big">
                                <h2>
                                    Giỏ hàng
                                </h2>
                            </div>
                        </div>
                        <ol class="breadcrumb breadcrumb-arrows" itemscope itemtype="http://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <a href="{{route('front.home-page')}}" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
                                <meta itemprop="position" content="1" />
                            </li>
                            <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <span itemprop="item" content="{{route('cart.index')}}"><span itemprop="name">Giỏ
                                        hàng</span></span>
                                <meta itemprop="position" content="2" />
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper-cart-detail">
            <div class="container">
                <div class="heading-page">
                    <div class="header-page section-heading text-center">
                        <h1 class="section-title"><span>Giỏ hàng của bạn</span></h1>
                        <p class="count-cart">Có <span><% total_qty | number %> sản phẩm</span> trong giỏ hàng</p>
                    </div>
                </div>
                <div class="hrv-pus-promotion" data-hrvpus-layout="upsell"></div>
                <div class="row wrapbox-content-cart">
                    <div class="col-12 contentCart-detail">
                        <div class="cart-container">
                            <div class="cart-col-left">
                                <div class="main-content-cart">
                                    <form action="" method="post" id="cartformpage">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table class="table-cart">
                                                    <thead>
                                                        <tr>
                                                            <th class="image">&nbsp;</th>
                                                            <th class="item">Tên sản phẩm</th>
                                                            <th class="item">Giá</th>
                                                            <th class="item">Số lượng</th>
                                                            <th class="item">Thành tiền</th>
                                                            <th class="remove">&nbsp;</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="line-item-container" ng-repeat="item in items">
                                                            <td class="image">
                                                                <div class="product_image">
                                                                    <a href="/san-pham/<%item.attributes.slug%>.html">
                                                                        <img ng-src="<%item.attributes.image%>"
                                                                            alt="item.name" />
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <td class="item" width="420px">
                                                                <h3><a href="/san-pham/<%item.attributes.slug%>.html"><%item.name%></a>
                                                                </h3>
                                                                {{-- <p class="variant">
                                                                    <span class="variant_title">Xanh Nhiệt Đới</span>
                                                                </p> --}}
                                                                <p>
                                                                </p>
                                                            </td>
                                                            <td class="item">
                                                                <p>
                                                                    <span class="price"><%item.price | number%>₫</span>
                                                                    <del><%item.attributes.base_price | number%>₫</del>
                                                                </p>
                                                            </td>
                                                            <td class="qty">
                                                                <div class="qty quantity-partent qty-click clearfix">
                                                                    <button type="button"
                                                                        class="qtyminus qty-btn" ng-click="decrementQuantity(item); changeQty(item.quantity, item.id)">-</button>

                                                                    <input
                                                                        type="text" size="4" name=""
                                                                        min="1" id="updates_<%item.id%>"
                                                                        data-price="<%item.price%>" value="1"
                                                                        ng-model="item.quantity" value="<%item.quantity%>"
                                                                        class="tc line-item-qty item-quantity" ng-change="changeQty(item.quantity, item.id)"/>

                                                                    <button type="button"
                                                                        class="qtyplus qty-btn" ng-click="incrementQuantity(item); changeQty(item.quantity, item.id)">+</button>
                                                                </div>
                                                            </td>
                                                            <td class="item">
                                                                <p class="">
                                                                    <span class="line-item-total price"><span
                                                                            class="d-md-none">Thành tiền:
                                                                        </span><% item.price * item.quantity | number %>₫</span>
                                                                </p>
                                                            </td>
                                                            <td class="remove">
                                                                <a href="javascript:void(0)" class="cart" ng-click="removeItem(item.id)">
                                                                    <img
                                                                        src="/site/images/ic_close.png" /></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-5 col-lg-7">
                                                <div class="sidebox-group">
                                                    <h3>Ghi chú đơn hàng</h3>
                                                    <div class="checkout-note clearfix">
                                                        <textarea id="note" name="note" rows="4" placeholder="Ghi chú"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-7 col-lg-5">
                                                <div class="hrv-pmo-coupon" data-hrvpmo-layout="grids"></div>
                                                <div class="sidebox-order">
                                                    <div class="sidebox-order-inner">
                                                        <div class="sidebox-order_title">
                                                            <h3>Thông tin đơn hàng</h3>
                                                        </div>
                                                        <div class="sidebox-order_total">
                                                            <p>Tổng tiền:
                                                                <span class="total-price"><% total | number%>₫</span>
                                                            </p>
                                                        </div>
                                                        <div class="sidebox-order_text">
                                                            <p>Phí vận chuyển sẽ được tính ở trang thanh toán.<br>
                                                                Bạn cũng có thể nhập mã giảm giá ở trang thanh toán.
                                                            </p>
                                                        </div>
                                                        <div class="sidebox-order_action">
                                                            <a class="btn-custom btncart-checkout" href="{{route('cart.checkout')}}"><span><span>THANH
                                                                        TOÁN</span></span></a>
                                                            <p class="link-continue">
                                                                <a href="{{route('front.home-page')}}">
                                                                    <i class="fa fa-reply"></i> Tiếp tục mua hàng
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cart-buttons hidden">
                                                    <button type="submit" id="update-cart"
                                                        class="btn-update button dark hidden" name="update"
                                                        value="">Cập nhật</button>
                                                    <button type="submit" id="checkout"
                                                        class="btn-checkout button dark hidden" name="checkout"
                                                        value="">Thanh toán</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End cart -->
                    </div>
                </div>
                <div class="pageCart-hrvpmo  hrvpmo-grids">
                    <div class="hrv-pmo-discount" data-hrvpmo-layout="grids"></div>
                </div>
                <div class="order-summary-hrvpmo">
                    <div class="hrv-pmo-coupon" data-hrvpmo-layout="minimum"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="snippet-banner">
        <div class="container">
            <div class="row">
                @foreach ($categories as $category)
                <div class="col-12 col-md-4">
                    <div class="snippet-banner__item">
                        <a class="snippet-banner__link" href="{{route('front.show-product-category', $category->slug)}}">
                            <div class="snippet-banner__bg">
                                <img src="{{$category->image->path}}" alt="{{$category->name}}" loading="lazy" style="width: 100%; height: 100%; object-fit: cover;"/>
                            </div>
                        </a>
                        <div class="snippet-banner__content">
                            <div class="snippet-banner__strong">{{$category->name}}</div>
                            <div class="snippet-banner__desc"></div>
                            <a href="{{route('front.show-product-category', $category->slug)}}"
                                    class="snippet-banner__btn btn">Tìm hiểu </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@push('script')
<script>
    app.controller('CartController', function ($scope, cartItemSync, $interval, $rootScope) {
        $scope.items = @json($cartCollection);
        $scope.total = "{{$total_price}}";
        $scope.total_qty = "{{$total_qty}}";
        $scope.checkCart = true;

        $scope.countItem = Object.keys($scope.items).length;

        jQuery(document).ready(function () {
            if ($scope.total == 0) {
                $scope.checkCart = false;
                $scope.$applyAsync();
            }
        })

        $scope.changeQty = function (qty, product_id) {
            updateCart(qty, product_id)
        }

        $scope.incrementQuantity = function (product) {
            product.quantity = Math.min(product.quantity + 1, 9999);
        };

        $scope.decrementQuantity = function (product) {
            product.quantity = Math.max(product.quantity - 1, 0);
        };

        function updateCart(qty, product_id) {
            jQuery.ajax({
                type: 'POST',
                url: "{{route('cart.update.item')}}",
                headers: {
                    'X-CSRF-TOKEN': "{{csrf_token()}}"
                },
                data: {
                    product_id: product_id,
                    qty: qty
                },
                success: function (response) {
                    if (response.success) {
                        $scope.items = response.items;
                        $scope.total = response.total;
                        $scope.total_qty = response.count;
                        $interval.cancel($rootScope.promise);

                        $rootScope.promise = $interval(function(){
                            cartItemSync.items = response.items;
                            cartItemSync.total = response.total;
                            cartItemSync.count = response.count;
                        }, 1000);

                        $scope.$applyAsync();
                    }
                },
                error: function (e) {
                    toastr.error('Đã có lỗi xảy ra');
                },
                complete: function () {
                    $scope.$applyAsync();
                }
            });
        }

        $scope.removeItem = function (product_id) {
            jQuery.ajax({
                type: 'GET',
                url: "{{route('cart.remove.item')}}",
                data: {
                    product_id: product_id
                },
                success: function (response) {
                    if (response.success) {
                        $scope.items = response.items;
                        $scope.total = response.total;
                        $scope.total_qty = response.count;
                        if ($scope.total == 0) {
                            $scope.checkCart = false;
                        }

                        $interval.cancel($rootScope.promise);

                        $rootScope.promise = $interval(function(){
                            cartItemSync.items = response.items;
                            cartItemSync.total = response.total;
                            cartItemSync.count = response.count;
                        }, 1000);

                        $scope.countItem = Object.keys($scope.items).length;

                        $scope.$applyAsync();
                    }
                },
                error: function (e) {
                    toastr.error('Đã có lỗi xảy ra');
                },
                complete: function () {
                    $scope.$applyAsync();
                }
            });
        }
    });
</script>
@endpush
