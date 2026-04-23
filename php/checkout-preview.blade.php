<div class="canopus-cart-container d-flex justify-content-between flex-column">
    <div class="canopus-cart-modal-top">
        <div class="canopus-cart-modal-title d-flex justify-content-start">
            <span class="title">Meu carrinho</span>
        </div>
        @include(engine_view('checkout-preview-items'))
    </div>
    <div class="canopus-cart-modal-bottom">
        <div class="col-12 text-right hide div-clear-cart" id="div-observacao">
            <button id="btn-clear-cart" class="btn btn-block">Limpar carrinho</button>
        </div>
        <div id="div-observacao" class="">
            <div class="title">Nota no pedido?</div>
            <div class="content">
                <input id="input-gravacao-pedido" type="text" name="observacao" class="form-control"
                    placeholder="Digite aqui caso tenha alguma observação ">
                <a id="btn-adicionarCart">Adicionar</a>
            </div>
        </div>
        @include(engine_view('checkout-preview-freight-options'))

        <div class="modal-subtotal  modal-preview-bottom-item d-flex justify-content-between align-items-center">
            <em>Subtotal</em>
            <span class="cart-subtotal">
                R$ {{ number_format($cartPreview->subtotal, 2, ',', '.') }}
            </span>
        </div>
        <!--<div class="modal-Desconto hide modal-preview-bottom-item d-flex justify-content-between align-items-center">-->
        <!--    <em>Desconto Dia dos Namorados</em>-->
        <!--    <span class="price-Desconto"></span>-->
        <!--</div>-->
        <!--<div class="modal-subtotal-reis  modal-preview-bottom-item d-flex justify-content-between align-items-center">-->
        <!--    <em>Valor final</em>-->
        <!--    <span class="cart-subtotal">-->
        <!--        R$ {{ number_format($cartPreview->subtotal, 2, ',', '.') }}-->
        <!--    </span>-->
        <!--</div>-->

        <div class="canopus-cart-resume">
            <a href="/checkout/payment" class="canopus-cart-goto-checkout">
                <span>Finalizar Compra</span>
            </a>
        </div>

    </div>
