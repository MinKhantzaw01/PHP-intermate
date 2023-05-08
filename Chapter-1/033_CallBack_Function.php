<?php
class Index{
    public function doIt($var){
        $i=0;
        $sum=0;
        while($i<1000){
            $sum+=$i;
            $i++;
        }
        $this->$var($sum);
    }
    public function finish($total){
        echo "All Total is=> ".$total;
    }
    public function donkey(){
        echo "I am not a donkey";
    }
}

$ind= new Index();
$ind->doIt("finish");
echo "<hr>";
$ind->doIt("donkey");

?>