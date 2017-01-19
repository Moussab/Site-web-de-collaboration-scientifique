/**
 * Created by Amine on 15/01/2017.
 */

$(document).ready(function () {

    function resizeIframe(obj) {
        obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
    }

    $("#retourner").click(function (e) {
        e.preventDefault();
        window.location.href = "http://localhost/PROJET_WEB_2017_PARTIE_1/index.php?page=Contenu";
    });


});