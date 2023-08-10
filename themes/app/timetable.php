<?php
$this->layout("_theme", ['title' => 'Horários']);

?>

<div class="main--timetable">
    <label for="classes">Turmas</label>
    <select name="classes" id="classes">
        <?php
        foreach ($classes as $class) {
            echo "<option value='$class->name'>$class->name</option>";
        }
        ?>
    </select>
    <table>
        <tr>
            <th>Coluna 1</th>
            <th>Coluna 2</th>
            <th>Coluna 3</th>
            <th>Coluna 4</th>
            <th>Coluna 5</th>
        </tr>
        <tr>
            <td>Linha 1</td>
            <td>Linha 1</td>
            <td>Linha 1</td>
            <td>Linha 1</td>
            <td>Linha 1</td>
        </tr>
        <tr>
            <td>Linha 1</td>
            <td>Linha 1</td>
            <td>Linha 1</td>
            <td>Linha 1</td>
            <td>Linha 1</td>
        </tr>
        <tr>
            <td>Linha 2</td>
            <td>Linha 2</td>
            <td>Linha 2</td>
            <td>Linha 2</td>
            <td>Linha 2</td>
        </tr>
        <tr>
            <td>Linha 3</td>
            <td>Linha 3</td>
            <td>Linha 3</td>
            <td>Linha 3</td>
            <td>Linha 3</td>
        </tr>
        <tr>
            <td>Linha 4</td>
            <td>Linha 4</td>
            <td>Linha 4</td>
            <td>Linha 4</td>
            <td>Linha 4</td>
        </tr>
        <tr>
            <td>Linha 5</td>
            <td>Linha 5</td>
            <td>Linha 5</td>
            <td>Linha 5</td>
            <td>Linha 5</td>
        </tr>
    </table>
</div>