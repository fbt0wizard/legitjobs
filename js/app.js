function subscribe() {
    var entry = document.getElementById("userEmail").value;
    if(!entry.includes("@") ) {
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Please enter a valid email',
            showConfirmButton: false,
            timer: 2000
        })
    } else {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'You will now get job updates',
            showConfirmButton: false,
            timer: 2000
        })
    }
}

