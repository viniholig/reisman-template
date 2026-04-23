"use strict";

// Type checking function
function _typeof(e) {
  return (
    (_typeof =
      "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
        ? function (e) {
            return typeof e;
          }
        : function (e) {
            return e &&
              "function" == typeof Symbol &&
              e.constructor === Symbol &&
              e !== Symbol.prototype
              ? "symbol"
              : typeof e;
          }),
    _typeof(e)
  );
}

// Iterator helper function
function _createForOfIteratorHelper(e, t) {
  var o =
    ("undefined" != typeof Symbol && e[Symbol.iterator]) || e["@@iterator"];
  if (!o) {
    if (
      Array.isArray(e) ||
      (o = _unsupportedIterableToArray(e)) ||
      (t && e && "number" == typeof e.length)
    ) {
      o && (e = o);
      var i = 0,
        r = function () {};
      return {
        s: r,
        n: function () {
          return i >= e.length ? { done: !0 } : { done: !1, value: e[i++] };
        },
        e: function (e) {
          throw e;
        },
        f: r,
      };
    }
    throw new TypeError(
      "Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.",
    );
  }
  var a,
    s = !0,
    n = !1;
  return {
    s: function () {
      o = o.call(e);
    },
    n: function () {
      var e = o.next();
      return ((s = e.done), e);
    },
    e: function (e) {
      ((n = !0), (a = e));
    },
    f: function () {
      try {
        s || null == o.return || o.return();
      } finally {
        if (n) throw a;
      }
    },
  };
}

// Convert unsupported iterables to arrays
function _unsupportedIterableToArray(e, t) {
  if (e) {
    if ("string" == typeof e) return _arrayLikeToArray(e, t);
    var o = Object.prototype.toString.call(e).slice(8, -1);
    return (
      "Object" === o && e.constructor && (o = e.constructor.name),
      "Map" === o || "Set" === o
        ? Array.from(e)
        : "Arguments" === o ||
            /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(o)
          ? _arrayLikeToArray(e, t)
          : void 0
    );
  }
}

// Convert array-like objects to arrays
function _arrayLikeToArray(e, t) {
  (null == t || t > e.length) && (t = e.length);
  for (var o = 0, i = new Array(t); o < t; o++) i[o] = e[o];
  return i;
}

// Initialize product slides
function slidesProduto() {
  new Swiper(".clientsSlider1", {
    slidesPerView: 4,
    slidesPerGroup: 1,
    spaceBetween: 10,
    preloadImages: !1,
    speed: 1000,
    slidesPerColumn: 2,
    lazy: {
      checkInView: !0,
      loadPrevNext: !0,
      loadOnTransitionStart: !0,
      loadPrevNextAmount: 4,
    },
    breakpoints: {
      0: {
        slidesPerView: 1.3,
        spaceBetween: 8,
      },
      768: {
        slidesPerView: 1.3,
        spaceBetween: 8,
      },
      992: {
        slidesPerView: 4,
        spaceBetween: 8,
      },
    },
    navigation: {
      nextEl: ".clientsSlider1 .slick-next1",
      prevEl: ".clientsSlider1 .slick-prev1",
    },
    pagination: {
      el: ".clientsSlider1 .swiper-pagination",
      type: "bullets",
      clickable: !0,
    },
  });
}

// Initialize products
function ProductsInit() {
  console.log("teste");
  slidesProduto();
}

// Shipping modal function
function freteModal() {
  var e = document.getElementById("inputCEPModal").value.replace("-", "");
  $.ajax({
    url: "/ecommerce/zip-code-ranges?zip_code=" + e,
    type: "GET",
    dataType: "JSON",
    success: function (e) {
      var t = "";
      $(".container-frete-preview ul").html("");
      $.each(e.data, function (e, o) {
        var i = o.time_cost.split(".").shift();
        if (null !== o.time_cost_limit)
          var r = " a " + o.time_cost_limit.split(".").shift();
        else r = "";
        if (i <= 1) var a = " dia útil";
        else a = " dias úteis";
        t =
          '<li><i class="fa fa-truck" aria-hidden="true"></i>' +
          o.description.replace(":", "") +
          "<br> R$ " +
          (parseInt(100 * o.amount) / 100).toLocaleString() +
          " - " +
          i +
          r +
          a +
          "</li>";
        $(".container-frete-preview ul").append(t);
      });
    },
  });
}

