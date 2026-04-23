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

document.addEventListener("DOMContentLoaded", () => {
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

  initItemFilters();
});
