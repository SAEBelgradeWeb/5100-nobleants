<?php

/**
 * Let's model University and Students as they enrol to university by using classes (Person, University and Students)
 */

class Person {
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}
class Students {
    protected $students = [];

    public function addStudent(Person $person) {
        array_push($this->students, $person);
    }

    public function getAll() {
        return $this->students;
    }

}

class University {
    protected $name;
    protected $students;

    public function __construct($name, Students $students)
    {
        $this->name = $name;
        $this->students = $students;
    }

    public function enrolls(Person $person) {
        $this->students->addStudent($person);
    }

    public function getStudents() {
        return $this->students->getAll();
    }
}


$milos = new Person('Milos');
$aleksandra = new Person('Aleksandra');
$anastasia = new Person('Anastasia');
$sae_students = new Students;
$sae = new University('SAE', $sae_students);

$sae->enrolls($milos);
$sae->enrolls($anastasia);
$sae->enrolls($aleksandra);
echo "<pre>";
var_dump($sae->getStudents());




