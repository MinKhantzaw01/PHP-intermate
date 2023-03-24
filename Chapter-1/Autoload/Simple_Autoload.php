<?php
class Simple_Autoload{
    public static function Load($className){
        require_once $className .".php";
    }
}


?>