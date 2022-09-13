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
                              <div data-thumb="{{$img}}" class="woocommerce-product-gallery__image slide first"><a data-src="{{$img}}" data-fancybox="gallery"><img width="600" height="600" src="{{$img}}" class="wp-post-image skip-lazy wvs-attachment-image" alt="Flat lash" loading="lazy" title="flat lash" data-caption="" data-src="{{$img}}" data-large_image="{{$img}}" data-large_image_width="600" data-large_image_height="600" srcset="{{$img}} 600w, {{$img}} 400w, {{$img}} 280w, {{$img}} 300w, {{$img}} 100w" sizes="(max-width: 600px) 100vw, 600px" /></a></div>
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
                              <img src="{{$imgs[0]}}" alt="Flat lash" width="300" height="300" class="attachment-woocommerce_thumbnail" loading="lazy" />				</a>
                           </div>
                           @foreach ($imgs as $key=>$img)
                              @if ($key != 0)
                              <div class="col"><a><img src="{{$img}}" alt="flat lash" width="300" height="300"  class="attachment-woocommerce_thumbnail" loading="lazy" /></a></div>
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
                                 <span class="oldPrice"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{$product->price}}</bdi></span>
                           @elseif($product->discount == 0 && $product->price > 0)
                                 <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>{{$product->price}}</bdi></span>
                           @else
                              <span class="woocommerce-Price-amount amount"><a href="tel:{{$setting->phone1}}">Contact</a></span>
                           @endif
                           </p>
                        </div>
                        <div class="product-short-description">
                           <p><a href="{{route('lienHe')}}" target="_blank" rel="noopener">𝐂𝐨𝐧𝐭𝐚𝐜𝐭 𝐮𝐬</a> 𝐭𝐨 𝐠𝐞𝐭 𝐰𝐡𝐨𝐥𝐞𝐬𝐚𝐥𝐞</p>
                           <ul>
                              @foreach (json_decode($product->preserve) as $item)
                                 <li class="bullet-checkmark">{{$item->detail}}</li>
                              @endforeach
                           </ul>
                           {{-- <div style="background: #faf8d7; padding: 8px;"><i class="fa fa-caret-right" aria-hidden="true"><i class="fa fa-caret-right" aria-hidden="true"></i></i> <strong><a href="https://flic.kr/s/aHsmQGQi83" target="_blank" rel="nofollow noopener">Product images | Latest updates </a></strong> <i class="fa fa-check-circle" aria-hidden="true"></i></div> --}}
                        </div>
                        <form class="variations_form cart" action="https://momilash.com/flat-lash/" method="post" enctype='multipart/form-data' data-product_id="655">
                           <table class="variations" cellspacing="0">
                              <tbody>
                                 <tr>
                                    <td class="label">
                                       <label for="pa_curl">curl</label>
                                    </td>
                                    <td class="value">
                                       <select id="pa_curl" class=" wvs-saved-attrs hide woo-variation-raw-select woo-variation-raw-type-button" style="display:none" name="attribute_pa_curl" data-attribute_name="attribute_pa_curl" data-show_option_none="yes">
                                          <option value="">Choose an option</option>
                                          <option value="j" >A</option>
                                          <option value="b" >B</option>
                                          <option value="c" >C</option>
                                          <option value="d" >D</option>
                                          <option value="cc" >CC</option>
                                       </select>
                                       <ul role="radiogroup" aria-label="curl"  class="variable-items-wrapper button-variable-wrapper">
                                          @foreach (json_decode($product->curl) as $item)
                                             <li  aria-checked="false" class="variable-item button-variable-item" data-title="{{$item->deatil}}" title="{{$item->deatil}}" data-value="{{$item->deatil}}" role="radio" tabindex="0">
                                                <div class="variable-item-contents"><span class="variable-item-span variable-item-span-button">{{$item->deatil}}</span></div>
                                             </li>
                                          @endforeach
                                          {{-- <li  aria-checked="false" data-wvstooltip="B" class="variable-item button-variable-item button-variable-item-b " data-title="B" title="B" data-value="b" role="radio" tabindex="0">
                                             <div class="variable-item-contents"><span class="variable-item-span variable-item-span-button">B</span></div>
                                          </li>
                                          <li  aria-checked="false" data-wvstooltip="C" class="variable-item button-variable-item button-variable-item-c " data-title="C" title="C" data-value="c" role="radio" tabindex="0">
                                             <div class="variable-item-contents"><span class="variable-item-span variable-item-span-button">C</span></div>
                                          </li>
                                          <li  aria-checked="false" data-wvstooltip="D" class="variable-item button-variable-item button-variable-item-d " data-title="D" title="D" data-value="d" role="radio" tabindex="0">
                                             <div class="variable-item-contents"><span class="variable-item-span variable-item-span-button">D</span></div>
                                          </li>
                                          <li  aria-checked="false" data-wvstooltip="CC" class="variable-item button-variable-item button-variable-item-cc " data-title="CC" title="CC" data-value="cc" role="radio" tabindex="0">
                                             <div class="variable-item-contents"><span class="variable-item-span variable-item-span-button">CC</span></div>
                                          </li> --}}
                                       </ul>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="label">
                                       <label for="pa_thickness">thickness</label>
                                    </td>
                                    <td class="value">
                                       <select id="pa_thickness" class="" name="attribute_pa_thickness" data-attribute_name="attribute_pa_thickness" data-show_option_none="yes">
                                          <option value="">Choose an option</option>
                                          <option value="010mm" >0.10mm</option>
                                          <option value="015mm" >0.15mm</option>
                                          <option value="020mm" >0.20mm</option>
                                       </select>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="label">
                                       <label for="pa_length">length</label>
                                    </td>
                                    <td class="value">
                                       <select id="pa_length" class="" name="attribute_pa_length" data-attribute_name="attribute_pa_length" data-show_option_none="yes">
                                          <option value="">Choose an option</option>
                                          <option value="7mm" >7mm</option>
                                          <option value="8mm" >8mm</option>
                                          <option value="9mm" >9mm</option>
                                          <option value="10mm" >10mm</option>
                                          <option value="11mm" >11mm</option>
                                          <option value="12mm" >12mm</option>
                                          <option value="13mm" >13mm</option>
                                          <option value="14mm" >14mm</option>
                                          <option value="15mm" >15mm</option>
                                          <option value="16mm" >16mm</option>
                                          <option value="7-15mm-mix" >7-15mm Mix</option>
                                       </select>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="label">
                                       <label for="pa_line">line</label>
                                    </td>
                                    <td class="value">
                                       <select id="pa_line" class=" wvs-saved-attrs hide woo-variation-raw-select woo-variation-raw-type-radio" style="display:none" name="attribute_pa_line" data-attribute_name="attribute_pa_line" data-show_option_none="yes">
                                          <option value="">Choose an option</option>
                                          <option value="16line"  selected='selected'>16 lines (available)</option>
                                       </select>
                                       <ul role="radiogroup" aria-label="line"  class="variable-items-wrapper radio-variable-wrapper" data-attribute_name="attribute_pa_line" data-attribute_values="[&quot;16line&quot;]">
                                          <li  aria-checked="true" data-wvstooltip="16 lines (available)" class="variable-item radio-variable-item radio-variable-item-16line selected" data-title="16 lines (available)" title="16 lines (available)" data-value="16line" role="radio" tabindex="0">
                                             <div class="variable-item-contents"><input name="attribute_pa_line631efeb0316ec" id="16line631efeb031759" class="wvs-radio-variable-item"  checked='checked'  type="radio" value="16line" data-value="16line" /><label for="16line631efeb031759">16 lines (available)</label></div>
                                          </li>
                                       </ul>
                                       <a class="reset_variations" href="#">Clear</a>						
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                           <div class="single_variation_wrap">
                              <div class="woocommerce-variation single_variation"></div>
                              <div class="woocommerce-variation-add-to-cart variations_button">
                                 <div class="quantity buttons_added">
                                    <input type="button" value="-" class="minus button is-form">				<label class="screen-reader-text" for="quantity_631efeb0319f3">Flat Lash Eyelash Extensions quantity</label>
                                    <input
                                       type="number"
                                       id="quantity_631efeb0319f3"
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
                                    <input type="button" value="+" class="plus button is-form">	
                                 </div>
                                 <button type="submit" class="single_add_to_cart_button button alt">Add to cart</button>
                                 <input type="hidden" name="add-to-cart" value="655" />
                                 <input type="hidden" name="product_id" value="655" />
                                 <input type="hidden" name="variation_id" class="variation_id" value="0" />
                              </div>
                           </div>
                        </form>
                        <div id="ppc-button"></div>
                        <div class="product_meta">
                           <span class="sku_wrapper">SKU: <span class="sku">N/A</span></span>
                           <span class="posted_in">Category: <a href="https://momilash.com/volume-eyelash-extensions/" rel="tag">Volume Eyelash Extensions</a></span>
                           <span class="tagged_as">Tags: <a href="https://momilash.com/product-tag/flat/" rel="tag">flat</a>, <a href="https://momilash.com/product-tag/flat-lash/" rel="tag">flat lash</a>, <a href="https://momilash.com/product-tag/extensions/" rel="tag">extensions</a></span>
                        </div>
                        <div class="social-icons share-icons share-row relative" ><a href="whatsapp://send?text=Flat%20Lash%20Eyelash%20Extensions - https://momilash.com/flat-lash/" data-action="share/whatsapp/share" class="icon button circle is-outline tooltip whatsapp show-for-medium" title="Share on WhatsApp" aria-label="Share on WhatsApp"><i class="icon-whatsapp"></i></a><a href="https://www.facebook.com/sharer.php?u=https://momilash.com/flat-lash/" data-label="Facebook" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip facebook" title="Share on Facebook" aria-label="Share on Facebook"><i class="icon-facebook" ></i></a><a href="https://twitter.com/share?url=https://momilash.com/flat-lash/" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip twitter" title="Share on Twitter" aria-label="Share on Twitter"><i class="icon-twitter" ></i></a><a href="mailto:enteryour@addresshere.com?subject=Flat%20Lash%20Eyelash%20Extensions&amp;body=Check%20this%20out:%20https://momilash.com/flat-lash/" rel="nofollow" class="icon button circle is-outline tooltip email" title="Email to a Friend" aria-label="Email to a Friend"><i class="icon-envelop" ></i></a><a href="https://pinterest.com/pin/create/button/?url=https://momilash.com/flat-lash/&amp;media=https://momilash.com/wp-content/uploads/2019/10/flat-lash.png&amp;description=Flat%20Lash%20Eyelash%20Extensions" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip pinterest" title="Pin on Pinterest" aria-label="Pin on Pinterest"><i class="icon-pinterest" ></i></a><a href="https://www.linkedin.com/shareArticle?mini=true&url=https://momilash.com/flat-lash/&title=Flat%20Lash%20Eyelash%20Extensions" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"  rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip linkedin" title="Share on LinkedIn" aria-label="Share on LinkedIn"><i class="icon-linkedin" ></i></a></div>
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
                              <h2>Overview about Flat Lash</h2>
                              <h4>Quick Details</h4>
                              <div class="su-table su-table-responsive su-table-fixed">
                                 <table style="height: 288px;" width="516">
                                    <tbody>
                                       <tr>
                                          <td>Place of Origin</td>
                                          <td>Vietnam</td>
                                       </tr>
                                       <tr>
                                          <td>Brand Name</td>
                                          <td>MOMI EYELASH</td>
                                       </tr>
                                       <tr>
                                          <td>Material</td>
                                          <td>Synthetic Hair</td>
                                       </tr>
                                       <tr>
                                          <td>Type</td>
                                          <td>Hand Made</td>
                                       </tr>
                                       <tr>
                                          <td>False Eyelashes Style</td>
                                          <td>Natural Long</td>
                                       </tr>
                                       <tr>
                                          <td>Curl</td>
                                          <td>J, B, C, D, CC</td>
                                       </tr>
                                       <tr>
                                          <td>Thickness</td>
                                          <td>0.10mm, 0.15mm, 0.20mm</td>
                                       </tr>
                                       <tr>
                                          <td>Color</td>
                                          <td>Black</td>
                                       </tr>
                                       <tr>
                                          <td>Length</td>
                                          <td>7mm, 8mm, 9mm, 10mm, 11mm, 12mm, 13mm, 14mm 15mm, 16mm, 7-15mm Mix</td>
                                       </tr>
                                       <tr>
                                          <td>Line</td>
                                          <td>16 lines</td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                              <h4>Supply Ability</h4>
                              <p>Supply Ability: 60000 Pieces/per Month</p>
                              <h4>Packaging &amp; Delivery</h4>
                              <p>Packaging Details: 10 pieces/box &amp; 400pieces/Carton<img loading="lazy" class="aligncenter wp-image-5745 size-full" src="https://momilash.com/wp-content/uploads/2020/04/flat-lash-4.jpg" alt="flat lash" width="1000" height="667" srcset="https://momilash.com/wp-content/uploads/2020/04/flat-lash-4.jpg 1000w, https://momilash.com/wp-content/uploads/2020/04/flat-lash-4-600x400.jpg 600w, https://momilash.com/wp-content/uploads/2020/04/flat-lash-4-768x512.jpg 768w" sizes="(max-width: 1000px) 100vw, 1000px" /><img loading="lazy" class="aligncenter wp-image-5747 size-full" src="https://momilash.com/wp-content/uploads/2020/04/flat-lash-6.jpg" alt="flat lash" width="1000" height="1000" srcset="https://momilash.com/wp-content/uploads/2020/04/flat-lash-6.jpg 1000w, https://momilash.com/wp-content/uploads/2020/04/flat-lash-6-400x400.jpg 400w, https://momilash.com/wp-content/uploads/2020/04/flat-lash-6-800x800.jpg 800w, https://momilash.com/wp-content/uploads/2020/04/flat-lash-6-280x280.jpg 280w, https://momilash.com/wp-content/uploads/2020/04/flat-lash-6-768x768.jpg 768w, https://momilash.com/wp-content/uploads/2020/04/flat-lash-6-300x300.jpg 300w, https://momilash.com/wp-content/uploads/2020/04/flat-lash-6-600x600.jpg 600w, https://momilash.com/wp-content/uploads/2020/04/flat-lash-6-100x100.jpg 100w" sizes="(max-width: 1000px) 100vw, 1000px" /><img loading="lazy" class="aligncenter wp-image-5744 size-full" src="https://momilash.com/wp-content/uploads/2020/04/flat-lash-3.jpg" alt="flat lash" width="1000" height="667" srcset="https://momilash.com/wp-content/uploads/2020/04/flat-lash-3.jpg 1000w, https://momilash.com/wp-content/uploads/2020/04/flat-lash-3-600x400.jpg 600w, https://momilash.com/wp-content/uploads/2020/04/flat-lash-3-768x512.jpg 768w" sizes="(max-width: 1000px) 100vw, 1000px" /><img loading="lazy" class="aligncenter wp-image-5743 size-full" src="https://momilash.com/wp-content/uploads/2020/04/flat-lash-2.jpg" alt="flat lash" width="1000" height="667" srcset="https://momilash.com/wp-content/uploads/2020/04/flat-lash-2.jpg 1000w, https://momilash.com/wp-content/uploads/2020/04/flat-lash-2-600x400.jpg 600w, https://momilash.com/wp-content/uploads/2020/04/flat-lash-2-768x512.jpg 768w" sizes="(max-width: 1000px) 100vw, 1000px" /> MOMI FLAT lash is made from PBT eyelash hair, and it has a softer touch than other normal eyelashes.The flat lash shape of the root is a groove, this shape has enough area to attach glue fast and easily. Flat lash has a softer touch than other normal eyelashes.<img loading="lazy" class="aligncenter wp-image-5742 size-full" src="https://momilash.com/wp-content/uploads/2020/04/flat-lash-1.jpg" alt="flat lash" width="1000" height="667" srcset="https://momilash.com/wp-content/uploads/2020/04/flat-lash-1.jpg 1000w, https://momilash.com/wp-content/uploads/2020/04/flat-lash-1-600x400.jpg 600w, https://momilash.com/wp-content/uploads/2020/04/flat-lash-1-768x512.jpg 768w" sizes="(max-width: 1000px) 100vw, 1000px" /><img loading="lazy" class="aligncenter wp-image-5741 size-full" src="https://momilash.com/wp-content/uploads/2020/04/flat-lash.jpg" alt="flat lash" width="1000" height="667" srcset="https://momilash.com/wp-content/uploads/2020/04/flat-lash.jpg 1000w, https://momilash.com/wp-content/uploads/2020/04/flat-lash-600x400.jpg 600w, https://momilash.com/wp-content/uploads/2020/04/flat-lash-768x512.jpg 768w" sizes="(max-width: 1000px) 100vw, 1000px" />Model design flat lashes are soft as a human&#8217;s original hair that makes you feel more comfortable. Save time by using flat lash for doing eyelash extension.</p>
                              <p><strong><span data-spm-anchor-id="a2700.details.pronpeci14.i16.4a1c78e93QEcVk">Service: </span></strong>OEM (Private Label) / ODM are welcomed</p>
                           </div>
                           <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--additional_information panel entry-content " id="tab-additional_information" role="tabpanel" aria-labelledby="tab-title-additional_information">
                              <table class="woocommerce-product-attributes shop_attributes">
                                 <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_curl">
                                    <th class="woocommerce-product-attributes-item__label">curl</th>
                                    <td class="woocommerce-product-attributes-item__value">
                                       <p>J, B, C, D, CC</p>
                                    </td>
                                 </tr>
                                 <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_thickness">
                                    <th class="woocommerce-product-attributes-item__label">thickness</th>
                                    <td class="woocommerce-product-attributes-item__value">
                                       <p>0.10mm, 0.15mm, 0.20mm</p>
                                    </td>
                                 </tr>
                                 <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_length">
                                    <th class="woocommerce-product-attributes-item__label">length</th>
                                    <td class="woocommerce-product-attributes-item__value">
                                       <p>7mm, 8mm, 9mm, 10mm, 11mm, 12mm, 13mm, 14mm, 15mm, 16mm, 7-15mm Mix</p>
                                    </td>
                                 </tr>
                                 <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_line">
                                    <th class="woocommerce-product-attributes-item__label">line</th>
                                    <td class="woocommerce-product-attributes-item__value">
                                       <p>16 lines (available)</p>
                                    </td>
                                 </tr>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="related related-products-wrapper product-section">
                        <h3 class="product-section-title container-width product-section-title-related pt-half pb-half uppercase">
                           Related products			
                        </h3>
                        <div class="row equalize-box large-columns-4 medium-columns-3 small-columns-2 row-small slider row-slider slider-nav-reveal slider-nav-push"  data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
                           <div class="product-small col has-hover product type-product post-656 status-publish instock product_cat-volume-eyelash-extensions product_tag-extensions product_tag-l product_tag-l-lash has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes wvs-pro-product wvs-pro-after-cart-button">
                              <div class="col-inner">
                                 <div class="badge-container absolute left top z-1"></div>
                                 <div class="product-small box ">
                                    <div class="box-image">
                                       <div class="image-fade_in_back">
                                          <a href="https://momilash.com/l-lash/" aria-label="L Lash, L Eyelashes Extensions">
                                          <img width="300" height="300" src="https://momilash.com/wp-content/uploads/2019/10/L-lash-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wvs-attachment-image" alt="L Lash" loading="lazy" srcset="https://momilash.com/wp-content/uploads/2019/10/L-lash-300x300.png 300w, https://momilash.com/wp-content/uploads/2019/10/L-lash-400x400.png 400w, https://momilash.com/wp-content/uploads/2019/10/L-lash-280x280.png 280w, https://momilash.com/wp-content/uploads/2019/10/L-lash-100x100.png 100w, https://momilash.com/wp-content/uploads/2019/10/L-lash.png 600w" sizes="(max-width: 300px) 100vw, 300px" />				</a>
                                       </div>
                                       <div class="image-tools is-small top right show-on-hover">
                                       </div>
                                       <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                       </div>
                                       <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                          <a class="quick-view" data-prod="656" href="#quick-view">Quick View</a>			
                                       </div>
                                    </div>
                                    <div class="box-text box-text-products">
                                       <div class="title-wrapper">
                                          <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                             Volume Eyelash Extensions		
                                          </p>
                                          <p class="name product-title woocommerce-loop-product__title"><a href="https://momilash.com/l-lash/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">L Lash, L Eyelashes Extensions</a></p>
                                       </div>
                                       <div class="price-wrapper">
                                          <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>7.30</bdi></span></span>
                                       </div>
                                       <div class="add-to-cart-button">
                                          <div class="add-to-cart-button"><a href="https://momilash.com/l-lash/" class="primary is-small mb-0 product_type_variable add_to_cart_button button primary is-flat mb-0 is-small is-flat" data-product_id="656" data-product_sku="" data-quantity="1" rel="nofollow">Select options</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="product-small col has-hover product type-product post-654 status-publish instock product_cat-volume-eyelash-extensions product_tag-black product_tag-black-lash product_tag-extensions has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes wvs-pro-product wvs-pro-after-cart-button">
                              <div class="col-inner">
                                 <div class="badge-container absolute left top z-1"></div>
                                 <div class="product-small box ">
                                    <div class="box-image">
                                       <div class="image-fade_in_back">
                                          <a href="https://momilash.com/black-lash/" aria-label="Black Lash Eyelash Extensions">
                                          <img width="300" height="300" src="https://momilash.com/wp-content/uploads/2019/10/Untitled-1-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wvs-attachment-image" alt="Momi Eyelash" loading="lazy" srcset="https://momilash.com/wp-content/uploads/2019/10/Untitled-1-300x300.png 300w, https://momilash.com/wp-content/uploads/2019/10/Untitled-1-400x400.png 400w, https://momilash.com/wp-content/uploads/2019/10/Untitled-1-280x280.png 280w, https://momilash.com/wp-content/uploads/2019/10/Untitled-1-100x100.png 100w, https://momilash.com/wp-content/uploads/2019/10/Untitled-1.png 600w" sizes="(max-width: 300px) 100vw, 300px" />				</a>
                                       </div>
                                       <div class="image-tools is-small top right show-on-hover">
                                       </div>
                                       <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                       </div>
                                       <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                          <a class="quick-view" data-prod="654" href="#quick-view">Quick View</a>			
                                       </div>
                                    </div>
                                    <div class="box-text box-text-products">
                                       <div class="title-wrapper">
                                          <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                             Volume Eyelash Extensions		
                                          </p>
                                          <p class="name product-title woocommerce-loop-product__title"><a href="https://momilash.com/black-lash/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Black Lash Eyelash Extensions</a></p>
                                       </div>
                                       <div class="price-wrapper">
                                          <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>4.90</bdi></span></span>
                                       </div>
                                       <div class="add-to-cart-button">
                                          <div class="add-to-cart-button"><a href="https://momilash.com/black-lash/" class="primary is-small mb-0 product_type_variable add_to_cart_button button primary is-flat mb-0 is-small is-flat" data-product_id="654" data-product_sku="" data-quantity="1" rel="nofollow">Select options</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="product-small col has-hover product type-product post-769 status-publish last instock product_cat-volume-eyelash-extensions product_tag-extensions product_tag-y product_tag-y-lash has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes wvs-pro-product wvs-pro-after-cart-button">
                              <div class="col-inner">
                                 <div class="badge-container absolute left top z-1"></div>
                                 <div class="product-small box ">
                                    <div class="box-image">
                                       <div class="image-fade_in_back">
                                          <a href="https://momilash.com/y-lash/" aria-label="Y Lash Eyelash Extensions">
                                          <img width="300" height="300" src="https://momilash.com/wp-content/uploads/2019/10/y-lash-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wvs-attachment-image" alt="Y Lash Premium Quality" loading="lazy" srcset="https://momilash.com/wp-content/uploads/2019/10/y-lash-300x300.png 300w, https://momilash.com/wp-content/uploads/2019/10/y-lash-400x400.png 400w, https://momilash.com/wp-content/uploads/2019/10/y-lash-280x280.png 280w, https://momilash.com/wp-content/uploads/2019/10/y-lash-100x100.png 100w, https://momilash.com/wp-content/uploads/2019/10/y-lash.png 600w" sizes="(max-width: 300px) 100vw, 300px" /><img width="300" height="300" src="https://momilash.com/wp-content/uploads/2020/04/y-lash-1-300x300.jpg" class="show-on-hover absolute fill hide-for-small back-image wvs-attachment-image" alt="y lash" loading="lazy" srcset="https://momilash.com/wp-content/uploads/2020/04/y-lash-1-300x300.jpg 300w, https://momilash.com/wp-content/uploads/2020/04/y-lash-1-280x280.jpg 280w, https://momilash.com/wp-content/uploads/2020/04/y-lash-1-100x100.jpg 100w" sizes="(max-width: 300px) 100vw, 300px" />				</a>
                                       </div>
                                       <div class="image-tools is-small top right show-on-hover">
                                       </div>
                                       <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                       </div>
                                       <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                          <a class="quick-view" data-prod="769" href="#quick-view">Quick View</a>			
                                       </div>
                                    </div>
                                    <div class="box-text box-text-products">
                                       <div class="title-wrapper">
                                          <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                             Volume Eyelash Extensions		
                                          </p>
                                          <p class="name product-title woocommerce-loop-product__title"><a href="https://momilash.com/y-lash/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Y Lash Eyelash Extensions</a></p>
                                       </div>
                                       <div class="price-wrapper">
                                          <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>10.00</bdi></span></span>
                                       </div>
                                       <div class="add-to-cart-button">
                                          <div class="add-to-cart-button"><a href="https://momilash.com/y-lash/" class="primary is-small mb-0 product_type_variable add_to_cart_button button primary is-flat mb-0 is-small is-flat" data-product_id="769" data-product_sku="" data-quantity="1" rel="nofollow">Select options</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="product-small col has-hover product type-product post-9251 status-publish first instock product_cat-volume-eyelash-extensions has-post-thumbnail shipping-taxable purchasable product-type-variable wvs-pro-product wvs-pro-after-cart-button">
                              <div class="col-inner">
                                 <div class="badge-container absolute left top z-1"></div>
                                 <div class="product-small box ">
                                    <div class="box-image">
                                       <div class="image-fade_in_back">
                                          <a href="https://momilash.com/premium-ellipse-lash/" aria-label="Premium Ellipse Lash">
                                          <img width="300" height="300" src="https://momilash.com/wp-content/uploads/2022/01/premium-esp-eyelash-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wvs-attachment-image" alt="Premium esp eyelash" loading="lazy" srcset="https://momilash.com/wp-content/uploads/2022/01/premium-esp-eyelash-300x300.png 300w, https://momilash.com/wp-content/uploads/2022/01/premium-esp-eyelash-400x400.png 400w, https://momilash.com/wp-content/uploads/2022/01/premium-esp-eyelash-280x280.png 280w, https://momilash.com/wp-content/uploads/2022/01/premium-esp-eyelash-100x100.png 100w, https://momilash.com/wp-content/uploads/2022/01/premium-esp-eyelash.png 600w" sizes="(max-width: 300px) 100vw, 300px" /><img width="300" height="300" src="https://momilash.com/wp-content/uploads/2022/01/IMG_2533-300x300.png" class="show-on-hover absolute fill hide-for-small back-image wvs-attachment-image" alt="Flat lashes" loading="lazy" srcset="https://momilash.com/wp-content/uploads/2022/01/IMG_2533-300x300.png 300w, https://momilash.com/wp-content/uploads/2022/01/IMG_2533-280x280.png 280w, https://momilash.com/wp-content/uploads/2022/01/IMG_2533-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" />				</a>
                                       </div>
                                       <div class="image-tools is-small top right show-on-hover">
                                       </div>
                                       <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                       </div>
                                       <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                          <a class="quick-view" data-prod="9251" href="#quick-view">Quick View</a>			
                                       </div>
                                    </div>
                                    <div class="box-text box-text-products">
                                       <div class="title-wrapper">
                                          <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                             Volume Eyelash Extensions		
                                          </p>
                                          <p class="name product-title woocommerce-loop-product__title"><a href="https://momilash.com/premium-ellipse-lash/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Premium Ellipse Lash</a></p>
                                       </div>
                                       <div class="price-wrapper">
                                          <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>6.15</bdi></span></span>
                                       </div>
                                       <div class="add-to-cart-button">
                                          <div class="add-to-cart-button"><a href="https://momilash.com/premium-ellipse-lash/" class="primary is-small mb-0 product_type_variable add_to_cart_button button primary is-flat mb-0 is-small is-flat" data-product_id="9251" data-product_sku="" data-quantity="1" rel="nofollow">Select options</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="product-small col has-hover product type-product post-9314 status-publish instock product_cat-volume-eyelash-extensions has-post-thumbnail shipping-taxable purchasable product-type-variable wvs-pro-product wvs-pro-after-cart-button">
                              <div class="col-inner">
                                 <div class="badge-container absolute left top z-1"></div>
                                 <div class="product-small box ">
                                    <div class="box-image">
                                       <div class="image-fade_in_back">
                                          <a href="https://momilash.com/yy-lash/" aria-label="YY Lash">
                                          <img width="300" height="300" src="https://momilash.com/wp-content/uploads/2022/01/yy-lash-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wvs-attachment-image" alt="YY Lashes" loading="lazy" srcset="https://momilash.com/wp-content/uploads/2022/01/yy-lash-300x300.png 300w, https://momilash.com/wp-content/uploads/2022/01/yy-lash-400x400.png 400w, https://momilash.com/wp-content/uploads/2022/01/yy-lash-280x280.png 280w, https://momilash.com/wp-content/uploads/2022/01/yy-lash-100x100.png 100w, https://momilash.com/wp-content/uploads/2022/01/yy-lash.png 600w" sizes="(max-width: 300px) 100vw, 300px" /><img width="300" height="300" src="https://momilash.com/wp-content/uploads/2022/01/IMG_2555-300x300.png" class="show-on-hover absolute fill hide-for-small back-image wvs-attachment-image" alt="YY Lashes" loading="lazy" srcset="https://momilash.com/wp-content/uploads/2022/01/IMG_2555-300x300.png 300w, https://momilash.com/wp-content/uploads/2022/01/IMG_2555-280x280.png 280w, https://momilash.com/wp-content/uploads/2022/01/IMG_2555-100x100.png 100w" sizes="(max-width: 300px) 100vw, 300px" />				</a>
                                       </div>
                                       <div class="image-tools is-small top right show-on-hover">
                                       </div>
                                       <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                       </div>
                                       <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                          <a class="quick-view" data-prod="9314" href="#quick-view">Quick View</a>			
                                       </div>
                                    </div>
                                    <div class="box-text box-text-products">
                                       <div class="title-wrapper">
                                          <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                             Volume Eyelash Extensions		
                                          </p>
                                          <p class="name product-title woocommerce-loop-product__title"><a href="https://momilash.com/yy-lash/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">YY Lash</a></p>
                                       </div>
                                       <div class="price-wrapper">
                                          <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>15.00</bdi></span></span>
                                       </div>
                                       <div class="add-to-cart-button">
                                          <div class="add-to-cart-button"><a href="https://momilash.com/yy-lash/" class="primary is-small mb-0 product_type_variable add_to_cart_button button primary is-flat mb-0 is-small is-flat" data-product_id="9314" data-product_sku="" data-quantity="1" rel="nofollow">Select options</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="product-small col has-hover product type-product post-766 status-publish instock product_cat-volume-eyelash-extensions product_tag-extensions product_tag-w product_tag-w-lash has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes wvs-pro-product wvs-pro-after-cart-button">
                              <div class="col-inner">
                                 <div class="badge-container absolute left top z-1"></div>
                                 <div class="product-small box ">
                                    <div class="box-image">
                                       <div class="image-fade_in_back">
                                          <a href="https://momilash.com/w-lash/" aria-label="W Lash Eyelash Extensions">
                                          <img width="300" height="300" src="https://momilash.com/wp-content/uploads/2021/05/w-lash-momilash-300x300.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wvs-attachment-image" alt="w lash momilash" loading="lazy" srcset="https://momilash.com/wp-content/uploads/2021/05/w-lash-momilash-300x300.png 300w, https://momilash.com/wp-content/uploads/2021/05/w-lash-momilash-400x400.png 400w, https://momilash.com/wp-content/uploads/2021/05/w-lash-momilash-280x280.png 280w, https://momilash.com/wp-content/uploads/2021/05/w-lash-momilash-600x600.png 600w, https://momilash.com/wp-content/uploads/2021/05/w-lash-momilash-100x100.png 100w, https://momilash.com/wp-content/uploads/2021/05/w-lash-momilash.png 750w" sizes="(max-width: 300px) 100vw, 300px" /><img width="300" height="300" src="https://momilash.com/wp-content/uploads/2019/10/W-2-300x300.jpg" class="show-on-hover absolute fill hide-for-small back-image wvs-attachment-image" alt="W Lash" loading="lazy" srcset="https://momilash.com/wp-content/uploads/2019/10/W-2-300x300.jpg 300w, https://momilash.com/wp-content/uploads/2019/10/W-2-280x280.jpg 280w, https://momilash.com/wp-content/uploads/2019/10/W-2-100x100.jpg 100w" sizes="(max-width: 300px) 100vw, 300px" />				</a>
                                       </div>
                                       <div class="image-tools is-small top right show-on-hover">
                                       </div>
                                       <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                       </div>
                                       <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                          <a class="quick-view" data-prod="766" href="#quick-view">Quick View</a>			
                                       </div>
                                    </div>
                                    <div class="box-text box-text-products">
                                       <div class="title-wrapper">
                                          <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                             Volume Eyelash Extensions		
                                          </p>
                                          <p class="name product-title woocommerce-loop-product__title"><a href="https://momilash.com/w-lash/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">W Lash Eyelash Extensions</a></p>
                                       </div>
                                       <div class="price-wrapper">
                                          <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>10.00</bdi></span></span>
                                       </div>
                                       <div class="add-to-cart-button">
                                          <div class="add-to-cart-button"><a href="https://momilash.com/w-lash/" class="primary is-small mb-0 product_type_variable add_to_cart_button button primary is-flat mb-0 is-small is-flat" data-product_id="766" data-product_sku="" data-quantity="1" rel="nofollow">Select options</a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="product-small col has-hover product type-product post-658 status-publish last instock product_cat-volume-eyelash-extensions product_tag-extensions product_tag-mink product_tag-mink-lash has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes wvs-pro-product wvs-pro-after-cart-button">
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
                           <div class="product-small col has-hover product type-product post-659 status-publish first instock product_cat-volume-eyelash-extensions product_tag-extensions product_tag-silk product_tag-silk-lash has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes wvs-pro-product wvs-pro-after-cart-button">
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