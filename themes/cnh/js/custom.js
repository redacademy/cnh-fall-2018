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
    }

    function closeSideMenu() {
      $sideMenu.css('width', '0');
    }
  // start of spectagram
  // var spectragramComplete = function () {
  var spectra = {
    instaToken : '9448460219.0d61304.de737249603f46ec9356ff60f0aabdcf',
    instaID: '0d61304f0d4242a9b55e5c1378ba869e',
  

  init: function () {
  $.fn.spectragram.accessData = {
    accessToken: this.instaToken,
    clientID: this.instaID
  };

  $('.instalame-container').spectragram('getUserFeed',{
    // complete : spectragramComplete(),
    max: 2,
    size: "medium",
    wrapEachWith: '<div class="photo">'
  });
 }
}
spectra.init();

    $('.side-navbar').find('.accordion-toggle').click(function () {
      $(this).next().toggleClass('open').slideToggle('fast');
      $(this).toggleClass('active-tab').find('.side-link').toggleClass('active');

      $('.side-navbar .accordion-content').not($(this).next()).slideUp('fast').removeClass('open');
      $('.side-navbar .accordion-toggle').not(jQuery(this)).removeClass('active-tab').find('.side-link').removeClass('active');
    });

  }); // end of doc ready
})(jQuery);