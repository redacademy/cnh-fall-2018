(function($) {
  $(function() {
    // const $carousel = $('.main-carousel').each(function() {
    //   $(this).flickity({
    //     cellAlign: 'left',
    //     constain: true
    //   });
    // });
    // const $roomsList = $('.rooms-carousel-list');
    // const $roomsListItem = $roomsList.find('li');
    // $roomsListItem.eq(0).addClass('is-selected');

    $('.rooms-carousel-list li').on('click', function() {
      let roomId = $(this).attr('data-id');
      console.log(roomId);
    });
  }); // end of doc ready
})(jQuery);
