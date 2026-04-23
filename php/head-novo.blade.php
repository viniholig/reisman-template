<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="@yield('metadescription')">
    <title>@yield('title') | Reisman 1967</title>
    <link rel="stylesheet" href="https://use.typekit.net/xho6dxr.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="canonical" href="{{ url()->full() }}" />
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <meta property="og:image"
        content="@if ($produto->extraFields->has('imagem_produto_01')) {{ $produto->extraFields->get('imagem_produto_01')->values->first()->source }} @else https://assets.betalabs.net/production/reisman/images/stores/1/reisman-logo.jpeg @endif ">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600,700&display=swap" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/brandon-grotesque-regular" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ path('apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ path('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ path('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ path('favicon-16x16.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ thumb(path('apple-touch-icon.png'), 48, 48) }}">

    @if (starts_with(request()->path(), 'checkout'))
        <link rel="stylesheet" href="{{ stylesheet('checkout.css') }}">
    @elseif(starts_with(request()->path(), 'account'))
        <link rel="stylesheet" href="{{ stylesheet('account.css') }}">
    @endif

    <link href="{{ canopus_css() }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" type="text/css" href="{{ stylesheet('slick-theme.css') }}">
    @stack('styles')
    <link rel="stylesheet" href="{{ stylesheet('produto.css') }}">
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
