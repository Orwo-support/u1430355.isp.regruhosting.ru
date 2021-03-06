import $ from "jquery";

$(document).ready(function () {

    setTimeout(function () {
        if ($('#rcSlider').length > 0) {
            rcSlider.update();
        }
    }, 700);

    // READY CABINS FILTER
    const rcItems = $('.ready-cabins__slide');
    const rcFilterControls = $('.ready-cabins .filter-controller');
    const rcFilterState = {
        executionType: '',
        pixelStep: '',
        cabinetSize: '',
    }

    // Фильтруем шаг список пикселя в зависимости от Типа испольнения
    $('.section_ready-cabins #executionType .filter-controller')
        .toArray()
        .forEach(el => $(el).click(handleClickOnExTypeButton));

    function handleClickOnExTypeButton () {
        let typeInControl = $(this).data('filterValue'),
            typeInState = rcFilterState.executionType;

        if (typeInState !== typeInControl) {
            filterRCPixelStep(typeInControl);
        }
    }

    function filterRCPixelStep (type) {
        let controller = $('.section_ready-cabins #pixelStep');

        $(controller).removeClass('outer inner');

        if (!type) return;

        switch (type) {
            case 'outer':
                $(controller).addClass('outer');
                break;

            case 'inner':
                $(controller).addClass('inner');
                break;
        }
    }

    function setRcState(prop, value, reset = false) {
        // Обновляем стэйт
        if (reset) {
            for (let key in rcFilterState) {
                rcFilterState[key] = '';
            }
        } else {
            rcFilterState[prop] = value.toString();
        }

        /* Обновляем DOM в соответствии с новым STATE
         * Проходим по всем слайдам и скрываем те,
         * которые не удовлетворяют фильтру
         * (добавить класс hidden),
         * в противном случае показываем.
         */
        for (let j = 0; j < rcItems.length ; j++) {
            const itemProps = $(rcItems[j]).data('filterProps');
            let isHidden = false;

            for (let key in rcFilterState) {
                if (rcFilterState[key] !== '' && rcFilterState[key] !== itemProps[key]) {
                    isHidden = true;
                    break;
                }
            }

            $(rcItems).addClass('hide');

            setTimeout(function () {
                if (isHidden) {
                    $(rcItems[j]).addClass('hidden');
                } else {
                    $(rcItems[j]).removeClass('hidden');
                    $(rcItems[j]).addClass('invisible');
                }
            }, 300);
        }

        setTimeout(function () {
            // Обработка пустого результата фильтрации
            // если нет ни одного элемента удовлетворяющего фильтру
            const slides = $('.ready-cabins__slide:not(".hidden")');

            if (slides.length === 0) {
                $('#notRcFilterResults').addClass('visible');
                $('#btnRcPrev').addClass('hidden');
                $('#btnRcNext').addClass('hidden');
            } else {
                $('#notRcFilterResults').removeClass('visible');
                $('#btnRcPrev').removeClass('hidden');
                $('#btnRcNext').removeClass('hidden');
            }

            // Переинициализируем соответствующий слайдер
            rcSlider.update();
        }, 300);

        // Добавляем delay для постепенного появления слайдов
        setTimeout(function () {
            const invisibleItems = $(rcItems).filter('.invisible.hide');

            for (let i = 0; i < invisibleItems.length; i++) {
                $(invisibleItems[i]).css('transition-delay', 0.1 * i + 's');
            }
        }, 350);

        // Показываем отфильтрованные слайды
        setTimeout(function () {
            $(rcItems).removeClass('invisible hide');
        }, 400);

        // Чистим transition-delay во всех слайдах
        setTimeout(function () {
            $(rcItems).attr('style', '');
        }, 1000);
    }

    // Обрабатываем клик на контроллере
    if (rcFilterControls.length > 0) {
        for (let i = 0; i < rcFilterControls.length; i++) {
            $(rcFilterControls[i]).on('click', function (e) {
                setRcState(
                    $(this).data('filterProperty'),
                    $(this).data('filterValue')
                );
            });
        }
    }

    // Сбрасываем все контроллеры
    function resetRcControls(...controls) {
        if (controls.length > 0) {
            filterRCPixelStep(); // Reset pixel steps

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
    $('#resetRcFilter').on('click', function () {
        setRcState(
            undefined,
            undefined,
            true
        );

        resetRcControls(
            $('#executionType'),
            $('#pixelStep'),
            $('#cabinetSize'),
        );
    });
});