$(document).ready(function () {
  $(".filtros-interna select").on("change", function () {
    let valorAtual = parseFloat($("#price-p").replace(",", "."));
    let add = parseFloat(
      $(this).children("option:selected").attr("data-price").replace(",", "."),
    );
    $(this).addClass("active");
    $(this).children("option:selected").addClass("active");
  });

  String.prototype.formatMoney = function () {
    var v = this;

    if (v.indexOf(".") === -1) {
      v = v.replace(/([\d]+)/, "$1,00");
    }

    v = v.replace(/([\d]+)\.([\d]{1})$/, "$1,$20");
    v = v.replace(/([\d]+)\.([\d]{2})$/, "$1,$2");
    v = v.replace(/([\d]+)([\d]{3}),([\d]{2})$/, "$1.$2,$3");

    return v;
  };
});
