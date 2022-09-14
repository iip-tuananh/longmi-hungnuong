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
@section('content')
<main id="main" class="">
    <div id="content" class="content-area page-wrapper" role="main">
    <div class="row row-main">
        <div class="large-12 col">
            <div class="col-inner">
                <div class="container section-title-container" >
                <h3 class="section-title section-title-normal"><b></b><span class="section-title-main" >Frequently asked questions about HUNGNUONG EYELASH CO.,LTD</span><b></b></h3>
                </div>
                <div class="accordion" rel="1">
                    @foreach ($services as $item)
                        <div class="accordion-item">
                            <a href="#" class="accordion-title plain"><button class="toggle"><i class="icon-angle-down"></i></button><span>{{$item->name}}</span></a>
                            <div class="accordion-inner">
                                {!!languageName($item->content)!!}
                            </div>
                        </div>
                    @endforeach
                </div>
                <div id="gap-1863080607" class="gap-element clearfix" style="display:block; height:auto;">
                <style>
                    #gap-1863080607 {
                    padding-top: 30px;
                    }
                </style>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection