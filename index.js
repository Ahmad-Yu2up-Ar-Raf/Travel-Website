// toggle side-bar 
const hamburger = document.querySelector(".hamburger")
const sideBar = document.querySelector(".hide")

hamburger.addEventListener("click", () => {
    console.log(sideBar)
    sideBar.classList.toggle("active")
})

document.addEventListener("click", (e) => {
    if(!hamburger.contains(e.target) && !sideBar.contains(e.target) ){
        sideBar.classList.remove("active")
    }
})

// back 
const navBar = document.querySelector(".hide2")


window.addEventListener("scroll", () => {
    if(window.scrollY >= 800){
        navBar.classList.remove("hide2")
        navBar.classList.add("show")
    }else{
        navBar.classList.add("hide2")
        navBar.classList.remove("show")
    }
})
// swipper
// const swiper = new Swiper('.swiper', {
//     // Optional parameters
//     direction: 'vertical',
//     loop: true,
  
//     // If we need pagination
//     pagination: {
//       el: '.swiper-pagination',
//     },
  
//     // Navigation arrows
//     navigation: {
//       nextEl: '.swiper-button-next',
//       prevEl: '.swiper-button-prev',
//     },
  
//     // // And if we need scrollbar
//     // scrollbar: {
//     //   el: '.swiper-scrollbar',
//     // },
//   });