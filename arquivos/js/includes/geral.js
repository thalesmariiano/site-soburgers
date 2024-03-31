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