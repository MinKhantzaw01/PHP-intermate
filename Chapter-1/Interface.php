<?php
require_once "sheInter.php";
require_once "heInter.php";
class Index implements sheInter,heInter{
    private $data;
    public function heGoToSchool($data){
        $this->data=$data;

    }

    public function sheGoToSchool($data){
        $this->data=$data;
    }
    public function output(){
        echo "<pre>".print_r($this->data,true)."</pre>";
    }
    public function busy(){
        echo "This person is busy with ". $this->data[count($this->data)-1];
    }
}



$obj=new Index();
$sheary=["book","pencil","bag","cosmitic"];
$heary=["book","pencil","bag","Ruler"];
$obj->sheGoToSchool($sheary);
$obj->output();
$obj->busy();

$bb=new Index();
$bb->heGoToSchool($heary);
$bb->output();
$bb->busy();
?>