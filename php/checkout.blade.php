<!DOCTYPE html>
<html>
@include(engine_view('head'))
@checkoutHeader()

<style>
    /* ===== FONTES ===== */
    @import url('https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap');

    /* ===== RESET & BASE ===== */
    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    body {
        font-family: 'Spectral', serif;
        background: #f7f7f5;
        color: #1a1a1a;
        margin: 0;
        padding: 0;
    }

    /* ===== ESCONDE ELEMENTOS NATIVOS ===== */
    completed-title>div.row.text-center>h2 {
        display: none !important;
    }

    completed-title>div.row.text-center>p.mx-auto>*:not(#fechamento-sucesso) {
        display: none !important;
    }

    completed-title>div.row.text-center {
        margin: 0 !important;
        padding: 0 !important;
    }

    completed-payment-method {
        display: none !important;
    }

    fieldset {
        display: none !important;
    }

    .row.text-center.mb-lg {
        display: none !important;
    }

    /* ===== FORÇA LARGURA DO CONTAINER NATIVO ===== */
    .completed-resume {
        max-width: 860px !important;
        width: 100% !important;
        flex: 0 0 100% !important;
        padding: 0 16px !important;
        margin: 0 auto !important;
    }

    .container>.row {
        justify-content: center !important;
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

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .title {
        font-family: 'Magnificent', serif;
        font-weight: normal;
    }

    .confirmation-badge h3 {
        font-family: 'Magnificent', serif;
        font-size: 24px;
        font-weight: normal;
        color: #111;
        margin: 0 0 8px;
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
        font-family: 'Magnificent', serif;
        font-size: 1.5rem;
        font-weight: normal;
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
        text-align: left;
    }

    .data-card {
        background: #fff;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 2px 20px rgba(0, 0, 0, .07);
        display: flex;
        flex-direction: column;
    }

    .data-card.full {
        grid-column: 1 / -1;
    }

    .data-card header {
        background: #1a1a1a;
        color: #fff;
        font-family: 'Magnificent', serif;
        font-size: 1.5rem;
        font-weight: normal;
        letter-spacing: 0.5px;
        padding: 10px 20px !important;
        display: flex;
        align-items: center;
    }

    .data-card .data-row {
        padding: 11px 20px;
        border-bottom: 1px solid #f0f0f0;
        font-size: 0.9rem;
        color: #444;
        display: flex;
        align-items: center;
        gap: 6px;
        flex-wrap: wrap;
    }

    .data-card .data-row.col-dir {
        flex-direction: column;
        align-items: flex-start;
        gap: 2px;
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
        display: flex;
        flex-direction: column;
        padding: 0 !important;
    }

    .infoClient.checkout-formbox.ready header {
        background: #1a1a1a;
        color: #fff !important;
        font-family: 'Magnificent', serif;
        font-size: 1.5rem;
        font-weight: normal;
        letter-spacing: 0.5px;
        padding: 10px 20px !important;
        display: flex;
        align-items: center;
    }

    .infoClient.checkout-formbox.ready>div {
        padding: 11px 20px;
        border-bottom: 1px solid #f0f0f0;
        font-size: 0.9rem;
        color: #444;
        word-break: break-word;
    }

    .infoClient.checkout-formbox.ready>div:last-child {
        border-bottom: none;
    }

    .infoClient.checkout-formbox.ready>div strong {
        color: #111;
        margin-right: 4px;
        display: inline-block;
        min-width: 60px;
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

    .status-badge.confirmed,
    .status-badge.approved {
        background: #e8f5e9;
        color: #2e7d52;
    }

    .status-badge.processing {
        background: #e8f1ff;
        color: #2457a6;
    }

    .status-badge.denied {
        background: #fdecec;
        color: #b42318;
    }

    .status-badge .dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: currentColor;
    }

    /* ===== PAYMENT NATIVE CONTAINER ===== */
    #payment-native-container {
        padding: 16px 20px;
        display: flex;
        flex-direction: column;
        gap: 14px;
        align-items: center;
        border-top: 1px solid #f0f0f0;
        width: 100%;
        box-sizing: border-box;
        overflow: hidden;
    }

    #payment-native-container:empty {
        display: none;
    }

    #payment-native-container completed-payment-method-pix,
    #payment-native-container completed-payment-method-bank-slip,
    #payment-native-container completed-payment-method-credit-card,
    #payment-native-container>div,
    #payment-native-container>form {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 12px;
        width: 100%;
        max-width: 100%;
        overflow-wrap: break-word;
        word-wrap: break-word;
        word-break: break-word;
    }

    #payment-native-container completed-payment-method-pix img {
        border-radius: 10px;
        border: 1px solid #eceae4;
        max-width: 220px;
        width: 100%;
        height: auto;
        box-shadow: 0 8px 22px rgba(0, 0, 0, .05);
    }

    #payment-native-container .btn,
    #payment-native-container a.btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        background: linear-gradient(135deg, #c8a96e, #b8862e);
        color: #fff !important;
        border-radius: 999px;
        padding: 11px 24px;
        font-weight: 700;
        font-size: 14px;
        text-decoration: none;
        border: none;
        box-shadow: 0 6px 18px rgba(184, 134, 46, 0.25);
        cursor: pointer;
        text-align: center;
    }

    /* ===== CARD PRODUTO (ADAPTADO) ===== */
    .produto-item {
        padding: 20px;
        border-bottom: 1px solid #f0f0f0;
    }

    .produto-item:last-child {
        border-bottom: none;
    }

    .produto-nome {
        font-weight: 700;
        font-size: 0.95rem;
        color: #111;
        margin: 0 0 10px;
    }

    .produto-main {
        display: flex;
        gap: 16px;
        align-items: center;
        margin-bottom: 14px;
    }

    .produto-thumb {
        width: 64px;
        height: 64px;
        flex-shrink: 0;
        border-radius: 10px;
        background: #f7f7f5;
        border: 1px solid #eceae4;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .produto-thumb img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }

    .produto-main-info {
        flex: 1;
        min-width: 0;
    }

    .produto-details-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px;
        margin-top: 14px;
    }

    .produto-details-box {
        background: #fafaf8;
        border: 1px solid #eceae4;
        border-radius: 10px;
        padding: 14px;
    }

    .produto-details-box-title {
        font-family: 'Magnificent', serif;
        font-size: 1.25rem;
        font-weight: normal;
        letter-spacing: 0.5px;
        color: #333;
        margin: 0 0 10px;
    }

    .produto-detail-row {
        display: flex;
        flex-direction: column;
        gap: 2px;
        margin-bottom: 10px;
    }

    .produto-detail-row:last-child {
        margin-bottom: 0;
    }

    .produto-detail-label {
        font-size: 0.75rem;
        color: #999;
        text-transform: uppercase;
        letter-spacing: 0.4px;
    }

    .produto-detail-value {
        font-size: 0.9rem;
        color: #222;
        line-height: 1.45;
        word-break: break-word;
    }

    /* ===== TOTAIS ===== */
    .totais-row-custom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 11px 20px;
        border-bottom: 1px solid #f0f0f0;
        font-size: 0.95rem;
        color: #555;
    }

    .totais-row-custom:last-child {
        border-bottom: none;
    }

    .totais-row-custom.total-final {
        font-family: 'Spectral', serif;
        font-weight: 700;
        font-size: 1.2rem;
        color: #111;
        background: #fafaf8;
        padding: 16px 20px;
    }

    .totais-label {
        color: #888;
    }

    .totais-valor {
        font-weight: 600;
        color: #222;
    }

    .totais-row-custom.total-final .totais-valor {
        color: #b8862e;
    }

    /* ===== BOTÃO VOLTAR ===== */
    .voltar-wrapper {
        display: flex;
        justify-content: center;
        margin-top: 32px;
    }

    .btn-voltar-loja {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 12px 32px;
        border-radius: 999px;
        border: 1.5px solid #ccc;
        background: transparent;
        color: #666;
        font-weight: 600;
        font-size: 0.95rem;
        text-decoration: none;
        letter-spacing: 0.3px;
        transition: border-color 0.18s, color 0.18s, transform 0.18s;
    }

    .btn-voltar-loja:hover {
        border-color: #1a1a1a;
        color: #1a1a1a;
        transform: translateY(-2px);
    }

    .btn-voltar-loja svg {
        width: 15px;
        height: 15px;
        stroke: currentColor;
        fill: none;
        stroke-width: 2.5;
        flex-shrink: 0;
    }

    /* ===== UTILITÁRIOS ===== */
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
            padding: 0 16px 32px;
        }

        #subtitle-fechamento-sucesso {
            padding: 24px 20px;
        }

        .flanela-led-box {
            padding: 20px 18px;
        }

        .data-grid {
            grid-template-columns: 1fr;
            width: 100%;
            overflow: hidden;
        }

        .data-card {
            max-width: 100%;
            overflow: hidden;
            word-break: break-word;
        }

        .data-card.full {
            grid-column: unset;
        }

        #payment-native-container {
            padding: 16px 12px;
        }

        .produto-details-grid {
            grid-template-columns: 1fr;
        }

        .data-card header,
        .infoClient.checkout-formbox.ready header {
            font-size: 1.35rem;
            padding: 14px 20px;
        }

        .confirmation-badge h3 {
            font-size: 24px;
        }
    }
