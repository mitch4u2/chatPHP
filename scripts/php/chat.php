<?php

require('../../includes/database/connect.db.php');

require('../../includes/functions/chat.func.php');


    

    $sender = $_GET['sender'];
    /*$sender = 'visiteur4';*/

    $messages = get_msg($sender);
    foreach($messages as $message){
        
        if($message['admin']==0)
        {
            echo '<li class="i">
					<div class="head">
						<span class="time">10:13 AM, Today</span>
						
					</div>
					<div class="message">'.$message['message'].'</div>
				</li>';
        }else 
        {
            echo ' <li class="friend-with-a-SVAGina">
					<div class="head">
						
						<span class="time">10:15 AM, Today</span>
					</div>
					<div class="message">'.$message['message'].'</div>
				</li>'
                ;}
        
       
       
        
    }


    



?>