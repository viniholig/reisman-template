@section('footer')

    </div>
    @if ($infosfooter->records->count() > 0)
        @foreach ($infosfooter->records as $infof)
            <footer id="footer">
                <div class="div-footer">
                    <div class="div-inner-footer">
                        <div class="title-footer">
                            Sobre Nós
                        </div>
                        <div class="subtitle-footer">
                            <a href="/sobre">
                                Conheça a Reisman
                            </a>
                        </div>
                        <div class="subtitle-footer">
                            <a href="/loja-em-sao-paulo">
                                Visite nossa loja
                            </a>
                        </div>
                        <div class="subtitle-footer">
                            <a href="/depoimentos">
                                Depoimentos
                            </a>
                        </div>
                        <div class="subtitle-footer">
                            <a href="/fabricacao">
                                Fabricação
                            </a>
                        </div>
                        <div class="subtitle-footer">
                            <a href="/trabalhe-conosco">
                                Trabalhe conosco
                            </a>
                        </div>
                        <div class="subtitle-footer">
                            <a href="/contato">
                                Entre em contato
                            </a>
                        </div>
                    </div>
                    <div class="div-inner-footer">
                        <div class="title-footer">
                            Ajuda
                        </div>
                        <div class="subtitle-footer">
                            <a href="/duvidas-frequentes">
                                Dúvidas frequentes
                            </a>
                        </div>
                        <div class="subtitle-footer">
                            <a href="/compromisso-e-satisfacao">
                                Compromisso de satisfação
                            </a>
                        </div>
                        <div class="subtitle-footer">
                            <a href="/trocas-e-devolucoes">
                                Ajuste, Troca e devolução
                            </a>
                        </div>
                        <div class="subtitle-footer">
                            <a href="/entrega-com-seguro">
                                Entrega com seguro
                            </a>
                        </div>
                        <div class="subtitle-footer">
                            <a href="/garantia">
                                Garantia da jóia
                            </a>
                        </div>
                        <div class="subtitle-footer">
                            <a href="/manutencoes">
                                Manutenções
                            </a>
                        </div>
                    </div>
                    <div class="div-inner-footer">
                        <div class="title-footer">
                            Conta
                        </div>
                        <div class="subtitle-footer">
                            <a href="/account/profile" class="logado">
                                Minha conta
                            </a>
                            <a href="javascript:;" canopus-open-identification-modal class="nao-logado">
                                Minha conta
                            </a>
                        </div>
                        <div class="subtitle-footer">
                            <a href="/account/orders" class="logado">
                                Meus pedidos
                            </a>
                            <a href="javascript:;" canopus-open-identification-modal class="nao-logado">
                                Meus pedidos
                            </a>
                        </div>
                    </div>
                    @if ($linksblogfooter->records->count() > 0)
                        <div class="div-inner-footer">
                            <div class="title-footer">
                                <a href="https://blog.reisman.com.br/" target="_blank">
                                    Blog
                                </a>
                            </div>
                            @foreach ($linksblogfooter->records as $linkblogfooter)
                                <div class="subtitle-footer">
                                    <a
                                        @if ($linkblogfooter->link_materia_blog_footer != null) href="{{ $linkblogfooter->link_materia_blog_footer->values->first->value->value }}" @endif>
                                        {!! $linkblogfooter->titulo_materia_blog_footer->values->first->value->value !!}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="div-footer bg-gray">
                    <div class="div-inner-footer">
                        <div class="title-footer">
                            Atendimento
                        </div>
                        <div class="subtitle-footer">
                            @if ($infof->horarios_de_atendimento != null)
                                {!! $infof->horarios_de_atendimento->values->first->value->value !!}
                            @endif
                            @if ($infof->whatsapp != null)
                                <div class="div-footer-atendimento">
                                    <a href="" target="_blank" id="a-whats">
                                        <img src="{{ path('icon-whatsapp.svg') }}" alt="whatsapp atendimento"> <span
                                            id="n-whats">{{ $infof->whatsapp->values->first->value->value }}</span>
                                    </a>
                                </div>
                                @push('scripts')
                                    <script>
                                        var linkWhats = $('#a-whats');
                                        var numeroWhats = $('#n-whats').html();
                                        numeroWhats = numeroWhats.replace(/[|$$|\s\-]/g, '');
                                        linkWhats.attr('href', 'https://api.whatsapp.com/send?phone=55' + numeroWhats);
                                    </script>
                                @endpush
                            @endif
                            @if ($infof->telefone != null)
                                <div class="div-footer-atendimento">
                                    <a href="/contato">
                                        <img src="{{ path('icon-atendimento.svg') }}" alt="atendimento">
                                        {{ $infof->telefone->values->first->value->value }}
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="div-inner-footer">
                        <div class="title-footer">
                            Formas de pagamento
                        </div>
                        <div class="subtitle-footer">
                            10% off à vista · 10x sem juros no cartão
                        </div>
                        <img src="{{ path('img-pagamento.png') }}" alt="Formas de pagamento">
                    </div>
                    <div class="div-inner-footer">
                        <div class="title-footer">
                            Segurança
                        </div>
                        <img src="{{ path('img-seguranca2.png') }}" alt="selo segurança">
                    </div>
                    @if ($infof->link_instagram != null || $infof->link_facebook != null || $infof->link_pinterest != null)
                        <div class="div-inner-footer">
                            <div class="title-footer">
                                Redes sociais
                            </div>
                            @if ($infof->link_instagram != null)
                                <a href="{{ $infof->link_instagram->values->first->value->value }}" target="_blank">
                                    <img src="{{ path('icon-instagram.svg') }}" alt="Instagram">
                                </a>
                            @endif
                            @if ($infof->link_facebook != null)
                                <a href="{{ $infof->link_facebook->values->first->value->value }}" target="_blank">
                                    <img src="{{ path('icon-facebook.svg') }}" alt="Facebook">
                                </a>
                            @endif
                            @if ($infof->link_pinterest != null)
                                <a href="{{ $infof->link_pinterest->values->first->value->value }}" target="_blank">
                                    <img src="{{ path('icon-pinterest.svg') }}" alt="Pinterest">
                                </a>
                            @endif
                        </div>
                    @endif
                </div>
                <div class="div-footer bg-gray">
                    <img src="{{ path('logo-footer.svg') }}" alt="logo footer">
                </div>
                <div class="div-bottom-footer">
                    <div class="subtitle-footer">
                        @if ($infof->nome_fantasia != null)
                            {{ $infof->nome_fantasia->values->first->value->value }} <span
                                class="desktop-inline-item">·</span><br class="mobile-item" />
                            @endif @if ($infof->cnpj != null)
                                CNPJ: {{ $infof->cnpj->values->first->value->value }}
                            @endif
                    </div>
                    @if ($infof->endereco != null)
                        <div class="subtitle-footer">
                            {{ $infof->endereco->values->first->value->value }}
                        </div>
                    @endif
                </div>

                <div id="div-dev-footer" class="div-bottom-footer">
                    <a href="" target="_blank">
                        <img src="{{ path('betalabs-padrao.png') }}" alt="Plataforma E-commerce">
                    </a>
                    <!--<a href="" target="_blank">-->
                    <!--    <img src="{{ path('logo-followup.png') }}">-->
                    <!--    <br />-->
                    <!--    Implantação-->
                    <!--</a>-->
                </div>
            </footer>
        @endforeach
    @endif
    </div>

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

    <a class="wppButton"
        href="https://api.whatsapp.com/send?phone=5511959646000&text=Ol%C3%A1,%20vim%20atrav%C3%A9s%20do%20site"
        target="_blank"></a>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="{{ canopus_js() }}" defer></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js" defer></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" defer>
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" defer></script>
    <script src="{{ script('script.js') }}" defer></script>
    <!--<script src="https://www.mercadopago.com/v2/security.js" view="home" defer></script>-->
    <!--<script src="{{ script('cookiealert.js') }}" defer></script>-->
    <!--<script src="{{ script('elevatezoom.js') }}" defer></script>-->
    <script src="{{ script('gnu.js') }}" defer></script>
    <script src="{{ script('venobox-min.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js" defer></script>
    <!-- jQuery 1.4 removido (conflito com jQuery 3.3.1) -->
    <!-- Fancybox 1.3.4 removido (incompatível com jQuery 3.x) -->
    <!--<script src="{{ script('header.js') }}" defer></script>-->
    <script src="{{ script('produto.js') }}" defer></script>
    <script src="{{ script('venoboxNew-min.js') }}" defer></script>
    <!--<script src="{{ script('checkout-preview.js') }}" defer></script>-->

    </body>
@show
