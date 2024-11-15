<div class="col-6 col-md-3 col-lg-3">
    <div class="product-item">
        <div class="product-img ">
            <a href="{{ route('front.show-product-detail', $product->slug) }}" title="{{$product->name}}">
                <picture class="image-1">
                    <source media="(max-width: 767px)"
                        srcset="{{$product->image->path}}">
                    <img src="{{$product->image->path}}"
                        alt="" loading="lazy">
                </picture>
                <picture class="image-2">
                    <source media="(max-width: 767px)"
                        srcset="{{$product->image->path}}">
                    <img src="{{$product->image->path}}"
                        alt="" loading="lazy">
                </picture>
            </a>
            <div class="button-add d-flex">
                <button type="button" class="btnQuickView quick-view" data-handle="{{ $product->slug }}"
                    data-tooltip="Xem nhanh"><span><i class="iccl iccl-eye"></i></span></button>
                <button type="button" class="btnAddToCart" data-tooltip="Mua nhanh" ng-click="addToCart({{$product->id}})"><i
                        class="iccl iccl-cart"></i></button>
            </div>
            <div class="product-swatch">
                @foreach ($product->galleries as $gallery)
                <a data-src="{{$gallery->image->path}}"
                    class="">
                    <img class=" "
                        data-src="{{$gallery->image->path}}"
                        alt="{{$gallery->image->name}}"
                        src="{{$gallery->image->path}}"
                        width="24" height="24" loading="lazy">
                </a>
                @endforeach
            </div>
        </div>
        <div class="product-detail clearfix">
            <div class="onireviewapp-loop">
                <div class="onireviewapp-loopitem" data-value="4.8" data-total="5">
                    <div class="onirvapp--shape-xs">
                        <div class="onirvapp--shape-container">
                            <div class="onirvapp--shape-background"></div>
                            <div class="onirvapp--shape-solid" style="width: {{ $product->product_rates->count() > 0 ? round($product->product_rates->sum('rating') / $product->product_rates->count()) / 5 * 100 : 0 }}%"></div>
                        </div>
                    </div><span class="onireviewapp-loopitem-title">({{$product->product_rates->count()}} đánh giá)</span>
                </div>
            </div>
            <h3 class="pro-name">
                <a href="{{ route('front.show-product-detail', $product->slug) }}" title="{{$product->name}}">
                    {{$product->name}}
                </a>
            </h3>
            <div class="box-pro-prices">
                <p class="pro-price highlight">
                    <span class="pro-price-del">
                        <del class="compare-price">
                            {{formatCurrency($product->base_price)}}₫
                        </del>
                    </span>
                    <span class="current-price">{{formatCurrency($product->price)}}₫</span>
                </p>
            </div>
        </div>
    </div>
</div>
