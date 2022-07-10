<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT</title>
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <script src="./js/popper.js"> </script>
    <script src="./js/bootstrap.js"> </script>

</head>

<body>

    <?php
    include "./navbar.php";

    ?>


    <div class="container"> <img src="./image/นายกหมีใจดี.png" height="250px"> <img
            src="./image/คุณฟรออ๊อกนักการเมือง.png" height="250px">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h1> เข้าสู่ระบบ </h1>
                <form action="check.php" method="POST">
                    Username:
                    <input type="text" name="username" class="form-control" placeholder="ใส่ชื่อจ้า" />

                    Password:
                    <input type="password" name="password" class="form-control" placeholder="ใส่รหัสผ่านนะ" />
                    <input type="submit" value="login" class="btn btn-primary" />
                </form>
            </div>
        </div>
    </div>

</body>

</html>