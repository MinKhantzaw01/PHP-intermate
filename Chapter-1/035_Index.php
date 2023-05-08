<?php
require_once "035_Player.php";
class Index{
    public function __construct()
    {
        $Player=new Player;
        $Player->setMusicPath("C/user/waifer/document/music/");
        $Player->setMusic("pyanlarpartop.mp3");
        $this->PlayNow($Player->getMusicPath(),$Player->getMusic());
    }
    public function PlayNow($path,$music){
        echo "Playing ".$music." From ".$path.".";
    }
}
new Index;
?>