</style>

<body>
    <!-- LOGO NO TOPO -->
    <div class="checkout-logo-topo">
        <a href="/">
            <img src="{{ path('logo-novo-preto.svg') }}" width="180" height="33" alt="Reisman">
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
            <h3>Pedido Realizado!</h3>
            <p>Acompanhe os detalhes abaixo</p>
        </div>

        <!-- MENSAGEM PRINCIPAL -->
        <div id="subtitle-fechamento-sucesso">
            <p>Estamos muito felizes em tê-lo como cliente Reisman.</p>
            <p>
                Assim que o pagamento for confirmado, daremos início à produção da sua joia.<br>
                Você receberá a confirmação diretamente em seu e-mail — confira também a caixa de spam.
            </p>
            <ul>
                <div id="msg-cartao" class="hide"
                    style="background:#f7f7f5;border-left:3px solid #c8a96e;padding:10px 14px;border-radius:0 8px 8px 0;font-size:0.92rem;color:#444;margin:16px 0;">
                    <strong>Cartão de crédito:</strong> fique atento ao seu celular nos proximos minutos, seu banco pode
                    te contatar no aplicativo ou via SMS para confirmar a sua autorização quanto esta compra.
                </div>

                <div id="msg-pix" class="hide"
                    style="background:#f7f7f5;border-left:3px solid #c8a96e;padding:10px 14px;border-radius:0 8px 8px 0;font-size:0.92rem;color:#444;margin:16px 0;">
                    <strong>PIX:</strong> o QR-Code foi gerado automaticamente abaixo. Basta efetuar o pagamento e a
                    confirmação é instantânea.
                </div>

                <div id="msg-boleto" class="hide"
                    style="background:#f7f7f5;border-left:3px solid #c8a96e;padding:10px 14px;border-radius:0 8px 8px 0;font-size:0.92rem;color:#444;margin:16px 0;">
                    <strong>Boleto:</strong> lembre-se de efetuar o pagamento até a data de vencimento.
                </div>
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
                            Preencha uma rápida pesquisa e garanta o seu brinde.
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

            <!-- CARD IDENTIFICACAO -->
            <div class="infoClient checkout-formbox ready">
                <header>Identificação</header>
                <div>
                    <strong>Nome:</strong>
                    <span id="dataName"></span>&nbsp;<span id="dataSobrenome"></span>
                </div>
                <div>
                    <strong>E-mail:</strong>
                    <span id="dataEmail"></span>
                </div>
            </div>

            <!-- CARD PEDIDO E PAGAMENTO -->
            <div class="data-card">
                <header>Pedido</header>
                <div class="data-row">
                    <strong>Número:</strong>
                    <span id="mockOrderNumber"></span>
                </div>
                <div class="data-row">
                    <strong>Status:</strong>
                    <span class="status-badge pending" id="status-badge-el">
                        <span class="dot"></span>
                        <span id="mockOrderStatus"></span>
                    </span>
                </div>
                <div class="data-row">
                    <strong>Pagamento:</strong>
                    <span id="mockPaymentMethod"></span>
                </div>
                <!-- Pagamento Nativo (Pix / Boleto) -->
                <div id="payment-native-container"></div>
            </div>

            <!-- CARD ENTREGA -->
            <div class="data-card">
                <header>Entrega</header>
                <div id="entrega-body-container"></div>
            </div>

            <!-- CARD PRODUTO -->
            <div class="data-card full hide" id="card-produtos">
                <header>Produtos</header>
                <div id="produtos-body-container"></div>
            </div>

            <!-- CARD TOTAIS -->
            <div class="data-card full hide" id="card-totais">
                <header>Resumo Financeiro</header>
                <div id="totais-body-container"></div>
            </div>

        </div>

        <!-- BOTÃO VOLTAR -->
        <div class="voltar-wrapper">
            <a href="/checkout-continue-shopping" class="btn-voltar-loja">
                <svg viewBox="0 0 24 24">
                    <polyline points="15 18 9 12 15 6" />
                </svg>
                Voltar para a loja
            </a>
        </div>

    </div>

    @checkoutBody()
    <script>
        window.___gcfg = {
            lang: 'pt-BR'
        };
    </script>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ canopus_js() }}"></script>
