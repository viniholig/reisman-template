<div class="header-search">

    <div class="main-search">

        <form action="/busca" method="get" id="search-form">
            <div class="header-search-wrapper">
                <button type="submit" class="btn btn-search">
                    <img src="{{ path('search-new.png') }}">
                </button>
                <input type="search" autocomplete="off" class="form-control" name="term" id="term"
                    placeholder="Encontre um produto" required autocomplete="on">

                <input type="hidden" value="24" name="size" />


            </div><!-- End .header-search-wrapper -->
        </form>
        <button class="close-seach">
            <img src="{{ path('close-search.png') }}">
        </button>
    </div>

    <div class="search-results"></div>
    <div class="linkSearch">
        <h3>Produtos mais procurados</h3>
        @if ($aboutLinkSearch->records->count() > 0)
            @foreach ($aboutLinkSearch->records as $topbusca)
                <a
                    href="{{ $topbusca->url_do_link_busca->values->first->value->value }}">{{ $topbusca->nome_do_link_busca->values->first->value->value }}</a>
            @endforeach
        @endif
    </div>





</div><!-- End .header-search -->
