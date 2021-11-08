
var location_pref = "";
var qualification = "";
var jobType = "";

async function setLocation() {
    const { value: formValue } = await Swal.fire({
        background: '#008080',
        showCloseButton: true,
        html: '<div style="padding-top: 2rem;">' +
            '<h2 style="font-weight: 500; margin-bottom: 1rem; font-size: 17px; color: #fff;">Set your prefrence</h2>' +
            '<select placeHolder="Select Location" id="swal-input1" style="width: 80%; outline: none; border: 1px solid #000; border-radius: 3px; height: 24px; font-size: 15px; color: grey;">' +
            '<option value="">All Locations</option>' +
            '<option value="Lagos">Lagos</option>' +
            '<option value="Abuja">Abuja</option>' +
            '<option value="Akwa ibom">Akwa ibom</option>' +
            '<option value="Anambra">Anambra</option>' +
            '</select>' +

            '<select id="swal-input2" style="width: 80%; outline: none; border: 1px solid #000; border-radius: 3px; height: 24px; font-size: 15px; color: grey; margin-top:1.5rem;">' +
            '<option value="">All qualifications</option>' +
            '<option value="NCE">NCE</option>' +
            '<option value="BA/BSc/HND">BA/BSc/HND</option>' +
            '<option value="SSCE">SSCE</option>' +
            '<option value="OND">OND</option>' +
            '<option value="MBA/MSc/MA">MBA/MSc/MA</option>' +
            '<option value="Expatriate Job">Expatriate Job</option>' +
            '</select>' +

            '<select id="swal-input3" style="width: 80%; outline: none; border: 1px solid #000; border-radius: 3px; height: 24px; font-size: 15px; color: grey;margin-top:1.5rem;">' +
            '<option value="">All Job types</option>' +
            '<option value="Full-time">Full-time</option>' +
            '<option value="Part-time">Part-time</option>' +
            '<option value="Remote">Remote</option>' +
            '<option value="Contract">Contract</option>' +
            '<option value="Expatriate Job">Expatriate Job</option>' +
            '</select>' +
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
            if (data === 'posted') {
                const pending = await Swal.fire({
                    icon: 'success',
                    text: 'Your job prefrence has been saved!'
                });
                if (pending) {
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
        success: function (data) {
            $("#hotResults").html(data);
        }
    })
});

//delete profile pics
function deletePics() {
    if(pics_loc != '/legitjobs/images/profile.png') {
        $.ajax({
            type: "POST",
            url: "/legitjobs/engine/profile_pics.php",
            dataType: "html",
            data: {
                delete: "yes"
            },
            success: function (data) {
                if (data == 'deleted') {
                    Swal.fire({
                        icon: "success",
                        confirmButtonColor: "#008080",
                        html: "<p style='color: #535353; font-size: 20px;'>deleted</p>"
                    }).then((result) => {
                        if(result.isConfirmed) {
                            location.reload();
                        }
                    })
                }
            }
        })
    }else {
        Swal.fire({
            width: "max-content",
            showConfirmButton: false,
            background: "#008080",
            html: "<p style='color: #fff; font-size: 14px;'>you don't have a profile picture</p>"
        })
    }
}

var formOutput;
function upload() {
    Swal.fire({
        showCloseButton: true,
        width: 'max-content',
        background: '#f1f1f1',
        confirmButtonColor: '#008080',
        confirmButtonText: 'preview',
        html:
            '<div class="pop-up">' +
            '<h4>Upload a profile picture</h4><br />' +
            '<hr>' +
            '<form id="uploadimage" action="" method="post" enctype="multipart/form-data">' +
            '<div id="image_preview"><img id="previewing" src="' + pics_loc + '" /></div>' +
            '<hr id="line">' +
            '</hr>' +
            '<div id="selectImage">' +
            '<label class="pic-label">Select Your Image</label><br />' +
            '<input type="file" name="file" id="file" required /><br>' +
            '<button id="defaultBtn" type="button" onClick="deletePics()">clear</button>'+
            '</div>' +
            '</form>' +
            '</div>'
    }).then((result) => {
        if(result.isConfirmed) {
            var validate = document.getElementById('file').files[0];
            if (validate == undefined) {
                Swal.fire({
                    background: '#008080',
                    showConfirmButton: false,
                    html: '<p class="no-pics">You did not upload any picture</p>'
                })
                return;
            }
            var imagefile = validate.type;
            var match = ["image/jpeg", "image/png", "image/jpg"];
            if (!((imagefile == match[0]) || (imagefile == match[1]) || (imagefile == match[2]))) {
                Swal.fire({
                    background: '#f1f1f1',
                    icon: 'error',
                    html: '<p style="color: #5b5b5b; font-size: 13px;">Invalid Picture Format <br> Only jpeg, jpg and png Images type allowed</p>',
                    confirmButtonColor: '#008080'
                })
                return false;
            }
            var form = document.getElementById('uploadimage');
            formOutput = new FormData(form);

            var upload = document.getElementById('file').files[0];
            const reader = new FileReader()
            reader.readAsDataURL(upload);
            reader.onload = (e) => {
            Swal.fire({
                width: 'max-content',
                html: '<div id="image_preview"><img id="uploaded" src="' + e.target.result + '" /></div>',
                showCancelButton: 'true',
                cancelButtonColor: 'red',
                confirmButtonColor: '#008080',
                confirmButtonText: 'upload',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "./engine/profile_pics.php",
                        type: "POST",
                        data: formOutput,
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function (data) {
                            if(data == "success") {
                                Swal.fire({
                                    html: '<h3>Profile picture Updated</h3>',
                                    icon: 'success',
                                    confirmButtonColor: '#008080'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }
                                })

                            }
                            if(data == "invalid") {
                                Swal.fire({
                                    background: '#f1f1f1',
                                    icon: 'error',
                                    html: '<p style="color: #5b5b5b; font-size: 13px;"> File too large or Invalid Picture Format</p>',
                                    confirmButtonColor: '#008080'
                                })
                            }

                        }
                    });

                }
            })

        }
        }
    })
}

var pics_loc;

$(document).ready(function () {
    $.ajax({
        type: "POST",
        url: "./engine/profile_pics.php",
        dataType: "html",
        data: {
            store: "yes"
        },
        success: function (data) {
            if(data.length > 4) {
                pics_loc = data;
            }else {
                pics_loc = '/legitjobs/images/profile.png'
            }
            
        }
    })
});



