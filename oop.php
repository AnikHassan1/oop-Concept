<?php
// echo " Welcome to oop Core Concept";
// //create a class and uses inheritance
// class fruits
// {
//     public $name;
//     public $age;

//     public function __construct($name, $age)
//     {
//         $this->name = $name;
//         $this->age = $age;
//     }
//     protected function intro()
//     {
//         echo " Your name is {$this->name} and your Age is {$this->age}";
//     }
// }
// class straberry extends fruits
// {
//     public function message()
//     {
//         echo 'Am I a fruit or a berry';
//         $this->intro();
//     }
// }

// $anik = new straberry('anik', 20);
// $anik->message();


?>

 <?php //secound structure class access modifier

    class student
    {
        private $name = "Jone";

        public function setName(string $name)
        {
            $this->name = $name;
        }
        public function display()
        {
            echo "Student name is : {$this->name}<br>";
            $this->test();
        }

        private function test()
        {
            echo "welcome to test <br>";
        }
    }
    $std = new student;
    $std->setName("Watson");
    $std->display();

    ?>



<?php // protected asscessor modifier
class user
{
    private $name = "john";
    protected $roll = 12;

    public function display()
    {
        echo "name is : {$this->name} <br>";
        echo "Roll is : {$this->roll} <br>";
    }
    protected function test(): void
    {
        echo "welcome ";
    }
}

class name extends user
{
    public function set()
    {
        $this->roll = "sarker";
    }
    public function hello():void
    {
        $this->test();
    }
}
$use = new user;
$use->display();

$user = new name;
$user->set();
$user->display();
$user->hello();
?>