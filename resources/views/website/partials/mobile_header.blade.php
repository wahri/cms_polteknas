<div class="kingster-mobile-header-wrap">
    <div class="kingster-mobile-header kingster-header-background kingster-style-slide kingster-sticky-mobile-navigation "
        id="kingster-mobile-header">
        <div class="kingster-mobile-header-container kingster-container clearfix">
            <div class="kingster-logo  kingster-item-pdlr">
                <div class="kingster-logo-inner">
                    <a class="" href="/"><img src="/uploads/images/logo/{{ $settings->image }}" alt=""
                            style="height: 61px" /></a>
                </div>
            </div>
            <div class="kingster-mobile-menu-right">
                <div class="kingster-main-menu-search" id="kingster-mobile-top-search"><i class="fa fa-search"></i>
                </div>
                <div class="kingster-top-search-wrap">
                    <div class="kingster-top-search-close"></div>
                    <div class="kingster-top-search-row">
                        <div class="kingster-top-search-cell">
                            <form role="search" method="get" class="search-form" action="#">
                                <input type="text" class="search-field kingster-title-font" placeholder="Search..."
                                    value="" name="s">
                                <div class="kingster-top-search-submit"><i class="fa fa-search"></i></div>
                                <input type="submit" class="search-submit" value="Search">
                                <div class="kingster-top-search-close"><i class="icon_close"></i></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="kingster-mobile-menu"><a
                        class="kingster-mm-menu-button kingster-mobile-menu-button kingster-mobile-button-hamburger"
                        href="#kingster-mobile-menu"><span></span></a>
                    <div class="kingster-mm-menu-wrap kingster-navigation-font" id="kingster-mobile-menu"
                        data-slide="right">
                        <ul id="menu-main-navigation" class="m-menu">
                            @if (isset($navigation))
                                @include('website.partials.navigation.top_level', [
                                    'collection' => $navigation['root'],
                                    'navigation' => $navigation,
                                ])
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
