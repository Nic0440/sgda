<?php

namespace Source\Models;

use Source\Core\Connect;

class User
{
    private $name;
    private $email;
    private $password;
    private $address;
    private $idCategory;

    public function __construct(
        $name = null,
        $email = null,
        $password = null,
        $idCategory = null,
        Address $address = null // Parametro novo
    ) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->idCategory = $idCategory;
        $this->address = $address; // Atribuição nova
    }

    public function getAddress(): ?Address
    {
        return $this->address;
    }

    public function setAddress(?Address $address): void
    {
        $this->address = $address;
    } // Atributo novo

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getPassword(): mixed
    {
        return $this->password;
    }

    public function setPassword(mixed $password): void
    {
        $this->password = $password;
    }

    public function insert()
    {
        $query = "INSERT INTO users 
        VALUES (NULL,:name,:email,:password, :id_category)";
        $stmt = Connect::getInstance()->prepare($query);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":password", $this->password);
        $stmt->bindParam(":id_category", $this->idCategory);
        $stmt->execute();
    }
    public function selectAll()
    {
        $query = "SELECT * FROM users";
        $stmt = Connect::getInstance()->query($query);
        return $stmt->fetchAll();
    }

    public function selectUsersByCategory($category)
    {
    }

    public function auth(String $email, String $password, String $idCategory)
    {
        $sql = "SELECT password, email FROM users WHERE password = :password AND email = :email AND id_category = :id_category;";
        $stmt = Connect::getInstance()->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":id_category", $idCategory);
        $stmt->execute();
        $row = $stmt->rowCount();
        if ($row !== 0) {
            return true;
        }
        return false;
    }

    /**
     * Get the value of idCategory
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }

    /**
     * Set the value of idCategory
     *
     * @return  self
     */
    public function setIdCategory($idCategory)
    {
        $this->idCategory = $idCategory;

        return $this;
    }
}
