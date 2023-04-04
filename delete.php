<?php
include('db.php');
$id = $_GET['id'];
$sql="delete from php where s_no = '$id'";
$result = mysqli_query($conn,$sql);
if($result){
    echo "failed";
    header("Location:fatch.php");
}


?>