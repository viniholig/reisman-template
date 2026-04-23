document.addEventListener("DOMContentLoaded", () => {
  console.log("Script Global carregado");

  const btnLoadMore = document.querySelector("#btn-carregar-mais");

  if (btnLoadMore) {
    btnLoadMore.addEventListener("click", function (e) {
      setInterval(() => {
        setupImageCardChange();
      }, 2000);
    });
  }

  // Inicializar todas as funcionalidades
  setupButtonShowDados();
  sendEmailNewsletter();
  setupImageCardChange();
  formatAllProductPrices();
  setupSearchToggle();
  setupFilterToggle();
  initItemFilters();
  setupScrollHeader();
  initCookieAlert();
  setupSecuritySealsSEO();

  setInterval(() => {
    const cartItemImages = document.querySelectorAll(
      ".checkout-cart-preview .canopus-cart-items ul li .canopus-cart-item-image",
    );

    if (cartItemImages.length > 0) {
      document
        .querySelector(".checkout-cart-preview #div-observacao")
        ?.classList.remove("hide");

      document
        .querySelector(
          ".frete-wrapper.modal-subtotal.modal-preview-bottom-item",
        )
        ?.classList.remove("hide");
    }

    let priceText = document.querySelector(
      ".modal-subtotal.modal-preview-bottom-item span.cart-subtotal",
    )?.textContent;

    let price = 0;

    if (priceText) {
      price = parseFloat(
        priceText
          .replace("R$", "")
          .replace(/\./g, "") // remove todos os pontos
          .replace(",", ".")
          .trim(),
      );
    }

    const formatter = new Intl.NumberFormat("pt-BR", {
      style: "currency",
      currency: "BRL",
    });

    // Exemplo de lógica comentada para desconto:
    /*
  if (price <= 2498) {
    document.querySelector('.modal-Desconto')?.classList.add('hide');
  }

  if (price >= 2499 && price <= 3999) {
    const descontoEl = document.querySelector('.modal-Desconto');
    descontoEl?.classList.remove('hide');
    document.querySelector('.modal-Desconto .price-Desconto').textContent = 'R$ 150,00';
    const novoPrice = price - 150;
    document.querySelector('.modal-subtotal-reis span.cart-subtotal').textContent = formatter.format(novoPrice);
  }
  // Adapte as condições conforme necessidade
  */

    // Função para atualizar elementos do localStorage
    function atualizarElementos() {
      const sufixos = [
        "primeiro",
        "segundo",
        "terceiro",
        "quarto",
        "quinto",
        "sexto",
        "sétimo",
        "oitavo",
        "nono",
        "décimo",
      ];

      function extractDataId(key) {
        let baseId = key.replace("arrayGravacoes-", "");
        for (let sufixo of sufixos) {
          if (baseId.endsWith("-" + sufixo)) {
            return baseId.slice(0, -sufixo.length - 1);
          }
        }
        return baseId;
      }

      for (let i = 0; i < localStorage.length; i++) {
        const key = localStorage.key(i);
        if (key.startsWith("arrayGravacoes-")) {
          const dataId = extractDataId(key);
          const container = document.querySelector(
            ".canopus-cart-item-extra-fields.arrayGravacoes-" + dataId,
          );

          if (container) {
            const storedArray = localStorage.getItem(key);
            const arrayGravacoes = storedArray ? JSON.parse(storedArray) : [];

            container.innerHTML = "";

            arrayGravacoes.forEach((item) => {
              const li = document.createElement("li");
              const slugDiv = document.createElement("div");
              const valueDiv = document.createElement("div");

              if (typeof item === "string") {
                const parts = item.split(": ");
                slugDiv.textContent = parts[0];
                valueDiv.textContent = parts[1];
                li.classList.add("generic-item");
              } else if (typeof item === "object" && item !== null) {
                if (item.slug === "gravacao_feminina") {
                  slugDiv.textContent = "Gravação aliança 2";
                  slugDiv.classList.add("gravacao_feminina");
                  li.classList.add("gravacao_feminina");
                } else if (item.slug === "gravacao_masculina") {
                  slugDiv.textContent = "Gravação aliança 1";
                  slugDiv.classList.add("gravacao_masculina");
                  li.classList.add("gravacao_masculina");
                } else if (item.slug === "gravacao_single") {
                  slugDiv.textContent = "Gravação interna";
                  slugDiv.classList.add("gravacao_interna");
                  li.classList.add("gravacao_interna");
                } else {
                  slugDiv.textContent = item.slug;
                  slugDiv.classList.add(item.slug);
                  li.classList.add(item.slug);
                }
                valueDiv.textContent = item.value;
              }

              li.appendChild(slugDiv);
              li.appendChild(valueDiv);
              container.appendChild(li);
            });
          }
        }
      }
    }

    atualizarElementos();
  }, 2000);
});

