<?php
$this->layout("_theme", ['title' => 'Horários', 'timetable' => $timetable, 'schedules' => $schedules]);
if (!empty($timetable)) {
    foreach ($timetable as $row) {

        //echo "<p>". $row->classroom_name . "<p>";
    }
}
?>

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
    <div class="timetable">
        <?php if (!empty($schedules)) { ?>
            <?php foreach ($schedules as $schedule) { ?>
                <div class="schedule">
                    <span class="start-time"><?php echo substr($schedule->start_time, 0, 5); ?></span> - 
                    <span class="end-time"><?php echo substr($schedule->end_time, 0, 5); ?></span>
                </div>
            <?php } ?>
        <?php } ?>
    </div>

</div>