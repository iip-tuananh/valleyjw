<div class="col">
    <div class="col-inner">

        <div class="badge-container absolute left top z-1">
            <div class="callout badge badge-square">
                @if($item->base_price)
                    <div class="badge-inner secondary on-sale"><span class="onsale">-{{$item->percent_discount}}%</span>
                    </div>
                @endif
            </div>
        </div>
        <div class="product-small box has-hover box-normal box-text-bottom">
            <div class="box-image">
                <div class="image-cover" style="padding-top:120%;">
                    <a href="{{route('front.show-product-detail', $item->slug)}}">
                        <img decoding="async" width="400" height="298"
                            src="{{$item->image->path ?? asset('site/image/no-image.jpeg')}}"
                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                            alt=""
                            srcset="{{$item->image->path ?? asset('site/image/no-image.jpeg')}} 400w, {{$item->image->path}} 537w, {{$item->image->path}} 768w, {{$item->image->path}} 600w, {{$item->image->path}} 960w"
                            sizes="(max-width: 400px) 100vw, 400px" loading="lazy"/> </a>
                </div>
                <div class="image-tools top right show-on-hover">
                </div>
                <div
                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                </div>
            </div>

            <div class="box-text text-center">
                <div class="title-wrapper"><p
                        class="name product-title woocommerce-loop-product__title">
                        <a href="{{route('front.show-product-detail', $item->slug)}}">{{$item->name}}</a></p></div>
                <div class="price-wrapper">
                    <span class="price">
                        @if ($item->base_price)
                        <del aria-hidden="true"><span
                                class="woocommerce-Price-amount amount"><bdi>{{formatCurrency($item->base_price)}}&nbsp;<span
                                        class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                        </del>
                        @endif
                        <ins><span
                                class="woocommerce-Price-amount amount"><bdi>{{formatCurrency($item->price)}}&nbsp;<span
                                        class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                        </ins>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
