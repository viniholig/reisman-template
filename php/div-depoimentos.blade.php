@if ($depoimento->imagem_depoimento != null && $depoimento->texto_depoimento != null)
    <div class="col-lg-4 col-sm-12">
        <div class="div-depoimento">
            {{-- $depoimento->ordem_depoimento->values->first->value->value --}}
            <img
                src="https://assets.betalabs.net/production/reisman/{{ $depoimento->imagem_depoimento->values->first->source->file_path }}">
            <div class="div-texto-depoimento">
                {!! $depoimento->texto_depoimento->values->first->value->value !!}
            </div>
        </div>
    </div>
@endif
