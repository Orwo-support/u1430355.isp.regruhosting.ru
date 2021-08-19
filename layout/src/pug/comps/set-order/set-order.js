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



    // const testForm = document.getElementById('setOrderForm');
    //
    // testForm.addEventListener('submit', async (e) => {
    //     e.preventDefault();
    //
    //     // let phone = $(setOrderFormPhone).val();
    //     // let isFormValid = true;
    //     //
    //     // if (phone !== '') {
    //     //     if (!validPhone(phone.replace(/\s+|\+/g, ''))) {
    //     //         isFormValid = false;
    //     //         animationFormError(
    //     //             setOrderFormController,
    //     //             setOrderFormValidator
    //     //         );
    //     //     }
    //     // } else {
    //     //     isFormValid = false;
    //     //     animationFormError(
    //     //         setOrderFormController,
    //     //         setOrderFormValidator
    //     //     );
    //     // }
    //     //
    //     // if (isFormValid) {
    //     //     console.log($(this).serializeArray());
    //     //
    //     //     console.log('---------------------------------------------');
    //     //
    //     //     // const response =
    //     //     //     await fetch('http://ekranika.develop/utilities/get-recaptcha-data.php', {
    //     //     //         body: 'asdf',
    //     //     //         method: 'POST'
    //     //     //     })
    //     //     // const data = await response.json();
    //     //     // console.log(data);
    //     //
    //     //
    //     //     // // рабочий вариант
    //     //     // //grecaptcha.reset();
    //     //     // grecaptcha.execute();
    //     //     //
    //     //     // console.log('#recaptcha', $('#recaptcha').val());
    //     //     //
    //     //     //
    //     //     //
    //     //     // $.post(
    //     //     //     "http://ekranika.develop/utilities/get-recaptcha-data.php",
    //     //     //     { token: $('#recaptcha').val() },
    //     //     //     function(result) {
    //     //     //         console.log(result);
    //     //     //         if(result.success) {
    //     //     //             alert('Thanks for posting comment.')
    //     //     //         } else {
    //     //     //             alert('You are spammer ! Get the @$%K out.')
    //     //     //         }
    //     //     //     }
    //     //     // );
    //     //
    //     //
    //     //
    //     //
    //     //
    //     //
    //     //
    //     //
    //     //
    //     //
    //     //
    //     //     // grecaptcha.ready(function() {
    //     //     //     grecaptcha.execute('6Les2AocAAAAAAuo6Kd8iMxsAzk2p6gA2RD79hRO', {action: 'submit'}).then(function(token) {
    //     //     //         // Add your logic to submit to your backend server here.
    //     //     //         console.log('Сработал execute внутри большого скрипты')
    //     //     //         console.log(token)
    //     //     //
    //     //     //
    //     //     //         $.post(
    //     //     //             'https://www.google.com/recaptcha/api/siteverify',
    //     //     //             {
    //     //     //                 secret: '6Les2AocAAAAAEflLEGWkgIlE-NSwXeq2gKyFLsE',
    //     //     //                 response: token
    //     //     //             },
    //     //     //             "json"
    //     //     //         ).done(response => {
    //     //     //             console.log(response)
    //     //     //         }).fail(err => {
    //     //     //             alert('Вы робот');
    //     //     //             console.log('Request error on reCaptcha!');
    //     //     //             console.log(err);
    //     //     //         });
    //     //     //     });
    //     //     // });
    //     //
    //     //
    //     //
    //     //
    //     //
    //     //     // grecaptcha.ready(function() {
    //     //     //     grecaptcha.execute(
    //     //     //         '6Les2AocAAAAAAuo6Kd8iMxsAzk2p6gA2RD79hRO',
    //     //     //         { action: 'submit' }
    //     //     //     ).then(function(token) {
    //     //     //         console.log('token', token);
    //     //     //     });
    //     //     // });
    //     //
    //     //
    //     //     // $(SPINNER).addClass('visible');
    //     //     //
    //     //     // $.post(
    //     //     //     this.action,
    //     //     //     $(this).serializeArray(),
    //     //     //     "json"
    //     //     // ).done(response => {
    //     //     //     // console.log(JSON.parse(response));
    //     //     //
    //     //     //     if (JSON.parse(response).IS_ERRORS) {
    //     //     //         alert('Сообщение не отправлено. Произошла ошибка. Попробуйте немного позже.');
    //     //     //     } else {
    //     //     //         $(SPINNER).removeClass('visible');
    //     //     //
    //     //     //         setTimeout(() => $('#setOrderFormContent')
    //     //     //             .removeClass('visible'), 700);
    //     //     //
    //     //     //         setTimeout(() => {
    //     //     //             $('#setOrderFormContent').css("display", "none");
    //     //     //
    //     //     //             $(setOrderFormModalResult)
    //     //     //                 .addClass('visible');
    //     //     //
    //     //     //             $('#setOrderFormModalResult .btn-set-order-modal-close')
    //     //     //                 .focus();
    //     //     //         },1000);
    //     //     //     }
    //     //     // }).fail(err => {
    //     //     //     alert('Сообщение не отправлено. Произошла ошибка. Попробуйте немного позже.');
    //     //     //     console.log('Request error on set order form!');
    //     //     //     console.log(err);
    //     //     // }).always(() => $(SPINNER).removeClass('visible'));
    //     // }
    // });
});



// const testForm = document.forms["setOrderForm"];
//
// console.log(testForm)

const subscribe_form_0 = document.forms["subscribe-form-0"];

subscribe_form_0.addEventListener("submit", async (e) => {
    // e.preventDefault();
    // const email = new FormData(e.target).get("email");
    // if (email) {
    //     const response =
    //         await fetch('/.netlify/functions/fake-subscribe', {
    //             body: email,
    //             method: 'POST'
    //         })
    //     const data = await response.json();
    //     alert(data);
    // }
})
