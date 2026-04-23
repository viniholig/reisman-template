<div class="product-block custom-css">
    <a @if ($item->urls->first()) href="{{ url($item->urls->first()->url) }}" @endif>
        <figure class="img-card image -vertical">
            @include(@engine_view('component_flag_categoria'))
            <img class="principal" width="300" height="400"
                @if ($item->extraFields->has('thumb_produto')) src="https://assets.betalabs.net/production/reisman/{{ $item->extraFields->get('thumb_produto')->values->first->source->file_path }}"
                                    @else
                                    src="{{ thumb($item->main_image->source) }}" @endif
                alt="{{ ($cat = collect($item->categories)->sortBy('id')->filter(
                        fn($cat) => ($cat->depth == 0 && in_array($cat->id, [1, 2, 3, 6, 45])) || ($cat->depth == 1 && $cat->id == 55),
                    )->first())
                    ? ($cat->id == 1
                        ? 'Elegância das ' . $item->identification->first()->name . ' com visual moderno e detalhes refinados'
                        : ($cat->id == 2
                            ? 'Exclusividade do ' . $item->identification->first()->name . ' com visual único e detalhes sofisticados'
                            : ($cat->id == 3
                                ? 'Destaque para ' .
                                    $item->identification->first()->name .
                                    ' com design sofisticado e acabamento elegante'
                                : ($cat->id == 6
                                    ? 'Sofisticação do ' .
                                        $item->identification->first()->name .
                                        ' com toque elegante e acabamento diferenciado'
                                    : ($cat->id == 45
                                        ? 'Texto para categoria 45 mais ' . $item->identification->first()->name . '.'
                                        : ($cat->id == 55
                                            ? 'Beleza do ' .
                                                $item->identification->first()->name .
                                                ' com brilho marcante e design contemporâneo'
                                            : 'Imagem do Produto ' . $item->identification->first()->name . ' '))))))
                    : 'Imagem do Produto ' . $item->identification->first()->name . ' ' }}"
                style="opacity: 1 !important;">



        </figure>
    </a>
    <div class="description">
        <div class="receiveImgs">

            @if (
                $item->extraFields->has('agrupamentos_de_produtos_1') &&
                    $item->extraFields->get('agrupamentos_de_produtos_1') !== null)
                <div class="outlineColorImage active main-image" rel="canonical"
                    data-link="@if ($item->extraFields->has('thumb_produto')) https://assets.betalabs.net/production/reisman/{{ $item->extraFields->get('thumb_produto')->values->first->source->file_path }} @else {{ thumb($item->main_image->source) }} @endif"
                    data-url="@if ($item->urls->first()) {{ url($item->urls->first()->url) }} @endif"
                    data-name="{{ $item->identification->first()->name }}"
                    data-nameColor="{{ $item->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}"
                    data-imagens-second="@if ($item->extraFields->has('imagem_produto_02') && $item->extraFields->get('imagem_produto_02')->values->isNotEmpty()) {{ $item->extraFields->get('imagem_produto_02')->values->first()->source }}
