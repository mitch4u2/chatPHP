<?php


function get_msg($sender){
   require('/../database/connect.db.php');
    
    $query = "SELECT Sender, Message, Admin FROM chat.chat WHERE Sender='$sender'";
    $run=mysqli_query($connection, $query);
    $messages=array();
    while($message = mysqli_fetch_assoc($run)){
        $messages[] = array('sender' => $message['Sender'],
                         'message' => $message['Message'],
                         'admin' => $message['Admin']);
        
    }return $messages;
    
}
function send_msg($sender, $message){
    require('/../database/connect.db.php');
    
    
    if(!empty($sender) && !empty($message)){
        
        
        
        $query="INSERT INTO chat.chat VALUES (null, '$sender', '$message', 0)";
        
        if($run=mysqli_query($connection, $query)){
            return true;
        }else{return false;}

    } else {return false;}
    
    
}


function ajout_visiteur(){
    require('/../database/connect.db.php');
           
            $distinct = mysqli_query($connection, "SELECT COUNT( DISTINCT Sender) as nombre FROM chat");
            $data=mysqli_fetch_assoc($distinct);
            $nombre = ((int) $data['nombre'])+1;
            $visit ='visiteur'.$nombre;
        $query="INSERT INTO chat.chat VALUES (null, '$visit', '',0)";
        
        $run=mysqli_query($connection, $query);
    
        $_SESSION['me']=$visit;
}



function cont_visiteur(){
    require('/../database/connect.db.php');
           
            $distinct = mysqli_query($connection, "SELECT COUNT( DISTINCT Sender) as nombre FROM chat");
            $data=mysqli_fetch_assoc($distinct);
            $nombre = ((int) $data['nombre']);
            $visit ='visiteur'.$nombre;
            return $visit;
        
       
            
}
$_SESSION['me']='visiteur5';

function list_visiteur(){
    require('/../database/connect.db.php');
            $_SESSION['me']=cont_visiteur();
            $me=$_SESSION['me'];
            
            $query ="SELECT DISTINCT Sender FROM chat WHERE (Sender <> '$me') ";
            $run=mysqli_query($connection, $query);
            $visiteurs=array();
            while($visiteur = mysqli_fetch_assoc($run)){
            $visiteurs[] = array('visiteur' => $visiteur['Sender']);
                }return $visiteurs;
}



?>