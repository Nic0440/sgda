<?php
//$this->layout("_theme", ['title' => 'Cadatro']);
?>
<form class="form form--register php-email-form" method="post">
   <h1>Cadastro</h1>
   <label for="email"></label>
   <input class="input input--register" type="text" name="name" placeholder="Name" />
      <label for="password"></label>
      <input class="input--register" type="email" name="email" placeholder="Email" />
      <label for="confirm"></label>
      <input class="input--register" type="password" name="password" placeholder="Senha" />
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