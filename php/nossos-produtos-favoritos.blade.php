@if (!request()->ajax())
    @extends(engine_view('base'))
    @section('conteudo')
    @section('title', 'Nossos produtos favoritos')


    <div id="title-produtos-favoritos" class="text-center font-serif">
        Nossos produtos favoritos
    </div>
    <div class="retangulo"></div>

    <div id="div-produtos-favoritos">
        <div class="row text-center" canopus-showcase-infinite-scroll>
@endif
@if ($produtosFavoritos->collection->count() > 0)
    @foreach ($produtosFavoritos->collection as $itemFavorito)
        @itemAvailable($itemFavorito)
            <div class="col-lg-4 col-sm-12" style="margin-bottom: 25px">
                <a class="link-produto"
                    @if ($itemFavorito->urls->first()) href="{{ url($itemFavorito->urls->first()->url) }}" @endif>
                    <div class="img-spot-produto">
                        <img src="{{ thumb($itemFavorito->main_image->source) }}">
                    </div>
                    <div class="nome-produto-spot mobile-item">
                        {{ $itemFavorito->identification->first()->name }}
                    </div>
                    <div class="preco-produto-spot mobile-item">
                        10x R$ {{ number_format($itemFavorito->prices->first()->price / 10, 2, ',', '.') }}
                    </div>
                </a>
            </div>
        @enditemAvailable
    @endforeach
@else
    <h5 style="margin-top: 30px">
        Não foram encontrados produtos
    </h5>
@endif
@if (!request()->ajax())
    </div>
    @if ($produtosFavoritos->collection->count() > 0 && $produtosFavoritos->collection->count() >= 24)
        <div class="div-carregar-mais text-center">
            <a href="javascript:;" class="text-center btn btn-carregar-mais"
                canopus-showcase-infinite-scroll-more>Carregar mais</a>
        </div>
    @endif

    </div>



@endsection

@endif
