<nav id="menu-mobile" class="">
    <div class="menu-mobile-header">
		<span class="close" onclick="initNav('close')"><i class="fal fa-times"></i></span>
	</div>
    <ul>
        <li class="has-children">
            <a class="red-text" href="{{ route('front.home-page') }}">Trang chủ</a>
        </li>
        @foreach ($productCategories as $category)
        <li class="has-children">
            <a class="" href="{{ route('front.show-product-category', $category->slug) }}">
                {{ $category->name }} <i class="fal fa-angle-right"></i>
            </a>
            @if ($category->childs->count() > 0)
            <ul class="child count-nav-3">
                @foreach ($category->childs as $child)
                <li class="has-children">
                    <a href="{{ route('front.show-product-category', $child->slug) }}">
                        {{ $child->name }}
                    </a>
                </li>
                @endforeach
            </ul>
            @endif
        </li>
        @endforeach
        {{-- <li class="has-children">
            <a class="red-text" href="/pages/voucher">MÃ GIẢM GIÁ </a>
        </li> --}}
        <li class="has-children">
            <a class="" href="{{route('front.index-blog')}}">TIỆM KỂ BẠN NGHE </a>
        </li>
        {{-- <li class="mobile-hotline"><a href="tel:0987318318"><img
                    src="//theme.hstatic.net/200000541929/1001190790/14/hotline.png?v=1803" />Hotline:
                0987-318-318</a></li> --}}
    </ul>
</nav>
