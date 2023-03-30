<?php
class Player{
    private $path;
    private $music;
    public function setMusicPath($path){
        $this->path=$path;
    }
    public function setMusic($music){
        $this->music=$music;
    }
    public function getMusicPath(){
        return $this->path;
    }
    public function getMusic(){
        return $this->music;
    }
}


?>