// Change product card images
function changeImgCard() {
  $(".receiveImgs>div").on("click", function () {
    $(this).parent().find("> div").removeClass("active");
    $(this).addClass("active");
    var e = $(this).attr("data-link");
    $(this).parent().prev().find("img").attr("src", e);
    var t = $(this).attr("data-url");
    $(this).parent().prev().attr("href", t);
    $(this).parent().next().attr("href", t);
    var o = $(this).attr("data-name");
    $(this).parent().parent().find(".nome-produto-spot").text(o);
    var i = $(this).attr("data-price");
    $(this).parent().parent().find(".valorbase").text(i);
  });
}

// Change price display
function changePrice() {
  var e = $("div#preco-natural #price-p").text(),
    t = $("#price-10-vezes span").text(),
    o = $("#price-a-vista span").text();

  if (e.length > 6) {
    newPrice = parseFloat(e);
    priceNumber = newPrice.toFixed(3);
    numberFixed = 3;
  } else {
    newPrice = parseFloat(e);
    priceNumber = newPrice.toFixed(2);
    numberFixed = 2;
  }

  var i = parseFloat(priceNumber) / 0.6,
    r = new Intl.NumberFormat("pt-BR", {
      style: "currency",
      currency: "BRL",
    }),
    a = $("span#itsPar").text().trim(),
    s = i.toFixed(numberFixed),
    n = r.format(s);

  $(".priceItem.reisman .priceReisman").text("R$ " + e);
  $("div#priceProduto").html(
    "<p>R$ " +
      o +
      " no pix " +
      a +
      ' <span class="flag">promoção<span></p> <p>ou <b>10x R$ ' +
      t +
      "</b> no cartão</p> ",
  );

  if (2 == numberFixed) {
    $(".priceMercado").text(n);
  } else {
    $(".priceMercado").text("R$ " + s + ",00");
  }
}

// DOM loaded event
window.addEventListener("DOMContentLoaded", function () {
  console.log("dom carregado do produto");
  ProductsInit();
});

document.addEventListener("DOMContentLoaded", function () {
  document.addEventListener("click", function (event) {
    if (event.target.classList.contains("description")) {
      event.target.classList.toggle("active");

      const contentElements = document.querySelectorAll(".content");
      contentElements.forEach(function (element) {
        element.classList.toggle("active");
      });
    }
  });
});

