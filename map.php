<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="arquivos/css/map.css">

</head>

<body>
    <div class="confirm" id="confirm">
        <button id="btnConfLocal" onclick="finalizar()" class="btn btn--default btn--size-m address-maps__submit"
            tabindex="0" label="Confirmar localização">
            <span class="btn__label">Confirmar localização</span>
        </button>
    </div>

    <div class="bgimg-1">

        <div class="local" id="local">
            <div class="address-maps-message address-maps-message--active">
                <span class="address-maps-message__title">Você está aqui?</span>
            </div>
        </div>


    </div>


    <script>
        function finalizar() {
            document.getElementById("local").style.display = 'none';
            document.getElementById("confirm").style.display = 'none';
            window.parent.cadEnd();
        }
    </script>
</body>

</html>