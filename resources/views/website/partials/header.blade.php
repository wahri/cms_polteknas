<div class="kingster-top-bar">
    <div class="kingster-top-bar-background"></div>
    <div class="kingster-top-bar-container kingster-container ">
        <div class="kingster-top-bar-container-inner clearfix">
            <div class="kingster-top-bar-left kingster-item-pdlr"><i class="fa fa-envelope-open-o" id="i_fd84_0"></i>
                {{ $settings->email ?? '' }} <i class="fa fa-phone" id="i_fd84_1"></i> {{ $settings->telephone ?? '' }}</div>
            <div class="kingster-top-bar-right kingster-item-pdlr">
                <ul id="kingster-top-bar-menu" class="sf-menu kingster-top-bar-menu kingster-top-bar-right-menu">
                    {{-- <li class="menu-item kingster-normal-menu"><a href="#">Calendar</a></li> --}}
                    <li class="menu-item kingster-normal-menu"><a href="https://student.polteknas.ac.id">Student
                            Portal</a></li>
                </ul>
                <div class="kingster-top-bar-right-social"></div><a class="kingster-top-bar-right-button"
                    href="https://pmb.polteknas.ac.id" target="_blank">PMB Online</a>
            </div>
        </div>
    </div>
</div>
<header
    class="kingster-header-wrap kingster-header-style-plain  kingster-style-menu-right kingster-sticky-navigation kingster-style-fixed"
    data-navigation-offset="75px">
    <div class="kingster-header-background"></div>
    <div class="kingster-header-container  kingster-container">
        <div class="kingster-header-container-inner clearfix">
            <div class="kingster-logo  kingster-item-pdlr">
                <div class="kingster-logo-inner">
                    <a class="" href="/" title="{{ config('app.name') }}"><img
                            src="{{ asset('assets/images/logo-with-text.png') }}" alt="Logo Polteknas"
                            style="height: 61px" /></a>
                </div>
            </div>
            <div class="kingster-navigation kingster-item-pdlr clearfix ">
                <div class="kingster-main-menu" id="kingster-main-menu">
                    <ul id="menu-main-navigation-1" class="sf-menu">
                        @if (isset($navigation))
                            @include('website.partials.navigation.top_level', [
                                'collection' => $navigation['root'],
                                'navigation' => $navigation,
                            ])
                        @endif
                    </ul>
                    <div class="kingster-navigation-slide-bar" id="kingster-navigation-slide-bar"></div>
                </div>
                <div class="kingster-main-menu-right-wrap clearfix ">
                    <div class="kingster-main-menu-search" id="kingster-top-search"><i class="icon_search"></i></div>
                    <div class="kingster-top-search-wrap">
                        <div class="kingster-top-search-close"></div>
                        <div class="kingster-top-search-row">
                            <div class="kingster-top-search-cell">
                                <form role="search" method="get" class="search-form" action="#">
                                    <input type="text" class="search-field kingster-title-font"
                                        placeholder="Search..." value="" name="s">
                                    <div class="kingster-top-search-submit"><i class="fa fa-search"></i></div>
                                    <input type="submit" class="search-submit" value="Search">
                                    <div class="kingster-top-search-close"><i class="icon_close"></i></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
