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

<div class="main--login">
    <form action="" method="post" class="js-form-login">
        <h1>Login <span><?= $userType; ?></span></h1>
        <label for="email">Email</label>
        <input id="email" placeholder="Endereço de email" type="email" name="user">
        <label for="Senha">Senha</label>
        <input id="Senha" placeholder="Senha" type="password" name="password">
        <button>Entrar</button>
    </form>
    <div class="message js-log-message"></div>
</div>

<script type="text/javascript" async>
    const url = `<?= url("api/user/login"); ?>`;
    const form = document.querySelector(".js-form-login");
    const message = document.querySelector(".js-log-message");

    async function request(url, options) {
        try {
            const response = await fetch(url, options);
            const data = await response.json();
            return data;
        } catch (err) {
            console.error(err);
            return {
                type: "error",
                message: err.message
            };
        }
    }

    form.addEventListener("submit", async (e) => {
        e.preventDefault();

        const formData = new FormData(form);
        formData.append('idCategory', '<?= $idCategory; ?>');
        const options = {
            method: 'post',
            body: formData
        };
        const resp = await request(url, options);
        if (resp.type === 'error') {
            message.textContent = "Usuário não encontrado";
        }
        if (resp.type === 'success') {
            message.textContent = "Login realizado com sucesso";
            window.location.href = `<?= url("/app");?>`;
        }
        setTimeout(() => {
                message.textContent = " ";
            }, 2000);
    });
</script>