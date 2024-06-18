@extends('main')
@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form action="{{ route('login.post') }}" method="POST" class="login100-form validate-form @yield('body-class', 'light-mode')"
                    style="
                border: none;
            ">
                    @csrf
                    @method('POST')
                    <div class="criar-conta-mobile row" style="align-items: center; margin-top: 10px">
                        <div class="col">
                            <button class="text-white">
                                <object type="image/svg+xml" id="btn_button_mobile" data="images/icons/icon-button-dark.svg"
                                    style="width: 48px;"></object>
                            </button>
                        </div>
                        <div class="col">
                            <h5 class="criar-conta">
                                Criar conta</h5>
                        </div>
                    </div>
                    <div class="row mb-5 logo">
                        <div class="col-6">
                            <img class="logo_toolzz" src="/images/Logo.svg">
                        </div>
                        <div class="create-account col-6">
                            <p style="color: #0761E2; text-align: right">Criar conta</p>
                        </div>
                    </div>
                    <p class="boas-vindas">
                        Boas-vindas!
                    </p>
                    <p class="opcoes-abaixo">
                        Entre utilizando uma das opções abaixo</p>
                    <div class="row">
                        <div class="col-3 mb-md-4 mt-md-4">
                            <button class="custom-button-register w-100">
                                <img id="tz_icon" src="/images/icons/tz.svg" alt=""></button>
                        </div>
                        <div class="col-3 mb-md-4 mt-md-4">
                            <button class="custom-button-register w-100">
                                <img id="facebook_icon" src="/images/icons/facebook.svg" alt=""></button>
                        </div>
                        <div class="col-3 mb-md-4 mt-md-4">
                            <button class="custom-button-register w-100">
                                <img id="apple_icon" src="/images/icons/apple.svg" alt=""></button>
                        </div>
                        <div class="col-3 mb-md-4 mt-md-4">
                            <button class="custom-button-register w-100">
                                <img id="twitter_icon" src="/images/icons/twitter.svg" alt=""></button>
                        </div>
                    </div>
                    <div class="line-container mb-md-4 mt-md-4">
                        <div class="line"></div>
                        <div class="ou">ou</div>
                        <div class="line"></div>
                    </div>

                    <label class="usuario" for="email">Usuário</label>
                    <div class="wrap-input100 validate-input mb-md-4" data-validate="Valid email is required: ex@abc.xyz">
                        <div class="label">
                            <span class="icon">
                                <object type="image/svg+xml" data="images/icons/user.svg" style="width: 14px;"></object>
                            </span>
                            <input type="text" name="user" value="user.toolzz.teste" required class="input"
                                placeholder="Digite o usuário..." autocomplete="off" />
                        </div>
                    </div>
                    <label class="senha">Senha</label>
                    <div class="wrap-input100 validate-input mb-md-4" data-validate="Valid email is required: ex@abc.xyz">
                        <label class="label">
                            <span class="icon">
                                <object type="image/svg+xml" data="images/icons/lock.svg" style="width: 14px;"></object>
                            </span>
                            <input type="text" required value="senha1234" name="password" class="input mt-0"
                                placeholder="Digite a senha..." autocomplete="off" />
                        </label>
                    </div>
                    <div class="flex-sb-m w-full p-t-3 p-b-32 mb-md-2">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1"
                                style="border: 2px solid #6A6A6A; width: 20px; height: 20px;">
                            <label class="form-check-label text-center" for="exampleCheck1">Manter
                                conectado</label>
                        </div>
                    </div>

                    <div class="mb-md-4 recaptcha">
                        <div id="recaptcha-demo" class="g-recaptcha" data-sitekey="6Le-wvkSAAAAAPBMRTvw0Q4Muexq9bi0DJwx_mJ-"
                            data-callback="onSuccess" data-action="action">
                            <div style="width: 304px; height: 78px;">
                                <div><iframe title="reCAPTCHA" width="304" height="78" role="presentation"
                                        name="a-2gdnwnbgpezd" frameborder="0" scrolling="no"
                                        sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                                        src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Le-wvkSAAAAAPBMRTvw0Q4Muexq9bi0DJwx_mJ-&amp;co=aHR0cHM6Ly93d3cuZ29vZ2xlLmNvbTo0NDM.&amp;hl=pt-BR&amp;v=TqxSU0dsOd2Q9IbI7CpFnJLD&amp;size=normal&amp;sa=action&amp;cb=tenidx19mp0k"></iframe>
                                </div>
                                <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response"
                                    style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                            </div><iframe style="display: none;"></iframe>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button id="btn-text" type="submit" class="btn-send login100-form-btn text-center">
                            <object type="image/svg+xml" data="images/icons/left-arrow.svg"
                                style="width: 18px;"></object>
                            <span class="ml-2"> Entrar</span>
                        </button>
                        <div id="spinner" class="btn color-white login100-form-btn btn-send">
                            <span style="font-size: 15px;">
                                <object type="image/svg+xml" data="images/icons/loader.svg"
                                    style="width: 22px;"></object>
                            </span>
                        </div>
                    </div>

                    <p class="text-center mt-md-5 esqueceu-senha">Esqueceu sua senha? <a href="#">Recupere sua
                            senha</a></p>
                </form>
                <div class="login100-more secao-destaque">
                    <div class="container" style="top: 6%; position: absolute;">
                        <div class="row">
                            <div class="col-12 upperline d-flex justify-content-between align-items-start">
                                <div class="col-6">
                                    <button class="text-white">
                                        <object type="image/svg+xml" data="images/icons/icon-button-light.svg"
                                            style="width: 48px;"></object>
                                    </button>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <button id="dark-mode-button" class="text-white">
                                        <img id="img-dark-mode" src="images/icons/icon-button-dark-mode.svg"
                                            style="width: 48px;"></img>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="container about" style="position: absolute; bottom: 25px;">
                        <div class="row">
                            <div class="col-12 upperline">
                                <div class="titulo-texto d-flex flex-column align-items-start">
                                    <span class="titulo-secao text-white">Cursos</span>
                                    <h1 class="titulo-principal text-white mt-3">Plataforma de cursos completa</h1>
                                    <h4 class="texto-descricao" style=" margin-bottom: 60px">
                                        Lorem ipsum nisl etiam himenaeos ligula augue vehicula gravida tincidunt, etiam
                                        magna sapien gravida sodales sed vel pulvinar suspendisse, morbi mi proin urna
                                        ornare posuere donec aptent. orci vivamus primis fusce lacinia libero nostra
                                        aliquam vestibulum
                                    </h4>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="98%" height="31"
                                        viewBox="0 0 1116 31" fill="none">
                                        <rect y="13.9999" width="96" height="4" fill="white"></rect>
                                        <rect x="112" y="13.9999" width="96" height="4" fill="#222222">
                                        </rect>
                                        <rect x="224" y="13.9999" width="96" height="4" fill="#222222">
                                        </rect>
                                        <path
                                            d="M1048 28.9999C1047.44 28.9999 1046.94 28.8124 1046.56 28.4374L1034.56 16.4374C1033.75 15.6874 1033.75 14.3749 1034.56 13.6249L1046.56 1.62494C1047.31 0.812439 1048.62 0.812439 1049.38 1.62494C1050.19 2.37494 1050.19 3.68744 1049.38 4.43744L1038.81 14.9999L1049.38 25.6249C1050.19 26.3749 1050.19 27.6874 1049.38 28.4374C1049 28.8124 1048.5 28.9999 1048 28.9999Z"
                                            fill="#3A3A3A"></path>
                                        <path
                                            d="M1096 28.9999C1095.44 28.9999 1094.94 28.8124 1094.56 28.4374C1093.75 27.6874 1093.75 26.3749 1094.56 25.6249L1105.12 14.9999L1094.56 4.43744C1093.75 3.68744 1093.75 2.37494 1094.56 1.62494C1095.31 0.812439 1096.62 0.812439 1097.38 1.62494L1109.38 13.6249C1110.19 14.3749 1110.19 15.6874 1109.38 16.4374L1097.38 28.4374C1097 28.8124 1096.5 28.9999 1096 28.9999Z"
                                            fill="white"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
