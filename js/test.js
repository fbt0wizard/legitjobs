
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

var location_pref = "";
var qualification = "";
var jobType = "";

async function setLocation() {
    const {value: formValue } = await Swal.fire({
        showCloseButton: true,
        html: '<div style="padding-top: 2rem;">' +
        '<h2 style="font-weight: 500; margin-bottom: 1rem; font-size: 17px; color: #008080;">Set your prefrence</h2>'+
        '<select placeHolder="Select Location" id="swal-input1" style="width: 80%; outline: none; border: 1px solid #000; border-radius: 3px; height: 24px; font-size: 15px; color: grey;">' +
           '<option value="">All Locations</option>'+
           '<option value="Lagos">Lagos</option>'+
           '<option value="Abuja">Abuja</option>'+
           '<option value="Akwa ibom">Akwa ibom</option>'+
           '<option value="Anambra">Anambra</option>'+
        '</select>'+
 
        '<select id="swal-input2" style="width: 80%; outline: none; border: 1px solid #000; border-radius: 3px; height: 24px; font-size: 15px; color: grey; margin-top:1.5rem;">' +
           '<option value="">All qualifications</option>'+
           '<option value="NCE">NCE</option>'+
           '<option value="BA/BSc/HND">BA/BSc/HND</option>'+
           '<option value="SSCE">SSCE</option>'+
           '<option value="OND">OND</option>'+
           '<option value="MBA/MSc/MA">MBA/MSc/MA</option>'+
           '<option value="Expatriate Job">Expatriate Job</option>'+
        '</select>'+
    
        '<select id="swal-input3" style="width: 80%; outline: none; border: 1px solid #000; border-radius: 3px; height: 24px; font-size: 15px; color: grey;margin-top:1.5rem;">' +
           '<option value="">All Job types</option>'+
           '<option value="Full-time">Full-time</option>'+
           '<option value="Part-time">Part-time</option>'+
           '<option value="Remote">Remote</option>'+
           '<option value="Contract">Contract</option>'+
           '<option value="Expatriate Job">Expatriate Job</option>'+
        '</select>'+
                '</div>'
    
      })
      
      if (formValue) {
        location_pref = document.getElementById('swal-input1').value;
        qualification = document.getElementById('swal-input2').value;
        jobType = document.getElementById('swal-input3').value;
        updateLocation();
      }
}


function updateLocation() {
    $.ajax({
        type: "POST",
        url: "/legitjobs/engine/handle_pref.php",
        data: {
            location: location_pref,
            qualification: qualification,
            jobType: jobType
        },
        cache: false,
        success: async function (data) {
            if(data === 'posted') {
                const pending = await Swal.fire({
                    icon: 'success',
                    text: 'Your job prefrence has been saved!'
                });
                if(pending) {
                    location.reload();
                    return;
                }
            }
        },
        error: function (xhr, status, error) {
            console.error(xhr);
        }

    })
}


$(document).ready(function () {
    $.ajax({
        type: "POST",
        url: "/legitjobs/engine/handle_pref.php",             
        dataType: "html", 
        data: {
            hot: "yes"
        },            
        success: function(data){                   
            $("#hotResults").html(data); 
        }
    })
});




    

 