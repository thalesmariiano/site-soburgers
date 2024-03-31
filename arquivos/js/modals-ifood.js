
const deliveryModal = document.querySelector('#delivery-modal-container')
const confirmDelivery = document.querySelector('#confirm-delivery')

confirmDelivery.addEventListener('click', () => {
    deliveryModal.style.display = 'none'
    $('body').css('overflow', '')
}) 

const btnEntrega = document.querySelector("#btnEntrega")

btnEntrega.addEventListener('click', () => {
    deliveryModal.style.display = ''
    $('body').css('overflow', 'hidden')
})


window.addEventListener('keydown', function (event) {
    if (event.key === 'Escape') {
        closeOptEntregaModal(200);
    }
});

window.addEventListener('click', function (e) {
    const allModals = document.querySelectorAll('.modalBox');
    let paths = e.composedPath()
    if (!paths.some(x => x.className && x.className.includes('modal__overlay'))) {
        closeIfoodModal(200);
    }
}, true);

function openIfoodModal(time = 0) {
    closeIfoodModal();

    setTimeout(function () {
        $(".modalBox").css("display", "block");
        setTimeout(function () {
            $(".modal__overlay").css("opacity", "1");
        }, time);
    }, 100);

}

function closeIfoodModal(time = 0) {
    setTimeout(function () {
        $(".modal__overlay").css("opacity", "0");
    }, time);
    $(".modalBox").css("display", "none");
}