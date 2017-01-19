/**
 * Created by Amine on 07/01/2017.
 */
$(document).ready(function () {
    $("#show_login").click(function () {
        showpopup();
    });
    $("#close_login").click(function () {
        hidepopup();
    });


    $("#login-btn").click(function () {
        $("#authentification").hide();
    })
});

function showpopup() {
    $("#loginform").fadeIn();
    $("#loginform").css({"visibility": "visible", "display": "block"});
}

function hidepopup() {
    $("#loginform").fadeOut();
    $("#loginform").css({"visibility": "hidden", "display": "none"});
}