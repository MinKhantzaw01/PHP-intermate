<?php
class Index{
    private static $count=0;
    public function get(){
        self::$count++;
        echo self::$count ."<br>";
    }
}
$obj=new Index();
$obj->get();
$obj->get();
$obj->get();

echo "<hr>";

$aa=new Index();
$aa->get();
$aa->get();
$aa->get();


#non-static=>can call static
#static=>can't call non-static 


?>


