<?php $this->layout("_theme", ['title' => 'Página inicial']); ?>
<div class="main__container main__container--main">
  <div class="main__container--filter"></div>
  <div class="main__container--image"></div>
  <div class="main__container--content">
    <div class="main__container--item calendar">
      <h2><i class="fa-solid fa-calendar"></i><span>Calendário</span></h2>
      <div class="calendar--container js-calendar">

      </div>
    </div>
    <div class="main__container--item news">
      <h2><i class="fa-solid fa-newspaper"></i> <span> Notícias</span></h2>
      <div class="new">

        <h3 class="new--title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
        <img src="./imgs/testing.jpg" alt="" class="new--image">
      </div>
      <div class="new">

        <h3 class="new--title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
        <img src="./imgs/testing.jpg" alt="" class="new--image">
      </div>
      <div class="new">

        <h3 class="new--title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
        <img src="./imgs/testing.jpg" alt="" class="new--image">
      </div>
      <div class="new">

        <h3 class="new--title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
        <img src="./imgs/testing.jpg" alt="" class="new--image">
      </div>
      <div class="more"> <a href="#">Mais</a></div>
    </div>
    <div class="main__container--item messages">
      <h2><i class="fa-sharp fa-solid fa-circle-exclamation"></i><span>Avisos</span></h2>
      <div class="messages--container">
        <div class="message">Duis eu tempus velit</div>
        <div class="message">Duis eu tempus velit</div>
        <div class="message">Duis eu tempus velit</div>
        <div class="message">Duis eu tempus velit</div>
      </div>
      <div class="more"> <a href="#">Mais</a></div>

    </div>
    <div class="main__container--item hints">
    </div>

  </div>
</div>