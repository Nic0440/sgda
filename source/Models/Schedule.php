<?php

namespace Source\Models;

use Source\Core\Connect;

class Schedule
{
    private $id;
    private $start;
    private $end;

    public function __construct(
        $id = null,
        $start = null,
        $end = null
    ) {
        $this->id = $id;
        $this->start = $start;
        $this->end = $end;
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
     * Get the value of start
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set the value of start
     *
     * @return  self
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get the value of end
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set the value of end
     *
     * @return  self
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }
    public function selectByCategory(string $category){
        $query = "SELECT start_time, end_time FROM schedules AS sch
            WHERE sch.shift = '{$category}';";
    
            $stm = Connect::getInstance()->query($query);
            return $stm->fetchAll();
    }
    public function selectAll(string $category){
        $query = "SELECT * FROM schedules;";
    
            $stm = Connect::getInstance()->query($query);
            return $stm->fetchAll();
    }
}
