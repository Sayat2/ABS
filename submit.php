<?php

   $connection = mysqli_connect('localhost','root','','abs_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $crsname = $_POST['crsname'];

      $request = " insert into abs_table(name, email, phone, address, crsname) values('$name','$email','$phone','$address','$crsname') ";
      mysqli_query($connection, $request);

      header('location:buy.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>