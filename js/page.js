document.addEventListener("DOMContentLoaded", () => {
  // Inicializando o Slinky com atraso
  // setTimeout(() => {
  //   const slinky = $('#navMenuMobile').slinky();
  // }, 1000);

  // Função para mudar a imagem, link, nome e preço ao clicar na cor do produto

  // Toggle de busca no header
  // document.addEventListener("click", (event) => {
  //   const searchItem = event.target.closest("header .aside-box .item.search");
  //   if (searchItem) {
  //     searchItem.classList.toggle("active");
  //     document.querySelector('.header-search').classList.toggle("active");
  //   }
  // });

  function toggleSearchBox() {
    const openSearchBox = document.querySelector(
      "header .aside-box .item.search",
    );
    const closeSearchBox = document.querySelector(
      ".header-search button.close-seach",
    );

    openSearchBox.addEventListener("click", () => {
      document.querySelector(".header-search").classList.add("active");
      const searchInput = document.querySelector(
        ".header-search .header-search-wrapper .form-control",
      );
      searchInput.focus();
    });
    closeSearchBox.addEventListener("click", () => {
      document.querySelector(".header-search").classList.remove("active");
    });
  }
  toggleSearchBox();

  // Controle do menu mobile

  const btnCarregarMais = document.getElementById("btn-carregar-mais");
  if (btnCarregarMais) {
    btnCarregarMais.addEventListener("click", () => {
      setInterval(changeImgCard, 2000);
    });
  }

  // Função para adicionar/remover 'header-flutuante' ao fazer scroll
  function toggleHeaderOnScroll() {
    const header = document.querySelector("header.header");
    header.classList.toggle("header-flutuante", window.scrollY > 0);
  }

  window.addEventListener("scroll", toggleHeaderOnScroll);
});
