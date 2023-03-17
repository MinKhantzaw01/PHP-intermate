<?php
class Index{
    public $name="Mg Mg";
    public function __toString(){
        return "This class have no properties or methods!<hr>";
    }
    public function __invoke(){
        echo "You are to call Object as method <hr>";
    }
    public function __clone(){
        echo "You are clone me<br>";
    }
    
}
$obj=new Index;
echo $obj;
echo $obj();
$aa=clone $obj;
echo $aa->name;


?>