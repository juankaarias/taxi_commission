/*Menu Ham*/
const ham = document.querySelector('.menu__ham');
const list = document.querySelector('.menu__list');
const login = document.querySelector('.menu__login');
const barras = document.querySelectorAll('.menu__ham span')
ham.addEventListener('click', () => {
    list.classList.toggle('activo');
    login.classList.toggle('activo');
    barras.forEach(child => { 
        child.classList.toggle('animado')
    });
});

/*animacion auto*/
window.addEventListener("scroll", function(){
  let animacion = document.getElementById('animado');
  let posicionObj1 = animacion.getBoundingClientRect().top;
  let tamanioDePantalla = window.innerHeight/2;
  if(posicionObj1 < tamanioDePantalla){
    animacion.style.animation = 'mover 2s ease-out';
  }
})

/*Slider cards*/
var swiper = new Swiper(".slide-content", {
  slidesPerView: 3,
  spaceBetween: 25,
  loop: true,
  centerSlide: 'true',
  fade: 'true',
  grabCursor: 'true',
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints:{
      0: {
          slidesPerView: 1,
      },
      520: {
          slidesPerView: 2,
      },
      950: {
          slidesPerView: 3,
      },
  },
});

/*btn up*/
window.onscroll = function(){
  if(document.documentElement.scrollTop > 900){
    document.querySelector('.main__arriba').classList.add('show');
  }else{
    document.querySelector('.main__arriba').classList.remove('show');
  }
}

/*up btn*/
document.querySelector('.main__arriba').addEventListener('click', () =>{
  window.scrollTo({
    top:0,
    behavior: "smooth"
  });
})
/*Change link app responsive*/
const link = document.querySelector('.ayuda__contenedor');
if(document.documentElement.clientWidth > 768){
  link.href = "https://web.whatsapp.com/send?phone=573017656646";
}else{
  link.href = "https://api.whatsapp.com/send?phone=573017656646";
}
