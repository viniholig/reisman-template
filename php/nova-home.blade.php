@extends(engine_view('base-novo'))
@section('conteudo')
@section('title', 'Home')
@section('page', 'home')



@push('tags')
    <meta property="og:type" content="product" />
    <meta property="fb:admins" content="home teste" />
    <meta property="og:image" content="https://assets.betalabs.net/production/reisman/images/stores/1/reisman-logo.jpeg ">
@endpush

@section('metadescription', 'Alianças de Casamento e Anéis de Noivado | Reisman 1967')
<style>
    footer#footer {
        margin-bottom: 30px;
    }
</style>


@desktop
    <div id="banners-top-home" class="desktop-flex-item home-video">
        <div class="banner-top-home-sozinho-desktop home-video-main">
            <a href='/aneis-de-noivado'>
                <video width="100%" height="100%" autoplay loop muted playsinline>
                    <source src="https://assets.betalabs.net/production/reisman/videos/stores/reisman.mp4" type="video/mp4">
                </video>
            </a>
        </div>
    </div>
@elsedesktop
    <div id="banners-top-home-mobile" class="mobile-item text-center home-video">
        <div class=" home-video-main">
            <a href='/aneis-de-noivado'>
                <video width="100%" height="100%" autoplay loop muted playsinline>
                    <source src="https://assets.betalabs.net/production/reisman/videos/stores/1/reisman.mp4"
                        type="video/mp4">
                </video>
            </a>
        </div>
    </div>
@enddesktop








@include(@engine_view('component_banners_colecao'))
@include(@engine_view('component_home_product'))
@include(@engine_view('component_middle_home'))
@include(@engine_view('component_loja_sp'))

@include(@engine_view('component_clients'))


@push('scripts')
    <script>
        $('.banner-middle-home').each(function() {
            var imagem = $(this).find('img');
            var divTextos = $(this).find('.textos');

            console.log(imagem.css('width'))

            $(this).find('a').css('position', 'relative');
            divTextos.css('position', 'absolute');
            divTextos.css('top', '0');
            divTextos.css('width', imagem.css('width'));
            divTextos.css('height', imagem.css('height'));

            $(this).find('a').hover(function() {
                divTextos.removeClass('hide');
                imagem.addClass('escura');
            }, function() {
                divTextos.addClass('hide');
                imagem.removeClass('escura');
            });
        });
    </script>
    <script src="https://www.mercadopago.com/v2/security.js" view="home"></script>
@endpush

@endsection
