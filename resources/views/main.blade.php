<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Toolzz</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <meta name="robots" content="noindex, follow">
</head>


<body>
    @yield('content')


    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script nonce="">
        var onSuccess = function(response) {
            var errorDivs = document.getElementsByClassName("recaptcha-error");
            if (errorDivs.length) {
                errorDivs[0].className = "";
            }
            var errorMsgs = document.getElementsByClassName("recaptcha-error-message");
            if (errorMsgs.length) {
                errorMsgs[0].parentNode.removeChild(errorMsgs[0]);
            }
        };
    </script>

    <script>
        $('#spinner').hide();
        $(document).ready(function() {
            $('.btn-send').click(function() {
                $('#spinner').prop('disabled', true).show();
                $('#btn-text').hide();
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const body = document.querySelector('form');
            const darkModeButton = document.querySelector('#dark-mode-button');
            const logo = document.querySelector('.logo_toolzz');
            const img_darkmode = document.querySelector('#img-dark-mode');
            const tz_icon = document.querySelector('#tz_icon');
            const facebook_icon = document.querySelector('#facebook_icon');
            const apple_icon = document.querySelector('#apple_icon');
            const twitter_icon = document.querySelector('#twitter_icon');
            const btn_button_mobile = document.querySelector('#btn_button_mobile');

            if (darkModeButton) {
                darkModeButton.addEventListener('click', function() {
                    const currentMode = body.classList.contains('dark-mode') ? 'light-mode' : 'dark-mode';
                    body.classList.remove('dark-mode', 'light-mode');
                    body.classList.add(currentMode);

                    updateLogo(currentMode);
                    localStorage.setItem('mode', currentMode);
                });

                const savedMode = localStorage.getItem('mode');
                if (savedMode) {
                    body.classList.remove('dark-mode', 'light-mode');
                    body.classList.add(savedMode);
                    updateLogo(savedMode);
                }
            }

            function updateLogo(mode) {
                if (mode === 'dark-mode') {
                    logo.src = '/images/icons/toolzz-darkmode.svg';
                    img_darkmode.src = '/images/icons/active-button-dark-mode.svg';
                    tz_icon.src = '/images/icons/tz-dark-mode.svg';
                    facebook_icon.src = '/images/icons/facebook-dark-mode.svg';
                    apple_icon.src = '/images/icons/apple-dark-mode.svg';
                    twitter_icon.src = '/images/icons/twitter-dark-mode.svg';
                    btn_button_mobile.data = '/images/icons/icon-button-light.svg';
                } else {
                    logo.src = '/images/Logo.svg';
                    img_darkmode.src = 'images/icons/icon-button-dark-mode.svg';

                    tz_icon.src = '/images/icons/tz.svg';
                    facebook_icon.src = '/images/icons/facebook.svg';
                    apple_icon.src = '/images/icons/apple.svg';
                    twitter_icon.src = '/images/icons/twitter.svg';
                    btn_button_mobile.data = '/images/icons/icon-button-dark.svg';
                }
            }
        });
    </script>


</body>

</html>
