<?php
$this->layout("_theme", ['title' => 'SGDA | Página inicial']);
?>
<section class="introduction banner">
  <div class="introduction__item banner__item banner__content">
    <h1><em>Seja</em> <span class="dancing-script">bem-vindo(a)</span> <span class="mono">ao</span> <br><span class="thmor">SGDA</span> </h1>
    <p>O SGDA (Sistema de Gerenciamento de Dados Acadêmicos) é a sua solução completa para o eficiente gerenciamento de dados acadêmicos para sua instituição.
      Desenvolvido pensando especialmente nas necessidades administrativas das escolas e universidades, o SGDA é o seu parceiro confiável para uma gestão ágil e eficaz.
      <br>
      Com o SGDA, você terá acesso a uma plataforma abrangente e intuitiva, projetada para auxiliar no controle e organização dos dados de professores e alunos.
      Desde matrículas e presenças até avaliações e históricos acadêmicos, tudo está ao seu alcance em uma interface simples e acessível.
    </p>
    <div class="introduction__buttons-container">
      <a tabindex="-1" href=""> <button name="login_page" class="button button--access  button--bg-dark-purple">Acesse o SGDA</button></a>
      <a tabindex="-1" href=""><button name="about-us_page" class="button button--intro">Quem somos nós</button></a>

    </div>
  </div>
  <div class="introduction__item banner__item banner__img">
    <img src="<?= url("/assets/web/imgs/amorfo.svg") ?>" alt="Forma amorfa" class="js-parallax introduction__img--amorph1">
    <img src="<?= url("/assets/web/imgs/amorfo2.png") ?>" alt="Forma amorfa" class="js-parallax introduction__img--amorph2">
    <img src="<?= url("/assets/web/imgs/3d_elemento.png") ?>" alt="Livros empilhados" class="introduction__img--3d">

  </div>
</section>

<script async>
  const parallax = document.querySelectorAll(".js-parallax");
  const updateForm = document.querySelector("#update-form");
  parallax.forEach(e => {
    window.addEventListener("scroll", () => {
      let offset = window.pageYOffset;
      e.style.transform = `translateY(${offset * 0.3}px)`;
    });
  })
  updateForm.addEventListener("submit", async () => {
    //...
  });
</script>