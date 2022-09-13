@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@if (session()->has('success'))
   <script>
      $.notify("Gửi đơn hàng thành công!", "success");
   </script>
@endif
@endsection
@section('content')
<main id="main" class="">
   <div id="content" role="main" class="content-area">
      <div class="row"  id="row-1542393637">
            <div id="col-286106669" class="col small-12 large-12"  >
            <div class="col-inner"  >
               <div class="slider-wrapper relative" id="slider-1996725964" >
                  <div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-normal"
                        data-flickity-options='{
                        "cellAlign": "center",
                        "imagesLoaded": true,
                        "lazyLoad": 1,
                        "freeScroll": false,
                        "wrapAround": true,
                        "autoPlay": 6000,
                        "pauseAutoPlayOnHover" : true,
                        "prevNextButtons": true,
                        "contain" : true,
                        "adaptiveHeight" : true,
                        "dragThreshold" : 10,
                        "percentPosition": true,
                        "pageDots": true,
                        "rightToLeft": false,
                        "draggable": true,
                        "selectedAttraction": 0.1,
                        "parallax" : 0,
                        "friction": 0.6        }'
                        >
                        @foreach ($banners as $banner)
                           <div class="banner has-hover" id="banner-1004397502">
                           <div class="banner-inner fill">
                              <div class="banner-bg fill" >
                                 <div class="bg fill bg-fill ">
                                    <img src="{{$banner->image}}" alt="" loading="lazy">
                                 </div>
                                 <div class="overlay"></div>
                              </div>
                           </div>
                           <style>
                              #banner-1004397502 {
                              padding-top: 250px;
                              }
                              #banner-1004397502 .overlay {
                              background-color: rgba(0, 0, 0, 0.06);
                              }
                              @media (min-width:550px) {
                              #banner-1004397502 {
                              padding-top: 500px;
                              }
                              }
                           </style>
                           </div>
                        @endforeach
                  </div>
                  <div class="loading-spin dark large centered"></div>
               </div>
            </div>
            </div>
      </div>
      {{-- <div class="banner-grid-wrapper">
            <div id="banner-grid-380090342" class="banner-grid row row-grid hidden row-small" data-packery-options="">
            <div class="col grid-col small-12 large-9 grid-col-1" >
               <div class="col-inner">
                  <div class="slider-wrapper relative" id="slider-464788957" >
                        <div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-normal"
                        data-flickity-options='{
                        "cellAlign": "center",
                        "imagesLoaded": true,
                        "lazyLoad": 1,
                        "freeScroll": false,
                        "wrapAround": true,
                        "autoPlay": 6000,
                        "pauseAutoPlayOnHover" : true,
                        "prevNextButtons": true,
                        "contain" : true,
                        "adaptiveHeight" : true,
                        "dragThreshold" : 10,
                        "percentPosition": true,
                        "pageDots": true,
                        "rightToLeft": false,
                        "draggable": true,
                        "selectedAttraction": 0.1,
                        "parallax" : 0,
                        "friction": 0.6        }'
                        >
                        @foreach ($banners as $banner)
                           <div class="banner has-hover" id="banner-496840097">
                              <div class="banner-inner fill">
                                 <div class="banner-bg fill" >
                                       <div class="bg fill bg-fill ">
                                          <img src="{{$banner->image}}" alt="" loading="lazy">  
                                       </div>
                                       <div class="overlay"></div>
                                 </div>
                              </div>
                              <style>
                                 #banner-496840097 {
                                 padding-top: 500px;
                                 }
                                 #banner-496840097 .overlay {
                                 background-color: rgba(0, 0, 0, 0.06);
                                 }
                              </style>
                           </div>
                        @endforeach
                        </div>
                        <div class="loading-spin dark large centered"></div>
                  </div>
               </div>
            </div>
            <div class="col grid-col small-12 large-3 grid-col-2-3" >
               <div class="col-inner">
                  <div class="banner has-hover bg-zoom" id="banner-2115457803">
                        <div class="banner-inner fill">
                        <div class="banner-bg fill" >
                           <div class="bg fill bg-fill "></div>
                           <div class="overlay"></div>
                        </div>
                        <div class="banner-layers container">
                           <div class="fill banner-link"></div>
                           <div id="text-box-755490224" class="text-box banner-layer hidden x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                              <div class="text-box-content text dark">
                                    <div class="text-inner text-center">
                                    <h3 class="alt-font">Don&#8217;t Miss</h3>
                                    <h2 class="uppercase"><span style="font-size: 130%"><strong>Sale ends soon</strong></span></h2>
                                    <div id="timer-29480386" class="ux-timer dark" data-text-plural="s" data-text-hour="hour" data-text-day="day" data-text-week="week" data-text-min="min" data-text-sec="sec" data-text-hour-p="" data-text-day-p="" data-text-week-p="" data-text-min-p="" data-text-sec-p="" data-countdown="2021/12/31 18:00">
                                       <span>
                                          &nbsp;
                                          <div class="loading-spin dark centered"></div>
                                          <strong>&nbsp;</strong>
                                       </span>
                                    </div>
                                    <style>
                                       #timer-29480386 {
                                       font-size: 300%;
                                       }
                                       #timer-29480386 span {
                                       background-color: rgba(255, 255, 255, 0.17);
                                       }
                                    </style>
                                    <a class="button primary is-larger"  >
                                    <span>Browse Now</span>
                                    </a>
                                    </div>
                              </div>
                              <style>
                                    #text-box-755490224 {
                                    width: 87%;
                                    }
                                    #text-box-755490224 .text-box-content {
                                    font-size: 100%;
                                    }
                              </style>
                           </div>
                        </div>
                        </div>
                        <style>
                        #banner-2115457803 {
                        padding-top: 160px;
                        }
                        #banner-2115457803 .bg.bg-loaded {
                        background-image: url(https://momilash.com/wp-content/uploads/2021/12/247x381.png);
                        }
                        #banner-2115457803 .overlay {
                        background-color: rgba(0, 0, 0, 0.13);
                        }
                        #banner-2115457803 .bg {
                        background-position: 47% 55%;
                        }
                        </style>
                  </div>
               </div>
            </div>
            <div class="col grid-col small-12 large-3 grid-col-1-3" >
               <div class="col-inner">
                  <div class="banner has-hover bg-zoom" id="banner-1312452016">
                        <div class="banner-inner fill">
                        <div class="banner-bg fill" >
                           <div class="bg fill bg-fill "></div>
                           <div class="overlay"></div>
                        </div>
                        <div class="banner-layers container">
                           <div class="fill banner-link"></div>
                           <div id="text-box-428468904" class="text-box banner-layer hidden x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                              <div class="text-box-content text dark">
                                    <div class="text-inner text-center">
                                    <h2 class="uppercase"><span style="font-size: 130%"><strong>SUMMER SALE</strong></span></h2>
                                    <a class="button primary is-larger"  >
                                    <span>Browse Now</span>
                                    </a>
                                    </div>
                              </div>
                              <style>
                                    #text-box-428468904 {
                                    width: 87%;
                                    }
                                    #text-box-428468904 .text-box-content {
                                    font-size: 100%;
                                    }
                              </style>
                           </div>
                        </div>
                        </div>
                        <style>
                        #banner-1312452016 {
                        padding-top: 160px;
                        }
                        #banner-1312452016 .bg.bg-loaded {
                        background-image: url(https://momilash.com/wp-content/uploads/2021/12/247x181.jpg);
                        }
                        #banner-1312452016 .overlay {
                        background-color: rgba(0, 0, 0, 0.17);
                        }
                        #banner-1312452016 .bg {
                        background-position: 47% 55%;
                        }
                        </style>
                  </div>
               </div>
            </div>
            </div>
            <style>
            #banner-grid-380090342 .grid-col-1{height: 600px}
            #banner-grid-380090342 .grid-col-1-2{height: 300px}
            #banner-grid-380090342 .grid-col-1-3{height:200px}
            #banner-grid-380090342 .grid-col-2-3{height: 400px}
            #banner-grid-380090342 .grid-col-1-4{height: 150px}
            #banner-grid-380090342 .grid-col-3-4{height: 450px}
            </style>
      </div> --}}
      <div class="container section-title-container cust-b" >
            <h3 class="section-title section-title-normal"><b></b><span class="section-title-main" style="color:rgb(216, 150, 84);">Our BestSellers</span><b></b>
               {{-- <a href="lashes/shop/" target="">Browse All<i class="icon-angle-right" ></i></a> --}}
            </h3>
      </div>
      <div class="row  equalize-box large-columns-5 medium-columns-3 small-columns-2 row-small slider row-slider slider-nav-reveal slider-nav-push"  data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
         @foreach ($bestsellerProHome as $product)
            @include('layouts.product.item', ['product'=>$product])
         @endforeach
      </div>
      <div class="container section-title-container cust-b" >
            <h3 class="section-title section-title-normal"><b></b><span class="section-title-main" style="color:rgb(216, 150, 84);">Latest on Sale</span><b></b>
               {{-- <a href="lashes/shop/" target="">Browse all<i class="icon-angle-right" ></i></a> --}}
            </h3>
      </div>
      <div class="row  equalize-box large-columns-5 medium-columns-3 small-columns-2 row-small slider row-slider slider-nav-reveal slider-nav-push"  data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
         @foreach ($discountProHome as $product)
            @include('layouts.product.item', ['product'=>$product])
         @endforeach
      </div>
      {{-- <div class="container section-title-container cust-b" >
            <h3 class="section-title section-title-normal"><b></b><span class="section-title-main" style="color:rgb(216, 150, 84);">Weekly Featured Products</span><b></b><a href="lashes/shop/" target="">Browse all<i class="icon-angle-right" ></i></a></h3>
      </div>
      <div class="row  equalize-box large-columns-5 medium-columns-3 small-columns-2 row-small slider row-slider slider-nav-reveal slider-nav-push"  data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
            <div class="product-small col has-hover product type-product post-646 status-publish first instock product_cat-colored-eyelash-extensions product_tag-colored-eyelash product_tag-2-tone-lash product_tag-lash-two-tone has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes wvs-pro-product wvs-pro-after-cart-button">
            <div class="col-inner">
               <div class="badge-container absolute left top z-1"></div>
               <div class="product-small box ">
                  <div class="box-image">
                        <div class="image-fade_in_back">
                        <a href="https://momilash.com/2-tone-lash/" aria-label="2 Tone Lash Colored Eyelash Extensions">
                        <img width="300" height="300" src="https://momilash.com/wp-content/uploads/2021/05/2tone-lash-blackred-momilash-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wvs-attachment-image" alt="2tone lash black red momilash" loading="lazy" srcset="https://momilash.com/wp-content/uploads/2021/05/2tone-lash-blackred-momilash-300x300.png 300w, https://momilash.com/wp-content/uploads/2021/05/2tone-lash-blackred-momilash-400x400.png 400w, https://momilash.com/wp-content/uploads/2021/05/2tone-lash-blackred-momilash-280x280.png 280w, https://momilash.com/wp-content/uploads/2021/05/2tone-lash-blackred-momilash-600x600.png 600w, https://momilash.com/wp-content/uploads/2021/05/2tone-lash-blackred-momilash-100x100.png 100w, https://momilash.com/wp-content/uploads/2021/05/2tone-lash-blackred-momilash.png 750w" sizes="(max-width: 300px) 100vw, 300px" />				</a>
                        </div>
                        <div class="image-tools is-small top right show-on-hover">
                        </div>
                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                        </div>
                        <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                        <a class="quick-view" data-prod="646" href="#quick-view">Quick View</a>			
                        </div>
                  </div>
                  <div class="box-text box-text-products">
                        <div class="title-wrapper">
                        <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                           Colored Eyelash Extensions		
                        </p>
                        <p class="name product-title woocommerce-loop-product__title"><a href="https://momilash.com/2-tone-lash/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">2 Tone Lash Colored Eyelash Extensions</a></p>
                        </div>
                        <div class="price-wrapper">
                        <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>5.80</bdi></span></span>
                        </div>
                        <div class="add-to-cart-button">
                        <div class="add-to-cart-button"><a href="https://momilash.com/2-tone-lash/" class="primary is-small mb-0 product_type_variable add_to_cart_button button primary is-flat mb-0 is-small is-flat" data-product_id="646" data-product_sku="" data-quantity="1" rel="nofollow">Select options</a></div>
                        </div>
                  </div>
               </div>
            </div>
            </div>
            <div class="product-small col has-hover product type-product post-659 status-publish instock product_cat-volume-eyelash-extensions product_tag-extensions product_tag-silk product_tag-silk-lash has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes wvs-pro-product wvs-pro-after-cart-button">
            <div class="col-inner">
               <div class="badge-container absolute left top z-1"></div>
               <div class="product-small box ">
                  <div class="box-image">
                        <div class="image-fade_in_back">
                        <a href="https://momilash.com/silk-lash/" aria-label="Silk Lash Eyelash Extensions">
                        <img width="300" height="300" src="https://momilash.com/wp-content/uploads/2021/05/silk-lash-momilash-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wvs-attachment-image" alt="silk lash momilash" loading="lazy" srcset="https://momilash.com/wp-content/uploads/2021/05/silk-lash-momilash-300x300.png 300w, https://momilash.com/wp-content/uploads/2021/05/silk-lash-momilash-400x400.png 400w, https://momilash.com/wp-content/uploads/2021/05/silk-lash-momilash-280x280.png 280w, https://momilash.com/wp-content/uploads/2021/05/silk-lash-momilash-600x600.png 600w, https://momilash.com/wp-content/uploads/2021/05/silk-lash-momilash-100x100.png 100w, https://momilash.com/wp-content/uploads/2021/05/silk-lash-momilash.png 750w" sizes="(max-width: 300px) 100vw, 300px" /><img width="300" height="300" src="https://momilash.com/wp-content/uploads/2020/04/silk-lash-5-300x300.jpg" class="show-on-hover absolute fill hide-for-small back-image wvs-attachment-image" alt="silk lash" loading="lazy" srcset="https://momilash.com/wp-content/uploads/2020/04/silk-lash-5-300x300.jpg 300w, https://momilash.com/wp-content/uploads/2020/04/silk-lash-5-280x280.jpg 280w, https://momilash.com/wp-content/uploads/2020/04/silk-lash-5-100x100.jpg 100w" sizes="(max-width: 300px) 100vw, 300px" />				</a>
                        </div>
                        <div class="image-tools is-small top right show-on-hover">
                        </div>
                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                        </div>
                        <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                        <a class="quick-view" data-prod="659" href="#quick-view">Quick View</a>			
                        </div>
                  </div>
                  <div class="box-text box-text-products">
                        <div class="title-wrapper">
                        <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                           Volume Eyelash Extensions		
                        </p>
                        <p class="name product-title woocommerce-loop-product__title"><a href="https://momilash.com/silk-lash/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Silk Lash Eyelash Extensions</a></p>
                        </div>
                        <div class="price-wrapper">
                        <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>4.90</bdi></span></span>
                        </div>
                        <div class="add-to-cart-button">
                        <div class="add-to-cart-button"><a href="https://momilash.com/silk-lash/" class="primary is-small mb-0 product_type_variable add_to_cart_button button primary is-flat mb-0 is-small is-flat" data-product_id="659" data-product_sku="" data-quantity="1" rel="nofollow">Select options</a></div>
                        </div>
                  </div>
               </div>
            </div>
            </div>
            <div class="product-small col has-hover product type-product post-665 status-publish instock product_cat-premade-fan-eyelash-extensions product_tag-190 product_tag-7d product_tag-7d-lash product_tag-fan has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes wvs-pro-product wvs-pro-after-cart-button">
            <div class="col-inner">
               <div class="badge-container absolute left top z-1"></div>
               <div class="product-small box ">
                  <div class="box-image">
                        <div class="image-fade_in_back">
                        <a href="https://momilash.com/7d-lash/" aria-label="7D Lash Premade Fan EyeLash">
                        <img width="300" height="300" src="https://momilash.com/wp-content/uploads/2021/05/7d-lash-momilash-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wvs-attachment-image" alt="7d lash momilash" loading="lazy" srcset="https://momilash.com/wp-content/uploads/2021/05/7d-lash-momilash-300x300.png 300w, https://momilash.com/wp-content/uploads/2021/05/7d-lash-momilash-400x400.png 400w, https://momilash.com/wp-content/uploads/2021/05/7d-lash-momilash-280x280.png 280w, https://momilash.com/wp-content/uploads/2021/05/7d-lash-momilash-600x600.png 600w, https://momilash.com/wp-content/uploads/2021/05/7d-lash-momilash-100x100.png 100w, https://momilash.com/wp-content/uploads/2021/05/7d-lash-momilash.png 750w" sizes="(max-width: 300px) 100vw, 300px" /><img width="300" height="300" src="https://momilash.com/wp-content/uploads/2019/10/5D3_7947-300x300.png" class="show-on-hover absolute fill hide-for-small back-image wvs-attachment-image" alt="Momi Lash 7D Lashes" loading="lazy" srcset="https://momilash.com/wp-content/uploads/2019/10/5D3_7947-300x300.png 300w, https://momilash.com/wp-content/uploads/2019/10/5D3_7947-280x280.png 280w, https://momilash.com/wp-content/uploads/2019/10/5D3_7947-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" />				</a>
                        </div>
                        <div class="image-tools is-small top right show-on-hover">
                        </div>
                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                        </div>
                        <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                        <a class="quick-view" data-prod="665" href="#quick-view">Quick View</a>			
                        </div>
                  </div>
                  <div class="box-text box-text-products">
                        <div class="title-wrapper">
                        <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                           Pre-Made Fan Eyelash Extensions		
                        </p>
                        <p class="name product-title woocommerce-loop-product__title"><a href="https://momilash.com/7d-lash/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">7D Lash Premade Fan EyeLash</a></p>
                        </div>
                        <div class="price-wrapper">
                        <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>10.00</bdi></span></span>
                        </div>
                        <div class="add-to-cart-button">
                        <div class="add-to-cart-button"><a href="https://momilash.com/7d-lash/" class="primary is-small mb-0 product_type_variable add_to_cart_button button primary is-flat mb-0 is-small is-flat" data-product_id="665" data-product_sku="" data-quantity="1" rel="nofollow">Select options</a></div>
                        </div>
                  </div>
               </div>
            </div>
            </div>
            <div class="product-small col has-hover product type-product post-651 status-publish last instock product_cat-colored-eyelash-extensions product_tag-color-lash-silver product_tag-silver has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes wvs-pro-product wvs-pro-after-cart-button">
            <div class="col-inner">
               <div class="badge-container absolute left top z-1"></div>
               <div class="product-small box ">
                  <div class="box-image">
                        <div class="image-fade_in_back">
                        <a href="https://momilash.com/color-lash-silver/" aria-label="Color Lash Silver Eyelash Extensions">
                        <img width="300" height="300" src="https://momilash.com/wp-content/uploads/2021/05/colorlash-silver-momilash-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wvs-attachment-image" alt="color lash silver momilash" loading="lazy" srcset="https://momilash.com/wp-content/uploads/2021/05/colorlash-silver-momilash-300x300.png 300w, https://momilash.com/wp-content/uploads/2021/05/colorlash-silver-momilash-400x400.png 400w, https://momilash.com/wp-content/uploads/2021/05/colorlash-silver-momilash-280x280.png 280w, https://momilash.com/wp-content/uploads/2021/05/colorlash-silver-momilash-600x600.png 600w, https://momilash.com/wp-content/uploads/2021/05/colorlash-silver-momilash-100x100.png 100w, https://momilash.com/wp-content/uploads/2021/05/colorlash-silver-momilash.png 750w" sizes="(max-width: 300px) 100vw, 300px" />				</a>
                        </div>
                        <div class="image-tools is-small top right show-on-hover">
                        </div>
                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                        </div>
                        <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                        <a class="quick-view" data-prod="651" href="#quick-view">Quick View</a>			
                        </div>
                  </div>
                  <div class="box-text box-text-products">
                        <div class="title-wrapper">
                        <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                           Colored Eyelash Extensions		
                        </p>
                        <p class="name product-title woocommerce-loop-product__title"><a href="https://momilash.com/color-lash-silver/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Color Lash Silver Eyelash Extensions</a></p>
                        </div>
                        <div class="price-wrapper">
                        <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>5.80</bdi></span></span>
                        </div>
                        <div class="add-to-cart-button">
                        <div class="add-to-cart-button"><a href="https://momilash.com/color-lash-silver/" class="primary is-small mb-0 product_type_variable add_to_cart_button button primary is-flat mb-0 is-small is-flat" data-product_id="651" data-product_sku="" data-quantity="1" rel="nofollow">Select options</a></div>
                        </div>
                  </div>
               </div>
            </div>
            </div>
            <div class="product-small col has-hover product type-product post-649 status-publish first instock product_cat-colored-eyelash-extensions product_tag-color-lash-gold product_tag-gold has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes wvs-pro-product wvs-pro-after-cart-button">
            <div class="col-inner">
               <div class="badge-container absolute left top z-1"></div>
               <div class="product-small box ">
                  <div class="box-image">
                        <div class="image-fade_in_back">
                        <a href="https://momilash.com/color-lash-gold/" aria-label="Color Lash Gold Colored Eyelash Extensions">
                        <img width="300" height="300" src="https://momilash.com/wp-content/uploads/2021/05/colorlash-gold-momilash-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wvs-attachment-image" alt="color lash gold momilash" loading="lazy" srcset="https://momilash.com/wp-content/uploads/2021/05/colorlash-gold-momilash-300x300.png 300w, https://momilash.com/wp-content/uploads/2021/05/colorlash-gold-momilash-400x400.png 400w, https://momilash.com/wp-content/uploads/2021/05/colorlash-gold-momilash-280x280.png 280w, https://momilash.com/wp-content/uploads/2021/05/colorlash-gold-momilash-600x600.png 600w, https://momilash.com/wp-content/uploads/2021/05/colorlash-gold-momilash-100x100.png 100w, https://momilash.com/wp-content/uploads/2021/05/colorlash-gold-momilash.png 750w" sizes="(max-width: 300px) 100vw, 300px" />				</a>
                        </div>
                        <div class="image-tools is-small top right show-on-hover">
                        </div>
                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                        </div>
                        <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                        <a class="quick-view" data-prod="649" href="#quick-view">Quick View</a>			
                        </div>
                  </div>
                  <div class="box-text box-text-products">
                        <div class="title-wrapper">
                        <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                           Colored Eyelash Extensions		
                        </p>
                        <p class="name product-title woocommerce-loop-product__title"><a href="https://momilash.com/color-lash-gold/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Color Lash Gold Colored Eyelash Extensions</a></p>
                        </div>
                        <div class="price-wrapper">
                        <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>5.80</bdi></span></span>
                        </div>
                        <div class="add-to-cart-button">
                        <div class="add-to-cart-button"><a href="https://momilash.com/color-lash-gold/" class="primary is-small mb-0 product_type_variable add_to_cart_button button primary is-flat mb-0 is-small is-flat" data-product_id="649" data-product_sku="" data-quantity="1" rel="nofollow">Select options</a></div>
                        </div>
                  </div>
               </div>
            </div>
            </div>
            <div class="product-small col has-hover product type-product post-658 status-publish instock product_cat-volume-eyelash-extensions product_tag-extensions product_tag-mink product_tag-mink-lash has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes wvs-pro-product wvs-pro-after-cart-button">
            <div class="col-inner">
               <div class="badge-container absolute left top z-1"></div>
               <div class="product-small box ">
                  <div class="box-image">
                        <div class="image-fade_in_back">
                        <a href="https://momilash.com/mink-lash/" aria-label="Mink Lash, Glamorous Lashes">
                        <img width="300" height="300" src="https://momilash.com/wp-content/uploads/2021/05/mink-lash-momilash-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wvs-attachment-image" alt="mink lash momilash" loading="lazy" srcset="https://momilash.com/wp-content/uploads/2021/05/mink-lash-momilash-300x300.png 300w, https://momilash.com/wp-content/uploads/2021/05/mink-lash-momilash-400x400.png 400w, https://momilash.com/wp-content/uploads/2021/05/mink-lash-momilash-280x280.png 280w, https://momilash.com/wp-content/uploads/2021/05/mink-lash-momilash-600x600.png 600w, https://momilash.com/wp-content/uploads/2021/05/mink-lash-momilash-100x100.png 100w, https://momilash.com/wp-content/uploads/2021/05/mink-lash-momilash.png 750w" sizes="(max-width: 300px) 100vw, 300px" /><img width="300" height="300" src="https://momilash.com/wp-content/uploads/2019/10/mink-lash-momi-eyelash-4-300x3001-1.jpg" class="show-on-hover absolute fill hide-for-small back-image wvs-attachment-image" alt="Mink lash momi eyelash" loading="lazy" srcset="https://momilash.com/wp-content/uploads/2019/10/mink-lash-momi-eyelash-4-300x3001-1.jpg 300w, https://momilash.com/wp-content/uploads/2019/10/mink-lash-momi-eyelash-4-300x3001-1-280x280.jpg 280w, https://momilash.com/wp-content/uploads/2019/10/mink-lash-momi-eyelash-4-300x3001-1-100x100.jpg 100w" sizes="(max-width: 300px) 100vw, 300px" />				</a>
                        </div>
                        <div class="image-tools is-small top right show-on-hover">
                        </div>
                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                        </div>
                        <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                        <a class="quick-view" data-prod="658" href="#quick-view">Quick View</a>			
                        </div>
                  </div>
                  <div class="box-text box-text-products">
                        <div class="title-wrapper">
                        <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                           Volume Eyelash Extensions		
                        </p>
                        <p class="name product-title woocommerce-loop-product__title"><a href="https://momilash.com/mink-lash/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Mink Lash, Glamorous Lashes</a></p>
                        </div>
                        <div class="price-wrapper">
                        <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>4.90</bdi></span></span>
                        </div>
                        <div class="add-to-cart-button">
                        <div class="add-to-cart-button"><a href="https://momilash.com/mink-lash/" class="primary is-small mb-0 product_type_variable add_to_cart_button button primary is-flat mb-0 is-small is-flat" data-product_id="658" data-product_sku="" data-quantity="1" rel="nofollow">Select options</a></div>
                        </div>
                  </div>
               </div>
            </div>
            </div>
      </div> --}}
      <div id="gap-132850732" class="gap-element clearfix" style="display:block; height:auto;">
            <style>
            #gap-132850732 {
            padding-top: 50px;
            }
            </style>
      </div>
      @foreach ($bannerAds as $banner)
         <div class="banner has-hover" id="banner-832900524">
               <div class="banner-inner fill">
                  <div class="banner-bg fill" >
                     <div class="bg fill bg-fill ">
                        <a href="{{$banner->name}}">
                           <img src="{{$banner->image}}" alt="" loading="lazy">
                        </a>
                     </div>
                     <div class="overlay"></div>
                  </div>
               </div>
               <style>
               #banner-832900524 {
               padding-top: 400px;
               }
               /* #banner-832900524 .bg.bg-loaded {
               background-image: url(https://momilash.com/wp-content/uploads/2021/12/1000x750.jpg);
               } */
               #banner-832900524 .overlay {
               background-color: rgba(0, 0, 0, 0.08);
               }
               #banner-832900524 .bg {
               background-position: 49% 52%;
               }
               </style>
         </div>
      @endforeach
      <div id="gap-1106590762" class="gap-element clearfix" style="display:block; height:auto;">
            <style>
            #gap-1106590762 {
            padding-top: 44px;
            }
            </style>
      </div>
      <div class="row large-columns-4 medium-columns-3 small-columns-2 row-small slider row-slider slider-nav-reveal slider-nav-push"  data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
         @foreach ($typeProduct as $type)
            <div class="product-category col" >
               <div class="col-inner">
                  <a href="{{route('allListProType', ['cate'=>$type->cate_slug, 'type'=>$type->slug])}}">
                     <div class="box box-category has-hover box-bounce ">
                           <div class="box-image" >
                           <div class="image-cover" style="padding-top:107%;">
                              <img src="{{$type->avatar}}" alt="{{languageName($type->name)}}" width="300" height="300" loading="lazy" />                                                      
                           </div>
                           </div>
                           <div class="box-text text-center" >
                           <div class="box-text-inner">
                              <h5 class="uppercase header-title">
                                 {{languageName($type->name)}}                      
                              </h5>
                              <p class="is-xsmall uppercase count ">
                                 {{count($type->products)}} Products                      
                              </p>
                           </div>
                           </div>
                     </div>
                  </a>
               </div>
            </div>
         @endforeach
      </div>
      <section class="section" id="section_708655458">
            <div class="bg section-bg fill bg-fill  bg-loaded" >
            </div>
            <div class="section-content relative">
            <div class="banner has-hover" id="banner-1424541053">
               <div class="banner-inner fill">
                  <div class="banner-bg fill" >
                        <div class="bg fill bg-fill "></div>
                        <div class="overlay"></div>
                  </div>
                  <div class="banner-layers container">
                        <div class="fill banner-link"></div>
                        <div id="text-box-293061907" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                        <div class="text-box-content text dark">
                           <div class="text-inner text-left">
                              <div id="text-1934394187" class="text">
                                    <h2 class="uppercase">Our company</h2>
                                    <p>HUNGNUONG EYELASH CO.,LTD and commitment to high-quality products</p>
                                    <style>
                                    #text-1934394187 {
                                    text-align: left;
                                    color: rgb(0, 0, 0);
                                    }
                                    #text-1934394187 > * {
                                    color: rgb(0, 0, 0);
                                    }
                                    </style>
                              </div>
                           </div>
                        </div>
                        <style>
                           #text-box-293061907 {
                           width: 100%;
                           }
                           #text-box-293061907 .text-box-content {
                           font-size: 100%;
                           }
                        </style>
                        </div>
                  </div>
               </div>
               <style>
                  #banner-1424541053 {
                  padding-top: 400px;
                  }
                  #banner-1424541053 .bg.bg-loaded {
                  background-image: url({{url('frontend/images/momilash-policy.png')}});
                  }
                  #banner-1424541053 .overlay {
                  background-color: rgba(0, 0, 0, 0);
                  }
               </style>
            </div>
            </div>
            <style>
            #section_708655458 {
            padding-top: 30px;
            padding-bottom: 30px;
            }
            </style>
      </section>
      <section class="section comapny-sec" id="section_2054851010">
            <div class="bg section-bg fill bg-fill  bg-loaded" >
            </div>
            <div class="section-content relative">
            <div class="row"  id="row-1873849319">
               <div id="col-1797922446" class="col medium-3 small-6 large-3"  >
                  <div class="col-inner text-center box-shadow-1 box-shadow-3-hover" style="background-color:rgb(255, 255, 255);" >
                        <div class="icon-box featured-box icon-box-top text-left"  >
                        <div class="icon-box-img" style="width: 40px">
                           <div class="icon">
                              <div class="icon-inner" >
                                    <img width="400" height="400" src="{{url('frontend/images/diversified-400x400.png')}}" class="attachment-medium size-medium wvs-attachment-image" alt="Diversified" loading="lazy" srcset="{{url('frontend/images/diversified-400x400.png')}} 400w, {{url('frontend/images/diversified-400x400.png')}} 280w, {{url('frontend/images/diversified-400x400.png')}} 300w, {{url('frontend/images/diversified-400x400.png')}} 100w, {{url('frontend/images/diversified-400x400.png')}} 468w" sizes="(max-width: 400px) 100vw, 400px" />					
                              </div>
                           </div>
                        </div>
                        <div class="icon-box-text last-reset">
                           <div id="text-2271191175" class="text">
                              <h3>Diversified</h3>
                              <style>
                                    #text-2271191175 {
                                    text-align: center;
                                    color: rgb(0, 0, 0);
                                    }
                                    #text-2271191175 > * {
                                    color: rgb(0, 0, 0);
                                    }
                              </style>
                           </div>
                        </div>
                        </div>
                  </div>
                  <style>
                        #col-1797922446 > .col-inner {
                        padding: 20px 0px 20px 0px;
                        }
                  </style>
               </div>
               <div id="col-1812673373" class="col medium-3 small-6 large-3"  >
                  <div class="col-inner text-center box-shadow-1 box-shadow-3-hover" style="background-color:rgb(255, 255, 255);" >
                        <div class="icon-box featured-box icon-box-top text-left"  >
                        <div class="icon-box-img" style="width: 40px">
                           <div class="icon">
                              <div class="icon-inner" >
                                    <img width="400" height="400" src="{{url('frontend/images/diamond-400x400.png')}}" class="attachment-medium size-medium wvs-attachment-image" alt="Diamond" loading="lazy" srcset="{{url('frontend/images/diamond-400x400.png')}} 400w, {{url('frontend/images/diamond-400x400.png')}} 280w, {{url('frontend/images/diamond-400x400.png')}} 300w, {{url('frontend/images/diamond-400x400.png')}} 100w, {{url('frontend/images/diamond-400x400.png')}} 512w" sizes="(max-width: 400px) 100vw, 400px" />					
                              </div>
                           </div>
                        </div>
                        <div class="icon-box-text last-reset">
                           <div id="text-2015611154" class="text">
                              <h3>Handmade</h3>
                              <style>
                                    #text-2015611154 {
                                    text-align: center;
                                    color: rgb(0, 0, 0);
                                    }
                                    #text-2015611154 > * {
                                    color: rgb(0, 0, 0);
                                    }
                              </style>
                           </div>
                        </div>
                        </div>
                  </div>
                  <style>
                        #col-1812673373 > .col-inner {
                        padding: 20px 0px 20px 0px;
                        }
                  </style>
               </div>
               <div id="col-1800156253" class="col medium-3 small-6 large-3"  >
                  <div class="col-inner text-center box-shadow-1 box-shadow-3-hover" style="background-color:rgb(255, 255, 255);" >
                        <div class="icon-box featured-box icon-box-top text-left"  >
                        <div class="icon-box-img" style="width: 40px">
                           <div class="icon">
                              <div class="icon-inner" >
                                    <img width="400" height="400" src="{{url('frontend/images/private-400x400.png')}}" class="attachment-medium size-medium wvs-attachment-image" alt="Private" loading="lazy" srcset="{{url('frontend/images/private-400x400.png')}} 400w, {{url('frontend/images/private-400x400.png')}} 280w, {{url('frontend/images/private-400x400.png')}} 300w, {{url('frontend/images/private-400x400.png')}} 100w, {{url('frontend/images/private-400x400.png')}} 512w" sizes="(max-width: 400px) 100vw, 400px" />					
                              </div>
                           </div>
                        </div>
                        <div class="icon-box-text last-reset">
                           <div id="text-1187537359" class="text">
                              <h3>OEM Services</h3>
                              <style>
                                    #text-1187537359 {
                                    text-align: center;
                                    color: rgb(0, 0, 0);
                                    }
                                    #text-1187537359 > * {
                                    color: rgb(0, 0, 0);
                                    }
                              </style>
                           </div>
                        </div>
                        </div>
                  </div>
                  <style>
                        #col-1800156253 > .col-inner {
                        padding: 20px 0px 20px 0px;
                        }
                  </style>
               </div>
               <div id="col-241555059" class="col medium-3 small-6 large-3"  >
                  <div class="col-inner text-center box-shadow-1 box-shadow-3-hover" style="background-color:rgb(255, 255, 255);" >
                        <div class="icon-box featured-box icon-box-top text-left"  >
                        <div class="icon-box-img" style="width: 40px">
                           <div class="icon">
                              <div class="icon-inner" >
                                    <img width="400" height="400" src="{{url('frontend/images/quality-400x400.png')}}" class="attachment-medium size-medium wvs-attachment-image" alt="Quality" loading="lazy" srcset="{{url('frontend/images/quality-400x400.png')}} 400w, {{url('frontend/images/quality-400x400.png')}} 280w, {{url('frontend/images/quality-400x400.png')}} 300w, {{url('frontend/images/quality-400x400.png')}} 100w, {{url('frontend/images/quality-400x400.png')}} 468w" sizes="(max-width: 400px) 100vw, 400px" />					
                              </div>
                           </div>
                        </div>
                        <div class="icon-box-text last-reset">
                           <div id="text-1666205473" class="text">
                              <h3>High-Quality</h3>
                              <style>
                                    #text-1666205473 {
                                    text-align: center;
                                    color: rgb(0, 0, 0);
                                    }
                                    #text-1666205473 > * {
                                    color: rgb(0, 0, 0);
                                    }
                              </style>
                           </div>
                        </div>
                        </div>
                  </div>
                  <style>
                        #col-241555059 > .col-inner {
                        padding: 20px 0px 20px 0px;
                        }
                  </style>
               </div>
            </div>
            </div>
            <style>
            #section_2054851010 {
            padding-top: 0px;
            padding-bottom: 0px;
            background-color: rgb(245, 247, 251);
            }
            </style>
      </section>
      <section class="section" id="section_1429395919">
            <div class="bg section-bg fill bg-fill  bg-loaded" >
            </div>
            <div class="section-content relative">
            <div class="row row-large align-center row-divided"  id="row-1232154412">
               <div id="col-886497044" class="col medium-4 large-4"  >
                  <div class="col-inner"  >
                        <div class="icon-box featured-box icon-box-center text-center"  style="margin:0px 0px 0px 0px;">
                        <div class="icon-box-img has-icon-bg" style="width: 60px">
                           <div class="icon">
                              <div class="icon-inner" style="border-width:2px;">
                                    <img width="300" height="195" src="{{url('frontend/images/dummy-1-300x195.jpg')}}" class="attachment-medium size-medium wvs-attachment-image" alt="Dummy" loading="lazy" srcset="{{url('frontend/images/dummy-1-300x195.jpg')}} 300w, {{url('frontend/images/dummy-1-300x195.jpg')}} 400w" sizes="(max-width: 300px) 100vw, 300px" />					
                              </div>
                           </div>
                        </div>
                        <div class="icon-box-text last-reset">
                           <h5 class="uppercase">Long Lasting</h5>
                        </div>
                        </div>
                        <div id="text-775801518" class="text">
                        <p>We provide premium products that are one-of-a-kind that last long. Our services ensure you get what you paid for, and enjoy long lasting results.</p>
                        <style>
                           #text-775801518 {
                           text-align: center;
                           }
                        </style>
                        </div>
                  </div>
               </div>
               <div id="col-104700990" class="col medium-4 large-4"  >
                  <div class="col-inner"  >
                        <div class="icon-box featured-box icon-box-center text-center"  style="margin:0px 0px 0px 0px;">
                        <div class="icon-box-img has-icon-bg" style="width: 60px">
                           <div class="icon">
                              <div class="icon-inner" style="border-width:2px;">
                                    <img width="300" height="195" src="{{url('frontend/images/dummy-1-300x195.jpg')}}" class="attachment-medium size-medium wvs-attachment-image" alt="Dummy" loading="lazy" srcset="{{url('frontend/images/dummy-1-300x195.jpg')}} 300w, {{url('frontend/images/dummy-1-300x195.jpg')}} 400w" sizes="(max-width: 300px) 100vw, 300px" />					
                              </div>
                           </div>
                        </div>
                        <div class="icon-box-text last-reset">
                           <h5 class="uppercase">Safe and Hygiene</h5>
                           <div id="text-2369713191" class="text">
                              <p>Hygiene and Safety are not just a priority, it&#8217;s a necessity. We maintained proper hygiene and safety of our customers..</p>
                              <style>
                                    #text-2369713191 {
                                    text-align: center;
                                    }
                              </style>
                           </div>
                        </div>
                        </div>
                  </div>
               </div>
               <div id="col-2115617165" class="col medium-4 large-4"  >
                  <div class="col-inner"  >
                        <div class="icon-box featured-box icon-box-center text-center"  style="margin:0px 0px 0px 0px;">
                        <div class="icon-box-img has-icon-bg" style="width: 60px">
                           <div class="icon">
                              <div class="icon-inner" style="border-width:2px;">
                                    <img width="300" height="195" src="{{url('frontend/images/dummy-1-300x195.jpg')}}" class="attachment-medium size-medium wvs-attachment-image" alt="Dummy" loading="lazy" srcset="{{url('frontend/images/dummy-1-300x195.jpg')}} 300w, {{url('frontend/images/dummy-1-300x195.jpg')}} 400w" sizes="(max-width: 300px) 100vw, 300px" />					
                              </div>
                           </div>
                        </div>
                        <div class="icon-box-text last-reset">
                           <h5 class="uppercase">Cutting Edge Services</h5>
                           <p>Our team is 100% customer-centric. We take the time to continually educate our customers on safety standards, so you know you will get the most cutting-edge eyelash extensions.</p>
                        </div>
                        </div>
                  </div>
               </div>
            </div>
            </div>
            <style>
            #section_1429395919 {
            padding-top: 30px;
            padding-bottom: 30px;
            background-color: rgb(255, 255, 255);
            }
            </style>
      </section>
      <div class="container section-title-container cust-b" >
            <h3 class="section-title section-title-normal"><b></b><span class="section-title-main" style="color:rgb(216, 150, 84);">Blog</span><b></b><a href="{{route('allListBlog')}}" target="">View all<i class="icon-angle-right" ></i></a></h3>
      </div>
      <div class="row large-columns-4 medium-columns-1 small-columns-1">
         @foreach ($homeBlog as $blog)
            <div class="col post-item" >
               <div class="col-inner">
                  <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" class="plain">
                     <div class="box box-normal box-text-bottom box-blog-post has-hover">
                           <div class="box-image" >
                           <div class="image-cover" style="padding-top:56.25%;">
                              <img width="500" height="334" src="{{$blog->image}}" class="attachment-medium size-medium wvs-attachment-image wp-post-image" alt="{{languageName($blog->title)}}" />  							  							  						
                           </div>
                           </div>
                           <div class="box-text text-center" >
                           <div class="box-text-inner blog-post-inner">
                              <h5 class="post-title is-large ">{{languageName($blog->title)}}</h5>
                              <div class="is-divider"></div>
                              <p class="from_the_blog_excerpt desc">{{languageName($blog->description)}}</p>
                              <button href="{{route('detailBlog', ['slug'=>$blog->slug])}}" class="button primary is-gloss is-small mb-0">
                              Read More						</button>
                           </div>
                           </div>
                     </div>
                  </a>
               </div>
            </div>
         @endforeach
      </div>
   </div>
</main>
@endsection