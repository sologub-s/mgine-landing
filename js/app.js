'use strict';

window.onload = function () {
    mobileMenu();
    formSuccess();
};

function mobileMenu() {
    let openBtn = document.querySelectorAll('.burgerIco')[0];
    let closeBtn = document.querySelectorAll('.closeMenu')[0];
    let menu = document.querySelectorAll('header nav')[0];

    closeBtn.addEventListener('click', function (e) {
        menu.classList.remove('show')
    });

    openBtn.addEventListener('click', function (e) {
        menu.classList.add('show')
    });

}

function formSuccess() {

    //let submit = document.getElementById('submitForm');
    let popup = document.getElementById('successPopup');
    let body = document.getElementsByTagName('body')[0];
    let closePopup = document.querySelectorAll('.closePopup');

    /*
    if (submit) {
        submit.addEventListener('click', function () {
            body.classList.add('show-overlay');
            popup.classList.add('show');
        });
    }
    */


    closePopup.forEach(function (closeBtn) {
        closeBtn.addEventListener('click', function () {
                body.classList.remove('show-overlay');
                popup.classList.remove('show');
        })
    })

}