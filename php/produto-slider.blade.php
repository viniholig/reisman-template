<a @if ($item->urls->first()) href="{{ url($item->urls->first()->url) }}" @endif>
    <div class="slider-item">
        <img src="{{ thumb($item->main_image->source, 290, 230) }}" alt="">
        <h4>{{ $item->identification->first()->name }}</h4>
        <h4>10x R$ 650,00</h4>
    </div>
</a>
