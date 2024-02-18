@foreach ($item->sections->sortBy('list_order') as $section)
    @if (isset($section->name))
        <h2>{!! $section->name !!}</h2>
    @endif

    {!! $section->content !!}

    @include('website.pages.page_gallery', ['content' => $section])
    @include('website.pages.page_videos', ['content' => $section])
    @include('website.pages.page_documents', ['content' => $section])

    @if ($section->layout == 'faq')
        @include('website.faq.faq')
    @endif

    @if ($section->layout == 'articles')
        @include('website.articles.pagination')
    @endif

    @if ($section->layout == 'products')
        @include('website.shop.pagination')
    @endif

    @if ($section->layout == 'contact')
        @include('website.partials.form.contact_form', [
            'resourceable' => isset($section) ? $section : $item,
        ])
    @endif

    @if (isset($section->components) && $section->components->count() > 0)
        @foreach ($section->components->sortBy('list_order') as $content)
            <div class="gdlr-core-pbf-sidebar-content {{ isset($section->layout) && strpos($section->layout, 'gdlr-core-column') !== false ? $section->layout : 'gdlr-core-column-60' }} gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left"
                style="padding: 30px 0px 30px 0px;">
                <div class="gdlr-core-pbf-sidebar-content-inner">
                    @include('website.pages.page_heading')
                    @include('website.pages.page_content')

                    @include('website.pages.page_gallery')
                    @include('website.pages.page_videos')
                    @include('website.pages.page_documents')

                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align"
                            style="padding-bottom: 40px ;">
                            <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle"
                                style="border-width: 0px;"><img src="{{ asset('assets/upload/shutterstock_447921760-800x292.jpg') }}"
                                    width="1000" height="365" alt="" /></div>
                        </div>
                    </div>
                    
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"
                            style="padding-bottom: 10px ;">
                            <div class="gdlr-core-text-box-item-content"
                                style="font-size: 19px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">
                                <p>Accounting or accountancy is the measurement, processing, and communication of
                                    financial information about economic.</p>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"
                            style="padding-bottom: 15px ;">
                            <div class="gdlr-core-text-box-item-content"
                                style="font-size: 21px ;text-transform: none ;color: #3db166 ;">
                                <p>If you&#8217;re an educational professional who are looking to progress into
                                    management and consultancy, or an educational planning or development role, this
                                    is the best degree for you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-element">
                        <div
                            class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align">
                            <div class="gdlr-core-divider-line gdlr-core-skin-divider"
                                style="border-color: #3db166 ;border-bottom-width: 3px ;"></div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"
                            style="padding-bottom: 20px ;">
                            <div class="gdlr-core-text-box-item-content"
                                style="font-size: 17px ;text-transform: none ;">
                                <p>Accounting can be divided into several fields including financial accounting,
                                    management accounting, external auditing, tax accounting and cost accounting.
                                    Accounting information systems are designed to support accounting functions and
                                    related activities. Financial accounting focuses on the reporting of an
                                    organization&#8217;s financial information, including the preparation of
                                    financial statements, to the external users of the information, such as
                                    investors.</p>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix "
                            style="padding-bottom: 25px ;">
                            <ul>
                                <li class=" gdlr-core-skin-divider" style="margin-bottom: 22px ;"><span
                                        class="gdlr-core-icon-list-icon-wrap" style="margin-top: 5px ;"><i
                                            class="gdlr-core-icon-list-icon fa fa-hand-o-right"
                                            style="color: #3db166 ;font-size: 22px ;width: 22px ;"></i></span>
                                    <div class="gdlr-core-icon-list-content-wrap"><span
                                            class="gdlr-core-icon-list-content" style="font-size: 17px ;">Accounting
                                            majors take a full year of accounting: Principles of Accounting I and
                                            II, during your the year.</span></div>
                                </li>
                                <li class=" gdlr-core-skin-divider" style="margin-bottom: 22px ;"><span
                                        class="gdlr-core-icon-list-icon-wrap" style="margin-top: 5px ;"><i
                                            class="gdlr-core-icon-list-icon fa fa-hand-o-right"
                                            style="color: #3db166 ;font-size: 22px ;width: 22px ;"></i></span>
                                    <div class="gdlr-core-icon-list-content-wrap"><span
                                            class="gdlr-core-icon-list-content" style="font-size: 17px ;">As
                                            Juniors, you will enroll in interm. Accounting I and II, it will you a
                                            comprehensive understanding of accounting practice, thoery and financial
                                            report.</span></div>
                                </li>
                                <li class=" gdlr-core-skin-divider" style="margin-bottom: 22px ;"><span
                                        class="gdlr-core-icon-list-icon-wrap" style="margin-top: 5px ;"><i
                                            class="gdlr-core-icon-list-icon fa fa-hand-o-right"
                                            style="color: #3db166 ;font-size: 22px ;width: 22px ;"></i></span>
                                    <div class="gdlr-core-icon-list-content-wrap"><span
                                            class="gdlr-core-icon-list-content" style="font-size: 17px ;">Senior
                                            year will give you a great opportunity to specialize in an area of
                                            interest by pairing Accounting Topics with electives of your
                                            choosing.</span></div>
                                </li>
                                <li class=" gdlr-core-skin-divider" style="margin-bottom: 22px ;"><span
                                        class="gdlr-core-icon-list-icon-wrap" style="margin-top: 5px ;"><i
                                            class="gdlr-core-icon-list-icon fa fa-hand-o-right"
                                            style="color: #3db166 ;font-size: 22px ;width: 22px ;"></i></span>
                                    <div class="gdlr-core-icon-list-content-wrap"><span
                                            class="gdlr-core-icon-list-content" style="font-size: 17px ;">We will
                                            assist students in preparing for the Certified Public Accounting Exam
                                            through our self study programs.</span></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"
                            style="padding-bottom: 55px ;"><a
                                class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border"
                                href="#"
                                style="font-size: 14px ;font-weight: 700 ;letter-spacing: 0px ;padding: 13px 29px 18px 32px;text-transform: none ;margin: 0px 10px 10px 0px;border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;"><span
                                    class="gdlr-core-content">Apply</span><i
                                    class="gdlr-core-pos-right fa fa-external-link" style="font-size: 14px ;"></i></a><a
                                class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border"
                                href="#"
                                style="font-size: 14px ;font-weight: 700 ;letter-spacing: 0px ;padding: 13px 29px 18px 32px;text-transform: none ;border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;"><span
                                    class="gdlr-core-content">Download Brochure</span><i
                                    class="gdlr-core-pos-right fa fa-file-pdf-o" style="font-size: 14px ;"></i></a>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"
                            style="padding-bottom: 45px ;" id="curriculum">
                            <div class="gdlr-core-title-item-title-wrap clearfix">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title "
                                    style="font-size: 24px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #293a5b ;">
                                    Course Curriculum</h3>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-element">
                        <div
                            class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                            <div class="gdlr-core-title-item-title-wrap clearfix">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title "
                                    style="font-size: 16px ;font-weight: 600 ;letter-spacing: 2px ;">Required
                                    Courses</h3>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-course-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-course-style-list"
                            style="padding-bottom: 45px ;">
                            <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link"
                                    href="#"><span
                                        class="gdlr-core-course-item-id gdlr-core-skin-caption">ACC101</span><span
                                        class="gdlr-core-course-item-title gdlr-core-skin-title">Introduction to
                                        Financial Accounting</span><i
                                        class="gdlr-core-course-item-icon gdlr-core-skin-icon fa fa-long-arrow-right"></i></a>
                            </div>
                            <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link"
                                    href="#"><span
                                        class="gdlr-core-course-item-id gdlr-core-skin-caption">ACC201</span><span
                                        class="gdlr-core-course-item-title gdlr-core-skin-title">Introduction to
                                        Managerial Accounting</span><i
                                        class="gdlr-core-course-item-icon gdlr-core-skin-icon fa fa-long-arrow-right"></i></a>
                            </div>
                            <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link"
                                    href="#"><span
                                        class="gdlr-core-course-item-id gdlr-core-skin-caption">ACC402</span><span
                                        class="gdlr-core-course-item-title gdlr-core-skin-title">Intermediate
                                        Accounting I</span><i
                                        class="gdlr-core-course-item-icon gdlr-core-skin-icon fa fa-long-arrow-right"></i></a>
                            </div>
                            <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link"
                                    href="#"><span
                                        class="gdlr-core-course-item-id gdlr-core-skin-caption">ACC302</span><span
                                        class="gdlr-core-course-item-title gdlr-core-skin-title">Contemporary
                                        Accounting Topics</span><i
                                        class="gdlr-core-course-item-icon gdlr-core-skin-icon fa fa-long-arrow-right"></i></a>
                            </div>
                            <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link"
                                    href="#"><span
                                        class="gdlr-core-course-item-id gdlr-core-skin-caption">ITT203</span><span
                                        class="gdlr-core-course-item-title gdlr-core-skin-title">Introduction to
                                        Taxation</span><i
                                        class="gdlr-core-course-item-icon gdlr-core-skin-icon fa fa-long-arrow-right"></i></a>
                            </div>
                            <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link"
                                    href="#"><span
                                        class="gdlr-core-course-item-id gdlr-core-skin-caption">ASC103</span><span
                                        class="gdlr-core-course-item-title gdlr-core-skin-title">Accounting Systems
                                        and Auditing</span><i
                                        class="gdlr-core-course-item-icon gdlr-core-skin-icon fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-element">
                        <div
                            class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                            <div class="gdlr-core-title-item-title-wrap clearfix">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title "
                                    style="font-size: 16px ;font-weight: 600 ;letter-spacing: 2px ;">Elective
                                    Courses</h3>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-course-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-course-style-list"
                            style="padding-bottom: 10px ;">
                            <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link"
                                    href="#"><span
                                        class="gdlr-core-course-item-id gdlr-core-skin-caption">BPS201</span><span
                                        class="gdlr-core-course-item-title gdlr-core-skin-title">Business Processes
                                        and Controls</span><i
                                        class="gdlr-core-course-item-icon gdlr-core-skin-icon fa fa-long-arrow-right"></i></a>
                            </div>
                            <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link"
                                    href="#"><span
                                        class="gdlr-core-course-item-id gdlr-core-skin-caption">CAA558</span><span
                                        class="gdlr-core-course-item-title gdlr-core-skin-title">Cost
                                        Accounting</span><i
                                        class="gdlr-core-course-item-icon gdlr-core-skin-icon fa fa-long-arrow-right"></i></a>
                            </div>
                            <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link"
                                    href="#course/advanced-cost-accounting-and-management/index.html"><span
                                        class="gdlr-core-course-item-id gdlr-core-skin-caption">ACC604</span><span
                                        class="gdlr-core-course-item-title gdlr-core-skin-title">Advanced Cost
                                        Accounting and Management</span><i
                                        class="gdlr-core-course-item-icon gdlr-core-skin-icon fa fa-long-arrow-right"></i></a>
                            </div>
                            <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link"
                                    href="#course/auditing/index.html"><span
                                        class="gdlr-core-course-item-id gdlr-core-skin-caption">AUD012</span><span
                                        class="gdlr-core-course-item-title gdlr-core-skin-title">Auditing</span><i
                                        class="gdlr-core-course-item-icon gdlr-core-skin-icon fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="row">
            @foreach ($section->components->sortBy('list_order') as $content)
                <section
                    class="{{ isset($section->layout) && strpos($section->layout, 'col') !== false ? $section->layout : 'col-12' }} mb-4 mb-md-3">
                    @include('website.pages.page_heading')
                    @include('website.pages.page_content')

                    @include('website.pages.page_gallery')
                    @include('website.pages.page_videos')
                    @include('website.pages.page_documents')
                </section>
            @endforeach
        </div>
    @endif
@endforeach
