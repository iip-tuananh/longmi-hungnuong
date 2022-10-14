<!DOCTYPE html>
<html lang="en-US" class="loading-site no-js">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <title>@yield('title')</title>
      <meta name="description" content="">
      <meta name="keywords" content="@yield('title')"/>
      <meta name="robots" content="noodp,index,follow" />
      <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <meta name="description" content="@yield('description')" />
      <link rel="canonical" href="{{url()->current()}}" />
      <meta property="og:locale" content="vi_VN" />
      <meta property="og:type" content="article" />
      <meta property="og:title" content="@yield('title')" />
      <meta property="og:description" content="@yield('description')" />
      <meta property="og:url" content="{{url()->current()}}" />
      <meta property="og:site_name" content="ahometh.vn" />
      <meta property="og:updated_time" content="2021-08-28T22:06:30+07:00" />
      <meta property="og:image" content="@yield('image')" />
      <meta property="og:image:secure_url" content="@yield('image')" />
      <meta property="og:image:width" content="598" />
      <meta property="og:image:height" content="333" />
      <meta property="og:image:alt" content="ahome-noi-that" />
      <meta property="og:image:type" content="image/jpeg" />
      <meta name="twitter:card" content="summary_large_image" />
      <meta name="twitter:title" content="@yield('title')" />
      <meta name="twitter:description" content="@yield('description')" />
      <meta name="twitter:image" content="@yield('image')" />
      <!-- Fav Icon -->
      <link rel="icon" href="{{url(''.$setting->favicon)}}" type="image/x-icon">
         <style type="text/css">
         img.wp-smiley,
         img.emoji {
         display: inline !important;
         border: none !important;
         box-shadow: none !important;
         height: 1em !important;
         width: 1em !important;
         margin: 0 0.07em !important;
         vertical-align: -0.1em !important;
         background: none !important;
         padding: 0 !important;
         }
         </style>
         <link rel='stylesheet' id='gtranslate-style-css'  href='{{asset('frontend/css/gtranslate-style24.css')}}' type='text/css' media='all' />
         <link rel='stylesheet' id='sb_instagram_styles-css'  href='{{asset('frontend/css/sbi-styles.min.css')}}' type='text/css' media='all' />
         <style id='wp-block-library-inline-css' type='text/css'>
         :root{--wp-admin-theme-color:#007cba;--wp-admin-theme-color--rgb:0,124,186;--wp-admin-theme-color-darker-10:#006ba1;--wp-admin-theme-color-darker-10--rgb:0,107,161;--wp-admin-theme-color-darker-20:#005a87;--wp-admin-theme-color-darker-20--rgb:0,90,135;--wp-admin-border-width-focus:2px}@media (-webkit-min-device-pixel-ratio:2),(min-resolution:192dpi){:root{--wp-admin-border-width-focus:1.5px}}:root{--wp--preset--font-size--normal:16px;--wp--preset--font-size--huge:42px}:root .has-very-light-gray-background-color{background-color:#eee}:root .has-very-dark-gray-background-color{background-color:#313131}:root .has-very-light-gray-color{color:#eee}:root .has-very-dark-gray-color{color:#313131}:root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background{background:linear-gradient(135deg,#00d084,#0693e3)}:root .has-purple-crush-gradient-background{background:linear-gradient(135deg,#34e2e4,#4721fb 50%,#ab1dfe)}:root .has-hazy-dawn-gradient-background{background:linear-gradient(135deg,#faaca8,#dad0ec)}:root .has-subdued-olive-gradient-background{background:linear-gradient(135deg,#fafae1,#67a671)}:root .has-atomic-cream-gradient-background{background:linear-gradient(135deg,#fdd79a,#004a59)}:root .has-nightshade-gradient-background{background:linear-gradient(135deg,#330968,#31cdcf)}:root .has-midnight-gradient-background{background:linear-gradient(135deg,#020381,#2874fc)}.has-regular-font-size{font-size:1em}.has-larger-font-size{font-size:2.625em}.has-normal-font-size{font-size:var(--wp--preset--font-size--normal)}.has-huge-font-size{font-size:var(--wp--preset--font-size--huge)}.has-text-align-center{text-align:center}.has-text-align-left{text-align:left}.has-text-align-right{text-align:right}#end-resizable-editor-section{display:none}.aligncenter{clear:both}.items-justified-left{justify-content:flex-start}.items-justified-center{justify-content:center}.items-justified-right{justify-content:flex-end}.items-justified-space-between{justify-content:space-between}.screen-reader-text{border:0;clip:rect(1px,1px,1px,1px);-webkit-clip-path:inset(50%);clip-path:inset(50%);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;word-wrap:normal!important}.screen-reader-text:focus{background-color:#ddd;clip:auto!important;-webkit-clip-path:none;clip-path:none;color:#444;display:block;font-size:1em;height:auto;left:5px;line-height:normal;padding:15px 23px 14px;text-decoration:none;top:5px;width:auto;z-index:100000}html :where(.has-border-color),html :where([style*=border-width]){border-style:solid}html :where(img[class*=wp-image-]){height:auto;max-width:100%}
         </style>
         <link rel='stylesheet' id='contact-form-7-css'  href='{{asset('frontend/css/styles.css')}}' type='text/css' media='all' />
         <style id='woocommerce-inline-inline-css' type='text/css'>
         .woocommerce form .form-row .required { visibility: visible; }
         </style>
         <link rel='stylesheet' id='load-fa-css'  href='{{asset('frontend/css/font-awesome.min.css')}}' type='text/css' media='all' />
         <link rel='stylesheet' id='woo-variation-swatches-css'  href='{{asset('frontend/css/frontend.min.css')}}' type='text/css' media='all' />
         <style id='woo-variation-swatches-inline-css' type='text/css'>
         .variable-item:not(.radio-variable-item) { width : 30px; height : 30px; } .wvs-style-squared .button-variable-item { min-width : 30px; } .button-variable-item span { font-size : 16px; }
         </style>
         <link rel='stylesheet' id='woo-variation-swatches-theme-override-css'  href='{{asset('frontend/css/wvs-theme-override.min.css')}}' type='text/css' media='all' />
         <link rel='stylesheet' id='woo-variation-swatches-tooltip-css'  href='{{asset('frontend/css/frontend-tooltip.min.css')}}' type='text/css' media='all' />
         <style id='woo-variation-swatches-tooltip-inline-css' type='text/css'>
         .variable-items-wrapper .wvs-has-image-tooltip:before{ border-color: #db035b !important; background-color: #db035b !important;}.variable-items-wrapper [data-wvstooltip]:before, .variable-items-wrapper .wvs-has-image-tooltip:before { background-color: #db035b !important; color: #ffffff !important; }.variable-items-wrapper [data-wvstooltip]:after,.variable-items-wrapper .wvs-has-image-tooltip:after { border-top-color: #db035b !important;}
         </style>
         <link rel='stylesheet' id='woo-variation-swatches-pro-css'  href='{{asset('frontend/css/frontend-pro.min.css')}}' type='text/css' media='all' />
         <style id='woo-variation-swatches-pro-inline-css' type='text/css'>
         .wvs-archive-variation-wrapper .variable-item:not(.radio-variable-item) { width : 30px; height : 30px; } .wvs-archive-variation-wrapper .variable-items-wrapper.squared .button-variable-item, .variable-items-wrapper.squared .button-variable-item { min-width : 30px; } .wvs-archive-variation-wrapper .button-variable-item span { font-size : 16px; } .wvs-style-squared .button-variable-wrapper.rounded .button-variable-item { width : 30px !important; } .wvs-large-variable-wrapper .variable-item:not(.radio-variable-item) { width : 40px; height : 40px; } .wvs-style-squared .wvs-large-variable-wrapper .button-variable-item { min-width : 40px; } .wvs-large-variable-wrapper .button-variable-item span { font-size : 16px; } .wvs-style-squared .button-variable-wrapper.rounded.wvs-large-variable-wrapper .button-variable-item { width : 40px !important; } .woo-variation-swatches .variable-items-wrapper .variable-item:not(.radio-variable-item) { box-shadow : 0 0 0 1px #f6b9c4 !important; } .woo-variation-swatches .variable-items-wrapper .button-variable-item span, .woo-variation-swatches .variable-items-wrapper .radio-variable-item label, .woo-variation-swatches .wvs-archive-variation-wrapper .reset_variations a { color : #000000 !important; } .woo-variation-swatches .variable-items-wrapper .variable-item:not(.radio-variable-item) { background-color : #FFFFFF !important; } .woo-variation-swatches .variable-items-wrapper .button-variable-item.selected span, .woo-variation-swatches .variable-items-wrapper .radio-variable-item.selected label { color : #000000 !important; } .woo-variation-swatches .variable-items-wrapper .variable-item:not(.radio-variable-item).selected { background-color : #FFFFFF !important; } .woo-variation-swatches .variable-items-wrapper .variable-item:not(.radio-variable-item).selected { box-shadow : 0 0 0 2px #db035b !important; } .woo-variation-swatches .variable-items-wrapper .variable-item:not(.radio-variable-item):hover, .woo-variation-swatches .variable-items-wrapper .variable-item:not(.radio-variable-item).selected:hover { box-shadow : 0 0 0 3px #f6b9c4 !important; } .woo-variation-swatches .variable-items-wrapper .button-variable-item:hover span, .woo-variation-swatches .variable-items-wrapper .button-variable-item.selected:hover span, .woo-variation-swatches .variable-items-wrapper .radio-variable-item:hover label, .woo-variation-swatches .variable-items-wrapper .radio-variable-item.selected:hover label { color : #000000 !important; } .woo-variation-swatches .variable-items-wrapper .variable-item:not(.radio-variable-item):hover, .woo-variation-swatches .variable-items-wrapper .variable-item:not(.radio-variable-item).selected:hover { background-color : #FFFFFF !important; }
         </style>
         <link rel='stylesheet' id='woo-variation-swatches-pro-theme-override-css'  href='{{asset('frontend/css/wvs-pro-theme-override.min.css')}}' type='text/css' media='all' />
         <link rel='stylesheet' id='flatsome-main-css'  href='{{asset('frontend/css/flatsome.css')}}' type='text/css' media='all' />
         <style id='flatsome-main-inline-css' type='text/css'>
         @font-face {
         font-family: "fl-icons";
         font-display: block;
         src: url(https://momilash.com/wp-content/themes/flatsome/assets/css/icons/fl-icons.eot?v=3.14.2);
         src:
         url(https://momilash.com/wp-content/themes/flatsome/assets/css/icons/fl-icons.eot#iefix?v=3.14.2) format("embedded-opentype"),
         url({{asset('frontend/fonts/fl-icons.woff2')}}) format("woff2"),
         url({{asset('frontend/fonts/fl-icons.ttf')}}) format("truetype"),
         url({{asset('frontend/fonts/fl-icons.woff')}}) format("woff"),
         url(https://momilash.com/wp-content/themes/flatsome/assets/css/icons/fl-icons.svg?v=3.14.2#fl-icons) format("svg");
         }
         </style>
         <link rel='stylesheet' id='flatsome-shop-css'  href='{{asset('frontend/css/flatsome-shop.css')}}' type='text/css' media='all' />
         <link rel='stylesheet' id='flatsome-style-css'  href='{{asset('frontend/css/style.css')}}' type='text/css' media='all' />
         <link rel='stylesheet' id='flatsome-googlefonts-css'  href='//fonts.googleapis.com/css?family=Quicksand%3Aregular%2C700%2Cregular%2C700%7CDancing+Script%3Aregular%2C400&#038;display=swap&#038;ver=3.9' type='text/css' media='all' />
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
         <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
         <script type='text/javascript' src='{{asset('frontend/js/jquery.min.js')}}' id='jquery-core-js'></script>
         <script type='text/javascript' src='{{asset('frontend/js/jquery-migrate.min.js')}}' id='jquery-migrate-js'></script>
         <script type='text/javascript' src='{{asset('frontend/js/notify.min.js')}}' id='notify-js'></script>
         <script>
            $(document).ready(function(){
               $('.button-variable-item').on('click', function(e) {
                  e.preventDefault();
                  $('.button-variable-item').removeClass('selected');
                  $(this).addClass('selected');
               })
               $('.add_to_cart').click(function(e) {
                  e.preventDefault();
                  let curl = $('.button-variable-item.selected').data('value');
                  let id = $(this).parent().find('input[name=product_id]').val();
                  let quantity = $('input[name=quantity]').val();
                  let line = $('input[name=line]:checked').val();
                  let length = $('select[name=length] :selected').val();
                  let thickness = $('select[name=thickness] :selected').val();
                  let url = $('.variations_form').data('url');
                  console.log(id);
                  $.ajax({
                     type: 'post',
                     url : url,
                     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                     data : {
                        id : id,
                        quantity :quantity,
                        curl : curl,
                        line : line,
                        length: length,
                        thickness: thickness
                     },
                     success: function(data) {
                        $.notify("Thêm vào giỏ hàng thành công!", "success");
                        let cart = data;
                        let countCart = Object.keys(data).length;
                        let totalPrice = 0;
                        let html = '';
                        $.each(cart , function (index, value){
                           html += '<li class="woocommerce-mini-cart-item mini_cart_item">';
                           html += '<a href="javascript:void(0);" class="remove remove_from_cart_button" onclick="removeItem('+value.id+')">×</a>';											
                           html += '<a href="#">';                      
                           html += '<img width="300" height="300" src="'+value.image+'" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wvs-attachment-image" alt="'+JSON.parse(value.name)[0].content+'" loading="lazy" srcset="'+value.image+' 300w, '+value.image+' 400w, '+value.image+' 799w, '+value.image+' 280w, '+value.image+' 768w, '+value.image+' 600w, '+value.image+' 100w, '+value.image+' 1279w" sizes="(max-width: 300px) 100vw, 300px">'+JSON.parse(value.name)[0].content+'</a>'  ;                      
                           html += '<span class="quantity">'+value.quantity+' × <span class="woocommerce-Price-amount amount">';
                           html += '<bdi>';
                           html += '<span class="woocommerce-Price-currencySymbol">$</span>';   
                           html += value.price - value.price * (value.discount / 100);
                           html += '</bdi>';   
                           html += '</span></span>' ;                       				
                           html += '</li>';  
                           totalPrice += (value.price - value.price * (value.discount / 100)) * value.quantity;
                        })
                        $('.cart_list').html(html);
                        $('#total-price').html(totalPrice);
                        $('.header-cart-link').html('<i class="icon-shopping-basket" data-icon-label="'+countCart+'"></i>');
                     },
                     error: function(data) {
                        $.notify("Thêm vào giỏ hàng thất bại!", "error");
                     }
                  })
               })
            });
            function removeItem(e) {
               var id = e;
               var url = $('.cart-item').data('url');
               $.ajax({
                  type: 'get',
                  url: url,
                  data: {id :id},
                  success: function(data) {
                     $.notify("Xóa thành công!", "success");
                     let cart = data;
                     let countCart = Object.keys(data).length;
                     let totalPrice = 0;
                     let html = '';
                     let html2 = '';
                     $.each(cart , function (index, value){
                           html += '<li class="woocommerce-mini-cart-item mini_cart_item">';
                           html += '<a href="javascript:void(0);" class="remove remove_from_cart_button" onclick="removeItem('+value.id+')">×</a>';											
                           html += '<a href="#">';                      
                           html += '<img width="300" height="300" src="'+value.image+'" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wvs-attachment-image" alt="'+JSON.parse(value.name)[0].content+'" loading="lazy" srcset="'+value.image+' 300w, '+value.image+' 400w, '+value.image+' 799w, '+value.image+' 280w, '+value.image+' 768w, '+value.image+' 600w, '+value.image+' 100w, '+value.image+' 1279w" sizes="(max-width: 300px) 100vw, 300px">'+JSON.parse(value.name)[0].content+'</a>'  ;                      
                           html += '<span class="quantity">'+value.quantity+' × <span class="woocommerce-Price-amount amount">';
                           html += '<bdi>';
                           html += '<span class="woocommerce-Price-currencySymbol">$</span>';   
                           html += value.price - value.price * (value.discount / 100);
                           html += '</bdi>';   
                           html += '</span></span>' ;                       				
                           html += '</li>';  
                           html2 += '<tr class="woocommerce-cart-form__cart-item cart_item">'; 
                           html2 += '<td class="product-remove">';   
                           html2 += '<a href="javascript:void(0);" class="remove" aria-label="Remove this item" onclick="removeItem('+value.id+')">&times;</a>';      						
                           html2 += '</td>' ;  
                           html2 += '<td class="product-thumbnail">';   
                           html2 += '<a href="#">'      
                           html2 += '<img width="300" height="300" src="'+value.image+'" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wvs-attachment-image" alt="'+JSON.parse(value.name)[0].content+'" loading="lazy" srcset="'+value.image+' 300w, '+value.image+' 400w, '+value.image+' 799w, '+value.image+' 280w, '+value.image+' 768w, '+value.image+' 600w, '+value.image+' 100w, '+value.image+' 1279w" sizes="(max-width: 300px) 100vw, 300px" />';
                           html2 += '</a>' ;  						
                           html2 += '</td>';   
                           html2 += '<td class="product-name" data-title="Product">';   
                           html2 += '<a href="#">'+JSON.parse(value.name)[0].content+'</a>';     							
                           html2 += '<div class="show-for-small mobile-product-price">';      
                           html2 += '<span class="mobile-product-price__qty">'+value.quantity+' x </span>';         
                           html2 += '<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>';
                           html2 += value.price - value.price * (value.discount / 100);
                           html2 += '</bdi></span>' ;        							
                           html2 += '</div>' ;     
                           html2 += '</td>';   
                           html2 += '<td class="product-price" data-title="Price">';   
                           html2 += '<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>';
                           html2 +=  value.price - value.price * (value.discount / 100);
                           html2 += '</bdi></span>';						
                           html2 += '</td>' ;  
                           html2 += '<td class="product-quantity" data-title="Quantity">';   
                           html2 += '<div class="quantity buttons_added">';      
                           html2 += '<input type="button" value="-" class="minus button is-form" onclick="btnMinusDes('+value.id+')">';         
                           html2 += '<input type="number" id="qtyItem'+value.id+'" class="input-text qty text" step="1" min="0" max="" name="cart[aa677d660eefd1fe0d323c1dc9bfa869][qty]" value="'+value.quantity+'" title="Qty" size="4" placeholder="" inputmode="numeric" />' ;        
                           html2 += '<input type="button" value="+" class="plus button is-form" onclick="btnPlusDes('+value.id+')">';         	
                           html2 += '</div>';      
                           html2 += '</td>' ;  
                           html2 += '<td class="product-subtotal" data-title="Subtotal">' ;  
                           html2 += '<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>';
                           html2 += '<span id="totalPrice-'+value.id+'">';
                           html2 += (value.price - value.price * (value.discount / 100)) * value.quantity;
                           html2 += '</span>';
                           html2 += '</bdi></span>' ;     						
                           html2 += '</td>' ;  
                           html2 += '</tr>';
                           html2 += '<tr>';
                           html2 += '<td colspan="6" class="actions clear">';   
                           html2 += '<div class="continue-shopping pull-left text-left">';      
                           html2 += '<a class="button-continue-shopping button primary is-outline"  href="{{route("home")}}">&#8592;&nbsp;Continue shopping	</a>';         
                           html2 += '</div>';      
                           html2 += '<a href="{{route("checkout")}}" class="button primary mt-0 pull-left small">Checkout</a>';      				
                           html2 += '</td>';   
                           html2 += '</tr>';
                           totalPrice += (value.price - value.price * (value.discount / 100)) * value.quantity;
                        })
                     $('.cart_list').html(html);
                     $('.cart_list_shopping_cart').html(html2);
                     $('#total-price').html(totalPrice);
                     $('.header-cart-link').html('<i class="icon-shopping-basket" data-icon-label="'+countCart+'"></i>');
                  },
                  error: function(data) {
                     $.notify("Xóa thất bại!", "error");
                  }
               })
            }
         </script>
         @yield('js')
         <style>.bg{opacity: 0; transition: opacity 1s; -webkit-transition: opacity 1s;} .bg-loaded{opacity: 1;}</style>
         <noscript>
         <style>.woocommerce-product-gallery{ opacity: 1 !important; }</style>
         </noscript>
         <style id="custom-css" type="text/css">:root {--primary-color: #d89654;}.header-main{height: 76px}#logo img{max-height: 76px}#logo{width:200px;}.header-bottom{min-height: 33px}.header-top{min-height: 50px}.transparent .header-main{height: 90px}.transparent #logo img{max-height: 90px}.has-transparent + .page-title:first-of-type,.has-transparent + #main > .page-title,.has-transparent + #main > div > .page-title,.has-transparent + #main .page-header-wrapper:first-of-type .page-title{padding-top: 170px;}.header.show-on-scroll,.stuck .header-main{height:70px!important}.stuck #logo img{max-height: 70px!important}.search-form{ width: 93%;}.header-bottom {background-color: #ffffff}.header-bottom-nav > li > a{line-height: 47px }@media (max-width: 549px) {.header-main{height: 70px}#logo img{max-height: 70px}}.nav-dropdown-has-arrow.nav-dropdown-has-border li.has-dropdown:before{border-bottom-color: #FFFFFF;}.nav .nav-dropdown{border-color: #FFFFFF }.nav-dropdown-has-arrow li.has-dropdown:after{border-bottom-color: #FFFFFF;}.nav .nav-dropdown{background-color: #FFFFFF}.header-top{background-color:#F7F7F7!important;}/* Color */.accordion-title.active, .has-icon-bg .icon .icon-inner,.logo a, .primary.is-underline, .primary.is-link, .badge-outline .badge-inner, .nav-outline > li.active> a,.nav-outline >li.active > a, .cart-icon strong,[data-color='primary'], .is-outline.primary{color: #d89654;}/* Color !important */[data-text-color="primary"]{color: #d89654!important;}/* Background Color */[data-text-bg="primary"]{background-color: #d89654;}/* Background */.scroll-to-bullets a,.featured-title, .label-new.menu-item > a:after, .nav-pagination > li > .current,.nav-pagination > li > span:hover,.nav-pagination > li > a:hover,.has-hover:hover .badge-outline .badge-inner,button[type="submit"], .button.wc-forward:not(.checkout):not(.checkout-button), .button.submit-button, .button.primary:not(.is-outline),.featured-table .title,.is-outline:hover, .has-icon:hover .icon-label,.nav-dropdown-bold .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold > li > a:hover, .nav-dropdown-bold.dark .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold.dark > li > a:hover, .is-outline:hover, .tagcloud a:hover,.grid-tools a, input[type='submit']:not(.is-form), .box-badge:hover .box-text, input.button.alt,.nav-box > li > a:hover,.nav-box > li.active > a,.nav-pills > li.active > a ,.current-dropdown .cart-icon strong, .cart-icon:hover strong, .nav-line-bottom > li > a:before, .nav-line-grow > li > a:before, .nav-line > li > a:before,.banner, .header-top, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover, .button.primary:not(.is-outline), input[type='submit'].primary, input[type='submit'].primary, input[type='reset'].button, input[type='button'].primary, .badge-inner{background-color: #d89654;}/* Border */.nav-vertical.nav-tabs > li.active > a,.scroll-to-bullets a.active,.nav-pagination > li > .current,.nav-pagination > li > span:hover,.nav-pagination > li > a:hover,.has-hover:hover .badge-outline .badge-inner,.accordion-title.active,.featured-table,.is-outline:hover, .tagcloud a:hover,blockquote, .has-border, .cart-icon strong:after,.cart-icon strong,.blockUI:before, .processing:before,.loading-spin, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover{border-color: #d89654}.nav-tabs > li.active > a{border-top-color: #d89654}.widget_shopping_cart_content .blockUI.blockOverlay:before { border-left-color: #d89654 }.woocommerce-checkout-review-order .blockUI.blockOverlay:before { border-left-color: #d89654 }/* Fill */.slider .flickity-prev-next-button:hover svg,.slider .flickity-prev-next-button:hover .arrow{fill: #d89654;}/* Background Color */[data-icon-label]:after, .secondary.is-underline:hover,.secondary.is-outline:hover,.icon-label,.button.secondary:not(.is-outline),.button.alt:not(.is-outline), .badge-inner.on-sale, .button.checkout, .single_add_to_cart_button, .current .breadcrumb-step{ background-color:rgba(226,43,76,0.33); }[data-text-bg="secondary"]{background-color: rgba(226,43,76,0.33);}/* Color */.secondary.is-underline,.secondary.is-link, .secondary.is-outline,.stars a.active, .star-rating:before, .woocommerce-page .star-rating:before,.star-rating span:before, .color-secondary{color: rgba(226,43,76,0.33)}/* Color !important */[data-text-color="secondary"]{color: rgba(226,43,76,0.33)!important;}/* Border */.secondary.is-outline:hover{border-color:rgba(226,43,76,0.33)}body{font-size: 100%;}body{font-family:"Quicksand", sans-serif}body{font-weight: 0}body{color: #000000}.nav > li > a {font-family:"Quicksand", sans-serif;}.mobile-sidebar-levels-2 .nav > li > ul > li > a {font-family:"Quicksand", sans-serif;}.nav > li > a {font-weight: 700;}.mobile-sidebar-levels-2 .nav > li > ul > li > a {font-weight: 700;}h1,h2,h3,h4,h5,h6,.heading-font, .off-canvas-center .nav-sidebar.nav-vertical > li > a{font-family: "Quicksand", sans-serif;}h1,h2,h3,h4,h5,h6,.heading-font,.banner h1,.banner h2{font-weight: 700;}h1,h2,h3,h4,h5,h6,.heading-font{color: #000000;}.alt-font{font-family: "Dancing Script", sans-serif;}.alt-font{font-weight: 400!important;}.header:not(.transparent) .header-bottom-nav.nav > li > a{color: #000000;}.current .breadcrumb-step, [data-icon-label]:after, .button#place_order,.button.checkout,.checkout-button,.single_add_to_cart_button.button{background-color: #000000!important }@media screen and (min-width: 550px){.products .box-vertical .box-image{min-width: 300px!important;width: 300px!important;}}.footer-2{background-color: #0a0a0a}.absolute-footer, html{background-color: #0a0a0a}.label-new.menu-item > a:after{content:"New";}.label-hot.menu-item > a:after{content:"Hot";}.label-sale.menu-item > a:after{content:"Sale";}.label-popular.menu-item > a:after{content:"Popular";}</style>
         <style type="text/css" id="wp-custom-css">
         .dark .social-icons .button.is-outline {
         border-color: rgb(216 150 84);
         color: #d89654;
         border: 0;
         }
         .badge-outline .badge-inner {
         border: 2px solid #d89654;
         }
         .dark .widget .badge-outline .badge-inner {
         color: #d89654;
         opacity: 1;
         }
         .section-title-normal {
         border-bottom: 2px solid #d89654;
         }
         .cust-b a {
         color: #d89654;
         }
         span.widget-title {
         color: #d89654;
         }
         element.style {
         }
         .widget .is-divider {
         margin-top: 0.66em;
         }
         .is-divider,.dark .is-divider {
         background-color: rgb(216 150 84);
         }
         .time p {
         margin-bottom: 2px;
         }
         .footer-secondary {
         padding: 0;
         }
         .absolute-footer.dark {
         color: rgba(255,255,255,.5);
         border-top: 1px solid;
         }
         .footer-widgets .widget-title,.footer-widgets .is-divider.small {
         display: none;
         }
         .footer-2 {
         background-color: #0a0a0a;
         padding-bottom: 30px;
         }
         table tr:nth-child(even) td {
         background: #eee;
         color: #000;
         }
         element.style {
         }
         th:first-child, td:first-child {
         padding-left: 0;
         }
         td {
         color: #000;
         padding: 0.5em 1em;
         border: 1px solid #ccc;
         font-weight: 600;
         }
         .footer-1 .row {
         max-width: 100%;
         padding: 0;
         }
         .footer-1 .row .col {
         padding: 0;
         }
         .sbi_header_text.sbi_no_bio h3 {
         text-transform: uppercase;
         }
         .sbi_no_avatar .sbi_header_img {
         background: #d89654;
         }
         #sb_instagram .sb_instagram_header {
         float: none;
         clear: both;
         margin: 0 0 15px 0;
         padding: 0;
         line-height: 1.2;
         width: 100%;
         text-align: center;
         max-width: 205px;
         margin: 0 auto 20px;
         }
         #sb_instagram .sb_instagram_header a {
         margin-bottom: 20px;
         }
         .social-b h6 {
         line-height: 0.80;
         }
         .payment i {
         color: #cd843f;
         }
         .copyright-footer {
         font-size: 13px;
         color: #fff;
         }
         .comapny-sec {
         margin-top: -80px;
         }
         .header-contact li a {
         color: #000 !IMPORTANT;
         }		
         </style>
   </head>
   <body class="home page-template page-template-page-blank page-template-page-blank-php page page-id-67 theme-flatsome woocommerce-no-js woo-variation-swatches wvs-theme-flatsome-child wvs-theme-child-flatsome wvs-style-rounded wvs-attr-behavior-blur wvs-tooltip wvs-css wvs-show-label wvs-pro lightbox nav-dropdown-has-arrow nav-dropdown-has-shadow nav-dropdown-has-border wvs-archive-align-left">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-dark-grayscale">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                     <feFuncR type="table" tableValues="0 0.49803921568627" />
                     <feFuncG type="table" tableValues="0 0.49803921568627" />
                     <feFuncB type="table" tableValues="0 0.49803921568627" />
                     <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
         </svg>
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-grayscale">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                     <feFuncR type="table" tableValues="0 1" />
                     <feFuncG type="table" tableValues="0 1" />
                     <feFuncB type="table" tableValues="0 1" />
                     <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
         </svg>
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-purple-yellow">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                     <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
                     <feFuncG type="table" tableValues="0 1" />
                     <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
                     <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
         </svg>
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-blue-red">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                     <feFuncR type="table" tableValues="0 1" />
                     <feFuncG type="table" tableValues="0 0.27843137254902" />
                     <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
                     <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
         </svg>
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-midnight">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                     <feFuncR type="table" tableValues="0 0" />
                     <feFuncG type="table" tableValues="0 0.64705882352941" />
                     <feFuncB type="table" tableValues="0 1" />
                     <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
         </svg>
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-magenta-yellow">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                     <feFuncR type="table" tableValues="0.78039215686275 1" />
                     <feFuncG type="table" tableValues="0 0.94901960784314" />
                     <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
                     <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
         </svg>
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-purple-green">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                     <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
                     <feFuncG type="table" tableValues="0 1" />
                     <feFuncB type="table" tableValues="0.44705882352941 0.4" />
                     <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
         </svg>
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-blue-orange">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                     <feFuncR type="table" tableValues="0.098039215686275 1" />
                     <feFuncG type="table" tableValues="0 0.66274509803922" />
                     <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
                     <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
         </svg>
         <a class="skip-link screen-reader-text" href="#main">Skip to content</a>
         <div id="wrapper">
         @include('layouts.header.index')
         @yield('content')
         @include('layouts.footer.index')
         </div> 
         <div class="hotline-phone-ring-wrap3">
            <div class="hotline-phone-ring">
               <div class="hotline-phone-ring-circle"></div>
               <div class="hotline-phone-ring-circle-fill"></div>
               <div class="hotline-phone-ring-img-circle">
               <a href="https://wa.me/{{$setting->phone1}}" class="pps-btn-img" target="_blank">
               <img src="{{url('frontend/images/whatsapp.png')}}" alt="Call" width="50" loading="lazy">
               </a>
               </div>
            </div>
         </div>
         <div class="hotline-phone-ring-wrap2">
            <div class="hotline-phone-ring">
               <div class="hotline-phone-ring-circle"></div>
               <div class="hotline-phone-ring-circle-fill"></div>
               <div class="hotline-phone-ring-img-circle">
               <a href="https://zalo.me/{{$setting->phone1}}" class="pps-btn-img" target="_blank">
               <img src="{{url('frontend/images/zalo.png')}}" alt="Call" width="50" loading="lazy">
               </a>
               </div>
            </div>
         </div>
         <link href="{{asset('frontend/css/callbuttom.css')}}" rel="stylesheet" type="text/css" />
         <link rel='stylesheet' id='flatsome-countdown-style-css'  href='{{asset('frontend/css/ux-countdown.css')}}' type='text/css' media='all' />
         <style id='global-styles-inline-css' type='text/css'>
         body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
         </style>
         <script type='text/javascript' src='{{asset('frontend/js/332.app.js')}}' id='ht_ctc_app_js-js'></script>
         <script type='text/javascript' src='{{asset('frontend/js/regenerator-runtime.min.js')}}' id='regenerator-runtime-js'></script>
         <script type='text/javascript' src='{{asset('frontend/js/wp-polyfill.min.js')}}' id='wp-polyfill-js'></script>
         <script type='text/javascript' src='{{asset('frontend/js/jquery.blockUI.min.js')}}' id='jquery-blockui-js'></script>
         <script type='text/javascript' src='{{asset('frontend/js/frontend.min.js')}}' id='woo-variation-swatches-js'></script>
         <script type='text/javascript' src='{{asset('frontend/js/frontend-pro.min.js')}}' id='woo-variation-swatches-pro-js'></script>
         <script type='text/javascript' src='{{asset('frontend/js/hoverIntent.min.js')}}' id='hoverIntent-js'></script>
         <script type='text/javascript' id='flatsome-js-js-extra'>
         /* <![CDATA[ */
         var flatsomeVars = {"ajaxurl":"","rtl":"","sticky_height":"70","assets_url":"","lightbox":{"close_markup":"<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>","close_btn_inside":false},"user":{"can_edit_pages":false},"i18n":{"mainMenu":"Main Menu"},"options":{"cookie_notice_version":"1","swatches_layout":false,"swatches_box_select_event":false,"swatches_box_behavior_selected":false,"swatches_box_update_urls":"1","swatches_box_reset":false,"swatches_box_reset_extent":false,"swatches_box_reset_time":300,"search_result_latency":"0"},"is_mini_cart_reveal":"1"};
         /* ]]> */
         </script>
         <script type='text/javascript' src='{{asset('frontend/js/flatsome.js')}}' id='flatsome-js-js'></script>
         <script type='text/javascript' src='{{asset('frontend/js/packery.pkgd.min.js')}}' id='flatsome-masonry-js-js'></script>
         <script type='text/javascript' src='{{asset('frontend/js/countdown-script-min.js')}}' id='flatsome-countdown-script-js'></script>
         <script type='text/javascript' src='{{asset('frontend/js/ux-countdown.js')}}' id='flatsome-countdown-theme-js-js'></script>
         <script type='text/javascript' id='wc-price-slider-js-extra'>
            /* <![CDATA[ */
            var woocommerce_price_slider_params = {"currency_format_num_decimals":"0","currency_format_symbol":"$","currency_format_decimal_sep":".","currency_format_thousand_sep":",","currency_format":"%s%v"};
            /* ]]> */
         </script>
         <script type='text/javascript' src='{{asset('frontend/js/price-slider.min.js')}}' id='wc-price-slider-js'></script>
         <script type='text/javascript' src='{{asset('frontend/js/core.min.js')}}' id='jquery-ui-core-js'></script>
         <script type='text/javascript' src='{{asset('frontend/js/mouse.min.js')}}' id='jquery-ui-mouse-js'></script>
         <script type='text/javascript' src='{{asset('frontend/js/slider.min.js')}}' id='jquery-ui-slider-js'></script>
         <script type='text/javascript' src='{{asset('frontend/js/jquery-ui-touch-punch.min.js')}}' id='wc-jquery-ui-touchpunch-js'></script>
         <script  script type='text/javascript' src='{{asset('frontend/js/accounting.min.js')}}' id='accounting-js'></script>
         <div id="fb-root"></div>
         <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0" nonce="GMVqghef"></script>
   </body>
</html>