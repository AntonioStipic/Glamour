$(".slider1").css("font-size", "25px");
$(".slider1").css("color", "red");

$("#brojUzvanika").on('input', function () {

    for (let i = 1; i < 6; i++) {
        $(".slider" + i).css("color", "black");
        $(".slider" + i).css("font-size", "20px");
    }

    $(".slider" + $(this).val()).css("color", "red");
    $(".slider" + $(this).val()).css("font-size", "25px");
});

$(".planerBlock").on("click", function () {


    if ($(this).hasClass("planerClicked")) {
        $(this).removeClass("planerClicked");
    } else {
        $(this).addClass("planerClicked");
    }
});

$("#clearPlaner").on("click", function () {

    $("#formIme").val("");
    $("#formEmail").val("");
    $("#formMobitel").val("");
    $("#formNaslov").val("");
    $("#formTekst").val("");

    $(".planerClicked").removeClass("planerClicked");

    for (let i = 2; i < 6; i++) {
        $(".slider" + i).css("color", "black");
        $(".slider" + i).css("font-size", "20px");
    }

    $(".slider1").css("color", "red");
    $(".slider1").css("font-size", "25px");

    $("#planerGodina").val("2018");
    $("#planerMjesec").val("Rujan");
    $("#planerDan").val("Petak");
});

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$("#sendPlaner").on("click", function () {

    let brojUzvanika = $("#brojUzvanika").val();
    let godinaVjencanja = $("#planerGodina").val();
    let mjesecVjencanja = $("#planerMjesec").val();
    let danVjencanja = $("#planerDan").val();
    let dodaci = $(".planerClicked").text().split("  ");
    dodaci.shift();

    let formIme = $("#formIme").val();
    let formEmail = $("#formEmail").val();
    let formMobitel = $("#formMobitel").val();
    let formNaslov = $("#formNaslov").val();
    let formTekst = $("#formTekst").val();

    let data = {"brojUzvanika": brojUzvanika, "godinaVjencanja": godinaVjencanja, "mjesecVjencanja": mjesecVjencanja, "danVjencanja": danVjencanja, "dodaci": dodaci, "ime": formIme, "email": formEmail, "mobitel": formMobitel, "naslov": formNaslov, "tekst": formTekst};

    // console.log(data);

    $.post("/planer", data,
        function(data){
            // console.log(data);
            // data = JSON.parse(data);
            // console.log(data);

            // document.getElementById("addImage").innerHTML = data;
            if (data == "success") {

            }

        });
});


