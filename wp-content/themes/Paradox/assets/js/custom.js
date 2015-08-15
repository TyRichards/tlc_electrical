jQuery(window).on('load', function(){ var $ = jQuery;
var $container = $('#masonry-container');
    $container.masonry({
          isFitWidth: true,           
          itemSelector: '.photobox'
    });
});

// $(function(){
//   $('#masonry-container').masonry({
//     // options
//     itemSelector : '.photobox',
//     isFitWidth: true,  
//     // columnWidth : 250
//   });
// });

// $('#masonry-container').masonry({
//   // columnWidth: 250,
//   // gutter: 15,
//   isFitWidth: true,
//   itemSelector: '.photobox'
// });