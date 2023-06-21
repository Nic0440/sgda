<?php
namespace Source\Models;
use Source\Core\Connect;

class Calendar
{
    private $id;
    private $name;
    private $description;
    private $color;
    private $date;
    public function __construct(
        $id = null,
        $name = null,
        $description = null,
        $color = null,
        $date = null
    ) {
        $this->$id = $id;
        $this->$name = $name;
        $this->$description = $description;
        $this->$color = $color;
        $this->$date = $date;
    }
    public function selectAll()
    {
        $stm = Connect::getInstance()->query('SELECT * FROM events');
        return $stm->fetchAll();
    }
}
