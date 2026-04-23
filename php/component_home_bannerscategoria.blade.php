<section class="home-banners-grid">
    <!-- <div class="container-fluid"> -->
    <div class="banners-grid container">

        @foreach ($bannershomecategorias->records as $banner_home_categorias)
            <div class="grid-item">
                <a href="{{ $banner_home_categorias->url_banners_categorias->values->first()->value }}">
                    <div class="content-wrapper 1" style="background-image: url()">
                        <figure class="image -square">
                            <img src="{{ $banner_home_categorias->banners_categorias_desktop->values->first()->source }}"
                                alt="{{ $banner_home_categorias->alt_banners_categorias->values->first()->value }}">
                        </figure>
                        <div class="description">
                            <h2 class="title">
                                {{ $banner_home_categorias->texto_banners_categorias->values->first()->value }}
                            </h2>

                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>
    <!-- </div> -->

</section>
