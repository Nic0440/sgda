<?php
//$this->layout("_theme", ['title' => 'Cadatro']);
?>
<form class="form form--register" method="post">
   <h1>Cadastro</h1>
   <label for="email"></label>
   <input class="input input--register" type="text" name="email" placeholder="Email" />
      <label for="password"></label>
      <input class="input--register" type="password" name="password" placeholder="Senha" />
      <label for="confirm"></label>
      <input class="input--register" type="password" name="confirm" placeholder="Confirmar senha" />
   <button type="submit">Enviar</button>
 </form>

 <script type="text/javascript" async>
    const form = document.querySelector(".php-email-form");

    const headers = {
        email: "fabiosantos@ifsul.edu.br",
        password: "12345678"
    };

    form.addEventListener("submit", async (e) => {
        e.preventDefault(); 
        const data = await fetch(`<?= url("api/user");?>`,{
            method: "POST",
            body: new FormData(form),
            headers: headers
        });
        const user = await data.json();
        console.log(user);
    });
</script>