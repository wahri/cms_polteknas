<div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right  kingster-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height"
    style="padding: 30px 0px 30px 0px;">
    <div class="gdlr-core-sidebar-item gdlr-core-item-pdlr">
        <div id="gdlr-core-custom-menu-widget-6" class="widget widget_gdlr-core-custom-menu-widget kingster-widget">
            <h3 class="kingster-widget-title">Halaman Lainnya</h3><span class="clear"></span>
            <div class="menu-finance-menu-container">
                <ul id="menu-finance-menu" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-list">
                    @foreach ($popularPages as $item)
                        <li
                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-5818">
                            <a href="{{ $item->url }}">{!! $item->name !!}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
