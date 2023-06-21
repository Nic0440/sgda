<?php
$this->layout("_theme", ['title' => 'Horários', 'timetable' => $timetable, 'classes' => $classes]);
if (!empty($class)) {
    foreach ($class as $row) {
        var_dump($row);
    }
}
?>

<!-- <div class="dropdown">
    <button class="dropdown--button js-dropdown-btn">Dropdown <i class="fas fa-arrow-down"></i></button>
    <div class="dropdown--content js-dropdown-btn-content">
        <?php if (!empty($classes)) : ?>
            <?php foreach ($classes as $row) : ?>
                <div class="dropdown--option js-linkable" data-href="horarios/<?php echo $row->code; ?>"><?php echo $row->code; ?></div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div> -->
<div class="main__container main__container--timetable">
    <ul class="list--itens">
        <li class="list--item js-dropdwon">
            <div class="list__item--item"><i class="fa-solid fa-person-chalkboard"></i><span><strong>Professores</strong></span><i class="fa-solid fa-angle-down"></i></div>

        </li>
        <li class="list__item js-dropdwon">
            <div class="list__item--item"><i class="fa-solid fa-users-line"></i><span> <strong>Turmas</strong> </span><i class="fa-solid fa-angle-down"></i></div>

            <ul class="list__itens">

                <li class="list__itens--item">INF2AT</li>
                <li class="list__itens--item">INF1AT</li>
                <li class="list__itens--item">INF3AT</li>
                <li class="list__itens--item">INF4AT</li>
            </ul>
        </li>
        <li class="list--item js-dropdwon">
            <div class="list__item--item"><i class="fa-solid fa-book"></i><span><strong>Disciplinas</strong> </span><i class="fa-solid fa-angle-down"></i></div>
        </li>
        <li class="list--item js-dropdwon">
            <div class="list__item--item"><i class="fa-solid fa-chalkboard-user"></i><span> <strong>Salas de
                        Aula</strong> </span><i class="fa-solid fa-angle-down"></i></div>
        </li>
    </ul>
    <div class="timetable"></div>
</div>