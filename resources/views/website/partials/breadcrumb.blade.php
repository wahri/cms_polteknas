@if (isset($breadcrumbItems))
    @if ($page->id != 1)
        <div class="kingster-breadcrumbs">
            <div class="kingster-breadcrumbs-container kingster-container">
                <div class="kingster-breadcrumbs-item kingster-item-pdlr">
                    @foreach ($breadcrumbItems as $item)
                        @if (!$loop->last)
                            <span property="itemListElement" typeof="ListItem">
                                <a property="item" typeof="WebPage" title="{{ $item->name }}"
                                    href="{{ $item->url }}" class="home">
                                    <span property="name">{{ $item->name }}</span>
                                </a>
                                <meta property="position" content="1">
                            </span>&gt;
                        @else
                            <span property="itemListElement" typeof="ListItem">
                                <span property="name">{{ $item->name }}</span>
                                <meta property="position" content="3">
                            </span>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    @endif
@endif
