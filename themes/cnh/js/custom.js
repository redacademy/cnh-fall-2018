(function ($) {
  $(function () {


    /**
     * start of side menu
     */
    const $sideMenu = $('#side-menu');

    $('.btn-open').on('click', function () {
      // event.preventDefault();
      openSideMenu();
    });

    $('.btn-close').on('click', function () {
      // event.preventDefault();
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

    $('.side-nav')
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

        $('.side-nav .accordion-content')
          .not($(this).next())
          .slideUp('fast')
          .removeClass('open');
        $('.side-nav .accordion-toggle')
          .not($(this))
          .removeClass('active-tab')
          .find('.side-link')
          .removeClass('active');
      }); // end of side menu

    /**
     * start of Google Translate
     */
    $('.goog-te-banner').hide();

    const $translateBtn = $('.translate-icon');
    const $translator = $('#google_language_translator');
    // const $translatorOptns = $('select.goog-te-combo');
    // const $translatorOptn = $('.goog-te-combo option').val();
    // const $page = $('#page');

    // Handle click on toggle translate button
    $translateBtn.on('click', function () {
      $translator.show().focus();
      // $translator.toggle();
      return false;
    });

    // Handle change on translator
    // $translatorOptns.on('change', function () {
    //   // $translator.toggle();
    //   // return true;
    //   console.log('working!');

    //   if ($translatorOptn !== '') {
    //     $page.css('margin-top', '38px');
    //   }
    // });

    // $page.css('color', 'red');

    // Handle blur on translator
    $translator.on('blur', function () {
      // if ($(this).val() === "") {
      $translator.hide();
      // }
    });
    // end of Google Translator

    /**
     * start of header Search Form
     */
    const $searchBtn = $('.search-btn');
    const $searchForm = $('.search-btn .search-form');
    const $searchField = $('.search-btn .search-field');

    $searchBtn.on('click', function (event) {
      event.preventDefault();
      $searchForm.fadeToggle();
      $searchField.focus();
    });

    $searchField.on('blur', function () {
      if ($(this).val() === "") {
        $searchForm.fadeToggle();
      }
    });
    // end of header Search Form

    // start of spectagram
    // var spectragramComplete = function () {
    var spectra = {
      instaToken: '9448460219.0d61304.de737249603f46ec9356ff60f0aabdcf',
      instaID: '0d61304f0d4242a9b55e5c1378ba869e',

      init: function () {
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

    const $contentArea = $('.page-template .site-content .content-area');

    // Add full-width
    function fullWidth() {
      $contentArea.addClass('full-width');
    }

    // Create the dropdown base
    if ($('.widget_nav_menu').length) {
      $('<select />').appendTo('.entry-title');
      // $('.page-template .site-content .content-area').css({
      //   'flex': '2 0 100%',
      //   'max-width': '100%'
      // });

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
      }); // end of linking
    } else {
      // style pgs w/o sidebars as full-width
      fullWidth();
    } //end of if statement
  }); // end of doc ready
})(jQuery);