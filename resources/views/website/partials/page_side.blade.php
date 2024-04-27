<div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right  kingster-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height"
    style="padding: 30px 0px 30px 0px;">
    <div class="gdlr-core-sidebar-item gdlr-core-item-pdlr">
        
        @if (isset($articles) && $articles->count() >= 1)
            <div id="gdlr-core-recent-post-widget-1" class="widget widget_gdlr-core-recent-post-widget kingster-widget">
                <h3 class="kingster-widget-title">Berita Terbaru</h3><span class="clear"></span>
                <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-1">
                    @foreach ($articles as $k => $item)
                        <div class="clearfix gdlr-core-recent-post-widget">
                            <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img
                                    src="{{ $item->cover_photo->thumbUrl }}" alt="{{ $item->name }}" width="150"
                                    height="150" title="{{ $item->name }}" /></div>
                            <div class="gdlr-core-recent-post-widget-content">
                                <div class="gdlr-core-recent-post-widget-title"><a
                                        href="/articles/{{ $item->category->slug }}/{{ $item->slug }}">{{ $item->name }}</a></div>
                                <div class="gdlr-core-recent-post-widget-info">
                                    <span
                                        class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                        <a href="#">{!! $item->active_from->format('\<\s\t\r\o\n\g\>d\</\s\t\r\o\n\g\> M Y') !!}</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</div>

{{-- <div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right kingster-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding gdlr-core-line-height"
    style="padding: 60px 30px 30px 0px;">
    <div class="gdlr-core-pbf-background-wrap" style="background-color: #f7f7f7 ;"></div>
    <div class="gdlr-core-sidebar-item gdlr-core-item-pdlr">
        @if (isset($articles) && $articles->count() >= 1)
            <div id="gdlr-core-recent-post-widget-1" class="widget widget_gdlr-core-recent-post-widget kingster-widget">
                <h3 class="kingster-widget-title">Berita Terbaru</h3><span class="clear"></span>
                <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-1">
                    @foreach ($articles as $k => $item)
                        <div class="clearfix gdlr-core-recent-post-widget">
                            <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img
                                    src="{{ $item->cover_photo->thumbUrl }}" alt="{{ $item->name }}" width="150"
                                    height="150" title="{{ $item->name }}" /></div>
                            <div class="gdlr-core-recent-post-widget-content">
                                <div class="gdlr-core-recent-post-widget-title"><a
                                        href="/articles/{{ $item->category->slug }}/{{ $item->slug }}">{{ $item->name }}</a></div>
                                <div class="gdlr-core-recent-post-widget-info">
                                    <span
                                        class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                        <a href="#">{!! $item->active_from->format('\<\s\t\r\o\n\g\>d\</\s\t\r\o\n\g\> M Y') !!}</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        <div id="tag_cloud-1" class="widget widget_tag_cloud kingster-widget">
            <h3 class="kingster-widget-title">Kategori Berita</h3><span class="clear"></span>
            <div class="tagcloud">
                @foreach ($articleCategory as $category)
                    <a href="{{ Request::url() }}/{{ $category->slug }}" class="tag-cloud-link tag-link-14 tag-link-position-3">{{ $category->name }}</a>
                @endforeach
            </div>
        </div>
    </div>
</div> --}}
