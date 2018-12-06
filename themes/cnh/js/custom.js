(function ($) {
  $(function () {

    const $sideMenu = $('#side-menu');

    $('.btn-open').on('click', function (event) {
      event.preventDefault();

      console.log('working');

      openSideMenu();
    });

    $('.btn-close').on('click', function (event) {
      event.preventDefault();

      console.log('working it!');

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

  }); // end of doc ready
})(jQuery);