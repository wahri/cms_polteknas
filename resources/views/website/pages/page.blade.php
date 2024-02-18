@extends('website.website')

@section('content')
    @include('website.partials.page_header')

    <div class="kingster-page-wrapper" id="kingster-page-wrapper">
        <div class="gdlr-core-page-builder-body">
            <div class="gdlr-core-pbf-sidebar-wrapper " style="margin: 0px 0px 60px 0px;">
                <div
                    class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                    
                    @include('website.pages.page_components', ['item' => $activePage ])

                </div>
            </div>
        </div>
    </div>
@endsection
