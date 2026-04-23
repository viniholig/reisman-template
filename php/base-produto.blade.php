<!DOCTYPE html>
@if (!request()->ajax())
    <html lang="pt-br">

    @include(engine_view('header'))
    @yield('conteudo')
    @include(engine_view('footer'))

    </html>
@endif
