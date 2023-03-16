<?php
class Destructor{
    var $t=0;
    public function __construct(){
        echo "I am constructor and start working <br>";
    }
    public function loopIt(){
        for($i=0;$i<50000;$i++){
            $this->t += $i;
        }
        echo "t value is " .$this->t;
    }
    public function __destruct(){
        echo "I am destructor";
    }
}
$obj=new Destructor();
$obj->loopIt();
?>