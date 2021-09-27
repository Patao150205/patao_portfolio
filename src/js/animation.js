const section1 = document.getElementById('section1');
const section2 = document.getElementById('section2');
const section3 = document.getElementById('section3');
const section4 = document.getElementById('section4');
const section1Content = section1.nextElementSibling;
const section2Content = section2.nextElementSibling;
const section3Content = section3.nextElementSibling;
const section4Content = section4.nextElementSibling;

const sessionLength = 5;
const adjustNavHeight = 90;
const adjustFadeinHeight = 300;

let top1 = section1.getBoundingClientRect().top + scrollY;
let top2 = section2.getBoundingClientRect().top + scrollY;
let top3 = section3.getBoundingClientRect().top + scrollY;
let top4 = section4.getBoundingClientRect().top + scrollY;

let navTop1 = top1 - adjustNavHeight;
let navTop2 = top2 - adjustNavHeight;
let navTop3 = top3 - adjustNavHeight;
let navTop4 = top4 - adjustNavHeight;

let fadeTop1 = top1 - adjustFadeinHeight;
let fadeTop2 = top2 - adjustFadeinHeight;
let fadeTop3 = top3 - adjustFadeinHeight;
let fadeTop4 = top4 - adjustFadeinHeight;

const navHeaderSm = document.getElementById('nav-header-small');
const hamburger = document.getElementById('hamburger');

// ハンバーガーメニュー
hamburger.onclick = function () {
  const isOpen = hamburger.classList.contains('fa-times');
  if (!isOpen) {
    hamburger.classList.remove('fa-bars');
    hamburger.classList.add('fa-times');
    navHeaderSm.classList.remove('h-0', 'invisible', 'opacity-0');
  } else {
    closeNavHeaderSm();
  }
};

function closeNavHeaderSm() {
  hamburger.classList.remove('fa-times');
  hamburger.classList.add('fa-bars');
  navHeaderSm.classList.add('opacity-0', 'invisible', 'h-0');
}

// ブラウザ幅を変えた時に更新
window.onresize = function () {
  top1 = section1.getBoundingClientRect().top + scrollY;
  top2 = section2.getBoundingClientRect().top + scrollY;
  top3 = section3.getBoundingClientRect().top + scrollY;
  top4 = section4.getBoundingClientRect().top + scrollY;

  navTop1 = top1 - adjustNavHeight;
  navTop2 = top2 - adjustNavHeight;
  navTop3 = top3 - adjustNavHeight;
  navTop4 = top4 - adjustNavHeight;

  fadeTop1 = top1 - adjustFadeinHeight;
  fadeTop2 = top2 - adjustFadeinHeight;
  fadeTop3 = top3 - adjustFadeinHeight;
  fadeTop4 = top4 - adjustFadeinHeight;
};

// Nav Menu Items
const nav0 = document.getElementsByName('nav-top');
const nav1 = document.getElementsByName('nav-profile');
const nav2 = document.getElementsByName('nav-skill');
const nav3 = document.getElementsByName('nav-works');
const nav4 = document.getElementsByName('nav-contact');

nav0.forEach((ele) => {
  ele.onclick = () => {
    scroll(0, 0);
    closeNavHeaderSm();
  };
});
nav1.forEach((ele) => {
  ele.onclick = () => {
    scroll(0, navTop1);
    closeNavHeaderSm();
  };
});
nav2.forEach((ele) => {
  ele.onclick = () => {
    scroll(0, navTop2);
    closeNavHeaderSm();
  };
});
nav3.forEach((ele) => {
  ele.onclick = () => {
    scroll(0, navTop3);
    closeNavHeaderSm();
  };
});
nav4.forEach((ele) => {
  ele.onclick = () => {
    scroll(0, navTop4);
    closeNavHeaderSm();
  };
});

const header = document.getElementById('header');
const navMenu = document.getElementById('nav-menu');
const toTopElement = document.getElementById('to-top');

let sectionLocation = 0;

function toggleNavMenuClass() {
  for (let i = 0; i < sessionLength; i++) {
    if (sectionLocation !== i) {
      eval('nav' + i).forEach((ele) => {
        ele.classList.remove('text-cyan-400');
      });
    } else {
      eval('nav' + i).forEach((ele) => {
        ele.classList.add('text-cyan-400');
      });
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

function toggleNavHeaderSm() {
  navHeaderSm;
}

window.onscroll = function () {
  // Nav Menu
  if (0 <= scrollY && scrollY < navTop1) {
    sectionLocation = 0;
    toggleNavMenuClass();
  } else if (navTop1 <= scrollY && scrollY < navTop2) {
    sectionLocation = 1;
    toggleNavMenuClass();
  } else if (navTop2 <= scrollY && scrollY < navTop3) {
    sectionLocation = 2;
    toggleNavMenuClass();
  } else if (navTop3 <= scrollY && scrollY < navTop4) {
    sectionLocation = 3;
    toggleNavMenuClass();
  } else if (navTop4 <= scrollY) {
    sectionLocation = 4;
    toggleNavMenuClass();
  }

  // Fadein Contents
  if (0 <= scrollY && scrollY < fadeTop1) {
    sectionLocation = 0;
    fadeInContent();
  } else if (fadeTop1 <= scrollY && scrollY < fadeTop2) {
    sectionLocation = 1;
    fadeInContent();
  } else if (fadeTop2 <= scrollY && scrollY < fadeTop3) {
    sectionLocation = 2;
    fadeInContent();
  } else if (fadeTop3 <= scrollY && scrollY < fadeTop4) {
    sectionLocation = 3;
    fadeInContent();
  } else if (fadeTop4 <= scrollY) {
    sectionLocation = 4;
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
