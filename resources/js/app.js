require('./bootstrap');
require('alpinejs');
const feather = require('feather-icons')
var Turbolinks = require('turbolinks');
Turbolinks.start();

document.addEventListener("turbolinks:load", function() {
  feather.replace();
    $(".sidebar-dropdown > a").click(function() {
      $(".sidebar-submenu").slideUp(200);
      if (
        $(this)
          .parent()
          .hasClass("active")
      ) {
        $(".sidebar-dropdown").removeClass("active");
        $(this)
          .parent()
          .removeClass("active");
      } else {
        $(".sidebar-dropdown").removeClass("active");
        $(this)
          .next(".sidebar-submenu")
          .slideDown(200);
        $(this)
          .parent()
          .addClass("active");
      }
    });

  $("#close-sidebar").click(function() {
      $(".page-wrapper").removeClass("toggled");
  });
  $("#show-sidebar").click(function() {
    $(".page-wrapper").addClass("toggled");
  });
});