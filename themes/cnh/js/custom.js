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
          .find('.side-btn')
          .toggleClass('active');
        $('.side-nav .accordion-content')
          .not($(this).next())
          .slideUp('fast')
          .removeClass('open');
        $('.side-nav .accordion-toggle')
          .not($(this))
          .removeClass('active-tab')
          .find('.side-btn')
          .removeClass('active');
      }); // end of side menu

    /**
     * start of Google Translate
     */
    $('.goog-te-banner').hide();

    const $body = $('body');
    const $translateBtn = $('.translate-icon');
    const $translator = $('#google_language_translator');
    const translatorSel = 'select.goog-te-combo';
    const $translateLang = $('.translate-lang p span');

    // const $translatorOptn = $('.goog-te-combo option').val();

    // Handle click on toggle translate button
    $translateBtn.on('click', function () {
      $translator.show().focus();
    });

    // Handle change on translator
    $body.on('change', translatorSel, function () {
      let str = $(this)
        .val()
        .substring(0, 2);
      console.log(str);

      if (str !== '') {
        $translateLang.html(str);
        console.log('On change select working.');
      }

      $translator.hide();
      console.log('On change working.');
    });

    // Handle blur on translator
    $body.on('blur', translatorSel, function () {
      $translator.hide();
      console.log('The blur works!');
    });
    // end of Google Translator

    /**
     * start of header Search Form
     */
    const $searchBtn = $('.search-btn');
    const $searchForm = $('.search-btn .search-form');
    const $searchField = $('.search-btn .search-field');

    $searchBtn.on('click', function () {
      $searchForm.fadeToggle();
      $searchField.focus();
    });

    $searchField.on('blur', function () {
      if ($(this).val() === '') {
        $searchForm.fadeToggle();
      }
    });
    // end of header Search Form

    // start of spectagram
    // var spectragramComplete = function () {
    var spectra = {
      instaToken: '4212657349.c812fe1.8477907309a64d23ab54271059b71ff5',
      instaID: 'c812fe1508444f2cb56abd7569401e7e',

      init: function () {
        $.fn.spectragram.accessData = {
          accessToken: this.instaToken,
          clientID: this.instaID
        };

        $('.instagram-container').spectragram('getUserFeed', {
          complete : myCallbackFunc(),
          max: 2,
          size: 'medium',
          wrapEachWith: '<div class="photo">'
        });
      }
    };
    spectra.init();
    // end of spectrogram

    const $sideBar = $('.page-template .site-content .widget-sidebar');
    const $contentArea = $('.page-template .site-content .content-area');

    // remove sidebar on pg
    function breadNoSidebar() {
      $sideBar.css('display', 'none');
      $contentArea.css('margin', '0 auto');
      console.log('sidebar menu does not exist');
      $('.content-area').css('max-width', '70%');
      $('.page-template-page-no-sidebar .content-area').css(
        'max-width',
        '100%'
      );
      $('.page-template-default .site-content .widget-sidebar').css(
        'display',
        'none'
      );
    }

    // Create the dropdown base
    if ($('.widget_nav_menu').length) {
      $('<select />').appendTo('.entry-title');
      $('<select />').appendTo('.header-dropdown');

      // Create default option "Go to..."
      $('<option />', {
          selected: 'selected',
          value: '',
          text: 'Go to...'
        })
        .appendTo('.entry-title select')
        .appendTo('.header-dropdown select');

      // Populate dropdown with menu items
      $('.widget-sidebar a').each(function () {
        var el = $(this);
        $('<option />', {
            value: el.attr('href'),
            text: el.text()
          })
          .appendTo('.entry-title select')
          .appendTo('.header-dropdown select');
      }); // end of dropdown nav

      $('.entry-title select').selectric();
      $('.header-dropdown select').selectric();

      $('.entry-title select').on('change', function () {
        let selected = $(this).val();

        window.location.replace(selected);
      }); // end of linking

      $('.header-dropdown select').on('change', function () {
        let selected = $(this).val();

        window.location.replace(selected);
      }); // end of linking
    } // end of if stmt
    else {
      breadNoSidebar();
    } // end else stmt

    $('.wpcf7-form').on('submit', function () {
      $('.wpcf7-form').slideUp('slow');
      $('.entry-title').slideUp('slow');
      $('.received').toggle();
    });
  }); // end of doc ready
})(jQuery);