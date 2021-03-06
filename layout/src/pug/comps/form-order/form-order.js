import $ from "jquery";
import IMask from 'imask';

$(document).ready(function () {

    let maskFormOrder;
    const controller = $('#phone').closest('.controller');
    const validator = $('#orderForm .validator__cross');

    function checkPhone () {
        let phone = $('#phone').val();

        if (phone !== '') {
            if (!validPhone(phone.replace(/\s+|\+/g, ''))) {
                animationFormError(controller, validator);
            }
        }
    }

    // It's the handler of the phone value
    const el = document.getElementById('phone');

    if (el) {
        const maskOptions = {
            mask: '+{7} 000 000 00 00',
        };
        maskFormOrder = IMask(el, maskOptions);

        // Let's add handler function on phone change
        maskFormOrder.on("accept", phoneHandler);

        function phoneHandler() {
            if (validPhone(maskFormOrder.unmaskedValue)) {
                $(controller).addClass('checked valid');
                $(controller).removeClass('invalid');
            } else {
                if ($(controller).hasClass('checked')) {
                    $(controller).addClass('invalid');
                    $(controller).removeClass('valid');
                }
            }

            if (maskFormOrder.unmaskedValue === '') {
                $(controller).removeClass('checked');
            }
        }
    }

    // Handle unfocused phone input
    $('#phone').blur(function () {
        checkPhone();
    });

    // Show error on input when user scroll on it focused
    $(window).scroll(function () {
        if ($('#phone').is(':focus')) {
            checkPhone();
        }
    });

    $('#orderForm').on('submit', function(e) {
        e.preventDefault();

        let phone = $('#phone').val();
        let isFormValid = true;

        if (phone !== '') {
            if (!validPhone(phone.replace(/\s+|\+/g, ''))) {
                isFormValid = false;
                animationFormError(controller, validator);
            }

        } else {
            isFormValid = false;
            animationFormError(controller, validator);
        }

        if (isFormValid) {
            // console.log($(this).serializeArray());

            $(SPINNER).addClass('visible');

            grecaptcha.ready(() => {
                grecaptcha.execute(
                    '6LdiYokcAAAAAOcpNk3xoD062wXPBX_5i8Y0dNJx',
                    { action: 'content_form' }
                ).then(token => {
                    $.post(
                        '/utilities/check-recaptcha-token.php',
                        { token: token },
                        "json"
                    ).done(response => {
                        const reCaptchaData = JSON.parse(response);

                        if (reCaptchaData.success && reCaptchaData.score > 0.6) {
                            let input = document.createElement('input');

                            input.name="score";
                            input.type = "hidden";
                            input.value = reCaptchaData.score;

                            this.appendChild(input);

                            $.post(
                                "/utilities/inc-handle-order-form.php",
                                $(this).serializeArray(),
                                "json"
                            ).done(response => {
                                // console.log(JSON.parse(response));

                                if (JSON.parse(response).IS_ERRORS) {
                                    alert('?????????????????? ???? ????????????????????. ?????????????????? ????????????. ???????????????????? ?????????????? ??????????.');
                                } else {
                                    $(SPINNER).removeClass('visible');

                                    setTimeout(() => {
                                        $(controller).removeClass('valid input checked');
                                        maskFormOrder.unmaskedValue = '';
                                        $(this).find('#name').val('');
                                        $(this).find('#message').val('');
                                        $('#orderModal .modal__close').focus();
                                        modalOpen(this);
                                    }, 400);
                                }
                            }).fail(err => {
                                alert('?????????????????? ???? ????????????????????. ?????????????????? ????????????. ???????????????????? ?????????????? ??????????.');
                                console.log('Request error on order form!');
                                console.log(err);
                            }).always(() => $(SPINNER).removeClass('visible'));
                        } else {
                            alert('?? ?????????????????? ?????????????? ???????????????????? ?????? ?????? ????????????. ?????? ???????????????? ???????????? ?????????????????????????? ???????????????? ?? ?????????????????? ??????????????.');
                        }
                    });
                });
            });
        }
    });
});