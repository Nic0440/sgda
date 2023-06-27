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
        $stm = Connect::getInstance()->query("SELECT classroom_name, class_name, start_time, end_time, teacher_name, subject_name
        FROM (
            SELECT cr.name AS classroom_name, cls.name AS class_name, sch.start_time, sch.end_time, t.name AS teacher_name, sub.name AS subject_name, ROW_NUMBER() OVER (PARTITION BY sch.id % 6 ORDER BY tt.schedule_id) AS rn
            FROM timetable AS tt
            JOIN schedules AS sch ON tt.schedule_id = sch.id
            JOIN subjects_teachers AS st ON tt.subject_teacher_id = st.id
            JOIN teachers AS t ON st.teacher_id = t.id
            JOIN subjects AS sub ON st.subject_id = sub.id
            JOIN classrooms AS cr ON tt.classroom_id = cr.id
            JOIN classes AS cls ON tt.class_id = cls.id
        ) AS tt_ordered
        ORDER BY tt_ordered.rn;");
    
        return $stm->fetchAll();
    }
    public function selectByClass(string $category){
        $query = "SELECT classroom_name, class_name, start_time, end_time, teacher_name, subject_name
        FROM (
            SELECT cr.name AS classroom_name, cls.name AS class_name, sch.start_time, sch.end_time, t.name AS teacher_name, sub.name AS subject_name, ROW_NUMBER() OVER (PARTITION BY sch.id % 6 ORDER BY tt.schedule_id) AS rn
            FROM timetable AS tt
            JOIN schedules AS sch ON tt.schedule_id = sch.id
            JOIN subjects_teachers AS st ON tt.subject_teacher_id = st.id
            JOIN teachers AS t ON st.teacher_id = t.id
            JOIN subjects AS sub ON st.subject_id = sub.id
            JOIN classrooms AS cr ON tt.classroom_id = cr.id
            JOIN classes AS cls ON tt.class_id = cls.id
            WHERE cls.name = '{$category}'
        ) AS tt_ordered
        ORDER BY tt_ordered.rn;";
    
            $stm = Connect::getInstance()->query($query);
            return $stm->fetchAll();
    }
    
}

