import { validarTel, validaCPF } from './includes/filtros.js';


$(".backbtn").click(function (e) {
    e.preventDefault();
    window.location.href = '/';
});

$(".btn--google").click(function (e) {
    e.preventDefault();
    window.location.href = 'cardapio.php';
});

$(".btn--facebook").click(function (e) {
    e.preventDefault();
    window.location.href = 'cardapio.php';
});


$(".btn--cpf").click(function (e) {
    e.preventDefault();


    $(".cpfdiv").hide();
    $(".socialLoginDiv").hide();
    $(".cpfLogin").show();


    $(".input-cpf").focus();
    // window.location.href = 'cardapio.php';
});


$("#btnLoginCpf").click(function (e) {

    e.preventDefault();

    var cpf = $("#inputCpf").val().trim();

    if (!validaCPF(cpf)) {
        $(this).prop("disabled", true);
        $(this).removeClass("btn-login-cpf").delay(100).addClass("btn-disabled");
        return false;
    }


    window.location.href = 'cardapio.php';

});
