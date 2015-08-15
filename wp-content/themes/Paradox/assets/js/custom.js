jQuery(window).on('load', function(){ var $ = jQuery;
var $container = $('#masonry-container');
    $container.masonry({
          isFitWidth: true,           
          itemSelector: '.photobox'
    });
});

// $('#masonry-container').masonry({
//   // columnWidth: 250,
//   // gutter: 15,
//   isFitWidth: true,
//   itemSelector: '.photobox'
// });