<?php
$ext = ".txt";
if( isset($_POST['id']) && $_POST['id'] == str_replace(' ','',$_POST['id'])  && isset($_POST['name'])  &&  $_POST['name']!="" && strlen(trim($_POST['id'])) !=0 && strlen(trim($_POST['name'])) != 0){

$id=$_POST['id'];
$name=$_POST['name'];
$usr=$_POST['usrID'];

$fname= $id.$ext;
$return_arr = array('y'=>$name,'x'=>$id,'z'=>$usr);
$fh = fopen("chats/".$fname, 'a');
fclose($fh);
echo json_encode($return_arr);
}

else {
  http_response_code(500);
}

?>

