$(document).ready(function () {
    $("#img1").width(150).height(150).mouseover(function (){
        $(this).animate({
            width: "170px",
            height: "170px"
        }, 200).delay(200);

        $(this).animate({
            width: "150px",
            height: "150px"
        }, 700);
    });

    $("#img2").width(150).height(150).mouseover(function (){
        $(this).animate({
            width: "170px",
            height: "170px"
        }, 200).delay(200);

        $(this).animate({
            width: "150px",
            height: "150px"
        }, 700);
    });

    $("#img3").width(150).height(150).mouseover(function (){
        $(this).animate({
            width: "170px",
            height: "170px"
        }, 200).delay(200);

        $(this).animate({
            width: "150px",
            height: "150px"
        }, 700);
    });

    $("#img4").width(150).height(150).mouseover(function (){
        $(this).animate({
            width: "170px",
            height: "170px"
        }, 200).delay(200);

        $(this).animate({
            width: "150px",
            height: "150px"
        }, 700);
    });
});