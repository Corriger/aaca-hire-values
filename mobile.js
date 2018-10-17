var mobileNav = document.querySelector(".hmbr")

mobileNav.addEventListener('click', e => {
  e.preventDefault()
  var slideIn = document.querySelector('.main-header > nav')
  if(slideIn.classList.contains('menu')){
    document.body.classList.toggle('no-scroll')
    slideIn.classList.toggle('menu')
    if(slideIn.classList.contains('menu')){
      this.onscroll = function () { window.scrollTo(0, 0); }
    }
  }else{
    slideIn.classList.add('menu')
    document.body.classList.add('no-scroll')
  }
})
