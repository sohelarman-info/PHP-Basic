<?php 
session_start();
include_once "../function.php";
include_once "../db.php";

$id     = $_GET['id'];
$delete = "DELETE FROM user WHERE id = $id";
$query  = mysqli_query($db, $delete);

if($query){
    $_SESSION['delete'] = "User Deleted";
    header('location:../user.php');
}else{
    echo "User Delete Failed";
}
?>