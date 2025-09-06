<?php 

if(isset($_POST['email'])){
  $email_address = $_POST['email'];
  echo "Your email is: " . $email_address;
}


?>