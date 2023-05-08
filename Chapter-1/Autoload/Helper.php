<?php
class Helper{
    private $name;
    public function __construct($name){
        $this->name=$name;
    }
    public function SetYourName(){
        echo "My name is ".$this->name."<hr>";
    }
}



?>