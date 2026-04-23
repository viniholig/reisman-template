<section class="banners-middle container">

    @foreach ($bannersmiddles->records as $bannersmiddles)
        <div class="banners-grid index-{{ $loop->index }}">
            <div class="context-img">
                <figure class="image -square">
                    <img src="{{ $bannersmiddles->imagem_banners_middles->values->first()->source }}"
                        alt="{{ $bannersmiddles->alt_banners_middles->values->first()->value }}">
                </figure>
            </div>
            <div class="context-text">
                <h3> {{ $bannersmiddles->titulo_banners_middles->values->first()->value }}</h3>
                <div class="context">
                    {{ $bannersmiddles->texto_banners_middles->values->first()->value }}

                </div>

                <a href="{{ $bannersmiddles->url_banners_middles->values->first()->value }}">
                    {{ $bannersmiddles->cta_banners_middles->values->first()->value }}
                </a>
            </div>
        </div>
    @endforeach



</section>
