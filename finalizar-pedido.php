<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="arquivos/images/favicon.png" />
	<title>Só Burgers Delivery</title>

	<!-- GERAL STYLES -->
	<link rel="stylesheet" href="arquivos/css/styles.css">
	</link>
	<link rel="stylesheet" href="arquivos/css/ifood.css">
	</link>

	<style>
		.address-modal-icon-shp1 {
			fill: #fdf0f0
		}

		.address-modal-icon-shp2 {
			fill: #e8b1b4
		}

		.address-modal-icon-shp3 {
			fill: #c6abb1
		}

		.address-modal-icon-shp4 {
			fill: #1d7469
		}

		.address-modal-icon-shp5 {
			fill: #dec6cb
		}

		.address-modal-icon-shp6 {
			opacity: 0.38;
			fill: #411021
		}

		.address-modal-icon-shp7 {
			opacity: 0.38;
			fill: none
		}

		.address-modal-icon-shp8 {
			fill: #d8969a
		}

		.address-modal-icon-shp9 {
			fill: #eb445f
		}

		.address-modal-icon-shp10 {
			fill: #ffffff
		}

		.address-modal-icon-shp11 {
			fill: #f6677e
		}

		.address-modal-icon-shp12 {
			fill: #44a498
		}

		.address-modal-icon-shp13 {
			fill: none;
			stroke: #44a498
		}

		.address-modal-icon-shp14 {
			fill: #fc9aaa
		}

		.city-line {
			fill: url(#paint0_linear)
		}

		.icon-map {
			margin-top: -0.32em !important;
			margin-bottom: 0.8em;
		}
	</style>

	<!-- ANIMATE.STYLE -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body class="bg-neutral-200">

	<div class="w-full max-w-[602px] min-h-screen bg-white mx-auto flex flex-col relative">

		<?php 
			include 'includes/header.php'
		?>

		<section class="p-3">
			<h1 class="font-ifood font-bold text-3xl">
				Finalize seu Pedido</h1>

			<div class="flex justify-start mt-5">
				<div id="delivery-method" class="delivery-method delivery-after line-entrega">
					<button class="entrega-button">Entrega</button>
					<button class="retirada-button">Retirada</button>
				</div>
			</div>

			<div class="local-container">
				<button id="user-local" class="local-item flex">
					<div class="w-full h-full flex items-center gap-x-3">
						<div class="local-banner">
							<img class="w-6" src="arquivos/images/icons/local.svg">
						</div>
						<div class="text-left">
							<p class="font-ifood font-semibold">Av. Jair Jairo, 666</p>
							<p class="font-ifood text-xs text-neutral-600">São Paulo/SP</p>
						</div>
					</div>
					<p class="font-ifood text-[#ea1d2c] font-semibold mb-1">Trocar</p>
				</button>

				<div id="shop-local" class="local-item flex hidden">
					<div class="w-full h-full flex items-center gap-x-3">
						<div class="local-banner overflow-hidden">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#b91c1c"
								class="bi bi-shop" viewBox="0 0 16 16">
								<path
									d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z" />
							</svg>
						</div>
						<div class="text-left">
							<p class="font-ifood font-semibold">Av. Jair Jairo, 666</p>
							<p class="font-ifood text-xs text-neutral-600">São Paulo/SP</p>
						</div>
					</div>
				</div>
			</div>

			<div class="w-full">
				<p class="text-neutral-400 font-ifood font-semibold mb-2">Tipos de entrega</p>
				<div class="w-full flex justify-between items-center">
					<div class="w-36 h-20 flex flex-col justify-center border border-neutral-200 px-3 py-2 rounded">
						<p class="text-[#ea1d2c] text-ifood text-sm font-semibold">Padrão</p>
						<p class="text-neutral-300 text-ifood text-sm">Hoje, 50-60 min</p>
						<p class="text-green-600 text-ifood text-sm font-semibold">Grátis</p>
					</div>
					<div class="w-36 h-20 flex flex-col justify-center border border-neutral-200 px-3 py-2 rounded">
						<p class="text-[#ea1d2c] text-ifood text-sm font-semibold">Rápida</p>
						<p class="text-neutral-300 text-ifood text-sm">Hoje, 50-60 min</p>
						<p class="text-green-600 text-ifood text-sm font-semibold">R$ 10.00</p>
					</div>
				</div>
			</div>

			<div class="flex flex-col justify-start px-2 mt-5">
				<div class="w-full flex justify-between border-y border-neutral-200 py-2">
					<div>
						<p class="font-ifood font-semibold text-neutral-900">1x Pizza de Calabresa</p>
						<p class="font-ifood text-sm text-neutral-600 mt-1">1x Pizza de calabresa</p>
						<p class="font-ifood text-sm text-neutral-600">1x Ketchup</p>
						<p class="font-ifood text-sm text-neutral-600">1x Coca-cola geladinha</p>
					</div>
					<div class="flex gap-x-2 justify-center items-start">
						<p class="font-ifood font-semibold text-neutral-900 mt-0.5 border-r-2 border-neutral-200 pr-2">
							R$ 0,00</p>
						<button class="remove-cart-product">
							<img class="w-5"src="arquivos/images/icons/close.svg">
						</button>
					</div>
				</div>

			</div>
			<div class="text-center">
				<a class="adicionar-mais" href="cardapio.php">Adicionar mais items</a>
			</div>

			<section class="mt-10 border-t-2 border-neutral-200">
				<div class="boleto">
					<div class="w-full space-y-1 p-2">
						<div class="boleto-item">
							<p>Taxa de entrega</p>
							<p>R$ 0,00</p>
						</div>
						<div class="boleto-item">
							<p>Subtotal</p>
							<p>R$ 0,00</p>
						</div>
						<div class="boleto-item">
							<p>Exemplo</p>
							<p>R$ 0,00</p>
						</div>
					</div>
					<div class="boleto-total-container">
						<div>
							<p>Total</p>
							<p class="boleto-total-price">R$ 0,00</p>
						</div>
					</div>
				</div>
			</section>

			<div class="mt-10">
				<!-- <div class="cupom-container">
					<h1 class="cupom-title">Você tem um cupom de desconto?</h1>
					<div class="cupom-input-container">
						<input class="cupom-input" type="text" name="cupom" placeholder="Seu cupom">
						<button class="cupom-button">Adicionar</button>
					</div>
				</div> -->

				<div>
					<p class="font-ifood font-semibold text-neutral-500 text-center text-lg mb-5">Pagamento</p>

					<!--  gap-x-7 -->
					<div class="flex gap-x-3 justify-center items-center">
						<button id="pay-pix" class="w-24 h-24 flex gap-y-2 flex-col justify-center items-center font-ifood text-neutral-600 leading-5 btn-pay">
							<img class="w-8" src="arquivos/images/icons/pix.png">
							Pague agora <br> com PIX
						</button>
						<button id="pay-card" class="w-24 h-24 flex gap-y-2 flex-col justify-center items-center font-ifood text-neutral-600 leading-5 btn-pay">
							<img class="w-8" src="arquivos/images/icons/card.png">
							Máquina <br> Cartão
						</button>
						<button id="pay-money" class="w-24 h-24 flex gap-y-2 flex-col justify-center items-center font-ifood text-neutral-600 leading-5 btn-pay">
							<img class="w-8" src="arquivos/images/icons/cash-on-delivery.png">
							Dinheiro
						</button>
					</div>
				</div>	

				<div class="mt-10">
					<button
						class="w-80 py-3 mx-auto flex justify-center items-center bg-[#ea1d2c] hover:bg-red-600 cursor-pointer rounded">
						<p class="font-ifood text-lg text-md font-semibold text-white">Fazer Pedido</p>
					</button>
				</div>

				<!-- <div class="w-full max-w-96 border border-neutral-200 mt-10 rounded-lg mx-auto">
					<div class="p-3 border-b border-neutral-200">
						<p class="font-ifood text-neutral-600 text-sm">Seu pedido em</p>
						<p class="text-barlow font-semibold text-lg">Só Pizzas São Paulo</p>
						<a class="text-barlow font-semibold underline text-[#ea1d2c]" href="cardapio.html">Ver
							Cardápio</a>
					</div>
					<div class="my-2 p-3">
						<div class="w-full">
							<div class="w-full flex gap-x-5 justify-between items-start">
								<p class="font-ifood font-semibold text-neutral-800">1x Combo pizza + celta 2019 +
									cola-cola</p>
								<p class="font-ifood font-semibold whitespace-nowrap">R$ 0,00</p>
							</div>
							<p class="font-ifood text-neutral-600 text-sm mt-2 w-44">1x Celta 2010, 1x Pizza, 2x
								Coca-Cola</p>
							<p class="mt-2 font-ifood text-neutral-600">Obs: ...</p>
							<div class="space-x-3 mt-2">
								<button class="text-[#ea1d2c] font-ifood font-semibold p-2">Editar</button>
								<button class="text-stone-700 font-ifood font-semibold p-2">Remover</button>
							</div>
						</div>
					</div>
					<div class="flex items-center gap-x-5 bg-neutral-100 p-3 border-y border-neutral-200">
						<img class="w-7 rotate-45" src="arquivos/images/icons/ticket.svg">
						<p class="font-ifood text-lg font-semibold">Boleto</p>
					</div>
					<div class="boleto">
						<div class="w-full space-y-1 p-2">
							<div class="boleto-item">
								<p>Taxa de entrega</p>
								<p>R$ 0,00</p>
							</div>
							<div class="boleto-item">
								<p>Subtotal</p>
								<p>R$ 0,00</p>
							</div>
							<div class="boleto-item">
								<p>Exemplo</p>
								<p>R$ 0,00</p>
							</div>
						</div>
						<div class="boleto-total-container">
							<div>
								<p>Total</p>
								<p class="boleto-total-price">R$ 0,00</p>
							</div>
							<button class="boleto-button">Pagamento</button>
						</div>
					</div>
				</div> -->
			</div>

		</section>

		<nav class="w-full max-w-[602px] mx-auto fixed bottom-0 shadow-menu">
			<div class="w-full bg-neutral-100 py-2 px-5">
				<ul class="w-full flex justify-between items-center">
					<li>
						<a href="index.php" class="flex flex-col items-center">
							<img class="w-6" src="arquivos/images/icons/shop.svg">
							<p class="font-ifood text-neutral-600">Inicio</p>
						</a>
					</li>
					<li>
						<a href="cardapio.php" class="flex flex-col items-center">
							<img class="w-6" src="arquivos/images/icons/cardapio.png">
							<p class="font-ifood text-neutral-600">Cardápio</p>
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

		<div class="w-full h-full flex justify-center fixed top-0 left-0 trocoContainer isContainer hidden" id="dinheiro-container">
			<div class="mainContainer black-bg-container trocoContainer isContainer hidden" id="black-bg-container">
				<div class="containerBody dinheiro-modal-container trocoContainer isContainer hidden" id="dinheiro-modal" target>
					<div class="text-center">
						<h1 class="font-ifood text-xl font-semibold">Dinheiro</h1>
						<p class="font-ifood text-lg">Você vai precisar de troco?</p>
					</div>
					<div class="w-full flex gap-x-5 justify-between items-center">
						<button id="no-change" class="dinheiro-modal-buttons">Não</button>
						<button id="yes-change" class="dinheiro-modal-buttons">Sim</button>
					</div>
				</div>

				<div id="troco-modal" class="containerBody troco-modal-container  isContainer flex hidden" >
					<div class="text-center">
						<h1 class="font-ifood text-xl font-semibold">Troco pra quanto?</h1>
						<p class="font-ifood mt-1">Seu pedido deu R$ 0,00.</p>
						<p class="font-ifood mb-5">Digite quanto vai pagar em dinheiro para o entragador levar o seu
							troco.</p>
					</div>
					<form>
						<div class="flex flex-col items-center space-y-5">
							<label>
								<span class="label-text">R$</span>
								<input class="troco-input" type="text" name="troco" placeholder="0,00" required>
							</label>

							<button id="confirm-change" class="w-72 dinheiro-modal-buttons">Confirmar</button>
						</div>
					</form>
					<span></span>
				</div>
			</div>
		</div>



		<div class="modalBox z-[99999] hidden" id="addresses-modal">
			<div class="modal__overlay">
				<div class="user-addresses-container" tabindex="-1" role="dialog" aria-modal="true">
					<div class="user-addresses-modal mx-auto border mt-5">


						<div style="align-self: start;">
							<svg onClick="closeAllModals()" width="20" height="20" viewBox="0 0 9 18" fill="#eb2d3b"
								xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M8.72574 0.18573C9.05505 0.462998 9.09319 0.95 8.81092 1.27348L2.06872 9L8.81092 16.7265C9.09319 17.05 9.05505 17.537 8.72574 17.8143C8.39642 18.0915 7.90063 18.0541 7.61836 17.7306L-9.53674e-07 9L7.61836 0.269403C7.90063 -0.0540764 8.39642 -0.091538 8.72574 0.18573Z">
								</path>
							</svg>
						</div>




						<div class="icon-map">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 199 113" width="199" height="113">
								<defs>
									<linearGradient id="paint0_linear" gradientUnits="userSpaceOnUse" x1="97.108"
										y1="45.021" x2="97.73" y2="131.203">
										<stop offset="0" stop-color="#ffedf4"></stop>
										<stop offset="0.821" stop-color="#ffedf4" stop-opacity="0"></stop>
									</linearGradient>
								</defs>

								<path id="background" class="city-line"
									d="M199.07 104.68C186.43 93.21 167.95 81.59 162.4 78.22C161.48 77.61 160.86 76.54 160.86 75.47L160.98 49.72C160.98 48.19 159.75 46.81 158.21 46.81L148.51 46.21C146.82 46.06 145.43 47.44 145.44 48.98L144.83 60.32C144.84 61.85 143.45 63.23 141.76 63.08L134.53 62.78C132.83 62.78 131.6 61.41 131.6 59.72L131.37 1.95C131.37 1.03 130.6 0.26 129.67 0.27L116.59 -0.02C115.51 -0.02 114.74 0.75 114.9 1.82L114.47 27.72C114.47 28.48 113.55 28.94 112.93 28.48L98.61 19.62C97.38 18.85 95.84 18.85 94.61 19.62L75.85 31.75C74.62 32.67 73.7 34.05 73.7 35.59L73.75 73.59C73.75 74.05 73.44 74.36 72.98 74.36L67.59 74.36C67.13 74.37 66.82 74.06 66.82 73.6L66.33 50.46C66.33 49.08 65.25 48.01 63.86 48.01C58.48 48.02 56.01 48.18 51.86 48.33C50.32 48.34 49.09 49.56 49.09 51.1C49.1 57.07 49.12 70.86 49.13 75.46C49.13 76.38 48.51 77 47.59 77.15L43.28 77.92C42.2 78.08 41.28 77.31 41.28 76.24L41.41 58.92C41.41 58.31 40.79 57.85 40.33 58L33.71 57.86C32.48 57.86 31.4 58.78 31.41 60.16L30.98 85.6C30.98 86.67 30.37 87.75 29.29 88.21C26.67 89.44 12.06 95.59 0.07 105.56C24.7 107.52 199.07 104.68 199.07 104.68Z">
								</path>
								<g id="person">
									<path class="address-modal-icon-shp1"
										d="M104.42 112.51C90.62 112.51 79.46 110.94 79.46 108.99C79.46 107.05 90.62 105.48 104.42 105.48C118.23 105.48 129.38 107.05 129.38 108.99C129.38 110.94 118.23 112.51 104.42 112.51Z">
									</path>
									<path class="address-modal-icon-shp2"
										d="M122.16 48.68C122.16 48.68 122.45 46.9 122.3 45.72C122.01 43.93 121.11 44.08 120.52 43.04C118.89 40.22 116.21 42.15 115.02 41.86C112.64 41.26 108.78 46.31 110.86 49.13C111.01 49.43 112.79 49.57 112.94 49.72C116.21 57.44 122.01 52.1 122.16 48.68Z">
									</path>
									<path class="address-modal-icon-shp3"
										d="M113.98 51.21C114.13 51.21 112.2 58.92 112.2 58.92L106.55 57.74L112.05 50.61L113.98 51.21Z">
									</path>
									<path class="address-modal-icon-shp4"
										d="M109.16 50.27C108.29 49.83 108.01 48.64 108.53 47.6C109.05 46.55 110.17 46.06 111.04 46.49C111.91 46.92 112.19 48.12 111.67 49.16C111.15 50.21 110.03 50.7 109.16 50.27Z">
									</path>
									<path class="address-modal-icon-shp5"
										d="M115.91 49.13C115.91 48.98 115.91 48.98 115.91 49.13C115.91 47.5 114.57 46.01 112.94 46.01C111.3 46.01 109.97 47.35 109.97 48.98C109.97 48.98 109.97 48.98 109.97 49.13C109.97 50.61 111.3 52.1 112.94 52.1C114.57 51.95 115.91 50.76 115.91 49.13Z">
									</path>
									<path class="address-modal-icon-shp6"
										d="M113.53 44.53C113.83 43.79 113.39 43.79 113.09 44.38C113.09 44.38 113.09 44.38 113.09 44.53C112.79 45.27 113.39 45.27 113.53 44.53Z">
									</path>
									<path class="address-modal-icon-shp6"
										d="M113.83 43.04C113.83 43.04 113.83 42.9 113.83 43.04C114.13 42.3 113.68 42.3 113.39 42.9C113.39 42.9 113.39 42.9 113.39 43.04C113.09 43.64 113.53 43.64 113.83 43.04Z">
									</path>
									<path class="address-modal-icon-shp6"
										d="M115.76 43.64C115.76 43.64 115.76 43.49 115.76 43.64C116.06 42.9 115.61 42.9 115.32 43.49C115.32 43.49 115.32 43.49 115.32 43.64C115.02 44.23 115.47 44.23 115.76 43.64Z">
									</path>
									<path class="address-modal-icon-shp6"
										d="M112.05 45.72C112.05 45.57 112.05 45.57 112.05 45.72C112.05 45.57 112.05 45.57 112.05 45.72C112.34 44.97 111.9 44.97 111.6 45.57C111.6 45.57 111.6 45.57 111.6 45.72C111.3 46.31 111.75 46.31 112.05 45.72Z">
									</path>
									<path class="address-modal-icon-shp6"
										d="M117.4 42.3C117.55 42.3 117.55 42.3 117.4 42.3C117.55 42.3 117.55 42.3 117.4 42.3C117.7 41.56 117.25 41.56 116.95 42.15C116.95 42.15 116.95 42.15 116.95 42.3C116.81 43.04 117.25 42.9 117.4 42.3Z">
									</path>
									<path class="address-modal-icon-shp6"
										d="M117.99 43.64C118.59 43.04 118.29 42.9 117.7 43.34C117.7 43.34 117.7 43.34 117.55 43.34C117.1 43.93 117.4 44.08 117.99 43.64Z">
									</path>
									<path class="address-modal-icon-shp6"
										d="M121.71 44.97C121.71 44.97 121.71 44.82 121.71 44.97C122.16 44.38 121.86 44.23 121.41 44.68C121.41 44.68 121.41 44.68 121.41 44.82C120.82 45.42 121.26 45.57 121.71 44.97Z">
									</path>
									<path class="address-modal-icon-shp6"
										d="M117.4 45.57C117.99 45.12 117.7 44.82 117.25 45.27C117.25 45.27 117.25 45.27 117.1 45.27C116.51 45.72 116.81 46.01 117.4 45.57Z">
									</path>
									<path class="address-modal-icon-shp6"
										d="M116.51 51.65C116.66 51.65 116.66 51.65 116.51 51.65C116.66 51.65 116.66 51.65 116.51 51.65C117.25 51.95 116.95 52.25 116.36 52.1C116.36 52.1 116.36 52.1 116.21 52.1C115.61 51.8 115.91 51.35 116.51 51.65Z">
									</path>
									<path class="address-modal-icon-shp6"
										d="M117.1 47.79C117.1 47.79 117.25 47.79 117.1 47.79C117.84 48.09 117.55 48.39 116.95 48.24C116.95 48.24 116.95 48.24 116.81 48.24C116.21 47.94 116.51 47.65 117.1 47.79Z">
									</path>
									<path class="address-modal-icon-shp6"
										d="M117.99 50.17C118.14 50.17 118.14 50.17 117.99 50.17C118.14 50.17 118.14 50.17 117.99 50.17C118.74 50.46 118.44 50.76 117.84 50.61C117.84 50.61 117.84 50.61 117.7 50.61C117.1 50.32 117.4 50.02 117.99 50.17Z">
									</path>
									<path class="address-modal-icon-shp6"
										d="M118.59 51.8C118.74 51.8 118.74 51.8 118.59 51.8C119.33 52.1 119.03 52.39 118.44 52.25C118.44 52.25 118.44 52.25 118.29 52.25C117.7 51.95 117.99 51.65 118.59 51.8Z">
									</path>
									<path class="address-modal-icon-shp6"
										d="M119.48 44.53C119.48 44.53 119.48 44.38 119.48 44.53C119.48 44.38 119.48 44.38 119.48 44.53C120.08 43.93 120.37 44.23 119.93 44.68C119.18 45.27 118.89 44.97 119.48 44.53Z">
									</path>
									<path class="address-modal-icon-shp6"
										d="M119.33 42.9C119.93 42.3 120.22 42.6 119.78 43.04C119.03 43.79 118.74 43.49 119.33 42.9Z">
									</path>
									<path class="address-modal-icon-shp6"
										d="M120.52 47.35C121.26 47.2 121.26 47.65 120.67 47.79C120.67 47.79 120.67 47.79 120.52 47.79C119.78 47.79 119.78 47.5 120.52 47.35Z">
									</path>
									<path class="address-modal-icon-shp6"
										d="M120.97 48.39C121.12 48.39 121.12 48.39 120.97 48.39C121.71 48.24 121.71 48.68 121.12 48.83C121.12 48.83 121.12 48.83 120.97 48.83C120.22 48.98 120.22 48.53 120.97 48.39Z">
									</path>
									<path class="address-modal-icon-shp6"
										d="M114.28 45.12C114.28 45.12 114.28 44.97 114.28 45.12C114.72 44.38 115.02 44.68 114.58 45.27C114.58 45.27 114.58 45.27 114.58 45.42C114.28 46.01 113.98 45.72 114.28 45.12Z">
									</path>
									<path class="address-modal-icon-shp6"
										d="M118.44 46.61C118.44 46.61 118.44 46.46 118.44 46.61C119.18 46.16 119.33 46.46 118.74 46.9C118.74 46.9 118.74 46.9 118.59 46.9C117.99 47.35 117.84 46.9 118.44 46.61Z">
									</path>
									<path class="address-modal-icon-shp6"
										d="M120.08 51.06C120.08 51.06 120.22 51.21 120.08 51.06C120.82 51.35 120.67 51.8 119.93 51.5C119.93 51.5 119.93 51.5 119.78 51.5C119.18 51.06 119.48 50.76 120.08 51.06Z">
									</path>
									<path class="address-modal-icon-shp6"
										d="M116.06 46.46C116.06 46.46 116.06 46.31 116.06 46.46C116.8 46.01 116.95 46.31 116.36 46.75C116.36 46.75 116.36 46.75 116.21 46.75C115.61 47.2 115.47 46.75 116.06 46.46Z">
									</path>
									<path class="address-modal-icon-shp6"
										d="M116.66 48.98C116.81 48.98 116.81 48.98 116.66 48.98C117.4 48.98 117.4 49.42 116.66 49.42C116.66 49.42 116.66 49.42 116.51 49.42C115.76 49.42 115.91 48.98 116.66 48.98Z">
									</path>
									<path class="address-modal-icon-shp6"
										d="M115.76 44.97C115.76 44.83 115.76 44.83 115.76 44.97C116.06 44.23 116.36 44.53 116.06 45.12C116.06 45.12 116.06 45.12 116.06 45.27C115.76 45.86 115.47 45.57 115.76 44.97Z">
									</path>
									<path class="address-modal-icon-shp7"
										d="M111.75 44.23C111.9 44.23 111.9 44.23 111.75 44.23C111.9 44.23 111.9 44.23 111.75 44.23C112.05 43.49 112.34 43.79 112.05 44.38C112.05 44.38 112.05 44.38 112.05 44.53C111.9 45.27 111.6 44.97 111.75 44.23Z">
									</path>
									<path class="address-modal-icon-shp6"
										d="M115.91 52.39C116.66 52.39 116.66 52.84 115.91 52.84C115.91 52.84 115.91 52.84 115.76 52.84C115.02 52.84 115.17 52.39 115.91 52.39Z">
									</path>
									<path class="address-modal-icon-shp6"
										d="M119.78 49.72C119.93 49.72 119.93 49.72 119.78 49.72C120.52 49.57 120.52 49.87 119.93 50.17C119.93 50.17 119.93 50.17 119.78 50.17C119.03 50.32 119.03 49.87 119.78 49.72Z">
									</path>
									<path class="address-modal-icon-shp6"
										d="M118.74 48.39C118.74 48.39 118.89 48.39 118.74 48.39C119.48 48.24 119.48 48.53 118.89 48.83C118.89 48.83 118.89 48.83 118.74 48.83C117.99 48.98 117.99 48.53 118.74 48.39Z">
									</path>
									<path class="address-modal-icon-shp6"
										d="M115.76 50.32C115.91 50.32 115.91 50.32 115.76 50.32C116.51 50.46 116.51 50.76 115.76 50.76C115.76 50.76 115.76 50.76 115.61 50.76C114.87 50.61 115.02 50.17 115.76 50.32Z">
									</path>
									<path class="address-modal-icon-shp6"
										d="M120.52 46.01C121.26 45.86 121.26 46.16 120.67 46.46C120.67 46.46 120.67 46.46 120.52 46.46C119.78 46.46 119.78 46.16 120.52 46.01Z">
									</path>
									<path id="arm-2" class="address-modal-icon-shp3"
										d="M112.64 58.63C110.71 56.99 108.33 58.92 101.64 56.25C97.78 54.77 95.84 52.25 94.36 50.46C93.61 49.57 93.47 48.24 92.72 47.35C92.42 47.05 92.13 47.05 91.83 47.2C91.09 47.5 91.09 47.94 91.09 48.39C90.34 47.94 89.75 47.5 88.86 48.24C88.56 48.54 88.41 48.98 88.41 49.28C87.07 48.98 87.22 50.17 87.22 50.17C86.78 50.17 86.33 50.32 86.03 50.76C85.14 51.95 86.48 53.58 87.07 54.47C90.49 58.78 96.74 66.05 109.22 64.86C111.9 64.71 116.21 61.74 112.64 58.63Z">
									</path>
									<g id="leg-1">
										<path class="address-modal-icon-shp5"
											d="M99.26 81.78C99.26 81.78 98.67 91.87 109.07 93.2C119.48 94.39 125.87 95.13 127.66 98.1C127.66 98.1 129.74 100.48 129.59 97.06C129.44 93.65 130.33 88.75 126.17 87.57C122.01 86.38 110.11 87.42 110.86 81.48C111.01 79.4 110.71 76.88 110.71 71.98L99.26 81.78Z">
										</path>
										<path class="address-modal-icon-shp8"
											d="M99.26 81.78C99.26 81.78 98.97 84.89 100.01 86.38C100.01 86.38 102.98 87.56 110.71 81.63C110.71 81.63 111.3 75.25 110.56 72.13L99.26 81.78Z">
										</path>
									</g>
									<path class="address-modal-icon-shp5"
										d="M97.63 76.29C97.63 76.29 87.52 77.32 87.97 87.86C88.41 98.25 90.19 101.22 84.99 105.22C84.1 105.82 79.79 108.78 87.37 108.64C90.79 108.64 95.99 109.53 96.59 105.22C97.18 100.92 96.44 90.38 99.71 84.45L97.63 76.29Z">
									</path>
									<path id="ballon-3" fill-rule="evenodd" class="address-modal-icon-shp9"
										d="M77.01 32.09C75.98 0.49 105.35 5 111.45 13.01C120 21.82 118.07 32.2 112.1 39.87C103.73 50.75 94.79 58.19 85.38 65.4C84.24 66.2 82.63 65.63 82.29 64.26C80.57 57.27 76.55 39.53 77.01 32.09ZM91.41 24.26C91.41 28.37 94.69 31.64 98.8 31.64C102.91 31.64 106.18 28.37 106.18 24.26C106.18 20.15 102.91 16.88 98.8 16.88C94.69 16.88 91.41 20.15 91.41 24.26Z">
									</path>
									<path class="address-modal-icon-shp10"
										d="M109.52 56.4C108.33 56.25 107.29 56.1 106.4 56.25C104.76 56.4 103.28 57.29 102.39 58.77C97.92 65.3 89.3 80.29 89.3 80.29L102.53 81.03C104.76 77.32 109.07 74.5 110.56 71.98C119.03 56.99 112.94 56.99 109.52 56.4Z">
									</path>
									<path class="address-modal-icon-shp11"
										d="M103.42 70.35C102.83 70.05 102.38 69.61 101.79 69.16C100.9 68.42 100.01 67.83 99.11 67.53C98.52 67.38 97.63 67.53 97.03 67.68C97.03 67.38 97.48 67.09 97.33 66.79C97.92 66.64 98.37 66.49 99.26 66.79C100.45 67.09 101.34 67.83 102.38 68.57C102.83 69.02 103.42 69.31 103.87 69.76C106.4 71.24 108.78 70.8 111.75 70.05C111.75 70.5 111.45 70.5 111.16 71.09C108.18 71.54 106.25 72.13 103.42 70.35Z">
									</path>
									<path class="address-modal-icon-shp11"
										d="M113.39 66.34C112.94 66.34 112.2 66.49 112.05 66.49C110.71 66.79 106.25 67.09 103.57 65.31C102.53 64.56 101.19 64.27 100.01 63.97C99.86 63.67 99.86 63.38 99.71 62.93C101.19 63.08 102.68 63.67 104.02 64.41C108.33 66.64 110.71 65.75 111.9 65.45C112.34 65.31 113.39 65.31 113.68 65.16C113.68 65.6 113.53 66.05 113.39 66.34Z">
									</path>
									<path class="address-modal-icon-shp11"
										d="M107.59 62.04C108.78 62.49 112.94 62.78 114.28 62.93C114.28 62.63 114.43 62.34 114.43 62.04C113.09 61.89 109.22 61.45 108.18 61L107.59 62.04Z">
									</path>
									<path class="address-modal-icon-shp2"
										d="M95.4 69.91C92.28 74.8 92.13 74.95 89.01 79.85C88.71 80.44 89.01 81.18 89.6 81.18C93.32 81.93 98.37 84.15 99.86 84.89C100.16 85.04 100.6 84.89 100.9 84.6C107.74 79.11 110.56 76.73 110.56 71.98C103.28 72.43 96.74 71.39 95.4 69.91Z">
									</path>
									<path class="address-modal-icon-shp11"
										d="M114.43 58.48L114.43 58.33C113.98 58.33 113.53 58.18 113.09 58.03C112.49 57.89 111.9 57.59 111.3 57.29C110.26 56.85 109.07 56.4 107.89 56.4C107.14 56.4 104.02 57.29 103.42 57.59C102.68 58.03 102.53 58.33 102.68 58.63C103.28 58.33 107.29 57.44 107.89 57.29C108.93 57.29 109.82 57.74 110.86 58.18C111.45 58.48 112.05 58.78 112.79 58.92C113.39 59.07 113.98 59.22 114.43 59.22C114.58 59.07 114.43 58.78 114.43 58.48Z">
									</path>
									<g id="arm-1">
										<path class="address-modal-icon-shp5"
											d="M87.82 47.5C87.82 47.5 87.82 47.35 87.82 47.5C87.97 47.5 87.97 47.5 87.82 47.5Z">
										</path>
										<path class="address-modal-icon-shp5"
											d="M107.59 59.07C105.95 57.29 103.28 58.77 97.03 55.06C93.47 52.99 91.98 50.17 90.79 48.24C90.19 47.2 90.34 45.86 89.6 44.97C89.45 44.68 89.15 44.68 88.86 44.68C88.11 44.83 87.97 45.27 87.97 45.72C87.37 45.12 86.78 44.68 85.88 45.27C85.44 45.57 85.29 45.86 85.29 46.16C83.95 45.57 83.95 46.9 83.8 46.9C83.36 46.75 82.91 46.9 82.46 47.35C81.42 48.39 82.32 50.17 82.91 51.21C85.74 56.1 90.64 64.27 103.13 65.01C105.8 65.01 110.71 62.63 107.59 59.07Z">
										</path>
										<path class="address-modal-icon-shp5"
											d="M90.94 48.39C91.38 48.09 91.83 47.94 92.28 47.79C91.98 47.5 91.68 47.05 91.38 46.75C91.09 47.2 90.79 47.5 90.34 47.79C89.45 48.09 89.9 49.57 90.79 49.28C91.68 48.98 92.28 48.39 92.72 47.64C93.02 47.05 92.42 46.46 91.83 46.61C91.09 46.75 90.34 47.05 89.75 47.64C89.15 47.94 90.19 48.98 90.94 48.39Z">
										</path>
									</g>
									<path class="address-modal-icon-shp12"
										d="M112.51 45L111.81 46.06C115.07 46.06 115.32 48.17 115.68 49.1L116.73 49.22C116.73 45.85 113.92 45.12 112.51 45Z">
									</path>
									<path fill-rule="evenodd" class="address-modal-icon-shp13"
										d="M115.68 49.1C115.32 48.17 115.07 46.06 111.81 46.06L112.51 45C113.92 45.12 116.73 45.85 116.73 49.22L115.68 49.1ZM115.68 49.1C115.68 49.14 115.68 49.18 115.67 49.22">
									</path>
									<path class="address-modal-icon-shp4"
										d="M114.79 52.38C113.92 51.94 113.63 50.75 114.15 49.7C114.67 48.66 115.8 48.17 116.67 48.6C117.54 49.03 117.82 50.23 117.3 51.27C116.78 52.32 115.66 52.81 114.79 52.38Z">
									</path>
								</g>
								<g id="ballon-2">
									<path class="address-modal-icon-shp14"
										d="M146.17 26.85C146.56 28.28 148.52 31.18 149.78 33.06C150.32 33.87 151.75 33.91 152.36 33.17C154.21 30.89 155.94 28.13 156.36 25.67C158.21 15.26 142.29 16.03 146.17 26.85Z">
									</path>
									<path class="address-modal-icon-shp10"
										d="M149.95 21.32C150.57 21.84 151.33 21.98 151.64 21.64C151.95 21.3 151.69 20.61 151.07 20.09C150.44 19.57 149.38 19.76 149.38 19.76C149.38 19.76 149.33 20.8 149.95 21.32Z">
									</path>
									<path class="address-modal-icon-shp10"
										d="M151.59 22.34C151.79 22.25 152 22.2 152.22 22.21C153.4 22.21 154.36 23.23 154.36 24.49C154.36 25.32 153.94 26.19 153.33 26.68C153 26.94 152.63 27.1 152.22 27.1C151.95 27.1 151.64 26.81 151.21 26.82C150.92 26.82 150.91 27.08 150.6 27.1C150.08 27.1 149.61 26.84 149.24 26.45C148.75 25.91 148.47 25.21 148.46 24.49C148.46 23.23 149.42 22.21 150.6 22.21C150.81 22.21 151.02 22.26 151.21 22.35C151.27 22.38 151.33 22.39 151.4 22.39C151.47 22.39 151.53 22.37 151.59 22.34Z">
									</path>
								</g>
								<g id="ballon-1">
									<path class="address-modal-icon-shp14"
										d="M25.22 36.69C25.61 38.12 27.57 41.03 28.84 42.91C29.38 43.71 30.8 43.75 31.41 43.02C33.26 40.74 34.99 37.98 35.41 35.51C37.26 25.11 21.34 25.88 25.22 36.69Z">
									</path>
									<path fill-rule="evenodd" class="address-modal-icon-shp10"
										d="M33.68 32.49L30.07 38.99L26.46 32.49C27.5 31.82 28.74 31.43 30.07 31.43C31.4 31.43 32.64 31.82 33.68 32.49ZM29.52 34.44C29.75 34.2 29.75 33.83 29.52 33.59C29.28 33.36 28.91 33.36 28.67 33.59C28.44 33.83 28.44 34.2 28.67 34.44C28.91 34.67 29.28 34.67 29.52 34.44ZM31.06 32.8C30.83 33.03 30.83 33.41 31.06 33.64C31.29 33.87 31.67 33.87 31.9 33.64C32.14 33.41 32.14 33.03 31.9 32.8C31.67 32.56 31.29 32.56 31.06 32.8ZM30.71 36.82C30.94 36.59 30.94 36.21 30.71 35.98C30.48 35.75 30.1 35.75 29.87 35.98C29.63 36.21 29.63 36.59 29.87 36.82C30.1 37.06 30.48 37.06 30.71 36.82Z">
									</path>
								</g>
							</svg>
						</div>
						<div class="w-full">
							<p class="text-center text-lg font-ifood mb-3">Onde você quer receber o seu pedido?</p>
							<!-- <label class="search-input-container-index">
							<div class="w-6 mr-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ea1d2c"
									class="bi bi-search" viewBox="0 0 16 16">
									<path
										d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
								</svg>
							</div>

							<input class="w-full bg-none outline-none input-search-index" type="text" name="buscar"
								id="buscarEndFinalizar" placeholder="Buscar endereço">
						</label> -->
						</div>
						<div class="addresses-list mt-5">
							<div class="address-item address-item-active" data-active='true'>
								<div id="house-icon">
									<img class="w-7" src="arquivos/images/icons/house.svg">
								</div>
								<div id="config-house" class="mt-2 hidden">
									<button><img class="w-7" src="arquivos/images/icons/trash.svg"></button>
								</div>
								<div class="w-full flex items-center justify-between">
									<div>
										<p class="font-ifood">R. Moisés da silva, 242</p>
										<p class="font-ifood text-xs text-neutral-600">Planalto, Cidade - RR</p>
									</div>
									<div class="mt-2">
										<button onClick="addressOptions(this)"><img class="w-5"
												src="arquivos/images/icons/dots.svg"></button>
									</div>
								</div>
							</div>
							<div class="address-item" data-active='false'>
								<div id="house-icon">
									<img class="w-7" src="arquivos/images/icons/house.svg">
								</div>
								<div id="config-house" class="mt-2 hidden">
									<button><img class="w-7" src="arquivos/images/icons/trash.svg"></button>
								</div>
								<div class="w-full flex items-center justify-between">
									<div>
										<p class="font-ifood">R. Joao da silva, 42</p>
										<p class="font-ifood text-xs text-neutral-600">Castelo Branco, Cidade - RR
										</p>
									</div>
									<div class="mt-2">
										<button onClick="addressOptions(this)"><img class="w-5"
												src="arquivos/images/icons/dots.svg"></button>
									</div>
								</div>
							</div>
							<div class="address-item" data-active='false'>
								<div id="house-icon">
									<img class="w-7" src="arquivos/images/icons/house.svg">
								</div>
								<div id="config-house" class="mt-2 hidden">
									<button><img class="w-7" src="arquivos/images/icons/trash.svg"></button>
								</div>
								<div class="w-full flex items-center justify-between">
									<div>
										<p class="font-ifood">R. Joao da silva, 42</p>
										<p class="font-ifood text-xs text-neutral-600">Castelo Branco, Cidade - RR
										</p>
									</div>
									<div class="mt-2">
										<button onClick="addressOptions(this)"><img class="w-5"
												src="arquivos/images/icons/dots.svg"></button>
									</div>
								</div>
							</div>
							<div class="address-item" data-active='false'>
								<div id="house-icon">
									<img class="w-7" src="arquivos/images/icons/house.svg">
								</div>
								<div id="config-house" class="mt-2 hidden">
									<button><img class="w-7" src="arquivos/images/icons/trash.svg"></button>
								</div>
								<div class="w-full flex items-center justify-between">
									<div>
										<p class="font-ifood">R. Joao da silva, 42</p>
										<p class="font-ifood text-xs text-neutral-600">Castelo Branco, Cidade - RR
										</p>
									</div>
									<div class="mt-2">
										<button onClick="addressOptions(this)"><img class="w-5"
												src="arquivos/images/icons/dots.svg"></button>
									</div>
								</div>
							</div>
							<div class="address-item" data-active='false'>
								<div id="house-icon">
									<img class="w-7" src="arquivos/images/icons/house.svg">
								</div>
								<div id="config-house" class="mt-2 hidden">
									<button><img class="w-7" src="arquivos/images/icons/trash.svg"></button>
								</div>
								<div class="w-full flex items-center justify-between">
									<div>
										<p class="font-ifood">R. Joao da silva, 42</p>
										<p class="font-ifood text-xs text-neutral-600">Castelo Branco, Cidade - RR
										</p>
									</div>
									<div class="mt-2">
										<button onClick="addressOptions(this)"><img class="w-5"
												src="arquivos/images/icons/dots.svg"></button>
									</div>
								</div>
							</div>
							<div class="address-item" data-active='false'>
								<div id="house-icon">
									<img class="w-7" src="arquivos/images/icons/house.svg">
								</div>
								<div id="config-house" class="mt-2 hidden">
									<button><img class="w-7" src="arquivos/images/icons/trash.svg"></button>
								</div>
								<div class="w-full flex items-center justify-between">
									<div>
										<p class="font-ifood">AV. Maria da silva, 25</p>
										<p class="font-ifood text-xs text-neutral-600">Morada dos Campos, Cidade -
											RR
										</p>
									</div>
									<div class="mt-2">
										<button onClick="addressOptions(this)"><img class="w-5"
												src="arquivos/images/icons/dots.svg"></button>
									</div>
								</div>
							</div>
							<div class="address-item" data-active='false'>
								<div id="house-icon">
									<img class="w-7" src="arquivos/images/icons/house.svg">
								</div>
								<div id="config-house" class="mt-2 hidden">
									<button><img class="w-7" src="arquivos/images/icons/trash.svg"></button>
								</div>
								<div class="w-full flex items-center justify-between">
									<div>
										<p class="font-ifood">R. Joao da silva, 42</p>
										<p class="font-ifood text-xs text-neutral-600">R. Jucá Miranda, 50</p>
									</div>
									<div class="mt-2">
										<button onClick="addressOptions(this)"><img class="w-5"
												src="arquivos/images/icons/dots.svg"></button>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>


		<?php 
			include 'includes/footer.php'
		?>

	</div>



	

	<script src="arquivos/js/utils.js"></script>
	<script src="arquivos/js/main.js"></script>
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"
		integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<script src="arquivos/js/finalizar-pedido.js"></script>
</body>

</html>