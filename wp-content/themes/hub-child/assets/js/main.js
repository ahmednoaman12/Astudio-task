(function ($) {


$(document).ready(function() {

    var swiper = new Swiper(".mySwiper", {
        effect: "fade",
        pagination: {
            el: ".swiper-pagination",
            type: "fraction",
        },
        navigation: {
            nextEl: ".swiper-button-next0",
            prevEl: ".swiper-button-prev0",
        },
    });

    
    var containerslides = $('.containerslide');

    if (containerslides.length) {
        containerslides.each(function() {
            var containerslide = $(this);

            // Support small text - copy to fill screen width
            if (containerslide.find('.scrolling-text').outerWidth() < $(window).width()) {
                var windowToScrolltextRatio = Math.round($(window).width() / containerslide.find('.scrolling-text').outerWidth()),
                    scrollTextContent = containerslide.find('.scrolling-text .scrolling-text-content').text(),
                    newScrollText = '';
                for (var i = 0; i < windowToScrolltextRatio; i++) {
                    newScrollText += ' ' + scrollTextContent;
                }
                containerslide.find('.scrolling-text .scrolling-text-content').text(newScrollText);
            }

            // Init variables and config
            var scrollingText = containerslide.find('.scrolling-text'),
                scrollingTextWidth = scrollingText.outerWidth(),
                scrollingTextHeight = scrollingText.outerHeight(true),
                startLetterIndent = parseInt(scrollingText.find('.scrolling-text-content').css('font-size'), 10) / 4.8,
                startLetterIndent = Math.round(startLetterIndent),
                scrollAmountBoundary = Math.abs($(window).width() - scrollingTextWidth),
                transformAmount = 0,
                leftBound = 0,
                rightBound = scrollAmountBoundary,
                transformDirection = containerslide.hasClass('left-to-right') ? -1 : 1,
                transformSpeed = 200;

            // Read transform speed
            if (containerslide.attr('speed')) {
                transformSpeed = containerslide.attr('speed');
            }
        
            // Make scrolling text copy for scrolling infinity
            containerslide.append(scrollingText.clone().addClass('scrolling-text-copy'));
            containerslide.find('.scrolling-text').css({'position': 'absolute', 'left': 0});
            containerslide.css('height', scrollingTextHeight);
        
            var getActiveScrollingText = function(direction) {
                var firstScrollingText = containerslide.find('.scrolling-text:nth-child(1)');
                var secondScrollingText = containerslide.find('.scrolling-text:nth-child(2)');
        
                var firstScrollingTextLeft = parseInt(containerslide.find('.scrolling-text:nth-child(1)').css("left"), 10);
                var secondScrollingTextLeft = parseInt(containerslide.find('.scrolling-text:nth-child(2)').css("left"), 10);
        
                if (direction === 'left') {
                    return firstScrollingTextLeft < secondScrollingTextLeft ? secondScrollingText : firstScrollingText;
                } else if (direction === 'right') {
                    return firstScrollingTextLeft > secondScrollingTextLeft ? secondScrollingText : firstScrollingText;
                }
            }
        
            $(window).on('wheel', function(e) {
                var delta = e.originalEvent.deltaY;
                
                if (delta > 0) {
                    // going down
                    transformAmount += transformSpeed * transformDirection;
                    containerslide.find('.scrolling-text .scrolling-text-content').css('transform', 'skewX(10deg)');
                }
                else {
                    transformAmount -= transformSpeed * transformDirection;
                    containerslide.find('.scrolling-text .scrolling-text-content').css('transform', 'skewX(-10deg)');
                }
                setTimeout(function(){
                    containerslide.find('.scrolling-text').css('transform', 'translate3d('+ transformAmount * -1 +'px, 0, 0)');
                }, 10);
                setTimeout(function() {
                    containerslide.find('.scrolling-text .scrolling-text-content').css('transform', 'skewX(0)');
                }, 500)
        
                // Boundaries
                if (transformAmount < leftBound) {
                    var activeText = getActiveScrollingText('left');
                    activeText.css({'left': Math.round(leftBound - scrollingTextWidth - startLetterIndent) + 'px'});
                    leftBound = parseInt(activeText.css("left"), 10);
                    rightBound = leftBound + scrollingTextWidth + scrollAmountBoundary + startLetterIndent;
        
                } else if (transformAmount > rightBound) {
                    var activeText = getActiveScrollingText('right');
                    activeText.css({'left': Math.round(rightBound + scrollingTextWidth - scrollAmountBoundary + startLetterIndent) + 'px'});
                    rightBound += scrollingTextWidth + startLetterIndent;
                    leftBound = rightBound - scrollingTextWidth - scrollAmountBoundary - startLetterIndent;
                }
            });
        })
    }
});

})(jQuery);