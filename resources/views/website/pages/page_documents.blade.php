@if ($content->documents && $content->documents->count() > 0)
    <div class="gdlr-core-pbf-element">
        <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"
            style="padding-bottom: 55px ;">
            @foreach ($content->documents as $item)
                <a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border" href="{{ $item->url }}"
                    target="_blank" title="{{ $item->name }}"
                    style="font-size: 14px ;font-weight: 700 ;letter-spacing: 0px ;padding: 13px 29px 18px 32px;text-transform: none ;margin: 0px 10px 10px 0px;border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;">
                    <span class="gdlr-core-content">{{ $item->name }}</span>
                    <i class="gdlr-core-pos-right fa fa-file-pdf-o" style="font-size: 14px ;"></i>
                </a>
            @endforeach
        </div>
    </div>
@endif
