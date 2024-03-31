
const changePizzaSize = document.querySelectorAll('[name=pizza-size]')
const pizzaName = document.querySelector('#pizza-name')
const pizzaPrice = document.querySelector('#pizza-price')
const pizzaIngredients = document.querySelector('#pizza-ingredients-list')

const pizzaMenu = document.querySelector('#pizza-menu')
const pizzas_selecionadas = document.querySelector('#pizzas-selecionadas')
const maisSabores = document.querySelector('#mais-sabores')
const adicionarCarrinho = document.querySelector('#adicionar-carrinho')

const circlePlate = document.querySelector('#circle-plate')
const twoSlices = Array(...document.querySelectorAll('.two-slices'))
const threeSlices = Array(...document.querySelectorAll('.three-slices'))

const fecharModalButton = document.querySelector('#fechar-modal-descontos')

const selectButton = document.querySelector('#select-button')
const selectContainer = document.querySelector('#select-container')
const categoryName = document.querySelector('#category-name')

const sizeButton = document.querySelector('#size-button')
const sizeContainer = document.querySelector('#size-container')
const sizeName = document.querySelector('#size-name')

const pizzasType = document.querySelectorAll('[name="pizza-type"]')

pizzasType.forEach(checkbox => {
	const label = checkbox.parentElement
	const typeDiv = label.children[1]
	const text1 = typeDiv.children[0]
	const text2 = typeDiv.children[1]

	if(checkbox.checked){
		text1.style.color = '#ea1d2c'
		text2.style.color = '#ea1d2c'
	}


	checkbox.addEventListener('click', () => {
		const checkados = document.querySelectorAll('[name="pizza-type"]:checked')
		if(checkados.length >= pizzasType.length){
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
sizeButton.addEventListener('click', sizeSelect)

function sizeSelect(){
	const isActive = sizeButton.dataset.selectActive == 'true'

	if(selectButton.dataset.selectActive == 'true'){
		selectButton.dataset.selectActive = false
		selectContainer.style.display = 'none'
	}

	if(!isActive){
		sizeContainer.style.display = 'initial'
		sizeButton.dataset.selectActive = 'true'
		return
	}
	sizeContainer.style.display = 'none'
	sizeButton.dataset.selectActive = 'false'
}

function categorySelect(){
	const isActive = selectButton.dataset.selectActive == 'true'

	if(!window.localStorage.getItem('select-guide')){
		showGuide('#select-guide')
		window.localStorage.setItem('select-guide', 1)
	}

	if(sizeButton.dataset.selectActive == 'true'){
		sizeButton.dataset.selectActive = false
		sizeContainer.style.display = 'none'
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

let pizza_id = 1
let slideIndex = 0
let previusSize = 'Média'
const sabores = []

const pizzasArray = [
	{
		id: 1,
		name: 'Carbonara',
		price: '50.00',
		ingredients: [
			'Ervilha',
			'Molho',
			'Mussarela',
			'Presunto',
			'Tomate',
			'Queijo',
			'Mais Tomate',
			'Calabresa',
			'Mais Queijo'
		]
	},
	{
		id: 2,
		name: 'Margherita Sushi',
		price: '35.00',
		ingredients: [
			'Sushi',
			'Massa',
			'Queijos',
			'Tomate'
		]
	},
	{
		id: 3,
		name: 'Pepperoni',
		price: '44.00',
		ingredients: [
			'Pepperoni',
			'Massa',
			'Queijos',
			'Tomate'
		]
	},
	{
		id: 4,
		name: 'Salsicha',
		price: '26.00',
		ingredients: [
			'Salsicha',
			'Massa',
			'Queijos',
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
			scale: .4,
			opacity: .8,
			translate: [-230, '40%', 0],
			rotate: [0,0,180]
		},
		next: {
			scale: .4,
			opacity: .8,
			translate: [230, '40%', 0],
			rotate: [0,0,180]
		}
	},
	on: {
		init: (e) => {
			atualizarPizzaInfo(e)
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

	const pizzaSize = document.querySelector('[name=pizza-size]:checked').value
	const gigante =  pizzaSize == 'Gigante' && sabores.length !== 3
	const grande = pizzaSize == 'Grande' && sabores.length !== 3
	const media = pizzaSize == 'Média' && sabores.length !== 2
	const pequena = pizzaSize == 'Pequena' && sabores.length !== 2

	const giganteFull = () => gigante || grande 
	const normalFull = () =>  media || pequena

	if(!giganteFull() && !normalFull()){
		showGuide('#max-flavor-guide-2')
		showGuide('#click-guide-2')

		setTimeout(() => {
			showGuide('#click-guide')
		}, 2000)
	}
	
	atualizarPizzaInfo(e)
})

maisSabores.addEventListener('click', adicionarSabores)
swiper.on('click', adicionarSabores)

// REINICIA TUDO CASO O TAMANHO DA PIZZA MUDE
changePizzaSize.forEach(input => {
	input.addEventListener('click', () => {
		sizeName.innerHTML = input.value

		const gigante = input.value == 'Gigante' && previusSize !== 'Grande'
		const grande = input.value == 'Grande' && previusSize !== 'Gigante'
		const media = input.value == 'Média' && (previusSize == 'Grande' || previusSize == 'Gigante')
		const pequena = input.value == 'Pequena' && (previusSize == 'Gigante' || previusSize == 'Grande')

		if(input.value !== previusSize) previusSize == input.value
		else return

		if(gigante || grande || media || pequena){
			const slices = Array(...twoSlices, ...threeSlices)
			slices.forEach(slice => {
				slice.src = 'arquivos/images/null.png'
				slice.dataset.sliceId = ''
			})

			sabores.length = 0
			pizzas_selecionadas.innerHTML = ''
		}
		previusSize = input.value
		
	})
})

function adicionarSabores(){

	if(!window.localStorage.getItem('buy-guide')){
		window.localStorage.setItem('buy-guide', 1)
		showGuide('#buy-guide')
		showGuide('#click-guide')
	}

	const pizza = pizzasArray.find(p => p.id == pizza_id)
	const pizzaSize = document.querySelector('[name=pizza-size]:checked').value

	const gigante =  pizzaSize == 'Gigante' && sabores.length !== 3
	const grande = pizzaSize == 'Grande' && sabores.length !== 3
	const media = pizzaSize == 'Média' && sabores.length !== 2
	const pequena = pizzaSize == 'Pequena' && sabores.length !== 2

	const giganteFull = () => gigante || grande 
	const normalFull = () =>  media || pequena

	if(giganteFull()){
		sabores.push(pizza)

		if(sabores.length == 1){
			twoSlices[0].src = `arquivos/images/pizza-${pizza.id}.png`
			twoSlices[0].dataset.sliceId = pizza.id

			twoSlices[1].src = `arquivos/images/pizza-${pizza.id}.png`
			twoSlices[1].dataset.sliceId = pizza.id
		}else if(sabores.length == 2){
			twoSlices[1].src = `arquivos/images/pizza-${pizza.id}.png`
			twoSlices[1].dataset.sliceId = pizza.id
		}else if(sabores.length == 3){
			twoSlices[0].src = `arquivos/images/null.png`
			twoSlices[0].dataset.sliceId = ''
			twoSlices[1].src = `arquivos/images/null.png`
			twoSlices[1].dataset.sliceId = ''

			threeSlices[0].src = `arquivos/images/pizza-${sabores[0].id}.png`
			threeSlices[0].dataset.sliceId = sabores[0].id
			threeSlices[1].src = `arquivos/images/pizza-${sabores[1].id}.png`
			threeSlices[1].dataset.sliceId = sabores[1].id
			threeSlices[2].src = `arquivos/images/pizza-${pizza.id}.png`
			threeSlices[2].dataset.sliceId = pizza.id
		}
	}

	if(normalFull()){
		sabores.push(pizza)

		if(sabores.length == 1){
			twoSlices[0].src = `arquivos/images/pizza-${pizza.id}.png`
			twoSlices[0].dataset.sliceId = pizza.id
			twoSlices[1].src = `arquivos/images/pizza-${pizza.id}.png`
			twoSlices[1].dataset.sliceId = pizza.id
		}else if(sabores.length == 2){
			twoSlices[1].src = `arquivos/images/pizza-${pizza.id}.png`
			twoSlices[1].dataset.sliceId = pizza.id
		}
	}

	if(!giganteFull() && !normalFull()){
		maisSabores.style.display = 'none'
		showGuide('#max-flavor-guide')
		return
	}

	pizzas_selecionadas.innerHTML += `
		<div class="pizza-selected" data-flavor-id="${pizza.id}">
			<button class="delete-flavor-btn" onClick="removerSabor(${pizza.id})">
				<img class="w-5" src="arquivos/images/icons/x-circle.svg">
			</button>
			<p class="pizza-selected-name">${pizza.name}</p>
			<button class="edit-flavor-btn">
				<img class="w-3" src="arquivos/images/icons/pencil.svg">
			</button>
		</div>
	`
}

function removerSabor(id){
	const flavor = document.querySelector(`[data-flavor-id='${id}']`)
	const pizza = sabores.findIndex(sabor => sabor.id == id)
	const sliceToReplace = document.querySelector(`[data-slice-id='${id}']`)

	flavor.remove()
	sabores.splice(pizza, 1)

	maisSabores.style.display = ''

	if(sabores.length == 1){
		sliceToReplace.src = `arquivos/images/pizza-${sabores[0].id}.png`
		sliceToReplace.dataset.sliceId = sabores[0].id
	}

	if(sabores.length == 2){
		threeSlices.forEach(slice => {
			slice.src = `arquivos/images/null.png`
			slice.dataset.sliceId = ''
		})
		twoSlices[0].src = `arquivos/images/pizza-${sabores[0].id}.png`
		twoSlices[0].dataset.sliceId = sabores[0].id
		twoSlices[1].src = `arquivos/images/pizza-${sabores[1].id}.png`
		twoSlices[1].dataset.sliceId = sabores[1].id
	}

	if(!sabores.length){
		const slices = Array(...twoSlices, ...threeSlices)
			slices.forEach(slice => {
			slice.src = 'arquivos/images/null.png'
			slice.dataset.sliceId = ''
		})
	}
}

function atualizarPizzaInfo({slides, activeIndex}){
	const activeSlide = slides[activeIndex].children[0].children[0]
	const pizzaSize = document.querySelector('[name=pizza-size]:checked')

	pizza_id = parseInt(activeSlide.dataset.id)
	const pizza = pizzasArray.find(p => p.id == pizza_id)

	// gira o circulo ao redor da pizza
	if(activeIndex > slideIndex) circlePlate.style.transform += 'rotateZ(50deg)'
	else circlePlate.style.transform += 'rotateZ(-50deg)'

	pizzaIngredients.innerHTML = pizza.ingredients.join(', ')
	pizzaName.innerHTML = pizza.name
	pizzaPrice.innerHTML = `R$${pizza.price}`

	animate('#pizza-name', 'animate__flipInX')
	animate('#pizza-price', 'animate__flipInX')
	animate('#pizza-ingredients-list', 'animate__flipInX')

	slideIndex = activeIndex
}

adicionarCarrinho.addEventListener('click', () => {
	showElement('#descontos-modal', 'animate__fadeIn')
})

function fecharModalBordas(){
	removeElement('#bordas-modal', 'animate__fadeOut')
}