// === Função para botões de mostrar dados ===
function setupButtonShowDados() {
  document.querySelectorAll("button.btn-show-dados").forEach((botao) => {
    botao.addEventListener("click", function () {
      const pai = botao.closest(".horario-shop, .phones-shop");
      if (pai) {
        pai.classList.toggle("active");
      }
    });
  });
}

// === Newsletter ===
function sendEmailNewsletter() {
  const form = document.querySelector(".footer-submit-wrapper form");
  const button = form.querySelector(
    "footer .footer-menu .form-newsletter .footer-submit-wrapper button.btn.btn-primary.shadow-none.ls-10",
  );
  const emailInput = form.querySelector(
    "input.form-control.mb-0.email-newsletter",
  );

  button.addEventListener("click", function (e) {
    e.preventDefault();
    const email = emailInput.value.trim();

    if (email === "") {
      iziToast.error({ message: "Preencha o seu melhor e-mail" });
      return;
    }

    StoreNewsletterEmail.store(email);
  });

  CanopusEventCenter.addListener("NewsletterEmail.Submitting", function () {
    button.setAttribute("disabled", "disabled");
    emailInput.setAttribute("disabled", "disabled");

    iziToast.show({ message: "Cadastrando seu e-mail..." });
  });

  CanopusEventCenter.addListener("NewsletterEmail.Stored", function () {
    button.removeAttribute("disabled");
    emailInput.removeAttribute("disabled");
    emailInput.value = "";
  });
}

// === Troca de imagem, link, nome e preço nos cards ===
function setupImageCardChange() {
  const receiveImgs = document.querySelectorAll(
    ".receiveImgs > .outlineColorImage",
  );

  receiveImgs.forEach((img) => {
    img.addEventListener("click", function () {
      // Alterar classe ativa
      img.parentElement
        .querySelectorAll(".outlineColorImage")
        .forEach((sibling) => sibling.classList.remove("active", "nameItem"));
      img.classList.add("active", "nameItem");

      // Alterar imagem, link, nome e preço
      const productBlock = img.closest(".product-block");
      productBlock.querySelector(".img-card img.principal").src =
        img.getAttribute("data-link");
      productBlock.querySelector("a").href = img.getAttribute("data-url");
      productBlock.querySelector(
        ".preco-produto-spot-price  .price-main .value",
      ).textContent = img.getAttribute("data-price-vista");
      productBlock.querySelector(
        ".preco-produto-spot-price .price-installment .parcelament ",
      ).textContent = img.getAttribute("data-price-parcelament");
      // Pegar a cor do elemento ativo
      // Pegar a cor do elemento ativo
      const activeItem = productBlock.querySelector(
        ".outlineColorImage.active",
      );
      const colorName = activeItem ? activeItem.textContent.trim() : ""; // Assumindo que o texto da cor está dentro do elemento
      productBlock.querySelector(".name-color-product span").textContent =
        colorName;

      formatAllProductPrices();
    });
  });
}

// === Formata preços com spans ===
function formatAllProductPrices() {
  document
    .querySelectorAll(".product-block .description .preco-produto-spot")
    .forEach((element) => {
      let text = element.textContent.trim().replace("à vista", "no pix");
      const match = text.match(/^(.*?ou\s)(.*)$/);

      if (match) {
        const firstPart = match[1].replace("ou", "").trim();
        const secondPart = match[2]
          .trim()
          .replace("R$", "")
          .replace("no pix", "");
        element.innerHTML = `<span class="first">${firstPart}</span> <span class="last">${secondPart}</span>`;
      }
    });
}

// === Lógica de toggle do campo de busca ===
function setupSearchToggle() {
  document.addEventListener("click", (event) => {
    const searchItem = event.target.closest("header .aside-box .item.search");
    const searchClose = event.target.closest(
      ".header-search.actived button.close-seach",
    );

    if (searchItem) {
      searchItem.classList.toggle("actived");
      document.querySelector(".header-search").classList.toggle("actived");

      setTimeout(() => {
        const input = document.querySelector(".header-search .form-control");
        if (input) input.focus();
      }, 500);
    }

    if (searchClose) {
      document.querySelector(".header-search").classList.remove("actived");
    }
  });
}

// === Header flutuante no scroll ===
function setupScrollHeader() {
  window.addEventListener("scroll", toggleHeaderOnScroll);
}

function toggleHeaderOnScroll() {
  const header = document.querySelector("header");

  if (window.scrollY > 0) {
    header.classList.add("header-flutuante");
    header.classList.add("header-flutuante-fixed");
    setTimeout(() => {
      header.classList.remove("header-flutuante-fixed");
    }, 1000);
  } else {
    header.classList.remove("header-flutuante");
  }
}

