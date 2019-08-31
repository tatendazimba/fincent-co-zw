$(document).ready(function(){
    $('.horizontal-scroll').slick({
        variableWidth: true,
        arrows: false,
        swipeToSlide: true,
        waitForAnimate: false,
        slidesToScroll: 8,
        useCSS: false,
        useCSS: false,
    });

    const $carousel = $('.how-to-slider');

    const settings = {
        dots: false,
        arrows: false,
        slide: '.slide',
        slidesToShow: 1,
        centerMode: true,
        centerPadding: '15%',
    };

    function setSlideVisibility() {
        //Find the visible slides i.e. where aria-hidden="false"
        var visibleSlides = $carousel.find('.slide[aria-hidden="false"]');
        //Make sure all of the visible slides have an opacity of 1
        $(visibleSlides).each(function() {
            $(this).css('opacity', 1);
        });

        //Set the opacity of the first and last partial slides.
        // $(visibleSlides).first().prev().css('opacity', 0);
    }

    $carousel.slick(settings);
    $carousel.slick('slickGoTo', 1);
    setSlideVisibility();

    $carousel.on('afterChange', function() {
        setSlideVisibility();
    });

    $("#previous").click(function () {
       $carousel.slick('slickPrev');
    });

    $("#next").click(function () {
       $carousel.slick('slickNext');
    });
});
