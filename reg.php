<?php
session_start();
include("connection.php");

$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
 
$sql = "SELECT * from account Where username = '$username'";
    $result = mysqli_query($conn, $sql);    
    $found = 0;
    while (mysqli_fetch_array($result)) {
        $found = 1;
    }
    if($found == 1){
        
         header("Location:invalid.php");
    }else{


$sql = "INSERT into account(username,password,name) VALUE ('$username','$password','$name')";
$result = mysqli_query($conn, $sql);
        
if(!$result){
    echo "Not Inserted";
}else{
    $_SESSION['username'] = $_POST['username'];
    header("Location:home.php");
}
    }

?>