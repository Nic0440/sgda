<?php

$this->layout("_theme", ['title' => 'Cadastro de usuários']);

?>
<div class="main--user-register">
    <form action="" class="js-form-register" novalidate>
        <label for="user-type">Selecione o tipo de usuário que deseja cadastrar no sistema</label>
        <?php
        foreach ($userCategories as $category) {
            $id = $category->id;
            $name = ucfirst($category->name);

            if ($category === $userCategories[0]) {
                echo '<input type="radio" name="idCategory" value="' . $id . '" checked> ' . $name;
            } else {
                echo '<input type="radio" name="idCategory" value="' . $id . '"> ' . $name;
            }
        }
        ?>
        <label for="name">Nome completo</label>
        <input type="text" id="name" name="name">
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
        <label for="password">Crie uma senha</label>
        <input type="text" id="password" name="password">
        <div class="js-regis-message"></div>
        <button>Cadastrar</button>
    </form>
</div>
<script type="text/javascript" async>
    const url = `<?= url("api/user"); ?>`;
    const form = document.querySelector(".js-form-register");
    const message = document.querySelector(".js-regis-message");

    form.addEventListener("submit", async (e) => {
        e.preventDefault();
        const data = new FormData(form);
        const response = await fetch(`<?= url("api/user"); ?>`, {
            method: "POST",
            body: data
        });
        const user = await response.json();
        console.log(user);
    });
</script>