<?php
class MyCustomException extends Exception{
    public function __construct($message,$code)
    {
        parent::__construct($message,$code);
        $handler= fopen("log.txt",'a');
        $data="\n\nError Message\n ".$message."\nError Code\n ".$code."\nError Time\n ".date("Y-m-d H:m:s",time());
        fwrite($handler,$data);
        fclose($handler);
    }
}
function rFile($file){
    if(!file_exists($file)){
        throw new MyCustomException("File Not Found",1001);
    }
}

try{
    rFile("HH.txt");
}catch(Exception $e){
    echo $e->getMessage();
}

?>