<?php
include "config.php";
$username = $_POST['username'];
$password= $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$address = $_POST['address'];


//select star ไม่ให้เมลซ้ำกัน

if(!empty($username) && !empty($password) && !empty($email)){

$sql = "INSERT INTO users
(username, password, firstname , lastname, email, address)
VALUES('$username','$password','$firstname','$lastname','$email','$address')";

if(mysqli_query($link, $sql)){
    echo "บันทึกให้แล้วนะ...ข้อมูลน่ะ";
}else{
    echo "ไม่สามารถบันทึกข้อมูลได้นะ";
}
}else{
    echo "คุณลืมกรอกข้อมูลบางช่องนะ!!!";
}

mysqli_close();


?>