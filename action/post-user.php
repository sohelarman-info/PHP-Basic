<?php 
session_start();
include_once "../function.php";
include_once "../db.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name       = $_POST['name'];
    $username   = $_POST['username'];
    $email      = $_POST['email'];
    $number     = $_POST['number'];
    $gender     = $_POST['gender'];
    $password   = md5($_POST['password']);
}

// if(!empty($name)){
//     $_SESSION['name_empty'] = 'Name is empty';
//     header('location:../add-user.php');
// }
$insert = "INSERT INTO user(name, username, email, number, gender, password) VALUES ('$name', '$username', '$email', '$number', '$gender', '$password')";

$query = mysqli_query($db, $insert);
if($query){
    $_SESSION['insert'] = "User successfully added";
    header('location:../user.php');
}else{
    echo "User Added Failed";
}

?>