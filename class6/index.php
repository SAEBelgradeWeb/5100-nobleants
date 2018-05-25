<?php

class User
{
    protected $name;
    public $lastname;

    public function __construct($name, $lastname)
    {
        $this->name = $name;
        $this->lastname = $lastname;
    }

    static public function getName() {
        return self::name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function fullName()
    {
        return $this->name . " " . $this->lastname;
    }
}

class SuperUser extends User {

    public function fly() {
        echo "Look at me mom, I am flying!" . " I am " . $this->name;
    }

//    public function fullName()
//    {
//        return $this->lastname . ", " . $this->name;
//    }

}

//$user1 = new User("John", "Doe");
//echo $user1->setName('George');
//echo $user1->setName('Michael');
//echo $user1->fullName();

$superuser = new SuperUser('Clark', 'Kent');
$superuser->fly();
//echo $superuser->name;
//echo $superuser->fullName();
//$user1->name = "Josh";
//$user1->lastname = "Doe";

//$user2 = new User();
//$user2->name = "Merry";
//$user2->lastname = "Keogh";
//
//echo $user1->fullName();
//
//
//
//echo "<pre>";
//var_dump($user1);
//var_dump($user2);

class Utility {

    const SOMETHING = "10";
    static public function dd($data) {
        self::printData($data);
    }

    static public function printData($data) {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
        die;
    }
}
//Utility::dd($superuser);

echo (new User("Vladimir", "Lelicanin"))->fullName();

//define("SOME_CONSTANT", 10);
