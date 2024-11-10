@extends('site.layouts.master')
@section('title')
    <title>Liên hệ</title>
@endsection

@section('css')
    <style>
        .invalid-feedback {
            font-size: 14.5px;
            color: #dc3545;
        }
    </style>
@endsection

@section('content')
<main id="main" class="" ng-controller="ContactUs" >
    <div id="content" role="main" class="content-area">
    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_26421890">
        <div class="img-inner dark" >
            <img fetchpriority="high" decoding="async" width="1920" height="500" src="{{asset('site/image/20160325015235_359-min.jpg')}}" class="attachment-original size-original" alt="" srcset="{{asset('site/image/20160325015235_359-min.jpg')}} 1920w, {{asset('site/image/20160325015235_359-min.jpg')}} 400w, {{asset('site/image/20160325015235_359-min.jpg')}} 600w, {{asset('site/image/20160325015235_359-min.jpg')}} 768w, {{asset('site/image/20160325015235_359-min.jpg')}} 1200w" sizes="(max-width: 1920px) 100vw, 1920px" />
        </div>
        <style>
            #image_26421890 {
            width: 100%;
            }
        </style>
    </div>
    <section class="section" id="section_757252814">
        <div class="bg section-bg fill bg-fill  bg-loaded" >
        </div>
        <div class="section-content relative">
            <div class="row"  id="row-1288449506">
                <div id="col-1030883048" class="col div-no-padding medium-6 small-12 large-6"  >
                <div class="col-inner"  >
                    <h3><span style="color: #ff9900;">THÔNG TIN LIÊN HỆ</span></h3>
                    <p>Cảm ơn bạn đã quan tâm đến dịch vụ của chúng tôi. Để đặt lịch tư vấn riêng, bạn vui lòng điền thông tin vào mẫu đơn bên trái hoặc điền đơn “đề nghị tư vấn” online. Chuyên viên tư vấn của chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất hoặc liên hệ trực tiếp theo số điện thoại {{$config->hotline}}.</p>
                    <div class="icon-box featured-box icon-box-left text-left"  >
                        <div class="icon-box-img" style="width: 52px">
                            <div class="icon">
                            <div class="icon-inner" >
                                <img decoding="async" width="57" height="56" src="{{asset('site/image/2020-09-10_100448.jpg')}}" class="attachment-medium size-medium" alt="" />
                            </div>
                            </div>
                        </div>
                        <div class="icon-box-text last-reset">
                            <h4>HOTLINE:</h4>
                            <p>{{$config->hotline}}</p>
                        </div>
                    </div>
                    <div id="gap-656580949" class="gap-element clearfix" style="display:block; height:auto;">
                        <style>
                            #gap-656580949 {
                            padding-top: 10px;
                            }
                        </style>
                    </div>
                    <div class="icon-box featured-box icon-box-left text-left"  >
                        <div class="icon-box-img" style="width: 52px">
                            <div class="icon">
                            <div class="icon-inner" >
                                <img decoding="async" width="55" height="56" src="{{asset('site/image/2020-09-10_100455.jpg')}}" class="attachment-medium size-medium" alt="" />
                            </div>
                            </div>
                        </div>
                        <div class="icon-box-text last-reset">
                            <h4>EMAIL:</h4>
                            <p>{{$config->email}}</p>
                        </div>
                    </div>
                    <div id="gap-1263125373" class="gap-element clearfix" style="display:block; height:auto;">
                        <style>
                            #gap-1263125373 {
                            padding-top: 10px;
                            }
                        </style>
                    </div>
                    <div class="icon-box featured-box icon-box-left text-left"  >
                        <div class="icon-box-img" style="width: 52px">
                            <div class="icon">
                            <div class="icon-inner" >
                                <img loading="lazy" decoding="async" width="56" height="54" src="{{asset('site/image/2020-09-10_100501.jpg')}}" class="attachment-medium size-medium" alt="" />
                            </div>
                            </div>
                        </div>
                        <div class="icon-box-text last-reset">
                            <h4>TRỤ SỞ CHÍNH:</h4>
                            <p>{{$config->address_company}}</p>
                        </div>
                    </div>
                </div>
                </div>
                <div id="col-169605476" class="col div-no-padding medium-6 small-12 large-6"  >
                <div class="col-inner" ng-cloak >
                    <h3><span style="color: #ff9900;">GỬI YÊU CẦU LIÊN HỆ</span></h3>
                    <p>Quý khách có thể gửi yêu cầu liên hệ tại đây, xin cảm ơn !</p>
                    <div class="wpcf7 no-js" id="wpcf7-f8-p18-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response">
                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                            <ul></ul>
                        </div>
                        <form class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init" id="form-contact" >
                            <div class="form-flat">
                            <p><span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Họ tên của bạn" value="{{ old('your_name') }}" type="text" name="your_name" /></span>
                                <br />
                                <div class="invalid-feedback d-block error" role="alert">
                                    <span ng-if="errors && errors.your_name">
                                        <% errors.your_name[0] %>
                                    </span>
                                </div>
                                <br />
                                <span class="wpcf7-form-control-wrap" data-name="your-phone"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Số điện thoại" value="{{ old('your_phone') }}" type="tel" name="your_phone" /></span>
                                <br />
                                <div class="invalid-feedback d-block error" role="alert">
                                    <span ng-if="errors && errors.your_phone">
                                        <% errors.your_phone[0] %>
                                    </span>
                                </div>
                                <br />
                                <span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Địa chỉ email" value="{{ old('your_email') }}" type="email" name="your_email" /></span>
                                <br />
                                <div class="invalid-feedback d-block error" role="alert">
                                    <span ng-if="errors && errors.your_email">
                                        <% errors.your_email[0] %>
                                    </span>
                                </div>
                            </p>
                            <p><span class="wpcf7-form-control-wrap" data-name="your-message"><textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Lời nhắn" name="your_message">{{ old('your_message') }}</textarea></span>
                            </p>
                            <p><button class="wpcf7-form-control has-spinner wpcf7-submit button" type="submit" ng-click="submit()">Gửi đi</button>
                            </p>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <style>
            #section_757252814 {
            padding-top: 30px;
            padding-bottom: 30px;
            }

            #section_757252814 .error {
                color: red;
                margin-bottom: 15px;
                padding-left: 15px;
            }

            #form-contact input {
                margin-bottom: 0;
            }
        </style>
    </section>
    <section class="section" id="section_2075336125">
        <div class="bg section-bg fill bg-fill  bg-loaded" >
        </div>
        <div class="section-content relative">
            <div class="banner has-hover" id="banner-190210673">
                <div class="banner-inner fill">
                <div class="banner-bg fill" >
                    <div class="bg fill bg-fill "></div>
                    <div class="overlay"></div>
                </div>
                <div class="banner-layers container">
                    <div class="fill banner-link"></div>
                    <div id="text-box-1033841899" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                        <div class="text dark">
                            <div class="text-inner text-center">
                            <h3 class="uppercase" style="text-align: center;"><strong>{{$config->web_title}}</strong></h3>
                            <p style="text-align: center;">Xưởng sản xuất nội thất với nhiều sản phẩm đáp ứng được mọi nhu cầu của khách hàng với giá cực kỳ tốt</p>
                            <a class="button white is-outline"  style="border-radius:99px;">
                            <span>HOTLINE : {{$config->hotline}}</span>
                            </a>
                            </div>
                        </div>
                        <style>
                            #text-box-1033841899 {
                            width: 60%;
                            }
                            #text-box-1033841899 .text {
                            font-size: 100%;
                            }
                        </style>
                    </div>
                </div>
                </div>
                <style>
                #banner-190210673 {
                padding-top: 322px;
                }
                #banner-190210673 .bg.bg-loaded {
                background-image: url({{asset('site/image/decor-banner-1-1200x455.jpg')}});
                }
                #banner-190210673 .overlay {
                background-color: rgba(16, 15, 15, 0.54);
                }
                </style>
            </div>
        </div>
        <style>
            #section_2075336125 {
            padding-top: 0px;
            padding-bottom: 0px;
            }
        </style>
    </section>
    </div>
</main>
@endsection

@push('scripts')
<script>
    app.controller('ContactUs', function ($scope, $http) {
        $scope.errors = [];
        $scope.submit = function () {
            var url = "{{route('front.post-contact')}}";
            var data = jQuery('#form-contact').serialize();
            $scope.loading = true;
            jQuery.ajax({
                type: 'POST',
                url: url,
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                },
                data: data,
                success: function(response) {
                    if (response.success) {
                        toastr.success(response.message);
                        jQuery('#form-contact')[0].reset();
                        $scope.errors = [];
                        $scope.$apply();
                    } else {
                        $scope.errors = response.errors;
                        toastr.error(response.message);
                    }
                },
                error: function() {
                    toastr.error('Đã có lỗi xảy ra');
                },
                complete: function() {
                    $scope.loading = false;
                    $scope.$apply();
                }
            });
        }
    })
</script>
@endpush
