<?php

require_once "athlete.php";
require_once "event.php";
require_once 'medal.php';
require_once 'result.php';

class OlympicGames{
    private string $name;
    private array $listOfAthletes = [];
    private array $listOfEvents = [];
    private array $listOfResults = [];

    public function __construct(string $name){
        $this->name=$name;
        $this->listOfAthletes=[];
        $this->listOfEvents=[];
        $this->listOfResults=[];
    }


    public function addAthlete(Athlete $athlete){
        $this->listOfAthletes[] = $athlete;
    }

    public function addEvent(Event $event){
        $this->listOfEvents[] = $event;
    }

    public function addResult(Result $result){
        $this->listOfResults[] = $result;
    }

    public function showResults(){
        echo "Olympic Games Results:\n";
        foreach($this->listOfResults as $result){
            echo "   - " . $result->getAthlete()->getName() . " from " . $result->getAthlete()->getCountry() . " won " . $result->getMedal()->value . "\n";
        }
    }

    }
