<header id="header" class="header has-sticky sticky-jump">
   <div class="header-wrapper">
      <div id="top-bar" class="header-top hide-for-sticky">
            <div class="flex-row container">
            <div class="flex-col hide-for-medium flex-left">
               <ul class="nav nav-left medium-nav-center nav-small  nav-divided">
                  <li class="html custom html_topbar_left"><strong class="uppercase">Welcome to {{$setting->company}}
                        </strong>
                  </li>
               </ul>
            </div>
            <div class="flex-col hide-for-medium flex-center">
               <ul class="nav nav-center nav-small  nav-divided">
               </ul>
            </div>
            <div class="flex-col hide-for-medium flex-right">
               <ul class="nav top-bar-nav nav-right nav-small  nav-divided">
                  <li id="menu-item-257" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-257 menu-item-design-default"><a href="{{route('aboutUs')}}" class="nav-top-link">About</a></li>
                  <li id="menu-item-258" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-258 menu-item-design-default"><a href="{{route('allListBlog')}}" class="nav-top-link">Blog</a></li>
                  <li id="menu-item-259" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-259 menu-item-design-default"><a href="{{route('lienHe')}}" class="nav-top-link">Contact</a></li>
                  <li id="menu-item-271" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-271 menu-item-design-default"><a href="" class="nav-top-link">FAQ</a></li>
                     {{-- <li class="html custom html_nav_position_text">
                           <!-- GTranslate: https://gtranslate.io/ -->
                           <style>
                           .switcher {font-family:Arial;font-size:12pt;text-align:left;cursor:pointer;overflow:hidden;width:173px;line-height:17px;}
                           .switcher a {text-decoration:none;display:block;font-size:12pt;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;}
                           .switcher a img {vertical-align:middle;display:inline;border:0;padding:0;margin:0;opacity:0.8;}
                           .switcher a:hover img {opacity:1;}
                           .switcher .selected {background:#fff linear-gradient(180deg, #efefef 0%, #fff 70%);position:relative;z-index:9999;}
                           .switcher .selected a {border:1px solid #ccc;color:#666;padding:3px 5px;width:161px;}
                           .switcher .selected a:after {height:24px;display:inline-block;position:absolute;right:10px;width:15px;background-position:50%;background-size:11px;background-image:url("data:image/svg+xml;utf8,
                           <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 285 285'>
                              <path d='M282 76.5l-14.2-14.3a9 9 0 0 0-13.1 0L142.5 174.4 30.3 62.2a9 9 0 0 0-13.2 0L3 76.5a9 9 0 0 0 0 13.1l133 133a9 9 0 0 0 13.1 0l133-133a9 9 0 0 0 0-13z' style='fill:%23666'/>
                           </svg>
                           ");background-repeat:no-repeat;content:""!important;transition:all .2s;}
                           .switcher .selected a.open:after {-webkit-transform: rotate(-180deg);transform:rotate(-180deg);}
                           .switcher .selected a:hover {background:#fff}
                           .switcher .option {position:relative;z-index:9998;border-left:1px solid #ccc;border-right:1px solid #ccc;border-bottom:1px solid #ccc;background-color:#eee;display:none;width:171px;max-height:198px;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;overflow-y:auto;overflow-x:hidden;}
                           .switcher .option a {color:#000;padding:3px 5px;}
                           .switcher .option a:hover {background:#fff;}
                           .switcher .option a.selected {background:#fff;}
                           #selected_lang_name {float: none;}
                           .l_name {float: none !important;margin: 0;}
                           .switcher .option::-webkit-scrollbar-track{-webkit-box-shadow:inset 0 0 3px rgba(0,0,0,0.3);border-radius:5px;background-color:#f5f5f5;}
                           .switcher .option::-webkit-scrollbar {width:5px;}
                           .switcher .option::-webkit-scrollbar-thumb {border-radius:5px;-webkit-box-shadow: inset 0 0 3px rgba(0,0,0,.3);background-color:#888;}
                           </style>
                           <div class="switcher notranslate">
                           <div class="selected">
                              <a href="#" onclick="return false;"><img src="//momilash.com/wp-content/plugins/gtranslate/flags/24/en.png" height="24" width="24" alt="en" /> English</a>
                           </div>
                           <div class="option">
                              <a href="https://momilash.com" onclick="doGTranslate('en|en');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="English" class="nturl selected"><img data-gt-lazy-src="//momilash.com/wp-content/plugins/gtranslate/flags/24/en.png" height="24" width="24" alt="en" /> English</a><a href="https://momilash.com/ko/" onclick="doGTranslate('en|ko');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Korean" class="nturl"><img data-gt-lazy-src="//momilash.com/wp-content/plugins/gtranslate/flags/24/ko.png" height="24" width="24" alt="ko" /> Korean</a><a href="https://momilash.com/pt/" onclick="doGTranslate('en|pt');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Portuguese" class="nturl"><img data-gt-lazy-src="//momilash.com/wp-content/plugins/gtranslate/flags/24/pt.png" height="24" width="24" alt="pt" /> Portuguese</a><a href="https://momilash.com/ru/" onclick="doGTranslate('en|ru');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Russian" class="nturl"><img data-gt-lazy-src="//momilash.com/wp-content/plugins/gtranslate/flags/24/ru.png" height="24" width="24" alt="ru" /> Russian</a><a href="https://momilash.com/es/" onclick="doGTranslate('en|es');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Spanish" class="nturl"><img data-gt-lazy-src="//momilash.com/wp-content/plugins/gtranslate/flags/24/es.png" height="24" width="24" alt="es" /> Spanish</a><a href="https://momilash.com/vi/" onclick="doGTranslate('en|vi');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Vietnamese" class="nturl"><img data-gt-lazy-src="//momilash.com/wp-content/plugins/gtranslate/flags/24/vi.png" height="24" width="24" alt="vi" /> Vietnamese</a>
                           </div>
                           </div>
                           <script>
                           jQuery('.switcher .selected').click(function() {jQuery('.switcher .option a img').each(function() {if(!jQuery(this)[0].hasAttribute('src'))jQuery(this).attr('src', jQuery(this).attr('data-gt-lazy-src'))});if(!(jQuery('.switcher .option').is(':visible'))) {jQuery('.switcher .option').stop(true,true).delay(100).slideDown(500);jQuery('.switcher .selected a').toggleClass('open')}});
                           jQuery('.switcher .option').bind('mousewheel', function(e) {var options = jQuery('.switcher .option');if(options.is(':visible'))options.scrollTop(options.scrollTop() - e.originalEvent.wheelDelta/10);return false;});
                           jQuery('body').not('.switcher').click(function(e) {if(jQuery('.switcher .option').is(':visible') && e.target != jQuery('.switcher .option').get(0)) {jQuery('.switcher .option').stop(true,true).delay(100).slideUp(500);jQuery('.switcher .selected a').toggleClass('open')}});
                           </script>
                           <script>
                           function doGTranslate(lang_pair) {if(lang_pair.value)lang_pair=lang_pair.value;if(lang_pair=='')return;var lang=lang_pair.split('|')[1];if(typeof ga=='function'){ga('send', 'event', 'GTranslate', lang, location.pathname+location.search);}var plang=location.pathname.split('/')[1];if(plang.length !=2 && plang != 'zh-CN' && plang != 'zh-TW' && plang != 'hmn' && plang != 'haw' && plang != 'ceb')plang='en';if(lang == 'en')location.href=location.protocol+'//'+location.host+gt_request_uri;else location.href=location.protocol+'//'+location.host+'/'+lang+gt_request_uri;}
                           </script>
                           <script>jQuery(document).ready(function() {var lang_html = jQuery(".switcher div.option a[onclick*='|"+jQuery('html').attr('lang')+"']").html();if(typeof lang_html != "undefined")jQuery('.switcher div.selected a').html(lang_html.replace("data-gt-lazy-", ""))});</script>
                     </li> --}}
               </ul>
            </div>
            <div class="flex-col show-for-medium flex-grow">
               <ul class="nav nav-center nav-small mobile-nav  nav-divided">
                  <li class="html custom html_topbar_left"><strong class="uppercase">Welcome to {{$setting->company}}
                        </strong>
                  </li>
               </ul>
            </div>
            </div>
      </div>
      <div id="masthead" class="header-main ">
            <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
            <!-- Logo -->
            <div id="logo" class="flex-col logo">
               <!-- Header logo -->
               <a href="{{route('home')}}" title="{{$setting->company}}" rel="home">
               <img width="200" height="76" src="{{$setting->logo}}" class="header_logo header-logo" alt="{{$setting->company}}"/><img  width="200" height="76" src="{{$setting->logo}}" class="header-logo-dark" alt="{{$setting->company}}"/></a>
            </div>
            <!-- Mobile Left Elements -->
            <div class="flex-col show-for-medium flex-left">
               <ul class="mobile-nav nav nav-left ">
                  <li class="nav-icon has-icon">
                        <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">
                        <i class="icon-menu" ></i>
                        <span class="menu-title uppercase hide-for-small">Menu</span>		</a>
                  </li>
               </ul>
            </div>
            <!-- Left Elements -->
            <div class="flex-col hide-for-medium flex-left
               flex-grow">
               <ul class="header-nav header-nav-main nav nav-left  nav-uppercase" >
                  <li class="header-search-form search-form html relative has-icon">
                        <div class="header-search-form-wrapper">
                        <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                           <form role="search" method="get" class="searchform" action="https://momilash.com/">
                              <div class="flex-row relative">
                                    <div class="flex-col search-form-categories">
                                    <select class="search_categories resize-select mb-0" name="product_cat">
                                       <option value="" selected='selected'>All</option>
                                       <option value="volume-eyelash-extensions">Volume Eyelash Extensions</option>
                                       <option value="colored-eyelash-extensions">Colored Eyelash Extensions</option>
                                       <option value="premade-fan-eyelash-extensions">Pre-Made Fan Eyelash Extensions</option>
                                       <option value="mellow-eyelashes">Mellow Eyelashes</option>
                                       <option value="flare-eyelashes">Flare Eyelashes</option>
                                       <option value="cleansing-collection">Cleansing Collection</option>
                                       <option value="eyelash-glue-manufacturer">Glue Collection</option>
                                       <option value="cream-remover-pack">Cream Remover Pack</option>
                                       <option value="primer-collection">Primer Collection</option>
                                       <option value="gel-remover-pack">Gel Remover Pack</option>
                                       <option value="other-liquid-products">Other Liquid Products</option>
                                    </select>
                                    </div>
                                    <div class="flex-col flex-grow">
                                    <label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
                                    <input type="search" id="woocommerce-product-search-field-0" class="search-field mb-0" placeholder="Search&hellip;" value="" name="s" />
                                    <input type="hidden" name="post_type" value="product" />
                                    </div>
                                    <div class="flex-col">
                                    <button type="submit" value="Search" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
                                    <i class="icon-search" ></i>			</button>
                                    </div>
                              </div>
                              <div class="live-search-results text-left z-top"></div>
                           </form>
                        </div>
                        </div>
                  </li>
               </ul>
            </div>
            <!-- Right Elements -->
            <div class="flex-col hide-for-medium flex-right">
               <ul class="header-nav header-nav-main nav nav-right  nav-uppercase">
                  {{-- <li class="header-divider"></li>
                  <li class="account-item has-icon
                        "
                        >
                        <a href="https://momilash.com/my-account/"
                        class="nav-top-link nav-top-not-logged-in is-small"
                        data-open="#login-form-popup"  >
                        <i class="icon-user" ></i>
                        </a>
                  </li> --}}
                  <li class="header-divider"></li>
                  <li class="cart-item has-icon has-dropdown">
                        <a href="https://momilash.com/cart/" title="Cart" class="header-cart-link is-small">
                        <i class="icon-shopping-basket"
                        data-icon-label="0">
                        </i>
                        </a>
                        <ul class="nav-dropdown nav-dropdown-simple">
                        <li class="html widget_shopping_cart">
                           <div class="widget_shopping_cart_content">
                              <p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>
                           </div>
                        </li>
                        </ul>
                  </li>
               </ul>
            </div>
            <!-- Mobile Right Elements -->
            <div class="flex-col show-for-medium flex-right">
               <ul class="mobile-nav nav nav-right ">
                  {{-- <li class="account-item has-icon">
                        <a href="https://momilash.com/my-account/"
                        class="account-link-mobile is-small" title="My account">
                        <i class="icon-user" ></i>	</a>
                  </li> --}}
                  <li class="cart-item has-icon">
                        <a href="https://momilash.com/cart/" class="header-cart-link off-canvas-toggle nav-top-link is-small" data-open="#cart-popup" data-class="off-canvas-cart" title="Cart" data-pos="right">
                        <i class="icon-shopping-basket"
                        data-icon-label="0">
                        </i>
                        </a>
                        <!-- Cart Sidebar Popup -->
                        <div id="cart-popup" class="mfp-hide widget_shopping_cart">
                        <div class="cart-popup-inner inner-padding">
                           <div class="cart-popup-title text-center">
                              <h4 class="uppercase">Cart</h4>
                              <div class="is-divider"></div>
                           </div>
                           <div class="widget_shopping_cart_content">
                              <p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>
                           </div>
                           <div class="cart-sidebar-content relative"></div>
                        </div>
                        </div>
                  </li>
               </ul>
            </div>
            </div>
            <div class="container">
            <div class="top-divider full-width"></div>
            </div>
      </div>
      <div id="wide-nav" class="header-bottom wide-nav nav-dark hide-for-medium">
            <div class="flex-row container">
            <div class="flex-col hide-for-medium flex-left">
               <ul class="nav header-nav header-bottom-nav nav-left  nav-box nav-uppercase">
                  <li id="menu-item-286" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-67 current_page_item menu-item-286 active menu-item-design-default"><a href="{{route('home')}}" aria-current="page" class="nav-top-link">Home</a></li>
                  <li id="menu-item-441" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-441 menu-item-design-default has-dropdown">
                        <a href="#" class="nav-top-link">Products<i class="icon-angle-down" ></i></a>
                        <ul class="sub-menu nav-dropdown nav-dropdown-simple">
                           @foreach ($categoryhome as $cate)
                              <li id="menu-item-9076" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-9076 nav-dropdown-col">
                                 <a href="{{route('allListProCate', ['cate'=>$cate->slug])}}">{{languageName($cate->name)}}</a>
                                 @if (count($cate->typeCate) > 0)
                                    <ul class="sub-menu nav-column nav-dropdown-simple">
                                       @foreach ($cate->typeCate as $type)
                                          <li id="menu-item-9081" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-9081"><a href="{{route('allListProType', ['cate'=>$type->cate_slug, 'type'=>$type->slug])}}">{{languageName($type->name)}}</a></li>
                                       @endforeach
                                    </ul>
                                 @endif
                              </li>
                           @endforeach
                        {{-- <li id="menu-item-9082" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-9082 nav-dropdown-col">
                           <a href="#">Eyelash Glue / Primer</a>
                           <ul class="sub-menu nav-column nav-dropdown-simple">
                              <li id="menu-item-9083" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-9083"><a href="https://momilash.com/eyelash-glue-manufacturer/">Glue Collection</a></li>
                              <li id="menu-item-9084" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-9084"><a href="https://momilash.com/primer-collection/">Primer Collection</a></li>
                           </ul>
                        </li>
                        <li id="menu-item-9085" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-9085 nav-dropdown-col">
                           <a href="#">Remover Collection</a>
                           <ul class="sub-menu nav-column nav-dropdown-simple">
                              <li id="menu-item-9086" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-9086"><a href="https://momilash.com/cream-remover-pack/">Cream Remover Pack</a></li>
                              <li id="menu-item-9087" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-9087"><a href="https://momilash.com/gel-remover-pack/">Gel Remover Pack</a></li>
                           </ul>
                        </li>
                        <li id="menu-item-9088" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9088"><a href="https://momilash.com/cleansing-collection/">Cleansing Collection</a></li>
                        <li id="menu-item-9589" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9589"><a href="https://momilash.com/other-liquid-products/">Other Liquid Products</a></li> --}}
                        </ul>
                  </li>
                  <li id="menu-item-599" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-599 menu-item-design-default"><a href="{{route('lienHe')}}" class="nav-top-link">Contact</a></li>
                  <li id="menu-item-532" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-532 menu-item-design-default"><a href="{{route('aboutUs')}}" class="nav-top-link">About Us</a></li>
                  <li id="menu-item-9198" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-9198 menu-item-design-default has-dropdown">
                        <a href="#" class="nav-top-link">More<i class="icon-angle-down" ></i></a>
                        <ul class="sub-menu nav-dropdown nav-dropdown-simple">
                        <li id="menu-item-9199" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9199"><a href="https://momilash.com/payment-methods/">Payment Methods</a></li>
                        <li id="menu-item-9200" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9200"><a href="https://momilash.com/terms-and-conditions/">Terms and Conditions</a></li>
                        <li id="menu-item-9202" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-9202"><a href="https://momilash.com/privacy-policy/">Privacy Policy</a></li>
                        <li id="menu-item-9203" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9203"><a href="https://momilash.com/faq/">FAQ</a></li>
                        <li id="menu-item-9204" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9204"><a href="https://momilash.com/blog/">Blog</a></li>
                        </ul>
                  </li>
               </ul>
            </div>
            <div class="flex-col hide-for-medium flex-right flex-grow">
               <ul class="nav header-nav header-bottom-nav nav-right  nav-box nav-uppercase">
                  <li class="header-contact-wrapper">
                        <ul id="header-contact" class="nav nav-divided nav-uppercase header-contact">
                        <li class="">
                           <a href="mailto:{{$setting->email}}" class="tooltip" title="{{$setting->email}}">
                           <i class="icon-envelop" style="font-size:16px;"></i>			       <span>
                           Contact			       </span>
                           </a>
                        </li>
                        <li class="">
                           <a class="tooltip" title="07:30 - 16:30 ">
                           <i class="icon-clock" style="font-size:16px;"></i>			        <span>07:30 - 16:30</span>
                           </a>
                        </li>
                        <li class="">
                           <a href="tel:{{$setting->phone1}}" class="tooltip" title="{{$setting->phone1}}">
                           <i class="icon-phone" style="font-size:16px;"></i>			      <span>{{$setting->phone1}}</span>
                           </a>
                        </li>
                        </ul>
                  </li>
               </ul>
            </div>
            </div>
      </div>
      <div class="header-bg-container fill">
            <div class="header-bg-image fill"></div>
            <div class="header-bg-color fill"></div>
      </div>
   </div>
</header>