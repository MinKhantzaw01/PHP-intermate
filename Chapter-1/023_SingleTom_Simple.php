<?php
class Index{
    private static $name="Mg Mg";
    private static $instance;

    public static function getInstance(){
        if(self::$instance==null){
            self::$instance=new Index();
        }
        return self::$instance;
    }
    public static function getName(){
        return self::$name;
    }
}
$ind= Index::getInstance();
echo $ind->getName();


?>