<?php

Route::group(['namespace' => 'Front'], function () {
    Route::get('/','FrontController@homePage')->name('front.home-page');
    Route::get('/san-pham/{productSlug}.html','FrontController@showProductDetail')->name('front.show-product-detail');
    Route::get('/load-product-home-page','FrontController@loadProductHomePage')->name('front.load-product-home-page');
    Route::get('/danh-muc/{categorySlug}.html','FrontController@showProductCategory')->name('front.show-product-category');
    Route::get('/load-more/product','FrontController@loadMoreProduct')->name('front.product-load-more');
    Route::get('/get-product-quick-view','FrontController@getProductQuickView')->name('front.get-product-quick-view');

    // giỏ hàng
    Route::post('/{productId}/add-product-to-cart','CartController@addItem')->name('cart.add.item');
    Route::get('/remove-product-to-cart','CartController@removeItem')->name('cart.remove.item');
    Route::get('/gio-hang.html','CartController@index')->name('cart.index');
    Route::post('/update-cart','CartController@updateItem')->name('cart.update.item');
    Route::get('/thanh-toan.html','CartController@checkout')->name('cart.checkout');
    Route::post('/checkout','CartController@checkoutSubmit')->name('cart.post.checkout');
    Route::get('/dat-hang-thanh-cong/','CartController@checkoutSuccess')->name('cart.checkout.success');

    // Liên hệ
    Route::get('/lien-he.html','FrontController@contactUs')->name('front.contact-us');
    Route::post('/lien-he','FrontController@postContact')->name('front.post-contact');

    // Blogs
    Route::get('/gioi-thieu.html','FrontController@aboutUs')->name('front.about-us');
    Route::get('/tin-tuc.html','FrontController@indexBlog')->name('front.index-blog');
    Route::get('/tin-tuc/{slug}.html','FrontController@listBlog')->name('front.list-blog');
    Route::get('/chi-tiet-tin-tuc/{slug}.html','FrontController@detailBlog')->name('front.detail-blog');

    // Tìm kiếm
    Route::post('/auto-search-complete','FrontController@autoSearchComplete')->name('front.auto-search-complete');


    // reset data
    Route::get('/reset-data','FrontController@resetData')->name('front.resetData');

    // laster buy products
    Route::get('/laster-buy-products','FrontController@lasterBuyProducts')->name('front.laster-buy-products');

});



