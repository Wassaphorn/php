<?php
 session_start();
 session_destroy(); //เลิกpassword
header("location: index.php") //กลับindex
?>