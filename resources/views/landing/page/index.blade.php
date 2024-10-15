@extends('landing.layout.app')

@section('title')
Bukti Pembayaran
@endsection

@push('after-style')
<style>
    .color-white{
        color: #ffffff
    }
</style>
@endpush

@section('content')
<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
            <div class="gdlr-core-pbf-background-wrap" style="background-color: #192f59 ;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-revolution-slider-item gdlr-core-item-pdlr gdlr-core-item-pdb " style="padding-bottom: 0px ;">

                            <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                                <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8">
                                    <ul>
                                        <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="upload/slider-1-2-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> <img src="upload/slider-1-2.jpg" alt="" title="slider-1-2" width="1800" height="1119" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                            <div class="tp-caption   tp-resizeme" id="slide-3-layer-1" data-x="38" data-y="center" data-voffset="-146" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 33px; line-height: 33px; font-weight: 300; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">YAYASAN BADAN PENDIDIKAN DAN PENGAJARAN KRISTEN</div>
                                            <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-3-layer-4" data-x="33" data-y="center" data-voffset="-44" data-width="['830']" data-height="['118']" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":330,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;background-color:rgba(24,36,59,0.9);border-radius:3px 3px 3px 3px;"></div>
                                            <div class="tp-caption   tp-resizeme" id="slide-3-layer-2" data-x="55" data-y="center" data-voffset="-52" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":360,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; font-size: 88px; line-height: 88px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Playfair Display;">PIRNGADI</div>

                                            <div class="tp-caption rev-btn rev-hiddenicon " id="slide-3-layer-6" data-x="34" data-y="center" data-voffset="80" data-width="['auto']" data-height="['auto']" data-type="button" data-responsive_offset="on" data-frames='[{"delay":660,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(1,61,135);bg:rgba(255,255,255,1);bw:0 0 0 5px;"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[19,19,19,19]" data-paddingright="[21,21,21,21]" data-paddingbottom="[19,19,19,19]" data-paddingleft="[21,21,21,21]" style="z-index: 9; white-space: nowrap; font-size: 17px; line-height: 16px; font-weight: 600; color: #2d2d2d; letter-spacing: 0px;font-family:Poppins;background-color:rgb(255,255,255);border-color:rgb(61,177,102);border-style:solid;border-width:0px 0px 0px 5px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Take A Tour</div>
                                        </li>
                                        <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="upload/slider-2-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> <img src="upload/slider-2.jpg" alt="" title="slider-2" width="1800" height="1119" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                            <div class="tp-caption   tp-resizeme" id="slide-1-layer-1" data-x="36" data-y="center" data-voffset="-120" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 33px; line-height: 33px; font-weight: 300; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">YAYASAN BADAN PENDIDIKAN DAN PENGAJARAN KRISTEN</div>
                                            <div class="tp-caption   tp-resizeme" id="slide-1-layer-2" data-x="33" data-y="center" data-voffset="-31" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":370,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 83px; line-height: 83px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">PIRNGADI</div>
                                            <div class="tp-caption rev-btn rev-hiddenicon " id="slide-1-layer-6" data-x="34" data-y="center" data-voffset="80" data-width="['auto']" data-height="['auto']" data-type="button" data-responsive_offset="on" data-frames='[{"delay":740,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,64,132);bg:rgba(255,255,255,1);bw:0 0 0 5px;"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[19,19,19,19]" data-paddingright="[21,21,21,21]" data-paddingbottom="[19,19,19,19]" data-paddingleft="[21,21,21,21]" style="z-index: 7; white-space: nowrap; font-size: 17px; line-height: 16px; font-weight: 600; color: #2d2d2d; letter-spacing: 0px;font-family:Poppins;background-color:rgb(255,255,255);border-color:rgb(61,177,102);border-style:solid;border-width:0px 0px 0px 5px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Take A Tour</div>
                                        </li>
                                    </ul>
                                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper  hp1-col-services"  data-skin="Blue Title" id="gdlr-core-wrapper-1">
            <div class="gdlr-core-pbf-background-wrap"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                    <div class="gdlr-core-pbf-wrapper-container-inner gdlr-core-item-mglr clearfix" id="div_1dd7_0">
                        <div class="gdlr-core-pbf-column gdlr-core-column-15 gdlr-core-column-first">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" id="div_1dd7_1">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-column-service-item gdlr-core-item-pdb gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-with-caption gdlr-core-item-pdlr" id="div_1dd7_2">
                                            <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src="upload/icon-1.png" alt="" width="40" height="40" title="icon-1" /></div>
                                            <div class="gdlr-core-column-service-content-wrapper">
                                                <div class="gdlr-core-column-service-title-wrap">
                                                    <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_0">Sekolah TK Kristen</h3>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-1">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" id="div_1dd7_4">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-column-service-item gdlr-core-item-pdb gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-with-caption gdlr-core-item-pdlr" id="div_1dd7_5">
                                            <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src="upload/icon-1.png" alt="" width="44" height="40" title="icon-2" /></div>
                                            <div class="gdlr-core-column-service-content-wrapper">
                                                <div class="gdlr-core-column-service-title-wrap">
                                                    <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_1">Sekolah SD Kristen</h3>
                                                    {{-- <div class="gdlr-core-column-service-caption gdlr-core-info-font gdlr-core-skin-caption" id="div_1dd7_6">Kisah Kesuksesan Alumni</div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-2">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" id="div_1dd7_7">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-column-service-item gdlr-core-item-pdb gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-with-caption gdlr-core-item-pdlr" id="div_1dd7_8">
                                            <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src="upload/icon-1.png" alt="" width="44" height="39" title="icon-3" /></div>
                                            <div class="gdlr-core-column-service-content-wrapper">
                                                <div class="gdlr-core-column-service-title-wrap">
                                                    <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_2">Sekolah SMP Kristen</h3>
                                                    {{-- <div class="gdlr-core-column-service-caption gdlr-core-info-font gdlr-core-skin-caption" id="div_1dd7_9">Kegiatan Olahraga di Panti</div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-3">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" id="div_1dd7_10">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-column-service-item gdlr-core-item-pdb gdlr-core-left-align gdlr-core-column-service-icon-left gdlr-core-with-caption gdlr-core-item-pdlr" id="div_1dd7_11">
                                            <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src="upload/icon-1.png" alt="" width="41" height="41" title="icon-4" /></div>
                                            <div class="gdlr-core-column-service-content-wrapper">
                                                <div class="gdlr-core-column-service-title-wrap">
                                                    <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_3">Sekolah SMA Kristen</h3>
                                                    {{-- <div class="gdlr-core-column-service-caption gdlr-core-info-font gdlr-core-skin-caption" id="div_1dd7_12">Kegiatan Sosial dan Keagamaan di Pirngadi</div> --}}
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
        </div>
        <div class="gdlr-core-pbf-wrapper "  id="gdlr-core-wrapper-2">
            <div class="gdlr-core-pbf-background-wrap">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_13" data-parallax-speed="0.8"></div>
            </div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom">
                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_14" data-sync-height="height-1">
                            <div class="gdlr-core-pbf-background-wrap">
                                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_15" data-parallax-speed="0"></div>
                            </div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content"></div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-30" id="gdlr-core-column-4">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_16" data-sync-height="height-1">
                            <div class="gdlr-core-pbf-background-wrap">
                                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_17" data-parallax-speed="0.1"></div>
                            </div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" id="div_1dd7_18">
                                        <div class="gdlr-core-title-item-title-wrap clearfix">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" id="h3_1dd7_4">Detail Sejarah Singkat</h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" id="span_1dd7_0">YBPPK PIRNGADI 1950</span></div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" id="div_1dd7_19">
                                        <div class="gdlr-core-text-box-item-content" id="div_1dd7_20">
                                            <p class="color-white">Yayasan Pirngadi Surabaya merupakan lembaga yang didirikan pada awal abad ke-20 oleh Dr. Radjiman Wedyodiningrat dengan tujuan meningkatkan kesehatan dan pendidikan masyarakat di Surabaya dan sekitarnya. Dengan awal yang sederhana sebagai klinik kecil, yayasan ini berkembang menjadi rumah sakit dan institusi pendidikan medis yang dikenal luas.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border" href="ybppk-pirngadi-sejarah" id="a_1dd7_0"><span class="gdlr-core-content" >Lihat Detail</span></a></div>
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
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr" id="div_1dd7_32">
                                        <div class="gdlr-core-column-service-media gdlr-core-media-image" id="div_1dd7_33"><img src="upload/col-icon-1.png" alt="" width="41" height="41" title="col-icon-1" /></div>
                                        <div class="gdlr-core-column-service-content-wrapper">
                                            <div class="gdlr-core-column-service-title-wrap">
                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_6">Pendidikan Anak Usia Dini</h3>
                                            </div>
                                            <div class="gdlr-core-column-service-content" id="div_1dd7_34">
                                                <p>YBPPK Pirngadi menyediakan program pendidikan anak usia dini yang dirancang untuk mempersiapkan anak-anak dengan keterampilan dasar yang penting untuk perkembangan mereka.</p>
                                                <a class="gdlr-core-column-service-read-more gdlr-core-info-font" href="#" id="a_1dd7_1">Pelajari Lebih Lanjut</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-5">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr" id="div_1dd7_35">
                                        <div class="gdlr-core-column-service-media gdlr-core-media-image" id="div_1dd7_36"><img src="upload/col-icon-2.png" alt="" width="43" height="45" title="col-icon-2" /></div>
                                        <div class="gdlr-core-column-service-content-wrapper">
                                            <div class="gdlr-core-column-service-title-wrap">
                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_7">Pendidikan Dasar</h3>
                                            </div>
                                            <div class="gdlr-core-column-service-content" id="div_1dd7_37">
                                                <p>Program pendidikan dasar di YBPPK Pirngadi fokus pada pengembangan keterampilan dasar dan akademik yang esensial untuk siswa di tingkat SD.</p>
                                                <a class="gdlr-core-column-service-read-more gdlr-core-info-font" href="#" id="a_1dd7_2">Pelajari Lebih Lanjut</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-6">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr" id="div_1dd7_38">
                                        <div class="gdlr-core-column-service-media gdlr-core-media-image" id="div_1dd7_39"><img src="upload/col-icon-3.png" alt="" width="40" height="43" title="col-icon-3" /></div>
                                        <div class="gdlr-core-column-service-content-wrapper">
                                            <div class="gdlr-core-column-service-title-wrap">
                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_8">Pendidikan Menengah Pertama</h3>
                                            </div>
                                            <div class="gdlr-core-column-service-content" id="div_1dd7_40">
                                                <p>Pendidikan Menengah Pertama di YBPPK Pirngadi mempersiapkan siswa dengan keterampilan akademik dan sosial yang penting untuk melanjutkan pendidikan mereka ke tingkat berikutnya.</p>
                                                <a class="gdlr-core-column-service-read-more gdlr-core-info-font" href="#" id="a_1dd7_3">Pelajari Lebih Lanjut</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-7">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr" id="div_1dd7_41">
                                        <div class="gdlr-core-column-service-media gdlr-core-media-image" id="div_1dd7_42"><img src="upload/col-icon-4.png" alt="" width="47" height="47" title="col-icon-4" /></div>
                                        <div class="gdlr-core-column-service-content-wrapper">
                                            <div class="gdlr-core-column-service-title-wrap">
                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_1dd7_9">Pendidikan Menengah Atas</h3>
                                            </div>
                                            <div class="gdlr-core-column-service-content" id="div_1dd7_43">
                                                <p>Pendidikan Menengah Atas di YBPPK Pirngadi memberikan pengetahuan dan keterampilan yang diperlukan untuk mempersiapkan siswa menghadapi ujian akhir dan dunia kerja.</p>
                                                <a class="gdlr-core-column-service-read-more gdlr-core-info-font" href="#" id="a_1dd7_4">Pelajari Lebih Lanjut</a>
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
      
        <div class="gdlr-core-pbf-wrapper " id="div_1dd7_72">
            <div class="gdlr-core-pbf-background-wrap">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_73" data-parallax-speed="0.2"></div>
            </div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom" id="div_1dd7_74">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align">
                            <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" >
                                <a class="gdlr-core-lightgallery gdlr-core-js " href="https://www.youtube.com/watch?app=desktop&v=ug5mNCOS1Ak"><img src="upload/icon-play.png" alt="" width="82" height="82" title="icon-play" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                            <div class="gdlr-core-title-item-title-wrap clearfix">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_23">Video Tour YBPPK PIRGADI</h3></div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align" id="div_1dd7_77">
                            <div class="gdlr-core-text-box-item-content" id="div_1dd7_78">
                                <p>Video Profile.</p>
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
                        <div class="gdlr-core-tab-item gdlr-core-js gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-tab-style1-horizontal gdlr-core-item-pdlr">
                            
                            <div class="gdlr-core-tab-item-content-image-wrap clearfix">
                                <div class="gdlr-core-tab-item-image  gdlr-core-active" data-tab-id="1">
                                    <a class="gdlr-core-lightgallery gdlr-core-js " href="https://www.youtube.com/watch?v=-172xbujEyc">
                                        <span class="gdlr-core-tab-item-image-background" id="span_1dd7_1"  ></span>
                                        <i class="fa fa-play" ></i>
                                    </a>
                                </div>
                                <div class="gdlr-core-tab-item-image " data-tab-id="2">
                                    <a class="gdlr-core-lightgallery gdlr-core-js " href="https://www.youtube.com/watch?v=3a47ld6qTRU">
                                        <span class="gdlr-core-tab-item-image-background" id="span_1dd7_2"  ></span>
                                        <i class="fa fa-play" ></i>
                                    </a>
                                </div>
                                <div class="gdlr-core-tab-item-image " data-tab-id="3">
                                    <a class="gdlr-core-lightgallery gdlr-core-js " href="https://www.youtube.com/watch?v=PTgU7tdcc24&t=1s">
                                        <span class="gdlr-core-tab-item-image-background" id="span_1dd7_3"  ></span>
                                        <i class="fa fa-play" ></i>
                                    </a>
                                </div>
                                <div class="gdlr-core-tab-item-image " data-tab-id="4">
                                    <a class="gdlr-core-lightgallery gdlr-core-js " href="https://www.youtube.com/watch?v=C5pKtnmHTxg">
                                        <span class="gdlr-core-tab-item-image-background" id="span_1dd7_4"  ></span>
                                        <i class="fa fa-play" ></i>
                                    </a>
                                </div>
                            </div>

                            <div class="gdlr-core-tab-item-wrap">
                                <div class="gdlr-core-tab-item-title-wrap clearfix gdlr-core-title-font">
                                    <div class="gdlr-core-tab-item-title  gdlr-core-active" data-tab-id="1">Pendidikan dan Pelatihan</div>
                                    <div class="gdlr-core-tab-item-title " data-tab-id="2">Pengembangan Keterampilan</div>
                                    <div class="gdlr-core-tab-item-title " data-tab-id="3">Kegiatan Sosial</div>
                                </div>
                                <div class="gdlr-core-tab-item-content-wrap clearfix">
                                    <div class="gdlr-core-tab-item-content  gdlr-core-active" data-tab-id="1" >
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                            <div class="gdlr-core-title-item-title-wrap ">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_24">Value Yang di berikan YBPPK PIRNGADI?<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                        </div>
                                        <p>Memberikan akses pendidikan dan pelatihan kepada anak-anak dan remaja, terutama yang berasal dari latar belakang kurang mampu.</p>
                                    </div>
                                    <div class="gdlr-core-tab-item-content " data-tab-id="2" >
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                            <div class="gdlr-core-title-item-title-wrap ">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_25">Value Yang di berikan YBPPK PIRNGADI?<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                        </div>
                                        <p>Mengadakan program untuk mengembangkan keterampilan hidup dan keterampilan kerja yang akan membantu anak-anak menjadi mandiri di masa depan.</p>
                                    </div>
                                    <div class="gdlr-core-tab-item-content " data-tab-id="3" >
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                            <div class="gdlr-core-title-item-title-wrap ">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_26">Value Yang di berikan YBPPK PIRNGADI?<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                        </div>
                                        <p>Mengorganisir berbagai kegiatan sosial yang dapat membantu anak-anak belajar tentang tanggung jawab sosial dan kepedulian terhadap orang lain.</p>
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
@endsection

@push('after-script')


@endpush