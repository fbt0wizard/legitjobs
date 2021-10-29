// setting delay function
async function delay(delayInms) {
  return new Promise (resolve => {
    setTimeout(() => {
      resolve(2);
    }, delayInms);
  })
}


$(document).ready(function(){
    //Chosen
    $(".multipleChosen").chosen({
        placeholder_text_multiple: "What's your rating" //placeholder
      });
})


$('#manageJob').click(async function () {
  if($(".manage-jobs").css("display") == "none") {

    $("#postJob").css("background", "");
    $("#postJob").css("color", "");

    $("#manageJob").css("background", "#008080");
    $("#manageJob").css("color", "#fff");

    $(".job-post").css("display", "none");
    $("#loadingBar").css("display", "block");

    await delay(500);

    $("#loadingBar").css("display", "none");
    $(".manage-jobs").css("display", "block");
  }
})

$('#postJob').click(async function () {
  if($(".job-post").css("display") == "none") {

    $("#postJob").css("background", "#008080");
    $("#postJob").css("color", "#fff");

    $("#manageJob").css("background", "");
    $("#manageJob").css("color", "");

    $(".manage-jobs").css("display", "none");
    $("#loadingBar").css("display", "block");

    await delay(500);
    $("#loadingBar").css("display", "none");
    $(".job-post").css("display", "block");
  }
})

// setting pending and approved job function

$(document).ready(function () {
  $("#postJob").css("background", "#008080");
  $("#postJob").css("color", "#fff");

      $(".pending").css("display", "none");
      $(".manage-pending-details").css("display", "none");

      $(".manage-details").css("display", "none");
      $("#loadingMan").css("display", "block");
      $.ajax({
        type: "POST",
        url: "/legitjobs/engine/backend_engine.php", 
        data: {
            go: " "
        },            
        dataType: "html",               
        success: async function(data){  
          if(data == "out"){
            location.reload();
            return;
          }
          $("#loadingMan").css("display", "none");   
          $(".content").html(data); 
        }
      })
});

$(document).ready(function () {

  $('#approvedJobs').prop('disabled', false);
  if($(".pending").css("display") == "none") {
    $(".approved").css("display", "none");

    $(".manage-details").css("display", "none");
    $("#loadingMan").css("display", "block");
    $.ajax({
      type: "POST",
      url: "/legitjobs/engine/backend_engine.php", 
      data: {
          step: " "
      },            
      dataType: "html",               
      success: async function(data){ 
        if(data == "out"){
          location.reload();
          return;
        } 
        $("#loadingMan").css("display", "none");   
        $(".pending-content").html(data); 
      }
    })
  }
});

function view(value) {
  $('#approvedJobs').prop('disabled', true);
  $(".approved").css("display", "none");
  $(".pending").css("display", "none");
  $("#loadingBar").css("display", "block");
  $.ajax({
    type: "POST",
    url: "/legitjobs/engine/backend_engine.php",
    data: {
        id: value,
    },
    // cache: false,
    success: async function (data) {
      if(data == "out"){
          location.reload();
          return;
      }
      await delay(500);
      $("#loadingBar").css("display", "none");
      $(".manage-details").css("display", "block"); 
      $(".more-content").html(data);
    },
    error: function (xhr, status, error) {
        console.error(xhr);
    }
  });
}

function viewPending(value) {
  $('#pendingJobs').prop('disabled', true);
  $(".approved").css("display", "none");
  $(".pending").css("display", "none");
  $("#loadingBar").css("display", "block");
    $.ajax({
      type: "POST",
      url: "/legitjobs/engine/backend_engine.php",
      data: {
          id: value,
      },
      // cache: false,
      success: async function (data) {
          if(data == "out"){
            location.reload();
            return;
          }
        await delay(500);
        $("#loadingBar").css("display", "none");
        $(".manage-pending-details").css("display", "block"); 
        $(".more-content2").html(data);
      },
      error: function (xhr, status, error) {
          console.error(xhr);
      }
    });
}


