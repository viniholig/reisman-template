@if ($flag1->records->count() > 0)
    @foreach ($flag1->records as $newflag_1)
        <div class="flag-produto"
            style="color: {{ optional($newflag_1->cor_do_texto_flag_1)->values?->first()?->value ?? '' }};
            background-color: {{ optional($newflag_1->background_da_flag_1)->values?->first()?->value ?? '' }}">

            <div class="img-flag">
                <img src="{{ optional($newflag_1->icone_flag_1)->values?->first()?->source ?? '' }}"
                    title="{{ optional($newflag_1->title_icone_1)->values?->first()?->value ?? '' }}"
                    alt="{{ optional($newflag_1->alt_icone_1)->values?->first()?->value ?? '' }}">

            </div>
            <span>
                {{ optional($newflag_1->nome_da_flag1)->values?->first()?->value ?? '' }}
            </span>
        </div>
    @endforeach
@endif
