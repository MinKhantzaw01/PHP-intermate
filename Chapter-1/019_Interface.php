<?php
interface Rulegame{
    public function createGameScene();
    public function creatVegetables();
    public function createHousing();
    public function createActor();
}
class Index implements Rulegame{
    public function createGameScene(){
        echo "Hello I am Create Game Scene";
    }
    public function creatVegetables(){
        echo "Hello I am Create Vegetables";
    }
    public function createHousing(){
        echo "Hello I am Create Housing";
    }
    public function createActor(){
        echo "Hello I am Create Actor";
    }

}

$game=new Index;
$game->createGameScene();
echo "<hr>";
$game->creatVegetables();
echo "<hr>";
$game->createHousing();
echo "<hr>";
$game->createActor();

?>