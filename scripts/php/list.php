<?php

require('../../includes/database/connect.db.php');

require('../../includes/functions/chat.func.php');


    
   /* $visiteurs = list_visiteur();
    foreach($visiteurs as $visiteur){
        echo '<strong>'.$visiteur['visiteur'].' online </strong><br/>';
        
        
    }*/


 $visiteurs = list_visiteur();
    foreach($visiteurs as $visiteur){
        /*echo '<strong>'.$visiteur['visiteur'].' online </strong><br/>';*/
        echo '<li id="vst">
						<img width="50" height="50" src="https://pbs.twimg.com/profile_images/1675322379/r-red-black_400x400.png">
						<div class="info">
							<div class="user">'.$visiteur['visiteur'].'</div>
							<div class="status on"> online</div>
						</div>
					</li>';
        
        
    }


                    
    



?>