$(document).ready(function () {
  $(".mobile-menu").click(function () {
    $(".stick").toggleClass(function () {
      return $(this).is(".on, .off") ? "on off" : "on";
    });
  });
});
