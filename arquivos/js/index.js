$("#btnCad").click(function (e) {
    e.preventDefault();
    window.location.href = 'entrar.php';
});

$("#btnEntrar").click(function (e) {
    e.preventDefault();
    window.location.href = 'entrar.php';
});


$("#btnEntrarBottom").click(function (e) {
    e.preventDefault();
    window.location.href = 'entrar.php';
});

$(".input-search-index").on('keyup', async function (e) {
    e.preventDefault();
    e.stopPropagation();


    if (e.key === "Enter") {
        $("#modal-endereco-container").removeClass("hidden");
    }


});


$(".use-local-btn-index ").click(function (e) {
    e.preventDefault();
    $("#modal-endereco-container").removeClass("hidden");
});


function finalizarCadastro() {
    window.location.href = 'cardapio.php';

}

function cadEnd() {
    $(".location-map").css("height", "80px");
    $(".finalizarcadend").show();
}






function eraseCookie(name) {
    document.cookie = name + '=; Max-Age=-99999999;';
}


function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}