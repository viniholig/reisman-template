CanopusEventCenter.addListener("ServerDataLoader.Loaded", function (data) {
  if (typeof data.client !== undefined) {
    var estaLogado = data.client !== null;
    if (estaLogado) {
      $(".menu-client span.name-use").html("Olá, " + data.client.name1);
      $(".menu-client").addClass("actived");
      $(".item.login a").attr({ href: "/account" });
      $(".item.login a").removeAttr("canopus-open-identification-modal");
    } else {
      $(".menu-client").removeClass("actived");
      $(".item.login a").attr({
        href: "javascript:;",
        "canopus-open-identification-modal": "",
      });
    }
  }
});
