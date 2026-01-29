<?php

class Event{
    private string $name;
    private DateTime $date;


    public function __construct(string $name, DateTime $date){
        $this->name=$name;
        $this->date=$date;
    }

    public function getName(){
        return $this->name;
    }

    public function getDate(){
        return $this->date;
    }
}