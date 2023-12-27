<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>ChatNow : Share</title>
  <link rel="stylesheet" href="./style.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://kit.fontawesome.com/a076d05399.js"></script>
              <meta http-equiv="X-UA-Compatible" content="ie=edge">
<style>
#snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
</style>
</head>
<body>

    <div class="content">

              <div class="text">Invite</div>
              
              <form action="#" onsubmit="return false;" >
              <div class="field">
              <span class="fas fa-user-plus"></span>
              <input readonly ="true" onclick="copy(this.value,'Chat ID copied to clipboard')" type="text" id="invitecode" >

              </div>
              <div class="field">
              <span class="fas fa-user-plus" ></span>
              <input readonly ="true" onclick="copy(this.value,'Invite Link copied to clipboard')" id="invitelink">

              </div>
         <!--     <button onclick ="" type="button">Share</button>
              <button onclick ="share'" type="button">Close</button>-->
              
              </form>
  
  </div>  
  <div id="snackbar">Copied to clipboard</div>
  <script>
var id;
window.onload=function(){
    <?php
$id=$_GET['chatid'];
?>

 id = <?php echo "'".$id."';" ;?>

    document.getElementById("invitelink").value='https://itsanurag.000webhostapp.com/join.php?chatid='+id;
document.getElementById("invitecode").value=id;

    
}



function maketoast(e) {
  var x = document.getElementById("snackbar");
  x.innerText=e ;
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}


</script>
  <script>
      const copyToClipboard = str => {
         
  const el = document.createElement('textarea');
  el.value = str;
  el.setAttribute('readonly', '');
  el.style.position = 'absolute';
  el.style.left = '-9999px';
  document.body.appendChild(el);
  const selected =
    document.getSelection().rangeCount > 0
      ? document.getSelection().getRangeAt(0)
      : false;
  el.select();
  document.execCommand('copy');
  document.body.removeChild(el);
  if (selected) {
    document.getSelection().removeAllRanges();
    document.getSelection().addRange(selected);
  }
};

function copy(a,b){
    copyToClipboard(a);
    maketoast(b);
}
  </script>
  

</body>
</html>
 