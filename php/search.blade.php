@if (!request()->ajax())
    @extends(engine_view('base-novo'))
    @section('conteudo')
    @section('title', 'Resultado da busca')

    <div id="title-busca" class="text-center font-serif">
        Resultado da busca
    </div>
    <div class="retangulo"></div>

    <div id="resultado-busca">
        <div class="row text-center" canopus-showcase-infinite-scroll>
@endif
@if ($searchResult->items->isNotEmpty())
    @foreach ($searchResult->items as $item)
        @if ($item->prices->first()->price > 0)
            <div class="col-lg-3 col-sm-12 coluna-spot-search card-search">
                @include(engine_view('produto-item-novo'))
            </div>
        @endif
    @endforeach
@else
    <h5 style="margin-top: 30px">
        Não foram encontrados resultados para a busca realizada.
    </h5>
@endif
@if (!request()->ajax())
    </div>
    @if ($searchResult->items->isNotEmpty() && $searchResult->items->count() >= 24)
        <div class="div-carregar-mais text-center">
            <a href="javascript:;" class="text-center btn btn-carregar-mais"
                canopus-showcase-infinite-scroll-more>Carregar mais</a>
        </div>
    @endif
    </div>



    <!--

<section class="leituras">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img class="img-fluid" src="{{ path('anel-noivado.png') }}" alt="">
        </div>
        <div class="col-md-6">
            <h2>Saiba mais sobre alianças:</h2>
            <ol>
                <li><a href="">Sete dicas de ouro para te ajudar a comprar suas alianças</a></li>
                <li><a href="">Qual a diferença entre o diamante e a zircônia? Por qual devo optar?</a></li>
                <li><a href="">Quanto custa um par de alianças de ouro? Quanto devo investir?</a></li>
                <li><a href="">Como descobrir a numeração do dedo da minha namorada?</a></li>
                <li><a href="">Como escolher a largura das minhas alianças pela internet?</a></li>
                <li><a href="">O que são alianças anatômicas ou boleadas? Vale a pena?</a></li>
            </ol>
        </div>
    </div>
    <hr>
</div>
</section>

<section>
<div class="container">
    <section class="showroom">
        <img class="img-fluid" src="{{ path('loja.png') }}" alt="">
        <div class="show-caption">
            <div class="">
                <h3>Visite nosso showroom em São Paulo</h3>
                <hr>
                <p>Conheça pessoalmente nossas lindas joias e fale com um especialista<br>Estamos prontos para lhe ajudar na importante missão de comprar a joia perfeita.</p>
            </div>
            
        </div>
    </section>
</div>
</section>

<section class="insta py-5">
<div class="container">
    <a href="instagram.com/reisman_aliancas" target="_blank">@Reisman_aliancas</a>
    <h2>Siga-nos no Instagram</h2>
    <img src="{{ path('instagram.png') }}" alt="" class="img-fluid">
    <a href="instagram.com/reisman_aliancas" target="_blank" class="insta-btn">instagram shop</a>
</div>
</section>
@push('afterPageScripts')
    <script>
        $('.produto').each(function(index) {
            var that = this;
            var t = setTimeout(function() {
                $(that).addClass("animated fadeIn");
            }, 250 * index);
        });
    </script>
@endpush
-->
    <script src="https://www.mercadopago.com/v2/security.js" view="search"></script>

@endsection
@endif
