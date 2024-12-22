
let menu = document.querySelector('#menu-bars'); 
let navbar = document.querySelector('.navbar'); 

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

let section = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header .navbar a');

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');

    section.forEach(sec =>{
        let top = window.scrollY; 
        let height = sec.offsetHeight;
        let offset = sec.offsetTop - 150; 
        let id = sec.getAttribute('id');

        if(top => offset && top < offset + height){
            navLinks.forEach(links =>{
               links.classList.remove('active');
               document.querySelector('header .navbar a[href*='+id+']').classList.add('active');
            });
        }
    });

}

document.querySelector('#search-icon').onclick = () =>{
    document.querySelector('#search-form').classList.toggle('active');
}

document.querySelector('#close').onclick = () =>{
    document.querySelector('#search-form').classList.remove('active');
}

let shoping = document.querySelector('.shopping-cart');

document.querySelector('#cart-btn').onclick = () =>{
    shoping.classList.toggle('active');cart-user
}

let login = document.querySelector('.login-form');

document.querySelector('#cart-user').onclick = () =>{
    login.classList.toggle('active');
}


// window.onscroll = () =>{
//     menu.classList.remove('fa-times');
//     navbar.classList.remove('active');
// }
//gestion du swapper

// const progressCircle = document.querySelector(".autoplay-progress svg");
// const progressContent = document.querySelector(".autoplay-progress span");
var swiper = new Swiper(".home-slider", {
  spaceBetween: 30,
  centeredSlides: true,
  autoplay: {
    delay: 7500,
    disableOnInteraction: false
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  },
  loop:true,
//   on: {
//     autoplayTimeLeft(s, time, progress) {
//       progressCircle.style.setProperty("--progress", 1 - progress);
//       progressContent.textContent = `${Math.ceil(time / 1000)}s`;
//     }
//   }
});

var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false
    },
    // pagination: {
    //   el: ".swiper-pagination",
    //   clickable: true
    // },
    loop:true,
  //   on: {
  //     autoplayTimeLeft(s, time, progress) {
  //       progressCircle.style.setProperty("--progress", 1 - progress);
  //       progressContent.textContent = `${Math.ceil(time / 1000)}s`;
  //     }
  //   }
 breakpoints: {
    0: {
        slidesPerView: 1,
    },
    640: {
        slidesPerView: 2,
    },
    768: {
        slidesPerView: 2,
    },
    1024: {
        slidesPerView: 3,
    },
  },
});

//function pour loader
function loader(){
    document.querySelector('.loader-container').classList.add('fade-out'); 
}
function fadeOut(){
    setInterval(loader, 1000);
}

window.onload = fadeOut; 


