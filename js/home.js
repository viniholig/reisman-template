document.addEventListener("DOMContentLoaded", () => {
  //   setTimeout(()=> {
  //           const slinky = $('#navMenuMobile').slinky()

  //   },1000)

  function changeImgCard() {
    document
      .querySelectorAll(".receiveImgs > .outlineColorImage")
      .forEach((image) => {
        image.addEventListener("click", function () {
          // Mudar a classe ativa
          this.parentElement
            .querySelectorAll(".active")
            .forEach((sibling) => sibling.classList.remove("active"));
          this.classList.add("active");

          // Mudar a imagem
          let selectedColor = this.getAttribute("data-link");
          let productBlock = this.closest(".product-block");
          if (productBlock) {
            productBlock.querySelector(".img-card .principal").src =
              selectedColor;
            let selectedSecond = this.getAttribute("data-imagens-second");
            productBlock.querySelector(".img-card .second-img").src =
              selectedSecond;

            // Mudar o link
            let selectedColorUrl = this.getAttribute("data-url");
            productBlock
              .querySelector("a")
              .setAttribute("href", selectedColorUrl);

            // Mudar o preço
            let selectedPriceItem = this.getAttribute("data-price");
            productBlock.querySelector(".preco-produto-spot").textContent =
              selectedPriceItem;

            let selectedNameItem = this.getAttribute("data-nameColor");
            productBlock.querySelector(".name-color-product span").textContent =
              selectedNameItem;

            // Verificar se o elemento clicado tem a classe 'main-image'
            if (this.classList.contains("main-image")) {
              productBlock.classList.add("custom-css"); // Adiciona o CSS ao .product
            } else {
              productBlock.classList.remove("custom-css"); // Remove o CSS do .product
            }
          }

          newPriceCard();
        });
      });
  }

  changeImgCard();

  function newPriceCard() {
    document
      .querySelectorAll(".product-block .description .preco-produto-spot")
      .forEach(function (element) {
        // Pegue o conteúdo do elemento
        let text = element.textContent.trim();

        // Substitui "à vista" por "no pix"
        text = text.replace("à vista", "no pix");

        // Expressão regular para capturar os dois valores de preço antes e depois do "ou"
        let match = text.match(/^(.*?ou\s)(.*)$/);

        if (match) {
          // Captura os valores antes e depois de "ou"
          let firstPart = match[1].replace("ou", "").trim(); // Remove "ou" e espaçamento
          let secondPart = match[2].trim(); // Remove o espaço extra antes de "no pix"

          // Define o novo conteúdo com spans
          let newText = `<span class="first">${firstPart}</span> <span class="last">${secondPart}</span>`;

          // Substitui o conteúdo do elemento pelo novo texto
          element.innerHTML = newText;
        }
      });
  }

  document.addEventListener("click", function (event) {
    const searchItem = event.target.closest("header .aside-box .item.search");

    if (searchItem) {
      searchItem.classList.toggle("actived");
      document.querySelector(".header-search").classList.toggle("actived");
    }
    setTimeout(function () {
      document
        .querySelector(".header-search .header-search-wrapper .form-control")
        .focus();
    }, 500);
  });

  document.addEventListener("click", function (event) {
    const searchItemClose = event.target.closest(
      ".header-search.actived button.close-seach",
    );

    if (searchItemClose) {
      searchItemClose.classList.toggle("actived");
      document.querySelector(".header-search").classList.toggle("actived");
    }
  });

  document.getElementById("btn-mobile").addEventListener("click", function () {
    document.querySelector(".menu-mobile.nav-mobile").classList.add("active");
  });

  document
    .querySelector(".logo-menu button.close-icon.ta-header-menu-close")
    .addEventListener("click", function () {
      document
        .querySelector(".menu-mobile.nav-mobile")
        .classList.remove("active");
    });

  function toggleHeaderOnScroll() {
    const header = document.querySelector("header.header");

    if (window.scrollY > 0) {
      header.classList.add("header-flutuante");
    } else {
      header.classList.remove("header-flutuante");
    }
  }

  window.addEventListener("scroll", toggleHeaderOnScroll);

  const clientsCarrousel = new Swiper(".carrousel-clients", {
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

  //   const brandsCarrousel = new Swiper('.mini-banners-carrousel', {
  //     spaceBetween: 7,
  //     preloadImages: false,
  //     loop: false,
  //     lazy: {
  //       loadPrevNext: false,
  //     },
  //     breakpoints: {
  //       0: { slidesPerView: 1.3 },
  //       767: { slidesPerView: 3 },
  //       992: { slidesPerView: 3.5 },
  //       1200: { slidesPerView: 4.3 },
  //     },
  //     pagination: {
  //       el: '.grid_brands .swiper-pagination',
  //       type: 'bullets',
  //       clickable: true,
  //     },
  //     navigation: {
  //       nextEl: '.mini-banners-home .vitrine-nav .arrow-next',
  //       prevEl: '.mini-banners-home .vitrine-nav .arrow-prev',
  //     },
  //     simulateTouch: true,
  //     touchRatio: 1,
  //     touchAngle: 45,
  //   });

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

  newPriceCard();
});
