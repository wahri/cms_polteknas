<footer>
    <div class="kingster-footer-wrapper ">
        <div class="kingster-footer-container kingster-container clearfix">
            <div class="kingster-footer-column kingster-item-pdlr kingster-column-15">
                <div id="text-2" class="widget widget_text kingster-widget">
                    <div class="textwidget">
                        <p><img src="{{ asset('images/logopolpengnaswhite.png') }}" alt="" />
                            <br /> <span class="gdlr-core-space-shortcode" id="span_1dd7_10"></span>
                            
                            @if (isset($settings->instagram))
                            <a href="https://instagram.com/{{ $settings->instagram }}"> <i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a> 
                            @endif
                            @if (isset($settings->facebook))
                            <a href="https://facebook.com/{{ $settings->facebook }}"> <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a> 
                            @endif
                            @if (isset($settings->twitter))
                            <a href="https://twitter.com/{{ $settings->twitter }}"> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a> 
                            @endif
                            @if (isset($settings->youtube))
                            <a href="https://youtube.com/{{ $settings->youtube }}"> <i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a> 
                            @endif
                            <br/>
                            @if (isset($settings->address))
                                <strong class="sr-only">Physical Address</strong> {{ $settings->address }}
                            @endif
                            <br />
                            @if (isset($settings->po_box))
                                <strong class="sr-only">Postal Address</strong>{{ $settings->po_box }}
                            @endif
                        </p>
                        <p><span id="span_1dd7_11">
                                @if (isset($settings->telephone))
                                    <strong class="sr-only">Phone </strong> <a
                                        href="tel:{{ trim($settings->telephone) }}">{{ $settings->telephone }}</a>
                                @endif
                                <br />
                                @if (isset($settings->cellphone))
                                    <strong class="sr-only">Mobile </strong> <a
                                        href="tel:{{ trim($settings->cellphone) }}">{{ $settings->cellphone }}</a>
                                @endif
                            </span>
                            <br /> <span class="gdlr-core-space-shortcode" id="span_1dd7_12"></span>
                            <br /> <a id="a_1dd7_8">

                                @if (isset($settings->email))
                                    <strong class="sr-only">Email </strong> <a
                                        href="mailto:{{ trim($settings->email) }}">{{ $settings->email }}</a>
                                @endif
                            </a>
                        </p>
                        <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-left-align">
                            <div class="gdlr-core-divider-line gdlr-core-skin-divider" id="div_1dd7_111"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kingster-footer-column kingster-item-pdlr kingster-column-45">
                <div id="gdlr-core-custom-menu-widget-2"
                    class="widget widget_gdlr-core-custom-menu-widget kingster-widget">
                    <h3 class="kingster-widget-title">Lokasi Kampus</h3><span class="clear"></span>
                    <div class="menu-our-campus-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6587795352593!2d101.440071374037!3d0.5123873636971871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5af86c6a7f775%3A0xde8c39d22f3ec26d!2sGraha%20Edukasi%202!5e0!3m2!1sid!2sid!4v1708253518881!5m2!1sid!2sid" style="width: 100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="kingster-copyright-wrapper">
        <div class="kingster-copyright-container kingster-container clearfix">
            <div class="kingster-copyright-left kingster-item-pdlr">&copy; Copyright {{ date('Y') }}. Politeknik
                Pengadaan Nasional</div>
            <div class="kingster-copyright-right kingster-item-pdlr">
                <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" id="div_1dd7_112">
                    @if (isset($settings->facebook))
                        <a href="{{ $settings->facebook }}" target="_blank" class="gdlr-core-social-network-icon"
                            title="facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                    @endif
                    @if (isset($settings->instagram))
                        <a href="{{ $settings->instagram }}" target="_blank" class="gdlr-core-social-network-icon"
                            title="instagram">
                            <i class="fa fa-instagram"></i>
                        </a>
                    @endif
                    <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
