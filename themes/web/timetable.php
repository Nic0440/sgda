<?php
$this->layout("_theme", ['title' => 'Horários', 'timetable' => $timetable, 'classes' => $classes]);
if (!empty($class)) {
    foreach ($class as $row) {
        var_dump($row);
    }
}
?>

<div class="dropdown">
    <button class="dropdown--button js-dropdown-btn">Dropdown <i class="fas fa-arrow-down"></i></button>
    <div class="dropdown--content js-dropdown-btn-content">
        <?php if (!empty($classes)) : ?>
            <?php foreach ($classes as $row) : ?>
                <div class="dropdown--option js-linkable" data-href="horarios/<?php echo $row->code; ?>"><?php echo $row->code; ?></div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>