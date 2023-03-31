<?php
namespace App;
class Member{
    private $isAuth=false;
    private $detailInfo=[
        "name"=>"Mg Mg",
        "age"=>"20",
        "school"=>"Yangon"
    ];
    public function getdetailInfo($ary,int $data=50){
        // return $this->detailInfo;
        return $ary;
    }
    public function setAuth($bol){
        $this->isAuth=$bol;
    }
    public function getAuth(){
        return $this->isAuth;
    }
}




?>