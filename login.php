<?php
      include "./navbar.php";
    ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h1> เข้าสู่ระบบ </h1>
            <form action="check.php" method="POST">
                Username:
                <input type="text" name="username" class="form-control" placeholder="กรอกรหัสผู้ใช้" />
                Password:
                <input type="password" name="password" class="form-control" placeholder="กรอกรหัสผ่าน" />
                <input type="submit" value="Login" class="btn btn-primary " />
            </form>
        </div>
    </div>
</div>