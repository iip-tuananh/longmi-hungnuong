@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
{{$title_page}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main id="main" class="">
   <div id="content" class="blog-wrapper blog-archive page-wrapper">
      <div class="row row-large row-divided ">
         <div class="large-9 col">
            <div id="post-list">
               @foreach ($blogs as $blog)
                  <article id="post-8722" class="post-8722 post type-post status-publish format-standard has-post-thumbnail hentry category-news tag-hot-tub-with-eyelash-extensions">
                     <div class="article-inner ">
                        <header class="entry-header">
                           <div class="entry-header-text entry-header-text-top text-center">
                              <h6 class="entry-category is-xsmall">
                                 <a href="{{route('listCateBlog', ['slug'=>$blog->category])}}" rel="category tag">{{languageName($blog->cate->name)}}</a>
                              </h6>
                              <h2 class="entry-title"><a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" rel="bookmark" class="plain">{{languageName($blog->title)}}</a></h2>
                              <div class="entry-divider is-divider small"></div>
                              <div class="entry-meta uppercase is-xsmall">
                                 <span class="posted-on">Posted on <a href="" rel="bookmark"><time class="entry-date published updated">{{date_format($blog->created_at, 'M d, Y')}}</time></a></span><span class="byline"> by <span class="meta-author vcard">HUNGNUONG EYELASH</span></span>	
                              </div>
                           </div>
                           <div class="entry-image relative">
                              <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}">
                              <img width="500" height="334" src="{{$blog->image}}" class="attachment-large size-large wvs-attachment-image wp-post-image" alt="{{languageName($blog->title)}}" loading="lazy" /></a>
                              <div class="badge absolute top post-date badge-outline">
                                 <div class="badge-inner">
                                    <span class="post-date-day">{{date_format($blog->created_at, 'd')}}</span><br>
                                    <span class="post-date-month is-small">{{date_format($blog->created_at, 'M')}}</span>
                                 </div>
                              </div>
                           </div>
                        </header>
                        <div class="entry-content">
                           <div class="entry-summary">
                              <div class="desc">
                                 {{languageName($blog->description)}}
                              </div>
                              <div class="text-center">
                                 <a class="more-link button primary is-outline is-smaller" href="{{route('detailBlog', ['slug'=>$blog->slug])}}">Continue reading <span class="meta-nav">&rarr;</span></a>
                              </div>
                           </div>
                        </div>
                        <footer class="entry-meta clearfix">
                           {{-- <span class="cat-links">
                           Posted in <a href="https://momilash.com/category/news/" rel="category tag">News</a>		</span>
                           <span class="sep">&nbsp;|&nbsp;</span>
                           <span class="tags-links">
                           Tagged <a href="https://momilash.com/tag/hot-tub-with-eyelash-extensions/" rel="tag">hot tub with eyelash extensions</a>		</span>
                           <span class="comments-link pull-right"><a href="https://momilash.com/hot-tub-with-eyelash-extensions/#respond">Leave a comment</a></span> --}}
                        </footer>
                     </div>
                  </article>
               @endforeach
               <div class="paginate">
                  {{$blogs->links()}}
               </div>
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
               <aside id="flatsome_recent_posts-17" class="widget flatsome_recent_posts">
                  <span class="widget-title "><span>Latest Posts</span></span>
                  <div class="is-divider small"></div>
                  <ul>
                     @foreach ($blogs as $blog)
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
                     @endforeach
                  </ul>
               </aside>
               {{-- <aside id="tag_cloud-9" class="widget widget_tag_cloud">
                  <span class="widget-title "><span>Categories</span></span>
                  <div class="is-divider small"></div>
                  <div class="tagcloud">
                     @foreach ($blogCate as $cate)
                        <a href="{{route('listCateBlog', ['slug'=>$cate->slug])}}" class="tag-cloud-link tag-link-261 tag-link-position-1" style="font-size: 8pt;" aria-label="{{languageName($cate->name)}}">{{languageName($cate->name)}}</a>
                     @endforeach
                  </div>
               </aside> --}}
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