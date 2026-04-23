@if ($produtosFavoritos2->collection->count() > 0)
    <div class="section-products second-vitrine">
        <div class=" container">
            <div class="header-main">
                <h2 class="title">prestige</h2>
                <span>Diamantes grandes, a partir de 60 pontos, para joias impactantes que simbolizam sofisticação e
                    luxo.</span>
                <div class="arrows-vitrine">
                    <div class="prev-card">
                        <svg xmlns="https://www.w3.org/2000/svg" version="1.1" xmlns:xlink="https://www.w3.org/1999/xlink"
                            width="30" height="30" x="0" y="0" viewBox="0 0 128 128"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g
                                transform="matrix(-1.8369701987210297e-16,1,-1,-1.8369701987210297e-16,127.99968910217285,0.00006294250494676135)">
                                <path
                                    d="M64 88a3.988 3.988 0 0 1-2.828-1.172l-40-40c-1.563-1.563-1.563-4.094 0-5.656s4.094-1.563 5.656 0L64 78.344l37.172-37.172c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656l-40 40A3.988 3.988 0 0 1 64 88z"
                                    fill="#000000" opacity="1" data-original="#000000" class=""></path>
                            </g>
                        </svg>
                    </div>
                    <div class="next-card">
                        <svg xmlns="https://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="https://www.w3.org/1999/xlink" width="30" height="30" x="0" y="0"
                            viewBox="0 0 128 128" style="enable-background:new 0 0 512 512" xml:space="preserve"
                            class="">
                            <g
                                transform="matrix(6.123233995736766e-17,-1,1,6.123233995736766e-17,-0.00006294250488991793,127.99968910217288)">
                                <path
                                    d="M64 88a3.988 3.988 0 0 1-2.828-1.172l-40-40c-1.563-1.563-1.563-4.094 0-5.656s4.094-1.563 5.656 0L64 78.344l37.172-37.172c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656l-40 40A3.988 3.988 0 0 1 64 88z"
                                    fill="#000000" opacity="1" data-original="#000000" class=""></path>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="content carrousel-products">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach ($produtosFavoritos2->collection as $itemFavorito)
                            @itemAvailable($itemFavorito)
                                <div class="swiper-slide">
                                    <div class="product-block custom-css">
                                        <a
                                            @if ($itemFavorito->urls->first()) href="{{ url($itemFavorito->urls->first()->url) }}" @endif>
                                            <figure class="img-card image -vertical">
                                                <img class="principal" width="300" height="400"
                                                    @if ($itemFavorito->extraFields->has('thumb_produto')) src="https://assets.betalabs.net/production/reisman/{{ $itemFavorito->extraFields->get('thumb_produto')->values->first->source->file_path }}"
                                    @else
                                    src="{{ thumb($itemFavorito->main_image->source) }}" @endif
                                                    alt="{{ ($cat = collect($itemFavorito->categories)->sortBy('id')->filter(
                                                            fn($cat) => ($cat->depth == 0 && in_array($cat->id, [1, 2, 3, 6, 45])) || ($cat->depth == 1 && $cat->id == 55),
                                                        )->first())
                                                        ? ($cat->id == 1
                                                            ? 'Elegância das ' . $itemFavorito->identification->first()->name . ' com visual moderno e detalhes refinados'
                                                            : ($cat->id == 2
                                                                ? 'Exclusividade do ' .
                                                                    $itemFavorito->identification->first()->name .
                                                                    ' com visual único e detalhes sofisticados'
                                                                : ($cat->id == 3
                                                                    ? 'Destaque para ' .
                                                                        $itemFavorito->identification->first()->name .
                                                                        ' com design sofisticado e acabamento elegante'
                                                                    : ($cat->id == 6
                                                                        ? 'Sofisticação do ' .
                                                                            $itemFavorito->identification->first()->name .
                                                                            ' com toque elegante e acabamento diferenciado'
                                                                        : ($cat->id == 45
                                                                            ? 'Texto para categoria 45 mais ' . $itemFavorito->identification->first()->name . '.'
                                                                            : ($cat->id == 55
                                                                                ? 'Beleza do ' .
                                                                                    $itemFavorito->identification->first()->name .
                                                                                    ' com brilho marcante e design contemporâneo'
                                                                                : 'Imagem do Produto ' . $itemFavorito->identification->first()->name . ' '))))))
                                                        : 'Imagem do Produto ' . $itemFavorito->identification->first()->name . ' ' }}"
                                                    style="opacity: 1 !important;">

                                            </figure>
                                        </a>
                                        <div class="description">
                                            <div class="receiveImgs">

                                                @if (
                                                    $itemFavorito->extraFields->has('agrupamentos_de_produtos_1') &&
                                                        $itemFavorito->extraFields->get('agrupamentos_de_produtos_1') !== null)
                                                    <div class="outlineColorImage active main-image" rel="canonical"
                                                        data-link="@if ($itemFavorito->extraFields->has('thumb_produto')) https://assets.betalabs.net/production/reisman/{{ $itemFavorito->extraFields->get('thumb_produto')->values->first->source->file_path }} @else {{ thumb($itemFavorito->main_image->source) }} @endif"
                                                        data-url="@if ($itemFavorito->urls->first()) {{ url($itemFavorito->urls->first()->url) }} @endif"
                                                        data-name="{{ $itemFavorito->identification->first()->name }}"
                                                        data-nameColor="@if (
                                                            $itemFavorito->extraFields->get('selecionar_cor_do_ouro') &&
                                                                $itemFavorito->extraFields->get('selecionar_cor_do_ouro')->values->isNotEmpty()) {{ $itemFavorito->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }} @endif"
                                                        data-imagens-second="{{ $itemFavorito->extraFields->get('imagem_produto_02')->values->first()->source }}"
                                                        data-price-vista="{{ trim(str_replace(['R$', ' à vista', ' no Pix'], '', explode(' ou ', $itemFavorito->extraFields->get('valor_base')->values->first()->value)[1])) }}"
                                                        data-price-parcelament="{{ explode(' ou ', $itemFavorito->extraFields->get('valor_base')->values->first()->value)[0] }}"
                                                        data-price="@if ($itemFavorito->extraFields->has('valor_base')) {{ $itemFavorito->extraFields->get('valor_base')->values->first()->value }} @else 10x R$ {{ number_format($itemFavorito->prices->first()->price / 10, 2, ',', '.') }} @endif">
                                                        <div
                                                            class="imageItem {{ ltrim(str_replace(['-18k', 'ouro'], ['', ''], str_replace(' ', '-', strtolower($itemFavorito->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label))), '-') }}">

                                                        </div>
                                                        <div class="nameItem">
                                                            <span>
                                                                @if (
                                                                    $itemFavorito->extraFields->get('selecionar_cor_do_ouro') &&
                                                                        $itemFavorito->extraFields->get('selecionar_cor_do_ouro')->values->isNotEmpty())
                                                                    {{ $itemFavorito->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}
                                                                @endif
                                                            </span>
                                                        </div>
                                                    </div>
                                                @else
                                                @endif


                                                @if (
                                                    $itemFavorito->extraFields->has('agrupamentos_de_produtos') &&
                                                        $itemFavorito->extraFields->get('agrupamentos_de_produtos') !== null)


                                                    @foreach ($itemFavorito->extraFields->get('agrupamentos_de_produtos')->values as $value)
                                                        @if (is_string($value) && !empty($value))
                                                            <div style="display: none">
                                                                {{ $value }}
                                                            </div>
                                                        @endif

                                                        @if (
                                                            $itemFavorito->extraFields &&
                                                                $value->record &&
                                                                $value->record->extraFields &&
                                                                $value->record->extraFields->has('thumb_produto'))
                                                            <div class="outlineColorImage {{ url($value->record->urls->first()->url) === url($itemFavorito->urls->first()->url) ? 'active' : '' }}"
                                                                rel="canonical"
                                                                data-link="https://assets.betalabs.net/production/reisman/{{ $value->record->extraFields->get('thumb_produto')->values->first->source->file_path }}"
                                                                data-url="{{ url($value->record->urls->first()->url) }}"
                                                                data-imagens-second="
@if (
    $value->record->extraFields->has('fotos_novas') &&
        $value->record->extraFields->get('fotos_novas')->values->first()->extraFieldOption->label == 'Sim') @if ($value->record->extraFields->has('imagem_produto_05'))
        {{ $value->record->extraFields->get('imagem_produto_05')->values->first()->source }}
    @elseif($value->record->extraFields->has('imagem_produto_04'))
        {{ $value->record->extraFields->get('imagem_produto_04')->values->first()->source }}
    @elseif($value->record->extraFields->has('imagem_produto_03'))
        {{ $value->record->extraFields->get('imagem_produto_03')->values->first()->source }}
    @elseif($value->record->extraFields->has('imagem_produto_02'))
        {{ $value->record->extraFields->get('imagem_produto_02')->values->first()->source }}
    @elseif($value->record->extraFields->has('imagem_produto_01'))
        {{ $value->record->extraFields->get('imagem_produto_01')->values->first()->source }}
    @else
        não tem imagens novas @endif
@else
não tem imagens novas
@endif
"
                                                                data-name="{{ $value->record->identification->first()->name }}"
                                                                data-nameColor="{{ $value->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}"
                                                                data-price-vista="{{ trim(str_replace(['R$', ' à vista', ' no Pix'], '', explode(' ou ', $value->record->extraFields->get('valor_base')->values->first()->value)[1])) }}"
                                                                data-price-parcelament="{{ explode(' ou ', $value->record->extraFields->get('valor_base')->values->first()->value)[0] }}"
                                                                data-price="{{ $value->record->extraFields->get('valor_base')->values->first()->value }}">
                                                                <div
                                                                    class="imageItem {{ str_replace(['-18k', 'ouro-'], ['', ''], str_replace(' ', '-', strtolower($value->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label))) }} ">
                                                                </div>
                                                                <div class="nameItem">
                                                                    <span>

                                                                        {{ $value->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}

                                                                    </span>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @else
                                                    <!-- Trate o caso em que 'agrupamentos_de_produtos' não está definido ou é null -->
                                                @endif
                                                @if (
                                                    $itemFavorito->extraFields->has('agrupamentos_de_produtos_1') &&
                                                        $itemFavorito->extraFields->get('agrupamentos_de_produtos_1') !== null)


                                                    @foreach ($itemFavorito->extraFields->get('agrupamentos_de_produtos_1')->values as $value)
                                                        @if (is_string($value) && !empty($value))
                                                            <div style="display: none">
                                                                {{ $value }}
                                                            </div>
                                                        @endif

                                                        @if (
                                                            $itemFavorito->extraFields &&
                                                                $value->record &&
                                                                $value->record->extraFields &&
                                                                $value->record->extraFields->has('thumb_produto'))
                                                            <div class="outlineColorImage {{ url($value->record->urls->first()->url) === url($itemFavorito->urls->first()->url) ? 'active' : '' }}"
                                                                rel="canonical"
                                                                data-link="https://assets.betalabs.net/production/reisman/{{ $value->record->extraFields->get('thumb_produto')->values->first->source->file_path }}"
                                                                data-imagens-second="
@if (
    $value->record->extraFields->has('fotos_novas') &&
        $value->record->extraFields->get('fotos_novas')->values->first()->extraFieldOption->label == 'Sim') @if ($value->record->extraFields->has('imagem_produto_05'))
        {{ $value->record->extraFields->get('imagem_produto_05')->values->first()->source }}
    @elseif($value->record->extraFields->has('imagem_produto_04'))
        {{ $value->record->extraFields->get('imagem_produto_04')->values->first()->source }}
    @elseif($value->record->extraFields->has('imagem_produto_03'))
        {{ $value->record->extraFields->get('imagem_produto_03')->values->first()->source }}
    @elseif($value->record->extraFields->has('imagem_produto_02'))
        {{ $value->record->extraFields->get('imagem_produto_02')->values->first()->source }}
    @elseif($value->record->extraFields->has('imagem_produto_01'))
        {{ $value->record->extraFields->get('imagem_produto_01')->values->first()->source }}
    @else
        não tem imagens novas @endif
@else
não tem imagens novas
@endif
"
                                                                data-url="{{ url($value->record->urls->first()->url) }}"
                                                                data-name="{{ $value->record->identification->first()->name }}"
                                                                data-nameColor="{{ $value->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}"
                                                                data-price-vista="{{ trim(str_replace(['R$', ' à vista', ' no Pix'], '', explode(' ou ', $value->record->extraFields->get('valor_base')->values->first()->value)[1])) }}"
                                                                data-price-parcelament="{{ explode(' ou ', $value->record->extraFields->get('valor_base')->values->first()->value)[0] }}"
                                                                data-price="{{ $value->record->extraFields->get('valor_base')->values->first()->value }}">

                                                                <div
                                                                    class="imageItem {{ str_replace(['-18k', 'ouro-'], ['', ''], str_replace(' ', '-', strtolower($value->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label))) }} ">
                                                                </div>
                                                                <div class="nameItem">
                                                                    <span>
                                                                        {{ $value->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @else
                                                    <!-- Trate o caso em que 'agrupamentos_de_produtos_1' não está definido ou é null -->
                                                @endif
                                                @if (
                                                    $itemFavorito->extraFields->has('agrupamentos_de_produtos_2') &&
                                                        $itemFavorito->extraFields->get('agrupamentos_de_produtos_2') !== null)


                                                    @foreach ($itemFavorito->extraFields->get('agrupamentos_de_produtos_2')->values as $value)
                                                        @if (is_string($value) && !empty($value))
                                                            <div style="display: none">
                                                                {{ $value }}
                                                            </div>
                                                        @endif

                                                        @if (
                                                            $itemFavorito->extraFields &&
                                                                $value->record &&
                                                                $value->record->extraFields &&
                                                                $value->record->extraFields->has('thumb_produto'))
                                                            <div class="outlineColorImage {{ url($value->record->urls->first()->url) === url($itemFavorito->urls->first()->url) ? 'active' : '' }}"
                                                                rel="canonical"
                                                                data-link="https://assets.betalabs.net/production/reisman/{{ $value->record->extraFields->get('thumb_produto')->values->first->source->file_path }}"
                                                                data-imagens-second="
@if (
    $value->record->extraFields->has('fotos_novas') &&
        $value->record->extraFields->get('fotos_novas')->values->first()->extraFieldOption->label == 'Sim') @if ($value->record->extraFields->has('imagem_produto_05'))
        {{ $value->record->extraFields->get('imagem_produto_05')->values->first()->source }}
    @elseif($value->record->extraFields->has('imagem_produto_04'))
        {{ $value->record->extraFields->get('imagem_produto_04')->values->first()->source }}
    @elseif($value->record->extraFields->has('imagem_produto_03'))
        {{ $value->record->extraFields->get('imagem_produto_03')->values->first()->source }}
    @elseif($value->record->extraFields->has('imagem_produto_02'))
        {{ $value->record->extraFields->get('imagem_produto_02')->values->first()->source }}
    @elseif($value->record->extraFields->has('imagem_produto_01'))
        {{ $value->record->extraFields->get('imagem_produto_01')->values->first()->source }}
    @else
        não tem imagens novas @endif
@else
não tem imagens novas
@endif
"
                                                                data-url="{{ url($value->record->urls->first()->url) }}"
                                                                data-name="{{ $value->record->identification->first()->name }}"
                                                                data-nameColor="{{ $value->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}"
                                                                data-price-vista="{{ trim(str_replace(['R$', ' à vista', ' no Pix'], '', explode(' ou ', $value->record->extraFields->get('valor_base')->values->first()->value)[1])) }}"
                                                                data-price-parcelament="{{ explode(' ou ', $value->record->extraFields->get('valor_base')->values->first()->value)[0] }}"
                                                                data-price="{{ $value->record->extraFields->get('valor_base')->values->first()->value }}">
                                                                <div
                                                                    class="imageItem {{ str_replace(['-18k', 'ouro-'], ['', ''], str_replace(' ', '-', strtolower($value->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label))) }} ">
                                                                </div>
                                                                <div class="nameItem">
                                                                    <span>
                                                                        {{ $value->record->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}
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
                                                {{ str_replace(['ouro', '18k'], '', $itemFavorito->identification->first()->name) }}
                                            </h3>
                                            <div class="name-color-product">
                                                <span>
                                                    @if (
                                                        $itemFavorito->extraFields->get('selecionar_cor_do_ouro') &&
                                                            $itemFavorito->extraFields->get('selecionar_cor_do_ouro')->values->isNotEmpty())
                                                        {{ $itemFavorito->extraFields->get('selecionar_cor_do_ouro')->values->first()->extraFieldOption->label }}
                                                    @endif
                                                </span>
                                            </div>

                                            <div class="preco-produto-spot-price" itemprop="offers" itemscope
                                                itemtype="https://schema.org/Offer">
                                                <meta itemprop="priceCurrency" content="BRL">



                                                @if ($itemFavorito->extraFields->has('valor_base'))
                                                    <!--{{ $itemFavorito->extraFields->get('valor_base')->values->first()->value }}-->
                                                    <span class="price-main">
                                                        <span class="currency">R$</span>
                                                        <span class="value" itemprop="price">
                                                            {{ trim(str_replace(['R$', ' à vista', ' no Pix'], '', explode(' ou ', $itemFavorito->extraFields->get('valor_base')->values->first()->value)[1])) }}
                                                        </span>
                                                        <span class="currency-text">no pix</span>
                                                    </span>
                                                    <p class="price-installment">
                                                        ou em <span
                                                            class="parcelament">{{ explode(' ou ', $itemFavorito->extraFields->get('valor_base')->values->first()->value)[0] }}</span>
                                                        no cartão
                                                    </p>
                                                @else
                                                    10x R$
                                                    {{ number_format($itemFavorito->prices->first()->price / 10, 2, ',', '.') }}
                                                @endif
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            @enditemAvailable
                        @endforeach
                    </div>
                </div>
                <button type="button" class="swiper-button-next" aria-label="Próximo slide"></button>
                <button type="button" class="swiper-button-prev" aria-label="Slide anterior"></button>

                <div class="swiper-pagination"></div>
            </div>

        </div>
    </div>
@endif
