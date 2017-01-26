/**
 * Created by Max on 21.01.2017.
 */
$( document ).ready(function() {

    $('#button-menu').on('click', function () {
        $('.hide-nav-bar').slideToggle(500).css('display' , 'flex');
    });

$('.grid').masonry({
    // options
    itemSelector: '.grid-item',
    columnWidth: 200,
    fitWidth: true
});


$('.multiple-items').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 8,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});
});
