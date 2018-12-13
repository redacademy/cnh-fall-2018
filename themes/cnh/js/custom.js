(function ($) {
  $(function () {
    const $sideMenu = $('#side-menu');

    /**
     * start of side menu
     */
    $('.btn-open').on('click', function (event) {
      event.preventDefault();
      openSideMenu();
    });

    $('.btn-close').on('click', function (event) {
      event.preventDefault();
      closeSideMenu();
    });

    function openSideMenu() {
      if ($(document).width() < 600) {
        $sideMenu.css('width', '100%');
      } else {
        $sideMenu.css({
          width: '50%',
          left: 'auto',
          right: 0
        });
      }
    }

    function closeSideMenu() {
      $sideMenu.css('width', '0');
    }

    $('.side-navbar')
      .find('.accordion-toggle')
      .click(function () {
        $(this)
          .next()
          .toggleClass('open')
          .slideToggle('fast');
        $(this)
          .toggleClass('active-tab')
          .find('.side-link')
          .toggleClass('active');

        $('.side-navbar .accordion-content')
          .not($(this).next())
          .slideUp('fast')
          .removeClass('open');
        $('.side-navbar .accordion-toggle')
          .not(jQuery(this))
          .removeClass('active-tab')
          .find('.side-link')
          .removeClass('active');
      }); // end of side menu

    /**
     * start of Google Translate changes
     */
    const $translateBtn = $('.translate-icon');
    const $translator = $('#google_language_translator');
    // const $searchField = $('.site-header .search-field');

    // show translator
    $translateBtn.on('click', function () {
      // $('#google_language_translator').fadeToggle();
      $translator.toggle(1000);
      // $searchField.focus();
    }); // end of show translator

    // hide translator
    // $searchField.on('blur', function () {
    //   if ($(this).val === '') {
    //     $translator.toggle(1000);
    //   }
    // }); // end of hide translator
    // end of Google Translate changes

    // setTimeout(function () {
    //   $('.goog-te-combo').selectric();
    // }, 1000);

    /**
     * start of search form in header
     */
    const $searchBtn = $('.search-btn');
    const $searchForm = $('.header-extras .search-form');

    // show search form
    $searchBtn.on('click', function () {
      // $('#google_language_translator').fadeToggle();
      $searchForm.toggle(1000);
      $searchForm.focus();
    }); // end of show search form

    // hide translator
    $searchForm.on('blur', function () {
      if ($(this).val === '') {
        $searchForm.toggle(1000);
      }
    }); // end of hide search form
    // end of search form in header

    // start of spectagram
    // var spectragramComplete = function () {
    var spectra = {
      instaToken: '9448460219.0d61304.de737249603f46ec9356ff60f0aabdcf',
      instaID: '0d61304f0d4242a9b55e5c1378ba869e',

<<<<<<< HEAD
      init: function() {
=======
      init: function () {
>>>>>>> 1a9a56593dbdefd6b69edc6d1c8ebc1dbf9bddd1
        $.fn.spectragram.accessData = {
          accessToken: this.instaToken,
          clientID: this.instaID
        };

        $('.instalame-container').spectragram('getUserFeed', {
          // complete : spectragramComplete(),
          max: 2,
          size: 'medium',
          wrapEachWith: '<div class="photo">'
        });
      }
    };
    spectra.init();

    // Create the dropdown base
    if ($('.widget_nav_menu').length) {
      $('<select />').appendTo('.entry-title');

      // Create default option "Go to..."
      $('<option />', {
        selected: 'selected',
        value: '',
        text: 'Go to...'
      }).appendTo('.entry-title select');

      // Populate dropdown with menu items
      $('.widget-sidebar a').each(function () {
        var el = $(this);
        $('<option />', {
          value: el.attr('href'),
          text: el.text()
        }).appendTo('.entry-title select');
      }); // end of dropdown nav

      $('.entry-title select').selectric();

      $('.entry-title select').on('change', function () {
        let selected = $(this).val();

        window.location.replace(selected);
      });
    } //end of if statement
  }); // end of doc ready
})(jQuery);