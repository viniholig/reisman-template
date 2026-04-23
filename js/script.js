AOS.init();

CanopusEventCenter.addListener("ServerDataLoader.Loaded", function (data) {
  if (typeof data.client !== undefined) {
    //console.log(data.client)
    var estaLogado = data.client !== null;
    if (estaLogado) {
      $(".nao-logado").hide();
      $(".logado").show();
    } else {
      $(".logado").hide();
      $(".nao-logado").show();
    }
  }

  const linksVenobox = document.querySelector(".my-image-links");

  if (linksVenobox) {
    new VenoBox({
      selector: ".my-image-links",
      numeration: true,
      infinigall: true,
      share: true,
      spinner: "rotating-plane",
    });
  }

  /*if (typeof data.cart !== undefined) {
//    console.log(data.cart.content[0].type)
        $('.qnt-itens').html(data.cart.quantity)
  }*/
});

var link = $("a");
var url = window.location.pathname;
link.each(function () {
  if ($(this).attr("href") === url) {
    $(this).addClass("active");
  }
});

var $sideNav = $("#sidenav");
var $btnNav = $("#btn-toggle-sidenav");
var $btnStickyNav = $("#btn-sticky-toggle-sidenav");
var $btnCloseNav = $("#btn-close-sidenav");

$btnNav.on("click", openSidenav);
$btnStickyNav.on("click", openSidenav);

$btnCloseNav.on("click", closeSidenav);

$sideNav.find("a").each(function () {
  $(this).on("click", closeSidenav);
});

function openSidenav() {
  $sideNav.addClass("open");
  $("body").addClass("overflow-hidden");
}

function closeSidenav() {
  $sideNav.removeClass("open");
  $("body").removeClass("overflow-hidden");
}

$(".slider-home").slick({
  dots: true,
  arrows: true,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});
$(".slider-completedLook").slick({
  dots: false,
  arrows: true,
  infinite: false,
  speed: 300,
  prevArrow:
    '<a class="slick-prev slick-arrow"><i><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 128 128" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g transform="matrix(3.061616997868383e-16,1,-1,3.061616997868383e-16,127.99969673156738,0.00007057189938564079)"><path xmlns="http://www.w3.org/2000/svg" id="Down_Arrow_3_" d="m64 88c-1.023 0-2.047-.391-2.828-1.172l-40-40c-1.563-1.563-1.563-4.094 0-5.656s4.094-1.563 5.656 0l37.172 37.172 37.172-37.172c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656l-40 40c-.781.781-1.805 1.172-2.828 1.172z" fill="#8e8e8e" data-original="#000000" class=""></path></g></svg><i></a>',
  nextArrow:
    '<a class="slick-next slick-arrow"><i><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 128 128" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g transform="matrix(-1.8369701987210297e-16,-1,1,-1.8369701987210297e-16,-0.00007057189937853536,127.99969673156738)"><path xmlns="http://www.w3.org/2000/svg" id="Down_Arrow_3_" d="m64 88c-1.023 0-2.047-.391-2.828-1.172l-40-40c-1.563-1.563-1.563-4.094 0-5.656s4.094-1.563 5.656 0l37.172 37.172 37.172-37.172c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656l-40 40c-.781.781-1.805 1.172-2.828 1.172z" fill="#8e8e8e" data-original="#000000" class=""></path></g></svg><i></a>',
  slidesToShow: 3,
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

$(".slider-produtos-relacionados").slick({
  dots: true,
  arrows: true,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
  ],
});

$(".slider-blog").slick({
  dots: false,
  arrows: false,
  infinite: true,
  autoplay: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

$(".galleryImg.mobile").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  dots: true,
  fade: true,
});

// $('.slider-produto-principal .galleryImg').slick({
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   arrows: false,
//   dots: false,
//   fade: true,
//   asNavFor: '.slider-produto-mini',
//   responsive: [
//     {
//       breakpoint: 1024,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1
//       }
//     },
//     {
//       breakpoint: 600,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         dots: true
//       }
//     },
//     {
//       breakpoint: 480,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         dots: true
//       }
//     }
//   ]
// });
$(".slider-produto-mini").slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  vertical: true,
  asNavFor: ".slider-produto-principal",
  dots: false,
  arrows: false,
  centerMode: false,
  focusOnSelect: true,
});

$(".slider-depoimentos").slick({
  dots: false,
  arrows: false,
  infinite: true,
  speed: 300,
  autoplay: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

if (window.outerWidth < 600) {
  $("#comentarios-avaliacoes").slick({
    dots: true,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
  });
}

$(".slick-prev").each(function () {
  $(this).html("");
  var img = $(document.createElement("img"));
  img.attr(
    "src",
    "https://assets.betalabs.net/production/reisman/images/stores/1/arrow-left.png",
  );
  $(this).append(img);
});

$(".slick-next").each(function () {
  $(this).html("");
  var img = $(document.createElement("img"));
  img.attr(
    "src",
    "https://assets.betalabs.net/production/reisman/images/stores/1/arrow-right.png",
  );
  $(this).append(img);
});

var alturatopo;

if (window.outerWidth < 901) {
  alturatopo = 98.08;
} else {
  alturatopo = 89.08;
}

function rodarScriptAddCarrinho(nvezescarregou) {
  $(".coluna-spot-category").each(function () {
    if (!$(this).hasClass("carregou")) {
      $(this).addClass("carregou carregou-" + nvezescarregou);
    }
  });

  if (nvezescarregou > 0) {
    $(".coluna-spot-category#carregou").attr("id", "");
    $(".coluna-spot-category.carregou-" + nvezescarregou)
      .first()
      .attr("id", "carregou");
    $("html,body")
      .unbind()
      .animate({ scrollTop: $("#carregou").offset().top - alturatopo });
  }
}

var qtdasvezescarregou = 0;

var btncarregarmais = $("#btn-carregar-mais");

if (btncarregarmais.length > 0) {
  btncarregarmais.on("click", function () {
    setTimeout(function () {
      var interval = setInterval(function () {
        if ($("span.loader").length == 0) {
          qtdasvezescarregou++;
          rodarScriptAddCarrinho(qtdasvezescarregou);
          console.log(qtdasvezescarregou);
          btncarregarmais.html("Carregar mais");
          clearInterval(interval);

          $(".receiveImgs>div").on("click", function () {
            // change active
            $(this).parent().find("> div").removeClass("active");
            $(this).addClass("active");

            // change img
            let selectedColor = $(this).attr("data-link");
            $(this).parent().prev().find("img").attr("src", selectedColor);

            // change link
            let selectedColorUrl = $(this).attr("data-url");
            $(this).parent().prev().attr("href", selectedColorUrl);
            $(this).parent().next().attr("href", selectedColorUrl);

            // change name
            let selectedNameItem = $(this).attr("data-name");
            $(this)
              .parent()
              .next()
              .find(".nome-produto-spot")
              .text(selectedNameItem);

            // change price
            let selectedPriceItem = $(this).attr("data-price");
            $(this).parent().next().find(".valorbase").text(selectedPriceItem);
          });
        } else {
          btncarregarmais.html("Carregando...");
        }
      }, 100);
    }, 500);
  });
}

rodarScriptAddCarrinho(0);
