<!DOCTYPE html>
<html lang="en-US" class="no-js">


<!-- Mirrored from max-themes.net/demos/kingster/college/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jul 2024 00:52:24 GMT -->
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-P9FH7D9C57"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-P9FH7D9C57');
</script>



    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>pirngadi </title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('upload/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('upload/logo.png') }}">

    <link rel="stylesheet" href="css/common-skeleton.mind41d.css?" type="text/css" media="all" />
    <link rel="stylesheet" href="css/tooltip.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/elegant-font.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/page-builder.css" type="text/css" media="all" />
    <link rel="stylesheet" href="plugins/revslider/public/assets/css/rs6.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/style-core.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/kingster-style-custom.css" type="text/css" media="all" />

    <link
        rel="stylesheet"
        id="gdlr-core-google-font-css"
        href="../../../../fonts.googleapis.com/css1928.css?family=Jost%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2Citalic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;subset=cyrillic%2Clatin%2Clatin-ext%2Ccyrillic-ext%2Cvietnamese&amp;ver=5.5.1"
        type="text/css"
        media="all"
    />
    <link href="../../../../fonts.googleapis.com/css5676.css?family=Poppins:400%2C700%7CRoboto:400" rel="stylesheet" property="stylesheet" media="all" type="text/css" />

</head>

<body class="home page-template-default page page-id-6208 gdlr-core-body tribe-no-js kingster-body kingster-body-front kingster-full kingster-with-sticky-navigation kingster-sticky-navigation-no-logo kingster-blockquote-style-1 gdlr-core-link-to-lightbox" >
    @include('landing.include.navmobile')
    <div class="kingster-body-outer-wrapper">
        <div class="kingster-body-wrapper clearfix kingster-with-transparent-header kingster-with-frame">
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
