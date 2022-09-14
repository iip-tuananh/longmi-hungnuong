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
               <div class="social-icons follow-icons" ><a href="{{$setting->facebook}}" target="_blank" data-label="Facebook" rel="noopener noreferrer nofollow" class="icon button circle is-outline facebook tooltip" title="Follow on Facebook" aria-label="Follow on Facebook"><i class="icon-facebook" ></i></a><a href="{{$setting->google}}" target="_blank" rel="noopener noreferrer nofollow" data-label="Instagram" class="icon button circle is-outline  instagram tooltip" title="Follow on Instagram" aria-label="Follow on Instagram"><i class="icon-instagram" ></i></a><a href="{{$setting->GA}}" target="_blank" data-label="Twitter" rel="noopener noreferrer nofollow" class="icon button circle is-outline  twitter tooltip" title="Follow on Twitter" aria-label="Follow on Twitter"><i class="icon-twitter" ></i></a><a href="{{$setting->fbPixel}}" target="_blank" rel="noopener noreferrer nofollow" data-label="LinkedIn" class="icon button circle is-outline  linkedin tooltip" title="Follow on LinkedIn" aria-label="Follow on LinkedIn"><i class="icon-linkedin" ></i></a></div>
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
                           <form role="search" method="post" class="searchform" action="{{route('search_result')}}">
                              @csrf
                              <div class="flex-row relative">
                                    <div class="flex-col search-form-categories">
                                    <select class="search_categories resize-select mb-0" name="product_cate">
                                       <option value="" selected='selected'>All</option>
                                       @foreach ($typeProduct as $type)
                                       <option value="{{$type->slug}}">{{languageName($type->name)}}</option>
                                       @endforeach
                                    </select>
                                    </div>
                                    <div class="flex-col flex-grow">
                                    <label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
                                    <input type="search" id="woocommerce-product-search-field-0" class="search-field mb-0" placeholder="Search&hellip;" value="" name="keyword" />
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
                  <li class="header-divider"></li>
                  <li class="cart-item has-icon has-dropdown" data-url="{{route('removeCart')}}">
                     @if (count($cartcontent) > 0)
                        <a href="{{route('listCart')}}" title="Cart" class="header-cart-link is-small">
                        <i class="icon-shopping-basket"
                        data-icon-label="{{count($cartcontent)}}">
                        </i>
                        </a>
                        <ul class="nav-dropdown nav-dropdown-simple" style="">
                           <li class="html widget_shopping_cart">
                              <div class="widget_shopping_cart_content">
                                 <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                    @php
                                       $totalPrice = 0;
                                    @endphp
                                    @foreach ($cartcontent as $cart)
                                       @php
                                          $discountPrice = $cart['price'] - $cart['price'] * ($cart['discount'] / 100);
                                          $totalPrice += $discountPrice * $cart['quantity'];
                                       @endphp
                                       <li class="woocommerce-mini-cart-item mini_cart_item">
                                          <a href="javascript:void(0);" class="remove remove_from_cart_button" aria-label="Remove this item" onclick="removeItem({{$cart['id']}})" >×</a>											
                                          <a href="#">
                                          <img width="300" height="300" src="{{$cart['image']}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wvs-attachment-image" alt="{{languageName($cart['name'])}}" loading="lazy" srcset="{{$cart['image']}} 300w, {{$cart['image']}} 400w, {{$cart['image']}} 799w, {{$cart['image']}} 280w, {{$cart['image']}} 768w, {{$cart['image']}} 600w, {{$cart['image']}} 100w, {{$cart['image']}} 1279w" sizes="(max-width: 300px) 100vw, 300px">{{languageName($cart['name'])}}					</a>
                                          <span class="quantity">{{$cart['quantity']}} × <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>{{$discountPrice}}</bdi></span></span>				
                                       </li>
                                    @endforeach
                                 </ul>
                                 <p class="woocommerce-mini-cart__total total">
                                    <strong>Subtotal:</strong> <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span><span id="total-price">{{$totalPrice}}</span></bdi></span>	
                                 </p>
                                 <p class="woocommerce-mini-cart__buttons buttons"><a href="{{route('listCart')}}" class="button wc-forward">View cart</a><a href="{{route('checkout')}}" class="button checkout wc-forward">Checkout</a></p>
                                 <p id="ppc-button-minicart" class="woocommerce-mini-cart__buttons buttons"></p>
                              </div>
                           </li>
                        </ul>
                     @else
                        <a href="{{route('listCart')}}" title="Cart" class="header-cart-link is-small">
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
                     @endif
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
                  <li class="cart-item has-icon" data-url="{{route('removeCart')}}">
                        <a href="{{route('listCart')}}" class="header-cart-link off-canvas-toggle nav-top-link is-small" data-open="#cart-popup" data-class="off-canvas-cart" title="Cart" data-pos="right">
                           @if (count($cartcontent) > 0)
                           <i class="icon-shopping-basket"
                           data-icon-label="{{count($cartcontent)}}">
                           </i>
                           @else
                           <i class="icon-shopping-basket"
                           data-icon-label="0">
                           </i>
                           @endif
                        </a>
                        <!-- Cart Sidebar Popup -->
                        <div id="cart-popup" class="mfp-hide widget_shopping_cart">
                        <div class="cart-popup-inner inner-padding">
                           <div class="cart-popup-title text-center">
                              <h4 class="uppercase">Cart</h4>
                              <div class="is-divider"></div>
                           </div>
                           @if (count($cartcontent) > 0)
                              <div class="widget_shopping_cart_content">
                                 <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                    @php
                                       $totalPrice = 0;
                                    @endphp
                                    @foreach ($cartcontent as $cart)
                                       @php
                                          $discountPrice = $cart['price'] - $cart['price'] * ($cart['discount'] / 100);
                                          $totalPrice += $discountPrice * $cart['quantity'];
                                       @endphp
                                       <li class="woocommerce-mini-cart-item mini_cart_item">
                                          <a href="javascript:void(0);" class="remove remove_from_cart_button" onclick="removeItem({{$cart['id']}})">×</a>											
                                          <a href="#">
                                          <img width="300" height="300" src="{{$cart['image']}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wvs-attachment-image" alt="{{languageName($cart['name'])}}" loading="lazy" srcset="{{$cart['image']}} 300w, {{$cart['image']}} 400w, {{$cart['image']}} 799w, {{$cart['image']}} 280w, {{$cart['image']}} 768w, {{$cart['image']}} 600w, {{$cart['image']}} 100w, {{$cart['image']}} 1279w" sizes="(max-width: 300px) 100vw, 300px">{{languageName($cart['name'])}}					</a>
                                          <span class="quantity">{{$cart['quantity']}} × <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>{{$discountPrice}}</bdi></span></span>				
                                       </li>
                                    @endforeach
                                 </ul>
                                 <p class="woocommerce-mini-cart__total total">
                                    <strong>Subtotal:</strong> <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span><span id="total-price">{{$totalPrice}}</span></bdi></span>	
                                 </p>
                                 <p class="woocommerce-mini-cart__buttons buttons"><a href="{{route('listCart')}}" class="button wc-forward">View cart</a><a href="{{route('checkout')}}" class="button checkout wc-forward">Checkout</a></p>
                                 <p id="ppc-button-minicart" class="woocommerce-mini-cart__buttons buttons"></p>
                              </div>
                           @else
                              <div class="widget_shopping_cart_content">
                                 <p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>
                              </div>
                           @endif
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
                        </ul>
                  </li>
                  <li id="menu-item-599" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-599 menu-item-design-default"><a href="{{route('lienHe')}}" class="nav-top-link">Contact</a></li>
                  <li id="menu-item-532" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-532 menu-item-design-default"><a href="{{route('aboutUs')}}" class="nav-top-link">About Us</a></li>
                  <li id="menu-item-532" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-532 menu-item-design-default"><a href="{{route('allListBlog')}}" class="nav-top-link">Blog</a></li>
                  <li id="menu-item-532" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-532 menu-item-design-default"><a href="{{route('listService')}}" class="nav-top-link">FAQ</a></li>
                  <li id="menu-item-9198" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-9198 menu-item-design-default has-dropdown">
                        <a href="#" class="nav-top-link">More<i class="icon-angle-down" ></i></a>
                        <ul class="sub-menu nav-dropdown nav-dropdown-simple">
                           @foreach ($helpCustomer as $item)
                              <li id="menu-item-9199" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9199"><a href="{{route('pagecontent', ['slug'=>$item->slug])}}">{{$item->title}}</a></li>
                           @endforeach
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