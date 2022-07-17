<?php
  include "config.php";
  $id = $_POST['id'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $address = $_POST['address'];

  $sql = "UPDATE users SET username='$username', password='$password', firstname='$firstname', lastname='$lastname', email='$email', address='$address' WHERE id='$id'";
  if(mysqli_query($link, $sql)){
    echo "Records were updated successfully.";
     
  } else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }
 
mysqli_close($link);

?>