<?php






?>



<script>

$.ajax({
         type: 'post',
         url: 'main.php',
         data: {
        
         
         },
         success: function (msg) {
         
      $("#tf").hide();


         alert(msg);

           alert('Please Login First');
         
    window.location='login.php';

   
         
       

         } 
         }); 
      





</script>