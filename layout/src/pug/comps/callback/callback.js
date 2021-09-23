import $ from "jquery";
import IMask from 'imask';

$(document).ready(function () {

    // It's the handler for the phone value at the callback form
    const callbackPhone = document.getElementById('callbackPhone');
    const callbackPhoneController = $('#callbackPhone').closest('.controller');
    const callbackPhoneValidator = $('#callbackForm .validator__cross');

    let maskCallback;

    function checkCallbackPhone (phone) {
        if (phone !== '') {
            if (!validPhone(phone.replace(/\s+|\+/g, ''))) {
                animationFormError(
                    callbackPhoneController,
                    callbackPhoneValidator
                );
            }
        }
    }

    if (callbackPhone) {

        const maskOptions = {
            mask: '+{7} 000 000 00 00',
        };
        maskCallback = IMask(callbackPhone, maskOptions);

        // Let's add handler function on phone change
        maskCallback.on("accept", phoneHandler);

        function phoneHandler() {
            if (validPhone(maskCallback.unmaskedValue)) {
                $(callbackPhoneController).addClass('valid');
                $(callbackPhoneController).removeClass('invalid');
                $(callbackPhoneController).addClass('checked');
            } else {
                if ($(callbackPhoneController).hasClass('checked')) {
                    $(callbackPhoneController).addClass('invalid');
                    $(callbackPhoneController).removeClass('valid');
                }
            }

            if(maskCallback.unmaskedValue === '') {
                $(callbackPhoneController).removeClass('checked');
            }
        }
    }

    // Handle unfocused phone input
    $('#callbackPhone').blur(function () {
        checkCallbackPhone($('#callbackPhone').val());
    });

    // Show error on input when user scroll on it focused
    $(window).scroll(function () {
        if ($('#callbackPhone').is(':focus')) {
            checkCallbackPhone($('#callbackPhone').val());
        }
    });

    $('#callbackForm').on('submit', function(e) {
        e.preventDefault();

        let phoneValue = $('#callbackPhone').val();
        let callbackFormValid = true;

        if (phoneValue !== '') {
            if (!validPhone(phoneValue.replace(/\s+|\+/g, ''))) {
                callbackFormValid = false;
                animationFormError(
                    callbackPhoneController,
                    callbackPhoneValidator
                );
            }

        } else {
            callbackFormValid = false;
            animationFormError(
                callbackPhoneController,
                callbackPhoneValidator
            );
        }

        if (callbackFormValid) {
            // console.log($(this).serializeArray());

            $(SPINNER).addClass('visible');

            grecaptcha.ready(() => {
                grecaptcha.execute(
                    '6LdJnQ8cAAAAAB_HhGL-DIeud36yN9j-mGuwMBKV',
                    { action: 'callback_form' }
                ).then(token => {
                    $.post(
                        '/utilities/check-recaptcha-token.php',
                        { token: token },
                        "json"
                    ).done(response => {
                        const reCaptchaData = JSON.parse(response);

                        console.log(reCaptchaData);

                        if (reCaptchaData.success && reCaptchaData.score > 0.8) {
                            $.post(
                                this.action,
                                $(this).serializeArray(),
                                "json"
                            ).done(response => {
                                // console.log(JSON.parse(response));

                                if (JSON.parse(response).IS_ERRORS) {
                                    alert('Сообщение не отправлено. Произошла ошибка. Попробуйте немного позже.');
                                } else {
                                    $(SPINNER).removeClass('visible');

                                    setTimeout(() => {
                                        $(callbackPhoneController).removeClass('valid input checked');
                                        maskCallback.unmaskedValue = '';
                                        $('#calbackModal .modal__close').focus();
                                        modalOpen(this);
                                    }, 400);
                                }
                            }).fail(err => {
                                alert('Сообщение не отправлено. Произошла ошибка. Попробуйте немного позже.');
                                console.log('Request error on callback form!');
                                console.log(err);
                            }).always(() => $(SPINNER).removeClass('visible'));
                        } else {
                            alert('К сожалению система определила Вас как робота. Для отправки данных перезагрузите страницу и повторите попытку.');
                        }
                    });
                });
            });
        }
    });
});