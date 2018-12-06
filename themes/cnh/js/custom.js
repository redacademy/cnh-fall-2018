(function ($) {
  $(function () {

    const $sideMenu = $('#side-menu');

    $('.btn-open').on('click', function (event) {
      event.preventDefault();

      openSideMenu();
    });

    $('.btn-close').on('click', function (event) {
      event.preventDefault();

      closeSideMenu();
    });

    function openSideMenu() {
      $sideMenu.css('width', '100%');
      // document.getElementById('side-menu').style.width = '250px';
      // document.getElementById('main').style.marginLeft = '250px';
    }

    function closeSideMenu() {
      $sideMenu.css('width', '0');
      // document.getElementById('side-menu').style.width = '0';
      // document.getElementById('main').style.marginLeft = '0';
    }

    $('.side-navbar').find('.accordion-toggle').click(function () {
      $(this).next().toggleClass('open').slideToggle('fast');
      $(this).toggleClass('active-tab').find('.side-link').toggleClass('active');

      $('.side-navbar .accordion-content').not($(this).next()).slideUp('fast').removeClass('open');
      $('.side-navbar .accordion-toggle').not(jQuery(this)).removeClass('active-tab').find('.side-link').removeClass('active');
    });

  }); // end of doc ready
})(jQuery);