import $ from "jquery";

$(document).ready(function () {

    setTimeout(function () {
        if ($('#tsSlider').length > 0) {
            tsSlider.update();
        }
    }, 700);

    // TYPICAL SOLUTIONS FILTER
    const tsItems = $('.typical-solutions__slide');
    const tsFilterControls = $('.typical-solutions .filter-controller');
    const tsFilterState = {
        executionType: '',
        solutionType: '',
    }

    function setTsState(prop, value, reset = false) {
        // Обновляем стэйт
        if (reset) {
            for (let key in tsFilterState) {
                tsFilterState[key] = '';
            }
        } else {
            tsFilterState[prop] = value.toString();
        }

        /* Обновляем DOM в соответствии с новым STATE
         * Проходим по всем слайдам и скрываем те,
         * которые не удовлетворяют фильтру
         * (добавить класс hidden),
         * в противном случае показываем.
         */
        for (let j = 0; j < tsItems.length ; j++) {
            const itemProps = $(tsItems[j]).data('filterProps');
            let isHidden = false;

            for (let key in tsFilterState) {
                if (tsFilterState[key] !== '' && tsFilterState[key] !== itemProps[key]) {
                    isHidden = true;
                    break;
                }
            }

            $(tsItems).addClass('hide');

            setTimeout(function () {
                if (isHidden) {
                    $(tsItems[j]).addClass('hidden');
                } else {
                    $(tsItems[j]).removeClass('hidden');
                    $(tsItems[j]).addClass('invisible');
                }
            }, 300);
        }

        setTimeout(function () {
            // Обработка пустого результата фильтрации
            // если нет ни одного элемента удовлетворяющего фильтру
            const slides = $('.typical-solutions__slide:not(".hidden")');

            if (slides.length === 0) {
                $('#notFilterTsResults').addClass('visible');
                $('#btnTsPrev').addClass('hidden');
                $('#btnTSNext').addClass('hidden');
            } else {
                $('#notFilterTsResults').removeClass('visible');
                $('#btnTsPrev').removeClass('hidden');
                $('#btnTSNext').removeClass('hidden');
            }

            // Переинициализируем соответствующий слайдер
            tsSlider.update();
        }, 300);

        // Добавляем delay для постепенного появления слайдов
        setTimeout(function () {
            const invisibleItems = $(tsItems).filter('.invisible.hide');

            for (let i = 0; i < invisibleItems.length; i++) {
                $(invisibleItems[i]).css('transition-delay', 0.1 * i + 's');
            }
        }, 350);

        // Показываем отфильтрованные слайды
        setTimeout(function () {
            $(tsItems).removeClass('invisible hide');
        }, 400);

        // Чистим transition-delay во всех слайдах
        setTimeout(function () {
            $(tsItems).attr('style', '');
        }, 1000);
    }

    // Обрабатываем клик на контроллере
    if (tsFilterControls.length > 0) {
        for (let i = 0; i < tsFilterControls.length; i++) {
            $(tsFilterControls[i]).on('click', function (e) {
                setTsState(
                    $(this).data('filterProperty'),
                    $(this).data('filterValue')
                );
            });
        }
    }

    // Сбрасываем все контроллеры
    function resetTsControls(...controls) {
        if (controls.length > 0) {
            for (let i = 0; i < controls.length; i++) {
                const type = $(controls[i]).data('controllerType');

                switch(type) {
                    case 'radio-group':
                        $(controls[i])
                            .children('.marker')
                            .removeAttr('style');

                        const inputs = $(controls[i]).children('input');
                        if (inputs.length > 0) {
                            for (let j = 0; j < inputs.length; j++) {
                                $(inputs[j])[0].checked = false;
                            }
                        }

                        break;

                    case 'custom-select':
                        $(controls[i]).children('.selected').html('&nbsp;');
                        $(controls[i]).find('.active').removeClass('active');

                        break;
                }
            }
        }
    }

    // Сбрасываем все результаты фильтра
    $('#resetTsFilter').on('click', function () {
        setTsState(
            undefined,
            undefined,
            true
        );

        resetTsControls(
            $('#executionType'),
            $('#solutionType'),
        );
    });
});