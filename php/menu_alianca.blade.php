<nav class="submenu-menu submenu-aliancas" aria-label="Categorias de alianças">

    <ul class="menu">

        <!-- ESTILO -->
        <li class="menu-coluna">
            <span class="menu-title">Alianças por estilo</span>
            <ul>
                <li><a href="/aliancas-finas-modelos" title="Alianças finas em ouro">Alianças finas</a></li>
                <li><a href="/aliancas-largura-media" title="Alianças médias em ouro">Alianças médias</a></li>
                <li><a href="/aliancas-largas-modelos" title="Alianças largas em ouro">Alianças largas</a></li>
                <li><a href="/aliancas-anatomicas-ouro" title="Alianças anatômicas confortáveis">Alianças anatômicas</a>
                </li>
                <li><a href="/aliancas-luxo-premium" title="Alianças de luxo premium">Alianças premium</a></li>
                <li><a href="/aliancas-tradicionais-classicas" title="Alianças tradicionais clássicas">Alianças
                        tradicionais</a></li>
            </ul>
        </li>

        <!-- FORMATO -->
        <li class="menu-coluna">
            <span class="menu-title">Formato externo das alianças</span>
            <ul>
                <li><a href="/aliancas-arredondadas-abauladas" title="Alianças arredondadas abauladas">Alianças
                        arredondadas</a></li>
                <li><a href="/aliancas-concavas-modelos" title="Alianças côncavas modernas">Alianças côncavas</a></li>
                <li><a href="/aliancas-retas-quadradas" title="Alianças retas quadradas">Alianças retas</a></li>
            </ul>
        </li>

        <!-- UNIDADE -->
        <li class="menu-coluna">
            <span class="menu-title">Comprar alianças</span>
            <ul>
                <li><a href="/alianca-em-ouro-18k" title="Comprar aliança em ouro 18k">Aliança em ouro 18k</a></li>
            </ul>
        </li>

        <!-- DATA -->
        <li class="menu-coluna">
            <span class="menu-title">Ocasiões especiais</span>
            <ul>
                <li><a href="/aliancas-de-bodas" title="Alianças para bodas de casamento">Alianças para bodas</a></li>
            </ul>
        </li>

    </ul>


</nav>


<style>
    header .menu-new .menu-box-new .menu-top-new {
        position: relative;
    }

    header .menu-new .menu-box-new .menu-top-new:hover ul.menu {
        opacity: 1;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        transition: transform, left, top 0.2s, opacity 0.2s;
    }

    nav.submenu-menu.submenu-aliancas ul.menu {
        width: 900px;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
    }

    nav.submenu-menu.submenu-joias ul.menu {
        width: 300px;
        display: grid;
        grid-template-columns: repeat(1, 1fr);
    }

    nav.submenu-menu ul.menu {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        opacity: 0;
        position: absolute;
        z-index: 1;
        top: 140%;
        left: -99999px;
        transform: translateX(0);
        /* min-width: 100%; */
        padding: 18px 15;
        background-color: #fff;
        border: 1px solid #dfdfdf;
        transition: transform 0s 0.2s, left 0s 0.2s, top 0.2s, opacity 0.2s;
        text-align: left;
    }

    nav.submenu-menu ul.menu span.menu-title {
        padding: 10px 15px;
        font-size: 13px;
        white-space: nowrap;
        font-weight: 700;
    }

    nav.submenu-menu ul.menu li.menu-coluna {
        margin-top: 10px;
    }

    nav.submenu-menu ul.menu li.menu-coluna>ul {
        padding: 0;
    }

    nav.submenu-menu ul.menu li.menu-coluna>ul li a {
        padding: 5px 15px;
        display: block;
        text-transform: none;
    }

    nav.submenu-menu ul.menu>ul {
        padding: 0;
    }

    nav.submenu-menu ul.menu::before {
        top: -13px;
        border-width: 0 10px 12px;
        border-style: solid;
        border-color: transparent transparent #dfdfdf;
        content: "";
        position: absolute;
        content: "";
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
    }

    /*# sourceMappingURL=css.css.map */
</style>
