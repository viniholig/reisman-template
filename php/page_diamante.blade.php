@extends(engine_view('base-novo'))
@section('conteudo')
@section('title', 'Guia para color ')
@section('page', 'modelo-conteudo')

@push('styles')
    <link rel="stylesheet" href="{{ stylesheet('guia-color.css') }}">
    <link rel="stylesheet" href="{{ stylesheet('account.css') }}">
@endpush

@push('tags')
    <meta property="og:type" content="product" />
    <meta property="fb:admins" content="home " />
    <meta property="og:image" content="https://assets.betalabs.net/production/reisman/images/stores/1/reisman-logo.jpeg ">
@endpush

@section('metadescription', 'Alianças de Casamento e Anéis de Noivado | Reisman 1967')



@include(@engine_view('component_guia_colores'))



@include(@engine_view('component_svg'))

@push('scripts')
    <script src="{{ script('swiper.js') }}"></script>
    <script src="{{ script('home-new.js') }}"></script>
@endpush

@endsection
