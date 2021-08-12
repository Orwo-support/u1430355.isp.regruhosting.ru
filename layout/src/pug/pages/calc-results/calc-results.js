import $ from "jquery";

$(document).ready(() => {
    if ($('.page-calc-results')[0]) {
        const link = $('#calcSpecificationShareLink'),
            msg = $('#calcSpecificationShareMsg');

        $(link).on('click', handleClickOnShareLink);

        function handleClickOnShareLink (e) {
            e.preventDefault();

            $(msg).addClass('visible');
            setTimeout(() => $(msg).removeClass('visible'), 10000);

            const tmpTextarea = $('<textarea>'),
                fileShareLink = $(this).attr('href');

            $('body').append(tmpTextarea);
            tmpTextarea.val(fileShareLink).select();
            document.execCommand("copy");
            tmpTextarea.remove();
        }

        $(msg).hover(handleOnMsg, handleOutMsg);

        function handleOnMsg () {
            $(link).addClass('inactive');
        }

        function handleOutMsg () {
            $(link).removeClass('inactive');
        }
    }
});