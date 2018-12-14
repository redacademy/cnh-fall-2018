(function($) {
  $(function() {
    const $carousel = $('.main-carousel').flickity({
      cellAlign: 'left',
      constain: true
    });

    const flkty = $carousel.data('flickity');
    const $roomsList = $('.rooms-carousel-list');
    const $roomsListItem = $roomsList.find('li');

    $roomsListItem.eq(0).addClass('is-selected');

    $carousel.on('select.flickity', function() {
      $roomsListItem.filter('.is-selected').removeClass('is-selected');
      $roomsListItem.eq(flkty.selectedIndex).addClass('is-selected');
    });

    $roomsList.on('click', 'li', function() {
      let index = $(this).index();
      $carousel.flickity('select', index);
    });

    console.log($carousel);
  }); // end of doc ready
})(jQuery);
