// Masonry 

// // Works!!
// jQuery(window).on('load', function(){ var $ = jQuery;
// var $container = $('#masonry-container');
//     $container.masonry({
//           isFitWidth: true,           
//           itemSelector: '.photobox'
//     });
// });

// doesn't work??
// $('#masonry-container').masonry({
//   // columnWidth: 250,
//   // gutter: 15,
//   isFitWidth: true,
//   itemSelector: '.photobox'
// });

//////////////////////////////////////

/**
 * Infinite Scroll + Masonry + ImagesLoaded
 */
(function() {

    // Main content container
    var $container = jQuery('#masonry-container');

    // Masonry + ImagesLoaded
    $container.imagesLoaded(function(){
        $container.masonry({
            // selector for entry content
            itemSelector: '.photobox',
            isFitWidth: true
        });
    });

    // Infinite Scroll
    $container.infinitescroll({        
        navSelector  : ".wp-prev-next",        
        nextSelector : ".wp-prev-next .next a:first",
        itemSelector : ".post",
        bufferPx: 50,
        // animate: true,
        loading: {
            finishedMsg: 'No more items to load',    
            msgText: 'Loading...',
            speed: 0,
            debug: false,
            img: '/wp-content/themes/Paradox/assets/images/loader-black.gif',          
            }        
        // animate: false,
        // bufferPx: 80,
        // extraScrollPx: 0,                
        },        

        // Trigger Masonry as a callback
        function( newElements ) {
            // hide new items while they are loading
            var $newElems = jQuery( newElements ).css({ opacity: 0 });
            // ensure that images load before adding to masonry layout
            $newElems.imagesLoaded(function(){
                // show elems now they're ready
                $newElems.animate({ opacity: 1 });
                $container.masonry( 'appended', $newElems, true );
            });

    });
    
    /**
     * OPTIONAL!
     * Load new pages by clicking a link
     */

    // Pause Infinite Scroll
    // $(window).unbind('.infscr');

    // // Resume Infinite Scroll
    // $('.nav-previous a').click(function(){
    //     $container.infinitescroll('retrieve');
    //     return false;
    // });

})();