// Checkout preview built event
CanopusEventCenter.addListener("Checkout.Preview.Built", function () {
  // Update cart quantity
  var e = function (e, o, i, r) {
    $.get("/checkout/cart/" + o + "/update/" + e + "?quantity=" + i)
      .done(function () {
        CanopusEventCenter.emitEvent("Checkout.Updated", [e, "update", o, i]);
      })
      .fail(function () {
        t(e, r);
      });
  };

  // Reset quantity input
  var t = function (e, t) {
    $("#input-quantity-" + e).val(t);
  };

  // Remove items from cart
  var o = function (e) {
    if (0 !== e.length) {
      var t = e.shift();
      i(t.id, t.type, e);
    } else {
      CanopusEventCenter.emitEvent("Checkout.Removed");
    }
  };

  // Remove single item
  var i = function (e, t, i) {
    $.get("/checkout/cart/" + t + "/remove/" + e)
      .done(function () {
        $(
          '.canopus-cart-items ul li[data-id="' +
            e +
            '"][data-type="' +
            t +
            '"]',
        ).remove();
        o(i);
      })
      .fail(function () {});
  };

  // Button click handlers
  $(".btn-less-qtd-modal").click(function () {
    var o = $(this).attr("data-id"),
      i = $(this).attr("data-type"),
      r = $("#input-quantity-" + o).val(),
      a = parseInt(r) - 1;
    if (a > 0) {
      t(o, a);
      e(o, i, a, r);
    }
  });

  $(".btn-more-qtd-modal").click(function () {
    var o = $(this).attr("data-id"),
      i = $(this).attr("data-type"),
      r = $("#input-quantity-" + o).val(),
      a = parseInt(r) + 1;
    t(o, a);
    e(o, i, a, r);
  });

  $(".btn-remove-item").click(function () {
    var e = $(this).attr("data-id"),
      t = $(this).attr("data-type");
    o([{ id: e, type: t }]);
  });

  $("#btn-clear-cart").click(function () {
    var e,
      t = [],
      i = _createForOfIteratorHelper(
        $(".canopus-cart-items ul li.cart-item-row"),
      );
    try {
      for (i.s(); !(e = i.n()).done; ) {
        var r = e.value,
          a = r.getAttribute("data-id"),
          s = r.getAttribute("data-type");
        t.push({ id: a, type: s });
      }
    } catch (e) {
      i.e(e);
    } finally {
      i.f();
    }
    o(t);
  });

  // Load freight options
  $("#btn-load-freight-options").click(function () {
    var e = Inputmask.unmask(
      $("#input-cep-freight-options").val(),
      "99999-999",
    );
    if (8 === e.length) {
      $.get("/ecommerce/zip-code-ranges?zip_code=" + e)
        .done(function (e) {
          var t,
            o = $(".container-frete-preview ul"),
            i = _createForOfIteratorHelper(e);
          try {
            for (i.s(); !(t = i.n()).done; ) {
              var r = t.value,
                a = $("<li></li>"),
                s = r.time_cost.split(".").shift(),
                n = r.time_cost_limit.split(".").shift();
              a.html(
                '<i class="fa fa-truck" aria-hidden="true"></i>' +
                  '<span class="description">' +
                  r.description +
                  "</span>" +
                  '<span class="amount">R$ ' +
                  r.amount.toLocaleString("pt-BR", {
                    maximumFractionDigits: 2,
                    minimumFractionDigits: 2,
                  }) +
                  "</span>" +
                  '<span class="time-cost">de ' +
                  s +
                  "</span>" +
                  '<span class="time-cost-join">a</span>' +
                  '<span class="time-cost-limit">' +
                  n +
                  "</span>" +
                  '<span class="time-cost-append">dias úteis</span>',
              );
              o.html(a);
            }
          } catch (e) {
            i.e(e);
          } finally {
            i.f();
          }
        })
        .fail(function () {
          iziToast.error({
            message:
              "Tivemos um problema ao carregar as opções de frete. Por favor, tente novamente",
          });
        });
    }
  });

  // CEP input mask and validation
  $("#input-cep-freight-options").inputmask("99999-999");
  $("#input-cep-freight-options").keyup(function () {
    var e = Inputmask.unmask(
        $("#input-cep-freight-options").val(),
        "99999-999",
      ),
      t = $("#btn-load-freight-options"),
      o = $(".container-frete-preview ul");
    if (8 === e.length) {
      t.removeAttr("disabled");
    } else {
      t.attr("disabled", "disabled");
      o.html("");
    }
  });
});

// Server data loader events
CanopusEventCenter.addListener("ServerDataLoader.Loaded", function (e) {
  $(".cart-subtotal").html(
    "R$ " +
      e.cart.subtotal.toLocaleString("pt-BR", {
        maximumFractionDigits: 2,
        minimumFractionDigits: 2,
      }),
  );
  $(".container-frete-preview ul").html("");
});

