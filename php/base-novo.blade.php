@if (!request()->ajax())
    <!DOCTYPE html>
    <html lang="pt">

    <head>

        @include(engine_view('component_head'))

    </head>

    <body class="page-@yield('page')">
        @stack('parametro')
        @include(engine_view('component_header'))
        <div class="page-wrapper">
            @yield('conteudo')
        </div>


        @include(engine_view('component_footer'))


        @include(engine_view('import-scripts'))
    </body>

    </html>
@endif
