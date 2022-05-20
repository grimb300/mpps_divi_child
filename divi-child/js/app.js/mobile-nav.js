jQuery(($) => {
  let clickTimeout = null;
  $('body').on('click', '.fdk-page-header .fdk-menu .menu-item.menu-item-has-children > a', function(e) {
    if(isMobileSize()) {
      if(clickTimeout) {
        return;
      } else {
        e.preventDefault();
        clickTimeout = setTimeout(() => clickTimeout = null, 800);
      }
      const $this = $(e.target);
      const $sub = $this.parent().find('.sub-menu')

      if($sub.is(':visible')) {
        $sub.slideUp();
      } else {
        const $top = $this.closest('.fdk-page-header');
        $top.find('.sub-menu:visible').slideUp();
        $sub.slideDown();
      }
    }
  });

  $('body').on('click', function(e) {
    if(isMobileSize() && !$(e.target).closest('.menu-item.menu-item-has-children').length) {
      $('body').find('.sub-menu:visible').slideUp();
    }
  });

  $(window).on('ontabletsize', function() {
    $('body').find('.sub-menu:visible').attr('style', '');
  });
})