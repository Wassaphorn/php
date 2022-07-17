<?php
   include "config.php";
   $id = $_GET['id'];
   $sql = "SELECT * FROM users WHERE id='$id'";
   $result = mysqli_query($link, $sql);
   $row = mysqli_fetch_array($result);

?>


<?php
    include "./navbar.php";
    ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 style="color:red" class="text-center"> แก้ตัวแก้ไตแก้ไขข้อมูล </h1>


            <form action="users_update.php" method="POST">
            <input type="hidden" name="id" class="form-control"  value="<?php echo $row['id']; ?>" />
            Username:
                <input type="text" name="username" class="form-control"value="<?php echo $row['username']; ?>" />
                Password:
                <input type="text" name="password" class="form-control"value="<?php echo $row['password']; ?>"/>
                ชื่อ:
                <input type="text" name="firstname" class="form-control"value="<?php echo $row['firstname']; ?>" />
                นามสกุล:
                <input type="text" name="lastname" class="form-control"value="<?php echo $row['lastname']; ?>" />
                email:
                <input type="text" name="email" class="form-control"value="<?php echo $row['email']; ?>" />
                ถิ่นที่อยู่:
                <textarea name="address" row="4" class="form-control"><?php echo $row['address']; ?></textarea>

                <div class="pt-2 d-grid">
                    <input type="submit" value="แก้ไขข้อมูลจากอดีต" class="btn btn-primary" />
                </div>
            </form>

            <div class="text-center">
                <br />
                <a href="./index.php"> ยุ่งยากเกินไปอีกแล้ว!!!...กลับหน้าบ้าน </a>
                <br />
                <img src="./image/ลุงแซลมอน.png" height=250px>

            </div>

        </div>
    </div>
</div>