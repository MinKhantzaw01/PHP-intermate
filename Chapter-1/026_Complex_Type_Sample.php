<?php

class Rect{
    public $car,$driver;
    public function __construct(Car $car,Driver $drive){
        $this->car=$car;
        $this->drive=$drive;
    }
    public function getCar():Car{
        return $this->car;
    }
    public function getDriver():Dirver{
        return $this->driver;
    }
}



class Driver{
    public $name,$age,$family,$hourlyrate,$status;

    public function setName(string $name){
        $this->name=$name;
    }
    public function getName():string{
        return $this->name;
    }
    public function setAge(int $age){
        $this->age=$age;
    }
    public function getAge():int{
        return $this->age;
    }
    public function setFamily(array $family){
        $this->family=$family;
    }
    public function getFamily():array{
        return $this->family;
    }
    public function setHourlyRate(float $hourlyrate){
        $this->hourlyrate=$hourlyrate;
    }
    public function getHourlyRate():float{
        return $this->hourlyrate;
    }  
    public function setStatus(bool $status){
        $this->status=$status;
    }
    public function getStatus():bool{
        return $this->status;
    }
}

class Car{
    public $brand,$model,$price,$spares,$availabel;
    public function __construct(string $brand,int $model,float $price,array $spares,bool $availabel){
        $this->brand=$brand;
        $this->model=$model;
        $this->price=$price;
        $this->spares=$spares;
        $this->availabel=$availabel;
    }
    public function getBrand():string{
        return $this->brand;
    }
    public function getModel():int{
        return $this->model;
    }
    public function getPrice():float{
        return $this->price;
    }
    public function getSpares():array{
        return $this->spares;
    }
    public function getAvailabel():bool{
        return $this->availabel;
    }
}


$dMgMg=new Driver();
$dMgMg->setName("Mg Mg");
$dMgMg->setAge(25);
$dMgMg->setFamily(["Father"=>"U Mya","Mother"=>"Daw Hla"]);
$dMgMg->setHourlyRate(8.5);
$dMgMg->setStatus(FALSE);


$dAungAung=new Driver();
$dAungAung->setName("Aung Aung");
$dAungAung->setAge(27);
$dAungAung->setFamily(["Father"=>"U Aye","Mother"=>"Daw Nu"]);
$dAungAung->setHourlyRate(9.5);
$dAungAung->setStatus(TRUE);


$toyota=new Car("Alphbert",2017,30.5,["Tissues","Purified DK","Cupon"],TRUE);
$marsedee=new Car("Marsedee",2016,45.5,["Tissues","Purified DK"],FALSE);

$rect1=new Rect($toyota,$dMgMg);
$rect2=new Rect($marsedee,$dAungAung);

$list=[$rect1,$rect2];

$serializedData=serialize($list);
echo $serializedData;
echo "<hr>";
$ary=unserialize($serializedData);
echo "<pre>".print_r($ary,true)."</pre>";
echo "<hr>";
echo $list[0]->getCar()->getBrand();
echo "<hr>";
?>