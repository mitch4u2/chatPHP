<?php
$db_host ='localhost';
$db_user ='root';
$db_pass ='';
$db_name ='chat';

$connection= mysqli_connect($db_host, $db_user, $db_pass);

if($connection= mysqli_connect($db_host, $db_user, $db_pass)){
    $feedback[]= 'Connection to database Server...<br/>';
if($database=mysqli_select_db($connection, $db_name)){
    
     $feedback[]= 'Database Has been Selected....<br/>';
    
}else{ $feedback[]='database was not found...<br/>';}
}else {$feedback[]= 'Unable to connect to Mysql Server...<br/>';}
?>