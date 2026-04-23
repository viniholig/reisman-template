<nav id="menu-mobile" class="menu-mobile-aside">
    <div class="logo-menu">
        <div class="logo">
            <img src="{{ path('logo-novo-preto.svg') }}" width="130px" height="25px"
                alt="Logo Reisman Mobile Alianças e Joias">
        </div>
        <button aria-label="Fechar menu" class="mm-menu-close" data-action="close-menu-mobile">
            <img src="https://assets.betalabs.net/production/reisman/images/stores/1/close-search.png" alt="Fechar">
        </button>
    </div>
    <div class="item login-menu">
        <a href="javascript:;" canopus-open-identification-modal="">
            Entrar
        </a>
    </div>
    <div class="mm-menu-search">
        <form class="search-form" action="/busca" method="get" id="search-form1">

            <div class="field">

                <input type="search" autocomplete="off" class="form-control" name="term" id="term1"
                    placeholder="O que você procura?" required autocomplete="on">

                <input type="hidden" value="24" name="size" />
            </div>
            <button aria-label="Pesquisar" class="action">
                <img src="{{ path('lupa-header-icon.png') }}" alt=" Icon Lupa de Pesquisa - Mobile">
            </button>
        </form>

    </div>
    <ul class="menu-main">
        @if (!starts_with(request()->path(), 'aliancas-de-casamento'))
            @include(@engine_view('menu-mobile-alianca'))
            @include(@engine_view('menu-mobile-aneis-noivado'))
            @include(@engine_view('menu-mobile-joias'))
        @else
            <li>
                <a href="/aliancas-de-casamento">Alianças</a>
            </li>
            <li>
                <a href="/aneis-de-noivado">Anéis de Noivado</a>
            </li>
            <li>
                <a href="/joias">Joias</a>
            </li>
        @endif


        <li>
            <a href="/aparadores-de-aliancas">Aparadores</a>
        </li>
        <li>
            <a href="/loja-em-sao-paulo">Showroom</a>
        </li>


    </ul>
    <div class="mm-ocd__backdrop-shadow"></div>
</nav>


<script>
    document.addEventListener("DOMContentLoaded", () => {
        document.getElementById("menu-toggle").addEventListener("click", () => {
            document.getElementById("menu-mobile").classList.add("open");
        });


        document.querySelector(" button.mm-menu-close").addEventListener("click", () => {
            document.getElementById("menu-mobile").classList.remove("open");
        });

        document.querySelectorAll(".open-submenu").forEach(trigger => {
            trigger.addEventListener("click", (e) => {
                e.preventDefault();
                const submenu = trigger.nextElementSibling;
                if (submenu && submenu.classList.contains("submenu")) {
                    submenu.classList.add("open");
                }
            });
        });

        document.querySelectorAll(".custom-back").forEach(back => {
            back.addEventListener("click", () => {
                const submenu = back.closest(".submenu");
                if (submenu) {
                    submenu.classList.remove("open");
                }
            });
        });

        document.querySelectorAll(".accordion-toggle").forEach(toggle => {
            toggle.addEventListener("click", () => {
                const content = toggle.nextElementSibling;
                if (content && content.classList.contains("accordion-content")) {
                    content.classList.toggle("open");
                }
            });
        });
    });
</script>
