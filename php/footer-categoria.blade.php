@section('footer')

    </div>

    @include(@engine_view('component_regua'))

    <footer class="footer" id="footer">
        <div class="footer-menu ">
            <div class="logo-shop">
                <img src="{{ path('logo-novo-branco.svg') }}">
            </div>
            <ul class="has-children">

                <li class="menu-item " data-action="toggle-menu-footer">
                    <h3 class="menu-title">Categorias</h3>
                </li>
                <ul class="submenu">
                    <li class="submenu-item Quem somos">
                        <a aria-label="Alianças " class="submenu-title" href="/aliancas-de-casamento">
                            Alianças
                        </a>
                    </li>



                    <li class="submenu-item Quem somos">
                        <a aria-label="Anéis de noivado" class="submenu-title" href="/aneis-de-noivado">
                            Anéis de noivado
                        </a>
                    </li>

                    <li class="submenu-item Quem somos">
                        <a aria-label="joias " class="submenu-title" href="/joias">
                            Joias
                        </a>
                    </li>
                    <li class="submenu-item Quem somos">
                        <a aria-label="Menu " class="submenu-title" href="/joias">
                            Diamantes
                        </a>
                    </li>


                </ul>

            </ul>
            <ul class="has-children">

                <li class="menu-item " data-action="toggle-menu-footer">
                    <h3 class="menu-title">Soluções</h3>
                </li>
                <ul class="submenu">
                    <li class="submenu-item Quem somos">
                        <a aria-label="Dúvidas frequentes " class="submenu-title" href="/duvidas-frequentes">
                            Dúvidas frequentes
                        </a>
                    </li>



                    <li class="submenu-item Quem somos">
                        <a aria-label="Compromisso de satisfação" class="submenu-title" href="/compromisso-e-satisfacao">
                            Compromisso de satisfação
                        </a>
                    </li>

                    <li class="submenu-item Quem somos">
                        <a aria-label="joias " class="submenu-title" href="/trocas-e-devolucoes">
                            Ajustes e trocas e devolução
                        </a>
                    </li>
                    <li class="submenu-item Quem somos">
                        <a aria-label="Menu " class="submenu-title" href="/entrega-com-seguro">
                            Entrega com seguro
                        </a>
                    </li>
                    <li class="submenu-item Quem somos">
                        <a aria-label="Menu " class="submenu-title" href="/garantia">
                            Garantia da jóia
                        </a>
                    </li>
                    <li class="submenu-item Quem somos">
                        <a aria-label="Menu " class="submenu-title" href="/manutencoes">
                            Manutenções
                        </a>
                    </li>


                </ul>

            </ul>
            <ul class="has-children">

                <li class="menu-item " data-action="toggle-menu-footer">
                    <h3 class="menu-title">Reisman</h3>
                </li>
                <ul class="submenu">
                    <li class="submenu-item Quem somos">
                        <a aria-label="Alianças " class="submenu-title" href="/sobre">
                            Conheça a Reisman
                        </a>
                    </li>



                    <li class="submenu-item Quem somos">
                        <a aria-label="Anéis de noivado" class="submenu-title" href="/loja-em-sao-paulo">
                            Showroom
                        </a>
                    </li>

                    <li class="submenu-item Quem somos">
                        <a aria-label="joias " class="submenu-title" href="/depoimentos">
                            Depoimentos
                        </a>
                    </li>
                    <li class="submenu-item Quem somos">
                        <a aria-label="Menu " class="submenu-title" href="/fabricacao">
                            Fabricação
                        </a>
                    </li>
                    <li class="submenu-item Quem somos">
                        <a aria-label="Menu " class="submenu-title" href="/trabalhe-conosco">
                            Trabalhe conosco
                        </a>
                    </li>
                    <li class="submenu-item Quem somos">
                        <a aria-label="Menu " class="submenu-title" href="/revenda-direta-afiliados">
                            Revenda Direta e Afiliados
                        </a>
                    </li>

                    <li class="submenu-item Quem somos">
                        <a aria-label="Menu " class="submenu-title" href="https://blog.reisman.com.br/" target="_blank">
                            Blog
                        </a>
                    </li>
                    <li class="submenu-item Quem somos">
                        <a aria-label="Menu " class="submenu-title" href="/contato">
                            Contato
                        </a>
                    </li>


                </ul>

            </ul>
            <ul class="has-children area-dados">


                <h3 class="menu-title">Customer Care</h3>

                <div class="address-shop">
                    Rua Aracaju, 225 - 3º Andar · Higienópolis · São Paulo / SP
                </div>
                <div class="horario-shop">
                    <button class="btn-show-dados">
                        Horário de atendimento
                        <img src="{{ path('chevron-down-rodape.png') }}">



                    </button>

                    <div class="context-dados">
                        @if ($infosfooter->records->count() > 0)
                            @foreach ($infosfooter->records as $infof)
                                @if ($infof->horarios_de_atendimento != null)
                                    {!! $infof->horarios_de_atendimento->values->first->value->value !!}
                                @endif
                            @endforeach
                        @endif
                    </div>

                </div>
                <div class="phones-shop">
                    <button class="btn-show-dados">
                        Telefones
                        <img src="{{ path('chevron-down-rodape.png') }}">
                    </button>
                    <div class="context-dados">

                        @if ($infosfooter->records->count() > 0)
                            @foreach ($infosfooter->records as $infof)
                                @if ($infof->whatsapp != null)
                                    <div class="div-footer-atendimento">
                                        <a href="" target="_blank" id="a-whats">
                                            <img src="{{ path('icon-whatsapp.svg') }}"> <span
                                                id="n-whats">{{ $infof->whatsapp->values->first->value->value }}</span>
                                        </a>
                                    </div>
                                @endif
                                @if ($infof->telefone != null)
                                    <div class="div-footer-atendimento">
                                        <a href="/contato">
                                            <img src="{{ path('icon-atendimento.svg') }}">
                                            {{ $infof->telefone->values->first->value->value }}
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>

                </div>

            </ul>

            <div class="form-newsletter">
                <h3 class="menu-title">Novidades</h3>
                <span>Assine nossa newsletter e fique por dentro de todas as novidades.</span>

                <div class=" footer-submit-wrapper">
                    <form action="#" class="d-flex mb-0 w-100">
                        <input type="email" class="form-control mb-0 email-newsletter" placeholder="Seu e-mail"
                            required="">

                        <button type="submit" class="btn btn-primary shadow-none ls-10" value="Enviar">
                            Enviar
                        </button>
                    </form>
                </div>
                @if ($infosfooter->records->count() > 0)
                    @foreach ($infosfooter->records as $infof)
                        @if ($infof->link_instagram != null || $infof->link_facebook != null || $infof->link_pinterest != null)
                            <div class="redes-sociais">

                                <div class="social-info">
                                    @if ($infof->link_instagram != null)
                                        <a href="{{ $infof->link_instagram->values->first->value->value }}"
                                            target="_blank">
                                            <img src="{{ path('novo-icone-instagram.png') }}">
                                        </a>
                                    @endif
                                    @if ($infof->link_facebook != null)
                                        <a href="{{ $infof->link_facebook->values->first->value->value }}"
                                            target="_blank">
                                            <img src="{{ path('novo-icone-facebook.png') }}">
                                        </a>
                                    @endif
                                    @if ($infof->link_pinterest != null)
                                        <a href="{{ $infof->link_pinterest->values->first->value->value }}"
                                            target="_blank">
                                            <img src="{{ path('novo-icone-pinterest.png') }}">
                                        </a>
                                    @endif
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>

        </div>
        <div class="footer-middle">


            <div class="selos">
                <div class="gia-selo">
                    <img src="{{ path('gia-white.png') }}">
                </div>
                <div class="lets-selo">
                    <a href="https://betalabs.com.br/plataforma-e-commerce/" target="_blank">
                        <img src="{{ path('betalabs-plataforma-ecommerce-dark-white.png') }}">
                    </a>
                </div>
            </div>


            <div class="links-footer">
                <ul>
                    <li>
                        <a>Termos de uso</a>
                    </li>
                    <li>
                        <a>Preferências de cookies</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="subfooter">
            <div class="logo-shop">
                <img src="{{ path('logo-novo-branco.svg') }}">
            </div>
            <div class="dados-shop">
                <span class="span-copyright">© 2025, reisman Todos os direitos reservados CNPJ: 10.423.979/0001-64</span>
            </div>
            <div class="design-by">
                <a href="#">
                    <img src="{{ path('mucci.png') }}">
                </a>
            </div>

        </div>

    </footer>

    </div>

    <a class="wppButton"
        href="https://api.whatsapp.com/send?phone=5511959646000&amp;text=Ol%C3%A1,%20vim%20atrav%C3%A9s%20do%20site"
        target="_blank"></a>

    <div class="alert alert-dismissible text-center cookiealert" role="alert">
        <div class="cookiealert-container">
            <b>
                Coletamos dados estatísticos para melhorar sua experiência de navegação no site. Ao continuar, você concorda
                com nossa <a href="/politica-de-privacidade" target="_blank">política de privacidade</a>.
            </b>
            <button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="Close">
                Aceitar e Continuar
            </button>
        </div>
    </div>

    <span class="saudacao-logado logado"> </span>
    <span class="saudacao-nao-logado"></span>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="{{ canopus_js() }}" defer></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js" defer></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" defer></script>
    <script src="{{ script('script.js') }}" defer></script>
    <script src="{{ script('global.js') }}" defer></script>
    <script src="{{ script('cookiealert.js') }}" defer></script>

    <script src="{{ script('gnu.js') }}" defer></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js" defer></script>

    <script src="{{ script('header.js') }}" defer></script>
    <script src="{{ script('page.js') }}" defer></script>


    <script src="{{ script('checkout-preview.js') }}" defer></script>
    <script src="{{ script('datashop.js') }}" defer></script>





    @stack('scripts')
    </body>
@show