</div>
<style>
    .div-clear-cart {
        padding-left: 0 !important;
        padding-right: 0 !important;
        padding: 0 !important;
    }

    button#btn-clear-cart {
        !important;
        background: transparent !important;
        color: #000 !important;
        text-align: right;
        padding-right: 20px;
    }

    .checkout-cart-preview .tingle-modal-box .canopus-cart-modal-top {
        overflow: auto !important;
    }

    .checkout-cart-preview .quantity.col-4.pl-0 {
        display: flex;
        align-items: center;
    }

    .canopus-cart-item-extra-fields.item-personalizacao li.gravacao_masculina div:last-child::before,
    .canopus-cart-item-extra-fields.item-personalizacao li.gravacao_feminina div:last-child::before,
    .canopus-cart-item-extra-fields.item-personalizacao li.gravacao_interna div:last-child::before {
        content: '-';
        margin-right: 5px;
    }

    .canopus-cart-item-extra-fields.item-personalizacao li.gravacao_feminina {
        order: 10;
    }

    .canopus-cart-item-extra-fields.item-personalizacao li.gravacao_masculina {
        order: 9;
    }

    .canopus-cart-item-extra-fields.item-personalizacao li.gravacao_interna {
        order: 11;
    }

    .checkout-cart-preview .canopus-cart-item-extra-fields li div:last-child {
        padding-left: 5px;
        /*font-weight: 300;*/
        /*color: #707070;*/
    }

    .canopus-cart-item-extra-fields.item-personalizacao li {
        display: flex;
        font-size: 14px;
    }

    .canopus-cart-item-extra-fields li {
        list-style: none;
    }

    .canopus-cart-item-extra-fields li:first-child {
        order: 2;
    }

    .canopus-cart-item-extra-fields {
        display: flex;
        flex-direction: column;
        font-weight: 300;
    }

    input.quantity-modal-input {
        width: 38px;
        height: 44px;
        border: 0;
        border-radius: 3px;
        text-align: center;
        color: #333;
    }

    .btn-more-qtd-modal .fas,
    .btn-less-qtd-modal .fas {
        margin: 0 auto;
        font-size: 10px;
    }

    .remove-item {
        border: 0px;
        color: #A6A6A6;
        background: transparent;
        position: absolute;
        top: 10px;
        left: 90%;
        font-size: 20px;
        cursor: pointer;
    }

    .canopus-cart-modal-title {
        padding: 20px 40px 20px 20px;
    }

    .canopus-cart-modal-title span.title {
        font-size: 30px;
        font-weight: lighter;
        color: #000000;
    }

    .canopus-cart-modal-title .carrinho-qtd-content {
        padding-bottom: 9px;
        margin-left: 6px;
        font-size: 16px;
        color: #8C8C8C;
    }

    .canopus-cart-modal-title .carrinho-qtd-content em {
        font-style: normal;
    }

    .btn-more-qtd-modal,
    .btn-less-qtd-modal {
        background: #FFFFFF;
        border: 0px;
        color: #595959;
        width: 25px;
        height: 25px;
        line-height: 1pt;
        padding: 0px;
        cursor: pointer;
    }

    .canopus-cart-item-quantity .price p {
        display: inline-block;
        color: #262626;
        font-size: 20px;
        margin: 1rem 0;
        font-weight: 500;
    }

    .canopus-cart-item-quantity .action .btn-remove-item {
        margin: 1.3rem 0;
    }

    .modal-preview-bottom-item {
        background-color: #F2F2F2;
        padding: 20px 40px 20px 20px;
        border-bottom: 1px solid #D9D9D9;
    }

    .modal-preview-bottom-item em {
        font-size: 16px;
        font-style: normal;
    }

    .modal-preview-bottom-item span {
        font-weight: 500;
    }

    .modal-preview-bottom-item span.cart-subtotal {
        font-size: 21px;
    }

    input#input-cep-freight-options {
        color: black !important;
        height: auto;
        width: 100%;
        border: 0px;
        padding: 8px;
        font-size: 14px;
        margin-left: 0px;
    }

    button#btn-load-freight-options {
        background: none !important;
        border: none !important;
        color: #00A3D9;
        cursor: pointer;
    }

    .container-frete-preview li {
        list-style: none;
        color: #262626;
        font-size: 14px;
        background: #FFFFFF;
        width: 100%;
        padding: 10px;
        display: block;
        margin: 0 auto;
        margin-top: 15px;
        position: relative;
    }

    .container-frete-preview li .fa {
        margin-right: .5rem
    }

    .container-frete-preview ul {
        padding: 0;
        padding-left: 0px;
    }

    .checkout-cart-preview .canopus-cart-goto-checkout>span {
        width: 100%;
        display: inline-block;
        background: #7f7f7f;
        color: white;
        text-align: center;
        font-weight: 500;
        padding: 15px;
        font-size: 19px;
        text-transform: uppercase
    }

    .checkout-cart-preview {
        overflow: hidden;
        max-height: 100%
    }

    .checkout-cart-preview .canopus-cart-container {
        height: 100%;
        margin: 0 !important;
    }

    .checkout-cart-preview .tingle-modal-box__content {
        max-height: 100%
    }

    span.tingle-modal__closeIcon.btn:active {
        box-shadow: none !important
    }

    .canopus-cart-modal-top {
        height: 90vh !important;
        overflow: auto;
    }

    button.tingle-modal__close.btn {
        position: relative;
        color: #00A3D9 !important;
        right: 0px !important;
        margin: 0px !important;
        padding: 0px !important;
        left: 0px !important;
        display: block;
        width: 100%;
        top: 0px;
        background: #FF8600;
        border-radius: 0;
        text-align: center;
        float: left;
    }

    span.tingle-modal__closeIcon.btn {
        color: white !important;
        font-family: 'Montserrat', sans-serif;
        width: 100%;
        display: inline-block;
        font-weight: 500;
        font-size: 15px;
        text-transform: uppercase
    }

    .checkout-cart-preview .canopus-cart-items {
        background: #FFFFFF;
        overflow-y: auto;
        margin-bottom: -1px;
        margin-top: 0px;
        overflow: hidden;
    }

    @media screen and (max-width: 600px) {
        .tingle-modal.checkout-cart-preview .tingle-modal-box {
            right: 0 !important;
        }
    }

    .tingle-modal-box .canopus-cart-modal-top {
        overflow: auto;
    }

    .checkout-cart-preview .canopus-cart-items ul li .canopus-cart-item-info,
    .checkout-cart-preview .canopus-cart-items ul li .canopus-cart-item-image {
        display: inline-block
    }

    .checkout-cart-preview .canopus-cart-items ul li .canopus-cart-item-info h4 {
        display: inline-block;
        font-weight: 100;
        width: 100%;
        font-size: 18px !important;
        color: #000000;
    }

    .checkout-cart-preview .canopus-cart-items ul li .canopus-cart-item-info p {
        display: inline-block;
        font-size: 18px;
    }

    .checkout-cart-preview .canopus-cart-title h3 {
        display: inline-block;
        width: 100%;
        text-align: center;
        font-size: 25px;
        margin-top: 25px
    }

    .checkout-cart-preview .canopus-cart-title h3 .qtd-cart {}

    .checkout-cart-preview .canopus-cart-title .canopus-cart-close {
        position: absolute;
        top: 0;
        right: 0
    }

    .checkout-cart-preview .canopus-cart-resume .canopus-cart-total {
        display: inline-block;
        width: 100%;
        text-align: center;
        font-size: 18px;
        padding: 15px 0
    }

    .checkout-cart-preview .tingle-modal-box__content {
        width: 100%;
        background: white;
        height: 100vh;
        position: absolute;
        right: 0;
        overflow-x: hidden
    }

    .checkout-cart-preview .canopus-cart-resume {
        width: 100%;
        position: relative;
        bottom: 0;
        margin: 0;
    }

    .checkout-cart-preview .canopus-cart-title>h3>span {
        color: #C62100 !important;
        text-transform: uppercase;
        margin-top: 10px !important;
        padding-top: 10px !important;
        font-weight: 600;
        font-size: 19px
    }

    /*.tingle-modal.checkout-cart-preview .tingle-modal__close {
    width: 50px !important;
    height: 50px !important;
    position: absolute;
    top: 0;
    right: 0;
    z-index: 1000;
    padding: 0;
    border: none;
    background-color: transparent;
    color: #f0f0f0;
    font-size: 6rem;
    font-family: monospace;
    line-height: 1;
    cursor: pointer;
    transition: color .3s ease;
  }*/

    .tingle-modal.checkout-cart-preview span.tingle-modal__closeIcon {
        color: #000 !important;
    }

    span.canopus-cart-item-qtd {
        color: #b3b3b3;
        font-weight: 600;
        margin-left: 10px
    }

    .checkout-cart-preview .canopus-cart-item-info h4 {
        font-size: 15px !important
    }

    .checkout-cart-preview .canopus-cart-item-info p {
        font-size: 16px !important;
        color: #00A3D9;
        margin-bottom: 0
    }

    .checkout-cart-preview .canopus-cart-item-image {
        position: relative;
        text-align: center;
        width: 20%;
        float: left;
    }

    .checkout-cart-preview .canopus-cart-item-image img {
        max-width: 100%;
        text-align: center
    }

    .checkout-cart-preview .canopus-cart-item-qtd {
        position: relative;
        bottom: 0;
        right: 0;
        font-size: 13px;
        text-align: center;
    }

    .tingle-modal.checkout-cart-preview .tingle-modal-box {
        width: 560px !important
    }

    @media (max-width: 991px) {
        .tingle-modal.checkout-cart-preview .tingle-modal-box {
            width: 75% !important
        }
    }

    @media (max-width: 576px) {
        .tingle-modal.checkout-cart-preview .tingle-modal-box {
            width: 100% !important
        }
    }

    @media screen and (max-width: 600px) {
        span.tingle-modal__closeIcon {
            right: unset;
        }

        .tingle-modal__close {
            left: unset !important;
        }
    }

    .container-frete-preview ul li span {
        margin-left: 3px;
    }
</style>



<script>
    // Selecione todos os botões "Remover" com a classe específica
    var removeButtons = document.querySelectorAll('.btn-remove-item');

    // Adicione um ouvinte de evento a cada botão
    removeButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            // Recupere o valor do atributo data-personalizacao
            var personalizacao = button.getAttribute('data-personalizacao');

            // Remova a entrada correspondente do localStorage
            localStorage.removeItem(personalizacao);

            // Atualize a interface do usuário, se necessário
            // Por exemplo, você pode querer remover o item do DOM aqui

            // Pare a propagação do evento para evitar que outros ouvintes sejam acionados
            event.stopPropagation();
        });
    });
</script>
