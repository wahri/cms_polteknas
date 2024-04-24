@extends('website.website')

@section('content')
    <section class="container body">

        <div class="kingster-page-title-wrap kingster-style-medium kingster-left-align"
            style="background-image: url({{ asset('images/home/thumbnail-video.png') }}) ;">
            <div class="kingster-header-transparent-substitute"></div>
            <div class="kingster-page-title-overlay"></div>
            <div class="kingster-page-title-bottom-gradient"></div>
            <div class="kingster-page-title-container kingster-container">
                <div class="kingster-page-title-content kingster-item-pdlr">
                    <div class="kingster-page-caption">Politeknik Pengadaan Nasional</div>
                    <h1 class="kingster-page-title">Berita dan Event</h1>
                </div>
            </div>
        </div>


        <div class="kingster-page-wrapper" id="kingster-page-wrapper">
            <div class="gdlr-core-page-builder-body">
                <div class="gdlr-core-pbf-sidebar-wrapper ">
                    <div
                        class="clearfix gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 gdlr-core-js gdlr-core-container">
                        <div
                            class="gdlr-core-pbf-sidebar-content gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-right">
                            <div class="gdlr-core-pbf-background-wrap" style="background-color: #f7f7f7 ;"></div>
                            <div class="gdlr-core-pbf-sidebar-content-inner">
                                <div class="gdlr-core-pbf-element">
                                    <div class="clearfix gdlr-core-blog-item gdlr-core-item-pdb gdlr-core-style-blog-full-with-frame"
                                        style="padding-bottom: 40px ;">
                                        <div class="clearfix gdlr-core-blog-item-holder gdlr-core-js-2"
                                            data-layout="fitrows">
                                            {{-- @dd($paginator) --}}
                                            @foreach ($paginator as $item)
                                                <div
                                                    class="gdlr-core-item-list gdlr-core-blog-full gdlr-core-item-mglr gdlr-core-style-left">
                                                    <div
                                                        class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                        <a href="#"><img src="{{ $item->cover_photo->thumbUrl }}"
                                                                width="900" height="500" alt="{{ $item->name }}" />
                                                            <div class="gdlr-core-sticky-banner gdlr-core-title-font"><i
                                                                    class="fa fa-bolt"></i>Sticky Post</div>
                                                        </a>
                                                    </div>
                                                    <div class="gdlr-core-blog-full-frame gdlr-core-skin-e-background">
                                                        <div class="clearfix gdlr-core-blog-full-head">
                                                            <div class="gdlr-core-blog-full-head-right">
                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title"
                                                                    style="font-size: 33px ;font-weight: 700 ;letter-spacing: 0px ;">
                                                                    <a
                                                                        href="/articles/{{ $item->category->slug }}/{{ $item->slug }}">{!! $item->name !!}</a>
                                                                </h3>
                                                                <div
                                                                    class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                    <span
                                                                        class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                        <a href="#">{!! $item->active_from->format('\<\s\t\r\o\n\g\>d\</\s\t\r\o\n\g\> M Y') !!}</a>
                                                                    </span>
                                                                    {{-- <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author">
                                                                        <span class="gdlr-core-head" >By</span>
                                                                        <a href="#" title="Posts by John Smith" rel="author">John Smith</a>
                                                                    </span> --}}
                                                                    <span
                                                                        class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category">
                                                                        <a href="#"
                                                                            rel="tag">{{ $item->category->name }}</a>
                                                                    </span>
                                                                    {{-- <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-comment-number">
                                                                        <span class="gdlr-core-head" >
                                                                            <i class="fa fa-comments-o" ></i>
                                                                        </span>
                                                                        <a href="##respond">3 </a>
                                                                    </span> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-blog-content">
                                                            {!! $item->summary !!}
                                                            <div class="clear"></div>
                                                            <a class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle"
                                                                href="/articles/{{ $item->category->slug }}/{{ $item->slug }}">Read
                                                                More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div
                                            class="gdlr-core-pagination gdlr-core-style-circle gdlr-core-left-align gdlr-core-item-pdlr">
                                            @if ($paginator->currentPage() > 1)
                                                <a class="prev page-numbers"
                                                    href="{{ $paginator->path() }}?halaman={{ $paginator->currentPage() - 1 }}"></a>
                                            @endif
                                            @if ($paginator->lastPage() > 1)
                                                @for ($i = 0; $i < $paginator->lastPage(); $i++)
                                                    @if ($paginator->currentPage() == $i + 1)
                                                        <span aria-current='page'
                                                            class='page-numbers current'>{{ $i + 1 }}</span>
                                                    @else
                                                        <a class='page-numbers'
                                                            href='{{ $paginator->path() }}?halaman={{ $i + 1 }}'>{{ $i + 1 }}</a>
                                                    @endif
                                                @endfor
                                            @endif
                                            @if ($paginator->currentPage() < $paginator->lastPage())
                                            <a class="next page-numbers"
                                                href="{{ $paginator->path() }}?halaman={{ $paginator->currentPage() + 1 }}"></a>
                                                
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @include('website.partials.side_articles')


                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection

@section('scripts')
    @parent
    <script type="text/javascript" charset="utf-8">
        $(function() {
            // paginator
            new PaginationClass();
        })
    </script>
@endsection
