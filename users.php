<?php
include "navbar.php" ;
include "config.php";

$sql = "SELECT * from users";
$result = mysqli_query($link, $sql);
if(mysqli_num_rows($result) > 0){
   ?>
<div class="container">
    <table class="table">

        <?php
    echo "</br>" ?>
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Address</th>
        </tr>


        <?php
 while($row = mysqli_fetch_assoc($result)){
  ?>
        <tr>
            <td><?php echo"$row[username]"; ?></td>
            <td><?php echo "$row[password]"; ?></td>
            <td>
                <?php 
                echo "<a href='users_detail.php?id=$row[id]'>$row[firstname]</a>"; ?></td>
            <td><?php echo "$row[lastname]"; ?></td>
            <td><?php echo "$row[email]"; ?></td>
            <td><?php echo "$row[address]"; ?></td>


            <td>
                <a href="users_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"> Delete </a>
                <a href="users_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-info"> Edit </a>
            </td>

        </tr>
        <?php
 }
?>
    </table>
</div>

<?php
}else{
echo "ไม่พบข้อมูลที่เรียกหา";
}


mysqli_close();

?>