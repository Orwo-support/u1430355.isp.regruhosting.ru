import $ from "jquery";
import IMask from 'imask';

$(document).ready(function () {
    const setOrderForm = $('#setOrderForm'),
        setOrderFormName = $('#setOrderFormName'),
        setOrderFormPhone = $('#setOrderFormPhone'),
        setOrderFormMessage = $('#setOrderFormMessage'),
        setOrderFormController = $(setOrderFormPhone).closest('.controller'),
        setOrderFormValidator = $('#setOrderForm .validator__cross'),
        setOrderFormModalResult = $('#setOrderFormModalResult');

    let maskSetOrderFormPhone;

    $('.show-set-order-form')
        .toArray()
        .forEach(el => $(el).click(toggleSetOrderForm));

    $('.btn-set-order-modal-close')
        .toArray()
        .forEach(el => $(el).click(toggleSetOrderForm));

    $('#setOrderFormModal')
        .toArray()
        .forEach(el => $(el).on(
            'click',
            evt => {
                if ($(evt.target).hasClass('order-form-modal')) {
                    toggleSetOrderForm();
                }
            }
        ));

    $('#setOrderFormModalResult')
        .toArray()
        .forEach(el => $(el).on(
            'click',
            toggleSetOrderForm
        ));

    function toggleSetOrderForm (evt) {
        if (evt) evt.preventDefault();

        const modal = $('#setOrderFormModal'),
            form = $('#setOrderFormContent'),
            resultModal = $('#setOrderFormModalResult'),
            body = $('body'),
            header = $('#header'),
            scrollWidth = getScrollWidth() + 'px';

        if (isSetOrderModalVisible()) {
            $(form).removeClass('visible');
            $(resultModal).removeClass('visible');
            setTimeout(() => {
                $(body).removeClass('modal-open');
                $(header).removeClass('quiz-open');
                $(modal).removeClass('visible');
                fixScrollWidth(scrollWidth);
                resetSetOrderForm();
            }, 100);
        } else {
            $(body).addClass('modal-open');
            $(header).addClass('quiz-open')
            $(modal).addClass('visible');
            fixScrollWidth(scrollWidth);
            setTimeout(() => $(form).addClass('visible'), 50);
        }
    }

    function fixScrollWidth (scrollWidth) {
        if (isSetOrderModalVisible() && isLaptop) {
            $('body').css('paddingRight', scrollWidth);

            $('header.header').css({
                'paddingRight': 'calc(5vw + ' + scrollWidth + ')',
                'transition': 'background-color .3s linear, box-shadow .3s linear',
            });
        } else if (isLaptop) {
            $('body').css('paddingRight', '0');
            $('header.header').attr('style', '');
        }
    }

    function isSetOrderModalVisible () {
        return $('#setOrderFormModal').hasClass('visible');
    }

    function resetSetOrderForm () {
        $(setOrderFormName).val('');
        maskSetOrderFormPhone.unmaskedValue = '';
        $(setOrderFormMessage).val('');
        $(setOrderFormController).removeClass('valid input checked');
        $('#setOrderFormContent').attr('style', '');
    }

    function checkSetOrderFormPhone () {
        let phone = $(setOrderFormPhone).val();

        if (phone !== '') {
            if (!validPhone(phone.replace(/\s+|\+/g, ''))) {
                animationFormError(
                    setOrderFormController,
                    setOrderFormValidator
                );
            }
        }
    }

    // It's the handler of the phone value
    const setOrderFormPhoneEl = document
        .getElementById('setOrderFormPhone');

    if (setOrderFormPhoneEl) {
        const maskOptions = {
            mask: '+{7} 000 000 00 00',
        };
        maskSetOrderFormPhone = IMask(setOrderFormPhoneEl, maskOptions);

        // Let's add handler function on phone change
        maskSetOrderFormPhone.on("accept", phoneHandler);

        function phoneHandler() {
            if (validPhone(maskSetOrderFormPhone.unmaskedValue)) {
                $(setOrderFormController).addClass('checked valid');
                $(setOrderFormController).removeClass('invalid');
            } else {
                if ($(setOrderFormController).hasClass('checked')) {
                    $(setOrderFormController).addClass('invalid');
                    $(setOrderFormController).removeClass('valid');
                }
            }

            if (maskSetOrderFormPhone.unmaskedValue === '') {
                $(setOrderFormController).removeClass('checked');
            }
        }
    }

    // Handle unfocused phone input
    $(setOrderFormPhone).blur(checkSetOrderFormPhone);


    $(setOrderForm).on('submit', function(e) {
        e.preventDefault();

        let phone = $(setOrderFormPhone).val();
        let isFormValid = true;

        if (phone !== '') {
            if (!validPhone(phone.replace(/\s+|\+/g, ''))) {
                isFormValid = false;
                animationFormError(
                    setOrderFormController,
                    setOrderFormValidator
                );
            }
        } else {
            isFormValid = false;
            animationFormError(
                setOrderFormController,
                setOrderFormValidator
            );
        }

        if (isFormValid) {
            //console.log($(this).serializeArray());

            $(SPINNER).addClass('visible');

            grecaptcha.ready(() => {
                grecaptcha.execute(
                    '6LdJnQ8cAAAAAB_HhGL-DIeud36yN9j-mGuwMBKV',
                    { action: 'set_order_form' }
                ).then(token => {
                    $.post(
                        '/utilities/check-recaptcha-token.php',
                        { token: token },
                        "json"
                    ).done(response => {
                        const reCaptchaData = JSON.parse(response);

                        //console.log(reCaptchaData);

                        if (reCaptchaData.success && reCaptchaData.score > 0.5) {
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

                                    setTimeout(() => $('#setOrderFormContent')
                                        .removeClass('visible'), 700);

                                    setTimeout(() => {
                                        $('#setOrderFormContent').css("display", "none");

                                        $(setOrderFormModalResult)
                                            .addClass('visible');

                                        $('#setOrderFormModalResult .btn-set-order-modal-close')
                                            .focus();
                                    },1000);
                                }
                            }).fail(err => {
                                alert('Сообщение не отправлено. Произошла ошибка. Попробуйте немного позже.');
                                console.log('Request error on set order form!');
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