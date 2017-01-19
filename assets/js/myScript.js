/**
 * Created by Amine on 03/01/2017.
 */

$(document).ready(function () {

    $(function () {
        setInterval(function () {
            $(".slideshow ul").animate({marginLeft: 0}, 800, function () {
                $(this).css({marginLeft: 0}).find("li:last").after($(this).find("li:first"));
            })
        }, 3500);


        $("#accueil").click(function () {
            $(".current").attr('class', "");
            $("#accueil").attr('class', "current");
        });

        $("#pub").click(function () {
            $(".current").attr('class', "");
            $(this).attr('class', "current");
        });

        $("#chercheuur").click(function () {
            $(".current").attr('class', "");
            $(this).attr('class', "current");
        });

        $("#conf").click(function () {
            $(".current").attr('class', "");
            $(this).attr('class', "current");
        });

        $("#Journaux").click(function () {
            $(".current").attr('class', "");
            $(this).attr('class', "current");
        });

        $("#Contact").click(function () {
            $(".current").attr('class', "");
            $(this).attr('class', "current");
        });
    });

    $(".the-newspaper").each(function (i) {
        $(this).click({x: i}, function (event) {
            return window.open($(this).attr('title'), '_blank');
        });
    });

    $(".btn-Event").each(function (i) {
        $(this).click({x: i}, function (event) {
            return window.open($(this).attr('href'), '_blank');
        });
    });

    $("#doSearchPub").click(function (e) {
        e.preventDefault();


        if ($("#anneePub option:selected").text() == "Selectionner" && $("#searchDomine option:selected").text() == "Selectionner") {
            window.location.href = "http://localhost/projet_web_2017_partie_1/index.php?page=Publications";
        }

        if ($("#anneePub option:selected").text() != "Selectionner" && $("#searchDomine option:selected").text() != "Selectionner") {
            window.location.href = "http://localhost/projet_web_2017_partie_1/index.php?page=Publications&annee=" +
                $("#anneePub option:selected").text() +
                "&domaine=" +
                $("#searchDomine option:selected").text();
        }


        if ($("#anneePub option:selected").text() != "Selectionner" && $("#searchDomine option:selected").text() == "Selectionner") {
            window.location.href = "http://localhost/projet_web_2017_partie_1/index.php?page=Publications&annee=" +
                $("#anneePub option:selected").text();
        }

        if ($("#anneePub option:selected").text() == "Selectionner" && $("#searchDomine option:selected").text() != "Selectionner") {
            window.location.href = "http://localhost/projet_web_2017_partie_1/index.php?page=Publications&domaine=" +
                $("#searchDomine option:selected").text();
        }

        // ajax();
    });

    $("#doSearch").click(function (e) {
        e.preventDefault();


        if ($("#continents option:selected").text() == "Selectionner"
            && $("#pays option:selected").text() == "Selectionner"
            && $("#domainerecherche option:selected").text() == "Selectionner") {
            window.location.href = "http://localhost/projet_web_2017_partie_1/index.php?page=Chercheurs";
        }

        if (($("#continents option:selected").text() != "Selectionner"
            && $("#pays option:selected").text() != "Selectionner"
            && $("#domainerecherche option:selected").text() != "Selectionner")) {
            window.location.href = "http://localhost/projet_web_2017_partie_1/index.php?page=Chercheurs&continent=" +
                $("#continents option:selected").text() +
                "&pays=" + $("#pays option:selected").text() +
                "&domaine=" + $("#domainerecherche option:selected").text();
        }


        if (($("#continents option:selected").text() != "Selectionner"
            && $("#pays option:selected").text() == "Selectionner"
            && $("#domainerecherche option:selected").text() == "Selectionner")) {
            window.location.href = "http://localhost/projet_web_2017_partie_1/index.php?page=Chercheurs&continent=" +
                $("#continents option:selected").text();
        }

        if (($("#continents option:selected").text() == "Selectionner"
            && $("#pays option:selected").text() != "Selectionner"
            && $("#domainerecherche option:selected").text() == "Selectionner")) {
            window.location.href = "http://localhost/projet_web_2017_partie_1/index.php?page=Chercheurs&pays=" +
                $("#pays option:selected").text();
        }

        if (($("#continents option:selected").text() == "Selectionner"
            && $("#pays option:selected").text() == "Selectionner"
            && $("#domainerecherche option:selected").text() != "Selectionner")) {
            window.location.href = "http://localhost/projet_web_2017_partie_1/index.php?page=Chercheurs&domaine=" +
                $("#domainerecherche option:selected").text();
        }

        if (($("#continents option:selected").text() != "Selectionner"
            && $("#pays option:selected").text() != "Selectionner"
            && $("#domainerecherche option:selected").text() == "Selectionner")) {
            window.location.href = "http://localhost/projet_web_2017_partie_1/index.php?page=Chercheurs&continent=" +
                $("#continents option:selected").text() +
                "&pays=" + $("#pays option:selected").text();
        }

        if (($("#continents option:selected").text() != "Selectionner"
            && $("#pays option:selected").text() == "Selectionner"
            && $("#domainerecherche option:selected").text() != "Selectionner")) {
            window.location.href = "http://localhost/projet_web_2017_partie_1/index.php?page=Chercheurs&continent=" +
                $("#continents option:selected").text() +
                "&domaine=" + $("#domainerecherche option:selected").text();
        }

        if (($("#continents option:selected").text() == "Selectionner"
            && $("#pays option:selected").text() != "Selectionner"
            && $("#domainerecherche option:selected").text() != "Selectionner")) {
            window.location.href = "http://localhost/projet_web_2017_partie_1/index.php?page=Chercheurs&pays=" +
                $("#pays option:selected").text() +
                "&domaine=" + $("#domainerecherche option:selected").text();
        }

        // ajax();
    });

    $('#soumission').click(function () {
        $('#AlphaAnnuel').attr('disabled', true);
    });

    $('#deroulement').click(function () {
        $('#AlphaAnnuel').attr('disabled', true);
    });

    $("#doSearchConference").click(function (e) {
        e.preventDefault();

        if ($('#soumission').attr('checked')) {
            window.location.href = "http://localhost/projet_web_2017_partie_1/index.php?page=Conferences&soumission=true";
        } else if ($('#deroulement').attr('checked')) {
            window.location.href = "http://localhost/projet_web_2017_partie_1/index.php?page=Conferences&deroulement=true";
        } else if ($("#AlphaAnnuel option:selected").text() != "Selectionner") {
            window.location.href = "http://localhost/projet_web_2017_partie_1/index.php?page=Conferences&annee=" +
                $("#AlphaAnnuel option:selected").text();
        } else {
            window.location.href = "http://localhost/projet_web_2017_partie_1/index.php?page=Conferences";
        }

    });

    $("#doSearchJournal").click(function (e) {
        e.preventDefault();

        if ($("#ordreAlpha option:selected").text() != "Selectionner") {
            window.location.href = "http://localhost/projet_web_2017_partie_1/index.php?page=Journaux&alpha=" +
                $("#ordreAlpha option:selected").text();
        } else {
            window.location.href = "http://localhost/projet_web_2017_partie_1/index.php?page=Journaux";
        }

    });


});
