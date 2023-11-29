<?php
class student
{
    public $name = "John Doe";
    public $roll;
    function __construct(string $nam, int $roll)
    {
        // echo "Object Create";
        $this->name = $nam;
        $this->roll = $roll;
    }
    function display(): void
    {
        echo "Name is : {$this->name}";
        echo "Roll is : {$this->roll}";
    }
}

$std = new student("Anik Hassan", 12);

$std->display();
?>

<?php
class user
{
    public $name;
    public $address;

    public function set(string $name, string $address): void
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function display()
    {
        echo "Name is : {$this->name} <br>";
        echo "Address is : {$this->address}<br>";
    }
}

class students extends user
{
    public $roll;

    public function set(string $name,string $address, int $roll =null):void{
        parent::set($name,$address);
        $this->roll=$roll;
    }
    public function display()
    {
        echo "Student Information <br>";
        parent::display();
        echo"Roll is {$this->roll} <br>";
    }
}
class Teacher extends user
{
    public function display()
    {
        echo "Teacher Information <br>";
        parent::display();
    }
}
$std = new students;
$std->set("anik", "brahmonBaria",78);
$std->display();

$std2 = new Teacher;
$std2->set("Atik", "brahmonBaria");
$std2->display();
?>