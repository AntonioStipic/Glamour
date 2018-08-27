// $("#brojUzvanika").on("change", function () {
//     console.log("Hej");
// })


$(".slider1").css("font-size", "25px");
$(".slider1").css("color", "red");

$("#brojUzvanika").on('input', function () {
    console.log($(this).val());

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