<section class="mini-banners-home">
    <div class="container-fluid">
        <!--<div class="main">-->
        <!--         <div class="title-section">-->
        <!--    <h3>Conheça</h3>-->
        <!--    <p>Nossa Coleção</p>-->
        <!--</div>-->

        <!--</div>-->
        <div class="mini-banners-carrousel">

            @foreach ($bannerscolecao->records as $banner_home_colecao)
                <div class="item">
                    <a href="{{ $banner_home_colecao->url_banner_colecao->values->first()->value }}">
                        <div class="image ">
                            <img src="{{ $banner_home_colecao->imagem_banner_colecao->values->first()->source }}"
                                loading="lazy" width="400px" height="400px"
                                alt="{{ $banner_home_colecao->nome_banner_colecao->values->first()->value }}" />
                            <div class="content gradient-dark  ">
                                <h3 class="title">
                                    {{ $banner_home_colecao->nome_banner_colecao->values->first()->value }}
                                </h3>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach



        </div>
    </div>

</section>
