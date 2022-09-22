"use strict";
window.addEventListener('DOMContentLoaded', init);

const menu = document.querySelector('#menu');
const nav = document.querySelector('header nav ul');
let title;
let i = 0;

function init() {
    menu.addEventListener('click', toggleMenu);
    showNav();
    if (document.querySelector('#filter') != undefined) {
        showFilter();
    }
    if (document.querySelector('#blog') != undefined) {
        addHtmlFromMarkdown();
        animateBlogTyping();
    }

    if (document.querySelector('#thankYou') != undefined) {
        animateContactTyping();
    }
}

// General

function toggleMenu() {
    const visable = nav.getAttribute('data-visable');

    if (visable === "false") {
        nav.setAttribute('data-visable', true);
    } else {
        nav.setAttribute('data-visable', false);
    }
}

function showNav() {
    const page = document.querySelector('h1').dataset.page;

    if (page != undefined) {
        document.querySelectorAll('nav a').forEach((a) => a.classList.remove('selected'));
        document.querySelector('nav a[data-nav="' + page + '"').classList.add('selected');
    }
}

function animateBlogTyping() {
    title = document.querySelector('h1 span#blogTitle').innerText;
    document.querySelector('h1 span#blogTitle').innerHTML = "";
    showBlogTypingAnimation();
}

function showBlogTypingAnimation() {
    if (i < title.length) {
        document.querySelector('h1 span#blogTitle').innerHTML += title.charAt(i);
        i++;
        setTimeout(showBlogTypingAnimation, 60);
    }
}

function animateContactTyping() {
    title = document.querySelector('h1 span#thanks').innerText;
    document.querySelector('h1 span#thanks').innerHTML = "";
    showContactTypingAnimation();
}

function showContactTypingAnimation() {
    if (i < title.length) {
        document.querySelector('h1 span#thanks').innerHTML += title.charAt(i);
        i++;
        setTimeout(showContactTypingAnimation, 60);
    }
}


// Blog

function showFilter() {
    let filter = getFilter();
    if (filter != null) {
        document.querySelectorAll('#filter a').forEach((f) => f.classList.remove('selected'))
        document.querySelector("#filter a[data-id='" + filter + "'").classList.add('selected');
    }
}

function getFilter() {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get('filter');
 };

function addHtmlFromMarkdown() {
    const article = document.querySelector('#blog article');
    const content = article.textContent;
    article.innerHTML = `${content}`;
}
