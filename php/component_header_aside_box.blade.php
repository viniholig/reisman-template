  <div class="aside-box">
      <div class="item search">

          <label class="search-div">
              <img alt=" Icon Lupa de Pesquisa" src="{{ path('lupa-header-icon.png') }}">
          </label>

      </div>
      <div class="item login">
          <a href="javascript:;" canopus-open-identification-modal="">
              <img alt="Ícone do usuário" src="{{ path('user-header-icon.png') }}">
          </a>
          <div class="menu-client" style="display: none">
              <span class="name-use"></span>
              <a href="/account/orders">

                  <span>Meus Pedidos</span>
              </a>
              <a href="javascript:;" class=" bt-logout logado" canopus-logout style="display: none;">
                  (Sair)
              </a>
          </div>
      </div>
      <div class="item bag" canopus-checkout-cart-open-preview>
          <img alt="Ícone do carrinho" src="{{ path('sacola-header-icon.png') }}">
      </div>
      <div class="menu-mobile">
          <button class="btn-mobile" id="menu-toggle">
              <img alt="Ícone do menu mobile" src="{{ path('iconmenufav.png') }}">
          </button>
      </div>
  </div>
