function subscribe() {
    var entry = document.getElementById("userEmail").value;
    if(!entry.includes("@") ) {
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: '<h5 style="font-size: 17px; color: red; font-weight: 500">Please enter a valid email address</h5>',
            showConfirmButton: false,
            timer: 2500
        })
    } else {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: '<h5 style="font-size: 17px; color: green; font-weight: 500">You will now get job updates</h5>',
            showConfirmButton: false,
            timer: 2500
        })
    }
}

function burger(x) {
    x.classList.toggle("change");
}


const navSlide = () => {
    const burger = document.querySelector(".container");
    const nav = document.querySelector(".nav-item-right");

    burger.addEventListener("click",()=>{
        nav.classList.toggle("nav-active");
    })
}

navSlide();


