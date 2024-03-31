let ultimaBusca = '';

$("#buscarProduto").on('mouseleave', function (e) {
    let palavra = $(this).val().trim();

    if (palavra.length == 0) {

        // $(".resultado").hide();
    }
});


$("#buscarProduto").on('keyup', async function (e) {

    e.preventDefault();
    e.stopPropagation();

    let palavra = $(this).val().trim();

    if (e.key === "Escape") {
        $(this).val('');
        ultimaBusca = ''
        return false;
    }


    if (palavra.length == 0) {
        ultimaBusca = ''
        return false;
    }

    if (palavra.length > 4 && (palavra.length % 2) === 0 || palavra.length >= 8 && palavra != ultimaBusca) {

        ultimaBusca = palavra;
    }

});



$(document).ready(function () {
    $("input[name='method-option']").change(function () {
        selected_value = $("input[name='method-option']:checked").val();
        if (selected_value == "TAKEOUT") {
            $("#methodDelivery").removeClass("delivery-methods-modal__option--checked")
            $("#methodTakeOut").addClass("delivery-methods-modal__option--checked");
        } else {
            $("#methodTakeOut").removeClass("delivery-methods-modal__option--checked")
            $("#methodDelivery").addClass("delivery-methods-modal__option--checked");
        }
    });


    $(".btnSelEntreCard").click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        openIfoodModal(100);
    });

    $(".btn--confirmar-modo").click(async function (e) {
        e.preventDefault();
        e.stopPropagation();

        selected_value = $("input[name='method-option']:checked").val();
        await setModoEntrega(selected_value);
        closeIfoodModal(100);
    });

});


function setModoEntrega(modo) {
    if (modo == "TAKEOUT") {
        swipeDisplay("#btnBalcao", "#btnEntrega");
        swipeDisplay("#balcaoInfo", "#freteInfo");
    } else {
        swipeDisplay("#btnEntrega", "#btnBalcao");
        swipeDisplay("#freteInfo", "#balcaoInfo");
    }

}