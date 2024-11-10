@extends('site.layouts.master')
@section('title')
<title>{{$config->web_title}}</title>
@endsection
@section('css')
<style>.pus-flashsale.pus-flashsale-container,.pus-upsell.pus-upsell-container{border:1px solid #e5e7eb;border-radius:8px;margin:16px;position:relative}.pus-flashsale .pus-flashsale-header,.pus-upsell .pus-upsell-header{align-items:center;display:flex;gap:30px;justify-content:space-between;padding:18px 16px;text-align:center}.pus-flashsale-header__left-child.opacity{opacity:0}.pus-flashsale-header__left-child{opacity:1}.pus-flashsale .pus-flashsale-logo{left:0;margin:auto;right:0;width:100px}.pus-flashsale .pus-flashsale-timer{display:flex;gap:8px}.pus-flashsale .pus-flashsale-timer .pus-timer-item{align-items:center;background-color:#111827;border-radius:4px;color:#fff;font-size:14px;font-weight:600;justify-content:center;line-height:20px;padding:4px 6px;position:relative;text-align:center;width:34px}.pus-flashsale .pus-flashsale-timer .pus-timer-item-label{align-items:center;color:#4b5563;display:flex;font-size:10px;justify-content:center;padding-top:3px;width:100%}.pus-flashsale .pus-flashsale-timer .pus-timer-item:not(:last-child):after,.pus-flashsale .pus-flashsale-timer .pus-timer-item:not(:last-child):before{background-color:#111827;border-radius:50%;content:"";height:3px;position:absolute;right:-5px;top:calc(50% - 4px);width:3px}.pus-flashsale .pus-flashsale-timer .pus-timer-item:not(:last-child):after{top:calc(50% + 1px)}.pus-flashsale .pus-flashsale-header,.pus-upsell .pus-upsell-header{border-bottom:1px solid #e5e7eb}.pus-upsell .pus-upsell-header{justify-content:center;position:relative}.pus-flashsale .pus-flashsale-header__title,.pus-upsell .pus-upsell-header__title{color:#111827;font-size:20px;font-style:normal;font-weight:600;line-height:28px}.pus-flashsale .pus-flashsale-header__btn-show-all,.pus-upsell .pus-upsell-header__btn-show-all{font-size:16px;line-height:20px;text-decoration-line:underline}.pus-upsell .pus-upsell-header__btn-show-all{position:absolute;right:16px}.pus-flashsale .pus-flashsale-content,.pus-upsell .pus-upsell-content{padding:2px 0 16px 16px}.pus-btn-controls{text-align:center}.pus-btn-controls li{align-items:center;background-color:#fff;border-radius:50%;box-shadow:0 4px 20px 0 rgba(0,0,0,.16),0 0 3px 0 rgba(0,0,0,.12);cursor:pointer;display:flex;height:40px;justify-content:center;position:absolute;top:50%;transform:translateY(-50%);width:40px}.pus-btn-controls .prev{left:0;margin-left:-15px}.pus-btn-controls .next{margin-right:-15px;right:0}.pus--row__items,.pus-slide__img-top{width:200px}.pus-flashsale--row,.pus-upsell--row{width:216px}.pus-slide__img-top{border:1px solid #e5e7eb;border-radius:8px;display:block;height:200px;overflow:hidden;position:relative;width:200px}.pus-slide__img-top img{left:0;position:absolute;top:50%;-ms-transform:translateY(-50%);-webkit-transform:translateY(-50%);transform:translateY(-50%);width:100%}.pus-slide-title{-webkit-line-clamp:2;-webkit-box-orient:vertical;color:inherit;display:block;display:-webkit-box;font-size:14px;font-weight:400;line-height:20px;margin-top:12px;min-height:40px;overflow:hidden;text-decoration:none;text-overflow:ellipsis}.pus-slide-title,.pus-slide__img-top{cursor:pointer}.pus-slide-quantity{align-self:stretch;font-size:12px;font-weight:500;line-height:16px;margin:6px 0}.pus-slide-quantity.process{background-color:#ff001c;background:linear-gradient(90deg,#ff9153,rgba(247,53,92,.88) 99.99%,#ff003d);border-radius:10px;color:#fff;padding:0 10px;text-align:center}.pus-slide-price{display:flex;gap:6px}.pus-slide-price .pus-slide-price__1{color:#ef4343;font-size:14px;font-weight:600;line-height:20px}.pus-slide-price .pus-slide-price__2{color:#4b5563;font-size:14px;font-weight:400;line-height:20px;text-decoration-line:line-through}.pus-slide-btn-add{align-items:center;background-color:#fff;border:1px solid #9ca3b0;border-radius:64px;cursor:pointer;display:flex;gap:8px;justify-content:center;margin-top:12px;padding:10px 14px}.pus-slide-btn-add:hover{border:1px solid #2463eb;color:#1d4fd7}.pus-slide-btn-add:hover .pus-slide-btn-add__icon svg path{fill:#1d4fd7}.pus-slide-btn-add.disabled{cursor:default;opacity:.3}.pus-slide-btn-add .pus-slide-btn-add__icon{margin-top:2px}.pus-slide-btn-add .pus-slide-btn-add__label{font-weight:600}.pus-relative{position:relative}.pus-sale-percent{background:#ef4343;border-radius:8px 0;color:#fff;display:none!important;flex-shrink:0;font-size:14px;height:26px;left:-1px;margin:auto;padding:5px;position:absolute;text-align:center;top:-1px;width:41px}.pus-sale-percent.show{display:block!important}.pus-hrvmodal--backdrop{background-color:rgba(0,0,0,.5)}.pus-hrvmodal,.pus-hrvmodal--backdrop{bottom:0;left:0;position:fixed;right:0;top:0;z-index:999999999}.pus-hrvmodal{display:none}.pus-hrvmodal.open{animation:PUSFadeIn .4s;display:block;left:50%;top:50%!important;transform:translate(-50%,-50%);width:700px}.pus-hrvmodal--content{background-color:#fff;border-radius:8px;box-shadow:0 8px 48px 0 rgba(0,0,0,.24),0 0 4px 0 rgba(0,0,0,.12)}.pus-hrvmodal--content hr{border:1px solid #e5e7eb;margin:0;padding:0}@keyframes PUSFadeIn{0%{opacity:0}to{opacity:1}}.pus-hrvmodal-base--list{align-items:center;display:flex;height:60px;justify-content:space-between;padding:8px 6px 8px 16px}.pus-hrvmodal--content.pus-detail-show .pus-hrvmodal--header__title{text-align:center!important;width:calc(100% - 80px)!important}.pus-hrvmodal-close{padding:10px;width:40px}.pus-hrvmodal-close,.pus-hrvmodal_actions{align-items:center;cursor:pointer;display:flex;gap:8px;height:40px;justify-content:center}.pus-hrvmodal_actions{background-color:#111827;border-radius:64px;box-shadow:inset 0 -2px 0 0 rgba(0,0,0,.16),0 1px 0 0 rgba(0,0,0,.12);color:#fff;flex:1 0 0;font-size:14px;font-weight:600;padding:10px 14px;width:100%}.pus-hrvmodal--footer{padding:12px 16px}.pus-hrvmodal--body{max-height:450px;overflow:auto;padding:16px}.pus-card{display:flex;gap:28px}.pus-img-top{border:1px solid #e5e7eb;border-radius:8px;display:block;height:200px;max-width:200px;min-width:200px;overflow:hidden;position:relative}.pus-img-top img{left:0;position:absolute;top:50%;-ms-transform:translateY(-50%);-webkit-transform:translateY(-50%);transform:translateY(-50%);width:100%}.pus-card-title{font-size:16px;font-weight:400;text-decoration:none}.pus-card-title-caption{display:flex;gap:10px;margin:8px 0}.pus-card-title-caption span:first-child{color:#ef4343;font-size:14px;font-weight:600}.pus-card-title-caption span:nth-child(2){color:#4b5563;font-size:14px;text-decoration-line:line-through}.pus-card-title-caption span:nth-child(3){background-color:#ef4343;border-radius:4px;color:#fff;display:none!important;font-size:14px;padding:0 4px}.pus-card-title-caption span.show,.pus-card-title-caption.show{display:block!important}.pus-option-title{color:#171717;font-size:14px;font-weight:600;margin-bottom:12px}.pus-card-option{display:none!important}.pus-card-option.show{display:block!important}.pus-card-option1{margin-top:10px}.pus-option-content{align-content:center;align-items:center;display:flex;flex-wrap:wrap;gap:8px}.pus-option-item{background-color:#fff;border:1px solid #d4d4d4;cursor:pointer;min-width:70px;padding:8px;position:relative;text-align:center}.pus-option-item.active{background-color:#f5f5f5;border-color:#171717}.pus-option-item.disabled{background-color:#fff;border-color:#d4d4d4;cursor:no-drop;opacity:.5;overflow:hidden}.pus-option-item.disabled:before{-webkit-transform:rotate(-45deg);-moz-transform:rotate(-45deg);-ms-transform:rotate(-45deg);-o-transform:rotate(-45deg);transform:rotate(-45deg)}.pus-option-item.disabled:after,.pus-option-item.disabled:before{background:#bdbfbe;content:"";height:1px;left:0;margin-top:0;position:absolute;right:0;top:50%;width:100%;z-index:-1}.pus-option-item.disabled:after{-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-ms-transform:rotate(45deg);-o-transform:rotate(45deg);transform:rotate(45deg)}.pus-card-list{display:flex;flex-direction:column;gap:16px}@media (max-width:500px){.pus-card{align-items:center;flex-direction:column}.pus-hrvmodal.open{height:580px;width:380px}.pus-card.pus-img-top{align-items:center}.pus-hrvmodal--body{max-width:370px}.pus-flashsale .pus-flashsale-header{flex-direction:column-reverse;gap:10px;justify-content:center}.pus-flashsale-container{padding-bottom:46px}.pus-flashsale .pus-flashsale-header .pus-flashsale-header__btn-show-all{bottom:16px;position:absolute}.pus-upsell-container{padding-bottom:46px}.pus-upsell .pus-upsell-header{position:static}.pus-upsell .pus-upsell-header .pus-upsell-header__btn-show-all{bottom:16px;right:auto}.pus-flashsale .pus-flashsale-header__title,.pus-upsell .pus-upsell-header__title{text-align:center}.pus-flashsale-header__left-child.opacity{display:none}}@media (max-width:380px){.pus-hrvmodal.open{width:370px}}@media (max-width:360px){.pus-hrvmodal.open{width:350px}}@media (max-width:320px){.pus-hrvmodal.open{width:310px}}@media (max-width:280px){.pus-hrvmodal.open{width:270px}}.pus-toast-notify{background:transparent;bottom:0;display:none;left:0;position:fixed;right:0;top:0;z-index:1212}.pus-toast-notify .toast-dialog{border-radius:8px;box-shadow:0 0 4px rgba(0,0,0,.12),0 8px 48px rgba(0,0,0,.24);color:#fff;left:50%;padding:16px;position:absolute;top:50%;transform:translate(-50%,-50%);width:180px;z-index:100}.pus-toast-notify.info .toast-dialog{background-color:#21c45d}.pus-toast-notify.warning .toast-dialog{background-color:#ffb818}.pus-toast-notify.error .toast-dialog{background-color:red}.pus-toast-notify .toast-notify-icon{align-items:center;display:flex;justify-content:center}.pus-toast-notify .toast-notify-content{margin-top:10px;text-align:center}</style>
<style>.dlpm-coupon-container,.dlpm-discount-container{position:relative}.dlpm-btn-controls{text-align:center}.dlpm-btn-controls li{align-items:center;background-color:#fff;border-radius:50%;box-shadow:0 4px 20px 0 rgba(0,0,0,.16),0 0 3px 0 rgba(0,0,0,.12);cursor:pointer;display:flex;height:40px;justify-content:center;position:absolute;top:50%;transform:translateY(-50%);width:40px}.dlpm-btn-controls .prev{left:0;margin-left:-15px}.dlpm-btn-controls .next{margin-right:-15px;right:0}.dlpm-coupons,.dlpm-discounts{padding:0 10px}.dlpm-coupons,.dlpm-discounts{padding:24px 16px}.dlpm-coupons{background-color:#f9fafb;border-radius:8px;margin:16px 0}.dlpm-coupons .dlpm-heading,.dlpm-discounts .dlpm-heading{font-size:20px;font-weight:600;text-align:center}.dlpm-coupon--row{position:relative}.dlpm-coupon--row .dlpm-left-icons{left:32px;position:absolute;top:52px}.dlpm-coupon--row .dlpm-left-icons svg{transform:scale(1.7)}.dlpm-coupon--row .dlpm-left-icons.custom-img{left:23px;top:41px}.dlpm-coupon--row .dlpm-left-icons.custom-img img{border-radius:50%}.dlpm-coupon--row .dlpm-row-header{height:61px;left:100px;position:absolute;right:10px;top:22px;width:224px}.dlpm-coupon--row .dlpm-row-header .dlpm-label{font-size:16px;font-weight:700;line-height:20px}.dlpm-coupon--row .dlpm-row-header .dlpm-description,.dlpm-coupon--row .dlpm-row-header .dlpm-expire{font-size:12px;line-height:19px}.dlpm-coupon--row .dlpm-row-footer{bottom:4px;height:45px;position:absolute;right:10px;width:238px}.dlpm-coupon--row .dlpm-row-footer .btn-detail{color:#2463eb;cursor:pointer;font-size:14px;left:12px;position:absolute;top:9px}.dlpm-coupon--row .dlpm-row-footer .btn-apply{align-items:center;background-color:#111827;color:#fff;cursor:pointer;display:flex;font-size:14px;height:32px;justify-content:center;padding:10px;position:absolute;right:14px;top:2px}.dlpm-coupon-minimum,.dlpm-discount-minimum{margin:16px 0}.dlpm-hrvmodal--backdrop{background-color:rgba(0,0,0,.5)}.dlpm-hrvmodal,.dlpm-hrvmodal--backdrop{bottom:0;left:0;position:fixed;right:0;top:0;z-index:999}.dlpm-hrvmodal{background-color:#fff;border-radius:8px;box-shadow:0 8px 48px 0 rgba(0,0,0,.24),0 0 4px 0 rgba(0,0,0,.12);display:none;margin:40px auto;max-width:400px}.dlpm-hrvmodal.open{animation:DLPMFadeIn .4s;display:block}.dlpm-hrvmodal-base--detail,.dlpm-hrvmodal-base--list{align-items:center;display:flex;height:60px;justify-content:space-between;padding:8px 6px 8px 16px}.dlpm-hrvmodal-base--detail{display:none;justify-content:start}.dlpm-detail-item__product{display:none}.dlpm-hrvmodal--content.dlpm-detail-show .dlpm-hrvmodal--header__title{text-align:center!important;width:calc(100% - 80px)!important}.dlpm-hrvmodal--content.dlpm-detail-show .dlpm-hrvmodal-base--list{display:none}.dlpm-hrvmodal--content.dlpm-detail-show .dlpm-hrvmodal-base--detail{display:flex}.dlpm-hrvmodal--content.dlpm-detail-show .dlpm-detail-item__product{display:block}.dlpm-hrvmodal--content.dlpm-detail-show .dlpm-detail-items{display:none}.dlpm-hrvmodal--body{height:calc(100% - 120px);overflow:auto;padding:20px}.dlpm-hrvmodal-close,.dlpm-hrvmodal-pre{align-items:center;cursor:pointer;display:flex;gap:8px;height:40px;justify-content:center;padding:10px;width:40px}.dlpm-hrvmodal--content{height:100%;position:relative}.dlpm-hrvmodal--content hr{border:1px solid #e5e7eb;margin:0;padding:0}.dlpm-hrvmodal--header__title{color:#111827;font-size:18px;font-weight:500}.detail-info{margin-bottom:12px}.detail-info .detail-info__label{font-size:18px;font-weight:600;line-height:28px}.detail-info .detail-description__1{color:#4b5563;font-size:14px;font-weight:400;line-height:20px}.detail-info .detail-description__2{font-size:14px;font-weight:400;line-height:20px;margin-top:5px;text-align:justify}.detail-code{display:flex;justify-content:space-between;margin:12px 0}.detail-code .detail-code__label{font-size:14px;font-weight:500;line-height:20px}.detail-code .detail-code__copy{display:flex;gap:8px}.detail-code .detail-code__copy .detail-code__copy-label{font-size:14px;font-weight:600;line-height:20px}.detail-code .detail-code__copy .detail-code__copy-btn{cursor:pointer}.detail-datetime{margin:12px 0}.detail-datetime .detail-datetime__label{font-size:14px;font-weight:500;line-height:20px}.detail-datetime .detail-datetime__content{font-size:14px;font-weight:400;line-height:20px}.detail-content{margin-top:12px}.detail-content .detail-content__label{font-size:14px;font-weight:500;line-height:20px}.detail-content .detail-content__description{font-size:14px;font-weight:400;line-height:20px}.detail-content .detail-content__description ul{list-style-type:disc;margin:5px 0;padding-left:30px}.detail-content .detail-content__description ul li a{text-decoration:underline}.dlpm-hrvmodal--footer{bottom:0;height:60px;left:0;position:absolute;right:0}.dlpm-hrvmodal--footer__action{align-items:center;display:flex;gap:8px;height:100%;justify-content:center}.dlpm-footer--action__close,.dlpm-footer--action__copy{align-items:center;border:1px solid #d1d5db;border-radius:4px;cursor:pointer;display:flex;font-size:14px;font-weight:600;justify-content:center;padding:10px 14px;width:174px}.dlpm-footer--action__copy{background:#2463eb;color:#fff}.detail-product .detail-product__label{font-size:14px;font-weight:600;line-height:20px;margin-bottom:6px}.detail-product .detail-product__list ul{list-style-type:none;margin:0;padding:0}.detail-product .detail-product__list li{padding:10px 0}.detail-product .detail-product__list li:not(:last-child){border-bottom:1px solid #e5e7eb}.detail-product .detail-product__list a{font-size:14px;font-weight:400;line-height:20px;text-decoration:none}.dlpm-toast-notify{background:transparent;bottom:0;display:none;left:0;position:fixed;right:0;top:0;z-index:1212}.dlpm-toast-notify .toast-dialog{background-color:#21c45d;border-radius:8px;box-shadow:0 0 4px rgba(0,0,0,.12),0 8px 48px rgba(0,0,0,.24);color:#fff;left:50%;padding:16px;position:absolute;top:50%;transform:translate(-50%,-50%);width:180px;z-index:100}.dlpm-toast-notify .toast-notify-icon{align-items:center;display:flex;justify-content:center}.dlpm-toast-notify .toast-notify-content{margin-top:10px;text-align:center}.dlpm-minimum{background-color:#f9fafb;border:1px solid #e5e7eb;border-radius:8px;padding:16px}.dlpm-minimum .dlpm-mini-heading{display:flex;justify-content:space-between;margin-bottom:16px}.dlpm-mini-heading .dlpm-mini-heading__label{font-size:16px;font-weight:600}.dlpm-mini-heading .dlpm-mini-heading__show-all{cursor:pointer;font-size:14px;font-weight:400;text-decoration:underline}.dlpm-minimum .dlpm-mini-content{display:flex;flex-wrap:wrap;gap:10px}.dlpm-mini-content .mini-voucher{align-items:center;border:1px solid #ec4699;color:#ec4699;display:flex;font-size:14px;font-weight:600;gap:10px;padding:10px 14px}.dlpm-mini-content .mini-voucher.hidden{display:none}.dlpm-hrvmodal-coupon-minimum .dlpm-hrvmodal--body{height:calc(100% - 70px);overflow-x:hidden;padding:0 0 0 3px}.dlpm-mini--row__svg{width:392px}.dlpm-mini--row{margin-bottom:-15px;position:relative}.dlpm-mini--row .dlpm-left-icons{left:36px;position:absolute;top:55px}.dlpm-mini--row .dlpm-left-icons.custom-img{left:26px;top:42px}.dlpm-mini--row .dlpm-left-icons.custom-img img{border-radius:50%}.dlpm-mini--row .dlpm-left-icons svg{transform:scale(1.7)}.dlpm-mini--row .dlpm-row-header{height:61px;left:104px;position:absolute;right:10px;top:25px;width:224px}.dlpm-mini--row .dlpm-row-header .dlpm-label{font-size:16px;font-weight:700;line-height:20px}.dlpm-mini--row .dlpm-row-header .dlpm-description,.dlpm-mini--row .dlpm-row-header .dlpm-expire{font-size:12px;line-height:19px}.dlpm-mini--row .dlpm-row-footer{bottom:12px;height:45px;position:absolute;right:10px;width:290px}.dlpm-mini--row .dlpm-row-footer .btn-detail{color:#2463eb;cursor:pointer;font-size:14px;left:12px;position:absolute;top:9px}.dlpm-mini--row .dlpm-row-footer .btn-apply{align-items:center;background-color:#111827;color:#fff;cursor:pointer;display:flex;font-size:14px;height:32px;justify-content:center;padding:10px;position:absolute;right:14px;top:2px}.dlpm-progress-preview{font-size:0;left:13px;position:absolute;top:-20px;width:100%}.dlpm-progress-preview .dlpm-progress-label{color:#ef4343;font-size:10px}.dlpm-progress-preview .dlpm-progress-label.text{color:#111827}.dlpm-progress-preview progress{border-radius:7px;height:4px;width:80%}.dlpm-progress-preview progress::-webkit-progress-bar{background-color:#ffe1e1;border-radius:7px}.dlpm-progress-preview progress::-webkit-progress-value{background:linear-gradient(90deg,#ff9153,rgba(247,53,92,.88) 99.99%,#ff003d);border-radius:7px}.hidden{display:none}.dlpm-discounts .dlpm-progress-preview{left:0;line-height:7px;top:-25px}.dlpm-discounts .dlpm-progress-preview .dlpm-progress-label{font-size:14px}.dlpm-hrvmodal-discount-minimum .dlpm-progress-preview{left:0;line-height:7px;top:-22px}.dlpm-hrvmodal-discount-minimum .dlpm-progress-preview .dlpm-progress-label{font-size:14px}@media (min-width:376px) and (max-width:400px){.dlpm-mini--row__svg{width:380px}.dlpm-mini--row .dlpm-row-footer{width:281px}.dlpm-mini--row .dlpm-row-header{left:101px}.dlpm-mini--row{margin-bottom:-18px}}@media (max-width:376px){.dlpm-mini--row__svg{width:367px}.dlpm-mini--row .dlpm-row-footer{bottom:11px;width:272px}.dlpm-mini--row .dlpm-row-header{left:97px;top:26px}.dlpm-mini--row{margin-bottom:-25px}.dlpm-child-container{margin-left:0;margin-right:0;padding-left:0;padding-right:0}}.dlpm-discounts .dlpm-heading{font-size:20px;font-weight:600;line-height:28px;margin-bottom:14px;margin-top:10px}.dlpm-discount--row{box-shadow:0 0 2px 0 #0000003d;height:189px;margin:3px;padding:16px;position:relative}.dlpm-discount--row .dlpm-heading-container{display:flex;justify-content:space-between}.dlpm-discount--row .dlpm-heading-container .dlpm-heading-left{margin-right:10px}.dlpm-discount--row .heading-label-mini{font-size:12px;font-weight:600;line-height:16px}.dlpm-discount--row .heading-label-large{font-size:24px;font-weight:600;line-height:36px}.dlpm-discount--row .heading-label-description{font-size:14px;font-weight:400;line-height:20px}.dlpm-discount--row .heading-label-expire{font-size:14px;line-height:20px}.dlpm-discount--row .dlpm-heading-right svg{height:80px;width:84px}.dlpm-discount--row .dlpm-heading-right.custom-img img{border-radius:8px}.dlpm-discount--row .dlpm-row--footer{align-items:center;bottom:16px;display:flex;justify-content:space-between;position:absolute;width:calc(100% - 32px)}.dlpm-discount--row .dlpm-row--footer .dlpm-btn-detail{background-color:#111827;color:#fff;cursor:pointer;font-size:14px;font-weight:600;line-height:20px;padding:8px 12px}.dlpm-discount--row .dlpm-row--footer .dlpm-btn-label{font-size:10px;font-weight:400;line-height:12px}.dlpm-hrvmodal-discount .dlpm-footer--action__close{margin:0 16px;width:100%}.dlpm-hrvmodal-discount .detail-info__label--mini{font-size:12px;font-weight:600;line-height:16px;text-transform:uppercase}.dlpm-hrvmodal-discount .detail-info__label--large{font-size:18px;font-weight:600;line-height:28px}.dlpm-discount-minimum{background-color:#fff}.dlpm-hrvmodal-discount-minimum .dlpm-hrvmodal--body{height:calc(100% - 70px)}.dlpm-hrvmodal-discount-minimum .dlpm-hrvmodal--body .dlpm-box:not(:last-child){margin-bottom:16px}.dlpm-text__2{-webkit-line-clamp:2;line-clamp:2;-webkit-box-orient:vertical;display:-webkit-box;overflow:hidden;text-transform:uppercase}@keyframes DLPMFadeIn{0%{opacity:0}to{opacity:1}}.dlpm-grid__svg .w_336,.dlpm-grid__svg .w_340,.dlpm-not-rounded .dlpm-mini--row__svg,.dlpm-rounded .w_363,.dlpm-rounded .w_386,.dlpm-rounded .w_395{display:none}.dlpm-grid__svg.s_336 .w_336,.dlpm-grid__svg.s_340 .w_340,.dlpm-not-rounded.show .dlpm-mini--row__svg,.dlpm-rounded.s_363 .w_363,.dlpm-rounded.s_386 .w_386,.dlpm-rounded.s_395 .w_395{display:block}</style>
@endsection
@section('content')
{{-- <div ng-controller="HomeController"> --}}
    <section id="sectionCollectionSlide">
        <div class="container-fluid">
        <div class="heading-title text-center">
            <h2 class=""></h2>
        </div>
        </div>
        <div id="collection-slider">
            <div class="owl-carousel owl-theme not-owl">
                @foreach ($banners as $banner)
                <div class="item item-banner">
                    {{-- <div class="videoWrapper"> --}}
                    <div class="">
                        <a href="{{$banner->link}}">
                            <img src="{{$banner->image->path}}" alt="{{$banner->image->name}}" loading="lazy">
                        </a>
                    </div>
                    <div class="div-collection-slide">
                        <a href="{{$banner->link}}" class="title-collection-slide">
                        </a>
                        <p class="des-collection-slide">
                        </p>
                        <a class="action-btn-link" data-eventlabel="SHAKE IT UP"
                            href="{{$banner->link}}">
                            {{-- <button class="action-btn-collection">
                                Nhận ưu đãi tại đây
                            </button> --}}
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function () {

            $('#collection-slider .owl-carousel').owlCarousel({
                autoplay: true,
                autoplayTimeout: 10000,
                autoplayHoverPause: true,
                lazyLoad: true,
                loop: true,
                items: 1,
                margin: 40,
                nav: true,
                navText: [
                    '',
                    ''
                ],
                dots: true,
                touchDrag: true,
                center: true,
                responsive: {
                    0: {
                        stagePadding: 0
                    },
                    700: {
                        stagePadding: 200
                    }
                }
            });

        })
    </script>
    <style>
        .videoWrapper {
            position: relative;
            padding-bottom: 54.05%;
            /* 16:9 */
            padding-top: 25px;
            height: 0;
            pointer-events: none;
        }

        .videoWrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .videoWrapper-friday {
            position: relative;
            padding-bottom: 54.05%;
            /* 16:9 */
            padding-top: 25px;
            height: 0;
        }

        .videoWrapper-friday iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        @media (max-width: 767px) {
            .videoWrapper {
                padding-bottom: 81.05%;
                pointer-events: initial;
            }

            .swatch .swatch-element.color label {
                width: 20px;
                height: 20px;
            }

            .videoWrapper-friday {
                padding-bottom: 81.05%;
            }
        }

        .heading-title.text-center {
            padding: 10px 52px;
            text-align: center;
        }

        .heading-title.text-center p {
            font-size: 18px;
            font-weight: 300;
        }

        .title-collection-slide {
            font-weight: bold;
            font-size: 14px;
            text-align: center;
            padding: 40px 0 5px 0;
            margin-bottom: 0;
        }

        .des-collection-slide {
            font-size: 18px;
            text-align: center;
            margin: 10px 0;
            font-weight: 300;
            padding: 0 170px;
        }

        .div-collection-slide {
            text-align: center;
            padding: 15px 0;
        }

        #collection-slider .owl-dots {
            position: absolute;
            bottom: 0px;
            text-align: center;
            width: 100%;
        }

        #collection-slider .owl-dots .owl-dot {
            display: inline-block;
        }

        #collection-slider .owl-dots .owl-dot span {
            position: relative;
            display: inline-block;
            width: 27px;
            height: 2px;
            margin: 0 5px;
            cursor: pointer;
            background: transparent;
            border: 1px solid #E5E5E5;
            -webkit-transition: color 0.2s ease-in-out, background 0.2s ease-in-out;
            transition: color 0.2s ease-in-out, background 0.2s ease-in-out;
        }

        #collection-slider .owl-dots .owl-dot.active span {
            border: 1px solid #000000;
        }

        .action-btn-collection {
            background: none;
            border: none;
            border-bottom: 1px solid #000000;
            padding: 10px 0 5px 0;
            display: inline-block;
            font-size: 13px;
            letter-spacing: 2px;
        }

        @media screen and (max-width: 620px) {
            #collection-slider .owl-dots {
                position: absolute;
                bottom: 0px;
                text-align: center;
                width: 100%;
            }

            .des-collection-slide {
                padding: 0 20px;
            }
        }

        .title-linkv1 {
            text-transform: uppercase;
        }

        #collection-slider .owl-theme .owl-nav {
            position: absolute;
            top: 30%;
            left: 0;
            right: 0;
        }

        @media screen and (max-width: 766px) {
            #collection-slider .owl-theme .owl-nav {
                position: absolute;
                top: 25%;
                left: 0;
                right: 0;
            }
        }

        #collection-slider .owl-theme .owl-nav .owl-prev {
            left: 5%;
        }

        #collection-slider .owl-theme .owl-nav .owl-prev {
            position: absolute;
            color: inherit;
            background: none;
            border: none;
            z-index: 100;
            background-image: url(//theme.hstatic.net/1000003969/1000659821/14/leftt.png?v=6247);
            height: 36px;
            background-position: left;
            width: 14px;
            background-size: 14px 36px;
        }

        #collection-slider .owl-theme .owl-nav .owl-next {
            position: absolute;
            color: inherit;
            background: none;
            border: none;
            z-index: 100;
            background-image: url(//theme.hstatic.net/1000003969/1000659821/14/rightt.png?v=6247);
            height: 36px;
            background-position: right;
            width: 14px;
            background-size: 14px 36px;
        }

        #collection-slider .owl-theme .owl-nav [class*=owl-] {
            color: #FFF;
            font-size: 14px;
            margin: 5px;
            padding: 4px 7px;
            display: inline-block;
            cursor: pointer;
            border-radius: 3px;
        }

        #collection-slider .owl-theme .owl-nav .owl-next {
            right: 5%;
        }

        #collection-slider .owl-theme .owl-nav .owl-prev i,
        .owl-theme .owl-nav .owl-next i {
            font-size: 60px;
            color: #000000;
        }

        .sectionCollectionSlide {
            margin-bottom: 30px
        }
    </style>
    {{-- <div class="hrv-pus-promotion" data-hrvpus-layout="flashsale"></div> --}}
    <div class="hrv-pus-promotion" ng-controller="ListProductController">
        <div class="pus-flashsale pus-flashsale-container">
            <div class="pus-flashsale-header">
                <div class="pus-flashsale-header__left">
                    <div class="pus-flashsale-header__left-child">
                        <div class="pus-flashsale-timer" data-time="{{ date('d/m/Y', strtotime($categorySpecialFlashsale->end_date)) }}">
                            <div class="pus-timer-item days">01</div>
                            <div class="pus-timer-item hours">09</div>
                            <div class="pus-timer-item minutes">17</div>
                            <div class="pus-timer-item seconds">35</div>
                        </div>
                        <div class="pus-flashsale-timer">
                            <div class="pus-timer-item-label">ngày</div>
                            <div class="pus-timer-item-label">giờ</div>
                            <div class="pus-timer-item-label">phút</div>
                            <div class="pus-timer-item-label">giây</div>
                        </div>
                    </div>
                </div>
                <div class="pus-flashsale-header__content">
                    <div class="pus-flashsale-logo">
                        <svg viewBox="0 0 49 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.827637 8.51965L1.7699 2.81226H5.52788L5.36159 3.80715H2.80362L2.58191 5.16711H4.89046L4.72418 6.16201H2.41563L2.02764 8.51965H0.827637Z"
                                fill="#DF3E4B"></path>
                            <path
                                d="M10.808 8.44102H9.55664L12.3803 2.88817H13.8851L14.8722 8.44102H13.6208L12.9493 4.15709H12.9061L10.808 8.44102ZM11.0939 6.25839H14.0496L13.8932 7.17482H10.9374L11.0939 6.25839Z"
                                fill="#E22532"></path>
                            <path
                                d="M19.0543 4.50143C19.0633 4.27548 18.9977 4.10105 18.8574 3.97814C18.719 3.85522 18.5095 3.79377 18.2291 3.79377C18.0385 3.79377 17.8731 3.82088 17.7328 3.87511C17.5926 3.92753 17.4802 4.00073 17.3957 4.09473C17.313 4.18691 17.2618 4.29356 17.242 4.41467C17.2222 4.51408 17.2285 4.60085 17.2609 4.67496C17.2951 4.74907 17.3481 4.81323 17.42 4.86746C17.4937 4.91988 17.5809 4.96597 17.6816 5.00574C17.7823 5.0437 17.8893 5.07624 18.0025 5.10335L18.4772 5.22265C18.7091 5.27688 18.9177 5.34918 19.1028 5.43956C19.2898 5.52994 19.4462 5.6411 19.5721 5.77305C19.6998 5.90501 19.7896 6.06046 19.8418 6.23941C19.8939 6.41836 19.9011 6.62351 19.8634 6.85488C19.8058 7.19471 19.6719 7.48934 19.4615 7.73878C19.2512 7.98642 18.9752 8.17893 18.6336 8.3163C18.292 8.45187 17.8965 8.51965 17.447 8.51965C17.0011 8.51965 16.6244 8.45097 16.317 8.31359C16.0096 8.17622 15.7857 7.97286 15.6455 7.70354C15.507 7.4324 15.4657 7.0971 15.5214 6.69762H16.6514C16.6316 6.8838 16.6586 7.03926 16.7323 7.16398C16.8078 7.28689 16.9202 7.37998 17.0694 7.44325C17.2186 7.5047 17.3939 7.53543 17.5953 7.53543C17.7949 7.53543 17.972 7.50651 18.1266 7.44867C18.283 7.39083 18.4098 7.31039 18.5068 7.20736C18.6039 7.10433 18.6633 6.98593 18.6848 6.85217C18.7064 6.72745 18.6875 6.62261 18.6282 6.53765C18.5689 6.4527 18.4736 6.3804 18.3423 6.32075C18.2129 6.25929 18.052 6.20506 17.8596 6.15807L17.2825 6.00623C16.8366 5.89235 16.4995 5.71431 16.2711 5.47209C16.0428 5.22988 15.961 4.90361 16.0257 4.49329C16.0833 4.15709 16.2226 3.86336 16.4437 3.61211C16.6667 3.35905 16.9472 3.16292 17.2852 3.02374C17.625 2.88275 17.9962 2.81226 18.399 2.81226C18.8089 2.81226 19.155 2.88365 19.4373 3.02645C19.7195 3.16744 19.9254 3.36447 20.0548 3.61753C20.1843 3.87059 20.2238 4.16522 20.1735 4.50143H19.0543Z"
                                fill="#E22532"></path>
                            <path
                                d="M20.3872 8.44102L21.3042 2.88817H22.4719L22.0943 5.17927H24.4649L24.8424 2.88817H26.0075L25.0906 8.44102H23.9255L24.3031 6.14722H21.9325L21.555 8.44102H20.3872Z"
                                fill="#E22532"></path>
                            <path
                                d="M32.265 4.50143C32.274 4.27548 32.2081 4.10105 32.0673 3.97814C31.9283 3.85522 31.7179 3.79377 31.4363 3.79377C31.2449 3.79377 31.0788 3.82088 30.938 3.87511C30.7972 3.92753 30.6844 4.00073 30.5995 4.09473C30.5165 4.18691 30.465 4.29356 30.4452 4.41467C30.4253 4.51408 30.4316 4.60085 30.4641 4.67496C30.4984 4.74907 30.5517 4.81323 30.6239 4.86746C30.6979 4.91988 30.7855 4.96597 30.8866 5.00574C30.9877 5.0437 31.0951 5.07624 31.2088 5.10335L31.6854 5.22265C31.9183 5.27688 32.1278 5.34918 32.3137 5.43956C32.5015 5.52994 32.6585 5.6411 32.7849 5.77305C32.9131 5.90501 33.0033 6.06046 33.0557 6.23941C33.1081 6.41836 33.1153 6.62351 33.0774 6.85488C33.0196 7.19471 32.8851 7.48934 32.6739 7.73878C32.4626 7.98642 32.1855 8.17893 31.8425 8.3163C31.4995 8.45187 31.1023 8.51965 30.651 8.51965C30.2033 8.51965 29.825 8.45097 29.5163 8.31359C29.2076 8.17622 28.9828 7.97286 28.842 7.70354C28.703 7.4324 28.6615 7.0971 28.7175 6.69762H29.8521C29.8323 6.8838 29.8593 7.03926 29.9334 7.16398C30.0092 7.28689 30.122 7.37998 30.2719 7.44325C30.4217 7.5047 30.5977 7.53543 30.7999 7.53543C31.0003 7.53543 31.1781 7.50651 31.3334 7.44867C31.4905 7.39083 31.6177 7.31039 31.7152 7.20736C31.8127 7.10433 31.8723 6.98593 31.894 6.85217C31.9156 6.72745 31.8967 6.62261 31.8371 6.53765C31.7775 6.4527 31.6818 6.3804 31.55 6.32075C31.4201 6.25929 31.2585 6.20506 31.0653 6.15807L30.4858 6.00623C30.0381 5.89235 29.6996 5.71431 29.4703 5.47209C29.241 5.22988 29.1589 4.90361 29.2239 4.49329C29.2816 4.15709 29.4215 3.86336 29.6436 3.61211C29.8675 3.35905 30.1491 3.16292 30.4885 3.02374C30.8297 2.88275 31.2025 2.81226 31.6069 2.81226C32.0185 2.81226 32.3661 2.88365 32.6495 3.02645C32.9329 3.16744 33.1397 3.36447 33.2696 3.61753C33.3996 3.87059 33.4393 4.16522 33.3888 4.50143H32.265Z"
                                fill="#E22532"></path>
                            <path
                                d="M34.4327 8.44102H33.1762L36.0115 2.88817H37.5226L38.5137 8.44102H37.2572L36.5829 4.15709H36.5396L34.4327 8.44102ZM34.7198 6.25839H37.6878L37.5307 7.17482H34.5627L34.7198 6.25839Z"
                                fill="#E22532"></path>
                            <path
                                d="M39.1812 8.44102L40.102 2.88817H41.2745L40.5163 7.47307H42.8939L42.7315 8.44102H39.1812Z"
                                fill="#E22532"></path>
                            <path
                                d="M43.508 8.44102L44.4287 2.88817H48.1658L48.0033 3.85613H45.4388L45.2222 5.17927H47.5944L47.4319 6.14722H45.0597L44.843 7.47307H47.4184L47.2559 8.44102H43.508Z"
                                fill="#E22532"></path>
                            <path opacity="0.6"
                                d="M8.66543 4.4444L9.90949 2.65283H7.55958L6.31738 4.83959C6.98291 5.02276 8.14447 5.2631 9.51452 5.12147L10.2551 4.44423L8.66543 4.4444Z"
                                fill="url(#paint0_linear_1652_750)"></path>
                            <path
                                d="M7.64882 0.92334H10.0435L8.77576 4.00589H10.3958L6.03125 10.7434L7.16441 5.73148H6.03125L7.64882 0.92334Z"
                                fill="url(#paint1_linear_1652_750)"></path>
                            <path d="M10.1237 0.923096H8.21426L6.0376 5.73123L10.1237 0.923096Z"
                                fill="url(#paint2_linear_1652_750)"></path>
                            <path d="M7.70995 5.83252H9.03185L6.03125 10.7426L7.70995 5.83252Z"
                                fill="url(#paint3_linear_1652_750)"></path>
                            <defs>
                                <linearGradient id="paint0_linear_1652_750" x1="6.12321" y1="6.82737" x2="7.42933"
                                    y2="3.15521" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white"></stop>
                                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                </linearGradient>
                                <linearGradient id="paint1_linear_1652_750" x1="6.03125" y1="5.83338" x2="10.3958"
                                    y2="5.83338" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FCCE4F"></stop>
                                    <stop offset="0.822917" stop-color="#FD984E"></stop>
                                </linearGradient>
                                <linearGradient id="paint2_linear_1652_750" x1="6.0376" y1="3.32716" x2="10.569"
                                    y2="3.32716" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#E8B324"></stop>
                                    <stop offset="1" stop-color="#FDCD4A"></stop>
                                </linearGradient>
                                <linearGradient id="paint3_linear_1652_750" x1="5.05925" y1="10.2723" x2="7.37803"
                                    y2="3.62203" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F8D36F"></stop>
                                    <stop offset="1" stop-color="#FFC835"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="pus-flashsale-header__title">{{ $categorySpecialFlashsale->name }}</div>
                </div>
                <div class="pus-flashsale-header__btn-show-all"><a
                        href="{{ route('front.show-product-category', $categorySpecialFlashsale->slug) }}"
                        >Xem tất cả</a></div>
            </div>
            <div class="pus-flashsale-content owl-carousel owl-theme owl-nav-style-1" data-lg-items="6.9" data-md-items="6"
            data-sm-items="4.5" data-xs-items="1.8" data-dot="false" data-nav="true" data-autoplay="true" data-autoplay-timeout="10000" data-autoplay-hover-pause="true" data-lazy-load="true" data-loop="true">
                @foreach ($categorySpecialFlashsale->products as $product)
                <div class="pus-flashsale--row tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                    <div class="pus--row__items">
                        <a class="pus-slide__img-top" href="{{ route('front.show-product-detail', $product->slug) }}" >
                            <img src="{{ $product->image->path }}"
                                alt="{{ $product->name }}" class="tns-complete">
                            <div class="pus-sale-percent show">{{ round(($product->base_price - $product->price) / $product->base_price * 100) }}%</div>
                        </a>
                        <a href="{{ route('front.show-product-detail', $product->slug) }}" class="pus-slide-title" >{{ $product->name }}</a>
                        <div class="pus-slide-quantity process">Đang bán chạy</div>
                        <div class="pus-slide-price">
                            <div class="pus-slide-price__1">{{ formatCurrency($product->price) }}đ</div>
                            <div class="pus-slide-price__2">{{ formatCurrency($product->base_price) }}đ</div>
                        </div>
                        <div class="pus-slide-btn-add" ng-click="addToCart({{$product->id}})">
                            <div class="pus-slide-btn-add__icon">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.4329 7.91667H12.0996V5.41667H14.5996V3.75H12.0996V1.25H10.4329V3.75H7.93294V5.41667H10.4329V7.91667ZM7.09961 15.4167C6.18294 15.4167 5.44128 16.1667 5.44128 17.0833C5.44128 18 6.18294 18.75 7.09961 18.75C8.01628 18.75 8.76628 18 8.76628 17.0833C8.76628 16.1667 8.01628 15.4167 7.09961 15.4167ZM15.4329 15.4167C14.5163 15.4167 13.7746 16.1667 13.7746 17.0833C13.7746 18 14.5163 18.75 15.4329 18.75C16.3496 18.75 17.0996 18 17.0996 17.0833C17.0996 16.1667 16.3496 15.4167 15.4329 15.4167ZM8.01628 11.25H14.2246C14.8496 11.25 15.3996 10.9083 15.6829 10.3917L18.8996 4.55L17.4496 3.75L14.2246 9.58333H8.37461L4.82461 2.08333H2.09961V3.75H3.76628L6.76628 10.075L5.64128 12.1083C5.03294 13.225 5.83294 14.5833 7.09961 14.5833H17.0996V12.9167H7.09961L8.01628 11.25Z"
                                        fill="#111827"></path>
                                </svg>
                            </div>
                            <div class="pus-slide-btn-add__label">Thêm vào giỏ</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="hrv-pmo-coupon">
        <div class="dlpm-card-section dlpm-coupons" style="background-color: rgb(249, 250, 251);">
        <div class="dlpm-heading" style="color: rgb(17, 24, 39);">Mã khuyến mãi</div>
        <div class="dlpm-coupon-container">
            <div class="dlpm-coupon--row tns-item tns-slide-cloned owl-carousel owl-theme owl-nav-style-1" data-lg-items="4.5" data-md-items="3.5"
            data-sm-items="2.5" data-xs-items="1.2" data-dot="false" data-nav="true" data-autoplay="true" data-autoplay-timeout="10000" data-autoplay-hover-pause="true" data-lazy-load="true" data-loop="true">
            @foreach ($vouchers as $item)
                <div class="dlpm-coupon--row__items" style="position: relative; width: 336px">
                    <div class="dlpm-grid__svg s_340">
                        <svg class="w_336" width="336" height="136" viewBox="0 0 336 136" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_dd_1456_34979)">
                                <rect width="236" height="120" transform="translate(88 8)" fill="white"></rect>
                                <line x1="88.5" y1="8.5" x2="88.5" y2="127.5" stroke="#D1D5DB" stroke-linecap="round" stroke-dasharray="2 4"></line>
                                <g clip-path="url(#clip1_1456_34979)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M88 8H8V8.99995C9.65685 8.99995 11 10.3431 11 11.9999C11 13.6568 9.65685 14.9999 8 14.9999V17.7692C9.65685 17.7692 11 19.1123 11 20.7692C11 22.426 9.65685 23.7692 8 23.7692V26.5384C9.65685 26.5384 11 27.8816 11 29.5384C11 31.1953 9.65685 32.5384 8 32.5384V35.3076C9.65685 35.3076 11 36.6508 11 38.3076C11 39.9645 9.65685 41.3076 8 41.3076V44.0769C9.65685 44.0769 11 45.42 11 47.0769C11 48.7337 9.65685 50.0769 8 50.0769V52.8461C9.65685 52.8461 11 54.1893 11 55.8461C11 57.503 9.65685 58.8461 8 58.8461V61.6153C9.65685 61.6153 11 62.9585 11 64.6153C11 66.2722 9.65685 67.6153 8 67.6153V70.3846C9.65685 70.3846 11 71.7277 11 73.3846C11 75.0414 9.65685 76.3846 8 76.3846V79.1538C9.65685 79.1538 11 80.497 11 82.1538C11 83.8107 9.65685 85.1538 8 85.1538V87.923C9.65685 87.923 11 89.2662 11 90.923C11 92.5799 9.65685 93.923 8 93.923V96.6923C9.65685 96.6923 11 98.0354 11 99.6923C11 101.349 9.65685 102.692 8 102.692V105.462C9.65685 105.462 11 106.805 11 108.462C11 110.118 9.65685 111.462 8 111.462V114.231C9.65685 114.231 11 115.574 11 117.231C11 118.888 9.65685 120.231 8 120.231V123C9.65685 123 11 124.343 11 126C11 126.768 10.7111 127.469 10.2361 128H88V8Z" fill="white"></path>
                                </g>
                            </g>
                            <defs>
                                <filter id="filter0_dd_1456_34979" x="-4" y="-2" width="340" height="144" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                <feOffset dy="2"></feOffset>
                                <feGaussianBlur stdDeviation="6"></feGaussianBlur>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"></feColorMatrix>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1456_34979"></feBlend>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                <feOffset></feOffset>
                                <feGaussianBlur stdDeviation="1"></feGaussianBlur>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.24 0"></feColorMatrix>
                                <feBlend mode="normal" in2="effect1_dropShadow_1456_34979" result="effect2_dropShadow_1456_34979"></feBlend>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_1456_34979" result="shape"></feBlend>
                                </filter>
                                <clipPath id="clip0_1456_34979">
                                <path d="M100 94C100 91.7909 101.791 90 104 90H144C146.209 90 148 91.7909 148 94V106C148 108.209 146.209 110 144 110H104C101.791 110 100 108.209 100 106V94Z" fill="white"></path>
                                </clipPath>
                                <clipPath id="clip1_1456_34979">
                                <rect width="80" height="120" fill="white" transform="translate(8 8)"></rect>
                                </clipPath>
                                <clipPath id="clip2_1456_34979">
                                <rect width="28" height="28" fill="white" transform="translate(34 54)"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="w_340" width="340" height="136" viewBox="3 0 340 136" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_dd_1_4753)">
                                <path d="M92 10H320C324.418 10 328 13.5817 328 18V122C328 126.418 324.418 130 320 130H92V10Z" fill="#ffc23b"></path>
                                <line x1="92.5" y1="10.5" x2="92.5" y2="129.5" stroke="#D1D5DB" stroke-linecap="round" stroke-dasharray="2 4"></line>
                                <g clip-path="url(#clip1_1_4753)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M92 10H12V10.9999C13.6569 10.9999 15 12.3431 15 13.9999C15 15.6568 13.6569 16.9999 12 16.9999V19.7692C13.6569 19.7692 15 21.1123 15 22.7692C15 24.426 13.6569 25.7692 12 25.7692V28.5384C13.6569 28.5384 15 29.8816 15 31.5384C15 33.1953 13.6569 34.5384 12 34.5384V37.3076C13.6569 37.3076 15 38.6508 15 40.3076C15 41.9645 13.6569 43.3076 12 43.3076V46.0769C13.6569 46.0769 15 47.42 15 49.0769C15 50.7337 13.6569 52.0769 12 52.0769V54.8461C13.6569 54.8461 15 56.1893 15 57.8461C15 59.503 13.6569 60.8461 12 60.8461V63.6153C13.6569 63.6153 15 64.9585 15 66.6153C15 68.2722 13.6569 69.6153 12 69.6153V72.3846C13.6569 72.3846 15 73.7277 15 75.3846C15 77.0414 13.6569 78.3846 12 78.3846V81.1538C13.6569 81.1538 15 82.497 15 84.1538C15 85.8107 13.6569 87.1538 12 87.1538V89.923C13.6569 89.923 15 91.2662 15 92.923C15 94.5799 13.6569 95.923 12 95.923V98.6923C13.6569 98.6923 15 100.035 15 101.692C15 103.349 13.6569 104.692 12 104.692V107.462C13.6569 107.462 15 108.805 15 110.462C15 112.118 13.6569 113.462 12 113.462V116.231C13.6569 116.231 15 117.574 15 119.231C15 120.888 13.6569 122.231 12 122.231V125C13.6569 125 15 126.343 15 128C15 128.768 14.7111 129.469 14.2361 130H92V10Z" fill="#ffc23b"></path>
                                <g clip-path="url(#clip2_1_4753)">
                                    <path d="M65.3913 63.2881H56.8233C57.583 62.9022 58.3171 62.4275 58.9087 61.8358C60.2454 60.4991 60.2454 58.3249 58.9087 56.9881C57.6134 55.6928 55.3564 55.6916 54.0611 56.9881C53.1066 57.9426 52.4334 59.2549 52 60.4747C51.5666 59.2549 50.8934 57.9426 49.9389 56.9881C48.6424 55.6916 46.3841 55.6928 45.0913 56.9881C43.7546 58.3248 43.7546 60.4991 45.0913 61.8358C45.6829 62.4275 46.417 62.9022 47.1767 63.2881H38.6087C38.2727 63.2881 38 63.5608 38 63.8968V68.7664C38 69.1024 38.2727 69.375 38.6087 69.375H39.2173V83.375C39.2173 83.711 39.49 83.9837 39.826 83.9837H64.1738C64.5098 83.9837 64.7825 83.711 64.7825 83.375V69.375H65.3912C65.7272 69.375 65.9998 69.1024 65.9998 68.7664V63.8968C66 63.5608 65.7273 63.2881 65.3913 63.2881ZM48.9565 82.7664H40.4348V69.3751H48.9565V82.7664ZM48.9565 68.1577H39.2174V64.5055H48.9565V68.1577ZM45.952 60.9751C45.0901 60.1132 45.0901 58.7107 45.952 57.8488C46.3695 57.43 46.9247 57.2012 47.5151 57.2012C48.1056 57.2012 48.6595 57.43 49.0783 57.8488C50.6426 59.4132 51.3779 62.3166 51.3949 63.2686C51.3949 63.2747 51.3937 63.2832 51.3937 63.2881H51.3268C50.3371 63.2541 47.4969 62.5187 45.952 60.9751ZM53.8261 82.7664H50.1739V69.3751H53.8261V82.7664ZM53.8261 68.1577H50.1739V64.5055H53.8261V68.1577ZM52.6732 63.2881H52.6063C52.6063 63.2833 52.6051 63.2747 52.6051 63.2687C52.6221 62.3167 53.3574 59.4132 54.9217 57.8489C55.3405 57.4301 55.8944 57.2012 56.4849 57.2012C57.0753 57.2012 57.6305 57.4301 58.048 57.8489C58.9099 58.7108 58.9099 60.1132 58.048 60.9751C56.5031 62.5187 53.6629 63.2541 52.6732 63.2881ZM63.5652 82.7664H55.0435V69.3751H63.5652V82.7664ZM64.7826 68.1577H55.0435V64.5055H64.7826V68.1577Z" fill="white"></path>
                                </g>
                                </g>
                            </g>
                            <defs>
                                <filter id="filter0_dd_1_4753" x="0" y="0" width="340" height="144" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                <feOffset dy="2"></feOffset>
                                <feGaussianBlur stdDeviation="6"></feGaussianBlur>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"></feColorMatrix>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_4753"></feBlend>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                <feOffset></feOffset>
                                <feGaussianBlur stdDeviation="1"></feGaussianBlur>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.24 0"></feColorMatrix>
                                <feBlend mode="normal" in2="effect1_dropShadow_1_4753" result="effect2_dropShadow_1_4753"></feBlend>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_1_4753" result="shape"></feBlend>
                                </filter>
                                <clipPath id="clip0_1_4753">
                                <path d="M104 96C104 93.7909 105.791 92 108 92H148C150.209 92 152 93.7909 152 96V108C152 110.209 150.209 112 148 112H108C105.791 112 104 110.209 104 108V96Z" fill="white"></path>
                                </clipPath>
                                <clipPath id="clip1_1_4753">
                                <rect width="80" height="120" fill="white" transform="translate(12 10)"></rect>
                                </clipPath>
                                <clipPath id="clip2_1_4753">
                                <rect width="28" height="28" fill="white" transform="translate(38 56)"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="dlpm-row-header">
                        <div class="dlpm-label" style="color: rgb(0, 0, 0);">{{$item->name}}</div>
                        <div class="dlpm-description" style="color: rgb(0, 0, 0);">{{$item->description}}</div>
                        <div class="dlpm-expire" style="color: rgb(0, 0, 0);"></div>
                    </div>
                    <div class="dlpm-left-icons">
                        <svg data-icons="coupon-gift" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="16" cy="16" r="16" fill="#2463eb"></circle>
                            <g clip-path="url(#clip0_1826_6139)">
                                <path d="M23.6522 12.1646H18.7562C19.1903 11.9441 19.6098 11.6728 19.9478 11.3347C20.7117 10.5709 20.7117 9.32849 19.9478 8.56465C19.2077 7.82446 17.9179 7.82377 17.1778 8.56465C16.6323 9.11002 16.2477 9.85996 16 10.557C15.7523 9.85996 15.3677 9.11002 14.8223 8.56465C14.0814 7.82377 12.7909 7.82446 12.0522 8.56465C11.2883 9.32846 11.2883 10.5709 12.0522 11.3347C12.3903 11.6728 12.8097 11.9441 13.2438 12.1646H8.34781C8.15581 12.1646 8 12.3205 8 12.5125V15.2951C8 15.4871 8.15581 15.6429 8.34781 15.6429H8.69563V23.6429C8.69563 23.8349 8.85144 23.9907 9.04344 23.9907H22.9565C23.1485 23.9907 23.3043 23.8349 23.3043 23.6429V15.6429H23.6521C23.8441 15.6429 23.9999 15.4871 23.9999 15.2951V12.5125C24 12.3205 23.8442 12.1646 23.6522 12.1646ZM14.2609 23.2951H9.39131V15.6429H14.2609V23.2951ZM14.2609 14.9472H8.69566V12.8603H14.2609V14.9472ZM12.544 10.8429C12.0515 10.3504 12.0515 9.54899 12.544 9.05646C12.7826 8.81715 13.0998 8.68636 13.4372 8.68636C13.7746 8.68636 14.0911 8.81715 14.3304 9.05646C15.2243 9.95036 15.6445 11.6095 15.6543 12.1535C15.6543 12.157 15.6536 12.1618 15.6536 12.1646H15.6153C15.0498 12.1452 13.4268 11.725 12.544 10.8429ZM17.0435 23.2951H14.9565V15.6429H17.0435V23.2951ZM17.0435 14.9472H14.9565V12.8603H17.0435V14.9472ZM16.3847 12.1646H16.3464C16.3464 12.1619 16.3458 12.157 16.3458 12.1535C16.3555 11.6095 16.7757 9.9504 17.6696 9.05649C17.9089 8.81718 18.2254 8.6864 18.5628 8.6864C18.9002 8.6864 19.2174 8.81718 19.456 9.05649C19.9485 9.54902 19.9485 10.3504 19.456 10.8429C18.5732 11.725 16.9503 12.1452 16.3847 12.1646ZM22.6087 23.2951H17.7391V15.6429H22.6087V23.2951ZM23.3043 14.9472H17.7391V12.8603H23.3043V14.9472Z" fill="white"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_1826_6139">
                                <rect width="16" height="16" fill="white" transform="translate(8 8)"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="dlpm-row-footer">
                        <div class="dlpm-progress-preview">
                            @if (Carbon\Carbon::now() > $item->from_date)
                                <div class="dlpm-progress-label">Hết hạn trong {{Carbon\Carbon::parse($item->to_date)->diffInDays(Carbon\Carbon::now())}} ngày</div>
                            @else
                                <div class="dlpm-progress-label">Áp dụng từ {{Carbon\Carbon::parse($item->from_date)->format('d/m/Y')}}</div>
                            @endif
                            <progress class="progress dlpm-progress hidden" max="100" value="80"></progress>
                        </div>
                        <div class="btn-detail btn-hrvmodal-coupon" data-item="{{$item}}">Chi tiết</div>
                        <div class="btn-apply dlpm-btn-copy" data-id="{{$item->code}}" onclick="copyCouponCode('{{$item->code}}')" style="border-radius: 8px; background-color: rgb(36, 99, 235);">Sao chép</div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        </div>
    </div>

    <div class="home-banner">
        <div class="container-fluid p-0">
            <div class="home-banner__wrapper">
                <div class="home-banner__left" style="width: 100%;">
                    <div class="home-banner__wrap">
                        @foreach ($productCategories as $category)
                            <div class="home-banner__item" style="width: calc(100% / 3 - 5px);">
                                <a class="home-banner__link"
                                    href="{{route('front.show-product-category', $category->slug)}}"></a>
                                <div class="home-banner__bg ">
                                    <img src="{{$category->image->path}}"
                                        alt="{{$category->name}}" loading="lazy"/>
                                </div>
                                <div class="home-banner__content">
                                    <div class="home-banner__text">
                                        <div class="home-banner__strong">{{$category->name}}</div>
                                        <a href="{{route('front.show-product-category', $category->slug)}}"
                                            class="home-banner__btn"></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- <div class="home-banner__right">
                    <div class="home-banner__item">
                        <a class="home-banner__link" href="{{route('front.show-product-category', $productCategories[0]->slug)}}"></a>
                        <div class="home-banner__bg high">
                            <img src="{{$productCategories[0]->image->path}}"
                                alt="{{$productCategories[0]->name}}" loading="lazy"/>
                        </div>
                        <div class="home-banner__content">
                            <div class="home-banner__text">
                                <div class="home-banner__strong">{{$productCategories[0]->name}}</div>
                                <a href="{{route('front.show-product-category', $productCategories[0]->slug)}}" class="home-banner__btn"></a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    {{-- <div class="home-partner">
        <div class="container">
            <div class="owl-carousel owl-theme" data-lg-items="6" data-md-items="3" data-sm-items="2" data-xs-items="2"
                data-dot="false" data-nav="false">
                <div class="home-partner__item">
                    <a class="home-partner__image" href="https://www.theyen.com.vn/pages/voucher">
                        <img src="//theme.hstatic.net/200000541929/1001190790/14/home_partner_image_1.jpg?v=1803" />
                    </a>
                </div>
                <div class="home-partner__item">
                    <a class="home-partner__image" href="https://www.theyen.com.vn/pages/voucher">
                        <img src="//theme.hstatic.net/200000541929/1001190790/14/home_partner_image_2.jpg?v=1803" />
                    </a>
                </div>
                <div class="home-partner__item">
                    <a class="home-partner__image" href="https://www.theyen.com.vn/pages/voucher">
                        <img src="//theme.hstatic.net/200000541929/1001190790/14/home_partner_image_3.jpg?v=1803" />
                    </a>
                </div>
                <div class="home-partner__item">
                    <a class="home-partner__image" href="https://www.theyen.com.vn/pages/voucher">
                        <img src="//theme.hstatic.net/200000541929/1001190790/14/home_partner_image_4.jpg?v=1803" />
                    </a>
                </div>
                <div class="home-partner__item">
                    <a class="home-partner__image" href="https://www.theyen.com.vn/pages/voucher">
                        <img src="//theme.hstatic.net/200000541929/1001190790/14/home_partner_image_5.jpg?v=1803" />
                    </a>
                </div>
                <div class="home-partner__item">
                    <a class="home-partner__image" href="https://www.theyen.com.vn/pages/voucher">
                        <img src="//theme.hstatic.net/200000541929/1001190790/14/home_partner_image_6.jpg?v=1803" />
                    </a>
                </div>
            </div>
        </div>
    </div> --}}
    @foreach ($categorySpecial as $key => $cate)
        <div class="product_banner-{{$key+1}}">
            <a href="{{route('front.show-product-category', $cate->slug)}}" style="background-image: url(//theme.hstatic.net/200000541929/1001190790/14/ft_newsletter_bg.png?v=1803);max-width: 100%;
                width: 100%;
                display: block;
                padding: 40px;
                background-position: center;
                background-size: cover;
                text-align: center;">
                {{-- <img src="//theme.hstatic.net/200000541929/1001190790/14/pro_detail_banner_1.png?v=1803" /> --}}
                <span class="text-uppercase" style="font-size: 20px;font-weight: 700;color: #fff;">Bộ sưu tập</span>
                <div class="text-uppercase" style="font-size: 46px;font-weight: 700; ">{{$cate->name}}</div>
            </a>
        </div>
        <section class="home-featured-product pb-80 {{$cate->slug}}" data-handle="{{$cate->slug}}" ng-controller="ListProductController">
            <div class="container-fluid p-0">
                <div class="row no-gutters loadmore-content 12" home-featured-product>

                </div>
                <div class="hfp-btn-loadmore">
                    <a class="loadmore" href="{{route('front.show-product-category', $cate->slug)}}" >
                        <span>Xem thêm</span>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                            <g transform="translate(25 50)">
                                <circle cx="0" cy="0" r="7" fill="#545a6a" transform="scale(0.267844 0.267844)">
                                    <animateTransform attributeName="transform" type="scale" begin="-0.3333333333333333s"
                                        calcMode="spline" keySplines="0.3 0 0.7 1;0.3 0 0.7 1" values="0;1;0"
                                        keyTimes="0;0.5;1" dur="1s" repeatCount="indefinite"></animateTransform>
                                </circle>
                            </g>
                            <g transform="translate(50 50)">
                                <circle cx="0" cy="0" r="7" fill="#d4d4db" transform="scale(0.00000184774 0.00000184774)">
                                    <animateTransform attributeName="transform" type="scale" begin="-0.16666666666666666s"
                                        calcMode="spline" keySplines="0.3 0 0.7 1;0.3 0 0.7 1" values="0;1;0"
                                        keyTimes="0;0.5;1" dur="1s" repeatCount="indefinite"></animateTransform>
                                </circle>
                            </g>
                            <g transform="translate(75 50)">
                                <circle cx="0" cy="0" r="7" fill="#545a6a" transform="scale(0.269893 0.269893)">
                                    <animateTransform attributeName="transform" type="scale" begin="0s" calcMode="spline"
                                        keySplines="0.3 0 0.7 1;0.3 0 0.7 1" values="0;1;0" keyTimes="0;0.5;1" dur="1s"
                                        repeatCount="indefinite"></animateTransform>
                                </circle>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </section>
    @endforeach
    <section class="home-articles pb-80">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="section-title">
                    <span>Tiệm kể bạn nghe</span>
                </h2>
            </div>
            <div class="home-articles-slider">
                <div class="owl-carousel owl-theme owl-nav-style-1" data-lg-items="2" data-md-items="2"
                    data-sm-items="2" data-xs-items="1" data-dot="false" data-nav="false">
                    @foreach ($newBlogs as $item)
                        <div class="article-item ">
                            <div class="article-photo">
                                <a href="{{ route('front.detail-blog', $item->slug) }}">
                                    <img src="{{ $item->image->path }}"
                                        alt="{{ $item->name }}" />
                                </a>
                                <div class="article-info-wrap">
                                    {{-- <span class="article-author">Đăng bởi oni </span> --}}
                                    <h3 class="article-title text2line text-justify">
                                        <a href="{{ route('front.detail-blog', $item->slug) }}"
                                            title="{{ $item->name }}">{{ $item->name }}</a>
                                    </h3>
                                    <span class="article-date">{{ $item->created_at->format('d/m/Y') }}</span>
                                </div>
                            </div>
                            <div class="article-info">
                                <div class="article-desc">
                                    {!! $item->intro !!}
                                </div>
                                <a href="{{ route('front.detail-blog', $item->slug) }}"
                                    class="article-btn btn">Đọc tiếp</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <div class="home-gallery">
        @foreach ($newProducts as $item)
            <a href="{{route('front.show-product-detail', $item->slug)}}" class="card">
                <picture>
                    <source media="(max-width: 767px)"
                        srcset="{{$item->image->path}}">
                    <img src="{{$item->image->path}}" alt="{{$item->name}}"
                        loading="lazy">
                </picture>
                <div class="card__head">{{$item->name}}</div>
            </a>
        @endforeach
    </div>
    {{-- <div class="home-partner">
        <div class="container">
            <div class="owl-carousel owl-theme" data-lg-items="6" data-md-items="3" data-sm-items="2" data-xs-items="2"
                data-dot="false" data-nav="false">
                <div class="home-partner__item">
                    <a class="home-partner__image" href="https://www.theyen.com.vn/pages/voucher">
                        <img src="//theme.hstatic.net/200000541929/1001190790/14/home_partner_image_1.jpg?v=1803" />
                    </a>
                </div>
                <div class="home-partner__item">
                    <a class="home-partner__image" href="https://www.theyen.com.vn/pages/voucher">
                        <img src="//theme.hstatic.net/200000541929/1001190790/14/home_partner_image_2.jpg?v=1803" />
                    </a>
                </div>
                <div class="home-partner__item">
                    <a class="home-partner__image" href="https://www.theyen.com.vn/pages/voucher">
                        <img src="//theme.hstatic.net/200000541929/1001190790/14/home_partner_image_3.jpg?v=1803" />
                    </a>
                </div>
                <div class="home-partner__item">
                    <a class="home-partner__image" href="https://www.theyen.com.vn/pages/voucher">
                        <img src="//theme.hstatic.net/200000541929/1001190790/14/home_partner_image_4.jpg?v=1803" />
                    </a>
                </div>
                <div class="home-partner__item">
                    <a class="home-partner__image" href="https://www.theyen.com.vn/pages/voucher">
                        <img src="//theme.hstatic.net/200000541929/1001190790/14/home_partner_image_5.jpg?v=1803" />
                    </a>
                </div>
                <div class="home-partner__item">
                    <a class="home-partner__image" href="https://www.theyen.com.vn/pages/voucher">
                        <img src="//theme.hstatic.net/200000541929/1001190790/14/home_partner_image_6.jpg?v=1803" />
                    </a>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="hrv-pmo-coupon">
        <div class="dlpm-card-section dlpm-coupons" style="background-color: rgb(249, 250, 251);">
        <div class="dlpm-heading" style="color: rgb(17, 24, 39);">Mã khuyến mãi</div>
        <div class="dlpm-coupon-container">
            <div class="dlpm-coupon--row tns-item tns-slide-cloned owl-carousel owl-theme owl-nav-style-1" data-lg-items="4.5" data-md-items="3.5"
            data-sm-items="2.5" data-xs-items="1.2" data-dot="false" data-nav="true" data-autoplay="true" data-autoplay-timeout="10000" data-autoplay-hover-pause="true" data-lazy-load="true" data-loop="true">
            @foreach ($vouchers as $item)
                <div class="dlpm-coupon--row__items" style="position: relative; width: 336px">
                    <div class="dlpm-grid__svg s_340">
                        <svg class="w_336" width="336" height="136" viewBox="0 0 336 136" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_dd_1456_34979)">
                                <rect width="236" height="120" transform="translate(88 8)" fill="white"></rect>
                                <line x1="88.5" y1="8.5" x2="88.5" y2="127.5" stroke="#D1D5DB" stroke-linecap="round" stroke-dasharray="2 4"></line>
                                <g clip-path="url(#clip1_1456_34979)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M88 8H8V8.99995C9.65685 8.99995 11 10.3431 11 11.9999C11 13.6568 9.65685 14.9999 8 14.9999V17.7692C9.65685 17.7692 11 19.1123 11 20.7692C11 22.426 9.65685 23.7692 8 23.7692V26.5384C9.65685 26.5384 11 27.8816 11 29.5384C11 31.1953 9.65685 32.5384 8 32.5384V35.3076C9.65685 35.3076 11 36.6508 11 38.3076C11 39.9645 9.65685 41.3076 8 41.3076V44.0769C9.65685 44.0769 11 45.42 11 47.0769C11 48.7337 9.65685 50.0769 8 50.0769V52.8461C9.65685 52.8461 11 54.1893 11 55.8461C11 57.503 9.65685 58.8461 8 58.8461V61.6153C9.65685 61.6153 11 62.9585 11 64.6153C11 66.2722 9.65685 67.6153 8 67.6153V70.3846C9.65685 70.3846 11 71.7277 11 73.3846C11 75.0414 9.65685 76.3846 8 76.3846V79.1538C9.65685 79.1538 11 80.497 11 82.1538C11 83.8107 9.65685 85.1538 8 85.1538V87.923C9.65685 87.923 11 89.2662 11 90.923C11 92.5799 9.65685 93.923 8 93.923V96.6923C9.65685 96.6923 11 98.0354 11 99.6923C11 101.349 9.65685 102.692 8 102.692V105.462C9.65685 105.462 11 106.805 11 108.462C11 110.118 9.65685 111.462 8 111.462V114.231C9.65685 114.231 11 115.574 11 117.231C11 118.888 9.65685 120.231 8 120.231V123C9.65685 123 11 124.343 11 126C11 126.768 10.7111 127.469 10.2361 128H88V8Z" fill="white"></path>
                                </g>
                            </g>
                            <defs>
                                <filter id="filter0_dd_1456_34979" x="-4" y="-2" width="340" height="144" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                <feOffset dy="2"></feOffset>
                                <feGaussianBlur stdDeviation="6"></feGaussianBlur>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"></feColorMatrix>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1456_34979"></feBlend>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                <feOffset></feOffset>
                                <feGaussianBlur stdDeviation="1"></feGaussianBlur>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.24 0"></feColorMatrix>
                                <feBlend mode="normal" in2="effect1_dropShadow_1456_34979" result="effect2_dropShadow_1456_34979"></feBlend>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_1456_34979" result="shape"></feBlend>
                                </filter>
                                <clipPath id="clip0_1456_34979">
                                <path d="M100 94C100 91.7909 101.791 90 104 90H144C146.209 90 148 91.7909 148 94V106C148 108.209 146.209 110 144 110H104C101.791 110 100 108.209 100 106V94Z" fill="white"></path>
                                </clipPath>
                                <clipPath id="clip1_1456_34979">
                                <rect width="80" height="120" fill="white" transform="translate(8 8)"></rect>
                                </clipPath>
                                <clipPath id="clip2_1456_34979">
                                <rect width="28" height="28" fill="white" transform="translate(34 54)"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="w_340" width="340" height="136" viewBox="3 0 340 136" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_dd_1_4753)">
                                <path d="M92 10H320C324.418 10 328 13.5817 328 18V122C328 126.418 324.418 130 320 130H92V10Z" fill="#ffc23b"></path>
                                <line x1="92.5" y1="10.5" x2="92.5" y2="129.5" stroke="#D1D5DB" stroke-linecap="round" stroke-dasharray="2 4"></line>
                                <g clip-path="url(#clip1_1_4753)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M92 10H12V10.9999C13.6569 10.9999 15 12.3431 15 13.9999C15 15.6568 13.6569 16.9999 12 16.9999V19.7692C13.6569 19.7692 15 21.1123 15 22.7692C15 24.426 13.6569 25.7692 12 25.7692V28.5384C13.6569 28.5384 15 29.8816 15 31.5384C15 33.1953 13.6569 34.5384 12 34.5384V37.3076C13.6569 37.3076 15 38.6508 15 40.3076C15 41.9645 13.6569 43.3076 12 43.3076V46.0769C13.6569 46.0769 15 47.42 15 49.0769C15 50.7337 13.6569 52.0769 12 52.0769V54.8461C13.6569 54.8461 15 56.1893 15 57.8461C15 59.503 13.6569 60.8461 12 60.8461V63.6153C13.6569 63.6153 15 64.9585 15 66.6153C15 68.2722 13.6569 69.6153 12 69.6153V72.3846C13.6569 72.3846 15 73.7277 15 75.3846C15 77.0414 13.6569 78.3846 12 78.3846V81.1538C13.6569 81.1538 15 82.497 15 84.1538C15 85.8107 13.6569 87.1538 12 87.1538V89.923C13.6569 89.923 15 91.2662 15 92.923C15 94.5799 13.6569 95.923 12 95.923V98.6923C13.6569 98.6923 15 100.035 15 101.692C15 103.349 13.6569 104.692 12 104.692V107.462C13.6569 107.462 15 108.805 15 110.462C15 112.118 13.6569 113.462 12 113.462V116.231C13.6569 116.231 15 117.574 15 119.231C15 120.888 13.6569 122.231 12 122.231V125C13.6569 125 15 126.343 15 128C15 128.768 14.7111 129.469 14.2361 130H92V10Z" fill="#ffc23b"></path>
                                <g clip-path="url(#clip2_1_4753)">
                                    <path d="M65.3913 63.2881H56.8233C57.583 62.9022 58.3171 62.4275 58.9087 61.8358C60.2454 60.4991 60.2454 58.3249 58.9087 56.9881C57.6134 55.6928 55.3564 55.6916 54.0611 56.9881C53.1066 57.9426 52.4334 59.2549 52 60.4747C51.5666 59.2549 50.8934 57.9426 49.9389 56.9881C48.6424 55.6916 46.3841 55.6928 45.0913 56.9881C43.7546 58.3248 43.7546 60.4991 45.0913 61.8358C45.6829 62.4275 46.417 62.9022 47.1767 63.2881H38.6087C38.2727 63.2881 38 63.5608 38 63.8968V68.7664C38 69.1024 38.2727 69.375 38.6087 69.375H39.2173V83.375C39.2173 83.711 39.49 83.9837 39.826 83.9837H64.1738C64.5098 83.9837 64.7825 83.711 64.7825 83.375V69.375H65.3912C65.7272 69.375 65.9998 69.1024 65.9998 68.7664V63.8968C66 63.5608 65.7273 63.2881 65.3913 63.2881ZM48.9565 82.7664H40.4348V69.3751H48.9565V82.7664ZM48.9565 68.1577H39.2174V64.5055H48.9565V68.1577ZM45.952 60.9751C45.0901 60.1132 45.0901 58.7107 45.952 57.8488C46.3695 57.43 46.9247 57.2012 47.5151 57.2012C48.1056 57.2012 48.6595 57.43 49.0783 57.8488C50.6426 59.4132 51.3779 62.3166 51.3949 63.2686C51.3949 63.2747 51.3937 63.2832 51.3937 63.2881H51.3268C50.3371 63.2541 47.4969 62.5187 45.952 60.9751ZM53.8261 82.7664H50.1739V69.3751H53.8261V82.7664ZM53.8261 68.1577H50.1739V64.5055H53.8261V68.1577ZM52.6732 63.2881H52.6063C52.6063 63.2833 52.6051 63.2747 52.6051 63.2687C52.6221 62.3167 53.3574 59.4132 54.9217 57.8489C55.3405 57.4301 55.8944 57.2012 56.4849 57.2012C57.0753 57.2012 57.6305 57.4301 58.048 57.8489C58.9099 58.7108 58.9099 60.1132 58.048 60.9751C56.5031 62.5187 53.6629 63.2541 52.6732 63.2881ZM63.5652 82.7664H55.0435V69.3751H63.5652V82.7664ZM64.7826 68.1577H55.0435V64.5055H64.7826V68.1577Z" fill="white"></path>
                                </g>
                                </g>
                            </g>
                            <defs>
                                <filter id="filter0_dd_1_4753" x="0" y="0" width="340" height="144" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                <feOffset dy="2"></feOffset>
                                <feGaussianBlur stdDeviation="6"></feGaussianBlur>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"></feColorMatrix>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_4753"></feBlend>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                <feOffset></feOffset>
                                <feGaussianBlur stdDeviation="1"></feGaussianBlur>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.24 0"></feColorMatrix>
                                <feBlend mode="normal" in2="effect1_dropShadow_1_4753" result="effect2_dropShadow_1_4753"></feBlend>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_1_4753" result="shape"></feBlend>
                                </filter>
                                <clipPath id="clip0_1_4753">
                                <path d="M104 96C104 93.7909 105.791 92 108 92H148C150.209 92 152 93.7909 152 96V108C152 110.209 150.209 112 148 112H108C105.791 112 104 110.209 104 108V96Z" fill="white"></path>
                                </clipPath>
                                <clipPath id="clip1_1_4753">
                                <rect width="80" height="120" fill="white" transform="translate(12 10)"></rect>
                                </clipPath>
                                <clipPath id="clip2_1_4753">
                                <rect width="28" height="28" fill="white" transform="translate(38 56)"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="dlpm-row-header">
                        <div class="dlpm-label" style="color: rgb(0, 0, 0);">{{$item->name}}</div>
                        <div class="dlpm-description" style="color: rgb(0, 0, 0);">{{$item->description}}</div>
                        <div class="dlpm-expire" style="color: rgb(0, 0, 0);"></div>
                    </div>
                    <div class="dlpm-left-icons">
                        <svg data-icons="coupon-gift" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="16" cy="16" r="16" fill="#2463eb"></circle>
                            <g clip-path="url(#clip0_1826_6139)">
                                <path d="M23.6522 12.1646H18.7562C19.1903 11.9441 19.6098 11.6728 19.9478 11.3347C20.7117 10.5709 20.7117 9.32849 19.9478 8.56465C19.2077 7.82446 17.9179 7.82377 17.1778 8.56465C16.6323 9.11002 16.2477 9.85996 16 10.557C15.7523 9.85996 15.3677 9.11002 14.8223 8.56465C14.0814 7.82377 12.7909 7.82446 12.0522 8.56465C11.2883 9.32846 11.2883 10.5709 12.0522 11.3347C12.3903 11.6728 12.8097 11.9441 13.2438 12.1646H8.34781C8.15581 12.1646 8 12.3205 8 12.5125V15.2951C8 15.4871 8.15581 15.6429 8.34781 15.6429H8.69563V23.6429C8.69563 23.8349 8.85144 23.9907 9.04344 23.9907H22.9565C23.1485 23.9907 23.3043 23.8349 23.3043 23.6429V15.6429H23.6521C23.8441 15.6429 23.9999 15.4871 23.9999 15.2951V12.5125C24 12.3205 23.8442 12.1646 23.6522 12.1646ZM14.2609 23.2951H9.39131V15.6429H14.2609V23.2951ZM14.2609 14.9472H8.69566V12.8603H14.2609V14.9472ZM12.544 10.8429C12.0515 10.3504 12.0515 9.54899 12.544 9.05646C12.7826 8.81715 13.0998 8.68636 13.4372 8.68636C13.7746 8.68636 14.0911 8.81715 14.3304 9.05646C15.2243 9.95036 15.6445 11.6095 15.6543 12.1535C15.6543 12.157 15.6536 12.1618 15.6536 12.1646H15.6153C15.0498 12.1452 13.4268 11.725 12.544 10.8429ZM17.0435 23.2951H14.9565V15.6429H17.0435V23.2951ZM17.0435 14.9472H14.9565V12.8603H17.0435V14.9472ZM16.3847 12.1646H16.3464C16.3464 12.1619 16.3458 12.157 16.3458 12.1535C16.3555 11.6095 16.7757 9.9504 17.6696 9.05649C17.9089 8.81718 18.2254 8.6864 18.5628 8.6864C18.9002 8.6864 19.2174 8.81718 19.456 9.05649C19.9485 9.54902 19.9485 10.3504 19.456 10.8429C18.5732 11.725 16.9503 12.1452 16.3847 12.1646ZM22.6087 23.2951H17.7391V15.6429H22.6087V23.2951ZM23.3043 14.9472H17.7391V12.8603H23.3043V14.9472Z" fill="white"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_1826_6139">
                                <rect width="16" height="16" fill="white" transform="translate(8 8)"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="dlpm-row-footer">
                        <div class="dlpm-progress-preview">
                            @if (Carbon\Carbon::now() > $item->from_date)
                                <div class="dlpm-progress-label">Hết hạn trong {{Carbon\Carbon::parse($item->to_date)->diffInDays(Carbon\Carbon::now())}} ngày</div>
                            @else
                                <div class="dlpm-progress-label">Áp dụng từ {{Carbon\Carbon::parse($item->from_date)->format('d/m/Y')}}</div>
                            @endif
                            <progress class="progress dlpm-progress hidden" max="100" value="80"></progress>
                        </div>
                        <div class="btn-detail btn-hrvmodal-coupon" data-item="{{$item}}">Chi tiết</div>
                        <div class="btn-apply dlpm-btn-copy" data-id="{{$item->code}}" onclick="copyCouponCode('{{$item->code}}')" style="border-radius: 8px; background-color: rgb(36, 99, 235);">Sao chép</div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        </div>
    </div>
{{-- </div> --}}
@endsection
@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script>
    $(document).ready(function() {
        function updateCountdown() {
            var endDate = $('.pus-flashsale-timer').data('time');
            var endTime = moment(endDate, "DD/MM/YYYY").toDate();
            var now = new Date().getTime();
            var timeLeft = endTime - now;

            if (timeLeft > 0) {
                var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

                $('.pus-timer-item.days').text(days < 10 ? '0' + days : days);
                $('.pus-timer-item.hours').text(hours < 10 ? '0' + hours : hours);
                $('.pus-timer-item.minutes').text(minutes < 10 ? '0' + minutes : minutes);
                $('.pus-timer-item.seconds').text(seconds < 10 ? '0' + seconds : seconds);
            } else {
                clearInterval(countdownInterval);
            }
        }

        var countdownInterval = setInterval(updateCountdown, 1000);
    });
</script>
@endpush
