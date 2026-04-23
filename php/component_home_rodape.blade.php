<section class="banner_footer container">

    @foreach ($bannersrodape->records as $bannersrodape)
        <div class="context-img">
            <img src="{{ $bannersrodape->imagem_banner_rodape->values->first()->source }}"
                alt="{{ $bannersrodape->alt_banner_rodape->values->first()->value }}">
        </div>
        <div class="context-box">
            <h3> {{ $bannersrodape->titulo_banner_rodape->values->first()->value }}</h3>
            <div class="context">
                {{ $bannersrodape->texto_banner_rodape->values->first()->value }}

            </div>

            <a href="{{ $bannersrodape->url_banner_rodape->values->first()->value }}">
                {{ $bannersrodape->cta_banner_rodape->values->first()->value }}
            </a>
        </div>
    @endforeach


</section>
