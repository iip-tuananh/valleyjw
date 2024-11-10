<div class="footer-newsletter" style="background-image: url(//theme.hstatic.net/200000541929/1001190790/14/ft_newsletter_bg.png?v=1811)">
	<div class="container">
	</div>
</div>
<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <h3 class="footer-title text-uppercase">
                        <span>{{ $config->web_title }}</span>
                        <i class="fal fa-angle-down"></i>
                    </h3>
                    <div class="footer-content footer-contact">
                        <p><i class="pe-7s-map-marker"> </i><span>{{ $config->address_company }}</span></p>
                        <p><i class="pe-7s-mail"></i><span>{{ $config->email }}</span></p>
                        <p><i class="pe-7s-call"></i><span>{{ $config->hotline }}</span></p>
                        <div class="footer-social">
                            <a href="{{ $config->facebook }}" class="popup-social-network"
                                target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ $config->instagram }}" class="popup-social-network"
                                target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="{{ $config->youtube }}" class="popup-social-network"
                                target="_blank"><i class="fab fa-youtube"></i></a>
                            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
                            <a href="{{ $config->tiktok }}" class="popup-social-network"
                                target="_blank"><i class="fab fa-tiktok"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-1">
                </div>
                <div class="col-12 col-md-2 col-lg-2">
                    <h3 class="footer-title">
                        <span>Giới thiệu </span>
                        <i class="fal fa-angle-down"></i>
                    </h3>
                    <div class="footer-content">
                        <ul class="footer-menu">
                            <li class="item">
                                {{-- <a href="{{ route('front.about-us') }}" title="Giới thiệu">Giới thiệu</a> --}}
                                <a href="#" title="Giới thiệu">Giới thiệu</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-2 col-lg-2">
                    <h3 class="footer-title">
                        <span>Sản phẩm </span>
                        <i class="fal fa-angle-down"></i>
                    </h3>
                    <div class="footer-content">
                        <ul class="footer-menu">
                            @foreach ($allProductCategories as $category)
                                <li class="item">
                                    <a href="{{ route('front.show-product-category', $category->slug) }}" title="{{ $category->name }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-2 col-lg-2">
                    <h3 class="footer-title">
                        <span>Tin tức</span>
                        <i class="fal fa-angle-down"></i>
                    </h3>
                    <div class="footer-content">
                        <ul class="footer-menu">
                            @foreach ($post_categories as $postCategory)
                                <li class="item">
                                    <a href="{{ route('front.list-blog', $postCategory->slug) }}" title="{{ $postCategory->name }}">{{ $postCategory->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-2 col-lg-2">
                    <h3 class="footer-title">
                        <span>Thông tin</span>
                        <i class="fal fa-angle-down"></i>
                    </h3>
                    <div class="footer-content">
                        <ul class="footer-menu">
                            <li class="item">
                                {{-- <a href="{{ route('front.contact-us') }}" title="Liên hệ">Liên hệ</a> --}}
                                <a href="#" title="Liên hệ">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-12 col-md-4 col-lg-4 grid__item large--four-twelfths">
                    <div class="ft-subscribe wow fadeInRight" data-wow-delay="0.6s" data-wow-duration="0.75s">
                        <h3 class="title"></h3>
                        <div class="ft-fb">
                            <div class="fb-page" data-href="{{ $config->facebook }}"
                                data-tabs="timeline" data-width="400" data-height="400" data-small-header="false"
                                data-adapt-container-width="true" data-hide-cover="false"
                                data-show-facepile="false">
                                <blockquote cite="https://www.facebook.com/TheYenOfficial"
                                    class="fb-xfbml-parse-ignore"><a
                                        href="{{ $config->facebook }}">{{ $config->web_title }}</a></blockquote>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-wrap text-center">
                <p>Copyright © {{ date('Y') }} <a href="{{ route('front.home-page') }}">{{ $config->web_title }}</a></p>
            </div>
        </div>
    </div>
</footer>
