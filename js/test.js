
const navSlide = () => {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector(".side-nav");

    burger.addEventListener("click",()=>{
        nav.classList.toggle("side-nav-active");
        document.getElementById('mainBody').style.marginLeft = '226px';
        document.querySelector('.close-nav').style.display = 'block';
        document.querySelector('.burger').style.display = 'none';
    })
}

navSlide();

const navClose = () => {
    const close = document.querySelector(".close-nav");
    const sideNav = document.querySelector(".side-nav");

    close.addEventListener("click",()=>{
        sideNav.classList.toggle("side-nav-active");
        document.getElementById('mainBody').style.marginLeft = '0px';
        document.querySelector('.burger').style.display = 'block';
        document.querySelector('.close-nav').style.display = 'none';
    })
}

navClose();
