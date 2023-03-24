<?php
namespace app;
use app\gem\Shape;
class Cycle implements Shape{
    private $radius;
    public function __construct($radius){
        $this->radius=$radius;
    }
    public function getArea(){
        return $this->radius*$this->radius*pi();
    }
}

?>