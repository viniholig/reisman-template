@if ($mensagemTopo !== null && $mensagemTopo->records->count() > 0)
    @foreach ($mensagemTopo->records as $mensagem)
        @if ($mensagem->mensagem_topo_ativa !== null && $mensagem->mensagem_topo_ativa->values[0]->extraFieldOption->label == 'Sim')
            <div class="topbar-new container-fluid">
                {{ $mensagem->mensagem_topo_texto !== null ? $mensagem->mensagem_topo_texto->values[0]->value : '' }}
            </div>
            @break
        @endif
    @endforeach
@endif