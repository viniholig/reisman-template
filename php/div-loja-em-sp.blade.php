@if ($lojaemsp->records->count() > 0)
    @foreach ($lojaemsp->records as $divloja)
        <div id="div-loja-sp" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="50" data-aos-offset="0"
            data-aos-duration="800">
            <div class="div-inner">
                @if ($divloja->titulo != null)
                    <div class="title">
                        {{ $divloja->titulo->values->first->value->value }}
                    </div>
                    <div class="retangulo mobile-item"></div>
                @endif
                @if ($divloja->descricao != null)
                    <div class="desc">
                        {!! $divloja->descricao->values->first->value->value !!}
                    </div>
                @endif
                @if ($divloja->texto_botao != null)
                    <a @if ($divloja->link_botao != null) href="{{ $divloja->link_botao->values->first->value->value }}" @endif
                        class="btn btn-ver-mais desktop-inline-item">
                        {{ $divloja->texto_botao->values->first->value->value }}
                    </a>
                @endif
            </div>
            @if ($divloja->imagem != null)
                <div class="div-img">
                    <img src="https://assets.betalabs.net/production/reisman/{{ $divloja->imagem->values->first->source->file_path }}"
                        @if ($divloja->alt_imagem != null) alt="{{ $divloja->alt_imagem->values->first->value->value }}" @endif
                        @if ($divloja->title_imagem != null) title="{{ $divloja->title_imagem->values->first->value->value }}" @endif>
                </div>
            @endif
            @if ($divloja->texto_botao != null)
                <a @if ($divloja->link_botao != null) href="{{ $divloja->link_botao->values->first->value->value }}" @endif
                    class="btn btn-ver-mais mobile-item">
                    {{ $divloja->texto_botao->values->first->value->value }}
                </a>
            @endif
        </div>
    @endforeach
@endif
