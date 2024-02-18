@extends('website.website')

@section('content')
    {{-- berita --}}
    @if ($articles->count() > 0)
        <div class="gdlr-core-pbf-wrapper " style="padding: 80px 0px 30px 0px;" data-skin="Blut Title Column Service">
            <div class="gdlr-core-pbf-background-wrap"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-column"
                            style="padding-bottom: 0px ;">
                            <div class="gdlr-core-block-item-title-wrap  gdlr-core-left-align gdlr-core-item-mglr"
                                style="margin-bottom: 40px ;">
                                <div class="gdlr-core-block-item-title-inner clearfix">
                                    <h3 class="gdlr-core-block-item-title"
                                        style="font-size: 24px ;font-style: normal ;text-transform: none ;letter-spacing: 0px ;color: #163269 ;">
                                        Berita Terbaru</h3>
                                    <div class="gdlr-core-block-item-title-divider"
                                        style="font-size: 24px ;border-bottom-width: 2px ;"></div>
                                </div><a class="gdlr-core-block-item-read-more" href="/news" target="_self"
                                    style="color: #3db166 ;">Lihat Semua Berita</a>
                            </div>
                            <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                @foreach ($articles as $item)
                                    <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-column-20">
                                        <div class="gdlr-core-blog-grid ">
                                            <div
                                                class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                <a href="/articles/{{ $item->category->slug }}/{{ $item->slug }}"><img
                                                        src="{{ $item->cover_photo->thumbUrl }}" width="900"
                                                        height="500" alt="{{ $item->name }}"
                                                        style="height: 250px; object-fit: cover" /></a>
                                            </div>
                                            <div class="gdlr-core-blog-grid-content-wrap">
                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span
                                                        class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a
                                                            href="/articles/{{ $item->category->slug }}/{{ $item->slug }}">{!! $item->active_from->format('\<\s\t\r\o\n\g\>d\</\s\t\r\o\n\g\> M Y') !!}</a></span><span
                                                        class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category"><a
                                                            href="#" rel="tag">Blog</a></span></div>
                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title"
                                                    style="font-size: 17px ;font-weight: 600 ;letter-spacing: 0px ;"><a
                                                        href="/articles/{{ $item->category->slug }}/{{ $item->slug }}">{!! $item->name !!}</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="gdlr-core-pbf-wrapper " id="gdlr-core-wrapper-2">
        <div class="gdlr-core-pbf-background-wrap">
            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_13"
                data-parallax-speed="0.8"></div>
        </div>
        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom">
                <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_14"
                        data-sync-height="height-1">

                        <div class="gdlr-core-pbf-background-wrap"
                            style="    display: flex;
                        justify-content: center;">
                            <a href="#">
                                <img src="images/home/Rektor.jpg" height="430" alt=""
                                    style="max-height: 500px; object-fit: cover" />
                            </a>
                            <!-- <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_15" data-parallax-speed="0"></div> -->
                        </div>
                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-column gdlr-core-column-30" id="gdlr-core-column-4">
                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_16"
                        data-sync-height="height-1" style="padding-top: 0px">
                        <!-- <div class="gdlr-core-pbf-background-wrap">
                                                                                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_17" data-parallax-speed="0.1"></div>
                                                                                    </div> -->
                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"
                                    id="div_1dd7_18">
                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_10">
                                            Sambutan Rektor POLTEKNAS</h3>
                                    </div><span
                                        class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption"
                                        id="span_1dd7_0">Pendaftaran angkatan 2024 sudah dibuka</span>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"
                                    id="div_1dd7_19">
                                    <div class="gdlr-core-text-box-item-content" id="div_1dd7_12"
                                        style="text-align: justify">
                                        <p>Politeknik Pengadaan Nasional merupakan Kampus Vokasi pertama di
                                            Indonesia yang semua prodinya diberikan bidang ilmu Pengadaan
                                            Barang/Jasa. Khusus untuk Prodi Manajemen Kontrak Pemerintah mata
                                            kuliahnya full Pengadaan Barang/Jasa Pemerintah. Selain itu Politeknik
                                            Pengadaan Nasional juga membuka Program Studi Bisnis Digital dan Program
                                            Studi Paralegal.
                                            Pendirian Politeknik Pengadaan Nasional mendapat dukungan dari Lembaga
                                            Kebijakan Pengadaan Barang/Jasa Pemerintah (LKPP), Pemerintah Daerah,
                                            Pengadilan Tinggi/Negeri, Perusahaan Swasta ternama sehingga dapat
                                            memberikan peluang kerja sesuai dengan minat dan kompetensinya Tenaga
                                            pengajar berasal dari berbagai disiplin ilmu seperti lImu Hukum,
                                            Magister Manajemen, lImu Pemerintahan, IT dan Teknik. Selain itu tenaga
                                            pengajar juga berasal dari praktisi LKPP, POLRI, Pengadilan dan Aparat
                                            Penegak Hukum Lainnya. Semua lulusan Politeknik Pengadaan Nasional
                                            sangat kompeten dibidang pengadaan, yang memiliki sertifikat Ahli
                                            Pengadaan Barang/Jasa Pemerintah Level 1 dan sertifikat Ahli K3 Umum
                                            Kemnaker sehingga benar-benar siap pakai untuk bekerja baik di instansi
                                            pemerintah maupun swasta.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-element">
                                <div
                                    class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                    <a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border"
                                        href="#" id="a_1dd7_0"><span class="gdlr-core-content">Daftar
                                            Sekarang</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gdlr-core-pbf-wrapper " id="div_1dd7_30" data-skin="Column Service">
        <div class="gdlr-core-pbf-background-wrap" id="div_1dd7_31"></div>
        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                <div class="gdlr-core-pbf-column gdlr-core-column-15 gdlr-core-column-first">
                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr"
                                    id="div_1dd7_32">
                                    <div class="gdlr-core-column-service-media gdlr-core-media-image" id="div_1dd7_33">
                                        <img src="upload/col-icon-1.png" alt="" width="41" height="41"
                                            title="col-icon-1" />
                                    </div>
                                    <div class="gdlr-core-column-service-content-wrapper">
                                        <div class="gdlr-core-column-service-title-wrap">
                                            <h3 class="gdlr-core-column-service-title gdlr-core-skin-title"
                                                id="h3_1dd7_6">Layanan Pendidikan</h3>
                                        </div>
                                        <div class="gdlr-core-column-service-content" id="div_1dd7_34">
                                            <p>Poltek Pengadaan Nasional didirikan oleh yayasan ... pada tahun 2023
                                                untuk kepentingan publik dan telah diakui.</p> <a
                                                class="gdlr-core-column-service-read-more gdlr-core-info-font"
                                                href="#" id="a_1dd7_1">Pelajari Lebih Lanjut</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-5">
                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr"
                                    id="div_1dd7_35">
                                    <div class="gdlr-core-column-service-media gdlr-core-media-image" id="div_1dd7_36">
                                        <img src="upload/col-icon-2.png" alt="" width="43" height="45"
                                            title="col-icon-2" />
                                    </div>
                                    <div class="gdlr-core-column-service-content-wrapper">
                                        <div class="gdlr-core-column-service-title-wrap">
                                            <h3 class="gdlr-core-column-service-title gdlr-core-skin-title"
                                                id="h3_1dd7_7">Jaringan Kemitraan</h3>
                                        </div>
                                        <div class="gdlr-core-column-service-content" id="div_1dd7_37">
                                            <p>Jaringan kemitraan dan kerjasama kampus yang luas baik swasta dan
                                                pemerintah mencakup Nasional dan Internasional.</p> <a
                                                class="gdlr-core-column-service-read-more gdlr-core-info-font"
                                                href="#" id="a_1dd7_2">Pelajari Lebih Lanjut</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-6">
                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr"
                                    id="div_1dd7_38">
                                    <div class="gdlr-core-column-service-media gdlr-core-media-image" id="div_1dd7_39">
                                        <img src="upload/col-icon-3.png" alt="" width="40" height="43"
                                            title="col-icon-3" />
                                    </div>
                                    <div class="gdlr-core-column-service-content-wrapper">
                                        <div class="gdlr-core-column-service-title-wrap">
                                            <h3 class="gdlr-core-column-service-title gdlr-core-skin-title"
                                                id="h3_1dd7_8">Kompetensi Akademik</h3>
                                        </div>
                                        <div class="gdlr-core-column-service-content" id="div_1dd7_40">
                                            <p>Poltek Pengadaan memiliki kompetensi akademik dengan sertifikat
                                                berstandar nasional dan internasional yang diakui</p> <a
                                                class="gdlr-core-column-service-read-more gdlr-core-info-font"
                                                href="#" id="a_1dd7_3">Pelajari Lebih Lanjut</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-7">
                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr"
                                    id="div_1dd7_41">
                                    <div class="gdlr-core-column-service-media gdlr-core-media-image" id="div_1dd7_42">
                                        <img src="upload/col-icon-4.png" alt="" width="47" height="47"
                                            title="col-icon-4" />
                                    </div>
                                    <div class="gdlr-core-column-service-content-wrapper">
                                        <div class="gdlr-core-column-service-title-wrap">
                                            <h3 class="gdlr-core-column-service-title gdlr-core-skin-title"
                                                id="h3_1dd7_9">Kehidupan Kampus</h3>
                                        </div>
                                        <div class="gdlr-core-column-service-content" id="div_1dd7_43">
                                            <p>Kehidupan kampus yang nyaman dengan berbagai fasilitas pendukung
                                                proses akademik serta membentuk karakter pemimpin.</p> <a
                                                class="gdlr-core-column-service-read-more gdlr-core-info-font"
                                                href="#" id="a_1dd7_4">Pelajari Lebih Lanjut</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gdlr-core-pbf-wrapper " id="div_1dd7_79">
        <div class="gdlr-core-pbf-background-wrap" id="div_1dd7_80"></div>
        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                <div class="gdlr-core-pbf-element">
                    <div
                        class="gdlr-core-tab-item gdlr-core-js gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-tab-style1-horizontal gdlr-core-item-pdlr">

                        <div class="gdlr-core-tab-item-content-image-wrap clearfix">
                            <div class="gdlr-core-tab-item-image  gdlr-core-active" data-tab-id="1">
                                <img src="{{ asset('images/home/kampus.jpg') }}" alt="">
                            </div>
                            <div class="gdlr-core-tab-item-image " data-tab-id="2">
                                <img src="{{ asset('images/home/pengembangandiri.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="gdlr-core-tab-item-image " data-tab-id="3">
                                <img src="{{ asset('images/home/visimisi.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="gdlr-core-tab-item-image " data-tab-id="4">
                                <img src="{{ asset('images/home/alumni.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="gdlr-core-tab-item-wrap">
                            <div class="gdlr-core-tab-item-title-wrap clearfix gdlr-core-title-font">
                                <div class="gdlr-core-tab-item-title  gdlr-core-active" data-tab-id="1">Keunggulan
                                </div>
                                <div class="gdlr-core-tab-item-title " data-tab-id="2">Pengembangan Diri</div>
                                <div class="gdlr-core-tab-item-title " data-tab-id="3">Visi & Misi</div>
                                {{-- <div class="gdlr-core-tab-item-title " data-tab-id="4">Kata Alumni</div> --}}
                            </div>
                            <div class="gdlr-core-tab-item-content-wrap clearfix">
                                <div class="gdlr-core-tab-item-content  gdlr-core-active" data-tab-id="1">
                                    <div
                                        class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_24">
                                                Mengapa POLTEKNAS?<span
                                                    class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                            </h3>
                                        </div>
                                    </div>
                                    <p>Memilih Politeknik Pengadaan Nasional adalah keputusan yang cerdas karena
                                        kami menawarkan beragam keunggulan yang akan memperkaya pengalaman
                                        pendidikan Anda.</p>
                                    <p>Prestasi Akademik: Politeknik Pengadaan Nasional telah lama diakui atas
                                        prestasi akademiknya yang luar biasa. Fakultas kami terdiri dari para ahli
                                        di bidang mereka, siap membimbing Anda dalam mengejar keunggulan akademik.

                                        ,Fasilitas Berkualitas: Kami memiliki fasilitas modern dan lengkap yang
                                        dirancang untuk mendukung kegiatan akademik, penelitian, dan pengembangan
                                        pribadi Anda.

                                        ,Kurikulum Inovatif: Kurikulum kami dirancang untuk mencerminkan kebutuhan
                                        dunia nyata dan tren terkini di berbagai industri. Kami menawarkan
                                        program-program yang relevan dan menantang untuk mempersiapkan Anda
                                        menghadapi tantangan masa depan.

                                    </p>
                                </div>
                                <div class="gdlr-core-tab-item-content " data-tab-id="2">
                                    <div
                                        class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_25">
                                                Pengembangan Diri<span
                                                    class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                            </h3>
                                        </div>
                                    </div>
                                    <p>Di Politeknik Pengadaan Nasional, kami memprioritaskan pengembangan diri
                                        siswa sebagai bagian integral dari pengalaman pendidikan kami. Kami percaya
                                        bahwa belajar tidak hanya terjadi di dalam kelas, tetapi juga melalui
                                        berbagai kesempatan untuk pertumbuhan pribadi di luar kurikulum formal.</p>
                                    <p>Kami berkomitmen untuk mendukung siswa kami dalam perjalanan pengembangan
                                        diri mereka, membantu mereka menjadi individu yang tangguh, berpengetahuan,
                                        dan berpengalaman. Di Politeknik Pengadaan Nasional, pengembangan diri bukan
                                        hanya tujuan, tetapi juga bagian penting dari pengalaman pendidikan kami..
                                    </p>
                                </div>
                                <div class="gdlr-core-tab-item-content " data-tab-id="3">
                                    <div
                                        class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_26">
                                                Visi & Misi POLTEKNAS<span
                                                    class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                            </h3>
                                        </div>
                                    </div>
                                    <p> <b>Visi:</b>
                                    <p>"Menjadi pusat keunggulan akademik yang diakui secara global, mendorong
                                        inovasi, keberlanjutan, dan pemberdayaan masyarakat."</p>
                                    <p><b>Misi:</b>
                                    <p>1. Menyediakan pendidikan berkualitas tinggi yang mempersiapkan siswa untuk
                                        menjadi pemimpin masa depan dalam berbagai disiplin ilmu.
                                    <p>2. Mendorong penelitian dan inovasi yang berdampak positif bagi masyarakat
                                        lokal, regional, dan global.
                                    </p>
                                </div>
                                <div class="gdlr-core-tab-item-content " data-tab-id="4">
                                    <div
                                        class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_27">
                                                Prabowo Subianto<span
                                                    class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                            </h3>
                                        </div>
                                    </div>
                                    <p>"Sebagai seorang Alumni Politeknik Pengadaan Nasional, saya tidak bisa cukup
                                        menekankan betapa berharganya pengalaman saya di sini. Dari fakultas yang
                                        berdedikasi hingga kurikulum yang menantang, universitas ini benar-benar
                                        membantu saya tumbuh sebagai individu dan profesional. Saya merasa sangat
                                        bersyukur telah menjadi bagian dari komunitas yang beragam ini. Pengalaman
                                        saya di Politeknik Pengadaan Nasional telah membuka pintu untuk peluang
                                        karir yang luar biasa dan hubungan yang tak terlupakan. Saya akan selalu
                                        bangga menjadi bagian dari universitas ini dan merekomendasikannya kepada
                                        siapa pun yang mencari pengalaman pendidikan yang luar biasa."</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="gdlr-core-pbf-wrapper " id="div_1dd7_72">
        <div class="gdlr-core-pbf-background-wrap">
            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_73"
                data-parallax-speed="0.2"
                style="background:linear-gradient(0deg, rgba(40, 40, 40, 0.3), rgba(40, 40, 40, 0.3)), url({{ asset('images/home/thumbnail-video.png') }});">
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom" id="div_1dd7_74">
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align"
                        id="div_1dd7_75">
                        <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle"
                            id="div_1dd7_76">
                            <a class="gdlr-core-lightgallery gdlr-core-js " href= "https://youtu.be/FvpaRaXiTUM"><img
                                    src="upload/icon-play.png" alt="" width="82" height="82"
                                    title="icon-play" /></a>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-element">
                    <div
                        class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                        <div class="gdlr-core-title-item-title-wrap clearfix">
                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_23">Video
                                Tour Virtual Politeknik Pengadaan Nasional</h3>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"
                        id="div_1dd7_77">
                        <div class="gdlr-core-text-box-item-content" id="div_1dd7_78">
                            <p>Virtual Tour Kampus Politeknik Pengadaan Nasional.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
