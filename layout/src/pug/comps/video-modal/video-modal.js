import $ from "jquery";

$(document).ready(function () {
    if($('#videoModalContent')[0]) {
        let paddingRightWidth,
            showVideoMarker = true;

        setTimeout(
            () => paddingRightWidth = getScrollWidth() + 'px',
            3500
        )

        $('.feedback__pic').each(
            (i, el) =>
                $(el).click(handleClickOnVideoPrevPicture)
        );

        function handleClickOnVideoPrevPicture() {
            let src = $(this).data('videoLink'),
                frame = document
                    .querySelector('#videoModalContent iframe');

            $(SPINNER).addClass('visible');
            frame.src = src;
            frame.onload = showVideModal;
        }

        function toggleVideoBack (flag) {
            flag
                ? $('#videoModalBackground').addClass('visible')
                : $('#videoModalBackground').removeClass('visible');
        }

        function toggleVideoContainer (flag) {
            flag
                ? $('#videoModalContent').addClass('visible')
                : $('#videoModalContent').removeClass('visible');
        }

        function toggleBodyFixed (flag) {
            flag
                ? $('body').addClass('modal-open')
                : $('body').removeClass('modal-open');

            if (isLaptop) {
                flag
                    ? $('body').css('paddingRight', paddingRightWidth)
                    : $('body').css('paddingRight', '0px');
            }
        }

        function fixHeader (flag) {
            if (isLaptop) {
                flag
                    ? $('header.header').css({
                        'paddingRight': 'calc(5vw + ' + paddingRightWidth + ')',
                        'transition': 'none',
                    })
                    : $('header.header').css({
                        'paddingRight': '5vw',
                    });
            }
        }

        $('#videoBtnClose').on(
            'click',
            closeVideModal
        );

        $('#videoModalBackground').on(
            'click',
            closeVideModal
        );

        function showVideModal () {
            if (showVideoMarker) {
                $(SPINNER).removeClass('visible');
                toggleVideoBack(true);
                toggleVideoContainer(true);
                toggleBodyFixed(true);
                fixHeader(true);
            } else {
                showVideoMarker = true;
            }
        }

        function closeVideModal () {
            toggleVideoBack();
            toggleVideoContainer();
            toggleBodyFixed();
            fixHeader();

            showVideoMarker = false;

            $('#videoModalContent iframe').attr('src', '');
        }
    }
});