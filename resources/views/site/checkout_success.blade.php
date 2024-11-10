@extends('site.layouts.master')
@section('title')
    <title>{{ "Đặt hàng thành công - " . ucfirst($_SERVER['HTTP_HOST']) }}</title>
@endsection
@section('css')
    <style>
        .order-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .order-table th,
        .order-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .order-table th {
            background-color: #f2f2f2;
        }

        /* Căn giữa nội dung của cột hình ảnh và giảm kích thước ảnh */
        .post-thumb-checkout img {
            max-width: 100px; /* Đặt kích thước tối đa của ảnh */
            height: auto; /* Duy trì tỷ lệ khung hình */
            display: block; /* Tránh giữa đối với hình ảnh inline */
            margin: 0 auto; /* Căn giữa ảnh */
        }

        /* Giảm khoảng cách giữa các sản phẩm trong danh sách */
        .single-widget-post {
            margin-bottom: 20px;
        }

        .order-button-payment a {
            text-decoration: none; /* Loại bỏ gạch chân khi hover */
        }

        .order-button-payment input[type="button"] {
            background-color: #f68e2e;
            color: #fff;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease; /* Hiệu ứng chuyển đổi màu nền */
        }

        .order-button-payment input[type="button"]:hover {
            background-color: #f68e2e;
        }

        @media only screen and (max-width: 767px) {
            .order-table th,
            .order-table td {
                display: block;
                width: 100%;
                box-sizing: border-box;
                margin-bottom: 5px;
            }

            .order-table th {
                display: none;
            }

            .order-table td:before {
                content: attr(data-label);
                float: left;
                font-weight: bold;
                text-transform: uppercase;
            }

            /* Ẩn hình ảnh khi xem trên mobile */
            .post-thumb-checkout img {
                /*display: none;*/
            }
        }

    </style>
@endsection

@section('content')

    <main id="main" class="">
        <div id="content" class="content-area page-wrapper" role="main">
            <div class="row row-main">
                <div class="large-12 col">
                    <div class="col-inner">

                        <div class="col-lg-12">
                            <div class="section-title text-center mb-30">
                                <h3>ĐẶT HÀNG THÀNH CÔNG</h3>
                            </div>
                            <div class="your-order-wrap">
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                        <!-- ACCORDION START -->
                                        <h5> Mã đơn hàng của bạn: {{$order->code}} <br>
                                            <br>
                                            Bạn vừa đặt hàng:
                                        </h5>
                                        <!-- ACCORDION END -->
                                    </div>
                                    <br>

                                    <div class="single-widget mb-30">
                                        <div class="newletter-wrap"></div>
                                        <table class="order-table">
                                            <thead>
                                            <tr>
                                                <th>Hình ảnh</th>
                                                <th>Sản phẩm</th>
                                                <th>Số lượng</th>
                                                <th>Đơn giá</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($order->details as $item)
                                                <tr>
                                                        <?php
                                                        $product = $item->product;
                                                        ?>
                                                    <td class="post-thumb-checkout">
                                                        <a href="#"><img src="{{$product->image->path ?? '/site/assets/images/blog/small-blog.jpg'}}" alt="{{$product->name}}<"></a>
                                                    </td>
                                                    <td>
                                                        <h6 class="post-title" style="font-size: 16px"><a href="#">{{$product->name}}<</a></h6>
                                                    </td>
                                                    <td>{{$item->qty}}</td>
                                                    <td>{{number_format($item->price)}} đ</td>
                                                </tr>
                                            @endforeach

                                            <!-- Thêm các hàng khác nếu cần -->
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="payment-accordion">
                                        <!-- ACCORDION START -->
                                        <h5> Tổng cộng: {{number_format($order->details->sum(function ($item) {
                                                                                    return $item->price * $item->qty;
                                                                            }))}} <br>

                                            <h4 style="font-size: 17px">Cảm ơn bạn đã mua hàng 127.0.0.1:8002. Chúng tôi sẽ xác nhận
                                                và liên hệ với bạn sớm nhất!</h4>
                                        </h5>
                                        <!-- ACCORDION END -->
                                    </div>
                                    <div class="order-button-payment" style="text-align: center;">
                                        <a href="{{route('front.home-page')}}"><input type="button" value="Tiếp tục mua sắm"></a>
                                    </div>
                                </div>
                                <!-- your-order-wrapper start -->

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>

@endsection
@push('scripts')

@endpush
