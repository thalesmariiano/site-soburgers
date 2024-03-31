$(document).ready(function () {
    $("input.telefone").val("");
    $("input.cpf").val("");
    $("input.nome").val("");


    $("input.cpf").mask("999.999.999-99");

    jQuery("input.telefone")
        .mask("(99) 9999-9999?9")
        .focusout(function (event) {
            var target, phone, element;
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;
            phone = target.value.replace(/\D/g, '');
            element = $(target);
            element.unmask();
            if (phone.length > 10) {
                element.mask("(99) 99999-999?9");
            } else {
                element.mask("(99) 9999-9999?9");
            }
        });


    $(".moeda").change(function () {
        if ($(this).val() !== "") {
            $(this).val(moneyFormat($(this).val()).replace(/[^\d.-]/g, ''));
        }
    });



    function moneyFormat(price, sign = '') {
        const pieces = parseFloat(price).toFixed(2).split('')
        let ii = pieces.length - 3
        while ((ii -= 3) > 0) {
            pieces.splice(ii, 0, ',')
        }
        return sign + pieces.join('')
    }
});