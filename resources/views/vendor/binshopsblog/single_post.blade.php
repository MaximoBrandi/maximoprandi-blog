@extends("layouts.app",['title'=>$post->gen_seo_title()])

@section('blog-custom-css')
    <link type="text/css" href="{{ asset('binshops-blog.css') }}" rel="stylesheet">
@endsection

@section("content")

    @if(config("binshopsblog.reading_progress_bar"))
        <div id="scrollbar">
            <div id="scrollbar-bg"></div>
        </div>
    @endif

    {{--https://github.com/binshops/laravel-blog--}}

    <div class='container'>
    <div class='row'>
        <div class='col-sm-12 col-md-12 col-lg-12'>

            @include("binshopsblog::partials.show_errors")
            @include("binshopsblog::partials.full_post_details")

        </div>
    </div>
    </div>

@endsection

@section('blog-custom-js')
    <script src="{{asset('binshops-blog.js')}}"></script>
@endsection
