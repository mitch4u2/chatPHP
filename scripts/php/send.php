<?php

require('../../includes/database/connect.db.php');

require('../../includes/functions/chat.func.php');



    
    $sender=$_GET['sender'];
    
   
    if(isset($_GET['message'])&&!empty($_GET['message'])){
        $message=$_GET['message'];
    
        
         if(send_msg($sender, $message)){
        echo 'message send';
        
    }else{ echo'massage wasnt send'; }
        
        
    }else{echo'No message enter';}




?>