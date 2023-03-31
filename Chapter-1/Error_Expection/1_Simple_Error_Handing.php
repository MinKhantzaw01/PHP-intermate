<?php

function myFileRead($file){
    if(file_exists($file)){
        $handler=fopen($file,'r');
        $size=filesize($file);
        $data=fread($file,$size);

        echo $data;
    }else{
        throw new Exception("This is not exit");
    }
}
try{
    myFileRead(("HELLO.txt"));
}catch(Exception $e){
    echo $e->getMessage();
    echo "<hr>";
    echo $e->getFile();
    echo "<hr>";
    echo $e->getTraceAsString();
    echo "<hr>";
}

?>