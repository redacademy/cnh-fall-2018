(function ($) {
  $(function () {

    $('#open-slide').on('click', function (event) {
      event.preventDefault();

      console.log('working');

      openSideMenu();
      closeSideMenu();
    });

    function openSideMenu() {
      document.getElementById('side-menu').style.width = '250px';
      // document.getElementById('main').style.marginLeft = '250px';
    }

    function closeSideMenu() {
      document.getElementById('side-menu').style.width = '0';
      // document.getElementById('main').style.marginLeft = '0';
    }
  }); // end of doc ready
})(jQuery);