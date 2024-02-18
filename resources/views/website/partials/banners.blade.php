@if (((isset($showPageBanner) && $showPageBanner === true) || !isset($showPageBanner)) && $banners->count() > 0)
    @if ($withBanners)
        <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
            <div class="gdlr-core-pbf-background-wrap" style="background-color: rgba(24,36,59,0.9) ;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-revolution-slider-item gdlr-core-item-pdlr gdlr-core-item-pdb "
                            style="padding-bottom: 0px ;">

                            <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
                                data-source="gallery"
                                style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                                <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;"
                                    data-version="5.4.8">
                                    <ul>
                                        @foreach ($banners as $k => $banner)
                                            <li data-index="rs-1" data-transition="fade" data-slotamount="default"
                                                data-hideafterloop="0" data-hideslideonmobile="off"
                                                data-easein="default" data-easeout="default" data-masterspeed="300"
                                                data-thumb="{{ uploaded_images_url($banner->image_original) }}"
                                                data-rotate="0" data-saveperformance="off" data-title="Slide"
                                                data-param1="" data-param2="" data-param3="" data-param4=""
                                                data-param5="" data-param6="" data-param7="" data-param8=""
                                                data-param9="" data-param10="" data-description="">
                                                <img src="{{ uploaded_images_url($banner->image_original) }}"
                                                    alt="" title="slider-2" width="1800" height="1119"
                                                    data-bgposition="center center" data-bgfit="cover"
                                                    data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                @if ($banner->summary)
                                                    <div class="tp-caption   tp-resizeme" id="slide-1-layer-1"
                                                        data-x="36" data-y="center" data-voffset="-120"
                                                        data-width="['auto']" data-height="['auto']" data-type="text"
                                                        data-responsive_offset="on"
                                                        data-frames='[{"delay":10,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                        data-textAlign="['inherit','inherit','inherit','inherit']"
                                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                        style="z-index: 5; white-space: nowrap; font-size: 33px; line-height: 33px; font-weight: 300; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">
                                                        {!! $banner->summary !!}
                                                    </div>
                                                @endif
                                                @if (!$banner->hide_name)
                                                    <div class="tp-caption   tp-resizeme" id="slide-1-layer-2"
                                                        data-x="33" data-y="center" data-voffset="-31"
                                                        data-width="['auto']" data-height="['auto']" data-type="text"
                                                        data-responsive_offset="on"
                                                        data-frames='[{"delay":370,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                        data-textAlign="['inherit','inherit','inherit','inherit']"
                                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                        style="z-index: 6; white-space: nowrap; font-size: 83px; line-height: 83px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">
                                                        {!! $banner->name !!}
                                                    </div>
                                                @endif
                                                @if ($banner->action_url)
                                                    <a href="{{ $banner->action_url }}" target="_blank"
                                                        class="tp-caption rev-btn rev-hiddenicon " id="slide-1-layer-6"
                                                        data-x="34" data-y="center" data-voffset="80"
                                                        data-width="['auto']" data-height="['auto']" data-type="button"
                                                        data-responsive_offset="on"
                                                        data-frames='[{"delay":740,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,64,132);bg:rgba(255,255,255,1);bw:0 0 0 5px;"}]'
                                                        data-textAlign="['inherit','inherit','inherit','inherit']"
                                                        data-paddingtop="[19,19,19,19]"
                                                        data-paddingright="[21,21,21,21]"
                                                        data-paddingbottom="[19,19,19,19]"
                                                        data-paddingleft="[21,21,21,21]"
                                                        style="z-index: 7; white-space: nowrap; font-size: 17px; line-height: 16px; font-weight: 600; color: #2d2d2d; letter-spacing: 0px;font-family:Poppins;background-color:rgb(255,255,255);border-color:rgb(61,177,102);border-style:solid;border-width:0px 0px 0px 5px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                                        {{ $banner->action_name ?: 'Beca lebih lengkap' }}
                                                    </a>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endif
@endif
