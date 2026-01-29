<?php

require_once "athlete.php";
require_once "event.php";
require_once 'medal.php';
require_once 'result.php';
require_once 'olympicgames.php';

$olympic2025 = new OlympicGames("Juegos Olimpicos 2025");


$athlete1 = new Athlete("Usain Bolt", "Jamaica");
$athlete2 = new Athlete("Michael Phelps", "USA");

$event1 = new Event("100m Sprint", new DateTime('2014-08-01'));
$event2 = new Event('Swimming', new DateTime('2024-08-02'));

$result1 = new Result($athlete1, $event1, Medal::GOLD);
$result2 = new Result($athlete2, $event2, Medal::GOLD);

$olympic2025->addResult($result1);
$olympic2025->addResult($result2);

$olympic2025->showResults();