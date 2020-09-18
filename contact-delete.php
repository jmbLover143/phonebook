<!DOCTYPE html>
 <?php
  
include("connection.php");
session_start();
if($_SESSION['username'] == ""){
    header("Location:index.php");
} 
   
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Phone Book</title>
        <link rel="shortcut icon" href="images/ph.jpg">
        <link rel="stylesheet" href="lib/style/delete.css">
        <script src="lib/script/home.js"></script>
       
    </head>
  
    <body >
        <div class="container">
            <center>
                <a href="logout.php"><button class="tabs">LOG OUT</button></a>
                 <a href="records.php"><button class="tabs">RECORDS</button></a>
                 <a href="home.php"><button style="color:black"  class="tabs">ADD CONTACT</button></a>
             
            
             </center>
            <center>
                <h1>Phone Book</h1>
                
                 <img src="images/ph.jpg"/>
                   <?php
              
              include ('connection.php');

 $id = $_REQUEST['id'];

$sql = "select * from contact where id= '$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);


$name = $row['name'];
$email = $row['email'];
$number = $row['number'];
$address = $row['address'];
$notes = $row['notes'];
 
$image = $row['image'];
 
?>
            </center>  
            <form  method="POST" action=""  >    
                <input type="hidden" value="<?php echo $id?>"/>
                 <center>

                     <img style="margin-right: -0px" class="add" src="images/<?php echo $image?>">
                     <table style=" ">
                     
                    <tr>
                        <td>Name:</td>
                        <td><input value="<?php echo $name?>"></td>
                    </tr>
                     <tr>
                        <td>Email:</td>
                        <td><input value="<?php echo $email?>"></td>
                    </tr>
                     <tr>
                        <td>Contact number:</td>
                        <td><input value="<?php echo $number?>"></td>
                    </tr>
                     <tr>
                        <td>Address:</td>
                        <td><input value="<?php echo $address?>"></td>
                    </tr>
                    
            <tr>
                <td>Notes:</td>
                <td>
                    <input value="<?php echo $notes?>">
                </td>
            </tr>
            <tr>
                        <td></td>
                        <td><button style="background-color: #f26257" class=""><a style="" href="del-action.php?id=<?php echo $id?>">DELETE</a></button> 
                            <button><a href="records.php">CANCEL</a></button>
 </tr>
             </table>
                     </center>
            </form>
            
             
        </div>
    </body>
</html>
