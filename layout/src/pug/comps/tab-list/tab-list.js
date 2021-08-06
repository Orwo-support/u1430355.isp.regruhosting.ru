import $ from "jquery";

$(document).ready(function () {
    const tabListBtns = $('.tab-list__get-data');

    if (tabListBtns.length) {
        for (let i = 0; i < tabListBtns.length; i++) {
            $(tabListBtns[i]).on('click', function (e) {
                const targetListId = $(this).data('listId');
                const targetList = $(targetListId)
                    .children('.tabs-item.visible')
                    .find('.tab-list__list__wrap');
                addTabListItems(targetList, undefined, this);
            });
        }
    }

    window.addTabListItems = function (targetList, slider, btnMore) {
        let listWrap = $(targetList)[0],
            articlesString = '<span class="clearfix"></span>';

        if (listWrap.dataset.nextPageUrl !== 'null') {
            let slideWidth,
                slidesShown,
                offset,
                addedItems;

            if (slider) {
                slideWidth = $(targetList).children('.swiper-slide').width();
                slidesShown = slider.activeIndex + 1;
                offset = slideWidth * slidesShown;
            }

            SPINNER.addClass('visible');

            $.get(
                listWrap.dataset.nextPageUrl,
                "json"
            ).done(response => {
                let res = JSON.parse(response),
                    nexPageUrl = res.nextPage[0]['NEXT_PAGE_URL'];

                for (let i = 0; i < 4; i++) {
                    if (res[i] !== undefined) {
                        addItemToListString(res[i]);
                    }
                }

                function addItemToListString (item) {
                    let id            = item['ID'],
                        delay         = item['TRANSITION_DELAY'],
                        detailPageUrl = item['DETAIL_PAGE_URL'],
                        pictureSrc    = item['PICTURE_SRC'],
                        date          = item['DATE'],
                        caption       = item['CAPTION'],
                        timeReading   = item['ARTICLE_TIME_READING'];

                    articlesString += '<div class="article-list__slide swiper-slide added" id="'+ id +'" style="transition-delay:0.'+ delay +'s"><a class="article-list__card" href="'+ detailPageUrl +'"><div class="article-list__pic"><div class="image" style="background-image:url('+ pictureSrc +')"></div></div><div class="article-list__date">'+ date +'</div><div class="article-list__caption">'+ caption +'</div><div class="article-list_time"><div class="icon"><svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.05691 4.68684C13.6479 2.78484 18.9109 4.96584 20.8129 9.55684C22.7149 14.1478 20.5339 19.4108 15.9429 21.3128C11.3519 23.2148 6.08891 21.0338 4.18691 16.4428C2.28591 11.8518 4.46591 6.58884 9.05691 4.68684" stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.2179 8.98483V13.6358L15.8739 15.8648" stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="content">'+ timeReading +'</span></div></a></div>';
                }

                $(SPINNER).removeClass('visible');

                if (slider) slider.detachEvents();

                $(listWrap).append(articlesString);
                listWrap.dataset.nextPageUrl = nexPageUrl ? nexPageUrl: 'null';

                if (!nexPageUrl) {
                    $(btnMore).addClass('hidden');
                }

                if (slider) {
                    slider.attachEvents();
                    slider.update();

                    $(slider.el).children('.swiper-wrapper').css({
                        'transform': 'translate3d(-' + offset + 'px, 0px, 0px)',
                        'transitionDuration': '500ms',
                    });
                }

                setTimeout(function () {
                    addedItems = $('.article-list__slide.added');
                    $(addedItems).removeClass('added');
                }, 100);

                setTimeout(function () {
                    $(addedItems).attr('style', '');
                }, 1500);
            }).fail(xhr => {
                console.log(xhr);
            }).always(() => {
                $(SPINNER).removeClass('visible');
            });
        }
    }
});