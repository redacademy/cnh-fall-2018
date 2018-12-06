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


  }); // end of doc ready
})(jQuery);