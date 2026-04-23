    <!-- Aparecido, Foi removido em produção, retornei no preview para que possamos voltar se necessário. A pedido do Max -->
    <div class="filter-categoria row">
        <div class="preco">
            <h3 class="collapse-filtro " id="filtro-abrir-faixa"> Filtrar por preço <img alt="Icon Filtro"
                    src="{{ path('arrow-filter.png') }}"> </h3>

            <div id="filtros-faixa-preco" class="filtros-faixa-preco">
                <div class="title"><strong>Mínimo</strong><strong>Máximo</strong></div>
                @foreach ($category->extraFields as $filtro)
                    @if ($filtro->slug == 'faixa_de_preco')
                        <div class="filtro" id="filtro-{{ $filtro->slug }}">

                            <div class="div-filtros" id="filtro-{{ $filtro->label }}">

                                @foreach ($filtro->values->sortBy(function ($filtro) {
        return $filtro->values;
    }) as $value)
                                    <button type="button" class="item-filtro faixa-{{ $value->value }}"
                                        filtro="{{ $filtro->slug }}" item="{{ $value->value }}"
                                        value="{{ $value->value }}">
                                        {{ $value->value }}
                                    </button>
                                @endforeach

                            </div>
                            <div class="text-left">
                                <button type="button" class="filtrar preco" id="limpar">
                                    <a href="{{ url()->current() }}">
                                        Limpar filtros
                                    </a>
                                </button>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>