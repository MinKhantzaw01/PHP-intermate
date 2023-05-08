<?php
function MyCustomErrorHanding(){
    throw new Exception("File not found Sir");
}
set_error_handler("MyCustomErrorHanding");
try{
    fopen('txt.test','r');
}catch(Exception $e){
    echo $e->getMessage();
}finally{
    echo "<hr>I am Finally Condition";
}

?>