// Cookie alert functionality
(function () {
  var e = document.querySelector(".cookiealert"),
    t = document.querySelector(".acceptcookies");

  if (e) {
    e.offsetHeight;

    // Get cookie function
    function getCookie(e) {
      for (
        var t = e + "=",
          o = decodeURIComponent(document.cookie).split(";"),
          i = 0;
        i < o.length;
        i++
      ) {
        for (var r = o[i]; " " === r.charAt(0); ) r = r.substring(1);
        if (0 === r.indexOf(t)) return r.substring(t.length, r.length);
      }
      return "";
    }

    // Set cookie function
    function setCookie(e, t, o) {
      var i = new Date();
      i.setTime(i.getTime() + 24 * o * 60 * 60 * 1000);
      var r = "expires=" + i.toUTCString();
      document.cookie = e + "=" + t + ";" + r + ";path=/";
    }

    if (!getCookie("acceptCookies")) {
      e.classList.add("show");
    }

    t.addEventListener("click", function () {
      setCookie("acceptCookies", !0, 365);
      e.classList.remove("show");
      window.dispatchEvent(new Event("cookieAlertAccept"));
    });
  }
})();

// Client data display
CanopusEventCenter.addListener("ServerDataLoader.Loaded", function (e) {
  if (void 0 !== _typeof(e.client)) {
    if (null !== e.client) {
      $("#dataName").html(e.client.name1);
    }
  }
  console.log(e);
});

// Duplicate client data listener
CanopusEventCenter.addListener("ServerDataLoader.Loaded", function (e) {
  if (void 0 !== _typeof(e.client)) {
    if (null !== e.client) {
      $("#dataName").html(e.client.name1);
    }
  }
  console.log(e);
});

