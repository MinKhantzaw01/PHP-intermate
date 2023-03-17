<?php
interface sheInter{
    public function seaWeapon($weapon);
}
class Index{
    private $weapon;
    public function seaWeapon($weapon){
        $this->weapon=$weapon;
    }
    public function killNow(){
        echo "Killing enemy with ".$this->weapon;
    }
}
$obj=new Index;
$obj->seaWeapon("Kiss");
$obj->killNow();

?>