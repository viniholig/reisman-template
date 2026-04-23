// === Carrossel de Clientes ===
function initClientsCarousel() {
  new Swiper(".carrousel-clients", {
    spaceBetween: 10,
    preloadImages: false,
    loop: false,
    slidesPerView: 1.2,
    autoplay: {
      delay: 5000,
    },
    lazy: {
      loadPrevNext: false,
    },
    pagination: {
      el: ".carrousel-clients .swiper-pagination",
      type: "bullets",
      clickable: true,
    },
    navigation: {
      nextEl: ".carrousel-clients .swiper-button-next",
      prevEl: ".carrousel-clients .swiper-button-prev",
    },
    simulateTouch: true,
    touchRatio: 1,
    touchAngle: 45,
  });
}

// === Carrossel de Produtos ===
function initProductsCarousel() {
  document.querySelectorAll(".carrousel-products").forEach((section) => {
    const carousel = section.querySelector(".swiper");
    const pagination = section.querySelector(".swiper-pagination");
    const next = section.querySelector(".swiper-button-next");
    const prev = section.querySelector(".swiper-button-prev");

    if (carousel) {
      new Swiper(carousel, {
        slidesPerView: 2,
        spaceBetween: 6,
        watchOverflow: true,
        speed: 1000,
        preloadImages: false,
        lazy: {
          checkInView: true,
          loadPrevNext: true,
          loadOnTransitionStart: true,
          loadPrevNextAmount: 1,
        },
        breakpoints: {
          0: { slidesPerView: 1.3, spaceBetween: 7 },
          767: { slidesPerView: 1.3, spaceBetween: 7 },
          768: { slidesPerView: 2, spaceBetween: 7 },
          992: { slidesPerView: 4, spaceBetween: 7 },
          1300: { slidesPerView: 4, spaceBetween: 7, allowTouchMove: false },
          1920: { slidesPerView: 5, spaceBetween: 7 },
        },
        pagination: {
          el: pagination,
          type: "bullets",
          clickable: true,
        },
        navigation: {
          nextEl: next,
          prevEl: prev,
        },
      });
    }
  });
}

function initModalSliders() {
  document.querySelectorAll(".modal").forEach((modal) => {
    const mainSlider = new Swiper(modal.querySelector(".main-slider"), {
      loop: true,
      spaceBetween: 10,
    });

    // Mudar a imagem principal ao clicar na miniatura
    const thumbnails = modal.querySelectorAll(".grid-imagens");
    thumbnails.forEach((thumbnail) => {
      thumbnail.addEventListener("click", () => {
        const index = thumbnail
          .querySelector(".image")
          .getAttribute("data-index");
        mainSlider.slideToLoop(parseInt(index)); // com loop, é melhor usar slideToLoop
      });
    });
  });
}

document.addEventListener("DOMContentLoaded", () => {
  console.log("Script da home carregado");

  window.addEventListener("scroll", toggleHeaderOnScroll);

  initClientsCarousel();
  initProductsCarousel();
  initModalSliders();

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
