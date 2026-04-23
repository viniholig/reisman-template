<a class="link-produto" @if ($item->urls->first()) href="{{ url($item->urls->first()->url) }}" @endif>
    <div class="img-spot-produto">
        <img @if ($item->extraFields->has('thumb_produto')) src="https://assets.betalabs.net/production/reisman/{{ $item->extraFields->get('thumb_produto')->values->first->source->file_path }}"
    @else
      src="{{ thumb($item->main_image->source) }}" @endif
            @if ($item->extraFields->has('alt_imagens')) alt="{{ $item->extraFields->get('alt_imagens')->values->first()->value }}" @endif
            @if ($item->extraFields->has('title_imagens')) title="{{ $item->extraFields->get('title_imagens')->values->first()->value }}" @endif>
    </div>
    <div class="info-produto-spot">
        <div class="nome-produto-spot">
            {{ $item->identification->first()->name }}
        </div>
        <div class="preco-produto-spot 12">
            @if ($item->extraFields->has('valor_base'))
                <span class="valorbase">{{ $item->extraFields->get('valor_base')->values->first()->value }}</span>
            @else
                10x R$ {{ number_format($item->prices->first()->price / 10, 2, ',', '.') }}
            @endif
        </div>
    </div>
</a>
