// onclick
// if text of strong is equal to class of form
// display: flex on form
// display: none on others

var sacredIcon = document.querySelector(".contact .form-select")
var library = Array.from(sacredIcon.children)
var haloArray = document.querySelectorAll(".wpforms-container")
var theArk = Array.from(haloArray)
var fallBack = document.querySelector(".back")
var theIndex

library.forEach(el => {
  el.addEventListener("click", () => {
    sacredIcon.style.display = 'none'
    theIndex = library.findIndex(index => index == el)
      library.forEach(ele => {
        ele.classList.remove("current")
      })
      theArk.forEach(elem => {
        elem.classList.remove("current")
      })
      fallBack.style.display = 'block'
      fallBack.style.textAlign = 'right'
      fallBack.style.padding = '15px'
      el.classList.add("current")
      haloArray[theIndex].classList.add("current")
  })
})
//remove row-basic and hard-code
//replace with 'go back' component
fallBack.addEventListener('click', () => {
  fallBack.style.display = 'none'
  sacredIcon.style.display = 'flex'
  haloArray[theIndex].classList.remove("current")
})
