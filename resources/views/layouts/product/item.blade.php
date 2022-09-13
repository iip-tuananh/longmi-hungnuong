
@php
$imgs = json_decode($product['images']);
$discountPrice = $product['price'] - $product['price'] * ($product['discount'] / 100);
@endphp
<div class="product-small col has-hover product type-product post-659 status-publish instock product_cat-volume-eyelash-extensions product_tag-extensions product_tag-silk product_tag-silk-lash has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes wvs-pro-product wvs-pro-after-cart-button">
   <div class="col-inner">
      <div class="badge-container absolute left top z-1"></div>
      <div class="product-small box ">
         <div class="box-image">
               <div class="image-fade_in_back">
               <a href="{{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" aria-label="{{languageName($product->name)}}">
                  @if (count($imgs)>1)
                     <img width="300" height="300" src="{{$imgs[0]}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wvs-attachment-image" alt="silk lash momilash" loading="lazy" srcset="{{$imgs[0]}} 300w, {{$imgs[0]}} 400w, {{$imgs[0]}} 280w, {{$imgs[0]}} 600w, {{$imgs[0]}} 100w, {{$imgs[0]}} 750w" sizes="(max-width: 300px) 100vw, 300px" />
                     <img width="300" height="300" src="{{$imgs[1]}}" class="show-on-hover absolute fill hide-for-small back-image wvs-attachment-image" alt="silk lash" loading="lazy" srcset="{{$imgs[1]}} 300w, {{$imgs[1]}} 280w, {{$imgs[1]}} 100w" sizes="(max-width: 300px) 100vw, 300px" />
                  @else
                     <img width="300" height="300" src="{{$imgs[0]}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wvs-attachment-image" alt="silk lash momilash" loading="lazy" srcset="{{$imgs[0]}} 300w, {{$imgs[0]}} 400w, {{$imgs[0]}} 280w, {{$imgs[0]}} 600w, {{$imgs[0]}} 100w, {{$imgs[0]}} 750w" sizes="(max-width: 300px) 100vw, 300px" />
                  @endif
               </a>
               </div>
               @if ($product->discount > 0)
                  <div class="discount">
                     {{$product->discount}}%
                  </div>
               @endif
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
                  {{languageName($product->cate->name)}}		
               </p>
               <p class="name product-title woocommerce-loop-product__title"><a href="{{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">{{languageName($product->name)}}</a></p>
               </div>
               <div class="price-wrapper">
               <span class="price">
                  @if ($product->price > 0 && $product->discount > 0)
                     <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{$discountPrice}}</bdi></span>
                     <span class="oldPrice"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{$product->price}}</bdi></span>
                  @elseif($product->price > 0 && $product->discount == 0)
                     <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{$product->price}}</bdi></span>
                  @else
                     <span class="woocommerce-Price-amount amount"><a href="tel:{{$setting->phone1}}">Contact</a></span>
                  @endif
               </span>
               </div>
               <div class="add-to-cart-button">
                  <div class="add-to-cart-button"><a href="" class="primary is-small mb-0 product_type_simple add_to_cart_button ajax_add_to_cart button primary is-flat mb-0 is-small is-flat" data-product_id="9579" data-product_sku="" data-quantity="1" rel="nofollow">Add to cart</a></div>
               </div>
         </div>
      </div>
   </div>
</div>
