@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
@endsection
@section('image')
@php
$imgs = json_decode($product->images);
$priceDiscount = $product->price - $product->price * ($product->discount / 100);
@endphp
{{url(''.$imgs[0])}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main id="main" class="">
   <div class="shop-container">
      <div class="container">
         <div class="woocommerce-notices-wrapper"></div>
      </div>
      <div id="product-655" class="product type-product post-655 status-publish first instock product_cat-volume-eyelash-extensions product_tag-flat product_tag-flat-lash product_tag-extensions has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes wvs-pro-product wvs-pro-after-cart-button">
         <div class="product-main">
            <div class="row content-row row-divided row-large">
               <div id="product-sidebar" class="col large-3 hide-for-medium shop-sidebar ">
                  <aside id="woocommerce_product_categories-13" class="widget woocommerce widget_product_categories">
                     <span class="widget-title shop-sidebar">Browse</span>
                     <div class="is-divider small"></div>
                     <ul class="product-categories">
                        @foreach ($typeProduct as $type)
                           <li class="cat-item cat-item-160 current-cat"><a href="{{route('allListProType', ['cate'=>$type->cate_slug, 'type'=>$type->slug])}}">{{languageName($type->name)}}</a></li>
                        @endforeach
                     </ul>
                  </aside>
               </div>
               <div class="col large-9">
                  <div class="row">
                     <div class="large-6 col">
                        <div class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4">
                           <div class="badge-container is-larger absolute left top z-1"></div>
                           <div class="image-tools absolute top show-on-hover right z-3">
                           </div>
                           <figure class="woocommerce-product-gallery__wrapper product-gallery-slider slider slider-nav-small mb-half"
                              data-flickity-options='{
                              "cellAlign": "center",
                              "wrapAround": true,
                              "autoPlay": false,
                              "prevNextButtons":true,
                              "adaptiveHeight": true,
                              "imagesLoaded": true,
                              "lazyLoad": 1,
                              "dragThreshold" : 15,
                              "pageDots": false,
                              "rightToLeft": false       }'>
                              @foreach ($imgs as $img)
                              <div data-thumb="{{$img}}" class="woocommerce-product-gallery__image slide first"><a data-src="{{$img}}" data-fancybox="gallery"><img width="600" height="600" src="{{$img}}" class="wp-post-image skip-lazy wvs-attachment-image" alt="{{languageName($product->name)}}" loading="lazy" title="{{languageName($product->name)}}" data-caption="" data-src="{{$img}}" data-large_image="{{$img}}" data-large_image_width="600" data-large_image_height="600" srcset="{{$img}} 600w, {{$img}} 400w, {{$img}} 280w, {{$img}} 300w, {{$img}} 100w" sizes="(max-width: 600px) 100vw, 600px" /></a></div>
                              @endforeach
                           </figure>
                        </div>
                        <div class="product-thumbnails thumbnails slider-no-arrows slider row row-small row-slider slider-nav-small small-columns-4"
                           data-flickity-options='{
                           "cellAlign": "left",
                           "wrapAround": false,
                           "autoPlay": false,
                           "prevNextButtons": true,
                           "asNavFor": ".product-gallery-slider",
                           "percentPosition": true,
                           "imagesLoaded": true,
                           "pageDots": false,
                           "rightToLeft": false,
                           "contain": true
                           }'>
                           <div class="col is-nav-selected first">
                              <a>
                              <img src="{{$imgs[0]}}" alt="{{languageName($product->name)}}" width="300" height="300" class="attachment-woocommerce_thumbnail" loading="lazy" />				</a>
                           </div>
                           @foreach ($imgs as $key=>$img)
                              @if ($key != 0)
                              <div class="col"><a><img src="{{$img}}" alt="{{languageName($product->name)}}" width="300" height="300"  class="attachment-woocommerce_thumbnail" loading="lazy" /></a></div>
                              @endif
                           @endforeach
                        </div>
                     </div>
                     <div class="product-info summary entry-summary col col-fit product-summary">
                        <nav class="woocommerce-breadcrumb breadcrumbs uppercase"><a href="{{route('home')}}">Home</a> <span class="divider">&#47;</span> <a href="{{route('allListProType', ['cate'=>$product->cate_slug, 'type'=>$product->type_slug])}}">{{languageName($product->typeCate->name)}}</a></nav>
                        <h1 class="product-title product_title entry-title">
                           {{languageName($product->name)}}
                        </h1>
                        <div class="is-divider small"></div>
                        <div class="price-wrapper">
                           <p class="price product-page-price ">
                           @if ($product->discount > 0 && $product->price > 0)
                                 <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{$priceDiscount}}</bdi></span>
                                 <span class="oldPrice"><bdi><span class="">&#36;</span>{{$product->price}}</bdi></span>
                           @elseif($product->discount == 0 && $product->price > 0)
                                 <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{$product->price}}</bdi></span>
                           @else
                              <span class="woocommerce-Price-amount amount"><a href="tel:{{$setting->phone1}}">Contact</a></span>
                           @endif
                           </p>
                        </div>
                        <div class="product-short-description">
                           <p><a href="{{route('lienHe')}}" target="_blank" rel="noopener">𝐂𝐨𝐧𝐭𝐚𝐜𝐭 𝐮𝐬</a> 𝐭𝐨 𝐠𝐞𝐭 𝐰𝐡𝐨𝐥𝐞𝐬𝐚𝐥𝐞</p>
                           @if (json_decode($product->preserve)[0]->detail != null)
                              <ul>
                                 @foreach (json_decode($product->preserve) as $item)
                                    <li class="bullet-checkmark">{{$item->detail}}</li>
                                 @endforeach
                              </ul>
                           @endif
                        </div>
                        <form class="variations_form cart" action="" method="post" enctype='multipart/form-data' data-url="{{route('addToCart')}}">
                           <table class="variations" cellspacing="0">
                              <tbody>
                                 @if (json_decode($product->curl)[0]->detail != null)
                                    <tr>
                                       <td class="label">
                                          <label for="pa_curl">curl</label>
                                       </td>
                                       <td class="value">
                                          <ul role="radiogroup" aria-label="curl"  class="variable-items-wrapper button-variable-wrapper">
                                             @foreach (json_decode($product->curl) as $item)
                                                <li data-wvstooltip="{{$item->detail}}" aria-checked="false" class="variable-item button-variable-item" data-title="{{$item->detail}}" title="{{$item->detail}}" data-value="{{$item->detail}}" role="radio" tabindex="0">
                                                   <div class="variable-item-contents"><span class="variable-item-span variable-item-span-button">{{$item->detail}}</span></div>
                                                </li>
                                             @endforeach
                                          </ul>
                                       </td>
                                    </tr>
                                 @endif
                                 @if (json_decode($product->thickness)[0]->detail != null)
                                    <tr>
                                       <td class="label">
                                          <label for="pa_thickness">thickness</label>
                                       </td>
                                       <td class="value">
                                          <select id="pa_thickness" class="" name="thickness">
                                             <option value="">Choose an option</option>
                                             @foreach (json_decode($product->thickness) as $item)
                                                <option value="{{$item->detail}}" >{{$item->detail}}</option>
                                             @endforeach
                                          </select>
                                       </td>
                                    </tr>
                                 @endif
                                 @if (json_decode($product->length)[0]->detail != null)
                                    <tr>
                                       <td class="label">
                                          <label for="pa_length">length</label>
                                       </td>
                                       <td class="value">
                                          <select id="pa_length" class="" name="length">
                                             <option value="">Choose an option</option>
                                             @foreach (json_decode($product->length) as $item)
                                                <option value="{{$item->detail}}" >{{$item->detail}}</option>
                                             @endforeach
                                          </select>
                                       </td>
                                    </tr>
                                 @endif
                                 @if (json_decode($product->line)[0]->detail != null)
                                    <tr>
                                       <td class="label">
                                          <label for="pa_line">line</label>
                                       </td>
                                       <td class="value">
                                          <select id="pa_line" class=" wvs-saved-attrs hide woo-variation-raw-select woo-variation-raw-type-radio" style="display:none" name="line" >
                                             <option value="">Choose an option</option>
                                             @foreach (json_decode($product->line) as $item)
                                                <option value="{{$item->detail}}" >{{$item->detail}}</option>
                                             @endforeach
                                          </select>
                                          <ul role="radiogroup" aria-label="line"  class="variable-items-wrapper radio-variable-wrapper">
                                             @foreach (json_decode($product->line) as $key=>$item)
                                                <li data-wvstooltip="{{$item->detail}}" aria-checked="true" class="variable-item radio-variable-item selected" >
                                                   <div class="variable-item-contents"><input name="line" id="{{$key}}" class="wvs-radio-variable-item"  type="radio" value="{{$item->detail}}"/><label for="{{$key}}">{{$item->detail}}</label></div>
                                                </li>
                                             @endforeach
                                          </ul>
                                          <a class="reset_variations" href="#">Clear</a>						
                                       </td>
                                    </tr>
                                 @endif
                              </tbody>
                           </table>
                           <div class="single_variation_wrap">
                              <div class="woocommerce-variation single_variation"></div>
                              <div class="woocommerce-variation-add-to-cart variations_button">
                                 <div class="quantity buttons_added">
                                    <input type="button" value="-" class="minus button is-form" onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty) & qty > 1 ) result.value--;return false;">
                                    <input
                                       type="number"
                                       id="qty"
                                       class="input-text qty text"
                                       step="1"
                                       min="1"
                                       max=""
                                       name="quantity"
                                       value="1"
                                       title="Qty"
                                       size="4"
                                       placeholder=""
                                       inputmode="numeric" />
                                    <input type="button" value="+" class="plus button is-form" onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;">	
                                 </div>
                                 <button type="submit" class="single_add_to_cart_button button alt add_to_cart">Add to cart</button>
                                 <input type="hidden" name="product_id" value="{{$product->id}}" />
                              </div>
                           </div>
                        </form>
                        <div id="ppc-button"></div>
                        <div class="social-icons share-icons share-row relative" ><a href="whatsapp://send?text={{languageName($product->name)}} - {{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" data-action="share/whatsapp/share" class="icon button circle is-outline tooltip whatsapp show-for-medium" title="Share on WhatsApp" aria-label="Share on WhatsApp"><i class="icon-whatsapp"></i></a><a href="https://www.facebook.com/sharer.php?u={{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" data-label="Facebook" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip facebook" title="Share on Facebook" aria-label="Share on Facebook"><i class="icon-facebook" ></i></a><a href="https://twitter.com/share?url={{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip twitter" title="Share on Twitter" aria-label="Share on Twitter"><i class="icon-twitter" ></i></a><a href="mailto:enteryour@addresshere.com?subject={{languageName($product->name)}}&amp;body=Check%20this%20out:%20{{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" rel="nofollow" class="icon button circle is-outline tooltip email" title="Email to a Friend" aria-label="Email to a Friend"><i class="icon-envelop" ></i></a><a href="https://pinterest.com/pin/create/button/?url={{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}&amp;media=https://momilash.com/wp-content/uploads/2019/10/flat-lash.png&amp;description={{languageName($product->name)}}" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip pinterest" title="Pin on Pinterest" aria-label="Pin on Pinterest"><i class="icon-pinterest" ></i></a><a href="https://www.linkedin.com/shareArticle?mini=true&url={{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}&title={{languageName($product->name)}}" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"  rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip linkedin" title="Share on LinkedIn" aria-label="Share on LinkedIn"><i class="icon-linkedin" ></i></a></div>
                     </div>
                  </div>
                  <div class="product-footer">
                     <div class="woocommerce-tabs wc-tabs-wrapper container tabbed-content">
                        <ul class="tabs wc-tabs product-tabs small-nav-collapse nav nav-uppercase nav-line nav-left" role="tablist">
                           <li class="description_tab active" id="tab-title-description" role="tab" aria-controls="tab-description">
                              <a href="#tab-description">
                              Description					</a>
                           </li>
                           <li class="additional_information_tab " id="tab-title-additional_information" role="tab" aria-controls="tab-additional_information">
                              <a href="#tab-additional_information">
                              Additional information					</a>
                           </li>
                        </ul>
                        <div class="tab-panels">
                           <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content active" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                              {!!languageName($product->content)!!}
                           </div>
                           <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--additional_information panel entry-content " id="tab-additional_information" role="tabpanel" aria-labelledby="tab-title-additional_information">
                              {!!languageName($product->description)!!}
                           </div>
                        </div>
                     </div>
                     <div class="related related-products-wrapper product-section">
                        <h3 class="product-section-title container-width product-section-title-related pt-half pb-half uppercase">
                           Related products			
                        </h3>
                        <div class="row equalize-box large-columns-4 medium-columns-3 small-columns-2 row-small slider row-slider slider-nav-reveal slider-nav-push"  data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
                           @foreach ($productlq as $pro)
                           @if ($pro->id != $product->id)
                              @include('layouts.product.item', ['product'=>$pro])
                           @endif
                           @endforeach
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- shop container -->
</main>
@endsection