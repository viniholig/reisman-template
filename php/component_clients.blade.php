<section class="abouts-clients-new  container">
    <div class="title">

        <h3>make it Unforgettable</h3>
        <span>Descubra histórias reais de amor das quais a Reisman tem a honra de fazer parte.</span>
    </div>


    @desktop
        <div class="grid-imagens">
            <div class="image -vertical">
                @foreach ($bannersclientes->records->filter(function ($banner_home_colecao) {
            return $banner_home_colecao->ordem_banners_clientes->values->first()->extraFieldOption->label == '1';
        }) as $banner_home_colecao)
                    <img src="{{ $banner_home_colecao->banners_clientes_home->values->first()->source }}" loading="lazy"
                        data-bs-toggle="modal"
                        data-bs-target="#modal{{ $banner_home_colecao->ordem_banners_clientes->values->first()->extraFieldOption->label }}"
                        alt="Reisman - {{ $banner_home_colecao->titulo_banners_clientes->values->first()->value }}" />
                @endforeach
            </div>

            <div class="grid-feed">
                <div class="grid-one">
                    <div class="image -square">
                        @foreach ($bannersclientes->records->filter(function ($banner_home_colecao) {
            return $banner_home_colecao->ordem_banners_clientes->values->first()->extraFieldOption->label == '2';
        }) as $banner_home_colecao)
                            <img src="{{ $banner_home_colecao->banners_clientes_home->values->first()->source }}"
                                loading="lazy" data-bs-toggle="modal"
                                data-bs-target="#modal{{ $banner_home_colecao->ordem_banners_clientes->values->first()->extraFieldOption->label }}"
                                alt="{{ $banner_home_colecao->titulo_banners_clientes->values->first()->value }}" />
                        @endforeach
                    </div>
                    <div class="image -square">
                        @foreach ($bannersclientes->records->filter(function ($banner_home_colecao) {
            return $banner_home_colecao->ordem_banners_clientes->values->first()->extraFieldOption->label == '3';
        }) as $banner_home_colecao)
                            <img src="{{ $banner_home_colecao->banners_clientes_home->values->first()->source }}"
                                loading="lazy" data-bs-toggle="modal"
                                data-bs-target="#modal{{ $banner_home_colecao->ordem_banners_clientes->values->first()->extraFieldOption->label }}"
                                alt="{{ $banner_home_colecao->titulo_banners_clientes->values->first()->value }}" />
                        @endforeach
                    </div>
                </div>
                <div class="grid-one two">
                    <div class="image -square">
                        @foreach ($bannersclientes->records->filter(function ($banner_home_colecao) {
            return $banner_home_colecao->ordem_banners_clientes->values->first()->extraFieldOption->label == '7';
        }) as $banner_home_colecao)
                            <img src="{{ $banner_home_colecao->banners_clientes_home->values->first()->source }}"
                                loading="lazy" data-bs-toggle="modal"
                                data-bs-target="#modal{{ $banner_home_colecao->ordem_banners_clientes->values->first()->extraFieldOption->label }}"
                                alt="{{ $banner_home_colecao->titulo_banners_clientes->values->first()->value }}" />
                        @endforeach
                    </div>
                    <div class="image -square">
                        @foreach ($bannersclientes->records->filter(function ($banner_home_colecao) {
            return $banner_home_colecao->ordem_banners_clientes->values->first()->extraFieldOption->label == '6';
        }) as $banner_home_colecao)
                            <img src="{{ $banner_home_colecao->banners_clientes_home->values->first()->source }}"
                                loading="lazy" data-bs-toggle="modal"
                                data-bs-target="#modal{{ $banner_home_colecao->ordem_banners_clientes->values->first()->extraFieldOption->label }}"
                                alt="{{ $banner_home_colecao->titulo_banners_clientes->values->first()->value }}" />
                        @endforeach
                    </div>
                </div>
                <div class="grid-image">
                    <div class="image -square">
                        @foreach ($bannersclientes->records->filter(function ($banner_home_colecao) {
            return $banner_home_colecao->ordem_banners_clientes->values->first()->extraFieldOption->label == '8';
        }) as $banner_home_colecao)
                            <img src="{{ $banner_home_colecao->banners_clientes_home->values->first()->source }}"
                                loading="lazy" data-bs-toggle="modal"
                                data-bs-target="#modal{{ $banner_home_colecao->ordem_banners_clientes->values->first()->extraFieldOption->label }}"
                                alt="Reisman - {{ $banner_home_colecao->titulo_banners_clientes->values->first()->value }}" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @elsedesktop
        <div class="grid-imagens-mobile swiper-default carrousel-clients">
            <div class="swiper-wrapper">
                @foreach ($bannersclientes->records as $banner_home_colecao)
                    <div class="item swiper-slide">
                        <div class="image -vertical">
                            <img src="{{ $banner_home_colecao->imagem_mobile_banners_clientes->values->first()->source }}"
                                loading="lazy" data-bs-toggle="modal"
                                data-bs-target="#modal{{ $banner_home_colecao->ordem_banners_clientes->values->first()->extraFieldOption->label }}"
                                alt="{{ $banner_home_colecao->titulo_banners_clientes->values->first()->value }}" />

                        </div>
                    </div>
                @endforeach
            </div>
            <button type="button" class="swiper-button-next" aria-label="Próximo slide"></button>
            <button type="button" class="swiper-button-prev" aria-label="Slide anterior"></button>
            <div class="swiper-pagination"></div>
        </div>
    @enddesktop

