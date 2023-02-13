"use strict";

window.addEventListener('DOMContentLoaded', init);


function init() {
    document.querySelector('#openMenu').addEventListener('click', openMenu);
    document.querySelector('#closeMenu').addEventListener('click', closeMenu);

    document.querySelector('h1 a').addEventListener('mouseover', showSurname);

    if (document.querySelector('#blog') != undefined) {
        addHTMLSyntax();
    }
}

function openMenu(e) {
    document.querySelector('#mobileMenu').classList.remove('hidden');
    document.querySelector('#openMenu').classList.add('hidden');
    document.querySelector('#closeMenu').classList.remove('hidden');
    document.querySelector('main').classList.add('hidden');
}

function closeMenu(e) {
    document.querySelector('#mobileMenu').classList.add('hidden');
    document.querySelector('#openMenu').classList.remove('hidden');
    document.querySelector('#closeMenu').classList.add('hidden');
    document.querySelector('main').classList.remove('hidden');
}

function showSurname() {
    let text = document.querySelector('h1 a span').textContent;
    document.querySelector('h1 a span').innerHTML = "Mylleville";
    setTimeout(() => {
        document.querySelector('h1 a span').innerHTML = text;
    }, 1000);
}

function addHTMLSyntax() {
    document.querySelector('#blog article').innerHTML = document.querySelector('#blog article').textContent;
}