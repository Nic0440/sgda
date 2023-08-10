<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Jost&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Jost&family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= url("assets/web/css/css/style.css"); ?>">
    <link rel="stylesheet" href="<?= url("assets/web/css/css/home.css"); ?>">
    <link rel="stylesheet" href="<?= url("assets/web/css/css/faq.css"); ?>">
    <link rel="stylesheet" href="<?= url("assets/web/css/css/faq-menager.css"); ?>">
    <title><?= $this->e($title) ?></title>

</head>

<body class="theme default js-cover-screen" aria-hidden="true">
    <header id="header" class="header">
        <div class="header__item">
            <i class="fa-solid fa-phone fa-lg"></i>
            <a class="link--contact" href="tel:+55555555555">(+55) 55 5555-5555</a>

        </div>
        <button class="button--no-style js-toggle-theme"><i class="fa-solid fa-circle-half-stroke fa-lg js-toggle-theme"></i></button>

    </header>
    <nav id="navbar" class="navbar">
        <a href="<?= url('/'); ?>" class="navbar__item">
            <img src="<?= url("/assets/web/imgs/brand_dark.png") ?>" alt="Logotipo" class="brand" height="50" title="Página inicial">
        </a>
        <ul class="navbar-list navbar__item list--no-style">
            <li class="navbar-list__item"><a class="link--navbar" href="#">Horários</a></li>
            <li class="navbar-list__item"><a class="link--navbar" href="#">Calendário acadêmico</a></li>
            <li class="navbar-list__item"><a class="link--navbar" href="#">Sobre nós</a></li>
            <li class="navbar-list__item"><a class="link--navbar" href="<?= url("faq"); ?>">FAQs</a></li>
            <li class="navbar-list__item"><a class="link--navbar" href="#">Contato</a></li>
        </ul>
        <div class="navbar__item">
            <a tabindex="-1" href="#">
                <button name="login_page" type="button" class="button button--navbar button--bg-dark-purple">Entrar</button>
            </a>
        </div>

    </nav>
    <main id="main" class="main">

        <?php
        echo $this->section("content");
        ?>

    </main>

    <footer id="footer" class="footer">
        <div class="footer-container">
            <div class="footer-container__item footer-item">
                <div class="footer-item__item">
                    <a href="<?= url('/'); ?>" class="navbar__item">
                        <img src="<?= url("/assets/web/imgs/title.png") ?>" alt="Logotipo" class="brand" height="80" title="Página inicial">
                    </a>
                    <p>Sistema de Gerenciamento de Dados Acadêmicos</p>
                </div>
                <div class="footer-item__item">
                    <h2>Sobre nós</h2>
                    <p>Nós somos uma plataforma focada em agilizar e facilitar a gestão de dados de instituições de ensino.</p>
                </div>
                <div class="footer-item__item">
                    <h3>Nos contate</h3>
                    <div class="contact-item">
                        <i class="fa-solid fa-phone fa-lg"></i>
                        <a class="link--contact" href="tel:+55555555555">(+55) 55 5555-5555</a>
                    </div>
                    <div class="contact-item">
                        <i class="fa-solid fa-envelope fa-lg"></i>
                        <a class="link--contact" href="mailto:sgda_team@gmail.com">sgda_team@gmail.com</a>
                    </div>

                </div>
            </div>
            <div class="footer-container__item">
                <div class="footer-item__item">
                    <h2>Informações</h2>
                    <ul class="footer__list list--no-style">
                        <li><a class="link--footer" href="">Sobre nós</a></li>
                        <li><a class="link--footer" href="">Nos contate</a></li>
                        <li><a class="link--footer" href="<?= url("faq"); ?>">Perguntas frequentes</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-container__item">
                <div class="footer-item__item">
                    <h2>Links úteis</h2>
                    <ul class="footer__list list--no-style">
                        <li><a class="link--footer" href="">Serviços</a></li>
                        <li><a class="link--footer" href="">Suporte</a></li>
                        <li><a class="link--footer" href="">Termos e condições</a></li>
                        <li><a class="link--footer" href="">Política de privacidade</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-container__item">
                <form id="update-form" action="" class="js-form-update" novalidate>
                    <label for="email">Matenha-se atualizado</label>
                    <div class="input-container">
                        <input type="email" id="email" name="email" placeholder="Insira seu email">
                        <button name="submit_form" class="button button--footer button--bg-purple" type="buttton"><i class="fa-solid fa-paper-plane fa-xl"></i></button>
                    </div>
                    <div class="social-media__list">
                        <div class="social-media__item">
                            <a class="link--social" href="">
                                <i class="fa-brands fa-instagram fa-xl"></i></a>
                        </div>
                        <div class="social-media__item">
                            <a class="link--social" href="">
                                <i class="fa-brands fa-facebook-f fa-xl"></i></a>
                        </div>
                        <div class="social-media__item">
                            <a class="link--social" href="">
                                <i class="fa-brands fa-google-play fa-xl"></i></a>
                        </div>
                    </div>
                </form>
                <a class="link--to-top" href="#top"> <i class="fa-solid fa-chevron-up fa-lg"></i> </a>
            </div>
        </div>
        <div class="footer-container">
            <p>&copy; 2023 Sistema de Gerenciamento de Dados Acadêmicos - Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/82f9eb0794.js" crossorigin="anonymous" async></script>
    <script src="<?= url("/assets/web/js/functions.js"); ?>" async></script>
    <script asycn>
        const cover = document.querySelector(".js-cover-screen");
        const theme = document.querySelector(".theme");
        const toggleTheme = document.querySelector(".js-toggle-theme");

        toggleTheme.addEventListener("click", () => {
            if (theme.classList.contains("default")) {
                theme.classList.replace("default", "dark");
                return;
            }
            if (theme.classList.contains("dark")) {
                theme.classList.replace("dark", "default");
                return;
            }
        })
    </script>
</body>

</html>