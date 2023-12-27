<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>ChatNow : help</title>
  <link rel="stylesheet" href="./style.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://kit.fontawesome.com/a076d05399.js"></script>
              <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>

    <div class="content">
 
      <div class="text">ChatNow : help</div>
  
  ChatNow is an Online Chatting platform based on PHP. This project is developed in order to show the uses of PHP and its File Handling features. On this platform a person can create a chatroom and share it with someone to chat with or can join a already created chatroom using invite link or manually entering the chat ID. Chatrooms inactive for more than 10 minutes are deleted immedietly along with all the chats and userdata.
  <br><br>
  
        <div class="text">Create : help</div>
        
        When using this service , a user can create a chatroom by entering their name . In this method, a 16 characters chat ID is generated randomly. This ID is the access to the chatroom. Anyone with this ID can join the Chat.<br><br>
        In Case the created chatroom remains inactive for atleast 10 minutes then all of its data are wiped down automatically without any human interference. 
        <br><br>If Any person join the chatroom after wipedown,then a new chatroom is created with the Entered Chat ID as it does not exist.
        
          <br><br>

              <div class="text">Join : help</div>
  This feature gives user the ability to join a previously created chatroom or to create a new one in case it does not exist.A user can join a chatroom using the Invite link or by entering the chat ID of an already created alongwith entering their name.
<br><br>In case the requested chatroom is not created or it has been deleted due to inactivity , A new chatroom is created with the ID entered by User.
     <button onclick ="location='index.php';" type="button" >Close</button>
  </div>  
  
  <br><br>

</body>
</html>
 