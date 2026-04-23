<section class="home-banners-grid">
    <!-- <div class="container-fluid"> -->
    <div class="banners-grid">

        @foreach ($bannersgrid->records as $banner_home_grid)
            <div class="grid-item">
                <a href="{{ $banner_home_grid->link_banners_grid->values->first()->value }}">
                    <div class="content-wrapper 1"
                        style="background-image: url({{ $banner_home_grid->imagem_banners_grid->values->first()->source }})">
                        <!--<img src="{{ $banner_home_grid->imagem_banners_grid->values->first()->source }}"  />-->

                        <div class="description">
                            <h2 class="title"
                                style="color: {{ $banner_home_grid->cor_das_letras_banners_grid->values->first()->value }} ;">
                                {{ $banner_home_grid->titulo_banners_grid->values->first()->value }}
                            </h2>
                            <span
                                style="color: {{ $banner_home_grid->cor_das_letras_banners_grid->values->first()->value }} ;">
                                {{ $banner_home_grid->descricao_banners_grid->values->first()->value }}
                            </span>
                            <p
                                style="color: {{ $banner_home_grid->cor_das_letras_banners_grid->values->first()->value }} ;">
                                {{ $banner_home_grid->texto_botao_banners_grid->values->first()->value }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>
    <!-- </div> -->

</section>
