function submitUserForm() {
  var response = grecaptcha.getResponse();
  if (response.length == 0) {
    document.getElementById("g-recaptcha-error").innerHTML =
      '<span style="color:red;">Preencha o Recaptcha.</span>';
    return false;
  }
  return true;
}

(function () {
  var fnAttachFieldKeyUp = function () {
    var $term = document.querySelector(".searchForm form.busca-Search #term");
    var $cat = document.querySelector(".searchForm form.busca-Search #cat");

    $term.onkeyup = null;
    headerSearch.fieldKeyUp($term, $cat.value);
  };
  var headerSearch = new HeaderSearch(new Searcher());

  fnAttachFieldKeyUp();
  document.querySelector(".searchForm form.busca-Search #cat").onchange =
    function () {
      fnAttachFieldKeyUp();
    };
})();

function verifyCaptcha() {
  document.getElementById("g-recaptcha-error").innerHTML = "";
}

$("#select-precos").on("change", function (e) {
  e.preventDefault();
  var doc = document.location;
  var min = parseFloat($(this).find("option:selected").attr("min"));
  var max = parseFloat($(this).find("option:selected").attr("max"));

  let url =
    doc.origin + doc.pathname + "?price-min=" + min + "&price-max=" + max;
  document.location = url;
});

$(".category-select").on("change", function (e) {
  document.location = $(this).find("option:selected").val();
});

// Login beta + infos do carrinho
CanopusEventCenter.addListener("ServerDataLoader.Loaded", function (data) {
  if (typeof data.client !== undefined) {
    var estaLogado = data.client !== null;
    if (estaLogado) {
      $(".nao-logado").hide();
      $(".logado").show();
      $(".icon__logout").show();
    } else {
      $(".logado").hide();
      $(".icon__logout").hide();
      $(".nao-logado").show();
    }
    if (typeof data.cart !== undefined) {
      $(".dados-carrinho").show().css("display", "inherit");
      $(".carrinho-qtd").html(data.cart.quantity);
      $(".carrinho-qtd-faixaverde").html(data.cart.quantity);
      $(".carrinho-subtotal").html(
        (parseInt(data.cart.subtotal * 100) / 100).toLocaleString("pt-BR", {
          minimumFractionDigits: 2,
          style: "currency",
          currency: "BRL",
        }),
      );
    }
  }
  if (typeof data.cart !== undefined) {
    $("#total").html("R$ " + data.cart.total.toFixed(2).replace(".", ","));
    $("#qtd").html(data.cart.quantity);
  }
});

$(document).ready(function () {
  // Menu mobile
  $(".hamb-icon").on("click", function () {
    $(this).toggleClass("open");
    $("#mobile-menu").toggleClass("open");
    $("body").toggleClass("open");
  });

  $("#modelos").slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    prevArrow: "<span class='slick-prev left'></span>",
    nextArrow: "<span class='slick-next right'></span>",
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  // slider do produto
  $(".principal").owlCarousel({
    items: 1,
    loop: false,
    thumbs: true,
    thumbImage: false,
    thumbsPrerendered: true,
    mouseDrag: false,
    touchDrag: false,
    dots: false,
    nav: true,
    navText: [
      '<i class="fa fa-chevron-left" aria-hidden="true"></i>',
      '<i class="fa fa-chevron-right" aria-hidden="true"></i>',
    ],
  });

  // Newsleatter
  $("#footer-news").submit(function (e) {
    e.preventDefault();
    StoreNewsletterEmail.store($("#footer-news").find('[name="email"]').val());
  });
  CanopusEventCenter.addListener("NewsletterEmail.Stored", function (data) {
    if (data) {
      $("#footer-news").find('[name="email"]').val("");
    }
  });
});
