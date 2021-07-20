import $ from "jquery";
import IMask from "imask";

$(document).ready(function () {
    // Show order form
    $(() => $('.show-order-form')
        .toArray()
        .forEach(addHandlerClickToBtnShowOrderForm));

        function addHandlerClickToBtnShowOrderForm(el) {
            $(el).on(
                'click',
                showOrderSection
            );
        }

        function showOrderSection() {
            let specification = $('.calc__specification');
            let offsetTop = $(specification).offset().top;
            let sectionHeight = $(specification).innerHeight();
            let offsetIdx = getScreenType() === 'sm'
                ? -30 // fix for mobile screens
                : (getScreenType() === 'md' || getScreenType() === 'lg')
                    ? -70 // fix for tablet and desktop screens
                    : 0;

            let scrollTo = offsetTop + sectionHeight + offsetIdx;

            $('body,html').animate({scrollTop: scrollTo}, 500);
        }

    // Add mask to the calc phone input
    let maskCalcPhone;

    if ($('#calcFormPhone')[0] !== undefined) {
        let phone = document.getElementById('calcFormPhone');
        let controller = $(phone).closest('.controller');

        maskCalcPhone = IMask(
            phone,
            {
                mask: '+{7} 000 000 00 00',
            }
        );

        // Let's add handler function on phone change
        maskCalcPhone.on("accept", () => calcPhoneHandler(maskCalcPhone, controller));
    }

        function calcPhoneHandler(mask, controller) {
            if (validPhone(mask.unmaskedValue)) {
                $(controller).addClass('valid');
                $(controller).removeClass('invalid');
                $(controller).addClass('checked');
            } else {
                if ($(controller).hasClass('checked')) {
                    $(controller).addClass('invalid');
                    $(controller).removeClass('valid');
                }
            }

            if(mask.unmaskedValue === '') {
                $(controller).removeClass('checked');
            }
        }

        // Handle unfocused phone input
        $('#calcFormPhone').blur(function () {
            checkCalcPhone();
        });

        // Show error on input when user scroll on it focused
        $(window).scroll(function () {
            if ($('#calcFormPhone').is(':focus')) {
                checkCalcPhone();
            }
        });

        function checkCalcPhone () {
            let phone = document.getElementById('calcFormPhone');
            let controller = $(phone).closest('.controller');
            let validator = $(controller).children('.validator__cross');
            let value = $(phone).val();

            if (value !== '') {
                if (!validPhone(value.replace(/\s+|\+/g, ''))) {
                    animationFormError(
                        controller,
                        validator
                    );
                }
            }
        }

    // Submit calc order form
    $(() => $('.form-order__submit')
        .toArray()
        .forEach(addHandlerClickOnBtnOrderForm));

        function addHandlerClickOnBtnOrderForm(el) {
            $(el).on(
                'click',
                handleSubmitForm
            );
        }

        function handleSubmitForm() {
            let phone = document.getElementById('calcFormPhone');
            let controller = $(phone).closest('.controller');
            let validator = $(controller).children('.validator__cross');
            let phoneValue = $(phone).val();
            let calcFormValid = true;

            if (phoneValue !== '') {
                if (!validPhone(phoneValue.replace(/\s+|\+/g, ''))) {
                    calcFormValid = false;
                    animationFormError(
                        controller,
                        validator
                    );
                }

            } else {
                calcFormValid = false;
                animationFormError(
                    controller,
                    validator
                );
            }

            if (calcFormValid) {
                submitCalcForm();
            }
        }

        function submitCalcForm() {
            // Reset form data
            $('#calcForm .controller').removeClass('valid input checked');
            $('#calcFormName').val('');
            $('#calcFormMail').val('');
            $('#calcFormMessage').val('');
            maskCalcPhone.unmaskedValue = '';
            $('#calcModal .modal__close').focus();


            // !!!!!!!!!!!!!!!!!!!!!!!   Send data to server

            // Show modal if form has send finished well
            modalOpen($('#calcForm'));
        }

    // Toggle visible for download formats dropdown
    $(() => $('.calc__specification-result-download')
        .toArray()
        .forEach(addHandlerToSpecificationDownBtn));

        function addHandlerToSpecificationDownBtn(el) {
            $(el).on(
                'click',
                handlerClickOnSpecificationDownBtn
            );
        }

        function handlerClickOnSpecificationDownBtn() {
            if (isSmallScreen()) {
                $(this).toggleClass('is-hover');
            }
        }

        function isSmallScreen() {
            return getScreenType() === 'sm' || getScreenType() === 'md';
        }

        $(() => $(document).on(
            'click',
            hideSpecificationFormatDrop
        ));

        function hideSpecificationFormatDrop(evt) {
            let btn = $('.calc__specification-result-download');
            let targetEl = evt.target;
            let isPrent = $(targetEl).closest(btn)[0];

            if (isPrent === undefined && isSmallScreen()) {
                $(btn).removeClass('is-hover');
            }
        }
});
