"use strict";

window.addEventListener('DOMContentLoaded', init);

const menu = document.querySelector('#menu');
const page = document.querySelector('main').dataset.page;


let animatedPlace;
let animatedText;
let i = 0;

function init() {

    toggleSelectedNav();
    menu.addEventListener('click', toggleMobileMenu);

    switch(page) {
        case "blogs":
            toggleSelectedFilter();
            break;
        case "blog":
            addHtmlFromMarkdown();
            animateBlogTyping();
            break;
    }


    if (document.querySelector('#thankYou') != undefined) {
        animateContactTyping();
    }
}

// General
function toggleSelectedNav() {
    const page = document.querySelector('h1').dataset.page;

    if (page) {
        showSelectedNav(page);
    }
}

function showSelectedNav(page) {
    document.querySelectorAll('nav a').forEach((a) => a.classList.remove('selected'));
    document.querySelector('nav a[data-nav="' + page + '"').classList.add('selected');
}


function toggleMobileMenu() {
    const visable = menu.getAttribute('data-visable');

    if (visable === "false") {
        showMobileMenu(true);
    } else {
        showMobileMenu(false);
    }
}

function showMobileMenu(visable) {
    menu.setAttribute('data-visable', visable);
}


// Pages
function toggleSelectedFilter() {
    let filter = getFilter();
    if (filter != null) {
        showSelectedFilter(filter);
    }
}

function getFilter() {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get('filter');
}

function showSelectedFilter(filter) {
    document.querySelectorAll('#filter a').forEach((f) => f.classList.remove('selected'))
    document.querySelector("#filter a[data-id='" + filter + "'").classList.add('selected');
}


function animateBlogTyping() {
    animatedPlace = document.querySelector('h1 span#blogTitle');
    animatedText = animatedPlace.innerText;
    animatedPlace.innerHTML = "";
    showTypingAnimation();
}

function animateContactTyping() {
    animatedPlace = document.querySelector('h1 span#thanks');
    animatedText = animatedPlace.innerText;
    animatedPlace.innerHTML = "";
    showTypingAnimation();
}

function showTypingAnimation() {
    if (i < animatedText.length) {
        animatedPlace.innerHTML += animatedText.charAt(i);
        i++;
        setTimeout(showTypingAnimation, 60);
    }
}


function addHtmlFromMarkdown() {
    const article = document.querySelector('#blog article');
    article.innerHTML = `${article.textContent}`;
}
