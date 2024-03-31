<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="arquivos/images/favicon.png"/>
	<title>Só Burgers Delivery</title>

	<!-- GERAL STYLES -->
	<link rel="stylesheet" href="arquivos/css/styles.css"></link>

	<!-- SWIPER STYLE -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

	<!-- ANIMATE.STYLE -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

	<!-- <script src="https://cdn.tailwindcss.com"></script> -->

</head>
<body class="bg-neutral-200">
	<div class="w-full max-w-[602px] bg-white mx-auto flex flex-col items-center pb-12">
		<section class="w-full h-full overflow-x-hidden relative">

			<div class="w-full flex gap-x-3 justify-center items-center relative pt-5 mb-2">

				<div class="w-full flex gap-2 justify-center items-center flex-wrap">
					<button id="select-button" data-select-active="false" class="select-button">
						Categoria: <span id="category-name">Todas</span>
						<img src="arquivos/images/icons/caret-down-fill.svg">
					</button>

				<!-- 	<button id="size-button" data-size-active="false" class="select-button">
						Tamanho: <span id="size-name">Gigante</span>
						<img src="arquivos/images/icons/caret-down-fill.svg">
					</button> -->
				</div>

				<div id="select-container" class="select-container">
					<p class="font-ifood text-center mt-3 text-lg font-bold">Categorias</p>
					<form class="form-container">
						<div class="select-col">
							<label class="w-full flex items-center gap-x-2 cursor-pointer">
								<input type="checkbox" name="pizza-type" value="Promoção" checked>
								<div class="w-full flex justify-between items-center">
									<span class="select-item">Promoção</span>
									<span class="select-item">R$10,00</span>
								</div>
							</label>
							<label class="w-full flex items-center gap-x-2 cursor-pointer">
								<input type="checkbox" name="pizza-type" value="Clássicas" checked>
								<div class="w-full flex justify-between items-center">
									<span class="select-item">Clássicas</span>
									<span class="select-item">R$10,00</span>
								</div>
							</label>
							<label class="w-full flex items-center gap-x-2 cursor-pointer">
								<input type="checkbox" name="pizza-type" value="Exclusivas" checked>
								<div class="w-full flex justify-between items-center">
									<span class="select-item">Exclusivas</span>
									<span class="select-item">R$10,00</span>
								</div>
							</label>
							<label class="w-full flex items-center gap-x-2 cursor-pointer">
								<input type="checkbox" name="pizza-type" value="Premium" checked>
								<div class="w-full flex justify-between items-center">
									<span class="select-item">Premium</span>
									<span class="select-item">R$10,00</span>
								</div>
							</label>
							<label class="w-full flex items-center gap-x-2 cursor-pointer">
								<input type="checkbox" name="pizza-type" value="Doces" checked>
								<div class="w-full flex justify-between items-center">
									<span class="select-item">Doces</span>
									<span class="select-item">R$10,00</span>
								</div>
							</label>
						</div>
						<label class="flex items-center bg-white w-full rounded-b-xl border-t-2 border-neutral-200 px-2">
							<div>
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ea1d2c"
									class="bi bi-search" viewBox="0 0 16 16">
									<path
										d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
								</svg>
							</div>

							<input class="w-full outline-none h-10 text-lg text-center" type="text" name="buscar" placeholder="Nome ou ingrediente">
						</label>
					</form>

					<div class="w-full relative">
						<button onClick="categorySelect()" class="absolute -top-[18.5rem] -right-3 bg-white rounded-full">
							<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#ea1d2c" class="bi bi-x-circle" viewBox="0 0 16 16">
							  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
							  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
							</svg>
						</button>
					</div>
				</div>

				<!-- <div id="size-container" class="size-container">
					<p class="font-ifood text-center mt-3 text-lg font-bold">Selecione o tamanho:</p>
					<form class="form-container mt-3">
						<div class="flex gap-x-2 justify-center items-center">
							<label class="w-14 h-14 text-xs/4 flex justify-center items-center font-ifood bg-neutral-400 rounded-full text-white text-center cursor-pointer">
								<input class="hidden" type="radio" name="pizza-size" value="Pequena">				Pequena
								20cm
							</label>
							<label class="w-16 h-16 text-sm/4 flex justify-center items-center font-ifood bg-neutral-400 rounded-full text-white text-center cursor-pointer">
								<input class="hidden" type="radio" name="pizza-size" value="Média">
								Média
								30cm		
							</label>
							<label class="w-20 h-20 text-base/4 flex justify-center items-center font-ifood bg-neutral-400 rounded-full text-white text-center cursor-pointer">
								<input class="hidden" type="radio" name="pizza-size" value="Grande">
								Grande
								35cm								
							</label>
							<label class="w-24 h-24 text-lg/5 flex justify-center items-center font-ifood bg-neutral-400 rounded-full text-white text-center cursor-pointer">
								<input class="hidden" type="radio" name="pizza-size" value="Gigante" checked>
								Gigante
								40cm							
							</label>
						</div>
					</form>
					<div class="w-full flex gap-x-4 justify-center items-center mt-3">
						<p class="font-ifood text-neutral-400 text-sm">Escolha até 2 sabores</p>
						<div class="w-0.5 h-8 bg-neutral-300"></div>
						<p class="font-ifood text-neutral-400 text-sm">Escolha até 3 sabores</p>
					</div>
				</div>
 -->
				<div id="select-guide" onClick="closeGuide(this)" class="absolute top-40 z-[9999] hidden">
					<div class="select-guide-container">
						<div class="-rotate-45">
							<img class="w-8 animate__animated animate__heartBeat animate__infinite" src="arquivos/images/icons/touch-icon.png">
						</div>
						<p class="select-guide-text">Toque para <br> filtrar por categoria.</p>
					</div>
				</div>

			</div>

			<div class="w-full h-full flex flex-col justify-center items-center pb-5 bg-center">

				<div class="flex flex-col items-center gap-y-3 mt-5">
					<div class="w-full flex flex-col items-center">
						<p id="pizza-name" class="font-ifoodTitle text-2xl font-bold">Pizza 1:</p>
						<p id="pizza-ingredients-list" class="pizza-ingredients">
							sabor 1, sabor 2, sabor 3, sabor 4
						</p>
						<p id="pizza-price" class="pizza-price">R$00.00</p>
					</div>
				</div>

				<div class="slider-container">

					<!-- circulo que gira ao redor do prato -->
					<img id="circle-plate" class="circle-plate" src="arquivos/images/circle-plate.png">

					<!-- prato da pizza -->
					<img class="w-72 h-72 drop-shadow-[0_0_15px_rgba(0,0,0,.6)]" src="arquivos/images/pizza-plate.png">

					<!-- swiper slider -->
					<div class="absolute w-full">
						<div class="swiper h-96">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="w-full h-full flex justify-center items-end pb-4">
									    <img class="w-64 h-64 path-default transition-all duration-300" data-id="1" src="arquivos/images/pizza-1.png">
									</div>
								</div>
								<div class="swiper-slide">
									<div class="w-full h-full flex justify-center items-end pb-4">
									   <img class="w-64 h-64 path-default transition-all duration-300" data-id="2" src="arquivos/images/pizza-2.png">
									</div>
								</div>
								<div class="swiper-slide">
									<div class="w-full h-full flex justify-center items-end pb-4">   
									    <img class="w-64 h-64 path-default transition-all duration-300" data-id="3" src="arquivos/images/pizza-3.png">
									</div> 
								</div>
								<div class="swiper-slide">
									<div class="w-full h-full flex justify-center items-end pb-4"> 	
									    <img class="w-64 h-64 path-default transition-all duration-300" data-id="4" src="arquivos/images/pizza-3.png">
									</div>    
								</div>
							</div>
						</div>
					</div>
					<!--  -->

					<!-- USER GUIDE -->
					<div id="drag-guide" onClick="closeGuide(this)" class="user-guide-container flex hidden">
						<img id="drag-icon" class="w-8 animate__animated animate__wobble animate__infinite" src="arquivos/images/icons/drag-icon.png">
						<p class="text-white font-ifood text-center">Arraste para mudar o sabor!</p>
					</div>

					<div id="touch-guide" onClick="closeGuide(this)" class="user-guide-container flex hidden">
						<img id="touch-icon" class="w-8 animate__animated animate__heartBeat animate__infinite" src="arquivos/images/icons/touch-icon.png">
						<p class="text-white font-ifood text-center">Toque para escolher o sabor!</p>
					</div>

					<div id="buy-guide" class="user-guide-container flex hidden">
						<p class="text-white font-ifood text-center text-sm">Arraste para escolher mais um sabor ou toque em "Adicionar" para seguir com o pedido!</p>
					</div>

					<div id="max-flavor-guide" class="user-guide-container flex hidden">
						<img id="touch-icon" class="w-8" src="arquivos/images/icons/bag.svg">
						<p class="text-white font-ifood text-center">Limite de sabores atingido!</p>
					</div>

					<div id="max-flavor-guide-2" class="user-guide-container flex hidden">
						<p class="text-white font-ifood text-center text-sm">Para adicionar outro sabor, remova um escolhido ou toque em "adicionar" para seguir com seu pedido!</p>
					</div>
					<!--  -->

				</div>

				<div class="w-full flex justify-center items-end">
					<div id="pizza-menu" class="pizza-menu">

						<img id="click-guide-2" class="absolute top-16 left-2 w-10 rotate-[130deg] hidden" src="arquivos/images/icons/touch-icon-black.png">

						<div class="pizza-menu-container">
							<p class="pizza-menu-title">Sabor escolhido:</p>
							<div id="pizzas-selecionadas" class="pizzas-selecionadas-container">

							</div>
						</div>
					</div>
				</div>

			</div>
		</section>

		<nav class="w-full max-w-[602px] mx-auto fixed bottom-0 shadow-menu">
			<div class="w-full bg-neutral-100 py-2">
				<div class="w-full flex space-x-2  justify-center items-center">

					<button id="mais-sabores" class="mais-sabores-button">+ Um Sabor</button>

					<div class="relative justify-center items-center">
						<button id="adicionar-carrinho" class="adicionar-button">
							<img src="arquivos/images/icons/bag.svg">
							Adicionar:
							R$ 15,00
						</button>

						<img id="click-guide" class="absolute -top-12 right-1/2 w-10 rotate-180 hidden" src="arquivos/images/icons/touch-icon-black.png">
					</div>
				</div>
			</div>
		</nav>
	</div>

	<div id="bordas-modal" class="montar-pizza-modal-container flex hidden">
		<div class="recheio-da-borda-modal">
			<div class="w-full flex justify-between items-center">
				<span></span> 
				<h1 class="montar-pizza-modal-title">Escolha o recheio da borda</h1>

				<button id="fechar-modal-bordas" class="p-1.5 bg-[#ea1d2c] rounded-full">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-x-lg" viewBox="0 0 16 16">
					  <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
					</svg>
				</button>
			</div>

			<div class="grid-container">
				<div class="grid grid-cols-2 gap-4">

					<div onClick="fecharModalBordas()" class="recheio-da-borda-item cursor-pointer">
						<div class="borda-item-banner">
							<img class="w-full h-full" src="arquivos/images/pizza-banner.png">
						</div>
						<div class="w-full px-1 py-2">
							<p class="product-title">Recheio de catupiry</p>
							<div class="flex justify-start items-center">
								<span class="product-price">R$ 10,00</span>
								<span class="product-old-price">R$ 50,00</span>
							</div>
						</div>
					</div>

					<div onClick="fecharModalBordas()" class="recheio-da-borda-item cursor-pointer">
						<div class="borda-item-banner">
							<img class="w-full h-full" src="arquivos/images/pizza-banner.png">
						</div>
						<div class="w-full px-1 py-2">
							<p class="product-title">Recheio de chocolate</p>
							<div class="flex justify-start items-center">
								<span class="product-price">R$ 10,00</span>
								<span class="product-old-price">R$ 50,00</span>
							</div>
						</div>
					</div>

					<div onClick="fecharModalBordas()" class="recheio-da-borda-item cursor-pointer">
						<div class="borda-item-banner">
							<img class="w-full h-full" src="arquivos/images/pizza-banner.png">
						</div>
						<div class="w-full px-1 py-2">
							<p class="product-title">Recheio de brisadeiro</p>
							<div class="flex justify-start items-center">
								<span class="product-price">R$ 10,00</span>
								<span class="product-old-price">R$ 50,00</span>
							</div>
						</div>
					</div>

					<div onClick="fecharModalBordas()" class="recheio-da-borda-item cursor-pointer">
						<div class="borda-item-banner">
							<img class="w-full h-full" src="arquivos/images/pizza-banner.png">
						</div>
						<div class="w-full px-1 py-2">
							<p class="product-title">Recheio de pizza</p>
							<div class="flex justify-start items-center">
								<span class="product-price">R$ 10,00</span>
								<span class="product-old-price">R$ 50,00</span>
							</div>
						</div>
					</div>

					<div onClick="fecharModalBordas()" class="recheio-da-borda-item cursor-pointer">
						<div class="borda-item-banner">
							<img class="w-full h-full" src="arquivos/images/pizza-banner.png">
						</div>
						<div class="w-full px-1 py-2">
							<p class="product-title">Recheio topzera</p>
							<div class="flex justify-start items-center">
								<span class="product-price">R$ 10,00</span>
								<span class="product-old-price">R$ 50,00</span>
							</div>
						</div>
					</div>

					<div onClick="fecharModalBordas()" class="recheio-da-borda-item cursor-pointer">
						<div class="borda-item-banner">
							<img class="w-full h-full" src="arquivos/images/pizza-banner.png">
						</div>
						<div class="w-full px-1 py-2">
							<p class="product-title">Recheio massa</p>
							<div class="flex justify-start items-center">
								<span class="product-price">R$ 10,00</span>
								<span class="product-old-price">R$ 50,00</span>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="descontos-modal" class="montar-pizza-modal-container flex hidden">
		<div class="descontos-especiais-modal">
			<div class="w-full flex justify-center items-center">
				<h1 class="montar-pizza-modal-title">Aproveite o desconto <br> e peça também!</h1>
			</div>

			<div class="w-full h-full flex flex-col items-start">

				<div class="scroll-container">

					<div class="modal-combos-item">
						<div class="w-full h-full max-h-24">
							<img class="w-full h-full" src="arquivos/images/pizza-banner.png">
						</div>

						<div class="destaques-item-info">
							<div>
								<p class="product-title">Promobomo combo churrasco!</p>
							</div>
							<div class="flex justify-start items-center">
								<span class="product-price">R$ 10,00</span>
								<span class="product-old-price">R$ 50,00</span>
							</div>
						</div>
					</div>

					<div class="modal-combos-item">
						<div class="w-full h-full max-h-24">
							<img class="w-full h-full" src="arquivos/images/pizza-banner.png">
						</div>

						<div class="destaques-item-info">
							<div>
								<p class="product-title">Promobomo combo churrasco!</p>
							</div>
							<div class="flex justify-start items-center">
								<span class="product-price">R$ 10,00</span>
								<span class="product-old-price">R$ 50,00</span>
							</div>
						</div>
					</div>

					<div class="modal-combos-item">
						<div class="w-full h-full max-h-24">
							<img class="w-full h-full" src="arquivos/images/pizza-banner.png">
						</div>

						<div class="destaques-item-info">
							<div>
								<p class="product-title">Promobomo combo churrasco!</p>
							</div>
							<div class="flex justify-start items-center">
								<span class="product-price">R$ 10,00</span>
								<span class="product-old-price">R$ 50,00</span>
							</div>
						</div>
					</div>
				</div>

				<div class="scroll-container">

					<div class="modal-combos-item">
						<div class="w-full h-full max-h-24">
							<img class="w-full h-full" src="arquivos/images/pizza-banner.png">
						</div>

						<div class="destaques-item-info">
							<div>
								<p class="product-title">Promobomo combo churrasco!</p>
							</div>
							<div class="flex justify-start items-center">
								<span class="product-price">R$ 10,00</span>
								<span class="product-old-price">R$ 50,00</span>
							</div>
						</div>
					</div>

					<div class="modal-combos-item">
						<div class="w-full h-full max-h-24">
							<img class="w-full h-full" src="arquivos/images/pizza-banner.png">
						</div>

						<div class="destaques-item-info">
							<div>
								<p class="product-title">Promobomo combo churrasco!</p>
							</div>
							<div class="flex justify-start items-center">
								<span class="product-price">R$ 10,00</span>
								<span class="product-old-price">R$ 50,00</span>
							</div>
						</div>
					</div>

					<div class="modal-combos-item">
						<div class="w-full h-full max-h-24">
							<img class="w-full h-full" src="arquivos/images/pizza-banner.png">
						</div>

						<div class="destaques-item-info">
							<div>
								<p class="product-title">Promobomo combo churrasco!</p>
							</div>
							<div class="flex justify-start items-center">
								<span class="product-price">R$ 10,00</span>
								<span class="product-old-price">R$ 50,00</span>
							</div>
						</div>
					</div>
				</div>

				<div class="scroll-container">
					<div class="modal-bebidas-item">
						<div>
							<img class="w-24 mx-auto" src="arquivos/images/frisk-2l.png">
						</div>
						<div class="w-full px-1 py-2">
							<p class="product-title">Coca cola 2l</p>
							<div class="flex justify-start items-center">
								<span class="product-price">R$ 10,00</span>
								<span class="product-old-price">R$ 50,00</span>
							</div>
						</div>
					</div>
					<div class="modal-bebidas-item">
						<div>
							<img class="w-24 mx-auto" src="arquivos/images/frisk-2l.png">
						</div>
						<div class="w-full px-1 py-2">
							<p class="product-title">Coca cola 2l</p>
							<div class="flex justify-start items-center">
								<span class="product-price">R$ 10,00</span>
								<span class="product-old-price">R$ 50,00</span>
							</div>
						</div>
					</div>
					<div class="modal-bebidas-item">
						<div>
							<img class="w-24 mx-auto" src="arquivos/images/frisk-2l.png">
						</div>
						<div class="w-full px-1 py-2">
							<p class="product-title">Coca cola 2l</p>
							<div class="flex justify-start items-center">
								<span class="product-price">R$ 10,00</span>
								<span class="product-old-price">R$ 50,00</span>
							</div>
						</div>
					</div>
					<div class="modal-bebidas-item">
						<div>
							<img class="w-24 mx-auto" src="arquivos/images/frisk-2l.png">
						</div>
						<div class="w-full px-1 py-2">
							<p class="product-title">Coca cola 2l</p>
							<div class="flex justify-start items-center">
								<span class="product-price">R$ 10,00</span>
								<span class="product-old-price">R$ 50,00</span>
							</div>
						</div>
					</div>
					<div class="modal-bebidas-item">
						<div>
							<img class="w-24 mx-auto" src="arquivos/images/frisk-2l.png">
						</div>
						<div class="w-full px-1 py-2">
							<p class="product-title">Coca cola 2l</p>
							<div class="flex justify-start items-center">
								<span class="product-price">R$ 10,00</span>
								<span class="product-old-price">R$ 50,00</span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="w-full flex gap-x-2 justify-center items-center mt-5">
					<a class="modal-action-buttons" href="cardapio.php">Adicionar mais itens</a>
					<a class="modal-action-buttons" href="finalizar-pedido.php">Finalizar</a>
				</div>

		</div>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<script src="arquivos/js/utils.js"></script>
	<script src="arquivos/js/montar-pizza.js"></script>
</body>
</html>