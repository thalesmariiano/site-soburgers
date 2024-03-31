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
				Sua sacola</h1>

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
		</section>

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
						<img class="w-5" src="arquivos/images/icons/close.svg">
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

		<div id="sacola-modal" class="w-full h-full fixed top-0 left-0 z-[9999]">
			<div class="sacola-modal">
				<div class="sacola-modal-container">
					<p class="sacola-modal-title">Confirme a entrega</p>

					<div class="entrega-date">
						<img class="w-10" src="arquivos/images/icons/calendar.svg">
						<div>
							<p class="font-ifood">Entrega hoje</p>
							<p class="font-ifood text-neutral-500 text-sm">Hoje, 45 - 55 min</p>
						</div>
					</div>

					<hr>

					<p class="sacola-modal-text">Entrega em:</p>

					<div class="w-full">
						<div class="sacola-address">
							<div class="sacola-address-container">
								<div class="local-banner">
									<img class="w-6" src="arquivos/images/icons/local.svg">
								</div>
								<div class="text-left">
									<p class="font-ifood font-semibold">Av. Jair Jairo, 666</p>
									<p class="font-ifood text-xs text-neutral-600">São Paulo/SP</p>
								</div>
							</div>
						</div>

						<div class="sacola-pix">
							<div class="sacola-pix-container">
								<img class="w-10" src="arquivos/images/icons/pix.png">
								<div>
									<p class="font-ifood font-semibold">Pagamento pelo site</p>
									<p class="font-ifood text-neutral-500 text-sm">Pix</p>
								</div>
							</div>
							<p class="font-ifood text-neutral-500">R$ 73,30</p>
						</div>
					</div>

					<div class="w-full space-y-2 mt-7">
						<a href="finalizar-pedido.php" class="make-pedido-button">Confirmar e fazer pedido</a>
						<button class="alterar-dados">Alterar dados</button>
					</div>
				</div>
			</div>
		</div>

		<nav class="w-full max-w-[602px] mx-auto fixed bottom-0 shadow-menu">
			<a href="finalizar-pedido.php"
				class="w-full py-3 flex justify-center items-center bg-[#ea1d2c] hover:bg-red-600 cursor-pointer">
				<p class="font-ifood text-lg text-md font-semibold text-white">Fazer Pedido</p>
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

		<?php
			include 'includes/footer.php'
		?>
	</div>




	<script src="https://code.jquery.com/jquery-3.7.1.min.js"
		integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<script src="arquivos/js/utils.js"></script>
	<script src="arquivos/js/main.js"></script>

	<script>
		$(".alterar-dados").click(function () {
			$("#sacola-modal").hide();
		});
	</script>
</body>

</html>