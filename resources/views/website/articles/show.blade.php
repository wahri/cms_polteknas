@extends('website.website')

@section('content')
    <section class="container body">

        {{-- @include('website.partials.page_header') --}}
        <div class="kingster-blog-title-wrap  kingster-style-small"
            style="background:linear-gradient(0deg, rgba(42, 42, 42, 0.515), rgba(0, 0, 0, 0.465)), url({{ asset('images/home/page-header.png') }});
        background-size:cover;">
            <div class="kingster-header-transparent-substitute"></div>
            <div class="kingster-blog-title-top-overlay"></div>
            <div class="kingster-blog-title-overlay"></div>
            <div class="kingster-blog-title-bottom-overlay"></div>
            <div class="kingster-blog-title-container kingster-container">
                <div class="kingster-blog-title-content kingster-item-pdlr">
                    <header class="kingster-single-article-head clearfix">
                        <div class="kingster-single-article-date-wrapper  post-date updated">
                            <div class="kingster-single-article-date-day">{!! $article->active_from->format('d') !!}</div>
                            <div class="kingster-single-article-date-month">{!! $article->active_from->format('M') !!}</div>
                        </div>
                        <div class="kingster-single-article-head-right">
                            <h1 class="kingster-single-article-title">
                                {{ $article->name }}
                            </h1>
                            <div class="kingster-blog-info-wrapper">
                                <div
                                    class="kingster-blog-info kingster-blog-info-font kingster-blog-info-date post-date updated ">
                                    <a href="#">Diposting pada {!! $article->active_from->format('d M Y') !!}</a>
                                </div>
                            </div>
                        </div>
                    </header>
                </div>
            </div>
        </div>

        <div class="gdlr-core-pbf-sidebar-content gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left"
            style="padding: 30px 0px 30px 0px;">
            <div class="gdlr-core-pbf-sidebar-content-inner">
                @if ($article->cover_photo)
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align"
                            style="padding-bottom: 40px ;">
                            <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle"
                                style="border-width: 0px;"><img src="{{ $article->cover_photo->url }}" width="1000"
                                    height="365" alt="{{ $article->cover_photo->name }}"
                                    style="max-height: 300px; object-fit: contain" /></div>
                        </div>
                    </div>
                @endif
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"
                        style="padding-bottom: 20px ;">
                        <div class="gdlr-core-text-box-item-content" style="font-size: 17px ;text-transform: none ;">
                            {!! $article->content !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>

        @include('website.partials.page_side')


    </section>
@endsection
