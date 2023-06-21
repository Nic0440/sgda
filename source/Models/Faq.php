<?php

namespace Source\Models;

use Source\Core\Connect;

class Faq
{
    private $id;
    private $answer;
    private $question;

    public function __construct($id = null, $answer = null, $question = null)
    {
        $this->id = $id;
        $this->answer = $answer;
        $this->question = $question;
    }

    public function selectAll() 
    {
        $stm = Connect::getInstance()->query('SELECT * FROM faqs');
        return $stm->fetchAll();

    }
    public function getAnswer()
    {
        return $this->answer;
    }

    public function setAnswer($answer): void
    {
        $this->answer = $answer;
    }

    public function getQuestion()
    {
        return $this->question;
    }

    public function setQuestion($question): void
    {
        $this->question = $question;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

}