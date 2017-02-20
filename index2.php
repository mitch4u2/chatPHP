<!DOCTYPE html>
      <?php
require('includes/functions/chat.func.php');    
   ajout_visiteur();
      echo 'tu es '.$_SESSION['me'];
    
?>
<html >
  <head>
    <meta charset="UTF-8">
    <title>REDUP TEST</title>
    
    
    <link rel="stylesheet" href="css/normalize.css">

    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>
        
  

    	<div class="ui">
		<div class="left-menu">
				<form action="#" class="search">
					<input placeholder="search..." type="search" name="" id="">
					<input type="submit" value="&#xf002;">
				</form>
				<menu id ="visiteur" class="list-friends">
					
				</menu>
		</div>
		<div class="chat">
			<div class="top">	
				<div class="avatar">
					<img width="50" height="50" src="https://pbs.twimg.com/profile_images/1675322379/r-red-black_400x400.png">
				</div>
				<div class="info">
					<div id="actu" class="name"></div>
					<div class="count">online</div>
				</div>
				<i class="fa fa-star"></i>
			</div>
			<ul id="messages" class="messages">
				
			</ul>
			
			
			
			<form action="#" method="post" id="form_input">
       
       
           <div class="write-form">
				<textarea placeholder="Type your message"  name="msg"   id="msg" rows="2"></textarea>
				<i class="fa fa-picture-o"></i>
				<i class="fa fa-file-o"></i>
				
                    <input type="hidden" name="snd"   id="snd">
				<!--<span class="send">Send</span>-->
				 <input class="send" type="submit" name="send" value="Send" id="send">
				 
			</div>
            </form>
			
		
		</div>
	</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/nicescroll/3.5.4/jquery.nicescroll.js'></script>

        <script src="js/index.js"></script>
       
<script type="text/javascript" src="scripts/js/autochat.js"></script>
<script type="text/javascript" src="scripts/js/send.js"></script>

    
    
    
  </body>
</html>
