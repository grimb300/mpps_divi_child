console.log("Success!");

(function ($) {
  function setup_collapsible_submenus() {
    // Add mobile submenu toggles to the mobile menu
    $(
      ".collapsing-mobile-submenu ul.et_mobile_menu li.menu-item-has-children"
    ).append('<a href="#" class="mobile-submenu-toggle"></a>');

    // Handle clicks to the mobile submenu toggles
    $(".mobile-submenu-toggle").click(function (event) {
      event.preventDefault();
      $(this)
        .parent("li.menu-item-has-children")
        .toggleClass("mobile-submenu-open");
    });
  }

  // This is a dirty trick that Divi plays on the unsuspecting.
  // The mobile menu is created by their JavaScript sometime after everything is loaded.
  // Therefore, it is necessary to wait this seemingly arbitrary amount of time before executing my JavaScript.
  // Found this through their example code here:
  //  https://www.elegantthemes.com/blog/divi-resources/how-to-create-a-mobile-collapsing-nested-menu-with-divis-theme-builder
  $(window).load(function () {
    setTimeout(function () {
      setup_collapsible_submenus();
    }, 700);
  });
})(jQuery);

document.querySe;
