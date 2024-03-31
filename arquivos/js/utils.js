
// Anima elemento ao aparecer
function showElement(selector, animation){
	const ui = document.querySelector(selector)

	if(animation == 'show'){
		ui.classList.remove("hidden") //Mostra ui sem animação			
		return
	}

	ui.classList.remove("hidden")
	ui.classList.add("animate__animated", animation)
	ui.addEventListener("animationend", animationEndListener)

	function animationEndListener(){
		ui.classList.remove("animate__animated", animation)
		ui.removeEventListener("animationend", animationEndListener)
	}
}

// Anima elemento ao remover
function removeElement(selector, animation){
	const ui = document.querySelector(selector)

	if(animation == 'hidden'){
		ui.classList.add(animation) //Remove elemento sem animação
		return
	}

	ui.classList.add("animate__animated", animation)
	ui.addEventListener("animationend", animationEndListener)

	function animationEndListener(){
		ui.classList.remove("animate__animated", animation)
		ui.classList.add("hidden")
		ui.removeEventListener("animationend", animationEndListener)
	}
}

// Só anima o elemento
function animate(selector, animation){
	const ui = document.querySelector(selector)

	ui.classList.add("animate__animated", animation)
	ui.addEventListener("animationend", animationEndListener)

	function animationEndListener(){
		ui.classList.remove("animate__animated", animation)
		ui.removeEventListener("animationend", animationEndListener)
	}
}

function showGuide(elementId){
	showElement(elementId, 'animate__fadeIn') 

	setTimeout(() => {
		removeElement(elementId, 'animate__fadeOut')
	}, 3000)
}
