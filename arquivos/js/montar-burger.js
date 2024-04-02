
const burgerName = document.querySelector('#burger-name')
const burgerPrice = document.querySelector('#burger-price')
const burgerIngredients = document.querySelector('#burger-ingredients-list')

const pizzas_selecionadas = document.querySelector('#pizzas-selecionadas')
const maisSabores = document.querySelector('#mais-sabores')
const adicionarCarrinho = document.querySelector('#adicionar-carrinho')

const circlePlate = document.querySelector('#circle-plate')

const fecharModalButton = document.querySelector('#fechar-modal-descontos')

const selectButton = document.querySelector('#select-button')
const selectContainer = document.querySelector('#select-container')
const categoryName = document.querySelector('#category-name')

const sizeButton = document.querySelector('#size-button')
const sizeContainer = document.querySelector('#size-container')

const burgersType = document.querySelectorAll('[name="burger-type"]')

burgersType.forEach(checkbox => {
	const label = checkbox.parentElement
	const typeDiv = label.children[1]
	const text1 = typeDiv.children[0]
	const text2 = typeDiv.children[1]

	if(checkbox.checked){
		text1.style.color = '#ea1d2c'
		text2.style.color = '#ea1d2c'
	}


	checkbox.addEventListener('click', () => {
		const checkados = document.querySelectorAll('[name="burger-type"]:checked')
		if(checkados.length >= burgersType.length){
			categoryName.innerHTML = 'Todas'
		}else if(checkados.length){
			categoryName.innerHTML = checkados[0].value
		}else{
			categoryName.innerHTML = 'Nenhuma'
		}

		if(checkbox.checked){
			text1.style.color = '#ea1d2c'
			text2.style.color = '#ea1d2c'
			categoryName.innerHTML = checkbox.value
			return
		}

		text1.style.color = ''
		text2.style.color = ''
	})
})

selectButton.addEventListener('click', categorySelect)

function categorySelect(){
	const isActive = selectButton.dataset.selectActive == 'true'

	if(!window.localStorage.getItem('select-guide')){
		showGuide('#select-guide')
		window.localStorage.setItem('select-guide', 1)
	}

	if(!isActive){
		selectContainer.style.display = 'initial'
		selectButton.dataset.selectActive = 'true'
		return
	}
	selectContainer.style.display = 'none'
	selectButton.dataset.selectActive = 'false'
}

function closeGuide(el){
	el.style.display = 'none'
}

let burger_id = 1
let slideIndex = 0
const sabores = []

const burgersArray = [
	{
		id: 1,
		name: 'X-Burger',
		price: '19.00',
		ingredients: [
			'Hambúrger',
			'Molho especial',
			'Pão'
		]
	},
	{
		id: 2,
		name: 'X-Salada',
		price: '20.00',
		ingredients: [
			'Alface',
			'Hambúrger',
			'Molho especial',
			'Pão',
			'Queijo',
			'Tomate'
		]
	},
	{
		id: 3,
		name: 'X-Bacon',
		price: '22.00',
		ingredients: [
			'Alface',
			'Bacon',
			'Hambúrger',
			'Molho especial',
			'Pão',
			'Queijo',
			'Tomate'
		]
	},
	{
		id: 4,
		name: 'X-Egg',
		price: '22.00',
		ingredients: [
			'Alface',
			'Hambúrger',
			'Molho Espcial',
			'Ovo',
			'Pão',
			'Queijo',
			'Tomate'
		]
	}
]

const swiper = new Swiper('.swiper', {
	slidesPerView: 1.5,
	centeredSlides: true,
	slideToClickedSlide: true,
	effect: 'creative',
	perspective: true,
	limitProgress: 2,
	creativeEffect: {
		prev: {
			scale: .3,
			opacity: .8,
			translate: [-210, '40%', 0],
			rotate: [0,0,90]
		},
		next: {
			scale: .3,
			opacity: .8,
			translate: [230, '40%', 0],
			rotate: [0,0,90]
		}
	},
	on: {
		init: (e) => {
			atualizarBurgerInfo(e)
		}
	}
})

