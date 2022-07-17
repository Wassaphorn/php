<?php 
include "config.php";
$id = $_GET['id'];

// Attempt delete query execution
$sql = "DELETE FROM users WHERE id='$id'";
if(mysqli_query($link, $sql)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

?>