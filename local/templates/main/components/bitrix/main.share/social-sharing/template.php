<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?//debug($arResult);?>
<?if ($arResult["PAGE_URL"] <> ''):?>
    <div class="captioin">Поделиться в</div>
    <?if (is_array($arResult["BOOKMARKS"]) && count($arResult["BOOKMARKS"]) > 0):?>
        <ul>
            <?foreach($arResult["BOOKMARKS"] as $name => $arBookmark):?>
                <?if ($name == 'vk'):?>
                    <li>
                        <script>
                            if (__function_exists('vk_click') == false) {
                                function vk_click (url) {
                                    window.open('http://vkontakte.ru/share.php?url='+encodeURIComponent(url),'sharer','toolbar=0,status=0,width=626,height=436');
                                    return false;
                                }
                            }
                        </script>
                        <a href="http://vkontakte.ru/share.php?url=<?=$arResult['PAGE_URL']?>" onclick="return vk_click('<?=$arResult[PAGE_URL]?>');" target="_blank" title="ВКонтакте">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M16.504 2.25H7.5C4.60079 2.25 2.25 4.60079 2.25 7.5V16.504C2.25 19.4012 4.59879 21.75 7.496 21.75H16.504C19.4011 21.75 21.75 19.4013 21.75 16.505V7.496C21.75 4.59879 19.4012 2.25 16.504 2.25Z" stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path d="M10.6841 9.64453H11.8991V15.7205H11.8971C10.6461 15.7205 9.27113 14.9605 8.29613 13.5605C6.83213 11.5085 6.43213 9.95753 6.43213 9.64553" stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path d="M16.6578 15.7195C16.6578 15.7195 16.2158 14.7875 15.3188 13.7625C14.7208 13.0615 13.8788 12.6825 13.1128 12.6825C13.8788 12.6825 14.7208 12.3025 15.3188 11.6025C16.2158 10.5765 16.6578 9.64453 16.6578 9.64453" stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path d="M13.113 12.6836H11.897" stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                        </a>
                    </li>
                <?elseif ($name == 'facebook'):?>
                    <li>
                        <script>
                            if (__function_exists('fbs_click') == false) {
                                function fbs_click (url, title) {
                                    window.open('http://www.facebook.com/share.php?u='+encodeURIComponent(url)+'&t='+encodeURIComponent(title),'sharer','toolbar=0,status=0,width=626,height=436');
                                    return false;
                                }
                            }
                        </script>
                        <a href="http://www.facebook.com/share.php?u=<?=$arResult['PAGE_URL']?>&amp;t=<?=$arResult['PAGE_TITLE']?>" onclick="return fbs_click('<?=$arResult[PAGE_URL]?>', '<?=$arResult[PAGE_TITLE]?>');" target="_blank" title="Facebook">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M16.504 2.25H7.5C4.60079 2.25 2.25 4.60079 2.25 7.5V16.504C2.25 19.4012 4.59879 21.75 7.496 21.75H16.504C19.4011 21.75 21.75 19.4013 21.75 16.505V7.496C21.75 4.59879 19.4012 2.25 16.504 2.25Z" stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path d="M11.0999 12.8984H16.4999" stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path d="M16.5001 8.39844H15.5551C14.0891 8.39844 12.9001 9.58744 12.9001 11.0534V11.9984V20.9984" stroke="#AB78FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                        </a>
                    </li>
                <?endif;?>
            <?endforeach;?>
        </ul>
     <?endif;?>
<?else:?>
    <?=GetMessage("SHARE_ERROR_EMPTY_SERVER")?>
<?endif;?>
