<div class="product-block custom-css">
    <a @if ($item->urls->first()) href="{{ url($item->urls->first()->url) }}" @endif>
        <figure class="img-card image -vertical" style="aspect-ratio: 3 / 4;">
            @include(@engine_view('component_flag_categoria')) //Flag para os cards de produto, caso haja categoria associada ao produto. O arquivo de flag deve ser criado seguindo o padrão "flag-{slug-da-categoria}.blade.php" e colocado dentro da pasta "components" do tema ativo.
            <img class="principal" width="300" height="400"
                @if ($item->extraFields->has('thumb_produto')) src="https://assets.betalabs.net/production/reisman/{{ $item->extraFields->get('thumb_produto')->values->first->source->file_path }}"
                                    @else
                                    src="{{ thumb($item->main_image->source) }}" @endif
                style="opacity: 1 !important;">



        </figure>
    </a>
    <div class="description">

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
