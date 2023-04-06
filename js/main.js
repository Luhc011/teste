$(window).on("scroll", () => {
  let scrollY = $(window).scrollTop();
  if (scrollY > 320) {
    $("#header").addClass("active");
  } else {
    $("#header").removeClass("active");
  }
});

//ISOTOPE
let btn = $("#servicos-recentes .button-group button");
btn.on("click", (e) => {
  $("#servicos-recentes .button-group button").removeClass("active");
  e.target.classList.add("active");

  let selector = $(e.target).attr("data-filter");
  $("#servicos-recentes .grid").isotope({
    filter: selector,
  });
});

$(window).on("load", () => {
  $("#servicos-recentes .grid").isotope({
    filter: "*",
  });
});

//MAGNIFY
$(".grid .popup-link").magnificPopup({
  type: "image",
  gallery: {
    enabled: true,
    tPrev: "Anterior",
    tNext: "Proxima",
    tCounter: "%curr% de %total%",
  },
});
