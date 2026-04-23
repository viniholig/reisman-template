CanopusEventCenter.addListener("ServerDataLoader.Loaded", function (data) {
  if (typeof data.client !== undefined) {
    var estaLogado = data.client !== null;
    if (estaLogado) {
      $("#dataName").html(data.client.name1);
    }
  }
  console.log(data);
});
CanopusEventCenter.addListener("ServerDataLoader.Loaded", function (data) {
  if (typeof data.client !== undefined) {
    var estaLogado = data.client !== null;
    if (estaLogado) {
      $("#dataName").html(data.client.name1);
    }
  }
  console.log(data);
});

$(document).ready(() => {
  $("header .item.search").on("click", (event) => {
    setTimeout(() => {
      $("input.form-control.input-search").focus();
    }, 500);
    console.log("esta chamando o js do nome");
  });
  setInterval(() => {
    if (
      $(
        ".checkout-cart-preview .canopus-cart-items ul li .canopus-cart-item-image",
      ).length > 0
    ) {
      $(".checkout-cart-preview #div-observacao").removeClass("hide");
      $(".frete-wrapper.modal-subtotal.modal-preview-bottom-item").removeClass(
        "hide",
      );
    }
    price = parseFloat(
      $(".modal-subtotal.modal-preview-bottom-item span.cart-subtotal")
        .text()
        .replace("R$", "")
        .replace(".", "")
        .replace(",", ".")
        .trim(),
    );
    const formatter = new Intl.NumberFormat("pt-BR", {
      style: "currency",
      currency: "BRL",
    });

    //     if(price <= 2498){
    //     $('.modal-Desconto ').addClass('hide')
    // }

    // if(price >= 2700 ){
    //     $('.modal-Desconto ').removeClass('hide')
    //     $('.modal-Desconto .price-Desconto').text('R$ 150,00')
    //     novoPrice = price - 150
    //     $('.modal-subtotal-reis span.cart-subtotal').text(formatter.format(novoPrice))
    // }
    // if(price <= 2498){
    //     $('.modal-Desconto ').addClass('hide')
    // }

    // if(price >= 2499 && price <= 3999){
    //     $('.modal-Desconto ').removeClass('hide')
    //     $('.modal-Desconto .price-Desconto').text('R$ 150,00')
    //     novoPrice = price - 150
    //     $('.modal-subtotal-reis span.cart-subtotal').text(formatter.format(novoPrice))
    // }
    // if(price > 4000 && price <= 5999){
    //     $('.modal-Desconto ').removeClass('hide')
    //     $('.modal-Desconto .price-Desconto').text('R$ 150,00')
    //     novoPrice = price - 150
    //     $('.modal-subtotal-reis span.cart-subtotal').text(formatter.format(novoPrice))
    // }
    // if(price > 6000 ){
    //     $('.modal-Desconto ').removeClass('hide')
    //     $('.modal-Desconto .price-Desconto').text('R$ 150,00')
    //     novoPrice = price - 150
    //     $('.modal-subtotal-reis span.cart-subtotal').text(formatter.format(novoPrice))

    // }
    // function atualizarElementos() {
    //     // Percorrer todas as chaves no localStorage
    //     for (var i = 0; i < localStorage.length; i++) {
    //         var key = localStorage.key(i);

    //         // Verificar se a chave começa com 'arrayGravacoes-'
    //         if (key.startsWith('arrayGravacoes-')) {
    //             // Recuperar o nome exato do data-id da chave
    //             var dataId = key.replace('arrayGravacoes-', '');

    //             // Encontrar o contêiner correspondente com base no data-id
    //             var container = document.querySelector('.canopus-cart-item-extra-fields.arrayGravacoes-' + dataId);

    //             // Verificar se o contêiner foi encontrado
    //             if (container) {
    //                 // Recuperar o array da local storage
    //                 var storedArray = localStorage.getItem(key);
    //                 var arrayGravacoes = storedArray ? JSON.parse(storedArray) : [];

    //                 // Limpar o conteúdo existente no contêiner
    //                 container.innerHTML = '';

    //                 // Iterar sobre o array e criar itens de lista
    //                 arrayGravacoes.forEach(function(item) {
    //                     var li = document.createElement('li');

    //                     var slugDiv = document.createElement('div');
    //                     var valueDiv = document.createElement('div');

    //                     // Substituir os slugs conforme necessário
    //                     if (item.slug === 'gravacao_feminina') {
    //                         slugDiv.textContent = 'Gravação aliança 2';
    //                         slugDiv.classList.add('gravacao_feminina');
    //                     } else if (item.slug === 'gravacao_masculina') {
    //                         slugDiv.textContent = 'Gravação aliança 1';
    //                         slugDiv.classList.add('gravacao_masculina');
    //                     } else if (item.slug === 'gravacao_single') {
    //                         slugDiv.textContent = 'Gravação interna';
    //                         slugDiv.classList.add('gravacao_interna');
    //                     } else {
    //                         slugDiv.textContent = item.slug;
    //                         slugDiv.classList.add(item.slug);
    //                     }

    //                     valueDiv.textContent = item.value;

    //                     li.appendChild(slugDiv);
    //                     li.appendChild(valueDiv);

    //                     container.appendChild(li);
    //                 });
    //             }
    //         }
    //     }
    // }
    // atualizarElementos()

    //     function atualizarElementos() {
    //     // Percorrer todas as chaves no localStorage
    //     for (var i = 0; i < localStorage.length; i++) {
    //         var key = localStorage.key(i);

    //         // Verificar se a chave começa com 'arrayGravacoes-'
    //         if (key.startsWith('arrayGravacoes-')) {
    //             // Recuperar o nome exato do data-id da chave
    //             var dataId = key.replace('arrayGravacoes-', '');

    //             // Encontrar o contêiner correspondente com base no data-id
    //             var container = document.querySelector('.canopus-cart-item-extra-fields.arrayGravacoes-' + dataId);

    //             // Verificar se o contêiner foi encontrado
    //             if (container) {
    //                 // Recuperar o array da local storage
    //                 var storedArray = localStorage.getItem(key);
    //                 var arrayGravacoes = storedArray ? JSON.parse(storedArray) : [];

    //                 // Limpar o conteúdo existente no contêiner
    //                 container.innerHTML = '';

    //                 // Iterar sobre o array e criar itens de lista
    //                 arrayGravacoes.forEach(function(item) {
    //                     var li = document.createElement('li');

    //                     var slugDiv = document.createElement('div');
    //                     var valueDiv = document.createElement('div');

    //                     if (typeof item === 'string') {
    //                         // Para strings, divida em chave e valor
    //                         var parts = item.split(': ');
    //                         slugDiv.textContent = parts[0];
    //                         valueDiv.textContent = parts[1];
    //                     } else if (typeof item === 'object' && item !== null) {
    //                         // Para objetos, lidar com os slugs conforme necessário
    //                         if (item.slug === 'gravacao_feminina') {
    //                             slugDiv.textContent = 'Gravação aliança 2';
    //                             slugDiv.classList.add('gravacao_feminina');
    //                         } else if (item.slug === 'gravacao_masculina') {
    //                             slugDiv.textContent = 'Gravação aliança 1';
    //                             slugDiv.classList.add('gravacao_masculina');
    //                         } else if (item.slug === 'gravacao_single') {
    //                             slugDiv.textContent = 'Gravação interna';
    //                             slugDiv.classList.add('gravacao_interna');
    //                         } else {
    //                             slugDiv.textContent = item.slug;
    //                             slugDiv.classList.add(item.slug);
    //                         }
    //                         valueDiv.textContent = item.value;
    //                     }

    //                     li.appendChild(slugDiv);
    //                     li.appendChild(valueDiv);

    //                     container.appendChild(li);
    //                 });
    //             }
    //         }
    //     }
    // }
    // atualizarElementos()

    // function atualizarElementos() {
    //     // Percorrer todas as chaves no localStorage
    //     for (var i = 0; i < localStorage.length; i++) {
    //         var key = localStorage.key(i);

    //         // Verificar se a chave começa com 'arrayGravacoes-'
    //         if (key.startsWith('arrayGravacoes-')) {
    //             // Recuperar o nome exato do data-id da chave
    //             var dataId = key.replace('arrayGravacoes-', '');

    //             // Encontrar o contêiner correspondente com base no data-id
    //             var container = document.querySelector('.canopus-cart-item-extra-fields.arrayGravacoes-' + dataId);

    //             // Verificar se o contêiner foi encontrado
    //             if (container) {
    //                 // Recuperar o array da local storage
    //                 var storedArray = localStorage.getItem(key);
    //                 var arrayGravacoes = storedArray ? JSON.parse(storedArray) : [];

    //                 // Limpar o conteúdo existente no contêiner
    //                 container.innerHTML = '';

    //                 // Iterar sobre o array e criar itens de lista
    //                 arrayGravacoes.forEach(function(item) {
    //                     var li = document.createElement('li');

    //                     var slugDiv = document.createElement('div');
    //                     var valueDiv = document.createElement('div');

    //                     if (typeof item === 'string') {
    //                         // Para strings, divida em chave e valor
    //                         var parts = item.split(': ');
    //                         slugDiv.textContent = parts[0];
    //                         valueDiv.textContent = parts[1];
    //                         li.classList.add('generic-item');
    //                     } else if (typeof item === 'object' && item !== null) {
    //                         // Para objetos, lidar com os slugs conforme necessário
    //                         if (item.slug === 'gravacao_feminina') {
    //                             slugDiv.textContent = 'Gravação aliança 2';
    //                             slugDiv.classList.add('gravacao_feminina');
    //                             li.classList.add('gravacao_feminina');
    //                         } else if (item.slug === 'gravacao_masculina') {
    //                             slugDiv.textContent = 'Gravação aliança 1';
    //                             slugDiv.classList.add('gravacao_masculina');
    //                             li.classList.add('gravacao_masculina');
    //                         } else if (item.slug === 'gravacao_single') {
    //                             slugDiv.textContent = 'Gravação interna';
    //                             slugDiv.classList.add('gravacao_interna');
    //                             li.classList.add('gravacao_interna');
    //                         } else {
    //                             slugDiv.textContent = item.slug;
    //                             slugDiv.classList.add(item.slug);
    //                             li.classList.add(item.slug);
    //                         }
    //                         valueDiv.textContent = item.value;
    //                     }

    //                     li.appendChild(slugDiv);
    //                     li.appendChild(valueDiv);

    //                     container.appendChild(li);
    //                 });
    //             }
    //         }
    //     }
    // }

    // function atualizarElementos() {
    //     // Array de sufixos
    //     var sufixos = ['primeiro', 'segundo', 'terceiro', 'quarto', 'quinto', 'sexto', 'sétimo', 'oitavo', 'nono', 'décimo'];

    //     // Função para extrair o dataId da chave
    //     function extractDataId(key) {
    //         var baseId = key.replace('arrayGravacoes-', '');
    //         for (var i = 0; i < sufixos.length; i++) {
    //             if (baseId.endsWith('-' + sufixos[i])) {
    //                 return baseId.slice(0, -sufixos[i].length - 1);
    //             }
    //         }
    //         return baseId;
    //     }

    //     // Percorrer todas as chaves no localStorage
    //     for (var i = 0; i < localStorage.length; i++) {
    //         var key = localStorage.key(i);

    //         // Verificar se a chave começa com 'arrayGravacoes-'
    //         if (key.startsWith('arrayGravacoes-')) {
    //             // Recuperar o nome exato do data-id da chave
    //             var dataId = extractDataId(key);

    //             // Encontrar o contêiner correspondente com base no data-id
    //             var container = document.querySelector('.canopus-cart-item-extra-fields.arrayGravacoes-' + dataId);

    //             // Verificar se o contêiner foi encontrado
    //             if (container) {
    //                 // Recuperar o array da local storage
    //                 var storedArray = localStorage.getItem(key);
    //                 var arrayGravacoes = storedArray ? JSON.parse(storedArray) : [];

    //                 // Limpar o conteúdo existente no contêiner
    //                 container.innerHTML = '';

    //                 // Iterar sobre o array e criar itens de lista
    //                 arrayGravacoes.forEach(function(item) {
    //                     var li = document.createElement('li');

    //                     var slugDiv = document.createElement('div');
    //                     var valueDiv = document.createElement('div');

    //                     if (typeof item === 'string') {
    //                         // Para strings, divida em chave e valor
    //                         var parts = item.split(': ');
    //                         slugDiv.textContent = parts[0];
    //                         valueDiv.textContent = parts[1];
    //                         li.classList.add('generic-item');
    //                     } else if (typeof item === 'object' && item !== null) {
    //                         // Para objetos, lidar com os slugs conforme necessário
    //                         if (item.slug === 'gravacao_feminina') {
    //                             slugDiv.textContent = 'Gravação aliança 2';
    //                             slugDiv.classList.add('gravacao_feminina');
    //                             li.classList.add('gravacao_feminina');
    //                         } else if (item.slug === 'gravacao_masculina') {
    //                             slugDiv.textContent = 'Gravação aliança 1';
    //                             slugDiv.classList.add('gravacao_masculina');
    //                             li.classList.add('gravacao_masculina');
    //                         } else if (item.slug === 'gravacao_single') {
    //                             slugDiv.textContent = 'Gravação interna';
    //                             slugDiv.classList.add('gravacao_interna');
    //                             li.classList.add('gravacao_interna');
    //                         } else {
    //                             slugDiv.textContent = item.slug;
    //                             slugDiv.classList.add(item.slug);
    //                             li.classList.add(item.slug);
    //                         }
    //                         valueDiv.textContent = item.value;
    //                     }

    //                     li.appendChild(slugDiv);
    //                     li.appendChild(valueDiv);

    //                     container.appendChild(li);
    //                 });
    //             }
    //         }
    //     }
    // }

    // atualizarElementos()

    function atualizarElementos() {
      // Percorrer todas as chaves no localStorage
      for (var i = 0; i < localStorage.length; i++) {
        var key = localStorage.key(i);

        // Verificar se a chave começa com 'arrayGravacoes-'
        if (key.startsWith("arrayGravacoes-")) {
          // Recuperar o nome exato do data-id da chave
          var dataId = key.replace("arrayGravacoes-", "");

          // Encontrar o contêiner correspondente com base no data-id
          var container = document.querySelector(
            ".canopus-cart-item-extra-fields.arrayGravacoes-" + dataId,
          );

          // Verificar se o contêiner foi encontrado
          if (container) {
            // Recuperar o array da local storage
            var storedArray = localStorage.getItem(key);
            var arrayGravacoes = storedArray ? JSON.parse(storedArray) : [];

            // Limpar o conteúdo existente no contêiner
            container.innerHTML = "";

            // Iterar sobre o array e criar itens de lista
            arrayGravacoes.forEach(function (item) {
              var li = document.createElement("li");
              var slugDiv = document.createElement("div");
              var valueDiv = document.createElement("div");

              if (typeof item === "string") {
                // Para strings, divida em chave e valor
                var parts = item.split(": ");
                slugDiv.textContent = parts[0];
                valueDiv.textContent = parts[1];
                li.classList.add("generic-item");
              } else if (typeof item === "object" && item !== null) {
                // Para objetos, lidar com os slugs conforme necessário
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

    // Chamar a função para atualizar os elementos
    atualizarElementos();

    function adicionarClassesIncrementais() {
      // Array de sufixos
      var sufixos = [
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

      // Objeto para rastrear a contagem de cada data-id base
      var idCount = {};

      // Selecionar todos os elementos que possuem classes começando com 'arrayGravacoes-'
      var elementos = document.querySelectorAll('[class*="arrayGravacoes-"]');

      elementos.forEach(function (elemento) {
        // Encontrar a classe que começa com 'arrayGravacoes-'
        var classList = Array.from(elemento.classList);
        var baseClass = classList.find((cls) =>
          cls.startsWith("arrayGravacoes-"),
        );
        if (baseClass) {
          var baseId = baseClass.replace("arrayGravacoes-", "");

          // Inicializar ou incrementar a contagem para este baseId
          if (!idCount[baseId]) {
            idCount[baseId] = 0;
          }
          var count = idCount[baseId];

          // Adicionar a classe incremental apenas se não for o primeiro
          if (count > 0 && count <= sufixos.length) {
            elemento.classList.add(
              "arrayGravacoes-" + baseId + "-" + sufixos[count - 1],
            );
          }

          idCount[baseId]++;
        }
      });
    }

    // Chamar a função para adicionar classes incrementais
    adicionarClassesIncrementais();
  }, 1000);

  $(document).on("click", "#btn-clear-cart", function () {
    for (let i = 0; i < localStorage.length; i++) {
      let key = localStorage.key(i);
      if (key.startsWith("arrayGravacoes")) {
        localStorage.removeItem(key);
        // Após remover o item, diminua o índice para não pular a próxima chave
        i--;
      }
    }
    console.log(
      'Local storage items starting with "arrayGravacoes" have been cleared.',
    );
  });

  $(document).on(
    "click",
    "header .desktop .aside-box .item.search",
    function () {
      $(this).toggleClass("active");
      $("header.header").toggleClass("active");
      $(".searchForm").toggleClass("active");
    },
  );
  $(document).on("click", "a#btn-adicionarCart", function () {
    setTimeout(() => {
      pedido = $("input#input-gravacao-pedido").val();
      iziToast.success({
        title: "Observação salva!",
        timeout: 3000,
      });

      $.post("/checkout/cart/properties", {
        extra_fields: [{ slug: "observacao", value: pedido }],
      });
    }, 1000);
  });

  //       $('.clientsSlider').slick({
  //     dots: false,
  //     arrows: true,
  //      prevArrow: '<a class="slick-prev"><i><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.4082 20C15.33 20 15.2525 19.9832 15.1806 19.9506C15.1087 19.918 15.0438 19.8703 14.9898 19.8105L8.2947 12.7445C8.20132 12.6466 8.1272 12.5301 8.07662 12.4018C8.02604 12.2735 8 12.1358 8 11.9968C8 11.8578 8.02604 11.7202 8.07662 11.5918C8.1272 11.4635 8.20132 11.3471 8.2947 11.2492L14.9898 4.1832C15.0447 4.12512 15.11 4.07905 15.1818 4.04761C15.2536 4.01618 15.3305 4 15.4082 4C15.4859 4 15.5629 4.01618 15.6347 4.04761C15.7065 4.07905 15.7717 4.12512 15.8267 4.1832C15.8816 4.24128 15.9252 4.31023 15.955 4.38612C15.9847 4.46201 16 4.54334 16 4.62548C16 4.70762 15.9847 4.78895 15.955 4.86484C15.9252 4.94073 15.8816 5.00968 15.8267 5.06776L9.28103 11.9968L15.8267 18.9259C15.9023 19.015 15.9524 19.1249 15.9711 19.2429C15.9899 19.3609 15.9766 19.4821 15.9328 19.5924C15.889 19.7027 15.8164 19.7976 15.7235 19.866C15.6307 19.9345 15.5213 19.9736 15.4082 19.9789V20Z" fill="currentColor"></path></svg></i></a>',
  //           nextArrow: '<a class="slick-next"><i><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.59175 20C8.47866 19.9947 8.36933 19.9555 8.27647 19.8871C8.18361 19.8187 8.11104 19.7238 8.06721 19.6135C8.02338 19.5031 8.01008 19.3819 8.02886 19.2639C8.04765 19.146 8.09774 19.036 8.17332 18.9469L14.7188 12.0179L8.17332 5.06776C8.06235 4.95046 8 4.79137 8 4.62548C8 4.45959 8.06235 4.3005 8.17332 4.1832C8.28429 4.0659 8.43481 4 8.59175 4C8.74869 4 8.89921 4.0659 9.01018 4.1832L15.7051 11.2492C15.7985 11.3471 15.8726 11.4635 15.9231 11.5918C15.9737 11.7202 15.9998 11.8578 15.9998 11.9968C15.9998 12.1358 15.9737 12.2735 15.9231 12.4018C15.8726 12.5301 15.7985 12.6466 15.7051 12.7445L9.01018 19.8105C8.95621 19.8703 8.8913 19.918 8.81937 19.9506C8.74744 19.9832 8.67 20 8.59175 20Z" fill="currentColor"></path></svg></i></a>',
  //     infinite: false,
  //     speed: 300,
  //     slidesToShow: 3,
  //     slidesToScroll: 1,
  //       responsive: [
  //     {
  //       breakpoint: 767,
  //       settings: {
  //         dots: true,
  //         arrows: false,
  //         slidesToShow: 1,
  //         slidesToScroll: 1
  //       }
  //     }
  //   ]
  //   });
  //       $('.slider-completedLookNew').slick({
  //       dots: false,
  //       arrows: true,
  //       prevArrow: '<a class="slick-prev"><i><svg width="14" height="8" viewBox="0 0 14 8" xmlns="http://www.w3.org/2000/svg"><path d="M1.177 7.53L.47 6.823 6.823.47l6.354 6.353-.707.707-5.647-5.646z" fill="#000" fill-rule="nonzero"></path></svg></i></a>',
  //       nextArrow: '<a class="slick-next"><i><svg width="14" height="8" viewBox="0 0 14 8" xmlns="http://www.w3.org/2000/svg"><path d="M1.177 7.53L.47 6.823 6.823.47l6.354 6.353-.707.707-5.647-5.646z" fill="#000" fill-rule="nonzero"></path></svg></i></a>',
  //       infinite: false,
  //       speed: 300,
  //       slidesToShow: 3,
  //       slidesToScroll: 1,
  //         responsive: [
  //     {
  //       breakpoint: 767,
  //       settings: {
  //         dots: true,
  //         arrows: false,
  //         slidesToShow: 2,
  //         slidesToScroll: 1
  //       }
  //     }
  //   ]
  //     })
  // $('.productionGrouping').slick({
  //   dots: false,
  //   arrows: false,
  //   infinite: false,
  //   speed: 300,
  //   slidesToShow: 3,
  //   slidesToScroll: 1,
  //   responsive: [
  //     {
  //       breakpoint: 767,
  //       settings: {
  //         slidesToShow: 2,
  //         slidesToScroll: 1
  //       }
  //     }
  //   ]
  //     });
  if ($("#linkWebstorie").length) {
    $("#linkWebstorie").slick({
      dots: false,
      arrows: false,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
      ],
    });
  }

  $(document).on("click", ".description", function () {
    $(this).toggleClass("active");
    $(".content").toggleClass("active");
  });
  $(window).scroll(function () {
    if ($(this).scrollTop() > 1) {
      $("header.header").addClass("fixed");
      $(".searchForm").addClass("fixed");
    } else {
      $("header.header").removeClass("fixed");
      $(".searchForm").removeClass("fixed");
    }
  });
});

// function changeImgCard() {

//     $('.receiveImgs>div').on('click', function(){

//         // change active
//         $(this).parent().find('> div').removeClass('active');
//         $(this).addClass('active')

//         // change img
//         let selectedColor = $(this).attr('data-link');
//         $(this).parent().prev().find('img').attr('src', selectedColor)

//         // change link
//         let selectedColorUrl = $(this).attr('data-url');
//         $(this).parent().prev().attr('href', selectedColorUrl);
//         $(this).parent().next().attr('href', selectedColorUrl);

//         // change name
//         let selectedNameItem = $(this).attr('data-name');
//         $(this).parent().parent().find('.nome-produto-spot').text(selectedNameItem)

//         // change price
//         let selectedPriceItem = $(this).attr('data-price');
//         $(this).parent().parent().find('.valorbase').text(selectedPriceItem)

//     })

// }

// changeImgCard()

// function changeImgCardAjuste() {
//     // Lógica para mudar a imagem do card

//     // Chama a função novamente após 3 segundos
//     // setTimeout(changeImgCard, 3000);
//     console.log('chamou o ajuste v3')
// }
