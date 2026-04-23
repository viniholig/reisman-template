<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">

    <title>@yield('title') | Reisman 1967</title>
    @if (starts_with(request()->path(), '/'))
        <meta name="description"
            content="Alianças de Casamento e anéis de noivado é com a Reisman! Os mais lindos modelos, com preço justo e alta qualidade. Clique e confira!">
    @else
        <meta name="description" content="@yield('metadescription')">
        <meta property="og:description" content="@yield('metadescription1')">
    @endif

    <meta property="og:url" content="{{ url()->full() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Reisman Alianças e Joias" />
    <meta property="og:locale" content="pt_BR" />

    <link rel="stylesheet" href="https://use.typekit.net/xho6dxr.css">
    <!--<link rel="stylesheet" href="{{ stylesheet('all.css') }}">-->
    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/12.0.0/nouislider.min.css">

    <link rel="stylesheet" href="{{ stylesheet('venobox-min.css') }}" type="text/css" media="screen" />
    <!--<link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ stylesheet('gnu.css') }}">
    <link rel="stylesheet" href="{{ stylesheet('rateit.css') }}">
    <link rel="stylesheet" href="{{ stylesheet('cookiealert.css') }}">
    <link rel="stylesheet" href="{{ stylesheet('global.css') }}">
    <link rel="stylesheet" href="{{ stylesheet('swiper-min.css') }}">
    @if (starts_with(request()->path(), '/'))
        <link rel="stylesheet" href="{{ stylesheet('home.css') }}">
    @else
        <link rel="stylesheet" href="{{ stylesheet('page.css') }}">
        <link rel="stylesheet" href="{{ stylesheet('produto.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    @endif

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    @if (starts_with(request()->path(), 'marque-seu-atendimento'))
        <script src='https://www.google.com/recaptcha/api.js'></script>
    @endif
    @if (starts_with(request()->path(), 'trabalhe-conosco'))
        <script src='https://www.google.com/recaptcha/api.js'></script>
    @endif
    @if (starts_with(request()->path(), 'contato'))
        <script src='https://www.google.com/recaptcha/api.js'></script>
    @endif
    @if (starts_with(request()->path(), 'suporte'))
        <script src='https://www.google.com/recaptcha/api.js'></script>
    @endif
    @if (starts_with(request()->path(), 'garantia'))
        <script src='https://www.google.com/recaptcha/api.js'></script>
    @endif
    <meta name="robots" content="index, follow" />

    <meta property="og:image"
        content="https://assets.betalabs.net/production/reisman/images/stores/1/reisman-logo.jpeg">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ path('apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ path('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ path('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ path('favicon-16x16.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ thumb(path('apple-touch-icon.png'), 48, 48) }}">

    <link rel="canonical" href="{{ \Illuminate\Support\Str::before(url()->full(), '?') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Spectral+SC:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">


    @if (starts_with(request()->path(), 'checkout'))
        <link rel="stylesheet" href="{{ stylesheet('checkout.css') }}">
    @elseif(starts_with(request()->path(), 'account'))
        <link rel="stylesheet" href="{{ stylesheet('account.css') }}">
    @endif

    <link href="{{ canopus_css() }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" type="text/css" href="{{ stylesheet('slick-theme.css') }}">
    @stack('styles')
    <link rel="stylesheet" href="{{ stylesheet('style.css') }}">
    <meta name="msvalidate.01" content="C6FCC30C26D8DA39162337DF2AA6C651" />
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5N5VB6');
    </script>
    <!-- End Google Tag Manager -->

    <meta name="google-site-verification" content="cJDcuWDhzHTHr_b8YIhE8HCV0sfhO9Wn5TTX_PO_wKo" />
    <!-- Global site tag (gtag.js) - Google Ads: 1054555486 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1054555486"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-1054555486');
        /*  var oldUrl = window.location.pathname;
        var urlChangeInterval = window.setInterval(function(){
        if (window.location.pathname !== oldUrl) {
            if (window.location.pathname == '/checkout/completed') {
                 gtag('event', 'conversion', {'send_to': 'AW-1054555486/bQuKCLivnLUBEN767PYD'});
            }
            oldUrl = window.location.pathname;
          }
        }, 1);*/
    </script>
</head>
