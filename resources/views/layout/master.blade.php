<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='revisit-after' content='1 days' />
    <meta http-equiv="content-language" content="vi" />
    <meta property="og:locale" content="vi_VN" />

    <!-- Section metatag -->
@yield('metatag')
<!-- End metatag -->
    <title>Thiáº¿t káº¿ Website chuyĂªn nghiá»‡p | Thiáº¿t káº¿ web Táº¡i ÄĂ  Náºµng</title>
    <link href="/img/assets/favicon.jpg" rel="icon" type="image/png">
    <link rel="canonical" href="{{ URL::current() }}"/>
    <link href="{{ elixir('css/ion-icons.min.css') }}" rel="stylesheet">
    <link href="{{ elixir('fonts/linea-icons.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ elixir('css/theme.min.css') }}">
    <link rel="stylesheet" href="{{ elixir('css/color.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&amp;subset=vietnamese" rel="stylesheet">
</head>
<body data-fade-in="true">

<div class="pre-loader"><div></div></div>

<!-- Start Header -->
<nav class="navbar" data-fullwidth="true" data-menu-style="shrink" data-animation="hiding"><!-- Styles: light, dark, transparent | Animation: hiding, shrink -->
    <div class="container">

        <div class="navbar-header">
            <div class="container">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
                <a target="_blank"  class="navbar-brand to-top" href="/"><img src="/img/assets/novaio-purple.png" class="logo-light" alt="#"><img src="/img/assets/novaio-purple.png" class="logo-dark" alt="#"></a>
            </div>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <div class="container">
                <ul class="nav navbar-nav menu-right">

                    <!-- Each section must have corresponding ID ( #hero -> id="hero" ) -->
                    <li><a target="_blank"  href="/#hero-app">Trang chá»§</a></li>
                    <li><a target="_blank"  href="/#about">Giá»›i thiá»‡u</a></li>
                    <li><a target="_blank"  href="/#overview">Dá»± Ă¡n tiĂªu biá»ƒu</a></li>
                    <li><a target="_blank"  href="/#features">TĂ­nh nÄƒng</a></li>
                    <li><a target="_blank"  href="/#pricing">Báº£ng giĂ¡</a></li>
                    <li><a target="_blank"  href="blog">Blog</a></li>
                    <li class="nav-separator"></li>
                    <li  class="nav-icon"><a target="_blank"  href="http://facebook.com/novaiotech" target="_blank"><i class="ion-social-facebook"></i></a></li>
                    <li  class="nav-icon"><a target="_blank"  href="http://twitter.com/novaiotech" target="_blank"><i class="ion-social-twitter"></i></a></li>
                    <li  class="nav-icon"><a target="_blank"  title="LiĂªn há»‡" href="/#contact"><i class="ion-email"></i></a></li>

                </ul>

            </div>
        </div>
    </div>
</nav>
<!-- End Header -->

<!-- Section Content -->
@yield('content')
<!-- End Content -->

<!-- Start Footer -->
<footer id="footer" class="footer style-1 dark">

    <a target="_blank"  href="/" data-reveal="bottom"><img src="/img/assets/novaio-short-w.png" alt="#" class="mr-auto img-responsive"></a>
    <ul data-reveal="top">
        <li><a target="_blank"  href="https://www.twitter.com/novaiotech" target="_blank" class="color"><i class="ion-social-twitter"></i></a></li>
        <li><a target="_blank"  href="https://www.facebook.com/novaiotech" target="_blank" class="color"><i class="ion-social-facebook"></i></a></li>
        <li><a target="_blank"  href="https://www.linkedin.com/company/13300969/" target="_blank" class="color"><i class="ion-social-linkedin"></i></a></li>
        <li><a target="_blank"  href="https://www.youtube.com/channel/UCKvvqIzL1BXCUPlgyGx6ZMQ/" target="_blank" class="color"><i class="ion-social-youtube"></i></a></li>
        <li><a target="_blank"  href="https://plus.google.com/u/0/116812651557166326691" target="_blank" class="color"><i class="ion-social-googleplus"></i></a></li>
    </ul>
    <a target="_blank"  href="http://www.novaio.vn" target="_blank" data-reveal="bottom" class="copyright-link">Â© NovaIO 2017</a>
    <p data-reveal="top">Innovative Software Solutions.</p>

    <!-- Back To Top Button -->
    <span><a target="_blank"  class="scroll-top" data-reveal="right"><i class="ion-chevron-up"></i></a></span>

</footer>
<!-- End Footer -->
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106749526-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments)};
    gtag('js', new Date());

    gtag('config', 'UA-106749526-1');
</script>

<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '105803476832001');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=105803476832001&ev=PageView&noscript=1"
    /></noscript>
<!-- End Facebook Pixel Code -->

<!--Start of Chat Script-->
<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="ff4c309f-773a-47c4-95c6-05c99b252013";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
<!--End of  Chat Script-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('js/init.min.js') }}"></script>
<script src="{{ asset('js/scripts.min.js') }}"></script>

</body>
</html>