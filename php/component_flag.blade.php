@if ($itemFavorito->extraFields->has('selecionar_flag'))
    @switch($itemFavorito->extraFields->get('selecionar_flag')->values->first()->extraFieldOption->label)
        @case('Flag1')
            @if ($itemFavorito->extraFields->has('exibir_flag'))
                @switch($itemFavorito->extraFields->get('exibir_flag')->values->first()->extraFieldOption->label)
                    @case('Somente home')
                        @include(@engine_view('component_flag1_item'))
                    @break

                    @case('Home e categoria')
                        @include(@engine_view('component_flag1_item'))
                    @break

                    @case('Home e produto')
                        @include(@engine_view('component_flag1_item'))
                    @break

                    @case('Todas as páginas')
                        @include(@engine_view('component_flag1_item'))
                    @break
                @endswitch
            @endif
        @break

        @case('Flag2')
            @if ($itemFavorito->extraFields->has('exibir_flag'))
                @switch($itemFavorito->extraFields->get('exibir_flag')->values->first()->extraFieldOption->label)
                    @case('Somente home')
                        @include(@engine_view('component_flag2_item'))
                    @break

                    @case('Home e categoria')
                        @include(@engine_view('component_flag2_item'))
                    @break

                    @case('Home e produto')
                        @include(@engine_view('component_flag2_item'))
                    @break

                    @case('Todas as páginas')
                        @include(@engine_view('component_flag2_item'))
                    @break
                @endswitch
            @endif
        @break

        @case('Flag3')
            @if ($itemFavorito->extraFields->has('exibir_flag'))
                @switch($itemFavorito->extraFields->get('exibir_flag')->values->first()->extraFieldOption->label)
                    @case('Somente home')
                        @include(@engine_view('component_flag3_item'))
                    @break

                    @case('Home e categoria')
                        @include(@engine_view('component_flag3_item'))
                    @break

                    @case('Home e produto')
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
