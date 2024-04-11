import './bootstrap';

// let a = document.getElementById("login_list_p");
// a.addEventListener("click", function () {
//   this.classList.add("login_list2");
// });
let navactive = document.querySelectorAll('.nav_link');
let url = window.location.href;

if (navactive) {
  for (let i = 0; i < navactive.length; i++) {
    if (url == navactive[i].href) {
      navactive[i].classList.add('active');
    }
  }
}


let sign = 0;
let pros = document.getElementById('pros');
let minuses = document.getElementById('minuses');
let resultt = document.getElementById('sign');

pros.addEventListener('click', () => {
  sign++;
  resultt.innerHTML = sign;
});

minuses.addEventListener('click', () => {
  if (sign > 0) {
    sign--;
    resultt.innerHTML = sign;
  }
});

let number = 0;
let minus = document.getElementById('minus');
let plus = document.getElementById('plus');
let results = document.getElementById('number');

plus.addEventListener('click', () => {
  number++;
  results.innerHTML = number;
});

minus.addEventListener('click', () => {
  if (number > 0) {
    number--;
    results.innerHTML = number;
  }
});


let quantity = 0;
let add = document.getElementById('add');
let reduce = document.getElementById('reduce');
let resultss = document.getElementById('quantity');

add.addEventListener('click', () => {
  quantity++;
  resultss.innerHTML = quantity;
});

reduce.addEventListener('click', () => {
  if (quantity > 0) {
    quantity--;
    resultss.innerHTML = quantity;
  }
});

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 5,
  spaceBetween: 30,
  paginationClickable: true,
  pagination: {
    el: ".swiper-pagination",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 15,
    },
    520: {
      slidesPerView: 2,
      spaceBetween: 15,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    1000: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
    1200: {
      slidesPerView: 5,
      spaceBetween: 30,
    },
  },
});

let counter = 0;
let increment = document.getElementById('increment');
let decrement = document.getElementById('decrement');
let result = document.getElementById('counter');

increment.addEventListener('click', () => {
  counter++;
  result.innerHTML = counter;
});

decrement.addEventListener('click', () => {
  if (counter > 0) {
    counter--;
    result.innerHTML = counter;
  }
});
function change_image(image) {
  var container = document.getElementById("main-image");
  container.src = image.src;
}
document.addEventListener("DOMContentLoaded", function (event) {
});