@foreach ($item->sections->sortBy('list_order') as $section)
    @if (isset($section->name))
        <h2>{!! $section->name !!}</h2>
    @endif

    {!! $section->content !!}

    @include('website.pages.page_gallery', ['content' => $section])
    @include('website.pages.page_videos', ['content' => $section])
    @include('website.pages.page_documents', ['content' => $section])

    @if ($section->layout == 'faq')
        @include('website.faq.faq')
    @endif

    @if ($section->layout == 'articles')
        @include('website.articles.pagination')
    @endif

    @if ($section->layout == 'products')
        @include('website.shop.pagination')
    @endif

    @if ($section->layout == 'contact')
        @include('website.partials.form.contact_form', [
            'resourceable' => isset($section) ? $section : $item,
        ])
    @endif

    @if (isset($section->components) && $section->components->count() > 0)
        @foreach ($section->components->sortBy('list_order') as $content)
            <div class="gdlr-core-pbf-sidebar-content {{ isset($section->layout) && strpos($section->layout, 'gdlr-core-column') !== false ? $section->layout : 'gdlr-core-column-60' }} gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left"
                style="padding: 30px 0px 30px 0px;">
                <div class="gdlr-core-pbf-sidebar-content-inner">
                    @include('website.pages.page_heading')
                    @include('website.pages.page_content')

                    @include('website.pages.page_gallery')
                    @include('website.pages.page_videos')
                    @include('website.pages.page_documents')

                </div>
            </div>
        @endforeach

        @if ($section->layout == 'gdlr-core-column-40')
            @include('website.partials.page_side')
        @endif
    @endif
@endforeach
