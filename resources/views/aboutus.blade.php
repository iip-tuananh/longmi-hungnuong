@extends('layouts.main.master')
@section('title')
About Us
@endsection
@section('description')
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main id="main" class="">
   <div id="content" role="main" class="content-area">
      <div class="banner has-hover has-parallax" id="banner-1282890589">
         <div class="banner-inner fill">
            <div class="banner-bg fill" data-parallax="-3" data-parallax-container=".banner" data-parallax-background>
               <div class="bg fill bg-fill "></div>
            </div>
            <div class="banner-layers container">
               <div class="fill banner-link"></div>
               <div id="text-box-1329860283" class="text-box banner-layer x50 md-x50 lg-x50 y45 md-y45 lg-y45 res-text">
                  <div class="text-box-content text dark">
                     <div class="text-inner text-center">
                        <h1 class="lead">About Us</h1>
                     </div>
                  </div>
                  <style>
                     #text-box-1329860283 {
                     width: 60%;
                     }
                     #text-box-1329860283 .text-box-content {
                     font-size: 100%;
                     }
                  </style>
               </div>
            </div>
         </div>
         <style>
            #banner-1282890589 {
            padding-top: 250px;
            }
            #banner-1282890589 .bg.bg-loaded {
            background-image: url({{$pageContent->image}});
            }
            @media (min-width:550px) {
            #banner-1282890589 {
            padding-top: 470px;
            }
            }
         </style>
      </div>
      <div id="gap-753551680" class="gap-element clearfix" style="display:block; height:auto;">
         <style>
            #gap-753551680 {
            padding-top: 50px;
            }
         </style>
      </div>
      <section class="section" id="section_1261126801">
         <div class="bg section-bg fill bg-fill  bg-loaded" >
         </div>
         <div class="section-content relative">
            <div class="row align-middle align-center"  id="row-1172703005">
               <div id="col-1592712011" class="col small-12 large-12"  >
                  <div class="col-inner text-left"  >
                     <div id="text-3229897717" class="text">
                        <h2>WHO WE ARE </h2>
                        <style>
                           #text-3229897717 {
                           font-size: 1.3rem;
                           text-align: center;
                           color: rgb(0, 0, 0);
                           }
                           #text-3229897717 > * {
                           color: rgb(0, 0, 0);
                           }
                        </style>
                     </div>
                  </div>
                  <style>
                     #col-1592712011 > .col-inner {
                     padding: 0px 0px 30px 0px;
                     }
                  </style>
               </div>
               <div id="col-1305666640" class="col medium-12 small-12 large-12"  >
                  <div class="col-inner text-left"  >
                     <div id="text-1323547401" class="text">
                        {!!$pageContent->content!!}
                        <style>
                           #text-1323547401 {
                           text-align: left;
                           color: rgb(0, 0, 0);
                           }
                           #text-1323547401 > * {
                           color: rgb(0, 0, 0);
                           }
                        </style>
                     </div>
                  </div>
                  <style>
                     #col-1305666640 > .col-inner {
                     padding: 0px 0px 0px 0px;
                     }
                  </style>
               </div>
            </div>
         </div>
         <style>
            #section_1261126801 {
            padding-top: 0px;
            padding-bottom: 0px;
            background-color: rgb(255, 255, 255);
            }
         </style>
      </section>
      <section class="section" id="section_690019336">
         <div class="bg section-bg fill bg-fill  bg-loaded" >
         </div>
         <div class="section-content relative">
            <div id="text-3530251485" class="text">
               <h3>EXPERIENCES</h3>
               <style>
                  #text-3530251485 {
                  font-size: 1.3rem;
                  text-align: center;
                  color: rgb(255, 255, 255);
                  }
                  #text-3530251485 > * {
                  color: rgb(255, 255, 255);
                  }
               </style>
            </div>
            <div class="row align-equal row-box-shadow-2 row-box-shadow-3-hover"  id="row-585705094">
               <div id="col-743850899" class="col medium-4 small-12 large-4"  >
                  <div class="col-inner" style="background-color:rgb(255, 255, 255);" >
                     <div id="text-3151491762" class="text">
                        <h3>100% Handmade</h3>
                        <p>With modern technology 4.0 like today, we know that it is not difficult to apply machines in production.</p>
                        <p>However, quality is always a top priority for our products and must be checked by the eye. Therefore, we are confident and committed that 100% of our products are handcrafted by hand with a strict quality control process.</p>
                        <style>
                           #text-3151491762 {
                           text-align: left;
                           color: rgb(0, 0, 0);
                           }
                           #text-3151491762 > * {
                           color: rgb(0, 0, 0);
                           }
                        </style>
                     </div>
                  </div>
               </div>
               <div id="col-30450758" class="col medium-4 small-12 large-4"  >
                  <div class="col-inner" style="background-color:rgb(255, 255, 255);" >
                     <div id="text-1495921057" class="text">
                        <h3>Factory 2000m²</h3>
                        <p>The needs of our customers are something that we cannot predict in advance. Previously, with large quantity orders, we needed a lot of time.</p>
                        <p>But now, to meet our customers’ needs in the best way, we have moved the factory to a newer location with an area of ​​2000m², with nearly 100 skilled workers working every day, every hours.</p>
                        <style>
                           #text-1495921057 {
                           color: rgb(0, 0, 0);
                           }
                           #text-1495921057 > * {
                           color: rgb(0, 0, 0);
                           }
                        </style>
                     </div>
                  </div>
               </div>
               <div id="col-1864472549" class="col medium-4 small-12 large-4"  >
                  <div class="col-inner" style="background-color:rgb(255, 255, 255);" >
                     <div id="text-929069389" class="text">
                        <h3>OEM/ODM Services</h3>
                        <p>90% of customers want to be processed with their own brand name. So we are always ready to meet that.</p>
                        <p>Private label is how you assert your name and products in the market. We have been and always will be helping our customers do that by delivering top-quality products.</p>
                        <style>
                           #text-929069389 {
                           color: rgb(0, 0, 0);
                           }
                           #text-929069389 > * {
                           color: rgb(0, 0, 0);
                           }
                        </style>
                     </div>
                  </div>
               </div>
               <style>
                  #row-585705094 > .col > .col-inner {
                  padding: 30px;
                  }
               </style>
            </div>
         </div>
         <style>
            #section_690019336 {
            padding-top: 30px;
            padding-bottom: 30px;
            background-color: rgb(0, 0, 0);
            }
         </style>
      </section>
      <div id="gap-1168418442" class="gap-element clearfix" style="display:block; height:auto;">
         <style>
            #gap-1168418442 {
            padding-top: 50px;
            }
         </style>
      </div>
      <div id="text-4268320804" class="text">
         <h3>COLLECTIONS</h3>
         <style>
            #text-4268320804 {
            font-size: 1.3rem;
            text-align: center;
            color: rgb(0, 0, 0);
            }
            #text-4268320804 > * {
            color: rgb(0, 0, 0);
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
                              <img src="{{$type->avatar}}" alt="{{languageName($type->name)}}" width="300" height="300" />                                                      
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
         {{-- <div class="product-category col" >
            <div class="col-inner">
               <a href="https://momilash.com/colored-eyelash-extensions/">
                  <div class="box box-category has-hover box-bounce ">
                     <div class="box-image" >
                        <div class="image-cover" style="padding-top:107%;">
                           <img src="https://momilash.com/wp-content/uploads/2021/05/2tone-lash-blackred-momilash-300x300.png" alt="Colored Eyelash Extensions" width="300" height="300" />                                                      
                        </div>
                     </div>
                     <div class="box-text text-center" >
                        <div class="box-text-inner">
                           <h5 class="uppercase header-title">
                              Colored Eyelash Extensions                      
                           </h5>
                           <p class="is-xsmall uppercase count ">
                              11 Products                      
                           </p>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
         </div>
         <div class="product-category col" >
            <div class="col-inner">
               <a href="https://momilash.com/premade-fan-eyelash-extensions/">
                  <div class="box box-category has-hover box-bounce ">
                     <div class="box-image" >
                        <div class="image-cover" style="padding-top:107%;">
                           <img src="https://momilash.com/wp-content/uploads/2021/12/W-3-300x300.png" alt="Pre-Made Fan Eyelash Extensions" width="300" height="300" />                                                      
                        </div>
                     </div>
                     <div class="box-text text-center" >
                        <div class="box-text-inner">
                           <h5 class="uppercase header-title">
                              Pre-Made Fan Eyelash Extensions                      
                           </h5>
                           <p class="is-xsmall uppercase count ">
                              6 Products                      
                           </p>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
         </div>
         <div class="product-category col" >
            <div class="col-inner">
               <a href="https://momilash.com/mellow-eyelashes/">
                  <div class="box box-category has-hover box-bounce ">
                     <div class="box-image" >
                        <div class="image-cover" style="padding-top:107%;">
                           <img src="https://momilash.com/wp-content/uploads/2020/10/mellow-lashes-momilash-300x300.png" alt="Mellow Eyelashes" width="300" height="300" />                                                      
                        </div>
                     </div>
                     <div class="box-text text-center" >
                        <div class="box-text-inner">
                           <h5 class="uppercase header-title">
                              Mellow Eyelashes                      
                           </h5>
                           <p class="is-xsmall uppercase count ">
                              1 Product                      
                           </p>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
         </div>
         <div class="product-category col" >
            <div class="col-inner">
               <a href="https://momilash.com/flare-eyelashes/">
                  <div class="box box-category has-hover box-bounce ">
                     <div class="box-image" >
                        <div class="image-cover" style="padding-top:107%;">
                           <img src="https://momilash.com/wp-content/uploads/2022/01/flare-lashes-momilash-300x300.png" alt="Flare Eyelashes" width="300" height="300" />                                                      
                        </div>
                     </div>
                     <div class="box-text text-center" >
                        <div class="box-text-inner">
                           <h5 class="uppercase header-title">
                              Flare Eyelashes                      
                           </h5>
                           <p class="is-xsmall uppercase count ">
                              2 Products                      
                           </p>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
         </div>
         <div class="product-category col" >
            <div class="col-inner">
               <a href="https://momilash.com/cleansing-collection/">
                  <div class="box box-category has-hover box-bounce ">
                     <div class="box-image" >
                        <div class="image-cover" style="padding-top:107%;">
                           <img src="https://momilash.com/wp-content/uploads/2021/12/catogary1.jpg" alt="Cleansing Collection" width="300" height="300" />                                                      
                        </div>
                     </div>
                     <div class="box-text text-center" >
                        <div class="box-text-inner">
                           <h5 class="uppercase header-title">
                              Cleansing Collection                      
                           </h5>
                           <p class="is-xsmall uppercase count ">
                              5 Products                      
                           </p>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
         </div>
         <div class="product-category col" >
            <div class="col-inner">
               <a href="https://momilash.com/eyelash-glue-manufacturer/">
                  <div class="box box-category has-hover box-bounce ">
                     <div class="box-image" >
                        <div class="image-cover" style="padding-top:107%;">
                           <img src="https://momilash.com/wp-content/uploads/2021/12/catogary2.jpg" alt="Glue Collection" width="300" height="300" />                                                      
                        </div>
                     </div>
                     <div class="box-text text-center" >
                        <div class="box-text-inner">
                           <h5 class="uppercase header-title">
                              Glue Collection                      
                           </h5>
                           <p class="is-xsmall uppercase count ">
                              7 Products                      
                           </p>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
         </div>
         <div class="product-category col" >
            <div class="col-inner">
               <a href="https://momilash.com/cream-remover-pack/">
                  <div class="box box-category has-hover box-bounce ">
                     <div class="box-image" >
                        <div class="image-cover" style="padding-top:107%;">
                           <img src="https://momilash.com/wp-content/uploads/2021/12/catogary1.jpg" alt="Cream Remover Pack" width="300" height="300" />                                                      
                        </div>
                     </div>
                     <div class="box-text text-center" >
                        <div class="box-text-inner">
                           <h5 class="uppercase header-title">
                              Cream Remover Pack                      
                           </h5>
                           <p class="is-xsmall uppercase count ">
                              7 Products                      
                           </p>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
         </div>
         <div class="product-category col" >
            <div class="col-inner">
               <a href="https://momilash.com/primer-collection/">
                  <div class="box box-category has-hover box-bounce ">
                     <div class="box-image" >
                        <div class="image-cover" style="padding-top:107%;">
                           <img src="https://momilash.com/wp-content/uploads/2021/12/catogary3.jpg" alt="Primer Collection" width="300" height="300" />                                                      
                        </div>
                     </div>
                     <div class="box-text text-center" >
                        <div class="box-text-inner">
                           <h5 class="uppercase header-title">
                              Primer Collection                      
                           </h5>
                           <p class="is-xsmall uppercase count ">
                              6 Products                      
                           </p>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
         </div>
         <div class="product-category col" >
            <div class="col-inner">
               <a href="https://momilash.com/gel-remover-pack/">
                  <div class="box box-category has-hover box-bounce ">
                     <div class="box-image" >
                        <div class="image-cover" style="padding-top:107%;">
                           <img src="https://momilash.com/wp-content/uploads/2021/12/catogary5.jpg" alt="Gel Remover Pack" width="300" height="300" />                                                      
                        </div>
                     </div>
                     <div class="box-text text-center" >
                        <div class="box-text-inner">
                           <h5 class="uppercase header-title">
                              Gel Remover Pack                      
                           </h5>
                           <p class="is-xsmall uppercase count ">
                              4 Products                      
                           </p>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
         </div>
         <div class="product-category col" >
            <div class="col-inner">
               <a href="https://momilash.com/other-liquid-products/">
                  <div class="box box-category has-hover box-bounce ">
                     <div class="box-image" >
                        <div class="image-cover" style="padding-top:107%;">
                           <img src="https://momilash.com/wp-content/uploads/woocommerce-placeholder-300x300.png" alt="Other Liquid Products" width="300" height="300" />                                                      
                        </div>
                     </div>
                     <div class="box-text text-center" >
                        <div class="box-text-inner">
                           <h5 class="uppercase header-title">
                              Other Liquid Products                      
                           </h5>
                           <p class="is-xsmall uppercase count ">
                              10 Products                      
                           </p>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
         </div> --}}
      </div>
   </div>
</main>
@endsection