@else
@if ($item->extraFields->has('thumb_produto')) https://assets.betalabs.net/production/reisman/{{ $item->extraFields->get('thumb_produto')->values->first->source->file_path }} @else {{ thumb($item->main_image->source) }} @endif
@endif"
                    data-price-vista="{{ trim(str_replace(['R$', ' à vista', ' no Pix'], '', explode('ou', $item->extraFields->get('valor_base')->values->first()->value)[1])) }}"
                    data-price-parcelament="{{ explode('ou', $item->extraFields->get('valor_base')->values->first()->value)[0] }}"
                    data-price="@if ($item->extraFields->has('valor_base')) {{ $item->extraFields->get('valor_base')->values->first()->value }} @else 10x R$ {{ number_format($item->prices->first()->price / 10, 2, ',', '.') }} @endif">
                    <div
                        class="imageItem {{ ltrim(str_replace(['-18k', 'ouro'], ['', ''], str_replace(' ', '-', strtolower($item->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label))), '-') }}">

                    </div>
                    <div class="nameItem">
                        <span>
                            @if (
                                $item->extraFields->get('selecionar_cor_do_ouro') &&
                                    $item->extraFields->get('selecionar_cor_do_ouro')->values->isNotEmpty())
                                {{ $item->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}
                            @endif

                        </span>
                    </div>
                </div>
            @else
            @endif


            @if ($item->extraFields->has('agrupamentos_de_produtos') && $item->extraFields->get('agrupamentos_de_produtos') !== null)


                @foreach ($item->extraFields->get('agrupamentos_de_produtos')->values as $value)
                    @if (is_string($value) && !empty($value))
                        <div style="display: none">
                            {{ $value }}
                        </div>
                    @endif

                    @if (
                        $item->extraFields &&
                            $item->record &&
                            $item->record->extraFields &&
                            $item->record->extraFields->has('thumb_produto'))
                        <div class="outlineColorImage {{ url($item->record->urls->first()->url) === url($item->urls->first()->url) ? 'active' : '' }}"
                            rel="canonical"
                            data-link="https://assets.betalabs.net/production/reisman/{{ $item->record->extraFields->get('thumb_produto')->values->first->source->file_path }}"
                            data-url="{{ url($item->record->urls->first()->url) }}"
                            data-imagens-second="
@if (
    $item->record->extraFields->has('fotos_novas') &&
        $item->record->extraFields->get('fotos_novas')->values->first()->extraFieldOption->label == 'Sim') @if ($item->record->extraFields->has('imagem_produto_05'))
        {{ $item->record->extraFields->get('imagem_produto_05')->values->first()->source }}
    @elseif($item->record->extraFields->has('imagem_produto_04'))
        {{ $item->record->extraFields->get('imagem_produto_04')->values->first()->source }}
    @elseif($item->record->extraFields->has('imagem_produto_03'))
        {{ $item->record->extraFields->get('imagem_produto_03')->values->first()->source }}
    @elseif($item->record->extraFields->has('imagem_produto_02'))
        {{ $item->record->extraFields->get('imagem_produto_02')->values->first()->source }}
    @elseif($item->record->extraFields->has('imagem_produto_01'))
        {{ $item->record->extraFields->get('imagem_produto_01')->values->first()->source }}
    @else
        não tem imagens novas @endif
@else
não tem imagens novas
@endif
"
                            data-name="{{ $item->record->identification->first()->name }}"
                            data-price-vista="{{ trim(str_replace(['R$', ' à vista', ' no Pix'], '', explode('ou', $item->record->extraFields->get('valor_base')->values->first()->value)[1])) }}"
                            data-price-parcelament="{{ explode('ou', $item->record->extraFields->get('valor_base')->values->first()->value)[0] }}"
                            data-nameColor="{{ $item->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}"
                            data-price="{{ $item->record->extraFields->get('valor_base')->values->first()->value }}">
                            <div
                                class="imageItem {{ str_replace(['-18k', 'ouro-'], ['', ''], str_replace(' ', '-', strtolower($item->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label))) }} ">
                            </div>
                            <div class="nameItem">
                                <span>

                                    {{ $item->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}

                                </span>
                            </div>
                        </div>
                    @endif
                @endforeach
            @else
                <!-- Trate o caso em que 'agrupamentos_de_produtos' não está definido ou é null -->
            @endif
            @if (
                $item->extraFields->has('agrupamentos_de_produtos_1') &&
                    $item->extraFields->get('agrupamentos_de_produtos_1') !== null)


                @foreach ($item->extraFields->get('agrupamentos_de_produtos_1')->values as $value)
                    @if (is_string($value) && !empty($value))
                        <div style="display: none">
                            {{ $value }}
                        </div>
                    @endif

                    @if (
                        $item->extraFields &&
                            $item->record &&
                            $item->record->extraFields &&
                            $item->record->extraFields->has('thumb_produto'))
                        <div class="outlineColorImage {{ url($item->record->urls->first()->url) === url($item->urls->first()->url) ? 'active' : '' }}"
                            rel="canonical"
                            data-link="https://assets.betalabs.net/production/reisman/{{ $item->record->extraFields->get('thumb_produto')->values->first->source->file_path }}"
                            data-imagens-second="
@if (
    $item->record->extraFields->has('fotos_novas') &&
        $item->record->extraFields->get('fotos_novas')->values->first()->extraFieldOption->label == 'Sim') @if ($item->record->extraFields->has('imagem_produto_05'))
        {{ $item->record->extraFields->get('imagem_produto_05')->values->first()->source }}
    @elseif($item->record->extraFields->has('imagem_produto_04'))
        {{ $item->record->extraFields->get('imagem_produto_04')->values->first()->source }}
    @elseif($item->record->extraFields->has('imagem_produto_03'))
        {{ $item->record->extraFields->get('imagem_produto_03')->values->first()->source }}
    @elseif($item->record->extraFields->has('imagem_produto_02'))
        {{ $item->record->extraFields->get('imagem_produto_02')->values->first()->source }}
    @elseif($item->record->extraFields->has('imagem_produto_01'))
        {{ $item->record->extraFields->get('imagem_produto_01')->values->first()->source }}
    @else
        não tem imagens novas @endif
@else
não tem imagens novas
@endif
"
                            data-url="{{ url($item->record->urls->first()->url) }}"
                            data-name="{{ $item->record->identification->first()->name }}"
                            data-price-vista="{{ trim(str_replace(['R$', ' à vista', ' no Pix'], '', explode('ou', $item->record->extraFields->get('valor_base')->values->first()->value)[1])) }}"
                            data-price-parcelament="{{ explode('ou', $item->record->extraFields->get('valor_base')->values->first()->value)[0] }}"
                            data-nameColor="{{ $item->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}"
                            data-price="{{ $item->record->extraFields->get('valor_base')->values->first()->value }}">

                            <div
                                class="imageItem {{ str_replace(['-18k', 'ouro-'], ['', ''], str_replace(' ', '-', strtolower($item->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label))) }} ">
                            </div>
                            <div class="nameItem">
                                <span>
                                    {{ $item->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}
                                </span>
                            </div>
                        </div>
                    @endif
                @endforeach
            @else
                <!-- Trate o caso em que 'agrupamentos_de_produtos_1' não está definido ou é null -->
            @endif
            @if (
                $item->extraFields->has('agrupamentos_de_produtos_2') &&
                    $item->extraFields->get('agrupamentos_de_produtos_2') !== null)


                @foreach ($item->extraFields->get('agrupamentos_de_produtos_2')->values as $value)
                    @if (is_string($value) && !empty($value))
                        <div style="display: none">
                            {{ $value }}
                        </div>
                    @endif

                    @if (
                        $item->extraFields &&
                            $item->record &&
                            $item->record->extraFields &&
                            $item->record->extraFields->has('thumb_produto'))
                        <div class="outlineColorImage {{ url($item->record->urls->first()->url) === url($item->urls->first()->url) ? 'active' : '' }}"
                            rel="canonical"
                            data-link="https://assets.betalabs.net/production/reisman/{{ $item->record->extraFields->get('thumb_produto')->values->first->source->file_path }}"
                            data-imagens-second="
@if (
    $item->record->extraFields->has('fotos_novas') &&
        $item->record->extraFields->get('fotos_novas')->values->first()->extraFieldOption->label == 'Sim') @if ($item->record->extraFields->has('imagem_produto_05'))
        {{ $item->record->extraFields->get('imagem_produto_05')->values->first()->source }}
    @elseif($item->record->extraFields->has('imagem_produto_04'))
        {{ $item->record->extraFields->get('imagem_produto_04')->values->first()->source }}
    @elseif($item->record->extraFields->has('imagem_produto_03'))
        {{ $item->record->extraFields->get('imagem_produto_03')->values->first()->source }}
    @elseif($item->record->extraFields->has('imagem_produto_02'))
        {{ $item->record->extraFields->get('imagem_produto_02')->values->first()->source }}
    @elseif($item->record->extraFields->has('imagem_produto_01'))
        {{ $item->record->extraFields->get('imagem_produto_01')->values->first()->source }}
    @else
        não tem imagens novas @endif
@else
não tem imagens novas
@endif
"
                            data-url="{{ url($item->record->urls->first()->url) }}"
                            data-name="{{ $item->record->identification->first()->name }}"
                            data-price-vista="{{ trim(str_replace(['R$', ' à vista', ' no Pix'], '', explode('ou', $item->record->extraFields->get('valor_base')->values->first()->value)[1])) }}"
                            data-price-parcelament="{{ explode('ou', $item->record->extraFields->get('valor_base')->values->first()->value)[0] }}"
                            data-nameColor="{{ $item->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}"
                            data-price="{{ $item->record->extraFields->get('valor_base')->values->first()->value }}">
                            <div
                                class="imageItem {{ str_replace(['-18k', 'ouro-'], ['', ''], str_replace(' ', '-', strtolower($item->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label))) }} ">
                            </div>
                            <div class="nameItem">
                                <span>
                                    {{ $item->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}
                                </span>
                            </div>
                        </div>
                    @endif
                @endforeach
            @else
                <!-- Trate o caso em que 'agrupamentos_de_produtos_2' não está definido ou é null -->
            @endif

        </div>
        <h3 class="nome-produto-spot">
            {{ str_replace(['ouro', '18k'], '', $item->identification->first()->name) }}
        </h3>

        <div class="name-color-product">
            <span>
                @if (
                    $item->extraFields->get('selecionar_cor_do_ouro') &&
                        $item->extraFields->get('selecionar_cor_do_ouro')->values->isNotEmpty())
                    {{ $item->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}
                @endif

            </span>
        </div>

        <div class="preco-produto-spot-price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
            <meta itemprop="priceCurrency" content="BRL">



            @if ($item->extraFields->has('valor_base'))

                <span class="price-main">
                    <span class="currency">R$</span>
                    <span class="value" itemprop="price">
                        {{ trim(str_replace(['R$', ' à vista', ' no Pix'], '', explode('ou', $item->extraFields->get('valor_base')->values->first()->value)[1])) }}
                    </span>
                    <span class="currency-text">no pix</span>
                </span>
                <p class="price-installment">
                    ou em <span
                        class="parcelament">{{ explode('ou', $item->extraFields->get('valor_base')->values->first()->value)[0] }}</span>
                    no cartão
                </p>
            @else
                10x R$ {{ number_format($item->prices->first()->price / 10, 2, ',', '.') }}
            @endif
        </div>
    </div>


</div>
