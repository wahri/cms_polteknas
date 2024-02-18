@if (!$content->media)
    @if ($content->content && strlen($content->content) > 15)
        <div class="gdlr-core-pbf-element">
            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"
                style="padding-bottom: 20px ;">
                <div class="gdlr-core-text-box-item-content" style="font-size: 17px ;text-transform: none ;">
                    {!! $content->content !!}
                </div>
            </div>
        </div>
    @endif
@else
    <div class="gdlr-core-pbf-element">
        <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align"
            style="padding-bottom: 40px ;">
            <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle"
                style="border-width: 0px;"><img src="{{ $content->imageUrl }}" width="1000" height="365"
                    alt="" /></div>
        </div>
    </div>
    @if ($content->content && strlen($content->content) > 15)
        <div class="gdlr-core-pbf-element">
            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"
                style="padding-bottom: 20px ;">
                <div class="gdlr-core-text-box-item-content" style="font-size: 17px ;text-transform: none ;">
                    {!! $content->content !!}
                </div>
            </div>
        </div>
    @endif
@endif
