@section('header')
    @include(engine_view('head'))

    <body class="page-@yield('page')">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5N5VB6" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->



        @include(engine_view('component_header'))

        <div id="page-content" class="page-wrapper">

        @show
