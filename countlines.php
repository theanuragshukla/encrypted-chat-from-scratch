<?php

if( isset($_POST['a'])){
  
   $filename="./chats/".$_POST['a'].'.txt';

$file = new \SplFileObject($filename, 'r');
$file->seek(PHP_INT_MAX);

$count = $file->key(); 


$return_arr = array('x'=>$count);
echo json_encode($return_arr);

}else{ 
  
  http_response_code(500);
  
  }

 ?>
