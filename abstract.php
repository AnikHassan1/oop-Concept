<?php
abstract class car
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function intro(): string;
}

class audi extends car
{
    public function intro(): string
    {
        return "choose German ! I am $this->name";
    }
}

class home extends car
{
    public function intro(): string
    {
        return "Home Town is : $this->name";
    }
}

class age extends car
{
    public function intro(): string
    {
        return " Age is $this->name";
    }
}

$audi = new audi("anik");
echo $audi->intro() . "<br>";

$home = new home("Brahmonbaria");
echo $home->intro();
$age = new age("twenty one <br>");
echo $age->intro();
?>
<?php

abstract class parentd
{
    abstract  protected function prefixName($name);
}

class childd extends parentd
{
    public function prefixName($name)
    {
        if ($name == "john") {
            $prefix = "Mr .";
        } elseif ($name == "anik") {
            $prefix = "ms .";
        } else {
            $prefix = " ";
        }
        return "{$prefix} {$name}";
    }
}
$ctd = new childd ;
echo $ctd ->prefixName("john");
?>