<html>

<head><title>test chat</title></head>



<body>
<?php
require('includes/functions/chat.func.php');    
   ajout_visiteur();
    
?>
<div id="visiteur"> 

</div>
<div id="feedback"> </div>
<form action="#" method="post" id="form_input">
        <label>Enter Name
        <input type="text" name="sender" id="sender">
        </label>
        
        <label>Enter Message
        <input type="text" name="message" id="message">
        </label>
        
        <input type="submit" name="send" value="Send Mesage" id="send">
        
    </form>
    
   

<div id="messages">
   
</div>

<script type="text/javascript" src="scripts/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="scripts/js/autochat.js"></script>
<script type="text/javascript" src="scripts/js/send.js"></script>
</body>
</html>