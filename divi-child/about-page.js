(function ($) {
  function setup_fancy_tabs() {
    console.log("Starting fancy tabs");
    // Find all the paragraph tags inside the .fancy-tabs tab content
    $(".fancy-tabs .et_pb_tab_content p").each(function () {
      // If there isn't already an anchor tag, add one
      if ($(this).find("a").length === 0) {
        // "javascript:void(0)" disables the link
        $(this).html(
          `<a href="javascript:void(0)" class="fancy-tabs-no-link">${$(
            this
          ).html()}</a>`
        );
      }
    });
  }

  $(window).load(function () {
    setup_fancy_tabs();
  });
})(jQuery);