</section>

@foreach ($bannersclientes->records as $banner_home_colecao)
    <div class="modal fade"
        id="modal{{ $banner_home_colecao->ordem_banners_clientes->values->first()->extraFieldOption->label }}"
        tabindex="-1"
        aria-labelledby="modalLabel{{ $banner_home_colecao->ordem_banners_clientes->values->first()->extraFieldOption->label }}"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-clients">
                <div class="modal-imagem">
                    <div class="imagem-main">
                        <div class="swiper main-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="image">

                                        <img src="{{ $banner_home_colecao->galeria_1_banners_clientes->values->first()->source }}"
                                            alt="{{ $banner_home_colecao->titulo_banners_clientes->values->first()->value }}"
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="{{ $banner_home_colecao->galeria_2_banners_clientes->values->first()->source }}"
                                            alt="{{ $banner_home_colecao->titulo_banners_clientes->values->first()->value }} 2"
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="{{ $banner_home_colecao->galeria_3_banners_clientes->values->first()->source }}"
                                            alt="{{ $banner_home_colecao->titulo_banners_clientes->values->first()->value }} 3"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-gallery-clients">
                        <div class="swiper thumbs-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide grid-imagens">
                                    <div class="image -vertical" data-index="0">
                                        <img src="{{ $banner_home_colecao->galeria_1_banners_clientes->values->first()->source }}"
                                            alt="{{ $banner_home_colecao->titulo_banners_clientes->values->first()->value }} 1"
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="swiper-slide grid-imagens">
                                    <div class="image -vertical" data-index="1">
                                        <img src="{{ $banner_home_colecao->galeria_2_banners_clientes->values->first()->source }}"
                                            alt="{{ $banner_home_colecao->titulo_banners_clientes->values->first()->value }} 2"
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="swiper-slide grid-imagens">
                                    <div class="image -vertical" data-index="2">
                                        <img src="{{ $banner_home_colecao->galeria_3_banners_clientes->values->first()->source }}"
                                            alt="{{ $banner_home_colecao->titulo_banners_clientes->values->first()->value }} 3"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-content-text">
                    <div class="modal-title fs-5" id="modalLabel1">
                        {{ $banner_home_colecao->titulo_banners_clientes->values->first()->value }}</div>
                    <div class="content-text">
                        @if (
                            $banner_home_colecao->descricao_banners_clientes != null &&
                                $banner_home_colecao->descricao_banners_clientes->values->isNotEmpty())
                            <p>{!! $banner_home_colecao->descricao_banners_clientes->values->first()->value !!}</p>
                        @else
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <!-- Ou pode exibir algo como texto padrão aqui -->
                        @endif

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 6L6 18M6 6L18 18" stroke="#B0B0B0" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </button>
                    </div>
                    <div class="content-bottom">
                        <a href="{{ $banner_home_colecao->link_da_joia_banners_clientes->values->first()->value }}">Conheça
                            o anel de noivado</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
