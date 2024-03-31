<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="arquivos/images/favicon.png" />

	<title>Só Burgers Delivery 1.0</title>

	<!-- GERAL STYLES -->
	<link rel="stylesheet" href="arquivos/css/styles.css">
	<link rel="stylesheet" href="arquivos/css/ifood.css">
	<link rel="stylesheet" href="arquivos/css/modal.css">

	<!-- ANIMATE.STYLE -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

</head>

<body>

	<div class="w-full max-w-[602px] mx-auto flex flex-col">


		<?php 
			include 'includes/header.php'
		?>


		<section class="w-full h-full mt-10 mb-5">

			<div class="hero-container hero-container-image">
				<div class="search-shop-index py-2">
					<div class="w-full h-full p-3 flex flex-col justify-center items-center py-10">

						<img class="w-72" src="arquivos/images/entregador.png">

						<div class="bg-neutral-100/40 rounded-3xl">
							<h1 class="search-title-index">Onde você quer receber seu pedido?</h1>
						</div>

						<div class="w-full mt-5">
							<label class="search-input-container-index">
								<div class="w-6 mr-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ea1d2c"
										class="bi bi-search" viewBox="0 0 16 16">
										<path
											d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
									</svg>
								</div>

								<input autofocus class="w-full bg-none outline-none input-search-index" type="text"
									name="local" placeholder="Seu endereço e número">
							</label>

						</div>
						<div class="w-full mt-7 mb-20">
							<button class="use-local-btn-index ">
								<img class="mr-2" src="arquivos/images/icons/crosshair.svg"
									style="height:1.56em !important;">
								<span style="padding-top: 0.12em !important;">Usar minha localização atual</span>
							</button>
						</div>

						<div class="mt-5">
							<div class="address-login">
								<span class="address-login__title">Já tem um endereço salvo?</span>
								<span class="address-login__description" style="margin-top:0.10em;">Entre na sua conta
									para selecionar seu
									endereço.</span>

								<div class="w-full text-center">
									<button type="button" id="btnEntrarBottom" role="button"
										class="w-44 bg-[#ea1d2c] py-1 text-white font-ifood rounded" label="Entrar ou cadastrar"
										style="margin-top:1.12em;">
										<span class="btn__label">Entrar ou cadastrar</span>
									</button>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>

		</section>

		<?php 
			include 'includes/footer.php'
		?>
	</div>



	<div id="modal-endereco-container" class="modal-container  hidden">

		<div id="modal-endereco" class="modal-endereco" style="border-radius: 0 !important; margin: 0 auto !important;">

			<div class="w-full flex justify-between items-center ">

				<div class="flex gap-x-2 items-start  justify-start">
					<svg onClick="fecharModalEndereco()" width="20" height="20" viewBox="0 0 9 18" fill="#eb2d3b"
						xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd"
							d="M8.72574 0.18573C9.05505 0.462998 9.09319 0.95 8.81092 1.27348L2.06872 9L8.81092 16.7265C9.09319 17.05 9.05505 17.537 8.72574 17.8143C8.39642 18.0915 7.90063 18.0541 7.61836 17.7306L-9.53674e-07 9L7.61836 0.269403C7.90063 -0.0540764 8.39642 -0.091538 8.72574 0.18573Z">
						</path>
					</svg>
				</div>

				<div class="w-full  justify-start">
					<p class="pl-3  text-base  text-neutral-700 rounded-full">Av. Gilka Machado, 50</p>
					<small class="pl-3 text-xs " style="color:#b1b1b1;">Recreio dos Bandeirantes, Rio de Janeiro -
						RJ</small>
				</div>
			</div>






			<div class="w-full h-full map-div">
				<div class="location-map">


					<iframe id="map" src="map.html" frameborder="0" tabindex="-1"
						style="position: relative;width: 100%;height: 100%; border: none !important;"></iframe>

				</div>


				<div class="w-full h-full finalizarcadend mt-10" style="display: none;">

					<div class="w-full mt-5">
						<input class="w-full bg-none outline-none input-complemento " type="text" name="local"
							placeholder="Complemento (opcional)">
						<small style="font-size: 0.48rem;
						font-weight: lighter;">Apartamento/Bloco/Casa</small>
					</div>

					<div class="w-full mt-10">
						<button id="btnFinalizar" onclick="finalizarCadastro()"
							class="btn btn--default btn--size-m btn-finalizar-end w-full mt-5" label="Salvar Endereço">
							<span class="btn__label">Salvar Endereço</span>
						</button>
					</div>

				</div>
			</div>

		</div>
	</div>

	<script src="arquivos/js/utils.js"></script>
	<script src="arquivos/js/main.js"></script>

	<script src="https://code.jquery.com/jquery-3.7.1.min.js"
		integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<script src="arquivos/js/modals-ifood.js"></script>
	<script src="arquivos/js/jqueryUtils.js"></script>
	<script src="arquivos/js/index.js"></script>
</body>

</html>