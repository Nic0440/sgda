<?php
$this->layout("_theme", ['title' => 'Calendário']);

if (!empty($events)) {

    foreach ($events as $event) {
        var_dump($event);
    }
}
?>