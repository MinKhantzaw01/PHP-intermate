<?php
namespace app;
use app\gem\Shape;
class Square implements Shape{
    private $width;
    private $height;
    public function __construct($width,$height){
        $this->width=$width;
        $this->height=$height;
    }
    public function getArea(){
        return $this->width * $this->height;
    }
}

?>