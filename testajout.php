<?php

  require('includes/database/connect.db.php');
           
            $distinct = mysqli_query($connection, "SELECT COUNT( DISTINCT Sender) as nombre FROM chat");
            $data=mysqli_fetch_assoc($distinct);
            $nombre = ((int) $data['nombre'])+1;
            $visit ='visiteur'.$nombre;
        $query="INSERT INTO chat.chat VALUES (null, '$visit', '',0)";
        
        $run=mysqli_query($connection, $query);


?>