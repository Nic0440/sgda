<?php

namespace Source\Models;

use Source\Core\Connect;

class UserCategory
{
    private $name;
    private $id;

    public function __construct(
        $name = null,
        $id = null
    ) {
        $this->name = $name;
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function selectAll()
    {
        $query = "SELECT * FROM user_categories";
        $stmt = Connect::getInstance()->query($query);
        return $stmt->fetchAll();
    }
    public function setName($name): void
    {
        $this->name = $name;
    }

    public function selectIdByName($name)
    {
        $query = "SELECT id FROM user_categories WHERE name = :name";
        $stmt = Connect::getInstance()->prepare($query);
        $stmt->bindParam(":name", $name);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function selectNameById($id)
    {
        $query = "SELECT name FROM user_categories WHERE id = :id";
        $stmt = Connect::getInstance()->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $results = $stmt->fetchAll();

        return $results[0]->name;
    }
}
