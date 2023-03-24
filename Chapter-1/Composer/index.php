<?php
require_once "vendor/autoload.php";
class Index{
    public function __construct(){
        $home=new Home();
        $home->sayHomeName();

        $filter=new Filter();
        $filter->sayFilterName();

        $sub=new Sub();
        $sub->saySubName();

        $end=new End();
        $end->sayEndName();

        $start=new Start();
        $start->sayStartName();
    }
}

new Index();

?>