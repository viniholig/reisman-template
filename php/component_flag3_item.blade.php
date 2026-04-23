@if ($flag2->records->count() > 0)
    @foreach ($flag2->records as $newflag_2)
        <div class="flag-produto"
            style="color: {{ optional($newflag_2->cor_do_texto_flag_1)->values?->first()?->value ?? '' }};
            background-color: {{ optional($newflag_2->background_da_flag_1)->values?->first()?->value ?? '' }}">

            <div class="img-flag">
                <img src="{{ optional($newflag_2->icone_flag_1)->values?->first()?->source ?? '' }}"
                    title="{{ optional($newflag_2->title_icone_1)->values?->first()?->value ?? '' }}"
                    alt="{{ optional($newflag_2->alt_icone_1)->values?->first()?->value ?? '' }}">

            </div>
            <span>
                {{ optional($newflag_2->nome_da_flag2)->values?->first()?->value ?? '' }}
            </span>
        </div>
    @endforeach
@endif