// Document ready functions
$(document).ready(function () {
  // Search functionality
  $("header .item.search").on("click", function (e) {
    setTimeout(function () {
      $("input.form-control.input-search").focus();
    }, 500);
    console.log("esta chamando o js do nome");
  });

  // Cart preview check
  setInterval(function () {
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
  }, 1000);

  // Toggle search form
  $(document).on(
    "click",
    "header .desktop .aside-box .item.search",
    function () {
      $(this).toggleClass("active");
      $(".searchForm").toggleClass("active");
    },
  );

  // Add to cart with observation
  $(document).on("click", "a#btn-adicionarCart", function () {
    setTimeout(function () {
      var pedido = $("input#input-gravacao-pedido").val();
      iziToast.success({
        title: "Observação salva!",
        timeout: 3000,
      });
      $.post("/checkout/cart/properties", {
        extra_fields: [
          {
            slug: "observacao",
            value: pedido,
          },
        ],
      });
    }, 1000);
  });

  // Slick slider configurations
  $(".clientsSlider").slick({
    dots: !1,
    arrows: !0,
    prevArrow:
      '<a class="slick-prev"><i><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.4082 20C15.33 20 15.2525 19.9832 15.1806 19.9506C15.1087 19.918 15.0438 19.8703 14.9898 19.8105L8.2947 12.7445C8.20132 12.6466 8.1272 12.5301 8.07662 12.4018C8.02604 12.2735 8 12.1358 8 11.9968C8 11.8578 8.02604 11.7202 8.07662 11.5918C8.1272 11.4635 8.20132 11.3471 8.2947 11.2492L14.9898 4.1832C15.0447 4.12512 15.11 4.07905 15.1818 4.04761C15.2536 4.01618 15.3305 4 15.4082 4C15.4859 4 15.5629 4.01618 15.6347 4.04761C15.7065 4.07905 15.7717 4.12512 15.8267 4.1832C15.8816 4.24128 15.9252 4.31023 15.955 4.38612C15.9847 4.46201 16 4.54334 16 4.62548C16 4.70762 15.9847 4.78895 15.955 4.86484C15.9252 4.94073 15.8816 5.00968 15.8267 5.06776L9.28103 11.9968L15.8267 18.9259C15.9023 19.015 15.9524 19.1249 15.9711 19.2429C15.9899 19.3609 15.9766 19.4821 15.9328 19.5924C15.889 19.7027 15.8164 19.7976 15.7235 19.866C15.6307 19.9345 15.5213 19.9736 15.4082 19.9789V20Z" fill="currentColor"></path></svg></i></a>',
    nextArrow:
      '<a class="slick-next"><i><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.59175 20C8.47866 19.9947 8.36933 19.9555 8.27647 19.8871C8.18361 19.8187 8.11104 19.7238 8.06721 19.6135C8.02338 19.5031 8.01008 19.3819 8.02886 19.2639C8.04765 19.146 8.09774 19.036 8.17332 18.9469L14.7188 12.0179L8.17332 5.06776C8.06235 4.95046 8 4.79137 8 4.62548C8 4.45959 8.06235 4.3005 8.17332 4.1832C8.28429 4.0659 8.43481 4 8.59175 4C8.74869 4 8.89921 4.0659 9.01018 4.1832L15.7051 11.2492C15.7985 11.3471 15.8726 11.4635 15.9231 11.5918C15.9737 11.7202 15.9998 11.8578 15.9998 11.9968C15.9998 12.1358 15.9737 12.2735 15.9231 12.4018C15.8726 12.5301 15.7985 12.6466 15.7051 12.7445L9.01018 19.8105C8.95621 19.8703 8.8913 19.918 8.81937 19.9506C8.74744 19.9832 8.67 20 8.59175 20Z" fill="currentColor"></path></svg></i></a>',
    infinite: !1,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          dots: !0,
          arrows: !1,
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  // Additional slick sliders
  $(".slider-completedLookNew").slick({
    dots: !1,
    arrows: !0,
    prevArrow:
      '<a class="slick-prev"><i><svg width="14" height="8" viewBox="0 0 14 8" xmlns="http://www.w3.org/2000/svg"><path d="M1.177 7.53L.47 6.823 6.823.47l6.354 6.353-.707.707-5.647-5.646z" fill="#000" fill-rule="nonzero"></path></svg></i></a>',
    nextArrow:
      '<a class="slick-next"><i><svg width="14" height="8" viewBox="0 0 14 8" xmlns="http://www.w3.org/2000/svg"><path d="M1.177 7.53L.47 6.823 6.823.47l6.354 6.353-.707.707-5.647-5.646z" fill="#000" fill-rule="nonzero"></path></svg></i></a>',
    infinite: !1,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          dots: !0,
          arrows: !1,
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
    ],
  });

  if (
    $("#linkWebstorie").length &&
    !$("#linkWebstorie").hasClass("slick-initialized")
  ) {
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

  // Header scroll effect
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

// Price change interval
window.setInterval(changePrice, 1000);

// Initialize AOS
AOS.init();

// VenoBox initialization
CanopusEventCenter.addListener("ServerDataLoader.Loaded", function (e) {
  if (void 0 !== _typeof(e.client)) {
    if (null !== e.client) {
      $(".nao-logado").hide();
      $(".logado").show();
    } else {
      $(".logado").hide();
      $(".nao-logado").show();
    }
  }

  new VenoBox({
    selector: ".my-image-links",
    numeration: !0,
    infinigall: !0,
    share: !0,
    spinner: "rotating-plane",
  });
});

// Active link highlighting
var link = $("a"),
  url = window.location.pathname;
link.each(function () {
  if ($(this).attr("href") === url) {
    $(this).addClass("active");
  }
});

// Sidenav variables and functions
var alturatopo,
  $sideNav = $("#sidenav"),
  $btnNav = $("#btn-toggle-sidenav"),
  $btnStickyNav = $("#btn-sticky-toggle-sidenav"),
  $btnCloseNav = $("#btn-close-sidenav");

function openSidenav() {
  $sideNav.addClass("open");
  $("body").addClass("overflow-hidden");
}

function closeSidenav() {
  $sideNav.removeClass("open");
  $("body").removeClass("overflow-hidden");
}

function rodarScriptAddCarrinho(e) {
  $(".coluna-spot-category").each(function () {
    if (!$(this).hasClass("carregou")) {
      $(this).addClass("carregou carregou-" + e);
    }
  });

  if (e > 0) {
    $(".coluna-spot-category#carregou").attr("id", "");
    $(".coluna-spot-category.carregou-" + e)
      .first()
      .attr("id", "carregou");
    $("html,body")
      .unbind()
      .animate({
        scrollTop: $("#carregou").offset().top - alturatopo,
      });
  }
}

// Sidenav event handlers
$btnNav.on("click", openSidenav);
$btnStickyNav.on("click", openSidenav);
$btnCloseNav.on("click", closeSidenav);
$sideNav.find("a").each(function () {
  $(this).on("click", closeSidenav);
});

// More slick slider configurations
$(".slider-home").slick({
  dots: !0,
  arrows: !0,
  infinite: !0,
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
  dots: !1,
  arrows: !0,
  infinite: !1,
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
  dots: !0,
  arrows: !0,
  infinite: !0,
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
  dots: !1,
  arrows: !1,
  infinite: !0,
  autoplay: !0,
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
  arrows: !1,
  dots: !0,
  fade: !0,
});

$(".slider-produto-mini").slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  vertical: !0,
  asNavFor: ".slider-produto-principal",
  dots: !1,
  arrows: !1,
  centerMode: !1,
  focusOnSelect: !0,
});

$(".slider-depoimentos").slick({
  dots: !1,
  arrows: !1,
  infinite: !0,
  speed: 300,
  autoplay: !0,
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

// Mobile comments slider
if (window.outerWidth < 600) {
  $("#comentarios-avaliacoes").slick({
    dots: !0,
    arrows: !1,
    infinite: !0,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: !0,
  });
}

// Custom arrow images for slick sliders
$(".slick-prev").each(function () {
  $(this).html("");
  var e = $(document.createElement("img"));
  e.attr(
    "src",
    "https://assets.betalabs.net/production/reisman/images/stores/1/arrow-left.png",
  );
  $(this).append(e);
});

$(".slick-next").each(function () {
  $(this).html("");
  var e = $(document.createElement("img"));
  e.attr(
    "src",
    "https://assets.betalabs.net/production/reisman/images/stores/1/arrow-right.png",
  );
  $(this).append(e);
});

// Set top height based on screen size
alturatopo = window.outerWidth < 901 ? 98.08 : 89.08;

// Load more functionality
var qtdasvezescarregou = 0,
  btncarregarmais = $("#btn-carregar-mais");

if (btncarregarmais.length > 0) {
  btncarregarmais.on("click", function () {
    setTimeout(function () {
      var e = setInterval(function () {
        if (0 == $("span.loader").length) {
          rodarScriptAddCarrinho(++qtdasvezescarregou);
          console.log(qtdasvezescarregou);
          btncarregarmais.html("Carregar mais");
          clearInterval(e);

          // Re-bind image change events
          $(".receiveImgs>div").on("click", function () {
            $(this).parent().find("> div").removeClass("active");
            $(this).addClass("active");
            var e = $(this).attr("data-link");
            $(this).parent().prev().find("img").attr("src", e);
            var t = $(this).attr("data-url");
            $(this).parent().prev().attr("href", t);
            $(this).parent().next().attr("href", t);
            var o = $(this).attr("data-name");
            $(this).parent().next().find(".nome-produto-spot").text(o);
            var i = $(this).attr("data-price");
            $(this).parent().next().find(".valorbase").text(i);
          });
        } else {
          btncarregarmais.html("Carregando...");
        }
      }, 100);
    }, 500);
  });
}

// Initialize the cart script
rodarScriptAddCarrinho(0);
