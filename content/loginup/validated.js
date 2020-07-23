
$("#userSignUp").on("click", function () {
    var userId = $("#userId").val();
    var name = $("#name").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var club = $("#club").val();
    var mobileNumber = $("#mobileNumber").val();
    var sponsor = $("#sponsor").val();
    var confirmPassword = $("#confirmPassword").val();
    var recoveryPassword = $("#recoveryPassword").val();
    $.ajax({
        method: "POST",
        url: "userSignUp.php",
        data: {name: name, userId: userId, email: email, password: password,confirmPassword:confirmPassword, mobileNumber: mobileNumber, 
            sponsor: sponsor, club: club, recoveryPassword: recoveryPassword},
        success: function (data) {

            if (data!== "") {
                $(".status").text(data);
            } else {
                $("#signup").hide();
                location.reload();
            }
        }
    });
});
$("#userSignInForm").on("click", function () {

    var userIdOfuser = $("#userIdOfuser").val();
    var passwordOfuser = $("#passwordOfuser").val();

    $.ajax({
        method: "POST",
        url: "userLogin.php",
        data: {userId: userIdOfuser,
            password: passwordOfuser},
        success: function (data) {
         
            if (data === "no") {
                $(".statusin").html("Account isn't valid");
            } else {
                $(".statusin").html("Succesfully Logining...");
                var timer = setTimeout(function() {
                  window.location='index2.php'
                }, 2000);
            }
        }
    });
});
