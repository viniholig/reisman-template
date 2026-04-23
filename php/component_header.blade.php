<header class="header -@yield('page')" id="header">

    <!--@include(@engine_view('component_header_topbar'))-->

    <div class="container">
        @include(@engine_view('component_header_logo'))
        @include(@engine_view('component_header_menu_desktop'))
        @include(@engine_view('component_header_aside_box'))
    </div>

</header>
@include(@engine_view('menu_mobile'))


<div class="header-search">

    <div class="main-search">

        <form action="/busca" method="get" id="search-form">
            <div class="header-search-wrapper">
                <button type="submit" class="btn btn-search">
                    <svg xmlns="https://www.w3.org/2000/svg" version="1.1" xmlns:xlink="https://www.w3.org/1999/xlink"
                        width="20" height="20" x="0" y="0" viewBox="0 0 612.01 612.01"
                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path
                                d="M606.209 578.714 448.198 423.228C489.576 378.272 515 318.817 515 253.393 514.98 113.439 399.704 0 257.493 0S.006 113.439.006 253.393s115.276 253.393 257.487 253.393c61.445 0 117.801-21.253 162.068-56.586l158.624 156.099c7.729 7.614 20.277 7.614 28.006 0a19.291 19.291 0 0 0 .018-27.585zM257.493 467.8c-120.326 0-217.869-95.993-217.869-214.407S137.167 38.986 257.493 38.986c120.327 0 217.869 95.993 217.869 214.407S377.82 467.8 257.493 467.8z"
                                fill="#000000" opacity="1" data-original="#000000" class=""></path>
                        </g>
                    </svg>
                </button>
                <input type="search" autocomplete="off" class="form-control" name="term" id="term"
                    placeholder="Encontre um produto" required autocomplete="on">

                <input type="hidden" value="24" name="size" />


            </div><!-- End .header-search-wrapper -->
        </form>
        <button class="close-seach">
            <svg xmlns="https://www.w3.org/2000/svg" version="1.1" xmlns:xlink="https://www.w3.org/1999/xlink"
                width="20" height="20" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512"
                xml:space="preserve" class="">
                <g>
                    <path
                        d="M4.59 59.41a2 2 0 0 0 2.83 0L32 34.83l24.59 24.58a2 2 0 0 0 2.83-2.83L34.83 32 59.41 7.41a2 2 0 0 0-2.83-2.83L32 29.17 7.41 4.59a2 2 0 0 0-2.82 2.82L29.17 32 4.59 56.59a2 2 0 0 0 0 2.82z"
                        fill="#000000" opacity="1" data-original="#000000"></path>
                </g>
            </svg>
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





</div>
