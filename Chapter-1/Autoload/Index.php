<?php
require_once "Simple_Autoload.php";
class Index{
    public function __construct(){

        Simple_Autoload::Load("Helper");
        $help=new Helper("Helper");
        $help->SetYourName();

        Simple_Autoload::Load("Sauto/Hello");
        $hello=new Hello();
        $hello->sayHello();

        Simple_Autoload::Load("Sauto/LoHel/Lohel");
        $lohel=new Lohel();
        $lohel->sayLohel();
    }
    
}
$ind=new Index();


?>