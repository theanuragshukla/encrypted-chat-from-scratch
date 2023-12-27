<?php

if( isset($_POST['a']) && isset($_POST['b']) ){
  
$ext = ".txt";
$a=$_POST['a'];
$b=$_POST['b'];

$fname= $a.$ext;
$message=($b);
$return_arr = array('x'=>$a);
$fh = fopen("chats/".$fname, 'a');
fwrite($fh, $message."\n");
fclose($fh);


echo json_encode($return_arr);

  
}

else{ 
  
  http_response_code(500);
  
  }


?>