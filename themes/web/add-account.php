<?php

$this->layout("_theme", ['title' => 'Login']);

?>
<?php
$this->start("alternative-header-I");
?>
<nav class="navbar">
    <div class="col"></div>
    <div class="col">
        <a class="navbar--link" href="<?= url("/"); ?>">Página inicial</a>
    </div>
    <div class="col"></div>
</nav>
<?php
$this->end();
?>

<div class="main--add-account">
<div class="col title">
        <h1>Adicionar conta</h1>
        <h2>Deseja entrar como?</h2>
    </div>
    <div class="col card__container">
        
        <div class="col card__item">
            <div class="containe"></div>
            <div class="card__item--icon"  style="background-color:green"><i class="fa-solid fa-chalkboard-user"></i></div>
            <p>Professor</p>
            <div class="col">
            <a href="<?= url("adicionar_conta"); ?>"><button class="btn btn--logged-in" type="button">Entrar</button></a>
        </div>
        </div>
        <div class="col card__item">
            <div class="card__item--icon" style="background-color:red"><i class="fa-solid fa-graduation-cap"></i></div>
            <p>Aluno</p>
            <div class="col">
            <a href="<?= url("adicionar_conta"); ?>"><button class="btn btn--logged-in" type="button">Entrar</button></a>
        </div>
        </div>
        <div class="col card__item">
            <div class="card__item--icon"  style="background-color:orange"><i class="fa-solid fa-user-shield"></i></div>
            <p>Administrador</p>
            <div class="col">
            <a href="<?= url("adicionar_conta"); ?>"><button class="btn btn--logged-in" type="button">Entrar</button></a>
        </div>
        </div>
    </div>
    
</div>