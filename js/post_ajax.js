$(document).ready(function () {
    $("#postBtn").click(function (event) {
        event.preventDefault();
        var job_tittle = $("#tittle").val();

        var prejob_field = $("#jobField").val();
        if(prejob_field.length == 1) {
            var job_field = prejob_field[0];
            var job_field1 = "";
            var job_field2 = "";
            var job_field3 = "";
            var job_field4 = "";
        }
        if(prejob_field.length == 2) {
            var job_field = prejob_field[0];
            var job_field1 = prejob_field[1];
            var job_field2 = "";
            var job_field3 = "";
            var job_field4 = "";
        }
        if(prejob_field.length == 3) {
            var job_field = prejob_field[0];
            var job_field1 = prejob_field[1];
            var job_field2 = prejob_field[2];
            var job_field3 = "";
            var job_field4 = "";
        }
        if(prejob_field.length == 4) {
            var job_field = prejob_field[0];
            var job_field1 = prejob_field[1];
            var job_field2 = prejob_field[2];
            var job_field3 = prejob_field[3];
            var job_field4 = "";
        }
        if(prejob_field.length == 5) {
            var job_field = prejob_field[0];
            var job_field1 = prejob_field[1];
            var job_field2 = prejob_field[2];
            var job_field3 = prejob_field[3];
            var job_field4 = prejob_field[4];
        }
    

        var prequalification = $("#qualification").val();
        if(prequalification.length == 1) {
            var qualification = prequalification[0];
            var qualification1 = "";
            var qualification2 = "";
            var qualification3 = "";
            var qualification4 = "";
        }
        if(prequalification.length == 2) {
            var qualification = prequalification[0];
            var qualification1 = prequalification[1];
            var qualification2 = "";
            var qualification3 = "";
            var qualification4 = "";
        }
        if(prequalification.length == 3) {
            var qualification = prequalification[0];
            var qualification1 = prequalification[1];
            var qualification2 = prequalification[2];
            var qualification3 = "";
            var qualification4 = "";
        }
        if(prequalification.length == 4) {
            var qualification = prequalification[0];
            var qualification1 = prequalification[1];
            var qualification2 = prequalification[2];
            var qualification3 = prequalification[3];
            var qualification4 = "";
        }
        if(prequalification.length == 5) {
            var qualification = prequalification[0];
            var qualification1 = prequalification[1];
            var qualification2 = prequalification[2];
            var qualification3 = prequalification[3];
            var qualification4 = prequalification[4];
        }


        var prejob_location = $("#state").val();
        if(prejob_location.length == 1) {
            var job_location = prejob_location[0];
            var job_location1 = "";
            var job_location2 = "";
            var job_location3 = "";
            var job_location4 = "";
        }
        if(prejob_location.length == 2) {
            var job_location = prejob_location[0];
            var job_location1 = prejob_location[1];
            var job_location2 = "";
            var job_location3 = "";
            var job_location4 = "";
        }
        if(prejob_location.length == 3) {
            var job_location = prejob_location[0];
            var job_location1 = prejob_location[1];
            var job_location2 = prejob_location[2];
            var job_location3 = "";
            var job_location4 = "";
        }
        if(prejob_location.length == 4) {
            var job_location = prejob_location[0];
            var job_location1 = prejob_location[1];
            var job_location2 = prejob_location[2];
            var job_location3 = prejob_location[3];
            var job_location4 = "";
        }
        if(prejob_location.length == 5) {
            var job_location = prejob_location[0];
            var job_location1 = prejob_location[1];
            var job_location2 = prejob_location[2];
            var job_location3 = prejob_location[3];
            var job_location4 = prejob_location[4];
        }


        var city = $("#city").val();
        var job_type = $("#employmentType").val();
        var country = $("#country").val();
        var minExp = $("#minExp").val();
        var maxExp = $("#maxExp").val();
        var salaryCurrency = $("#salaryCurrency").val();
        var salaryTerm = $("#term").val();
        var minimumSalary = $("#min").val();
        var maximumSalary = $("#max").val();
        var applicationDeadline = $("#deadLine").val();
        var job_description = $("#jobDescription").val();
        var job_method = $("#jobMethod").val();
        var company_name = $("#companyName").val();

        var precompanyIndustry = $("#companyIndustry").val();
        if(precompanyIndustry.length == 1) {
            var companyIndustry = precompanyIndustry[0];
            var companyIndustry1 = "";
            var companyIndustry2 = "";
            var companyIndustry3 = "";
            var companyIndustry4 = "";
        }
        if(precompanyIndustry.length == 2) {
            var companyIndustry = precompanyIndustry[0];
            var companyIndustry1 = precompanyIndustry[1];
            var companyIndustry2 = "";
            var companyIndustry3 = "";
            var companyIndustry4 = "";
        }
        if(precompanyIndustry.length == 3) {
            var companyIndustry = precompanyIndustry[0];
            var companyIndustry1 = precompanyIndustry[1];
            var companyIndustry2 = precompanyIndustry[2];
            var companyIndustry3 = "";
            var companyIndustry4 = "";
        }
        if(precompanyIndustry.length == 4) {
            var companyIndustry = precompanyIndustry[0];
            var companyIndustry1 = precompanyIndustry[1];
            var companyIndustry2 = precompanyIndustry[2];
            var companyIndustry3 = precompanyIndustry[3];
            var companyIndustry4 = "";
        }
        if(precompanyIndustry.length == 5) {
            var companyIndustry = precompanyIndustry[0];
            var companyIndustry1 = precompanyIndustry[1];
            var companyIndustry2 = precompanyIndustry[2];
            var companyIndustry3 = precompanyIndustry[3];
            var companyIndustry4 = precompanyIndustry[4];
        }
        

        var cac = $("#cac").val();
        var website = $("#website").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var companyAddress = $("#companyAddress").val();
        var company_details = $("#companyDetails").val();


        $.ajax({
            type: "POST",
            url: "/legitjobs/engine/post_engine.php",
            data: {
                job_tittle: job_tittle,

                job_field: job_field,
                job_field1: job_field1,
                job_field2: job_field2,
                job_field3: job_field3,
                job_field4: job_field4,

                qualification: qualification,
                qualification1: qualification1,
                qualification2: qualification2,
                qualification3: qualification3,
                qualification4: qualification4,

                job_location: job_location,
                job_location1: job_location1,
                job_location2: job_location2,
                job_location3: job_location3,
                job_location4: job_location4,

                city: city,
                job_type: job_type,
                country: country,
                minExp: minExp,
                maxExp: maxExp,
                salaryCurrency: salaryCurrency,
                salaryTerm: salaryTerm,
                minimumSalary: minimumSalary,
                maximumSalary: maximumSalary,
                applicationDeadline: applicationDeadline,
                job_description: job_description,
                job_method: job_method,
                company_name: company_name,

                companyIndustry: companyIndustry,
                companyIndustry1: companyIndustry1,
                companyIndustry2: companyIndustry2,
                companyIndustry3: companyIndustry3,
                companyIndustry4: companyIndustry4,

                cac: cac,
                website: website,
                email: email,
                phone: phone,
                companyAddress: companyAddress,
                company_details: company_details
            },
            cache: false,
            success: async function (data) {
                if(data == 'posted') {
                    const pending = await Swal.fire(
                        'Great!',
                        'Job has been posted!',
                        'success'
                      );
                      if(pending) {
                          location.reload();
                      }
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