
const body = document.querySelector('body')
const deliveyMethod = document.querySelector('#delivery-method')

// If para previnir erro de elemento não encontrado
if(deliveyMethod){
	deliveyMethod.addEventListener('click', () => {
		const method_class = Array(...deliveyMethod.classList).includes('line-entrega')

		if(method_class){
			deliveyMethod.classList.add('line-retirada')
			deliveyMethod.classList.remove('line-entrega')
			deliveyMethod.children[0].style.color = '#737373'
			deliveyMethod.children[1].style.color = '#b91c1c'
			removeElement('#user-local', 'hidden')
			showElement('#shop-local', 'animate__fadeIn')
			return
		}
		deliveyMethod.classList.add('line-entrega')
		deliveyMethod.classList.remove('line-retirada')
		deliveyMethod.children[1].style.color = '#737373'
		deliveyMethod.children[0].style.color = '#b91c1c'
		removeElement('#shop-local', 'hidden')
		showElement('#user-local', 'animate__fadeIn')
	})
}


function abrirModalBebida(){
	showElement('#bebida-modal', 'animate__fadeIn')
	body.style.overflow = 'hidden'
}

function fecharModalBebida(){
	removeElement('#bebida-modal', 'animate__fadeOut')
	body.style.overflow = ''
}


function cpfMask(cpf){
   	const value = cpf.value
   	const lastChar = value[value.length-1]
   
   	if(isNaN(lastChar) || lastChar == ' '){
    	cpf.value = value.substring(0, value.length-1)
    	return
   	}
   	if(value.length == 3 || value.length == 7) cpf.value += "."
   	if(value.length == 11) cpf.value += "-"
}

function fecharModalEndereco(){
	removeElement('#modal-endereco-container', 'animate__fadeOut')
}