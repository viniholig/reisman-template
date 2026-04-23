<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    @if (starts_with(request()->path(), '/'))
        <meta name="description"
            content="Alianças de Casamento e anéis de noivado é com a Reisman! Os mais lindos modelos, com preço justo e alta qualidade. Clique e confira!">
    @else
        <meta name="description" content="@yield('metadescription')">
    @endif

    <title>@yield('title') | Reisman 1967</title>



    <link rel="stylesheet" href="{{ stylesheet('home.css') }}">



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

    <meta property="og:image"
        content="https://assets.betalabs.net/production/reisman/images/stores/1/reisman-logo.jpeg">


    <link rel="apple-touch-icon" sizes="180x180" href="{{ path('apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ path('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ path('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ path('favicon-16x16.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ thumb(path('apple-touch-icon.png'), 48, 48) }}">

    <link rel="canonical" href="{{ \Illuminate\Support\Str::before(url()->full(), '?') }}">



    @if (starts_with(request()->path(), 'checkout'))
        <link rel="stylesheet" href="{{ stylesheet('checkout.css') }}">
    @elseif(starts_with(request()->path(), 'account'))
        <link rel="stylesheet" href="{{ stylesheet('account.css') }}">
    @endif

    <link href="{{ canopus_css() }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    @stack('styles')

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
    </script>
</head>