// === Funções de filtro ===
function urlParam(name) {
  const results = new RegExp("[\\?&]" + name + "=([^&#]*)").exec(
    window.location.href,
  );
  if (results == null) {
    return null;
  }
  return decodeURI(results[1]) || 0;
}

// Função para adicionar event listeners aos filtros
function initItemFilters() {
  const itemFiltros = document.querySelectorAll(".item-filtro");

  itemFiltros.forEach((item) => {
    // Event listener para clique nos filtros
    item.addEventListener("click", function () {
      const addurl =
        "?" + this.getAttribute("filtro") + "=" + this.getAttribute("item");

      const loadingFilter = document.querySelector(".loading_filter");
      if (loadingFilter) {
        loadingFilter.classList.toggle("active");
      }

      window.location.href = addurl;
    });

    // Configurar atributos e verificar se está filtrando
    item.setAttribute("item", item.getAttribute("item"));

    const tafiltrando = urlParam(item.getAttribute("filtro"));
    const nomeitem = item.getAttribute("item");

    if (tafiltrando) {
      const taFiltrandoFormatted = tafiltrando.replace(/ /g, "%20");

      if (taFiltrandoFormatted === nomeitem) {
        item.classList.add("checked");
      }
    }

    // Formatar preços
    const nomefiltro = item.getAttribute("value");
    if (nomefiltro) {
      const precomin = nomefiltro.match(/^[0-9]*/)[0];
      const precomax = nomefiltro.match(/[0-9]*$/)[0];

      item.innerHTML = `<span class="price">R$ ${precomin}</span> <span> ━ </span> <span class="price">R$ ${precomax}</span>`;
    }
  });

  document.querySelectorAll(".div-filtros").forEach(function (el) {
    // Adiciona a classe "primeiro" ao primeiro .item-filtro
    const first = el.querySelector(".item-filtro");
    if (first) {
      first.classList.add("primeiro");
    }

    // Adiciona a classe "ultimo" ao último .item-filtro.faixa-Acima
    const last = Array.from(
      el.querySelectorAll(".item-filtro.faixa-Acima"),
    ).pop();
    if (last) {
      last.classList.add("ultimo");
    }
  });
}

// === Toggle do filtro de categoria ===
function setupFilterToggle() {
  const btnFilterFaixa = document.querySelector(
    ".filter-categoria h3.collapse-filtro",
  );

  if (btnFilterFaixa) {
    btnFilterFaixa.addEventListener("click", function () {
      const filterItem = document.querySelector(
        ".filter-categoria .filtros-faixa-preco",
      );

      if (filterItem) {
        // Alternar a classe 'actived' no filterItem
        filterItem.classList.toggle("actived");
        // Alternar a classe 'actived-btn' no botão
        btnFilterFaixa.classList.toggle("actived-btn");
      }
    });
  }
}

// === Cookie Alert ===
function initCookieAlert() {
  var cookieAlert = document.querySelector(".cookiealert");
  var acceptCookies = document.querySelector(".acceptcookies");

  if (!cookieAlert) {
    return;
  }

  cookieAlert.offsetHeight; // Force browser to trigger reflow (https://stackoverflow.com/a/39451131)

  // Show the alert if we cant find the "acceptCookies" cookie
  if (!getCookie("acceptCookies")) {
    cookieAlert.classList.add("show");
  }

  // When clicking on the agree button, create a 1 year
  // cookie to remember user's choice and close the banner
  acceptCookies.addEventListener("click", function () {
    setCookie("acceptCookies", true, 365);
    cookieAlert.classList.remove("show");

    // dispatch the accept event
    window.dispatchEvent(new Event("cookieAlertAccept"));
  });
}

// === Funções utilitárias para cookies ===
function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
  var expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(";");
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) === " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) === 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

// === Ajuste de SEO e Acessibilidade para Selos de Segurança ===
function setupSecuritySealsSEO() {
  // Seleciona os selos comuns ou pelas URLs de suas imagens
  const selos = document.querySelectorAll('.selos-seguranca img, .security-badges img, footer img[src*="gia" i], footer img[src*="segura" i], footer img[src*="ssl" i]');
  
  selos.forEach(img => {
    // Dedução do nome baseando-se no arquivo da imagem
    let nomeSelo = "Selo de Segurança Reisman";
    if (img.src.toLowerCase().includes('gia')) nomeSelo = "Certificado GIA";
    if (img.src.toLowerCase().includes('segura') || img.src.toLowerCase().includes('compra')) nomeSelo = "Site Seguro - Compra Garantida";
    if (img.src.toLowerCase().includes('ssl')) nomeSelo = "Certificado SSL de Segurança";

    if (!img.hasAttribute('alt') || img.getAttribute('alt').trim() === "") {
      img.setAttribute('alt', nomeSelo);
    }
    if (!img.hasAttribute('title') || img.getAttribute('title').trim() === "") {
      img.setAttribute('title', nomeSelo);
    }
  });
}
