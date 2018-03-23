    
      <?php
      if(isset($_POST['submit'])){}
         $to = "xyz@somedomain.com";
         $subject = $_POST['subject'];
         
         $message = $_POST['message'];

         
         $result = mail ($to,$subject,$message);
         
         if( $result == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      }
      else{
         
      }
      ?>
