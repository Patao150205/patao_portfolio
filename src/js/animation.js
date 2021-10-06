const navHeaderSm = document.getElementById('nav-header-small');
const hamburger = document.getElementById('hamburger');
const toTopElement = document.getElementById('to-top');

const headerHeight = 100;

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

// Nav Menu Items
const navs = document.getElementsByName('nav');
const hamburgerNavs = document.getElementsByName('hamburger-nav');
const target = document.getElementsByName('section');

let navTop1 = target[0].getBoundingClientRect().top + scrollY - headerHeight;
let navTop2 = target[1].getBoundingClientRect().top + scrollY - headerHeight;
let navTop3 = target[2].getBoundingClientRect().top + scrollY - headerHeight;
let navTop4 = target[3].getBoundingClientRect().top + scrollY - headerHeight;
// ブラウザ幅を変えた時に更新
window.onresize = function () {
  navTop1 = target[0].getBoundingClientRect().top + scrollY - headerHeight;
  navTop2 = target[1].getBoundingClientRect().top + scrollY - headerHeight;
  navTop3 = target[2].getBoundingClientRect().top + scrollY - headerHeight;
  navTop4 = target[3].getBoundingClientRect().top + scrollY - headerHeight;
};

for (let i = 0; i < navs.length; i++) {
  if (i !== 0) {
    navs[i].onclick = () => {
      scroll(0, target[i - 1].getBoundingClientRect().top + scrollY - headerHeight);
      closeNavHeaderSm();
    };
  } else {
    navs[0].onclick = () => {
      scroll(0, 0);
      closeNavHeaderSm();
    };
  }
}

for (let i = 0; i < hamburgerNavs.length; i++) {
  if (i !== 0) {
    hamburgerNavs[i].onclick = () => {
      scroll(0, target[i - 1].getBoundingClientRect().top + scrollY - headerHeight);
      closeNavHeaderSm();
    };
  } else {
    hamburgerNavs[0].onclick = () => {
      scroll(0, 0);
      closeNavHeaderSm();
    };
  }
}

function toggleNavMenuClass(nav_num) {
  for (let i = 0; i < navs.length; i++) {
    if (i === nav_num) {
      hamburgerNavs[nav_num].classList.add('text-cyan-400');
      hamburgerNavs[nav_num].classList.add('border-cyan-400');
    } else {
      hamburgerNavs[i].classList.remove('text-cyan-400');
      hamburgerNavs[i].classList.remove('border-cyan-400');
    }
  }
}

function toggleHamburgerNavClass(nav_num) {
  for (let i = 0; i < navs.length; i++) {
    if (i === nav_num) {
      navs[nav_num].classList.add('text-cyan-400');
    } else {
      navs[i].classList.remove('text-cyan-400');
    }
  }
}

toggleNavMenuClass();

function fadeInContent() {
  const position = Math.floor(window.innerHeight * 0.75);

  target.forEach((ele) => {
    let offsetTop = Math.floor(ele.getBoundingClientRect().top);
    let offsetBottom = Math.floor(ele.nextElementSibling.getBoundingClientRect().bottom);
    if (offsetTop < position) {
      ele.nextElementSibling.classList.add('scroll-in');
    }

    if (offsetBottom < 0) {
      ele.nextElementSibling.classList.remove('scroll-in');
    }
  });
}

fadeInContent();

window.onscroll = function () {
  // Nav Menu
  if (0 <= scrollY && scrollY < navTop1) {
    toggleNavMenuClass(0);
    toggleHamburgerNavClass(0);
  } else if (navTop1 <= scrollY && scrollY < navTop2) {
    toggleNavMenuClass(1);
    toggleHamburgerNavClass(1);
  } else if (navTop2 <= scrollY && scrollY < navTop3) {
    toggleNavMenuClass(2);
    toggleHamburgerNavClass(2);
  } else if (navTop3 <= scrollY && scrollY < navTop4) {
    toggleNavMenuClass(3);
    toggleHamburgerNavClass(3);
  } else if (navTop4 <= scrollY) {
    toggleNavMenuClass(4);
    toggleHamburgerNavClass(4);
  }
  // Fadein Contents
  fadeInContent();
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
