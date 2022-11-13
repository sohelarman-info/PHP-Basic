<?php 
session_start();
include_once '../db.php';


if($_SERVER['REQUEST_METHOD'] == "POST"){
    $id         = $_POST['id'];
    $name       = $_POST['name'];
    $username   = $_POST['username'];
    $email      = $_POST['email'];
    $number     = $_POST['number'];
    $gender     = $_POST['gender'];
    $password   = md5($_POST['password']);
}

$select = "SELECT * FROM user WHERE id = $id";
$query = mysqli_query($db, $select);

$update = "UPDATE user SET name = '$name', username = '$username',  email = '$email', number = '$number', gender = '$gender', password = '$password' WHERE id = $id";
$update_query = mysqli_query($db, $update);

if($update_query){
    $_SESSION['insert'] = 'User Updated';
    header('location:../user.php');
}

?>