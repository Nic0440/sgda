<?php
$this->layout("_theme", ['title' => 'Login']);
?>

<?php
$this->start("no-header");
?>

<?php
$this->end();
?>
<div class="main__container main__container--login">
    <div class="main__container--content">
        <section class="banner">
            <a href="<?= url(); ?>" class="anchor--none to-back">
                <i class="fa-solid fa-arrow-left"></i><span>Voltar</span></a>
        </section>
        <section class="login__container">
            <h2><i class="fa-solid fa-right-to-bracket"></i>Login</h2>
            <div class="checkbox__container">
                <h1>Por favor, selecione sua ocupação.</h1>
                <div class="checkbox">
                    <button class="checkbox__item checkbox__item--student js-checkbox" data-role="student" data-selected="true">
                        <i class="fa-solid fa-user-graduate"></i>
                        <p>Estudante</p>
                    </button>
                    <button class="checkbox__item checkbox__item--relative js-checkbox" data-role="relative" data-selected="false">
                        <i class="fa-solid fa-user-group"></i>
                        <p>Responsável</p>
                    </button>
                    <button class="checkbox__item checkbox__item--teacher js-checkbox js-teacher" data-role="teacher" data-selected="false">
                        <i class="fa-solid fa-chalkboard-user"></i>
                        <p>Professor</p>
                    </button>
                </div>
                <div class="form__container">
                    <form class="form js-form-login" method="post" action="">
                        <div class="form__item form__item--user">
                            <label for="user">EMAIL</label>
                            <div class="input__container">
                                <i class="fa-solid fa-envelope"></i>
                                <input class="input input--user js-input-user" name="user" type="text" placeholder="Digite seu email">
                            </div>
                        </div>
                        <div class="form__item form__item--password">
                            <label for="password">SENHA</label>
                            <div class="input__container">
                                <i class="fa-solid fa-lock"></i>
                                <input class="input input--password js-input-password" name="password" type="password" placeholder="Digite sua senha">
                                <i class="fa-solid fa-eye js-show-password"></i>
                            </div>
                        </div>

                        <button type="submit" class="button button--login js-button-login">Log In</button>
                    </form>
                    <a class="anchor--none" href="#">Esqueci minha senha.</a>
                </div>
            </div>
        </section>
    </div>
</div>