@extends(engine_view('base-novo'))
@section('conteudo')
@section('title', 'Sobre Reisman')
@section('page', 'abouts')


@section('metadescription', 'Alianças de Casamento e Anéis de Noivado | Reisman 1967')

@push('styles')
    <link rel="stylesheet" href="{{ stylesheet('page-abouts.css') }}">
@endpush
@foreach ($banners->records as $sobre_banners)
    <section class="page-abouts">
        <div class="banner-bloco-01 222">


            <figure class="images -square">
                <img src="{{ $sobre_banners->sobre_bloco_01_banner_desktop->values->first()->source }}">
            </figure>

            <div class="context-text">
                <h2>
                    {{ $sobre_banners->sobre_bloco_01_titulo->values->first()->value }}
                </h2>
                <p>
                    {{ $sobre_banners->sobre_bloco_01_texto->values->first()->value }}
                </p>
            </div>

        </div>

        <div class="banner-bloco-02">
            <h3 class="title-bloco">
                {{ $sobre_banners->sobre_bloco_02_titulo->values->first()->value }}
            </h3>
            <span>{{ $sobre_banners->sobre_bloco_02_texto->values->first()->value }}</span>
        </div>

        <div class="banner-bloco-03 container">
            <div class="context-text">
                <h3 class="title-bloco">
                    {{ $sobre_banners->sobre_bloco_03_titulo->values->first()->value }}
                </h3>
                <span>{{ $sobre_banners->sobre_bloco_03_texto->values->first()->value }}</span>
            </div>
            <div class="context-img">
                <figure class="images -square">
                    <img src="{{ $sobre_banners->sobre_bloco_03_banner->values->first()->source }}">
                </figure>
            </div>
        </div>
        <div class="banner-bloco-05 container">
            <div class="context-text">
                <h3 class="title-bloco">
                    {{ $sobre_banners->sobre_bloco_05_titulo->values->first()->value }}
                </h3>
                <span>{{ $sobre_banners->sobre_bloco_05_texto->values->first()->value }}</span>
            </div>
            <div class="context-img">
                <figure class="images -square">
                    <img src="{{ $sobre_banners->sobre_bloco_05_banner->values->first()->source }}">
                </figure>
            </div>
        </div>
        <div class="banner-bloco-06">
            <div class="context-text">
                <div class="context">
                    <h3 class="title-bloco">
                        {{ $sobre_banners->sobre_bloco_06_titulo->values->first()->value }}
                    </h3>
                    <span>{{ $sobre_banners->sobre_bloco_06_texto->values->first()->value }}</span>
                </div>
            </div>
            <div class="context-img">
                <figure class="images -square">
                    <img src="{{ $sobre_banners->sobre_bloco_06_banner->values->first()->source }}">
                </figure>
            </div>
        </div>
        <div class="banner-bloco-07 container">
            <div class="context-text">
                <h3 class="title-bloco">
                    {{ $sobre_banners->sobre_bloco_07_titulo->values->first()->value }}
                </h3>
                <span>{{ $sobre_banners->sobre_bloco_07_texto->values->first()->value }}</span>
            </div>
            <div class="context-imgs">
                <figure class="images -square">
                    <img src="{{ $sobre_banners->sobre_bloco_08_banner_01->values->first()->source }}">
                    <span>{{ $sobre_banners->sobre_bloco_08_banner_01_texto->values->first()->value }}</span>
                </figure>

                <figure class="images -square">
                    <img src="{{ $sobre_banners->sobre_bloco_08_banner_02->values->first()->source }}">
                    <span>{{ $sobre_banners->sobre_bloco_08_banner_02_texto->values->first()->value }}</span>
                </figure>


            </div>
        </div>
        <div class="banner-shop container">
            <div class="context-text">
                <div class="context">
                    <h3 class="title-bloco">
                        {{ $sobre_banners->sobre_bloco_09_titulo->values->first()->value }}
                    </h3>
                    <span>{{ $sobre_banners->sobre_bloco_09_texto->values->first()->value }}</span>
                </div>
            </div>
            <div class="context-img">
                <figure class="images -square">
                    <img src="{{ $sobre_banners->sobre_bloco_09_banner->values->first()->source }}">
                </figure>
            </div>
        </div>
    </section>

    @include(@engine_view('component_clients'))
@endforeach


@include(@engine_view('component_svg'))


@endsection
