<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <script src="./js/popper.js"> </script>
    <script src="./js/bootstrap.js"> </script>

    
</head>

<body>


    <?php
    include "./navbar.php";
    
    echo "<h1>ยินดีต้อนรับเข้าสู่ลูปแห่งความวุ่นวาย</h1>" ;
    echo "<h2> $_SESSION[username]</h2>";
    


?>
    <?php
    echo "</br>" ?>
    <img src="./image/นายกหมีใจดี.png" height="250px">
    <img src="./image/คุณฟรออ๊อกนักการเมือง.png" height="250px">



</body>

</html>