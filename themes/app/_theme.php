<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= url("assets/web/css/layers.css"); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">

    <title><?= $this->e($title) ?></title>

</head>

<body>
    <?php
    $this->start("header");
    ?>
    <nav class="navbar">
        <div class="col">
            <a href="<?= url('/'); ?>" class="navbar--link">
                <img src="<?= url("/assets/web/imgs/sgda.svg") ?>" alt="" class="brand" height="70">
            </a>
            <ul class="navbar--list list">
                <li class="list--item"><a href="<?= url("app/horarios"); ?>" class="navbar--link">Horários</a></li>
                <!-- Insersão de menu dropdown mediante login -->
                <li class="list--item"><a href="" class="navbar--link">App</a></li>
                <li class="list--item"><a href="" class="navbar--link">FAQ</a></li>
                <li class="list--item"><a href="" class="navbar--link">Sobre nós</a></li>
                <li class="list--item"><a href="<?= url("app/cadastro/usuario"); ?>" class="navbar--link">Cadastro de usuários</a></li>
            </ul>
        </div>
        <div class="col">
            <a href="<?= url("app/perfil"); ?>"><i class="fa-regular fa-circle-user fa-2xl"></i></a>
        </div>
    </nav>
    <?php
    $this->end();
    ?>
    

    <?php
    if ($this->section("alternative-header-I")) {
        echo $this->section("alternative-header-I");
    } else {
        echo $this->section("header");
    }
    ?>

    <main class="main">
        <?= $this->section('content'); ?>
    </main>
    <footer class="footer">
        <div class="col">
            <a href="<?= url('/'); ?>" class="link">
                <img src="<?= url("/assets/web/imgs/sgda_title.png") ?>" alt="" class="brand" height="70">
            </a>
        </div>
        <div class="col">
            <i class="fa-brands fa-twitter fa-2xl"></i>
            <i class="fa-brands fa-square-facebook fa-2xl"></i>
            <i class="fa-solid fa-envelope fa-2xl"></i>
        </div>
        <div class="col">
            <p>© 2023 Sistema de Gerenciamento de Dados Acadêmicos</p>
        </div>
    </footer>
    <script src="https://kit.fontawesome.com/82f9eb0794.js" crossorigin="anonymous" async></script>
    <script>
        const twittterIcon = document.querySelector(".fa-twitter");
        const facebookIcon = document.querySelector(".fa-square-facebook");
        const emailIcon = document.querySelector(".fa-envelope");
        const saveIcons = document.querySelectorAll(".fa-bookmark");
        if (saveIcons) {
            saveIcons.forEach(icon => {
                icon.addEventListener("mouseenter", solid);
                icon.addEventListener("mouseleave", regular);
            })
        }

        facebookIcon.addEventListener("mouseenter", (e) => {
            bounce(e, true);
        })

        twittterIcon.addEventListener("mouseenter", (e) => {
            bounce(e, true);
        })

        emailIcon.addEventListener("mouseenter", (e) => {
            bounce(e, true);
        })

        twittterIcon.addEventListener("mouseleave", (e) => {
            bounce(e, false);
        })

        facebookIcon.addEventListener("mouseleave", (e) => {
            bounce(e, false);
        })

        emailIcon.addEventListener("mouseleave", (e) => {
            bounce(e, false);
        })

        function solid(e) {
            let target = e.target;
            if (target.classList.contains("fa-solid")) {
                return;
            }
            target.classList.remove("fa-regular");
            target.classList.add("fa-solid");
        }

        function regular(e) {
            let target = e.target;
            if (target.classList.contains("fa-regular")) {
                return;
            }
            target.classList.remove("fa-solid");
            target.classList.add("fa-regular");
        }

        function bounce(element, bounce) {
            let target = element.target;
            if (bounce) {
                if (target.classList.contains("fa-bounce")) {
                    return;
                }
                target.classList.add("fa-bounce");
                return;
            }
            if (target.classList.contains("fa-bounce")) {
                target.classList.remove("fa-bounce");
            }

        }
    </script>
</body>

</html>