
/*==== navbar toggle ===*/
let navBar = document.querySelector('.navbarlinks');
let menuBar = document.querySelector('#menuBtn');

menuBar.onclick = () => {
    navBar.classList.toggle('active');
}

/*=== swipe js ===*/
window.onscroll = () => {
  let header = document.querySelector('header');

  header.classList.toggle('sticky', window.scrollY > 100);
}

var swiper = new Swiper(".myHome", {
    spaceBetween: 30,
    centeredSlides: true,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });


