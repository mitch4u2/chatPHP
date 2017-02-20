
    
 

    $("#visiteur").on("click","#vst", function(){
    var sender ;
    $('#actu').html($(this).find('.user').html());
     
        
        
  
});



  

 
    setInterval(function(){ 
    var sender = $('#actu').html();
    
      $.ajax({
            
    url : 'scripts/php/chat.php',
     data: { sender: sender},
    success : function(data) {
        
        $('#messages').html(data);
    }
    
    
});
    
    
        
        
        $.ajax({
    url : 'scripts/php/list.php',
    success : function(data) {
        
        $('#visiteur').html(data);
    }
    
    
});
        
        
    
    }, 2000);
      
      
    

    

    
    

