// toggle side-bar 
const hamburger = document.querySelector(".hamburger")
const sideBar = document.querySelector(".hide")

hamburger.addEventListener("click", () => {

    sideBar.classList.toggle("active")
})

document.addEventListener("click", (e) => {
    if(!hamburger.contains(e.target) && !sideBar.contains(e.target) ){
        sideBar.classList.remove("active")
    }
})


// const navBar = document.querySelector(".hide2")


