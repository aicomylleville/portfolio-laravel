"use strict";

window.addEventListener('DOMContentLoaded', init);


function init() {
    document.querySelector('#openMenu').addEventListener('click', openMenu);
    document.querySelector('#closeMenu').addEventListener('click', closeMenu);

    document.querySelector('h1 a').addEventListener('mouseover', showSurname);

    showSelectedMenu();

    if (document.querySelector('#filter') != undefined) {
        showSelectedFilter();
    }

    if (document.querySelector('.markdown') != undefined) {
        addHTMLSyntax();
    }
}

function showSelectedMenu() {
    const path = window.location.pathname;

    document.querySelectorAll('nav ul li a').forEach((nav) => nav.classList.remove('selected'));

    if (path === '/') {
        document.querySelector('nav ul li a[data-nav="home"]').classList.add('selected');
    } else if (path.includes('about')) {
        document.querySelector('nav ul li a[data-nav="about"]').classList.add('selected');
    } else if (path.includes('blog')) {
        document.querySelector('nav ul li a[data-nav="blog"]').classList.add('selected');
    } else if (path.includes('contact')) {
        document.querySelector('nav ul li a[data-nav="contact"]').classList.add('selected');
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
    document.querySelector('.markdown').innerHTML = document.querySelector('.markdown').textContent;
}

function showSelectedFilter() {
    const params = new Proxy(new URLSearchParams(window.location.search), {
        get: (searchParams, prop) => searchParams.get(prop)
    });

    if (params.filter != null) {
        document.querySelectorAll('#filter ul li a').forEach((filter) => filter.classList.remove('selected'));
        document.querySelector('#filter ul li a[data-filter="' + params.filter + '"]').classList.add('selected');
    }
}
