<?php

$this->layout("_theme", ['title' => 'Turmas']);

if (!empty($classes)) {

    foreach ($classes as $class) {
        echo "Turma => " . $class->name;
    }
}
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