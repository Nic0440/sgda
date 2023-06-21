<?php

namespace Source\Models;

use Source\Core\Connect;

class Class_ {
    private $id;
    private $name;

    public function __construct (
        $id = null,
        $name = null
    ){
        $this->id = $id;
        $this->name = $name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function selectAll() 
    {
        $stm = Connect::getInstance()->query('SELECT * FROM classes');
        return $stm->fetchAll();

    }

}