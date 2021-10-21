$(document).ready(function () {
    $("#postBtn").click(function (event) {
        event.preventDefault();
        var heading = $("#heading").val();
        var experience = $("#experience").val();
        var experience_to = $("#experienceTo").val();
        var qualification = $("#qualification").val();
        var job_type = $("#jobType").val();
        var job_field = $("#jobField").val();
        var job_location = $("#jobLocation").val();
        var job_tittle = $("#tittle").val();
        var company_name = $("#companyName").val();
        var company_details = $("#companyDetails").val();
        var job_description = $("#jobDescription").val();
        var job_method = $("#jobMethod").val();

        $.ajax({
            type: "POST",
            url: "/legitjobs/engine/post_engine.php",
            data: {
                heading: heading,
                experience: experience,
                experienceto: experience_to,
                qualification: qualification,
                job_type: job_type,
                job_field: job_field,
                job_location: job_location,
                job_tittle: job_tittle,
                company_name: company_name,
                company_details: company_details,
                job_description: job_description,
                job_method: job_method
            },
            cache: false,
            success: function (data) {
                if(data == 'posted') {
                    Swal.fire(
                        'Great!',
                        'Job has been posted!',
                        'success'
                      );
                      return;
                }else {
                    console.log(data);
                }
            },
            error: function (xhr, status, error) {
                console.error(xhr);
            }

        })
    });

});