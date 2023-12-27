<?php

if( isset($_POST['a']) && isset($_POST['b'])){
  
   $filename="./chats/".$_POST['a'].'.txt';
   
$myLine = $_POST['b'] ; 
$file = new SplFileObject($filename);
$file->seek($myLine);
$msg= $file->current();

$return_arr = array('x'=>$msg);
echo json_encode($return_arr);

}else{ 
  
  http_response_code(500);
  
  }


?>