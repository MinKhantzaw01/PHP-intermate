<?php
require_once "vendor/autoload.php";
use app\Cycle;
use app\Square;
use app\gem\Shape;


class Index{
    public function __construct(){
        $square=new Square(40,20);
        $this->getPrice($square);
        echo "<hr>";
        $cycle=new Cycle(20);
        $this->getPrice($cycle);
    }
    public function getPrice(Shape $shape){
        $area=$shape->getArea();
        echo "Your are total price =>". ($area * 15) ."$<hr>";
    }
    
}


new Index();
?>