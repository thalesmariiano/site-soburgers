<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="arquivos/images/favicon.png" />
	<title>Só Burgers Delivery</title>

	<!-- GERAL STYLES -->
	<link rel="stylesheet" href="arquivos/css/styles.css"></link>
	<link rel="stylesheet" href="arquivos/css/ifood.css"></link>

	<link rel="stylesheet" href="arquivos/css/cardapio.css">
	<link rel="stylesheet" href="arquivos/css/modal.css"></link>

	<!-- ANIMATE.STYLE -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body class="bg-neutral-200">

	<div class="w-full max-w-[602px] min-h-screen bg-white mx-auto flex flex-col relative">

		<?php 
			include 'includes/header.php'
		?>

		<div class="p-3">
			<div class="w-full">
				<label class="search-input-container-index">
					<div class="w-6 mr-2">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ea1d2c"
							class="bi bi-search" viewBox="0 0 16 16">
							<path
								d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
						</svg>
					</div>

					<input class="w-full bg-none outline-none input-search-index" type="text" name="buscar"
						id="buscarProduto" placeholder="Buscar produto">
				</label>
			</div>
			<div class="flex gap-x-3 items-center mt-3">
				<button id="btnEntrega"
					class="flex gap-x-3 justify-center items-center h-12 px-5 border border-neutral-300 rounded btnSelEntreCard">
					<img src="arquivos/images/icons/bike.svg">
					Entrega <span style="color:red !important"><svg xmlns="http://www.w3.org/2000/svg" width="16"
							height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
							<path fill-rule="evenodd"
								d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
						</svg></span>
				</button>
				<button id="btnBalcao" style="display: none;"
					class="flex gap-x-3 justify-center items-center h-12 px-5 border border-neutral-300 rounded btnSelEntreCard">
					<img src="arquivos/images/icons/person-walking.svg">
					Balcão <span style="color:red !important"><svg xmlns="http://www.w3.org/2000/svg" width="16"
							height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
							<path fill-rule="evenodd"
								d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
						</svg></span>
				</button>
				<div class="w-full h-12 flex flex-col justify-center px-5 border border-neutral-300 rounded">
					<p class="font-ifood font-semibold">Hoje</p>
					<p class="font-ifood text-neutral-500 text-sm cardEntInf" id="freteInfo"><span id="freteTime">40-50 min</span>
						- <span id="freteValue">R$ 7,99</span></p>
					<p class="font-ifood text-neutral-500 text-sm cardEntInf" id="balcaoInfo" style="display: none;"><span
							id="balcaoTime">20-30 min</span> - <span id="balcaoValue">R$ 0,00</span></p>

				</div>
			</div>
		</div>

		<section class="destaques-container">
			<h1 class="section-title">Destaques</h1>

			<div class="scroll-cardapio">

				<div onClick="window.location.href = 'montar-burger.php'" class="destaques-item cursor-pointer">
					<div class="w-full h-full max-h-24">
						<img class="w-full h-full" src="arquivos/images/burger-combo-banner.png">
					</div>

					<div class="destaques-item-info">
						<div>
							<p class="product-title">Combo Casal + Refri</p>
							<p class="product-description">Lorem ipsulum dolor sit adept...</p>
						</div>
						<div class="flex justify-start items-center">
							<span class="product-price">R$ 10,00</span>
							<span class="product-old-price">R$ 50,00</span>
						</div>
					</div>
				</div>

				<div onClick="window.location.href = 'montar-burger.php'" class="destaques-item cursor-pointer">
					<div class="w-full h-full max-h-24">
						<img class="w-full h-full" src="arquivos/images/burger-combo-banner.png">
					</div>

					<div class="destaques-item-info">
						<div>
							<p class="product-title">Combo Casal + Refri</p>
							<p class="product-description">Lorem ipsulum dolor sit adept...</p>
						</div>
						<div class="flex justify-start items-center">
							<span class="product-price">R$ 10,00</span>
							<span class="product-old-price">R$ 50,00</span>
						</div>
					</div>
				</div>

				<div onClick="window.location.href = 'montar-burger.php'" class="destaques-item cursor-pointer">
					<div class="w-full h-full max-h-24">
						<img class="w-full h-full" src="arquivos/images/burger-combo-banner.png">
					</div>

					<div class="destaques-item-info">
						<div>
							<p class="product-title">Combo Casal + Refri</p>
							<p class="product-description">Lorem ipsulum dolor sit adept...</p>
						</div>
						<div class="flex justify-start items-center">
							<span class="product-price">R$ 10,00</span>
							<span class="product-old-price">R$ 50,00</span>
						</div>
					</div>
				</div>

				<div onClick="window.location.href = 'montar-burger.php'" class="destaques-item cursor-pointer">
					<div class="w-full h-full max-h-24">
						<img class="w-full h-full" src="arquivos/images/burger-combo-banner.png">
					</div>

					<div class="destaques-item-info">
						<div>
							<p class="product-title">Combo Casal + Refri</p>
							<p class="product-description">Lorem ipsulum dolor sit adept...</p>
						</div>
						<div class="flex justify-start items-center">
							<span class="product-price">R$ 10,00</span>
							<span class="product-old-price">R$ 50,00</span>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="combos-container">
			<h1 class="section-title">Combos</h1>

			<div class="scroll-cardapio">

				<div onClick="window.location.href = 'montar-burger.php'" class="combos-item cursor-pointer">
					<div class="w-full h-full max-h-24">
						<img class="w-full h-full" src="arquivos/images/burger-combo-banner.png">
					</div>

					<div class="combos-item-info">
						<div>
							<p class="product-title">Combo Casal + Refri</p>
							<p class="product-description">Lorem ipsulum dolor sit adept...</p>
						</div>
						<div class="flex justify-start items-center">
							<span class="product-price">R$ 10,00</span>
							<span class="product-old-price">R$ 50,00</span>
						</div>
					</div>
				</div>

				<div onClick="window.location.href = 'montar-burger.php'" class="combos-item cursor-pointer">
					<div class="w-full h-full max-h-24">
						<img class="w-full h-full" src="arquivos/images/burger-combo-banner.png">
					</div>

					<div class="combos-item-info">
						<div>
							<p class="product-title">Combo Casal + Refri</p>
							<p class="product-description">Lorem ipsulum dolor sit adept...</p>
						</div>
						<div class="flex justify-start items-center">
							<span class="product-price">R$ 10,00</span>
							<span class="product-old-price">R$ 50,00</span>
						</div>
					</div>
				</div>

				<div onClick="window.location.href = 'montar-burger.php'" class="combos-item cursor-pointer">
					<div class="w-full h-full max-h-24">
						<img class="w-full h-full" src="arquivos/images/burger-combo-banner.png">
					</div>

					<div class="combos-item-info">
						<div>
							<p class="product-title">Combo Casal + Refri</p>
							<p class="product-description">Lorem ipsulum dolor sit adept...</p>
						</div>
						<div class="flex justify-start items-center">
							<span class="product-price">R$ 10,00</span>
							<span class="product-old-price">R$ 50,00</span>
						</div>
					</div>
				</div>

				<div onClick="window.location.href = 'montar-burger.php'" class="combos-item cursor-pointer">
					<div class="w-full h-full max-h-24">
						<img class="w-full h-full" src="arquivos/images/burger-combo-banner.png">
					</div>

					<div class="combos-item-info">
						<div>
							<p class="product-title">Combo Casal + Refri</p>
							<p class="product-description">Lorem ipsulum dolor sit adept...</p>
						</div>
						<div class="flex justify-start items-center">
							<span class="product-price">R$ 10,00</span>
							<span class="product-old-price">R$ 50,00</span>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="w-full h-12 bg-neutral-100 mt-5 mb-2"></div>

		<section class="pizzas-container">
			<h1 class="section-title">Pizzas</h1>

			<div class="w-full flex flex-col gap-y-3 justify-start items-center mt-2">
				<div onClick="window.location.href = 'montar-burger.php'" class="pizzas-item cursor-pointer">
					<div class="pizzas-item-container">
						<div>
							<p class="product-title text-xl">Pizza Calabresa</p>
							<div class="w-full max-w-64 mt-1">
								<p class="prod-desc-2">Massa, calabresa, queijo, presunto,
									açucar, o elemento X e tudo que há de bom.</p>
							</div>
						</div>
						<p class="product-price">R$ 0,00</p>
					</div>
					<img class="w-32 rounded" src="arquivos/images/burger-combo-banner.png">
				</div>
				<div onClick="window.location.href = 'montar-burger.php'" class="pizzas-item cursor-pointer">
					<div class="pizzas-item-container">
						<div>
							<p class="product-title text-xl">Pizza Calabresa</p>
							<div class="w-full max-w-64 mt-1">
								<p class="prod-desc-2">Massa, calabresa, queijo, presunto,
									açucar, o elemento X e tudo que há de bom.</p>
							</div>
						</div>
						<p class="product-price">R$ 0,00</p>
					</div>
					<img class="w-32 rounded" src="arquivos/images/burger-combo-banner.png">
				</div>
				<div onClick="window.location.href = 'montar-burger.php'" class="pizzas-item cursor-pointer">
					<div class="pizzas-item-container">
						<div>
							<p class="product-title text-xl">Pizza Calabresa</p>
							<div class="w-full max-w-64 mt-1">
								<p class="prod-desc-2">Massa, calabresa, queijo, presunto,
									açucar, o elemento X e tudo que há de bom.</p>
							</div>
						</div>
						<p class="product-price">R$ 0,00</p>
					</div>
					<img class="w-32 rounded" src="arquivos/images/burger-combo-banner.png">
				</div>
			</div>
		</section>

		<div class="w-full h-12 bg-neutral-100 mt-5 mb-2"></div>

		<section class="w-full h-full flex flex-col justify-center p-3">
			<h1 class="section-title">Bebidas</h1>

			<div class="w-full flex flex-col gap-y-3 justify-start items-center mt-2">
				<div onClick="abrirModalBebida()" class="bebidas-item cursor-pointer">
					<div class="bebidas-item-container">
						<div>
							<p class="product-title text-xl">Coca Cola</p>
							<div class="w-full max-w-64 mt-1">
								<p class="prod-desc-2">- 1L</p>
							</div>
						</div>
						<p class="product-price">R$ 0,00</p>
					</div>
					<img class="w-32 rounded" src="arquivos/images/coca-cola-1l.png">
				</div>

				<div onClick="abrirModalBebida()" class="bebidas-item cursor-pointer">
					<div class="bebidas-item-container">
						<div>
							<p class="product-title text-xl">Tuchuaua</p>
							<div class="w-full max-w-64 mt-1">
								<p class="prod-desc-2">- 1L</p>
							</div>
						</div>
						<p class="product-price">R$ 0,00</p>
					</div>
					<img class="w-32 rounded" src="arquivos/images/tuchaua.png">
				</div>

				<div onClick="abrirModalBebida()" class="bebidas-item cursor-pointer">
					<div class="bebidas-item-container">
						<div>
							<p class="product-title text-xl">Frisky Guaraná</p>
							<div class="w-full max-w-64 mt-1">
								<p class="prod-desc-2">- 2L</p>
							</div>
						</div>
						<p class="product-price">R$ 0,00</p>
					</div>
					<img class="w-32 rounded" src="arquivos/images/frisk-2l.png">
				</div>
			</div>
		</section>

		<nav class="w-full max-w-[602px] mx-auto fixed bottom-0 shadow-menu z-[80]">

			<a href="sacola.php"
				class="w-full px-6 py-4 flex justify-between items-center bg-[#ea1d2c] hover:bg-red-600 cursor-pointer">
				<div class="relative">
					<span class="cart-toast">0</span>
					<img class="w-6" src="arquivos/images/icons/bag.svg">
				</div>
				<p class="font-ifood text-md font-semibold text-white">Ver sacola</p>
				<p class="font-ifood text-md font-semibold text-white">R$ 0,00</p>
			</a>

			<div class="w-full bg-neutral-100 py-2 px-5">
				<ul class="w-full flex justify-between items-center">
					<li>
						<a href="index.php" class="flex flex-col items-center">
							<img class="w-6" src="arquivos/images/icons/shop.svg">
							<p class="font-ifood text-neutral-600">Inicio</p>
						</a>
					</li>
					<li>
						<a href="#" class="flex flex-col items-center">
							<img class="w-6" src="arquivos/images/icons/search.svg">
							<p class="font-ifood text-neutral-600">Buscar</p>
						</a>
					</li>
					<li>
						<a href="#" class="flex flex-col items-center">
							<img class="w-6" src="arquivos/images/icons/person.svg">
							<p class="font-ifood text-neutral-600">Perfil</p>
						</a>
					</li>
				</ul>
			</div>
		</nav>

		<div id="bebida-modal" class="bebida-modal-container flex hidden">
			<div class="w-full flex justify-start items-center">
				<button onClick="fecharModalBebida()">
					<img class="w-10" src="arquivos/images/icons/chevron-left.svg">
				</button>
				<div class="w-full text-center">
					<p class="text-xl font-ifood font-semibold">Coca-Cola 1L</p>
				</div>
			</div>
			<div class="mt-10">
				<img class="w-80" src="arquivos/images/coca-cola-1l.png">
			</div>
			<div class="w-full h-full flex flex-col justify-between items-center pb-5">
				<div class="w-full mt-5">
					<p class="text-xl font-ifood font-semibold">Coca-Cola 1L</p>
					<p class="prod-desc-2">Description</p>
					<p class="font-ifood font-semibold mt-1 ml-2">R$ 0,00</p>
				</div>
				<div class="w-full flex gap-x-3 justify-start items-center">
					<div class="flex justify-center items-center">
						<button onClick="this.nextElementSibling.stepDown()" class="stepDownButton">-</button>
						<input class="bebidas-count" type="number" min="0" value="1">
						<button onClick="this.previousElementSibling.stepUp()" class="stepUpButton">+</button>
					</div>
					<button onClick="fecharModalBebida()" class="adicionar-bebida-button">
						<span>Adicionar</span>
						<span>R$0,00</span>
					</button>
				</div>
			</div>
		</div>




		<!--  modal entrega/balcao  -->

			<div id="delivery-modal-container" class="delivery-modal-container">
				<div class="w-full max-w-[602px] modal__content modal--theme-white modal__content--animation-dialog modal__content--after-open modal__content--after-open-dialog"
					tabindex="-1" role="dialog" aria-modal="true">
					<div class="modal__inner-content">
						<div class="modal__inner-content-scroll">
							<div class="delivery-methods-modal">
								<p class="delivery-methods-modal__title">Como quer receber o pedido?</p>
								<label class="delivery-methods-modal__option delivery-methods-modal__option--checked"
									id="methodDelivery">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip-scotter)">
											<path
												d="M18.05 4.83H15.13C14.91 3.24 13.55 2 11.9 2C10.25 2 8.89 3.24 8.67 4.83H5.75C5.34 4.83 5 5.17 5 5.58C5 5.99 5.34 6.33 5.75 6.33H8.81C8.98 6.8 9.23 7.22 9.57 7.57C7.67 8.45 6.34 10.38 6.34 12.61V16.4C6.34 17.38 7.14 18.18 8.12 18.18H9.23V19.33C9.23 20.8 10.43 22 11.9 22C13.37 22 14.57 20.8 14.57 19.33V18.18H15.68C16.66 18.18 17.46 17.38 17.46 16.4C17.46 15.99 17.12 15.65 16.71 15.65C16.3 15.65 15.96 15.99 15.96 16.4C15.96 16.55 15.84 16.68 15.68 16.68H14.57V15.48C14.57 14.01 13.37 12.81 11.9 12.81C10.43 12.81 9.23 14 9.23 15.48V16.68H8.11C7.96 16.68 7.83 16.56 7.83 16.4V12.61C7.83 10.37 9.65 8.55 11.89 8.55C14.13 8.55 15.95 10.37 15.95 12.61V13.28C15.95 13.69 16.29 14.03 16.7 14.03C17.11 14.03 17.45 13.69 17.45 13.28V12.61C17.45 10.38 16.12 8.45 14.22 7.57C14.57 7.22 14.83 6.8 14.99 6.33H18.05C18.46 6.33 18.8 5.99 18.8 5.58C18.8 5.17 18.46 4.83 18.05 4.83ZM10.73 15.48C10.73 14.83 11.26 14.31 11.9 14.31C12.54 14.31 13.07 14.84 13.07 15.48V19.33C13.07 19.98 12.54 20.5 11.9 20.5C11.26 20.5 10.73 19.97 10.73 19.33V15.48ZM11.9 3.5C12.88 3.5 13.67 4.3 13.67 5.28C13.67 6.26 12.88 7.05 11.9 7.05C10.92 7.05 10.13 6.25 10.13 5.28C10.13 4.31 10.92 3.5 11.9 3.5Z"
												fill="#A6A6A6"></path>
										</g>
										<defs>
											<clipPath id="clip-scotter">
												<rect width="13.8" height="20" fill="white" transform="translate(5 2)">
												</rect>
											</clipPath>
										</defs>
									</svg>
									<p class="delivery-methods-modal__option-label"><span
											class="delivery-methods-modal__label-title">Entrega</span><span
											class="delivery-methods-modal__label-description">A gente leva até
											você</span></p><input type="radio" name="method-option" id="delivery-option"
										data-test-id="delivery-option" class="delivery-methods-modal__radio"
										value="DELIVERY" checked="">
								</label>
								<label class="delivery-methods-modal__option" id="methodTakeOut">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip-person-walking)">
											<path
												d="M9.64027 15.0401C9.25027 14.9001 8.82027 15.1101 8.68027 15.5001L6.76027 21.0101C6.62027 21.4001 6.83027 21.8301 7.22027 21.9601C7.31027 21.9901 7.40027 22.0001 7.48027 22.0001C7.79027 22.0001 8.08027 21.8101 8.19027 21.5001L10.1103 15.9901C10.2403 15.6001 10.0303 15.1701 9.64027 15.0401Z"
												fill="#A6A6A6"></path>
											<path
												d="M12.6991 6.18C13.8491 6.18 14.7891 5.24 14.7891 4.09C14.7891 2.94 13.8491 2 12.6991 2C11.5491 2 10.6191 2.94 10.6191 4.09C10.6191 5.24 11.5491 6.18 12.6991 6.18ZM12.6991 3.5C13.0191 3.5 13.2891 3.76 13.2891 4.09C13.2891 4.42 13.0291 4.68 12.6991 4.68C12.3791 4.68 12.1091 4.42 12.1091 4.09C12.1091 3.76 12.3791 3.5 12.6991 3.5Z"
												fill="#A6A6A6"></path>
											<path
												d="M17.9394 10.33L15.1394 9.4L13.1594 7.22C12.8994 6.87 12.5394 6.6 12.1194 6.45C11.6794 6.3 11.2294 6.29 10.8094 6.41L7.53939 7.33C7.36939 7.38 7.21939 7.49 7.11939 7.64L5.12939 10.62C4.89939 10.97 4.98939 11.44 5.32939 11.67C5.45939 11.75 5.59939 11.8 5.74939 11.8C5.98939 11.8 6.22939 11.68 6.36939 11.47L8.20939 8.7L9.06939 8.46L7.87939 11.89C7.84939 11.97 7.83939 12.04 7.83939 12.12C7.83939 12.14 7.83939 12.16 7.83939 12.18C7.83939 12.25 7.85939 12.32 7.87939 12.38C7.88939 12.4 7.89939 12.43 7.90939 12.45C7.94939 12.53 7.98939 12.61 8.05939 12.67L12.0894 16.7L14.0294 21.54C14.1394 21.82 14.4194 22 14.7194 22C14.8094 22 14.9094 21.98 14.9994 21.95C15.3794 21.8 15.5694 21.36 15.4194 20.98L13.4294 16C13.3894 15.91 13.3394 15.82 13.2594 15.75L11.7594 14.25L13.3494 9.66L14.1594 10.55C14.2494 10.64 14.3594 10.72 14.4794 10.76L17.4694 11.76C17.5494 11.79 17.6294 11.8 17.7094 11.8C18.0194 11.8 18.3194 11.6 18.4194 11.29C18.5494 10.89 18.3394 10.46 17.9394 10.33ZM12.0694 8.78L10.5794 13.06L9.44939 11.94L10.7094 8.31C10.8394 7.94 11.2494 7.74 11.6194 7.87C11.7994 7.93 11.9494 8.06 12.0294 8.23C12.1194 8.41 12.1294 8.6 12.0694 8.78Z"
												fill="#A6A6A6"></path>
										</g>
										<defs>
											<clipPath id="clip-person-walking">
												<rect width="13.46" height="20" fill="white" transform="translate(5 2)">
												</rect>
											</clipPath>
										</defs>
									</svg>
									<p class="delivery-methods-modal__option-label"><span
											class="delivery-methods-modal__label-title">Retirada</span><span
											class="delivery-methods-modal__label-description">Você retira no
											local</span></p><input type="radio" name="method-option" id="takeout-option"
										data-test-id="takeout-option" class="delivery-methods-modal__radio"
										value="TAKEOUT">
								</label>

								<button id="confirm-delivery" type="button" role="button"
									class="btn btn--confirmar-modo btn--size-m delivery-methods-modal__confirm-btn"
									variant="delivery-methods-modal__confirm-btn" theme="default" color="primary"
									target="" rel="">Confirmar entrega</button>
							</div>
						</div>
					</div>
				</div>
			</div>


		<?php 
			include 'includes/footer.php'
		?>

	</div>

	<script src="https://code.jquery.com/jquery-3.7.1.min.js"
		integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<script src="arquivos/js/utils.js"></script>
	<script src="arquivos/js/main.js"></script>
	<script src="arquivos/js/modals-ifood.js"></script>
	<script src="arquivos/js/jqueryUtils.js"></script>
	<script src="arquivos/js/cardapio.js"></script>
</body>

</html>