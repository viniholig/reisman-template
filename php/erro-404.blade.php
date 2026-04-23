@include(engine_view('head'))
@section('title', 'Página não encontrada')
<style>
    .erro-404.text-center {
        margin: 50px;
    }

    .erro {
        font-size: 33px;
        font-weight: 700;
        margin: 100px 0 0 0;
    }
</style>

<body>
    <div class="container">
        <div class="erro-404 text-center">
            @if ($banner->records->count() > 0)
                @foreach ($banner->records as $ban)
                    @if ($ban->conteudo_pagina_404 != null)
                        {!! $ban->conteudo_pagina_404->values->first()->value !!}</h2>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
</body>
