
const navSlide = () => {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector(".side-nav");

    burger.addEventListener("click",()=>{
        nav.classList.toggle("side-nav-active");
    })
}

navSlide();

const navClose = () => {
    const close = document.querySelector(".close-nav");
    const sideNav = document.querySelector(".side-nav");

    close.addEventListener("click",()=>{
        sideNav.classList.toggle("side-nav-active");
    })
}

navClose();