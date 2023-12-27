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
      <form action="#" onsubmit="return false;">
        <div class="field">
          <span class="fas fa-user"></span>
          <input autocomplete="off" placeholder="Enter your Name" name ="user" id="username" type ="text"  required>
<!--          <label>Name</label>-->
        </div>
        <div class="field">
          <span class="fas fa-lock"></span>
          <input  value="auto-generated" readonly="true">
<!--          <label>Chat Id</label>-->
        </div>
<!--        <div class="forgot-pass"><a href="#">Forgot Password?</a></div>-->
        <button onclick ="create()" type="button" >Create</button>
        <button onclick ="window.location.href='join.php'" type="button">Join</button>
        <div class="signup">How to use?
          <a href="help.php">Need Help</a>
        </div>
        
      </form>
  </div>
  <script type="text/javascript">
  
  var id ;
  var name ;
  var usrID;
  
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
     
     
  function create(){
  id=generateId(16);
  usrID=generateId(10);
  name=document.getElementById("username").value;
    $.ajax({
          url:"create.php",
          type: "post",  
          dataType: 'json',
          data: {id:id, name:name,usrID:usrID},
          success:function(result){
              isvalid(result.x,result.y,result.z);
       },
       error:function(result){
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
     
     alert("Please Enter a Valid Name");
     
   }
   
      
  </script>
  
</body>
</html>
<!-- partial -->
  
</body>
</html>