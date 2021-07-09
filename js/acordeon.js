$(document).ready(function () {
    //Proyectos
    $("#abierto-ponencia").click(function (){
        $("#campo-ponencia div").toggle(300);
        $(this).toggleClass("cerrado-ponencia");
    });

    $("#abierto-poster").click(function (){
        $("#campo-poster div").toggle(300);
        $(this).toggleClass("cerrado-poster");
    });

    $("#abierto-charla").click(function (){
        $("#campo-charla div").toggle(300);
        $(this).toggleClass("cerrado-charla");
    });

});