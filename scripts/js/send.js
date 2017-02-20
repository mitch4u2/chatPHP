
$('#form_input').submit(function(){
    var me =$('#actu').html();
$('#snd').val(me);
    
    var message=$('#msg').val();
   /* var message='testfix';*/
    $('#msg').val('');
     var sender = $('#snd').val();
    
    $.ajax({
       url : 'scripts/php/send.php',
        data: { sender: sender, message: message},
        success: function(data) {
            
            $('#feedback').html(data);
           
            
        }
        
    });
    
   
    
    return false;
    
   
});