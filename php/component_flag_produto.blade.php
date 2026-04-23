@if ($produto->extraFields->has('selecionar_flag'))
    @switch($produto->extraFields->get('selecionar_flag')->values->first()->extraFieldOption->label)
        @case('Flag1')
            @if ($produto->extraFields->has('exibir_flag'))
                @switch($produto->extraFields->get('exibir_flag')->values->first()->extraFieldOption->label)
                    @case('Home e produto')
                        @include(@engine_view('component_flag1_item'))
                    @break

                    @case('Categoria e produto')
                        @include(@engine_view('component_flag1_item'))
                    @break

                    @case('Somente produto')
                        @include(@engine_view('component_flag1_item'))
                    @break

                    @case('Todas as páginas')
                        @include(@engine_view('component_flag1_item'))
                    @break
                @endswitch
            @endif
        @break

        @case('Flag2')
            @if ($produto->extraFields->has('exibir_flag'))
                @switch($produto->extraFields->get('exibir_flag')->values->first()->extraFieldOption->label)
                    @case('Home e produto')
                        @include(@engine_view('component_flag2_item'))
                    @break

                    @case('Categoria e produto')
                        @include(@engine_view('component_flag2_item'))
                    @break

                    @case('Somente produto')
                        @include(@engine_view('component_flag2_item'))
                    @break

                    @case('Todas as páginas')
                        @include(@engine_view('component_flag2_item'))
                    @break
                @endswitch
            @endif
        @break

        @case('Flag3')
            @if ($produto->extraFields->has('exibir_flag'))
                @switch($produto->extraFields->get('exibir_flag')->values->first()->extraFieldOption->label)
                    @case('Home e produto')
                        @include(@engine_view('component_flag3_item'))
                    @break

                    @case('Categoria e produto')
                        @include(@engine_view('component_flag3_item'))
                    @break

                    @case('Somente produto')
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
