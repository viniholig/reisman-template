@if ($lojaemsp->records->count() > 0)
    @foreach ($lojaemsp->records as $divloja)
        @if ($divloja->imagem != null)
            <section class="about_loja"
                style="background-image: url(https://assets.betalabs.net/production/reisman/{{ $divloja->imagem->values->first->source->file_path }})">
                <div class="content-text">
                    @if ($divloja->titulo != null)
                        <div class="title">
                            {{ $divloja->titulo->values->first->value->value }}
                        </div>
                    @endif
                    @if ($divloja->descricao != null)
                        <div class="description">
                            {!! $divloja->descricao->values->first->value->value !!}
                        </div>
                    @endif
                    @if ($divloja->texto_botao != null)
                        <a @if ($divloja->link_botao != null) href="{{ $divloja->link_botao->values->first->value->value }}" @endif
                            class="btn btn-ver-mais desktop-inline-item">
                            Agende sua visita
                        </a>
                    @endif
                </div>


            </section>
        @endif
    @endforeach
@endif
