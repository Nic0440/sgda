<?php
$this->layout("_theme", ['title' => 'Horários', 'timetable' => $timetable, 'schedules' => $schedules]);

?>

<div class="main__container main__container--timetable">
    <nav class="navbar navbar__container--timetable timetable">
        <button class="timetable--button b-3 br-5" type="button">
            Turmas
            <span><i class="fa-solid fa-play fa-rotate-90 fa-sm"></i></span>
        </button>
        <button class="timetable--button  b-3 br-5" type="button">Disciplinas <span><i class="fa-solid fa-play fa-rotate-90 fa-sm"></i></span></button>
        <button class="timetable--button  b-3 br-5" type="button">Professores <span><i class="fa-solid fa-play fa-rotate-90 fa-sm"></i></span></button>
    </nav>
    <table class="timetable"></table>

</div>
<script>
    const buttons = document.querySelectorAll(".timetable--button");
    buttons.forEach((e) => {
        e.addEventListener("click", () => {

        })
    })
</script>