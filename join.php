<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>ChatNow : Free Online Chat</title>
  <link rel="stylesheet" href="./style.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://kit.fontawesome.com/a076d05399.js"></script>
              <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>
    <div class="content">
 
      <div class="text">ChatNow</div>
      <form action="#" onsubmit="return false;" >
        <div class="field">
          <span class="fas fa-user"></span>
          <input type="text"required autocomplete="off" name ="user" id="username" placeholder="Enter your Name">
<!--          <label>Name</label>-->
        </div>
        <div class="field">
          <span class="fas fa-lock"></span>
          <input autocomplete="off" name ="chatid" id="chatid" type ="text"  placeholder="Enter Chat Id">
<!--          <label>Chat Id</label>-->
        </div>
<!--        <div class="forgot-pass"><a href="#">Forgot Password?</a></div>-->
        <button onclick ="join()" type="button">Join Session</button>
        <button onclick ="window.location.href='index.html'" type="button">Create Session</button>
        <div class="signup">How to use?
          <a href="help.php">Need Help</a>
        </div>
        
      </form>
  </div>
  
  
  <script type="text/javascript">
  
  var id ;
  var name ;
  var usrID;
  
     <?php 
     
     if (isset($_GET['chatid'])){
     
     echo 'document.getElementById("chatid").value="'.$_GET['chatid'].'";';
     echo '$("#chatid").attr("readonly", true); ';
     
     }
     
     ?>
     
          function generateId(x) {
     var pass = '';
     var str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ' + 
             '0123456789';
       
     for (i = 1; i <= x; i++) {
         var char = Math.floor(Math.random()
                     * str.length + 1);
           
         pass += str.charAt(char)
     }
       
     return pass;
     }
     
     
     
  function join(){
  id=document.getElementById("chatid").value;
  name=document.getElementById("username").value;
  usrID=generateId(10);
    $.ajax({
          url:"create.php",
          type: "post",  
          dataType: 'json',
          data: {id:id, name:name,usrID:usrID},
          success:function(result){
              isvalid(result.x,result.y,result.z);
       },
       error:function(result){;
                     erroroccour();
                  }
       
   });  
  }
  
   function isvalid(a,b,c){
     
  var form = document.createElement("form");
  form.setAttribute("method", "post");
  form.setAttribute("action", "chat.php");
  
  var params = {chatid:a, name:b,usrID:c};
  for(var key in params) {
      if(params.hasOwnProperty(key)) {
          var hiddenField = document.createElement("input");
          hiddenField.setAttribute("type", "hidden");
          hiddenField.setAttribute("name", key);
          hiddenField.setAttribute("value", params[key]);
  
          form.appendChild(hiddenField);
       }
  }
  
  document.body.appendChild(form);
  form.submit();
       
     
       
   }
   
        
   function erroroccour(){
     
     alert("Please Enter a Valid Name or ChatID");
     
   }
      
  </script>
</body>
</html>
<!-- partial -->
 