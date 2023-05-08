<?php
require_once "vendor/autoload.php";
use app\Home;
use app\Best;
use app\middleware\Filter as Filter;
class Index{
    public function __construct(){
        $home=new Home();
        $home->sayHomeName();

        $best=new Best();
        $best->sayBestname();

        $filter=new Filter();
        $filter->sayFilterName();
    }
}

new Index();
?>