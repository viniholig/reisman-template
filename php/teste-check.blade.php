<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout — Reisman</title>

    <style>
        /* ===== RESET & BASE ===== */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            background: #f7f7f5;
            color: #1a1a1a;
            margin: 0;
            padding: 0;
        }

        /* ===== LOGO TOPO ===== */
        .checkout-logo-topo {
            display: flex;
            justify-content: center;
            padding: 36px 16px 8px;
        }

        .checkout-logo-topo a {
            display: inline-flex;
            align-items: center;
            text-decoration: none;
        }

        .checkout-logo-topo .logo-text {
            font-size: 1.6rem;
            font-weight: 800;
            letter-spacing: 3px;
            color: #1a1a1a;
            text-transform: uppercase;
        }

        /* ===== CONTAINER SUCESSO ===== */
        #fechamento-sucesso {
            max-width: 860px;
            width: 100%;
            margin: 32px auto;
            padding: 0 16px 48px;
        }

        /* ===== BADGE DE CONFIRMACAO ===== */
        .confirmation-badge {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 28px;
        }

        .confirmation-badge .check-circle {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            background: linear-gradient(135deg, #4caf7d, #2e7d52);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 24px rgba(76, 175, 125, 0.35);
            margin-bottom: 14px;
        }

        .confirmation-badge .check-circle svg {
            width: 32px;
            height: 32px;
            stroke: #fff;
            stroke-width: 3;
            fill: none;
        }

        .confirmation-badge h3 {
            font-size: 1.4rem;
            font-weight: 800;
            color: #111;
            margin: 0 0 4px;
        }

        .confirmation-badge p {
            font-size: 0.9rem;
            color: #888;
            margin: 0;
        }

        /* ===== CARD MENSAGEM PRINCIPAL ===== */
        #subtitle-fechamento-sucesso {
            background: #fff;
            border-radius: 16px;
            padding: 36px 40px;
            box-shadow: 0 2px 20px rgba(0, 0, 0, .07);
            text-align: left;
            line-height: 1.75;
            color: #333;
            font-size: 0.97rem;
            margin-bottom: 20px;
        }

        #subtitle-fechamento-sucesso p {
            margin: 0 0 12px;
        }

        #subtitle-fechamento-sucesso ul {
            padding-left: 0;
            margin: 16px 0;
            display: flex;
            flex-direction: column;
            gap: 10px;
            list-style: none;
        }

        #subtitle-fechamento-sucesso ul li {
            background: #f7f7f5;
            border-left: 3px solid #c8a96e;
            padding: 10px 14px;
            border-radius: 0 8px 8px 0;
            font-size: 0.92rem;
            color: #444;
        }

        /* ===== BLOCO LED — FLANELA ===== */
        .flanela-wrapper {
            margin: 28px 0 8px;
            display: flex;
            justify-content: center;
        }

        .flanela-led-box {
            position: relative;
            border-radius: 14px;
            padding: 26px 36px;
            background: #fff;
            text-align: center;
            overflow: hidden;
            max-width: 540px;
            width: 100%;
        }

        .flanela-led-box::before {
            content: '';
            position: absolute;
            inset: -3px;
            border-radius: 17px;
            background: conic-gradient(from var(--angle, 0deg),
                    #c8a96e 0%,
                    #f5dfa0 15%,
                    #fffbe6 30%,
                    #c8a96e 45%,
                    #f5dfa0 60%,
                    #fffbe6 75%,
                    #c8a96e 100%);
            animation: spin-led 2.8s linear infinite;
            z-index: 0;
        }

        .flanela-led-box::after {
            content: '';
            position: absolute;
            inset: 3px;
            border-radius: 12px;
            background: #fff;
            z-index: 1;
        }

        @property --angle {
            syntax: '<angle>';
            initial-value: 0deg;
            inherits: false;
        }

        @keyframes spin-led {
            to {
                --angle: 360deg;
            }
        }

        .flanela-led-content {
            position: relative;
            z-index: 2;
        }

        .flanela-led-content .flanela-icon {
            display: flex;
            justify-content: center;
            margin-bottom: 10px;
        }

        .flanela-led-content .flanela-title {
            font-size: 1.05rem;
            font-weight: 700;
            color: #111;
            margin: 0 0 6px;
        }

        .flanela-led-content .flanela-title strong {
            color: #b8862e;
        }

        .flanela-led-content .flanela-desc {
            font-size: 0.88rem;
            color: #777;
            margin: 0 0 16px;
            line-height: 1.5;
        }

        .flanela-led-content .flanela-btn {
            display: inline-block;
            background: linear-gradient(135deg, #c8a96e, #b8862e);
            color: #fff;
            text-decoration: none;
            padding: 12px 30px;
            border-radius: 999px;
            font-weight: 700;
            font-size: 0.95rem;
            letter-spacing: 0.3px;
            transition: transform 0.18s ease, box-shadow 0.18s ease;
            box-shadow: 0 4px 16px rgba(184, 134, 46, 0.35);
        }

        .flanela-led-content .flanela-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(184, 134, 46, 0.5);
        }

        /* ===== GRID DE DADOS ===== */
        .data-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            margin-top: 20px;
        }

        .data-card {
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 2px 20px rgba(0, 0, 0, .07);
        }

        .data-card.full {
            grid-column: 1 / -1;
        }

        .data-card header {
            background: #1a1a1a;
            color: #fff;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            padding: 11px 20px;
        }

        .data-card .data-row {
            padding: 11px 20px;
            border-bottom: 1px solid #f0f0f0;
            font-size: 0.9rem;
            color: #444;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .data-card .data-row:last-child {
            border-bottom: none;
        }

        .data-card .data-row strong {
            color: #111;
            min-width: 72px;
            flex-shrink: 0;
        }

        /* ===== CARD IDENTIFICACAO ===== */
        .infoClient.checkout-formbox.ready {
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 2px 20px rgba(0, 0, 0, .07);
            margin-top: 0;
        }

        .infoClient.checkout-formbox.ready header {
            background: #1a1a1a;
            color: #fff;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            padding: 11px 20px;
        }

        .infoClient.checkout-formbox.ready>div {
            padding: 11px 20px;
            border-bottom: 1px solid #f0f0f0;
            font-size: 0.9rem;
            color: #444;
        }

        .infoClient.checkout-formbox.ready>div:last-child {
            border-bottom: none;
        }

        .infoClient.checkout-formbox.ready>div strong {
            color: #111;
            margin-right: 4px;
        }

        /* ===== CARD PRODUTO ===== */
        .product-card {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 16px 20px;
        }

        .product-thumb {
            width: 56px;
            height: 56px;
            border-radius: 10px;
            background: linear-gradient(135deg, #f5dfa0, #c8a96e);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .product-thumb svg {
            width: 28px;
            height: 28px;
            stroke: #7a4f10;
            fill: none;
            stroke-width: 1.5;
        }

        .product-info {
            flex: 1;
        }

        .product-info .product-name {
            font-weight: 700;
            font-size: 0.95rem;
            color: #111;
            margin: 0 0 2px;
        }

        .product-info .product-sku {
            font-size: 0.78rem;
            color: #aaa;
            margin: 0;
        }

        .product-price {
            font-weight: 800;
            font-size: 1.1rem;
            color: #b8862e;
            white-space: nowrap;
        }

        /* ===== STATUS BADGE ===== */
        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 4px 12px;
            border-radius: 999px;
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 0.3px;
        }

        .status-badge.pending {
            background: #fff8e1;
            color: #f59f00;
        }

        .status-badge.confirmed {
            background: #e8f5e9;
            color: #2e7d52;
        }

        .status-badge .dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: currentColor;
        }

        /* ===== PARCELAS ===== */
        label[for="installments-1-1"]>span {
            display: inline-block;
            padding: 10px 16px;
            border-radius: 999px;
            background: #FFE8EA;
            color: #C21807;
            font-weight: 900;
            font-size: 1.2rem;
            letter-spacing: .3px;
            line-height: 1;
            box-shadow: 0 0 0 2px rgba(194, 24, 7, .2) inset;
            transition: .15s ease;
        }

        label[for="installments-1-1"]:hover>span {
            transform: translateY(-1px);
            background: #FFD9DC;
            box-shadow: 0 8px 24px rgba(194, 24, 7, .25), 0 0 0 2px rgba(194, 24, 7, .3) inset;
        }

        /* ===== TOAST MOCK ===== */
        .mock-toast {
            position: fixed;
            bottom: 24px;
            right: 24px;
            background: #1a1a1a;
            color: #fff;
            padding: 12px 20px;
            border-radius: 10px;
            font-size: 0.88rem;
            font-weight: 600;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.18);
            opacity: 0;
            transform: translateY(12px);
            transition: all 0.3s ease;
            z-index: 9999;
            pointer-events: none;
        }

        .mock-toast.show {
            opacity: 1;
            transform: translateY(0);
        }

        /* ===== UTILITARIOS ===== */
        .hide {
            display: none !important;
        }

        .center {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .text-center {
            text-align: center;
        }

        /* ===== RESPONSIVO ===== */
        @media (max-width: 768px) {
            #fechamento-sucesso {
                max-width: 100%;
            }

            #subtitle-fechamento-sucesso {
                padding: 24px 20px;
            }

            .flanela-led-box {
                padding: 20px 18px;
            }

            .data-grid {
                grid-template-columns: 1fr;
            }

            .data-card.full {
                grid-column: unset;
            }
        }
    </style>
