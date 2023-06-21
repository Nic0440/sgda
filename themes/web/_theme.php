<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= url("assets/web/css/calendar.css"); ?>">
    <link rel="stylesheet" href="<?= url("assets/web/css/styles.css"); ?>">
    <link rel="stylesheet" href="<?= url("assets/web/fontawesome-6.4.0-web/css/all.min.css"); ?>">
    <link rel="stylesheet" href="<?= url("assets/web/fontawesome-6.4.0-web/css/fontawesome.min.css"); ?>">
   <script src="<?= url("assets/web/js/scripts.js"); ?>" async></script>

    <title><?= $this->e($title) ?></title>
</head>

<body>

    <?php
    $this->start("main_header");
    ?>
    <header class="header <?php if ($this->section("header-img")) {
                                echo $this->section("header-img");
                            } ?>">
        <nav class="navigation navigation--home">
            <div class="logo js-linkable" data-href="">
                <img class="logo--image" src="<?= url("assets/web/imgs/sgda.png") ?>" alt="Logo" srcset="">
            </div>
            <div class="login__link js-linkable" data-href="login">
                <i class="fas fa-user"></i>
                <p>Login</p>
            </div>
            <ul class="navigation--ul">
                <li id="dropdown1" class="navigation__li--nav">
                    <p>Ensino</p>
                    <i class="fas fa-angle-down"></i>

                </li>
                <li id="dropdown2" class="navigation__li--nav">
                    <p>Documentação</p>
                    <i class="fas fa-angle-down"></i>

                </li>
                <li class="navigation__li--nav">
                    <a class="nav--anchor" href="<?= url("calendario"); ?>">Calendário</a>
                </li>
                <li class="navigation__li--nav">
                    <a class="nav--anchor" href="<?= url("contato"); ?>">Contato</a>
                </li>
            </ul>
            <div class="search">
                <i class="fas fa-search"></i>
                <input name="search" type="text" />

            </div>
        </nav>
        <nav id="dropdown1-content" class="navigation__dropdown-menu">
            <ul class="navigation__dropdown-menu--ul">
                <li>
                    <a href="<?= url("horarios"); ?>">Horários</a>
                </li>
                <li>
                    <a href="<?= url("turmas"); ?>">Turmas</a>
                </li>
            </ul>
        </nav>
        <nav id="dropdown2-content" class="navigation__dropdown-menu">
            <ul class="navigation__dropdown-menu--ul">
                <li>
                    <a href="<?= url("protocolos"); ?>">Protocolos</a>
                </li>
                <li>
                    <i class="fas fa-lock lock-icon"></i>
                    <a class="js-locked" href="#">Documentos</a>
                </li>
            </ul>
        </nav>
    </header>
    <?php
    $this->end();
    ?>
    <?php

    if ($this->section("header")) {
        echo $this->section("header");
    } else {
        echo $this->section("main_header");
    }
    ?>
    <main id="main" class="content <?php if ($this->section("main-home")) {
                                        echo $this->section("main-home");
                                    } ?>">
        <?= $this->section('content'); ?>
    </main>

    <footer id="footer" class="footer">
        <div class="footer__item footer__item--useful-links">
            <h2>LINKS ÚTEIS</h2>
            <ul class="footer--ul">
                <li>
                    <a href="<?= url("faq"); ?>">Perguntas frequentes</a>
                </li>
                <li>
                    <i></i>
                    <a href="#">Versão mobile</a>
                </li>
                <li>
                    <a href="<?= url("contato"); ?>">Fale conosco</a>
                </li>
                <li>
                    <a href="<?= url("sobre"); ?>">Sobre nós</a>
                </li>
            </ul>
        </div>
        <hr>
        <div class="footer__item footer__item--our-social-media">
            <h2>MÍDIAS SOCIAIS</h2>
            <ul class="footer--ul">
                <i></i>
                <i></i>
                <i></i>
            </ul>
        </div>
        <div class="footer__item footer__item--copyright">
            <p>&copy 2023 Sistema de Gerenciamento de Dados Acadêmicos (SGDA). Todos os direitos reservados.</p>
        </div>
    </footer>

</body>

</html>