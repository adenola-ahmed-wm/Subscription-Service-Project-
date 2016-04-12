/**
 * Created by session2 on 1/27/16.
 */
( function( $ ) {
    $( document ).ready(function() {
        $('#cssmenu').prepend('<div id="menu-button">Menu</div>');
        $('#cssmenu #menu-button').on('click', function(){
            var menu = $(this).next('ul');
            if (menu.hasClass('open')) {
                menu.removeClass('open');
            }
            else {
                menu.addClass('open');
            }
        });
    });
} )( jQuery );
var currentIndex = 0,
    items = $('.container div'),
    itemAmt = items.length;

function cycleItems() {
    var item = $('.container div').eq(currentIndex);
    items.hide();
    item.css('display','inline-block');
}

var autoSlide = setInterval(function() {
    currentIndex += 1;
    if (currentIndex > itemAmt - 1) {
        currentIndex = 0;
    }
    cycleItems();
}, 3000);

$('.next').click(function() {
    clearInterval(autoSlide);
    currentIndex += 1;
    if (currentIndex > itemAmt - 1) {
        currentIndex = 0;
    }
    cycleItems();
});

$('.prev').click(function() {
    clearInterval(autoSlide);
    currentIndex -= 1;
    if (currentIndex < 0) {
        currentIndex = itemAmt - 1;
    }
    cycleItems();
});