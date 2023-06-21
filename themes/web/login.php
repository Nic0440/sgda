<?php
    $this->layout("_theme",['title' => 'Login']);
?>

    <?php
      $this->start("header");
    ?>
    <header class="header--back">
            <nav class="navigation">
                <div class="back js-linkable" data-href="">
                    <i class="fas fa-angle-left"></i>
                    <p>Voltar</p>
                </div>
            </nav>
        </header>
    <?php
    $this->end();
    ?>
    <main>
        <div class="main__login--content">
            <img src="<?= url("assets/web/imgs/happy.jpg"); ?>" alt="Illustration" srcset="">
            <form class="form form--login" method="post">
                <h1>Login</h1>
                <label for="email"></label>
                <input class="input input--login" type="text" name="email" placeholder="Email" />
                <div class="password-field">
                    <label for="password"></label>
                    <input class="input--login" type="password" name="password" placeholder="Senha" />
                    <div class="links">
                        <a href="">Esqueceu a sua senha?</a>
                        <a href="<?= url("registro"); ?>">Realizar cadastro.</a>
                    </div>
                </div>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </main>