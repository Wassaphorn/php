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
    echo "ยินดีต้อนรับเข้าสู่ลูปแห่งความวุ่นวาย" ;
    echo "<h1> Welcome stranger </h1>" ;
    echo "<a href=' ./about.php'> เกี่ยวกับเฮา </a> "."<br/>";
    
    $year = 2565;
    $crish = $year -543;
    echo "ปี พ.ศ. $year ค.ศ. $crish <br/> ";
    echo "ปี พ.ศ.". $year . " ปี ค.ศ. ".$crish. "<br/>" ;

   echo "<br/>" ;
    $salary = 99999;
    echo "เงินเดือน $salary บาท <br/>";
    echo "เงินเดือน". $salary . "บาท";
    echo $year;

    echo "<br/>" ;
    $name ="คุณปลาตุ๊ต๊ะ";
    $age = 99;

    echo "สวัสดี" . $name ;
    echo "<br/>" . "คุณมีอายุ" . $age. "ปี" ;

    $birth = $year - $age;
    echo "<br/>" ;
    echo "พ.ศ. เกิด" . $birth  ;

    echo "<br/>";
define("WEBBY","http://wassaphorn.com");
echo "ลิงก์ไปยัง". WEBBY;


?>



</body>

</html>