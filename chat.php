<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>ChatNow : Chat</title>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge"><link rel="stylesheet" href="./chat.css">
<script src="aes.js"></script>
</head>
<body>


    <div class = "sharepopup" id="sharepopup">
<iframe id= 'shareframe' style="border:0px #ffffff none;" name="Share" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="100%" width="100%" allowfullscreen></iframe>
    </div>

<div class="closeshare"> <button id="closebtn" class="closebtn" onclick ="closeshare()" type="button" >Close</button></div>


<!-- partial:index.partial.html -->
<section class="msger">
  <header class="msger-header">
    <div class="msger-header-title">
      <i class="fas fa-comment-alt"></i> ChatNow
    </div>
    <div class="msger-header-options">
      <span onclick="sharethis()"><i class="fas fa-user-plus"></i></span>
    </div>
  </header>

  <main class="msger-chat">

  </main>

  <form class="msger-inputarea">
    <input type="text" class="msger-input" placeholder="Enter your message...">
    <button type="submit" class="msger-send-btn">Send</button>
  </form>
</section>
<!-- partial -->
  <script src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

<?php
$id=$_POST['chatid'];
$user=$_POST['name'];
$usrID=$_POST['usrID'];
?>

var id = <?php echo "'".$id."';" ;?>
var user = <?php echo "'".$user."';" ; ?>
var usrID = <?php echo "'".$usrID."';" ; ?>
const filename=id+".txt";

</script>


<script  src="./script.js"></script>


</body>
</html>    
     
     