$(document).ready(function () {

  $('#approvedJobs').click(async function () {
    if($(".approved").css("display") == "none") {

      $("#approvedJobs").css("color", "#fff");
      $("#approvedJobs").css("background-color", "#008080");

      $("#pendingJobs").css("color", "");
      $("#pendingJobs").css("background-color", "");

      $('#pendingJobs').prop('disabled', false);
      $(".manage-details").css("display", "none");
      $(".manage-pending-details").css("display", "none");
      $(".main-home").css("display", "none");
      $(".pending").css("display", "none");
      $("#loadingMan").css("display", "block");
      await delay(500);
      $("#loadingMan").css("display", "none");
      $(".approved").css("display", "block");
    }
  })
})

$(document).ready(function () {

  $('#pendingJobs').click(async function () {
    if($(".pending").css("display") == "none") {

      $("#pendingJobs").css("color", "#fff");
      $("#pendingJobs").css("background-color", "#008080");

      $("#approvedJobs").css("color", "");
      $("#approvedJobs").css("background-color", "");

      $('#approvedJobs').prop('disabled', false);
      $(".manage-details").css("display", "none");
      $(".manage-pending-details").css("display", "none");
      $(".main-home").css("display", "none");
      $(".approved").css("display", "none");
      $("#loadingMan").css("display", "block");
      await delay(500);
      $("#loadingMan").css("display", "none");
      $(".pending").css("display", "block");
    }
  })
})


async function back() {
    $('#approvedJobs').prop('disabled', false);
    $(".manage-details").css("display", "none");
    $("#loadingBar").css("display", "block");
    await delay(500);
    $("#loadingBar").css("display", "none");
    $(".approved").css("display", "block");

}
async function backPending() {
  $('#approvedJobs').prop('disabled', false);
  $(".manage-pending-details").css("display", "none");
  $("#loadingBar").css("display", "block");
  await delay(500);
  $("#loadingBar").css("display", "none");
  $(".pending").css("display", "block");

}

async function home() {
    $("#pendingJobs").css("color", "");
    $("#pendingJobs").css("background-color", "");

    $("#approvedJobs").css("color", "");
    $("#approvedJobs").css("background-color", "");
    $('#approvedJobs').prop('disabled', false);
    $('#pendingJobs').prop('disabled', false);
    $(".approved").css("display", "none");
    $(".pending").css("display", "none");
    $("#loadingBar").css("display", "block");
    await delay(500);
    $("#loadingBar").css("display", "none");
    $(".main-home").css("display", "block");
}



function approve(value) {
  $.ajax({
    type: "POST",
    url: "/legitjobs/engine/backend_engine.php",
    data: {
        approve: value,
    },
    // cache: false,
    success: async function (data) {
      if(data == "out"){
          location.reload();
          return;
        }
      if(data == "done") {
        const pending = await Swal.fire({
          icon: 'success',
          text: 'You approved this job!'
      });
      if(pending) {
          refresh();
          return;
      }
      }
    },
    error: function (xhr, status, error) {
        console.error(xhr);
    }
  });
}

async function refresh() {

      $(".pending").css("display", "none");
      $("#loadingMan").css("display", "block");
      $.ajax({
        type: "POST",
        url: "/legitjobs/engine/backend_engine.php", 
        data: {
            step: " "
        },            
        dataType: "html",               
        success: async function(data){  
          if(data == "out"){
            location.reload();
            return;
          }
          await delay(500);
          $("#loadingMan").css("display", "none");  
          $(".pending").css("display", "block");  
          $(".pending-content").html(data); 
        }
      });
      $.ajax({
        type: "POST",
        url: "/legitjobs/engine/backend_engine.php", 
        data: {
            go: " "
        },            
        dataType: "html",               
        success: async function(data){  
          if(data == "out"){
            location.reload();
            return;
          }  
          $(".content").html(data); 
        }
      })
    
}