if(!window.localStorage.getItem('drag-guide')){
	showGuide('#drag-guide')	
	window.localStorage.setItem('drag-guide', 1)
}

swiper.on('slideChange', e => {
	if(!window.localStorage.getItem('touch-guide')){
		showGuide('#touch-guide')
		window.localStorage.setItem('touch-guide', 1)
	}

	// 	showGuide('#max-flavor-guide-2')
	// 	showGuide('#click-guide-2')

	// 	setTimeout(() => {
	// 		showGuide('#click-guide')
	// 	}, 2000)
	// }
	
	atualizarBurgerInfo(e)
})

maisSabores.addEventListener('click', adicionarSabores)
swiper.on('click', adicionarSabores)

function adicionarSabores(){
	const burgerImage = document.querySelector('#burger-image')

	if(!window.localStorage.getItem('buy-guide')){
		window.localStorage.setItem('buy-guide', 1)
		showGuide('#buy-guide')
		showGuide('#click-guide')
	}

	const burger = burgersArray.find(b => b.id == burger_id)
	sabores.push(burger)

	burgerImage.src = `arquivos/images/burger-${burger.id}.png`
	burgerImage.dataset.burgerId = burger.id
	// maisSabores.style.display = 'none'
	// showGuide('#max-flavor-guide')

	const burgerQntd = sabores.filter(b => b.id == burger_id).length

	if(burgerQntd === 1){
		pizzas_selecionadas.innerHTML += `
				<div class="pizza-selected" data-flavor-id="${burger.id}">
					<button class="delete-flavor-btn" onClick="removerBurger(${burger.id})">
						<img class="w-5" src="arquivos/images/icons/x-circle.svg">
					</button>
					<p class="pizza-selected-name">${burger.name} 1x</p>
					<button class="edit-flavor-btn">
						<img class="w-3" src="arquivos/images/icons/pencil.svg">
					</button>
				</div>
			`
	}else{
		const flavor = document.querySelector(`[data-flavor-id="${burger.id}"]`)
		flavor.children[1].innerHTML = `${burger.name} ${burgerQntd}x`
	}
}

function removerBurger(id){
	const flavor = document.querySelector(`[data-flavor-id='${id}']`)
	const burgerIndex = sabores.findIndex(sabor => sabor.id == id)
	const burgerImage = document.querySelector('#burger-image')
	const burger = sabores.find(b => b.id == id)

	sabores.splice(burgerIndex, 1)

	const burgerQntd = sabores.filter(b => b.id == id).length

	if(burgerQntd >= 1){
		flavor.children[1].innerHTML = `${burger.name} ${burgerQntd}x`	
		return	
	}

	flavor.remove()
	burgerImage.src = "arquivos/images/null.png"
	maisSabores.style.display = ''
}

function atualizarBurgerInfo({slides, activeIndex}){
	const activeSlide = slides[activeIndex].children[0].children[0]

	burger_id = parseInt(activeSlide.dataset.id)
	const burger = burgersArray.find(p => p.id == burger_id)

	// gira o circulo ao redor da pizza
	if(activeIndex > slideIndex) circlePlate.style.transform += 'rotateZ(50deg)'
	else circlePlate.style.transform += 'rotateZ(-50deg)'

	burgerIngredients.innerHTML = burger.ingredients.join(', ')
	burgerName.innerHTML = burger.name
	burgerPrice.innerHTML = `R$${burger.price}`

	animate('#burger-name', 'animate__flipInX')
	animate('#burger-price', 'animate__flipInX')
	animate('#burger-ingredients-list', 'animate__flipInX')

	slideIndex = activeIndex
}

adicionarCarrinho.addEventListener('click', () => {
	showElement('#descontos-modal', 'animate__fadeIn')
})

function fecharModalBordas(){
	removeElement('#bordas-modal', 'animate__fadeOut')
}

