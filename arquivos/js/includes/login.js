import { validarTel, validaCPF } from './filtros.js';

$("#inputCpf").on('change keyup click', function (e) {
    e.preventDefault();

    var inputCpf = $("#inputCpf").val().trim();

    if (!validaCPF(inputCpf)) {
        $("#btnLoginCpf").prop("disabled", true);
        $("#btnLoginCpf").removeClass("btn-login-cpf").delay(100).addClass("btn-disabled");
        return false;
    }

    $("#btnLoginCpf").prop("disabled", false);
    $("#btnLoginCpf").removeClass("btn-disabled").delay(700).addClass("btn-login-cpf");


});


setInterval(function () {
    $("#inputCpf").trigger('change');
}, 100);

$('#inputCpf').keypress(function (event) {
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if (keycode == '13') {
        $("#btnLoginCpf").click();
    }
});

