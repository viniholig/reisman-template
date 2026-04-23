@if ($item->extraFields->has('selecionar_flag'))
    @switch($item->extraFields->get('selecionar_flag')->values->first()->extraFieldOption->label)
        @case('Flag1')
            @if ($item->extraFields->has('exibir_flag'))
                @switch($item->extraFields->get('exibir_flag')->values->first()->extraFieldOption->label)
                    @case('Home e categoria')
                        @include(@engine_view('component_flag1_item'))
                    @break

                    @case('Categoria e produto')
                        @include(@engine_view('component_flag1_item'))
                    @break

                    @case('Somente categoria')
                        @include(@engine_view('component_flag1_item'))
                    @break

                    @case('Todas as páginas')
                        @include(@engine_view('component_flag1_item'))
                    @break
                @endswitch
            @endif
        @break

        @case('Flag2')
            @if ($item->extraFields->has('exibir_flag'))
                @switch($item->extraFields->get('exibir_flag')->values->first()->extraFieldOption->label)
                    @case('Home e categoria')
                        @include(@engine_view('component_flag2_item'))
                    @break

                    @case('Categoria e produto')
                        @include(@engine_view('component_flag2_item'))
                    @break

                    @case('Somente categoria')
                        @include(@engine_view('component_flag2_item'))
                    @break

                    @case('Todas as páginas')
                        @include(@engine_view('component_flag2_item'))
                    @break
                @endswitch
            @endif
        @break

        @case('Flag3')
            @if ($item->extraFields->has('exibir_flag'))
                @switch($item->extraFields->get('exibir_flag')->values->first()->extraFieldOption->label)
                    @case('Home e categoria')
                        @include(@engine_view('component_flag3_item'))
                    @break

                    @case('Somente categoria')
                        @include(@engine_view('component_flag3_item'))
                    @break

                    @case('Categoria e produto')
                        @include(@engine_view('component_flag3_item'))
                    @break

                    @case('Todas as páginas')
                        @include(@engine_view('component_flag3_item'))
                    @break
                @endswitch
            @endif
        @break

    @endswitch
@endif
