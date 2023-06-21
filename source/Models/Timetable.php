<?php

namespace Source\Models;

use Source\Core\Connect;

class Timetable {
    private $id;
    private $teacher;
    private $subject;
    private $class;
    private $classroom; 
    private $schedule;

    public function __construct (
        $id = null,
        $teacher = null,
        $subject = null,
        $schedule = null,
        $classroom = null,
        Class_ $class = null
    ){
        $this->id = $id;
        $this->teacher = $teacher;
        $this->subject = $subject;
        $this->schedule = $schedule; 
        $this->classroom = $classroom; 
        $this->class = $class;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of teacher
     */ 
    public function getTeacher()
    {
        return $this->teacher;
    }

    /**
     * Set the value of teacher
     *
     * @return  self
     */ 
    public function setTeacher($teacher)
    {
        $this->teacher = $teacher;

        return $this;
    }

    /**
     * Get the value of subject
     */ 
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set the value of subject
     *
     * @return  self
     */ 
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get the value of class
     */ 
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set the value of class
     *
     * @return  self
     */ 
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get the value of classroom
     */ 
    public function getClassroom()
    {
        return $this->classroom;
    }

    /**
     * Set the value of classroom
     *
     * @return  self
     */ 
    public function setClassroom($classroom)
    {
        $this->classroom = $classroom;

        return $this;
    }

    /**
     * Get the value of schedule
     */ 
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Set the value of schedule
     *
     * @return  self
     */ 
    public function setSchedule($schedule)
    {
        $this->schedule = $schedule;

        return $this;
    }

    public function selectAll()
    {
        $stm = Connect::getInstance()->query("
            SELECT days.name AS day_name, classes.name AS class_name, classes.code AS class_cod, classrooms.sala AS classroom_name, 
                   classrooms.bloco AS classroom_block, teachers.name AS teacher_name, subjects.name AS subject_name
            FROM timetables
            JOIN days ON timetables.idDay = days.id
            JOIN classes ON timetables.idClass = classes.id
            JOIN classrooms ON timetables.idClassroom = classrooms.id
            JOIN teachers_subjects ON timetables.idTeacherSubject = teachers_subjects.id
            JOIN teachers ON teachers_subjects.idTeacher = teachers.id
            JOIN subjects ON teachers_subjects.idSubject = subjects.id;
        ");
    
        return $stm->fetchAll();
    }
    public function selectByClass(string $data){
        $query = "SELECT * FROM timetables JOIN classes ON timetables.idClass = classes.id WHERE classes.code = '$data';'";
    
            $stm = Connect::getInstance()->query($query);
            return $stm->fetchAll();
    }
    
}

