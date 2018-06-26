<?php
require 'functions.php';

class Task {
    public $description;

    public $completed = false;

    public function __construct($decription)
    {
        $this->description = $decription;
    }

    public function isCompleted()
    {
        return $this->completed;
    }

    public function complete() {
        $this->completed = true;
    }

}

$tasks = [
    new Task('Go to the store'),
    new Task('Watch TV'),
    new Task('Wash the dishes')
];

$tasks[1]->complete();
$tasks[2]->complete();

require 'index.view.php';

