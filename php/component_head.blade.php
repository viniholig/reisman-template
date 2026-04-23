<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="format-detection" content="telephone=no">

@if (starts_with(request()->path(), '/'))
    <title>@yield('title') | Desde 1967</title>
@else
    <title>@yield('title') | Reisman 1967</title>
@endif
@if (starts_with(request()->path(), '/'))
    <meta name="description"
        content="Reisman - Alianças de casamento e anéis de noivado em ouro 18k com diamantes certificados GIA. Tradição desde 1967, entrega segura para todo Brasil.">
@else
    <meta name="description" content="@yield('metadescription')">
@endif
<meta name="robots" content="index, follow" />

<link rel="canonical" href="{{ url()->current() }}" />

<meta property="og:title" content="@yield('title') | Reisman 1967">
@if (starts_with(request()->path(), '/'))
    <meta property="og:description"
        content="Reisman - Alianças de casamento e anéis de noivado em ouro 18k com diamantes certificados GIA. Tradição desde 1967, entrega segura para todo Brasil.">
@else
    <meta property="og:description" content="@yield('meta-property')">
@endif

<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:image"
    content="https://assets.betalabs.net/production/reisman/extra_fields/158/phpKftGkC1713804186.jpg">
<meta property="og:site_name" content="Reisman Alianças e Joias">
<meta property="og:locale" content="pt_BR">
@stack('tags')

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="@yield('title') | Reisman 1967">
@if (starts_with(request()->path(), '/'))
    <meta name="twitter:description"
        content="Tradição em alianças de casamento e anéis de noivado. Ouro 18k e diamantes certificados desde 1967.">
@else
    <meta name="twitter:description" content="@yield('meta-name')">
@endif
<meta name="twitter:image"
    content="https://assets.betalabs.net/production/reisman/extra_fields/158/phpKftGkC1713804186.jpg">

<link rel="apple-touch-icon" sizes="180x180" href="{{ path('apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ path('favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ path('favicon-16x16.png') }}">
<link rel="icon" type="image/x-icon" href="{{ thumb(path('apple-touch-icon.png'), 48, 48) }}">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Spectral+SC:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
    rel="stylesheet">

@include(engine_view('import-css'))
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta name="msvalidate.01" content="C6FCC30C26D8DA39162337DF2AA6C651" />
<meta name="google-site-verification" content="cJDcuWDhzHTHr_b8YIhE8HCV0sfhO9Wn5TTX_PO_wKo" />


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

@stack('schema')
