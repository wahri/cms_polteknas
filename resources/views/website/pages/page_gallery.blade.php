@if($content->photos && $content->photos->count() > 0)
    {{-- <div class="gallery bg-black mt-3 mb-3 p-3">
        <div class="row">
            @foreach($content->photos->where('is_cover', 0)->sortBy('list_order') as $item)
                <div class="col-6 col-md-4">
                    <figure>
                        <a href="{{ $item->url }}" rel="group" title="{{ $item->name }}" data-lightbox="gallery" class="cover" style="background-image:url('{{ $item->thumbUrl }}')">
                            <img src="{{ $item->thumbUrl }}">
                        </a>
                        <figcaption>{!! $item->name !!}</figcaption>
                    </figure>
                </div>
            @endforeach
        </div>
    </div> --}}


    <div class="gdlr-core-portfolio-item gdlr-core-item-pdb clearfix  gdlr-core-portfolio-item-style-metro" style="padding-bottom: 10px ;">
        <div class="gdlr-core-portfolio-item-holder gdlr-core-js-2 clearfix" data-layout="masonry">
            @foreach($content->photos->where('is_cover', 0)->sortBy('list_order') as $item)
            <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-15 ">
                <div class="gdlr-core-portfolio-metro">
                    <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image  gdlr-core-style-title-icon  gdlr-core-metro-rvpdlr">
                        <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover">
                            <img src="{{ $item->thumbUrl }}"   alt="{{ $item->name }}" />
                            <span class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js">
                                <span class="gdlr-core-image-overlay-content" >
                                    <span class="gdlr-core-portfolio-title gdlr-core-title-font " style="font-size: 22px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;"  >
                                        <a href="#" >{!! $item->name !!}</a>
                                    </span>
                                    <span class="gdlr-core-portfolio-icon-wrap">
                                        <a class="gdlr-core-lightgallery gdlr-core-js "  href="{{ $item->url }}" data-lightbox-group="gdlr-core-img-group-1">
                                            <i class="gdlr-core-portfolio-icon arrow_expand" ></i>
                                        </a>
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            
            @endforeach
        </div>
    </div>
@endif
