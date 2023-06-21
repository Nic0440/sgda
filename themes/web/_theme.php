<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= url("assets/web/css/style.css"); ?>">

    <title><?= $this->e($title) ?></title>
</head>

<body class="default-theme">
    <div class="body-container js-body">
        <?php
        $this->start("header");
        ?>
        <div class="message-login">
            <i class='fa-solid fa-x js-icon-cancel'></i>
            <span>Para acessar essa funcionalidade é necessário realizar o login.</span>
            <button class="button button--login"><a href="<?= url("login"); ?>" class="anchor--none">Fazer login</a></button>
        </div>

        <header class="header header--main js-header">
            <nav class="navbar navbar__container">
                <a href="<?= url();?>" class="navbar navbar__group anchor--none">
                    <img src="<?= url("assets/web/imgs/sgda.png"); ?>" alt="Logo" class="logo">
                </a>
                <div class="navbar navbar__group">
                    <div class="navbar navbar__cell"><span>Ensino</span>
                        <ul class="navbar__cell--menu">
                            <li>
                                <ul class="list--item">
                                    <li><a class="anchor--none" href="<?= url("horarios");?>"><i class="fa-solid fa-clock"></i>Horários</a>
                                    </li>
                                    <li><a class="anchor--none" href="#"><i class="fa-solid fa-person-chalkboard"></i>Professores</a>
                                    </li>
                                    <li><a class="anchor--none" href="#"><i class="fa-solid fa-book"></i>Disciplinas</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <ul class="list--item">
                                    <li><a class="anchor--none" href="#"><i class="fa-solid fa-chalkboard-user"></i>Turmas</a></li>
                                    <li><a class="anchor--none" href="#"><i class="fa-solid fa-school"></i>Campûs</a>
                                    </li>
                                    <li><a class="anchor--none" href="#"><i class="fa-solid fa-calendar"></i>Calendário</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul class="list--item">

                                    <li><a class="anchor--none js-item-lock" href="#"><i class="fa-solid fa-briefcase"></i>Estágios</a>
                                    </li>
                                    <li><a class="anchor--none js-item-lock" href="#"><i class="fa-solid fa-file-lines"></i>Avaliações</a>
                                    </li>
                                    <li><a class="anchor--none js-item-lock" href="#"><i class="fa-solid fa-table"></i>Boletim</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="navbar navbar__cell"><span>Documentação</span>
                        <ul class="navbar__cell--menu">
                            <ul class="list--item">
                                <li><a class="anchor--none" href="#"><i class="fa-solid fa-file"></i>Planos de
                                        ensino</a></li>
                                <li><a class="anchor--none" href="#"><i class="fa-solid fa-certificate"></i>Diplomas e
                                        Certificações</a>
                                </li>
                                <li><a class="anchor--none js-item-lock" href="#"><i class="fa-solid fa-file"></i>Documentos</a>
                                </li>
                            </ul>
                        </ul>
                    </div>
                    <a class="anchor--none navbar navbar__cell" href="/"><span>Contato</span></a>
                </div>
                <div class="navbar navbar navbar__group navbar__group--right">
                    <a class="anchor--none navbar navbar__cell" href="<?= url("login");?>">Login</a>
                    <i class="fa-solid fa-circle-half-stroke js-toggle-theme"></i>
                </div>
            </nav>
        </header>
        <?php
        $this->end();
        ?>

        <?php
        if ($this->section("no-header")) {
            echo "";
        } else {
            echo $this->section("header");
        }
        ?>

        <main class="main">
            <?= $this->section('content'); ?>
        </main>
        <footer class="footer">
            <div class="footer__container">
                <div class="footer__col">
                    <div class="footer__row">
                        <a href="/" class="navbar navbar__group anchor--none">
                            <img src="./imgs/sgda.png" alt="Logo" class="navbar__cell logo">
                        </a>
                    </div>
                </div>
                <div class="footer__col">
                    <div class="footer__row footer__row--list">
                        <a href="/" class="anchor--none footer__row--list-item"><b>Sobre nós</b></a>
                        <a href="/" class="anchor--none footer__row--list-item"><b>Nos contate</b></a>
                        <a href="/" class="anchor--none footer__row--list-item"><b>Termos e licenças</b></a>
                    </div>
                </div>

                <div class="footer__col">
                    <div class="footer__row footer__row--social">
                        <a href="/" class="anchor--none footer__row--social-item">
                            <i class="fa-brands fa-square-instagram"></i>
                        </a>
                        <a href="/" class="anchor--none footer__row--social-item">
                            <i class="fa-brands fa-square-facebook"></i>
                        </a>
                        <a href="/" class="anchor--none footer__row--social-item">
                            <i class="fa-solid fa-envelope"></i>
                        </a>
                    </div>
                </div>
        </footer>
    </div>
    
    <script src="<?= url("assets/web/js/script.js"); ?>" async></script>
    <script src="https://kit.fontawesome.com/82f9eb0794.js" crossorigin="anonymous" async></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous" async></script>
    <script src="<?= url("assets/web/js/Calendar.js"); ?>" async></script>
</body>

</html>