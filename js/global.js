document.addEventListener("DOMContentLoaded", () => {
  console.log("Script Main carregado");

  setTimeout(() => {
    const slinky = $("#navMenuMobile").slinky();
  }, 1000);

  document.querySelectorAll("button.btn-show-dados").forEach((botao) => {
    botao.addEventListener("click", function () {
      const pai = botao.closest(".horario-shop, .phones-shop");
      if (pai) {
        pai.classList.toggle("active");
      }
    });
  });

  sendEmailNewsletter();
  setupImageCardChange();
  formatAllProductPrices();
  setupSearchToggle();
});

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
      productBlock.querySelector(".img-card img").src =
        img.getAttribute("data-link");
      productBlock.querySelector("a").href = img.getAttribute("data-url");
      // productBlock.querySelector('.preco-produto-spot1').textContent = img.getAttribute('data-price');
      productBlock.querySelector(
        ".preco-produto-spot-price  .price-main .value",
      ).textContent = img.getAttribute("data-price-vista");
      productBlock.querySelector(
        ".preco-produto-spot-price .price-installment",
      ).textContent = img.getAttribute("data-price-parcelament");
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
document.addEventListener("DOMContentLoaded", () => {
  window.addEventListener("scroll", toggleHeaderOnScroll);
});
