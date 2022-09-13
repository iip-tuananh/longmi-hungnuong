@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main id="main" class="">
	<div id="content" class="blog-wrapper blog-single page-wrapper">
	<div class="row row-large row-divided ">
		<div class="large-9 col">
			<article id="post-8722" class="post-8722 post type-post status-publish format-standard has-post-thumbnail hentry category-news tag-hot-tub-with-eyelash-extensions post-ftoc">
				<div class="article-inner ">
				<header class="entry-header">
					<div class="entry-header-text entry-header-text-top text-center">
						<h6 class="entry-category is-xsmall">
							<a href="{{route('listCateBlog', ['slug'=>$blog_detail->category])}}" rel="category tag">{{languageName($blog_detail->cate->name)}}</a>
						</h6>
						<h1 class="entry-title">{{languageName($blog_detail->title)}}</h1>
						<div class="entry-divider is-divider small"></div>
						<div class="entry-meta uppercase is-xsmall">
							<span class="posted-on">Posted on <a href="" rel="bookmark"><time class="entry-date published updated">{{date_format($blog_detail->created_at, 'M d, Y')}}</time></a></span><span class="byline"> by <span class="meta-author vcard">HUNGNUONG EYELASH</span></span>	
						</div>
					</div>
					<div class="entry-image relative">
						<a href="">
						<img width="500" height="334" src="{{$blog_detail->image}}" class="attachment-large size-large wvs-attachment-image wp-post-image" alt="{{languageName($blog_detail->title)}}" loading="lazy" /></a>
						<div class="badge absolute top post-date badge-outline">
							<div class="badge-inner">
							<span class="post-date-day">{{date_format($blog_detail->created_at, 'd')}}</span><br>
							<span class="post-date-month is-small">{{date_format($blog_detail->created_at, 'M')}}</span>
							</div>
						</div>
					</div>
				</header>
				<div class="entry-content single-page">
					{!!languageName($blog_detail->content)!!}
				</div>
				</div>
			</article>
			@if (count($blogs) > 1)
				<h2 class="ftwp-heading">Related posts</h2>
				<div class="row large-columns-3 medium-columns- small-columns-1 slider row-slider slider-nav-reveal slider-nav-push"  data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
					@foreach ($blogs as $blog)
					@if ($blog->id != $blog_detail->id)
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
									</div>
									</div>
									<div class="badge absolute top post-date badge-outline">
										<div class="badge-inner">
											<span class="post-date-day">17</span><br>
											<span class="post-date-month is-xsmall">May</span>
										</div>
									</div>
								</div>
							</a>
						</div>
						</div>
					@endif
					@endforeach
				</div>
			@endif
			<h2 class="ftwp-heading">We have a wide range of products to meet the needs of our customers:</h2>
			<div class="row large-columns-4 medium-columns-3 small-columns-2 row-small slider row-slider slider-nav-reveal"  data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
				@foreach ($typeProduct as $type)
					<div class="product-category col" >
						<div class="col-inner">
							<a href="{{route('allListProType', ['cate'=>$type->cate_slug, 'type'=>$type->slug])}}">
								<div class="box box-category has-hover box-badge hover-dark ">
									<div class="box-image" >
									<div class="" >
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
		</div>
		<div class="post-sidebar large-3 col">
			<div id="secondary" class="widget-area " role="complementary">
			<aside id="text-13" class="widget widget_text">
				<span class="widget-title "><span>About</span></span>
				<div class="is-divider small"></div>
				<div class="textwidget">
					<p>90% of customers want to be processed with their own brand name. So we are always ready to meet that.</p>
				</div>
			</aside>
			@if (count($blogs) > 1)
				<aside id="flatsome_recent_posts-17" class="widget flatsome_recent_posts">
					<span class="widget-title "><span>Latest Posts</span></span>
					<div class="is-divider small"></div>
					<ul>
						@foreach ($blogs as $blog)
						@if ($blog->id != $blog_detail->id)
							<li class="recent-blog-posts-li">
							<div class="flex-row recent-blog-posts align-top pt-half pb-half">
								<div class="flex-col mr-half">
									<div class="badge post-date badge-small badge-outline">
										<div class="badge-inner bg-fill" >
										<span class="post-date-day">{{date_format($blog->created_at, 'd')}}</span><br>
										<span class="post-date-month is-xsmall">{{date_format($blog->created_at, 'M')}}</span>
										</div>
									</div>
								</div>
								<div class="flex-col flex-grow">
									<a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">{{languageName($blog->title)}}</a>
								</div>
							</div>
							</li>
						@endif
						@endforeach
					</ul>
				</aside>
			@endif
			<aside id="categories-14" class="widget widget_categories">
				<span class="widget-title "><span>Categories</span></span>
				<div class="is-divider small"></div>
				<ul>
					@foreach ($blogCate as $cate)
						<li class="cat-item cat-item-1"><a href="{{route('listCateBlog', ['slug'=>$cate->slug])}}">{{languageName($cate->name)}}</a></li>
					@endforeach
				</ul>
			</aside>
			</div>
		</div>
	</div>
	</div>
</main>
@endsection