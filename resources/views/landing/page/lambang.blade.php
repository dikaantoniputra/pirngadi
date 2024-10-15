@extends('landing.layout.app')

@section('title')
Bukti Pembayaran
@endsection

@push('after-style')

@endpush

@section('content')

<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-sidebar-wrapper " style="margin: 0px 0px 60px 0px;">
            <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 40px 0px 30px 0px;">
                    <div class="gdlr-core-pbf-sidebar-content-inner">
                       
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 75px ;">
                                <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-round" style="border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;border-width: 0px;"><img src="{{ asset('upload/logo.png') }}" width="400" height="296"  alt="" /></div>
                            </div>
                        </div>
                        
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
                                <div class="gdlr-core-title-item-title-wrap clearfix">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 22px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;margin-right: 30px ;">Apa Dari Lambang Dari Kami?</h3>
                                    <div class="gdlr-core-title-item-divider gdlr-core-right gdlr-core-skin-divider" style="font-size: 22px ;border-bottom-width: 3px ;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-accordion-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-accordion-style-icon">
                                <div class="gdlr-core-accordion-item-tab clearfix  gdlr-core-active">
                                    <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                                    <div class="gdlr-core-accordion-item-content-wrapper">
                                        <h4 class="gdlr-core-accordion-item-title gdlr-core-js ">Buku Terbuka:</h4>
                                        <div class="gdlr-core-accordion-item-content">
                                            <p>Melambangkan pengetahuan, pendidikan, dan kebijaksanaan. Ini menunjukkan komitmen yayasan terhadap pendidikan dan pembelajaran.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-accordion-item-tab clearfix ">
                                    <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                                    <div class="gdlr-core-accordion-item-content-wrapper">
                                        <h4 class="gdlr-core-accordion-item-title gdlr-core-js ">Salib :</h4>
                                        <div class="gdlr-core-accordion-item-content">
                                            <p>Mewakili nilai-nilai keagamaan dan spiritual. Ini bisa menunjukkan bahwa yayasan ini memiliki dasar atau afiliasi keagamaan tertentu.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-accordion-item-tab clearfix ">
                                    <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                                    <div class="gdlr-core-accordion-item-content-wrapper">
                                        <h4 class="gdlr-core-accordion-item-title gdlr-core-js ">Bintang :</h4>
                                        <div class="gdlr-core-accordion-item-content">
                                            <p>Simbol harapan, aspirasi, dan bimbingan. Bintang sering kali digunakan untuk melambangkan tujuan tinggi dan panduan moral.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-accordion-item-tab clearfix ">
                                    <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                                    <div class="gdlr-core-accordion-item-content-wrapper">
                                        <h4 class="gdlr-core-accordion-item-title gdlr-core-js ">Lingkaran :</h4>
                                        <div class="gdlr-core-accordion-item-content">
                                            <p>Melambangkan kesatuan, keabadian, dan keberlanjutan. Lingkaran tanpa akhir dapat menunjukkan bahwa yayasan ini berkomitmen untuk memberikan dampak yang terus menerus.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-accordion-item-tab clearfix ">
                                    <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                                    <div class="gdlr-core-accordion-item-content-wrapper">
                                        <h4 class="gdlr-core-accordion-item-title gdlr-core-js ">Warna Kuning dan Biru</h4>
                                        <div class="gdlr-core-accordion-item-content">
                                            <p>Kuning: Warna ini sering dikaitkan dengan kebahagiaan, energi, dan optimisme.</p>
                                            <p>Biru: Melambangkan kepercayaan, kesetiaan, dan kestabilan.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " style="padding: 65px 0px 60px 0px;">
            <div class="gdlr-core-pbf-background-wrap" style="background-color: #192f59 ;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: -123px 0px 0px 0px;padding: 0px 55px 0px 0px;">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align">
                                        <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src="{{asset('upload/logo.png')}}" width="300" height="300"  alt="" /></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-30">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 45px 0px 0px 0px;">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 20px ;">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 23px ;text-transform: none ;color: #ffffff ;">
                                            <p>Berkat Anda, siswa kami memperoleh pengetahuan, keterampilan, dan nilai-nilai untuk menciptakan dunia yang lebih manusiawi, adil, dan berkelanjutan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border" href="#" style="font-size: 14px ;font-weight: 700 ;letter-spacing: 0px ;padding: 13px 26px 16px 30px;text-transform: none ;border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;background: #3db166 ;"><span class="gdlr-core-content" >Sumbang Untuk Kemajuan Pendidikan</span><i class="gdlr-core-pos-right fa fa-external-link" style="font-size: 14px ;"  ></i></a></div>
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