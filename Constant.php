<?php
class Names
{
    public $name;
    public $roll;

    const Message = " welcome";

    public function setName(string $name,string $roll){
        $this->name=$name;
        $this->roll=$roll;
    }

    public function display(){
        echo self::Message;
        echo "Name is : {$this->name}<br>";
        echo "roll is :{$this ->roll}";
        
    }
}

$std = new Names;
$std->setName("anik",12);
$std->display();

echo Names::Message;
?>