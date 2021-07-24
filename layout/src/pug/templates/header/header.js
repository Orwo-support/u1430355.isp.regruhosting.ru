import $ from "jquery";

$(document).ready(function () {

    // It's listening hover for desktop viewport size
    $('header .dropdown').each(function (i, el) {
        function handlerIn () {
            if (isLaptop) {
                $('#navLine').addClass('visible');
                $('#header').addClass('hover-with-quiz');
            }
        }

        function handlerOut () {
            if (isLaptop) {
                $('#navLine').removeClass('visible');
                $('#header').removeClass('hover-with-quiz');
            }
        }

        $(el).hover(handlerIn, handlerOut);
    });

    $('#navToggler').on('click', function () {
        $('#header').toggleClass('nav-visible hover-with-quiz');
        $('.nav__item.dropdown').removeClass('drop-visible');
    });

    $('.nav__item.dropdown').on(
        'click',
        e => {
            let el = $(e.target).hasClass('dropdown')
                ? e.target
                : $(e.target).parent('.dropdown')[0];

            if (el && (getScreenType() === 'md' || getScreenType() === 'sm')) {
                $(el).toggleClass('drop-visible');
            }
        }
    );

    $('.nav__points-btn').on('click', function (e) {
        e.preventDefault();
    });

    let firstNavPoint = $('#header .nav__item.dropdown .cursor-default')[0];
    $(firstNavPoint).on(
        'click',
        e => e.preventDefault()
    );

    $('#header .nav__dropitem_caption a')
        .toArray()
        .forEach(stopHeaderCaptionLink);

    function stopHeaderCaptionLink(el) {
        $(el).on(
            'click',
            e => e.preventDefault()
        );
    }

});
