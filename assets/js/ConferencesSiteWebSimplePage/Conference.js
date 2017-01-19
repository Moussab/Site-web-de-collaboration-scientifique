/**
 * Created by Amine on 18/01/2017.
 */


var popUp1 = document.getElementById('my-pop-up-1');

var popUp2 = document.getElementById('my-pop-up-2');

var popUp3 = document.getElementById('my-pop-up-3');

var popUp4 = document.getElementById('my-pop-up-4');

var popUp5 = document.getElementById('my-pop-up-5');

var btn1 = document.getElementById("btn-appel-com");

var btn2 = document.getElementById("btn-dates-importante");

var btn3 = document.getElementById("btn-procedure-soumission");

var btn4 = document.getElementById("btn-comite-lec-org");

var btn5 = document.getElementById("btn-prog-conf");

var span = document.getElementsByClassName("Fermer")[0];


btn1.onclick = function () {
    popUp1.style.display = "block";
};
btn2.onclick = function () {
    popUp2.style.display = "block";
};
btn3.onclick = function () {
    popUp3.style.display = "block";
};
btn4.onclick = function () {
    popUp4.style.display = "block";
};
btn5.onclick = function () {
    popUp5.style.display = "block";
};
span.onclick = function () {
    modal.style.display = "none";
};

window.onclick = function (event) {
    if (event.target == popUp1) {
        popUp1.style.display = "none";
    }

    if (event.target == popUp2) {
        popUp2.style.display = "none";
    }

    if (event.target == popUp3) {
        popUp3.style.display = "none";
    }

    if (event.target == popUp4) {
        popUp4.style.display = "none";
    }

    if (event.target == popUp5) {
        popUp5.style.display = "none";
    }
};