</head>

<body>

    <!-- LOGO NO TOPO (mock — na plataforma usa {{ path('logo-novo-preto.svg') }}) -->
    <div class="checkout-logo-topo">
        <a href="/">
            <span class="logo-text">Reisman</span>
        </a>
    </div>

    <!-- BLOCO SUCESSO -->
    <div id="fechamento-sucesso" class="center text-center hide">

        <!-- BADGE DE CONFIRMACAO -->
        <div class="confirmation-badge">
            <div class="check-circle">
                <svg viewBox="0 0 24 24">
                    <polyline points="4 13 9 18 20 7" />
                </svg>
            </div>
            <h3>Pedido realizado!</h3>
            <p>Acompanhe os detalhes abaixo</p>
        </div>

        <!-- MENSAGEM PRINCIPAL -->
        <div id="subtitle-fechamento-sucesso">

            <p>Estamos muito felizes em te-lo como cliente Reisman.</p>
            <p>
                Assim que o pagamento for realizado e confirmado, daremos inicio a producao da sua joia.<br>
                Voce recebera a confirmacao diretamente em seu e-mail &mdash; nao esqueca de conferir tambem
                a caixa de spam ou lixo eletronico, combinado?
            </p>
            <p>Qualquer duvida, nao hesite em nos contatar.</p>

            <ul>
                <li>
                    <strong>Cartao de credito:</strong> fique atento ao telefone. E possivel que o Mercado Pago
                    entre em contato para confirmar algumas informacoes.
                </li>
                <li>
                    <strong>PIX:</strong> geramos automaticamente um QR-Code para o pagamento, que pode ser
                    conferido logo abaixo. Basta efetuar o pagamento e ele sera confirmado instantaneamente.
                </li>
                <li>
                    <strong>Boleto bancario:</strong> lembre-se de efetuar o pagamento ate a data de vencimento.
                </li>
            </ul>

            <!-- CTA FLANELA COM EFEITO LED -->
            <div class="flanela-wrapper">
                <div class="flanela-led-box">
                    <div class="flanela-led-content">
                        <div class="flanela-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24"
                                fill="none" stroke="#b8862e" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polyline points="20 12 20 22 4 22 4 12" />
                                <rect x="2" y="7" width="20" height="5" />
                                <line x1="12" y1="22" x2="12" y2="7" />
                                <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z" />
                                <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z" />
                            </svg>
                        </div>
                        <p class="flanela-title">
                            <strong>Ganhe gratuitamente</strong> uma flanela para limpeza da sua joia!
                        </p>
                        <p class="flanela-desc">
                            Preencha uma rapida pesquisa e garanta o seu brinde.
                        </p>
                        <a href="https://forms.gle/dEZk6bD9WGWrmACw5" target="_blank" class="flanela-btn">
                            Quero minha flanela &rarr;
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- GRID DE DADOS -->
        <div class="data-grid">

            <!-- CARD IDENTIFICACAO — IDs originais preservados -->
            <div class="infoClient checkout-formbox ready">
                <header>Identificacao</header>
                <div>
                    <strong>Nome:</strong>
                    <span id="dataName"></span>&nbsp;<span id="dataSobrenome"></span>
                </div>
                <div>
                    <strong>Email:</strong>
                    <span id="dataEmail"></span>
                </div>
            </div>

            <!-- CARD PEDIDO -->
            <div class="data-card">
                <header>Pedido</header>
                <div class="data-row">
                    <strong>Numero:</strong>
                    <span id="mockOrderNumber"></span>
                </div>
                <div class="data-row">
                    <strong>Status:</strong>
                    <span class="status-badge pending">
                        <span class="dot"></span>
                        <span id="mockOrderStatus"></span>
                    </span>
                </div>
                <div class="data-row">
                    <strong>Pagamento:</strong>
                    <span id="mockPaymentMethod"></span>
                </div>
            </div>

            <!-- CARD PRODUTO -->
            <div class="data-card full">
                <header>Produto</header>
                <div class="product-card">
                    <div class="product-thumb">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12 22c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8z" />
                            <path d="M8 6l2-3h4l2 3" />
                            <line x1="5" y1="6" x2="19" y2="6" />
                        </svg>
                    </div>
                    <div class="product-info">
                        <p class="product-name" id="mockProductName"></p>
                        <p class="product-sku" id="mockProductSku"></p>
                    </div>
                    <span class="product-price" id="mockProductPrice"></span>
                </div>
            </div>

        </div>

    </div>

    <!-- TOAST SIMULADO -->
    <div class="mock-toast" id="mockToast"></div>

    <!-- ================================================================
       MOCK ENGINE — remover antes de subir na Betalabs
  ================================================================= -->
    <script>
        var MOCK = {
            client: {
                name: 'Maximiliano',
                sobrenome: 'Oliveira',
                email: 'maximiliano@email.com.br'
            },
            order: {
                number: '#REI-20481',
                status: 'Aguardando pagamento',
                payment: 'PIX'
            },
            product: {
                name: 'Anel Solitario Ouro 18k com Diamante',
                sku: 'SKU-ANL-0048-18K',
                price: 'R$ 3.490,00'
            }
        };

        // Injeta spans simulando o Canopus
        function mockCanopusSession() {
            var phantom = document.createElement('div');
            phantom.style.display = 'none';
            phantom.innerHTML =
                '<div class="canopus-payment-identification">' +
                '<span class="name masked unmasked">' + MOCK.client.name + '</span>' +
                '<span class="email masked unmasked small">' + MOCK.client.email + '</span>' +
                '</div>';
            document.body.appendChild(phantom);
        }

        // Simula sessao PIX
        function mockPixSession() {
            if (MOCK.order.payment === 'PIX') {
                sessionStorage.setItem('pix', 'ok');
            }
        }

        // Simula URL de conclusao
        function mockCheckoutCompletedUrl() {
            history.replaceState({}, '', '/checkout/completed');
        }

        // Simula elemento injetado pela Betalabs
        function mockBetalabsCompletedTitle() {
            var completedTitle = document.createElement('completed-title');
            var inner = document.createElement('p');
            inner.classList.add('mx-auto');
            completedTitle.appendChild(inner);
            document.body.appendChild(completedTitle);
        }

        // Preenche campos de pedido e produto
        function fillMockOrderData() {
            document.getElementById('mockOrderNumber').textContent = MOCK.order.number;
            document.getElementById('mockOrderStatus').textContent = MOCK.order.status;
            document.getElementById('mockPaymentMethod').textContent = MOCK.order.payment;
            document.getElementById('mockProductName').textContent = MOCK.product.name;
            document.getElementById('mockProductSku').textContent = MOCK.product.sku;
            document.getElementById('mockProductPrice').textContent = MOCK.product.price;
        }

        // Toast helper
        function showToast(msg) {
            var t = document.getElementById('mockToast');
            t.textContent = msg;
            t.classList.add('show');
            setTimeout(function() {
                t.classList.remove('show');
            }, 2800);
        }

        // iziToast mock
        window.iziToast = {
            success: function(opts) {
                showToast('OK: ' + opts.title);
            },
            error: function(opts) {
                showToast('Erro: ' + opts.title);
            }
        };

        // Inicializa tudo
        mockCanopusSession();
        mockPixSession();
        mockCheckoutCompletedUrl();
        mockBetalabsCompletedTitle();
        fillMockOrderData();
    </script>
    <!-- ================================================================
       FIM DO MOCK ENGINE
  ================================================================= -->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript">
        // Mock de requisicoes Ajax
        $.post = function(url, data) {
            console.log('[MOCK] $.post ->', url, data);
            var dfd = $.Deferred();
            setTimeout(function() {
                dfd.resolve(true);
            }, 300);
            return dfd.promise();
        };

        $.ajax = function(opts) {
            console.log('[MOCK] $.ajax ->', opts.type, opts.url, opts.data);
            var dfd = $.Deferred();
            setTimeout(function() {
                dfd.resolve(true);
            }, 300);
            return dfd.promise();
        };

        checkPix = setInterval(function() {
            $('payment-payment-option.payment-on-shipping').on('click', function() {
                sessionStorage.setItem('pix', 'ok');
            });
        }, 500);

        $(document).ready(function() {

            $('button#CopyQrCode').on('click', function() {
                $('.pagament.pix .ui.divQrCode').select();
                document.execCommand('Copy');
                $('.divQrCode').blur();
                $('#CopyQrCode').attr('data-tooltip', 'Copiado!');
            });

            // Observacao do pedido
            var myFunc00 = function() {
                setInterval(function() {
                    var fieldSaved = false;

                    if (
                        $('.canopus-cart-container .cart-table .canopus-cart-items').length > 0 &&
                        $('#div-observacao').length == 0 &&
                        $('.canopus-cart-empty').length == 0
                    ) {
                        var html =
                            '<div id="div-observacao">' +
                            '<div class="title">Possui alguma observacao do pedido?</div>' +
                            '<div class="content">' +
                            '<input type="text" name="observacao" class="form-control" placeholder="Digite aqui">' +
                            '<a href="javascript:;" id="btn-adicionar">Adicionar</a>' +
                            '</div>' +
                            '</div>';

                        $('.canopus-cart-container .cart-table .canopus-cart-items').append(html);

                        $('#btn-mostrar').on('click', function() {
                            $(this).addClass('hide');
                            $('#div-observacao').removeClass('hide');
                        });

                        $('#btn-adicionar').on('click', function() {
                            if ($('input[name="observacao"]').val().length > 0) {
                                $('input[name="observacao"]').prop('disabled', true);
                            }

                            var $observacao = $(this).prev();

                            if (fieldSaved) {
                                $.ajax({
                                    url: '/checkout/cart/extra-fields',
                                    type: 'DELETE',
                                    data: {
                                        slug: 'observacao'
                                    }
                                }).done(function() {
                                    $.post('/checkout/cart/extra-fields', {
                                        slug: 'observacao',
                                        value: $observacao.val()
                                    }).done(function(data) {
                                        if (data) iziToast.success({
                                            title: 'Observacao atualizada!',
                                            timeout: 3000
                                        });
                                        fieldSaved = true;
                                    });
                                });
                            } else {
                                $.post('/checkout/cart/extra-fields', {
                                    slug: 'observacao',
                                    value: $observacao.val()
                                }).done(function(data) {
                                    if (data) iziToast.success({
                                        title: 'Observacao salva!',
                                        timeout: 3000
                                    });
                                    fieldSaved = true;
                                });
                            }
                        });
                    }
                }, 300);
            };

            myFunc00();

            // Exibe bloco na URL /checkout/completed
            var myFunc01 = function() {
                var intr = setInterval(function() {
                    if (window.location.pathname === '/checkout/completed') {
                        $('completed-title p.mx-auto').append($('#fechamento-sucesso'));
                        $('completed-title p.mx-auto #fechamento-sucesso').removeClass('hide');
                        clearInterval(intr);
                    }
                }, 500);
            };

            myFunc01();

            // Verificacao de dados do cliente
            var myInterval = setInterval(checkInfo, 1000);

            function myStopFunction() {
                clearInterval(myInterval);
            }

            // Verificacao PIX
            setInterval(function() {
                if (sessionStorage.pix == 'ok') {
                    $('.pagament.pix.hide').removeClass('hide');
                    setTimeout(function() {
                        localStorage.removeItem('pix');
                    }, 1000);
                }
            }, 1000);

            function checkInfo() {
                var nameCheck = sessionStorage.getItem('nameClientCheckout');

                if (nameCheck != null) {
                    console.log('[checkInfo] Nome ja carregado:', nameCheck);
                } else {
                    var NameClient = $('.canopus-payment-identification span.name.masked.unmasked').text();
                    var emailClient = $('.canopus-payment-identification span.email.masked.unmasked.small').text();

                    if (NameClient === '') {
                        console.log('[checkInfo] Aguardando preenchimento...');
                    } else {
                        sessionStorage.setItem('nameClientCheckout', NameClient);
                        sessionStorage.setItem('emailClientCheckout', emailClient);

                        $('.infoClient span#dataName').html(NameClient);
                        $('.infoClient span#dataEmail').html(emailClient);

                        console.log('[checkInfo] Cliente identificado ->', NameClient, emailClient);
                        setTimeout(myStopFunction, 1000);
                    }
                }
            }

        });
    </script>

</body>

</html>
