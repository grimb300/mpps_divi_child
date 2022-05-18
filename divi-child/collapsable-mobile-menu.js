// This snippet came from https://www.peeayecreative.com/how-to-collapse-divi-mobile-menu-submenus/
jQuery(function ($) {
  $(document).ready(function () {
    $(
      "body ul.et_mobile_menu li.menu-item-has-children, body ul.et_mobile_menu  li.page_item_has_children"
    ).append('<a href="#" class="mobile-toggle"></a>');
    $(
      "ul.et_mobile_menu li.menu-item-has-children .mobile-toggle, ul.et_mobile_menu li.page_item_has_children .mobile-toggle"
    ).click(function (event) {
      event.preventDefault();
      $(this).parent("li").toggleClass("dt-open");
      $(this).parent("li").find("ul.children").first().toggleClass("visible");
      $(this).parent("li").find("ul.sub-menu").first().toggleClass("visible");
    });
    iconFINAL = "P";
    $(
      "body ul.et_mobile_menu li.menu-item-has-children, body ul.et_mobile_menu li.page_item_has_children"
    ).attr("data-icon", iconFINAL);
    $(".mobile-toggle")
      .on("mouseover", function () {
        $(this).parent().addClass("is-hover");
      })
      .on("mouseout", function () {
        $(this).parent().removeClass("is-hover");
      });
  });
});
// END snippet from https://www.peeayecreative.com/how-to-collapse-divi-mobile-menu-submenus/

// This snippet was already in Divi Theme Options -> Integration -> Code for <head>
(function ($) {
  function setup_collapsible_submenus() {
    var $menu = $("#mobile_menu"),
      top_level_link = ".menu-item-has-children > a";
    $menu.find("a").each(function () {
      $(this).off("click");

      if ($(this).is(top_level_link)) {
        $(this).attr("href", "#");
        $(this).next(".sub-menu").addClass("hide");
      }

      if (!$(this).siblings(".sub-menu").length) {
        $(this).on("click", function (event) {
          $(this).parents(".mobile_nav").trigger("click");
        });
      } else {
        $(this).on("click", function (event) {
          event.preventDefault();
          $(this).next(".sub-menu").toggleClass("visible");
        });
      }
    });
  }

  $(window).load(function () {
    setTimeout(function () {
      setup_collapsible_submenus();
    }, 700);
  });
})(jQuery);
// END snippet in Divi Theme Options -> Integration -> Code for <head>

// This snippet is from Elegant Themes: https://www.elegantthemes.com/blog/divi-resources/how-to-create-a-mobile-collapsing-nested-menu-with-divis-theme-builder
(function ($) {
  function setup_collapsible_submenus() {
    var FirstLevel = $(".et_mobile_menu .first-level > a");

    FirstLevel.off("click").click(function () {
      $(this).attr("href", "#");
      $(this).parent().children().children().toggleClass("reveal-items");
      $(this).toggleClass("icon-switch");
    });
  }

  $(window).load(function () {
    setTimeout(function () {
      setup_collapsible_submenus();
    }, 700);
  });
})(jQuery);
// END snippet from Elegant Themes

// My snippet
(function ($) {
  $(document).ready(function () {
    console.log("Running my snippet");
    // Loop over all collapsing submenu menus (.collapsing-mobile-submenu)
    const targetMenus = $(".collapsing-mobile-submenu");
    console.log(`Found ${targetMenus.length} target menus`);
    targetMenus.each(function () {
      const parentMenuItems = $(this).find("li.menu-item-has-children");
      console.log(`Menu has ${parentMenuItems.length} parent menus`);
    });
  });
})(jQuery);
