<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="arquivos/images/favicon.png" />
    <title>Só Burgers Delivery</title>


    <!-- GERAL STYLES -->
    <link rel="stylesheet" href="arquivos/css/ifood.css">
    </link>
    <link rel="stylesheet" href="arquivos/css/modal.css">
    </link>
    <link rel="stylesheet" href="arquivos/css/baseok.css">
    </link>

    <style>

    </style>
</head>


<body class="scroll-smooth">
    <main class="main-layout">
        <div class="authentication cad--landing">


            <div class="authentication__wrapper">
                <div class="auth-header">
                    <button type="button" tabindex="0" class="backbtn" aria-hidden="false" aria-label="Voltar">
                        <span class="icon-marmita icon-marmita--arrow-left-thin"><svg width="38" height="38"
                                viewBox="0 0 9 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.72574 0.18573C9.05505 0.462998 9.09319 0.95 8.81092 1.27348L2.06872 9L8.81092 16.7265C9.09319 17.05 9.05505 17.537 8.72574 17.8143C8.39642 18.0915 7.90063 18.0541 7.61836 17.7306L-9.53674e-07 9L7.61836 0.269403C7.90063 -0.0540764 8.39642 -0.091538 8.72574 0.18573Z">
                                </path>
                            </svg>
                        </span>
                    </button>
                </div>
                <div class="authentication-steps"><span class="authentication-steps__title"></span>
                    <div class="steps-router">
                        <div
                            class="steps-router__step   steps-router__step-transition--fade steps-router__step-mount-transition--fade">
                            <div class="sign-in-onboard">
                                <h1 class="sign-in-onboard__title">Falta pouco para matar sua fome!</h1>
                                <h2 class="sign-in-onboard__subtitle">Como deseja continuar?</h2>

                                <button type="button" role="button"
                                    class="btn btn--default btn--facebook  btn--iconize btn-conta">
                                    <span class="icon-marmita icon-marmita--facebook btn__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" width="50"
                                            height="50">
                                            <path fill="#fff"
                                                d="M21.125 0H4.875C2.183594 0 0 2.183594 0 4.875v16.25C0 23.816406 2.183594 26 4.875 26h16.25C23.816406 26 26 23.816406 26 21.125V4.875C26 2.183594 23.816406 0 21.125 0zm-.660156 14.003906H18.03125v9.003907h-4.0625v-9.003907h-1.578125V10.96875h1.578125V9.035156C13.96875 6.503906 15.019531 5 18.007813 5h3.023437v3.023438h-1.757812c-1.160157 0-1.238282.429687-1.238282 1.242187l-.003906 1.703125h2.765625z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="btn__label">Continuar com Facebook</span>
                                </button>


                                <button type="button" role="button" class="btn  btn--google  btn--iconize btn-conta">
                                    <span class=" icon-marmita--google btn__icon">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                                            class="LgbsSe-Bz112c">
                                            <g>
                                                <path fill="#EA4335"
                                                    d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z">
                                                </path>
                                                <path fill="#4285F4"
                                                    d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z">
                                                </path>
                                                <path fill="#FBBC05"
                                                    d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z">
                                                </path>
                                                <path fill="#34A853"
                                                    d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z">
                                                </path>
                                                <path fill="none" d="M0 0h48v48H0z"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="btn__label">Fazer login com Google</span>
                                </button>

                            </div>

                            <div class="sign-in-onboard__btnContainer">
                                <button type="button" role="button" class="btn  btn--cpf  btn--iconize btn-conta-cpf">
                                    <span class="icon-marmita icon-marmita--cpf btn__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46"
                                            fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                            <path
                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                        </svg>
                                    </span>
                                    <span class="btn__label">Fazer login com CPF</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="arquivos/js/cadastrar.js"></script>
</body>

</html>