<?php

require_once "athlete.php";
require_once "event.php";
require_once 'medal.php';

class Result{
    private Athlete $athlete;
    private Event $event;
    private Medal $medal;


    public function __construct(athlete $athlete, event $event, Medal $medal){
    $this->athlete=$athlete;
    $this->event=$event;
    $this->medal=$medal;
    }

    public function getAthlete(){
        return $this->athlete;
    }

    public function getEvent(){
        return $this->event;
    }

    public function getMedal(){
        return $this->medal;
    }


}


