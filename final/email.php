<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Email</title>
  </head>
  <body>
    <?php
    ini_set('display_errors',1);
    ini_set('smtp_port',25);
      if(!isset($_POST['submit'])){
        echo "Error; the form must be submitted";
      }
      $name = $_POST['Name'];
      $visitor_email = $_POST['email'];
      $message = $_POST['Post'];

      if(empty($name)||empty($visitor_email)){
        echo "Name and email must be entered";
        exit;
      }
      $email_from = "cahern3@fordham.edu";
      $email_subject = "Email from DCC";
      $email_body = "You have recieved an email from $name.\n".
                    "Email Address: $visitor_email\n".
                    "The message:\n $message".

      $to = "cahern3@fordham.edu";
      $headers = "From: $email_from";

      $mail=mail($to,$email_subject,$email_body,$headers);
      if($mail){
          echo "Thank you for using our mail form";
        }else{
          echo "Mail sending failed.";
        }
     ?>

  </body>
</html>
