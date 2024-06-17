@extends('main')
@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form action="{{ route('login.post') }}" method="POST" class="login100-form validate-form">
                    @csrf
                    @method('POST')
                    <div class="criar-conta-mobile row" style="align-items: center;">
                        <div class="col">
                            <button class="text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"
                                    fill="none">
                                    <rect x="0.5" y="0.5" width="47" height="47" rx="23.5" stroke="black" />
                                    <path
                                        d="M25.4375 30.5312L19.7188 24.5625C19.5625 24.375 19.5 24.1875 19.5 24C19.5 23.8438 19.5625 23.6562 19.6875 23.5L25.4062 17.5312C25.6875 17.2188 26.1875 17.2188 26.4688 17.5C26.7812 17.7812 26.7812 18.25 26.5 18.5625L21.2812 24L26.5312 29.5C26.8125 29.7812 26.8125 30.2812 26.5 30.5625C26.2188 30.8438 25.7188 30.8438 25.4375 30.5312Z"
                                        fill="black" />
                                </svg>
                            </button>
                        </div>
                        <div class="col">
                            <h5 class="criar-conta">
                                Criar conta</h5>
                        </div>
                    </div>
                    <div class="row mb-5 logo">
                        <div class="col-6">
                            <img src="/images/Logo.svg">
                        </div>
                        <div class="create-account col-6">
                            <p style="color: #0761E2; text-align: right">Criar conta</p>
                        </div>
                    </div>
                    <p class="boas-vindas">
                        Boas-vindas!
                    </p>
                    <p class="opcoes-abaixo mb-sm-5">
                        Entre utilizando uma das opções abaixo</p>
                    <div class="row">
                        <div class="col-3 mb-md-4 mt-md-4">
                            <button class="custom-button w-100">
                                <img src="/images/icons/tz.svg" alt=""></button>
                        </div>
                        <div class="col-3 mb-md-4 mt-md-4">
                            <button class="custom-button w-100">
                                <img src="/images/icons/facebook.svg" alt=""></button>
                        </div>
                        <div class="col-3 mb-md-4 mt-md-4">
                            <button class="custom-button w-100">
                                <img src="/images/icons/apple.svg" alt=""></button>
                        </div>
                        <div class="col-3 mb-md-4 mt-md-4">
                            <button class="custom-button w-100">
                                <img src="/images/icons/twitter.svg" alt=""></button>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" viewBox="0 0 14 16"
                                    fill="none">
                                    <path
                                        d="M8.5 9.5C11.5312 9.5 14 11.9688 14 15C14 15.5625 13.5312 16 13 16H1C0.4375 16 0 15.5625 0 15C0 11.9688 2.4375 9.5 5.5 9.5H8.5ZM1.5 14.5H12.4688C12.2188 12.5312 10.5312 11 8.5 11H5.5C3.4375 11 1.75 12.5312 1.5 14.5ZM7 8C4.78125 8 3 6.21875 3 4C3 1.8125 4.78125 0 7 0C9.1875 0 11 1.8125 11 4C11 6.21875 9.1875 8 7 8ZM7 1.5C5.59375 1.5 4.5 2.625 4.5 4C4.5 5.40625 5.59375 6.5 7 6.5C8.375 6.5 9.5 5.40625 9.5 4C9.5 2.625 8.375 1.5 7 1.5Z"
                                        fill="#585858" />
                                </svg>
                            </span>
                            <input type="text" name="user" required class="input" placeholder="Digite o usuário..."
                                autocomplete="off" />
                        </div>
                    </div>
                    <label class="senha">Senha</label>
                    <div class="wrap-input100 validate-input mb-md-4" data-validate="Valid email is required: ex@abc.xyz">
                        <label class="label">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" viewBox="0 0 14 16"
                                    fill="none">
                                    <path
                                        d="M3 6V4C3 1.8125 4.78125 0 7 0C9.1875 0 11 1.8125 11 4V6H12C13.0938 6 14 6.90625 14 8V14C14 15.125 13.0938 16 12 16H2C0.875 16 0 15.125 0 14V8C0 6.90625 0.875 6 2 6H3ZM4.5 6H9.5V4C9.5 2.625 8.375 1.5 7 1.5C5.59375 1.5 4.5 2.625 4.5 4V6ZM1.5 14C1.5 14.2812 1.71875 14.5 2 14.5H12C12.25 14.5 12.5 14.2812 12.5 14V8C12.5 7.75 12.25 7.5 12 7.5H2C1.71875 7.5 1.5 7.75 1.5 8V14Z"
                                        fill="#585858" />
                                </svg>
                            </span>
                            <input type="text" required name="password" class="input mt-0"
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
                        <button type="submit" class="login100-form-btn text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17"
                                fill="none" class="mr-2">
                                <path
                                    d="M18.5 3.75V12.75C18.5 14.6484 16.9883 16.125 15.125 16.125H12.5938C12.1016 16.125 11.75 15.7734 11.75 15.2812C11.75 14.8242 12.1016 14.4375 12.5938 14.4375H15.125C16.0391 14.4375 16.8125 13.6992 16.8125 12.75V3.75C16.8125 2.83594 16.0391 2.0625 15.125 2.0625H12.5938C12.1016 2.0625 11.75 1.71094 11.75 1.21875C11.75 0.761719 12.1016 0.375 12.5938 0.375H15.125C16.9883 0.375 18.5 1.88672 18.5 3.75ZM12.6289 7.6875L8.12891 2.90625C7.8125 2.55469 7.28516 2.55469 6.93359 2.87109C6.58203 3.1875 6.58203 3.71484 6.89844 4.06641L10.0625 7.40625H1.34375C0.851562 7.40625 0.5 7.79297 0.5 8.25C0.5 8.74219 0.851562 9.09375 1.34375 9.09375H10.0625L6.89844 12.4688C6.58203 12.8203 6.58203 13.3477 6.93359 13.6641C7.10938 13.8047 7.32031 13.875 7.53125 13.875C7.74219 13.875 7.95312 13.8047 8.12891 13.6289L12.6289 8.84766C12.9453 8.53125 12.9453 8.00391 12.6289 7.6875Z"
                                    fill="white" />
                            </svg>
                            <span> Entrar</span>
                        </button>
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
                                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.5" y="0.5" width="47" height="47" rx="23.5"
                                                stroke="white"></rect>
                                            <g clip-path="url(#clip0_2284_196)">
                                                <path
                                                    d="M25.2422 31.0977L18.8086 24.3828C18.6328 24.1719 18.5625 23.9609 18.5625 23.75C18.5625 23.5742 18.6328 23.3633 18.7734 23.1875L25.207 16.4727C25.5234 16.1211 26.0859 16.1211 26.4023 16.4375C26.7539 16.7539 26.7539 17.2812 26.4375 17.6328L20.5664 23.75L26.4727 29.9375C26.7891 30.2539 26.7891 30.8164 26.4375 31.1328C26.1211 31.4492 25.5586 31.4492 25.2422 31.0977Z"
                                                    fill="white"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_2284_196">
                                                    <rect x="10" y="3.5" width="28" height="41" rx="14"
                                                        fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <button class="text-white">
                                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.5" y="0.5" width="47" height="47" rx="23.5"
                                                stroke="white"></rect>
                                            <g clip-path="url(#clip0_2284_197)">
                                                <path
                                                    d="M29.8008 28.1094C30.082 28.1094 30.293 28.4609 30.082 28.7422C28.6055 30.5352 26.3906 31.625 23.9648 31.625C19.6406 31.625 16.125 28.1094 16.125 23.75C16.125 19.4258 19.6406 15.875 24 15.875C24.4219 15.875 25.0547 15.9453 25.4414 16.0156C25.793 16.0859 25.8633 16.543 25.5469 16.7188C23.6133 17.8086 22.4531 19.8477 22.4531 22.0625C22.4531 25.543 25.2305 28.25 28.5703 28.25C28.957 28.25 29.3438 28.2148 29.7305 28.1445C29.7656 28.1094 29.7656 28.1094 29.8008 28.1094ZM23.9648 29.9375C24.7383 29.9375 25.4766 29.832 26.1797 29.5508C23.0156 28.5312 20.7305 25.5781 20.7305 22.0625C20.7305 20.5859 21.1523 19.1445 21.8906 17.9492C19.5 18.793 17.8125 21.0781 17.8125 23.75C17.8125 27.1602 20.5547 29.9375 23.9648 29.9375Z"
                                                    fill="white"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_2284_197">
                                                    <rect x="7" y="3.5" width="34" height="41" rx="17"
                                                        fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
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
