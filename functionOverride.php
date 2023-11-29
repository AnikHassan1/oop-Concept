<?php
class user{
    public $name;
    public $address;
    public function __construct(string $name,string $address){
        $this->name=$name;
        $this->address=$address;
    }
    public function display():void{
        echo " Name is : {$this ->name}<br>";
        echo " Address is : {$this ->address}<br>";
    }
}
class student extends user{
 public $roll;

 public function __construct(string $name,string $address ,int $roll){
 parent::__construct($name,$address);
 $this->roll    = $roll;
 }
 public function getROll():int{
return $this->roll;
 }
}
$users = new student("john","Dhaka",90);
$users->display();
echo $users ->getROll();
?>