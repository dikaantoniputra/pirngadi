<!DOCTYPE html>
<html lang="en-US" class="no-js">



@stack('before-style')
@include('landing.include.head')
@stack('after-style')


<body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js tribe-no-js kingster-body kingster-body-front kingster-full  kingster-with-sticky-navigation  kingster-blockquote-style-1 gdlr-core-link-to-lightbox">
    @include('landing.include.navmobile')
    <div class="kingster-body-outer-wrapper ">
        <div class="kingster-body-wrapper clearfix  kingster-with-frame">
            @include('landing.include.nav')
            @yield('content')
            @include('landing.include.footer')
           
         
        </div>
    </div>


    @stack('before-script')
    @include('landing.include.script')
    @stack('after-script')
    

</body>

<!-- Mirrored from max-themes.net/demos/kingster/college/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jul 2024 00:55:04 GMT -->
</html>
