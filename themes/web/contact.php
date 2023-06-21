<?php
$this->layout("_theme", ['title' => 'Contato']);
?>
<aside>
    <h2>Nos contate</h2>
    <p>Sinta-se a vontade para esclarecer suas dúvidas conosco sobre o funcionamento
        da plataforma, nossas políticas, dentre outras. Verifique se a sua dúvida já
        não foi respondida na seção <a href="./faq.php">perguntas frequentes</a>.
    </p>
    <div>
        <div>
            <i></i>
            <p>+55 51 99525-3191</p>
        </div>
        <div>
            <i></i>
            <p>nicolaslemes.ch585@gmail.com</p>
        </div>
    </div>
</aside>
<form class="form" method="post" action="<?= url("contact"); ?>">
    <label for="email">Email</label>
    <input type="text" name="email" />
    <label for="message">Mensagem</label>
    <input type="text" name="message" />
    <button type="submit">Enviar</button>
</form>