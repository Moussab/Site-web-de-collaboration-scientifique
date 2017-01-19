/**
 * Created by Amine on 15/01/2017.
 */


$(document).ready(function () {


    $("#submit2").click(function (e) {
        localStorage.setItem($("#pageColor1 option:selected").text() + "m", $(".jscolor").val());
    });
});