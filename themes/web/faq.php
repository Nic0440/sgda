<?php
$this->layout("_theme", ['title' => 'Perguntas frequentes']);
?>
<section class="faq-header banner">
    <div class="faq-header__item banner__item banner__content">
        <h1>Perguntas Frequentes</h1>
        <p>Aqui, você encontrará respostas para as perguntas mais comuns sobre a nossa plataforma.
            Nossa equipe se dedicou cuidadosamente a compilar essas informações para tornar sua experiência mais suave e eficiente.
            Caso não encontre a resposta para sua dúvida nesta seção, pedimos que entre em <a href="#" class="link--contact link--color-dark">contato</a> conosco.
            Nossa equipe de suporte dedicada está pronta para atendê-lo e fornecer o suporte necessário. Estamos sempre disponíveis para ajudar!
        </p>
    </div>
    <div class="faq-header__item banner__img banner__item">
        <img src="<?= url("/assets/web/imgs/question_mark_3d.png") ?>" alt="Balões de dúvida" class="faq-header__img">
    </div>
</section>
<section class="faq-content__container">
    <ul class="accordion list--no-style">
        <li class="accordion__item js-accordion-item" aria-expanded="false">
            <button type="button" class="accordion__header button--no-style text--md text--bold text--spacing">Título 2
                <div class="icon icon--toggle">
                </div>
            </button>
            <div class="accordion__body js-body">
                <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis risus nec odio mattis, at lacinia enim rhoncus.
                    Nulla quis turpis dapibus, tempor purus et, efficitur risus. Ut vestibulum ligula et ligula fringilla, a aliquam ex viverra.
                    Sed et quam turpis. Nulla facilisi. Sed faucibus eget eros a gravida. Vivamus efficitur urna nec facilisis tincidunt.
                </div>
            </div>
        </li>
        <li class="accordion__item js-accordion-item" aria-expanded="false">
            <button type="button" class="accordion__header button--no-style text--md text--bold text--spacing">Título 2
                <div class="icon icon--toggle">
                </div>
            </button>
            <div class="accordion__body js-body">
                <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis risus nec odio mattis, at lacinia enim rhoncus.
                    Nulla quis turpis dapibus, tempor purus et, efficitur risus. Ut vestibulum ligula et ligula fringilla, a aliquam ex viverra.
                    Sed et quam turpis. Nulla facilisi. Sed faucibus eget eros a gravida. Vivamus efficitur urna nec facilisis tincidunt.
                </div>
            </div>

        </li>

    </ul>
</section>

<script async>
    const items = document.querySelectorAll(".js-accordion-item");

    items.forEach((item) => {
        item.addEventListener("click", () => {
            const isExpanded = item.getAttribute("aria-expanded") === "true";
            const contentHeight = item.querySelector(".content").offsetHeight;

            items.forEach((e) => {
                if (e !== item && e.getAttribute("aria-expanded") === "true") {
                    e.classList.toggle('active');
                    e.setAttribute("aria-expanded", false);
                    e.querySelector(".js-body").style.maxHeight = 0;
                }
            });

            item.classList.toggle('active');
            item.setAttribute("aria-expanded", !isExpanded);
            if (item.getAttribute("aria-expanded") === "true") {
                item.querySelector(".js-body").style.maxHeight = contentHeight + 'px';
                return;
            }
            item.querySelector(".js-body").style.maxHeight = 0;
        });
    });
</script>