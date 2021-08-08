import $ from "jquery";

$(document).ready(() => {
    if ($('.page-about')[0]) {
        setActiveAboutContactsNavLink();
        $(window).on(
            'hashchange',
            setActiveAboutContactsNavLink
        );
    }

    function setActiveAboutContactsNavLink() {
        let arrHashes = window.location.hash.split('#'),
            aboutUsLinks = $('.nav-link-about-us'),
            contactsLinks = $('.nav-link-contacts');

        if (isContacts()) {
            $(aboutUsLinks).removeClass('active');
            $(contactsLinks).addClass('active');
        } else {
            $(aboutUsLinks).addClass('active');
            $(contactsLinks).removeClass('active');
        }

        function isContacts() {
            return arrHashes.indexOf("kontakty") !== -1;
        }

        function isAbout() {
            return arrHashes.indexOf("o-kompanii") !== -1;
        }

        function isCertificates() {
            return arrHashes.indexOf("sertifikaty") !== -1;
        }
    }
});