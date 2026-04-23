@if ($flag->records->count() > 0)
    @foreach ($flag->records as $newflag)
        <div class="flag-produto"
            style="color: {{ optional($newflag->cor_do_texto_flag)->values?->first()?->value ?? '' }};
            background-color: {{ optional($newflag->background_da_flag)->values?->first()?->value ?? '' }}">

            @if ($newflag->icone_flag)
                ->values?->first()?->source)
                <div class="img-flag" class="{{ optional($newflag->title_icone_1)->values?->first()?->value ?? '' }}">
                    <img src="{{ optional($newflag->icone_flag)->values?->first()?->source ?? '' }}"
                        title="{{ optional($newflag->title_icone_1)->values?->first()?->value ?? '' }}"
                        alt="{{ optional($newflag->alt_icone_1)->values?->first()?->value ?? '' }}">

                </div>
            @endif
            <span style="color: {{ optional($newflag->cor_do_texto_flag)->values?->first()?->value ?? '' }};">
                {{ optional($newflag->nome_da_flag)->values?->first()?->value ?? '' }}
            </span>
        </div>
    @endforeach
@endif
