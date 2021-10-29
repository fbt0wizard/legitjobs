
$(document).ready(function () {

    $('#keyword').keyup(function () {
        var keys = $(this).val();
        word = document.getElementById("keyword").value;    
        if(keys != "") {
            $.ajax({
                type: "POST",
                url: "/legitjobs/engine/live_search_engine.php",
                data: {
                    keyword: keys
                },
                cache: false,
                success: function (data) {
                    $("#results").html(data);
                    $("#results").css("display", "block");
                },
                error: function (xhr, status, error) {
                    console.error(xhr);
                }
            });
        } else {
            $("#results").css("display", "none");
        }
    })
})

var word
$("#keyword").focusout(function () {
    $("#labelOne").css("box-shadow", "none");
    setTimeout(function() { 
        $("#results").css("display", "none");
    }, 500);
})

$("#keyword").focusin(function () {
    $("#labelOne").css("box-shadow", "rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px");
    if(word == "") {
        $("#results").css("display", "none");
    }
  
})


function fill(value) {
    $("#keyword").val(value);
    $("#results").css("display", "none");  
}



$(document).ready(function () {

    $('#locationKey').keyup(function () {
        var keys = $(this).val();
        word2 = document.getElementById("locationKey").value;    
        if(keys != "") {
            $.ajax({
                type: "POST",
                url: "/legitjobs/engine/live_search_engine.php",
                data: {
                    locationKey: keys
                },
                cache: false,
                success: function (data) {
                    $("#loc").html(data);
                    $("#loc").css("display", "block");
                },
                error: function (xhr, status, error) {
                    console.error(xhr);
                }
            });
        } else {
            $("#loc").css("display", "none");
        }
    })
});

var word2
$("#locationKey").focusout(function () {
    $("#labelTwo").css("box-shadow", "none");
    setTimeout(function() { 
        $("#loc").css("display", "none");
    }, 500);
})

$("#locationKey").focusin(function () {
    $("#labelTwo").css("box-shadow", "rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px");
    if(word2 == "") {
        $("#loc").css("display", "none");
    }
  
})


function fill2(value) {
    $("#locationKey").val(value);
    $("#loc").css("display", "none");  
}
// setting delay function
async function delay(delayInms) {
    return new Promise (resolve => {
      setTimeout(() => {
        resolve(2);
      }, delayInms);
    })
}


$(document).ready(function () {
    $('#fireSearch').click(function (event) {
        event.preventDefault();
        var whichJob = $("#keyword").val();
        var where = $("#locationKey").val();
        if(whichJob != "" || where != "") {
            $("#searchResult").css("display", "none");
            $("#searchHistory").css("display", "none");
            $("#loadingBar").css("display", "block");
            $.ajax({
                type: "POST",
                url: "/legitjobs/engine/live_search_engine.php",
                data: {
                    whichJob: whichJob,
                    where: where
                },
                cache: false,
                success: async function (data) {
                    await delay(2000);
                    $("#loadingBar").css("display", "none");
                    $("#searchResult").html(data);
                    // console.log(data);
                    $("#searchResult").css("display", "block");
                    $("#searchHistory").css("display", "block");
                    // $("#searchResult").css("display", "block");
                },
                error: function (xhr, status, error) {
                    console.error(xhr);
                }
            });
        } else {
            // $("#loc").css("display", "none");
        }
    });
});

