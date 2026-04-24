let lastPriceSignature = "";

function changePrice() {
  let price = $("div#preco-natural #price-p").text();
  let priceInstallment = $("#price-10-vezes span").text();
  let priceVista = $("#price-a-vista span").text();
  let newPrice;
  let priceNumber;
  let numberFixed;

  if (!price || !priceInstallment || !priceVista) {
    return;
  }

  if (price.length > 6) {
    newPrice = parseFloat(price);
    priceNumber = newPrice.toFixed(3);
    numberFixed = 3;
  } else {
    newPrice = parseFloat(price);
    priceNumber = newPrice.toFixed(2);
    numberFixed = 2;
  }

  let newPriceNumber = parseFloat(priceNumber);
  let priceMercado = newPriceNumber / 0.6;
  let formatter = new Intl.NumberFormat("pt-BR", {
    style: "currency",
    currency: "BRL",
  });
  let thePar = $("span#itsPar").text().trim();
  let priceSignature = `${price}|${priceInstallment}|${priceVista}|${thePar}`;

  if (priceSignature === lastPriceSignature) {
    return;
  }

  lastPriceSignature = priceSignature;
  let priceMercadoOld = priceMercado.toFixed(numberFixed);
  let priceOfMercado = formatter.format(priceMercadoOld);
  $(".priceItem.reisman .priceReisman").text("R$ " + price);
  $("div#priceProduto")
    .attr("data-loading", "false")
    .html(
      `<p>R$ ${priceVista} no pix ${thePar} <span class="flag">promoção</span></p><p>ou <b>10x R$ ${priceInstallment}</b> no cartão</p>`,
    );
  if (numberFixed == 2) {
    $(".priceMercado").text(priceOfMercado);
  } else {
    $(".priceMercado").text(`R$ ${priceMercadoOld},00`);
  }
}

changePrice();
window.setInterval(changePrice, 1000);
