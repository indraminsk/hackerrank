<?php

class person {
    protected $firstName, $lastName, $id;
    
    public function __construct($first_name, $last_name, $identification) {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $identification;
    }
    
    function printPerson() {
        print("Name: {$this->lastName}, {$this->firstName}\n");
        print("ID: {$this->id}\n");
    }
}

//===my===
class Student extends person {
    private $testScores;
    
    public function __construct($first_name, $last_name, $identification, $scores) {
        parent::__construct($first_name, $last_name, $identification);
        
        $this->testScores = $scores;
    }
    
    public function calculate() {
        $scores = array_sum($this->testScores)/count($this->testScores);
        
        if ($scores <= 39) {
            $grade = 'T';
        } else if (($scores >= 40) && ($scores <= 54)) {
            $grade = 'D';
        } else if (($scores >= 55) && ($scores <= 69)) {
            $grade = 'P';
        } else if (($scores >= 70) && ($scores < 79)) {
            $grade = 'A';
        } else if (($scores >= 80) && ($scores < 89)) {
            $grade = 'E';
        } else if (($scores >= 90) && ($scores <= 100)) {
            $grade = 'O';
        } else {
            $grade = 'NaN';
        }
        
        return $grade;
    }
}
//===end===

$file = fopen("php://stdin", "r");

$name_id = explode(' ', fgets($file));

$first_name = $name_id[0];
$last_name = $name_id[1];
$id = (int)$name_id[2];

fgets($file);

$scores = array_map(intval, explode(' ', fgets($file)));

$student = new Student($first_name, $last_name, $id, $scores);

$student->printPerson();

print("Grade: {$student->calculate()}");