<script src="{{ script('gnu.js') }}"></script>

<script type="text/javascript">
    /* ============================================================
     OBSERVAÇÃO DO PEDIDO
  ============================================================ */
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
                    '<div class="title">Possui alguma observação do pedido?</div>' +
                    '<div class="content">' +
                    '<input type="text" name="observacao" class="form-control" placeholder="Digite aqui">' +
                    '<a href="javascript:;" id="btn-adicionar">Adicionar</a>' +
                    '</div>' +
                    '</div>';
                $('.canopus-cart-container .cart-table .canopus-cart-items').append(html);

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
                            })
                            .done(function() {
                                $.post('/checkout/cart/extra-fields', {
                                        slug: 'observacao',
                                        value: $observacao.val()
                                    })
                                    .done(function(data) {
                                        if (data) iziToast.success({
                                            title: 'Observação atualizada!',
                                            timeout: 3000
                                        });
                                        fieldSaved = true;
                                    });
                            });
                    } else {
                        $.post('/checkout/cart/extra-fields', {
                                slug: 'observacao',
                                value: $observacao.val()
                            })
                            .done(function(data) {
                                if (data) iziToast.success({
                                    title: 'Observação salva!',
                                    timeout: 3000
                                });
                                fieldSaved = true;
                            });
                    }
                });
            }
        }, 300);
    };

    /* ============================================================
       AGRUPA PRODUTOS
    ============================================================ */
    function buildProductsHTML(rows) {
        var compositionKeywords = [
            'diamante', 'diamantes', 'diamond',
            'aro ', 'tamanho',
            ' mm', 'milímetro', 'milimetro',
            'anatomico', 'anatômico',
            'meia volta',
            'pt ', ' pt', ' pts', 'pts',
            'largura', 'acabamento',
            'gravação', 'gravacao',
            'pedra', 'safira', 'rubi', 'esmeralda'
        ];

        function normalize(str) {
            return (str || '').toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '');
        }

        function escapeHtml(str) {
            return String(str || '')
                .replace(/&/g, '&amp;')
                .replace(/</g, '&lt;')
                .replace(/>/g, '&gt;')
                .replace(/"/g, '&quot;')
                .replace(/'/g, '&#39;');
        }

        function isComposition(name) {
            var lower = normalize(name);
            for (var i = 0; i < compositionKeywords.length; i++) {
                if (lower.indexOf(normalize(compositionKeywords[i])) !== -1) return true;
            }
            return false;
        }

        function isRingSize(name) {
            return /aro\s*tamanho/i.test(name || '');
        }

        function getReferenceLabel(label, index) {
            var lower = normalize(label);
            if (lower.indexOf('single') !== -1) return 'Single';
            if (lower.indexOf('masculina') !== -1) return 'Masculina';
            if (lower.indexOf('feminina') !== -1) return 'Feminina';
            if (lower.indexOf('alianca 1') !== -1) return 'Aliança 1';
            if (lower.indexOf('alianca 2') !== -1) return 'Aliança 2';
            if (label === 'Gravação' && index === 1) return 'Aliança 1';
            if (label === 'Gravação' && index === 2) return 'Aliança 2';
            return label || ('Item ' + index);
        }

        function getRingSizeNumber(name) {
            var match = String(name || '').match(/aro\s*tamanho\s*(\d+)/i);
            return match ? parseInt(match[1], 10) : null;
        }

        function extractText($root, selectors) {
            for (var i = 0; i < selectors.length; i++) {
                var text = $root.find(selectors[i]).first().text().trim();
                if (text) return text;
            }
            return '';
        }

        var items = [];
        rows.each(function() {
            var $row = $(this);
            var $img = $row.find('.canopus-cart-item-image img').first();
            var imgSrc = $img.attr('src') || '';
            var imgAlt = $img.attr('alt') || '';

            var name = $row.find('.canopus-cart-item-info h5 a').first().text().trim() ||
                $row.find('.canopus-cart-item-info h5').first().text().trim();
            if (!name) return;

            var gravacoes = [];
            var $extraFields = $row.find('completed-order-items-extra-fields');
            var $attributeFields = $row.find('completed-order-items-attributes-extra-fields');

            var gravSingle = extractText($extraFields, [
                'ul.gravacao_interna .extra-field-value',
                'ul.gravacao .extra-field-value'
            ]) || extractText($attributeFields, [
                'ul.gravacao_single .attributes-extra-field-value',
                'ul.gravacao_interna .attributes-extra-field-value',
                'ul.gravacao .attributes-extra-field-value'
            ]);
            if (gravSingle) gravacoes.push({
                label: 'Single',
                value: gravSingle
            });

            var gravMasc = extractText($extraFields, [
                'ul.gravacao_masculina .extra-field-value'
            ]) || extractText($attributeFields, [
                'ul.gravacao_masculina .attributes-extra-field-value'
            ]);
            if (gravMasc) gravacoes.push({
                label: 'Masculina',
                value: gravMasc
            });

            var gravFem = extractText($extraFields, [
                'ul.gravacao_feminina .extra-field-value'
            ]) || extractText($attributeFields, [
                'ul.gravacao_feminina .attributes-extra-field-value'
            ]);
            if (gravFem) gravacoes.push({
                label: 'Feminina',
                value: gravFem
            });

            var gravAlianca1 = extractText($extraFields, [
                'ul.gravacao_alianca_1 .extra-field-value'
            ]) || extractText($attributeFields, [
                'ul.gravacao_alianca_1 .attributes-extra-field-value'
            ]);
            if (gravAlianca1) gravacoes.push({
                label: 'Aliança 1',
                value: gravAlianca1
            });

            var gravAlianca2 = extractText($extraFields, [
                'ul.gravacao_alianca_2 .extra-field-value'
            ]) || extractText($attributeFields, [
                'ul.gravacao_alianca_2 .attributes-extra-field-value'
            ]);
            if (gravAlianca2) gravacoes.push({
                label: 'Aliança 2',
                value: gravAlianca2
            });

            items.push({
                name: name,
                imgSrc: imgSrc,
                imgAlt: imgAlt || name,
                isComposition: isComposition(name),
                gravacoes: gravacoes
            });
        });

        if (items.length === 0) return '';

        var groups = [];
        var currentGroup = null;

        items.forEach(function(item) {
            if (!item.isComposition) {
                currentGroup = {
                    mainName: item.name,
                    mainImg: item.imgSrc,
                    mainAlt: item.imgAlt,
                    gravacoes: item.gravacoes,
                    compositions: []
                };
                groups.push(currentGroup);
            } else {
                if (!currentGroup) {
                    currentGroup = {
                        mainName: item.name,
                        mainImg: item.imgSrc,
                        mainAlt: item.imgAlt,
                        gravacoes: item.gravacoes,
                        compositions: []
                    };
                    groups.push(currentGroup);
                } else {
                    currentGroup.compositions.push(item.name);
                    if (item.gravacoes && item.gravacoes.length > 0) {
                        currentGroup.gravacoes = currentGroup.gravacoes.concat(item.gravacoes);
                    }
                }
            }
        });

        var html = '';

        groups.forEach(function(group) {
            var ringSizes = [];
            var compositionTags = [];
            group.compositions.forEach(function(comp) {
                if (isRingSize(comp)) {
                    ringSizes.push(comp);
                } else {
                    compositionTags.push(comp);
                }
            });

            var detailRows = [];
            if (ringSizes.length > 0) {
                if (ringSizes.length === 1) {
                    detailRows.push({
                        label: 'Medida',
                        size: ringSizes[0],
                        engraving: ''
                    });
                } else {
                    var orderedRingSizes = ringSizes.slice();
                    var rowLabelA = 'Aliança 1';
                    var rowLabelB = 'Aliança 2';
                    var hasMasc = false;
                    var hasFem = false;

                    if (group.gravacoes && group.gravacoes.length > 0) {
                        group.gravacoes.forEach(function(grav) {
                            var gravLabel = normalize(grav.label);
                            if (gravLabel.indexOf('masculina') !== -1) hasMasc = true;
                            if (gravLabel.indexOf('feminina') !== -1) hasFem = true;
                        });
                    }

                    if (hasMasc && hasFem) {
                        rowLabelA = 'Masculina';
                        rowLabelB = 'Feminina';
                    }

                    detailRows.push({
                        label: rowLabelA,
                        size: orderedRingSizes[0],
                        engraving: ''
                    });
                    detailRows.push({
                        label: rowLabelB,
                        size: orderedRingSizes[1],
                        engraving: ''
                    });

                    if (hasMasc && hasFem) {
                        var numericA = getRingSizeNumber(orderedRingSizes[0]);
                        var numericB = getRingSizeNumber(orderedRingSizes[1]);
                        if (numericA !== null && numericB !== null) {
                            var femaleSize = numericA <= numericB ? orderedRingSizes[0] : orderedRingSizes[1];
                            var maleSize = numericA > numericB ? orderedRingSizes[0] : orderedRingSizes[1];
                            detailRows[0].size = maleSize;
                            detailRows[1].size = femaleSize;
                        }
                    }
                }
            }

            if (group.gravacoes && group.gravacoes.length > 0) {
                group.gravacoes.forEach(function(grav, index) {
                    var refLabel = getReferenceLabel(grav.label, index + 1);
                    if (refLabel === 'Single' && detailRows.length === 1) {
                        refLabel = detailRows[0].label;
                    }
                    var matched = null;

                    for (var i = 0; i < detailRows.length; i++) {
                        if (detailRows[i].label === refLabel) {
                            matched = detailRows[i];
                            break;
                        }
                    }

                    if (!matched) {
                        matched = {
                            label: refLabel,
                            size: detailRows.length === 0 && ringSizes[0] ? ringSizes[0] : '',
                            engraving: ''
                        };
                        detailRows.push(matched);
                    }

                    matched.engraving = grav.value;
                });
            }

            html += '<div class="produto-item">';
            html += '<div class="produto-main">';
            if (group.mainImg) {
                html +=
                    '<div class="produto-thumb">' +
                    '<img src="' + escapeHtml(group.mainImg) + '" alt="' + escapeHtml(group.mainAlt) +
                    '" onerror="this.style.display=\'none\'">' +
                    '</div>';
            }
            html +=
                '<div class="produto-main-info">' +
                '<p class="produto-nome">' + escapeHtml(group.mainName) + '</p>' +
                '</div>' +
                '</div>';

            if (detailRows.length > 0 || ringSizes.length > 0) {
                html += '<div class="produto-details-grid">';

                if (detailRows.length > 0) {
                    html += '<div class="produto-details-box">';
                    html += '<p class="produto-details-box-title">Medidas e gravações</p>';
                    detailRows.forEach(function(row) {
                        html += '<div class="produto-detail-row">';
                        html += '<span class="produto-detail-label">' + escapeHtml(row.label) +
                            '</span>';
                        html += '<span class="produto-detail-value">' + (row.size ? escapeHtml(row
                            .size) : 'Medida não informada') + '</span>';
                        html += '<span class="produto-detail-value">' + (row.engraving ? ('Gravação: ' +
                            escapeHtml(row.engraving)) : 'Sem gravação informada') + '</span>';
                        html += '</div>';
                    });
                    html += '</div>';
                }

                if (compositionTags.length > 0) {
                    html += '<div class="produto-details-box">';
                    html += '<p class="produto-details-box-title">Composição</p>';

                    if (compositionTags.length > 0) {
                        compositionTags.forEach(function(comp) {
                            html += '<div class="produto-detail-row">';
                            html += '<span class="produto-detail-label">Detalhe</span>';
                            html += '<span class="produto-detail-value">' + escapeHtml(comp) +
                            '</span>';
                            html += '</div>';
                        });
                    }

                    html += '</div>';
                }

                html += '</div>';
            }

            html += '</div>';
        });

        return html;
    }

    /* ============================================================
       PÁGINA COMPLETED
    ============================================================ */
    $(document).ready(function() {
        myFunc00();

        $('button#CopyQrCode').on('click', function() {
            $('.pagament.pix .ui.divQrCode').select();
            document.execCommand('Copy');
            $('.divQrCode').blur();
            $('#CopyQrCode').attr('data-tooltip', 'Copiado!');
        });

        /* --- Dados do cliente --- */
        var myInterval = setInterval(checkInfo, 1000);

        function myStopFunction() {
            clearInterval(myInterval);
        }

        function checkInfo() {
            // 1. Puxa os dados da sessão
            var fullNameCheck = sessionStorage.getItem('fullNameClientCheckout');
            var emailCheck = sessionStorage.getItem('emailClientCheckout');

            var $ident = $('.canopus-payment-identification, completed-customer-info');

            if ($ident.length > 0) {
                var FullNameClient = '';
                var EmailClient = '';

                // ==========================================
                // CAPTURA DO NOME (Via Data Scope ou Fallback)
                // ==========================================
                // Se a plataforma expor o JSON em uma variável global (ex: window.checkoutData), 
                // você pode forçar aqui: FullNameClient = window.checkoutData.full_name;

                try {
                    // Tenta acessar o escopo de dados do componente (ex: Vue.js ou objeto atrelado)
                    var domScope = $ident[0].__vue__ || (window.angular && angular.element($ident[0]).scope());

                    if (domScope && domScope.full_name) {
                        FullNameClient = domScope.full_name;
                    }
                } catch (e) {}

                // Fallback: se não achar o full_name no data scope, lê do DOM e concatena
                if (!FullNameClient) {
                    var NameClient = $ident.find('.name').first().text().trim();
                    var LastNameClient = $ident.find('.surname, .lastname, .last-name').first().text().trim();
                    if (NameClient) {
                        FullNameClient = NameClient + (LastNameClient ? ' ' + LastNameClient : '');
                    }
                }

                // ==========================================
                // CAPTURA DO E-MAIL (Mantida sua lógica)
                // ==========================================
                EmailClient = $ident.find('.email').first().text().trim();
                if (!EmailClient) {
                    $ident.find('span').each(function() {
                        var t = $(this).text().trim();
                        if (t.indexOf('@') > 0 && t.indexOf('.') > 0 && t.indexOf(' ') === -1) {
                            EmailClient = t;
                            return false;
                        }
                    });
                }

                // ==========================================
                // SALVA NA SESSÃO
                // ==========================================
                if (FullNameClient !== '') {
                    sessionStorage.setItem('fullNameClientCheckout', FullNameClient);
                    fullNameCheck = FullNameClient;
                }

                if (EmailClient !== '') {
                    sessionStorage.setItem('emailClientCheckout', EmailClient);
                    emailCheck = EmailClient;
                }
            }

            // ==========================================
            // EXIBE NA TELA
            // ==========================================
            if (fullNameCheck) {
                // Injeta o nome completo diretamente no span principal
                $('#dataName').text(fullNameCheck);
                // Limpa o span do sobrenome para não duplicar informação
                $('#dataSobrenome').text('');
            }

            if (emailCheck) {
                $('#dataEmail').text(emailCheck);
            }

            // ==========================================
            // ENCERRA O INTERVALO
            // ==========================================
            if (fullNameCheck && emailCheck) {
                setTimeout(myStopFunction, 2000);
            }
        }

        /* --- Completed --- */
        var intrCompleted = setInterval(function() {
            if (window.location.pathname !== '/checkout/completed') return;

            var $wrapper = $('completed-title p.mx-auto');
            if ($wrapper.length === 0) return;

            /* 1. Injeta e exibe */
            $wrapper.prepend($('#fechamento-sucesso'));
            $('#fechamento-sucesso').removeClass('hide');

            /* 2. Número do pedido */
            var orderId = $('completed-title .title-id').text().trim();
            if (orderId) $('#mockOrderNumber').text('#' + orderId);

            /* 3. Pagamento + status */
            var paymentText = $('completed-payment-method .col-12:first p').text().trim();
            var titleStatusText = $('completed-title .title').first().text().trim();
            var isPix = false;
            var isBoleto = false;
            var statusClass = 'pending';
            var statusText = 'Aguardando pagamento';

            if (paymentText) {
                var method = paymentText.replace(/forma de pagamento[:\s]*/i, '').trim();
                $('#mockPaymentMethod').text(method || paymentText);

                var ml = method.toLowerCase();
                var titleLower = (titleStatusText || '').toLowerCase();

                if (ml.indexOf('pix') !== -1) {
                    isPix = true;
                    statusText = 'Aguardando pagamento';
                    statusClass = 'pending';
                } else if (ml.indexOf('boleto') !== -1) {
                    isBoleto = true;
                    statusText = 'Aguardando pagamento';
                    statusClass = 'pending';
                } else if (/negad|reprov|recus/i.test(titleLower)) {
                    statusText = 'Pagamento negado';
                    statusClass = 'denied';
                } else if (/aprov|confirmad|approved/i.test(titleLower)) {
                    statusText = 'Pagamento aprovado';
                    statusClass = 'approved';
                } else {
                    statusText = 'Em análise';
                    statusClass = 'processing';
                }
            } else {
                $('#mockPaymentMethod').text('Pagamento não identificado');
            }

            $('#mockOrderStatus').text(statusText);
            $('#status-badge-el')
                .removeClass('pending confirmed approved processing denied')
                .addClass(statusClass);
            $('#msg-cartao, #msg-pix, #msg-boleto').addClass('hide');
            if (isPix) {
                $('#msg-pix').removeClass('hide');
            } else if (isBoleto) {
                $('#msg-boleto').removeClass('hide');
            } else {
                $('#msg-cartao').removeClass('hide');
            }

            /* 4. Conteúdo nativo do pagamento */
            $('#payment-native-container').empty();
            var $pixEl = $('completed-payment-method-pix');
            var $boletoEl = $('completed-payment-method-bank-slip');

            // Append elements independent of method if they exist (allows credit card native forms or instructions if any)
            if ($pixEl.length > 0 && isPix) {
                $('#payment-native-container').append($pixEl);
            } else if ($boletoEl.length > 0 && isBoleto) {
                $boletoEl.find('a.btn').slice(1).remove();
                $boletoEl.find('hr').remove();
                $('#payment-native-container').append($boletoEl);
            } else {
                // Cartao de credito ou outro que tenha instrução nativa
                var $otherMethod = $('completed-payment-method').children().not('.row').clone();
                if ($otherMethod.length > 0) {
                    $('#payment-native-container').append($otherMethod);
                }
            }

            /* 5. Produtos */
            var $cartRows = $('completed-order-items .cart-row');
            if ($cartRows.length > 0) {
                var prodHTML = buildProductsHTML($cartRows);
                if (prodHTML) {
                    $('#produtos-body-container').html(prodHTML);
                    $('#card-produtos').removeClass('hide');
                }
            }

            /* 6. Entrega */
            var $alert = $('completed-delivery-address .alert').first();
            if ($alert.length > 0) {
                var entregaHTML = '';

                var addrLines = [];
                $alert.find('p').first().contents().each(function() {
                    var t = $(this).text().trim();
                    if (t) addrLines.push(t);
                });
                var addrText = addrLines.join(', ').replace(/\s*,\s*/g, ', ').replace(/\s+/g, ' ')
                .trim();
                if (addrText) {
                    entregaHTML +=
                        '<div class="data-row col-dir">' +
                        '<strong>Endereço:</strong>' +
                        '<span>' + addrText + '</span>' +
                        '</div>';
                }

                var desc = $alert.find('.description').text().trim();
                var deadNum = $alert.find('.deadline').clone().find('.deadline-limit').text().trim();
                var deadBase = $alert.find('.deadline').clone().children().remove().end().text().trim();
                var prazo = (deadBase && deadNum) ? deadBase + ' a ' + deadNum + ' dias úteis' : '';

                if (desc) {
                    entregaHTML +=
                        '<div class="data-row col-dir">' +
                        '<strong>Forma de entrega:</strong>' +
                        '<span>' + desc +
                        (prazo ? ' <span style="color:#aaa;font-size:13px;">(' + prazo + ')</span>' :
                            '') +
                        '</span>' +
                        '</div>';
                }

                $('#entrega-body-container').html(entregaHTML);
            } else {
                $('#entrega-body-container').html(
                    '<div class="data-row"><span>Informações de entrega não disponíveis.</span></div>'
                    );
            }

            /* 7. Totais */
            var totaisHTML = '';

            var sub = $('completed-resume .canopus-cart-subtotal .value strong').text().trim();
            var disc = $('completed-resume .canopus-cart-discount .value strong').text().trim();
            var fret = $('completed-resume .canopus-cart-freight .value strong').text().trim();
            var tot = $('completed-resume .canopus-cart-total .value strong').text().trim();

            if (sub) totaisHTML +=
                '<div class="totais-row-custom"><span class="totais-label">Subtotal</span><span class="totais-valor">' +
                sub + '</span></div>';
            if (disc) totaisHTML +=
                '<div class="totais-row-custom"><span class="totais-label">Desconto</span><span class="totais-valor" style="color:#c0392b;">&minus;&nbsp;' +
                disc + '</span></div>';
            if (fret) totaisHTML +=
                '<div class="totais-row-custom"><span class="totais-label">Frete</span><span class="totais-valor">' +
                fret + '</span></div>';
            if (tot) totaisHTML +=
                '<div class="totais-row-custom total-final"><span class="totais-label">Total</span><span class="totais-valor">' +
                tot + '</span></div>';

            if (totaisHTML) {
                $('#totais-body-container').html(totaisHTML);
                $('#card-totais').removeClass('hide');
            }

            clearInterval(intrCompleted);

        }, 500);

    });
</script>

</html>
