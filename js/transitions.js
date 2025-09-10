$("nav a").on("click", function(event) {
  event.preventDefault();

  const href = $(this).attr("href");

  window.history.pushState(null, null, href);

  $("nav a").removeClass("active");
  $(this).addClass("active");

  $.ajax({
    url: href,
    success: function(data) {
      $("#main-content").fadeOut(250, function() {
        const newPage = $(data)
          .filter("#main-content")
          .html();

        $("#main-content").html(newPage);

        $("#main-content").fadeIn(250);
      });
    }
  });
});
