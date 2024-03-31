
const userLocal = document.querySelector("#user-local")

const payInMoney = document.querySelector('#pay-money')
const noChange = document.querySelector('#no-change')
const yesChange = document.querySelector('#yes-change')


payInMoney.addEventListener('click', () => {
	// showElement('#dinheiro-container', 'show')
	// showElement('#black-bg-container', 'animate__fadeIn')
	// showElement('#dinheiro-modal', 'animate__fadeInUp')
	//body.style.overflow = 'hidden'

	openIfoodContainer(10, '.trocoContainer');





})

noChange.addEventListener('click', () => {
	removeElement('#dinheiro-container', 'animate__fadeOut')
	removeElement('#black-bg-container', 'animate__fadeOut')
	removeElement('#dinheiro-modal', 'animate__fadeOutDown')
	body.style.overflow = ''
})

yesChange.addEventListener('click', () => {

	removeElement('#dinheiro-modal', 'animate__fadeOutDown')
	$("#dinheiro-modal").hide();
	showElement('#troco-modal', 'animate__fadeInUp')

})


userLocal.addEventListener('click', () => {
	// showElement('#user-addresses-container', 'animate__fadeIn')
	openIfoodModal(10, '#addresses-modal');
})

function addressOptions(button) {
	const addressItem = button.parentElement.parentElement.parentElement
	const houseIcon = addressItem.children[0]
	const trashButton = addressItem.children[1]
	const isActive = addressItem.dataset.active === 'true'

	if (!isActive) {
		button.style.transform = 'rotateZ(90deg)'
		houseIcon.classList.add('hidden')
		trashButton.classList.remove('hidden')
		addressItem.dataset.active = 'true'
		return
	}
	button.style.transform = 'rotateZ(0deg)'
	houseIcon.classList.remove('hidden')
	trashButton.classList.add('hidden')
	addressItem.dataset.active = 'false'
}

//fechar modal quando apertar a tecla esc
window.addEventListener('keydown', function (event) {
	if (event.key === 'Escape') {
		closeAllModals(10);
		closeAllContainers(10);
	}
});

//fechar modals/containers quando clicar na tela preta ou fora do modal
window.addEventListener('click', function (e) {

	let path = e.composedPath()

	if (!path) {
		return;
	}

	if ($('.modalBox')[0].hasAttribute("show")) {
		var resModal = path.some((x) => {
			if (x.classList && x.classList.contains("modal__overlay")) {
				return true;
			}
		}) ? true : closeAllModals(10);
	}


	if ($('.mainContainer')[0].hasAttribute("show")) {
		var resContainer = path.some((x) => {
			if (x.classList && x.classList.contains("containerBody")) {
				return true;
			}
		}) ? true : closeAllContainers(10);
	}


}, true);


function closeAllContainers() {
	$(".isContainer").addClass("hidden");
	$(".isContainer").removeAttr("show", "");
}

function openIfoodContainer(time = 0, container) {
	closeAllContainers();

	setTimeout(function () {
		setTimeout(function () {
			$(container).removeClass("hidden");
			$(container).attr("show", "");
		}, time);
	}, 100);

}

function openIfoodModal(time = 0, modal) {
	closeAllModals();

	setTimeout(function () {
		setTimeout(function () {
			$(modal + ".modalBox").css("display", "block");

			$(modal + ">div.modal__overlay").css("opacity", "1");

			$(modal + ".modalBox").attr("show", "");
		}, time);
	}, 100);

}

function closeAllModals(time = 0) {
	setTimeout(function () {
		$(".modal__overlay").css("opacity", "0");
	}, time);

	$(".modalBox").css("display", "none");
	$(".modalBox").removeAttr("show");
}



$("#pay-pix").click(function (e) {
	e.preventDefault();
	$(".btn-pay").removeClass("activePay");
	$("#pay-pix").addClass("activePay");

});
$("#pay-card").click(function (e) {
	e.preventDefault();
	$(".btn-pay").removeClass("activePay");
	$("#pay-card").addClass("activePay");

});
$("#pay-money").click(function (e) {
	e.preventDefault();
	$(".btn-pay").removeClass("activePay");
	$("#pay-money").addClass("activePay");

});

