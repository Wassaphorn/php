<?php
   include "config.php";
   $username = $_POST['username'];
   $password = $_POST['password'];
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $email = $_POST['email'];
   $address = $_POST['address'];

   $filename = $_FILES["uploadfile"]["name"];
   $tempname = $_FILES["uploadfile"]["tmp_name"];
   $folder = "./photo/" . $filename;
//select star ไม่ให้เมลซ้ำกัน

if(!empty($username) && !empty($password) && !empty($email)){
    $sql = "INSERT INTO users(username, password, firstname, lastname, email, address, filename)
       VALUES('$username','$password','$firstname','$lastname','$email', '$address', '$filename')";
   
        if( mysqli_query($link, $sql) ){
          
          if (move_uploaded_file($tempname, $folder)) {
            echo "บันทึกให้แล้วนะ...ข้อมูลน่ะ";
          } else {
            echo "ไม่สามารถบันทึกไฟล์ได้";
          }
          
            header("location: users.php");
        }else{
            echo "ไม่สามารถบันทึกข้อมูลได้นะ";
        }
   }else{
     echo "กรุณากรอกอข้อมูลให้ครบนะ!!!";
   }

   mysqli_close();
?>