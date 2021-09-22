'use strict';

const section1 = document.getElementById('section1');
const section2 = document.getElementById('section2');
const section3 = document.getElementById('section3');
const section4 = document.getElementById('section4');
const section1Content = section1.nextElementSibling;
const section2Content = section2.nextElementSibling;
const section3Content = section3.nextElementSibling;
const section4Content = section4.nextElementSibling;

const sessionLength = 5;
const headerHeight = 300;

let top1 = section1.getBoundingClientRect().top + scrollY - headerHeight;
let top2 = section2.getBoundingClientRect().top + scrollY - headerHeight;
let top3 = section3.getBoundingClientRect().top + scrollY - headerHeight;
let top4 = section4.getBoundingClientRect().top + scrollY - headerHeight;

// ブラウザ幅を変えた時に更新
window.onresize = function () {
  top1 = section1.getBoundingClientRect().top + scrollY - headerHeight;
  top2 = section2.getBoundingClientRect().top + scrollY - headerHeight;
  top3 = section3.getBoundingClientRect().top + scrollY - headerHeight;
  top4 = section4.getBoundingClientRect().top + scrollY - headerHeight;
};

// Nav Menu Items
const nav0 = document.getElementById('nav-top');
const nav1 = document.getElementById('nav-profile');
const nav2 = document.getElementById('nav-skill');
const nav3 = document.getElementById('nav-works');
const nav4 = document.getElementById('nav-contact');
nav0.onclick = () => scroll(0, 0);
nav1.onclick = () => scroll(0, top1);
nav2.onclick = () => scroll(0, top2);
nav3.onclick = () => scroll(0, top3);
nav4.onclick = () => scroll(0, top4);

const header = document.getElementById('header');
const navMenu = document.getElementById('nav-menu');
const toTopElement = document.getElementById('to-top');

let sectionLocation = 0;

function toggleNavMenuClass() {
  for (let i = 0; i < sessionLength; i++) {
    if (sectionLocation !== i) {
      eval('nav' + i).classList.remove('text-cyan-400');
    } else {
      eval('nav' + i).classList.add('text-cyan-400');
    }
  }
}

function fadeInContent() {
  for (let i = 0; i < sessionLength; i++) {
    if (sectionLocation !== i) {
      if (i === 0) continue;
      eval('section' + i + 'Content').classList.remove('scroll-in');
    } else {
      if (i === 0) continue;
      eval('section' + i + 'Content').classList.add('scroll-in');
    }
  }
}

window.onscroll = function () {
  // Nav Menu
  if (0 <= scrollY && scrollY < top1) {
    sectionLocation = 0;
    toggleNavMenuClass();
    fadeInContent();
  } else if (top1 <= scrollY && scrollY < top2) {
    sectionLocation = 1;
    toggleNavMenuClass();
    fadeInContent();
  } else if (top2 <= scrollY && scrollY < top3) {
    sectionLocation = 2;
    toggleNavMenuClass();
    fadeInContent();
  } else if (top3 <= scrollY && scrollY < top4) {
    sectionLocation = 3;
    toggleNavMenuClass();
    fadeInContent();
  } else if (top4 <= scrollY) {
    sectionLocation = 4;
    toggleNavMenuClass();
    fadeInContent();
  }

  // Header
  if (scrollY === 0) {
    header.classList.remove('bg-gray-400');
  } else {
    header.classList.add('bg-gray-400');
  }
  // Scroll
  if (scrollY > 200) {
    toTopElement.classList.remove('opacity-0', 'invisible');
    toTopElement.classList.add('opacity-100', 'visible');
  } else {
    toTopElement.classList.add('opacity-0');
    toTopElement.classList.remove('opacity-100', 'visible');
  }
};

toTopElement.ontransitionend = function () {
  const hasInvisible = toTopElement.classList.contains('invisible');
  const hasVisible = toTopElement.classList.contains('visible');
  if (!hasInvisible && !hasVisible) {
    toTopElement.classList.add('invisible');
  }
};
