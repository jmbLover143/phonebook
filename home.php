<!DOCTYPE html>
 <?php
  
include("connection.php");
session_start();
if($_SESSION['username'] == ""){
    header("Location:index.php");
}else{
    
if(isset($_POST['but_upload'])){
 
  $name = $_FILES['file']['name'];
   $target_dir = "images/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);
  
   $username = $_SESSION['username'];
  $n = $_POST['n'];
$address = $_POST['address'];
$email = $_POST['email'];
$notes = $_POST['notes'];
 $number = $_POST['number'];
   move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name); 
    
    // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");
  
   // Check extension
  if( in_array($imageFileType,$extensions_arr) ){       
      
      $sql = "Insert into contact(name,email,address,number,image,notes,username)VALUES('$n','$email','$address','$number','$name','$notes','$username')";
      $result = mysqli_query($conn, $sql);
    }
    if($result){
        header("Location:records.php");
    }
}
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Phone Book</title>
        <link rel="shortcut icon" href="images/ph.jpg">
        <link rel="stylesheet" href="lib/style/style-home.css">
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
            </center>  
            <form  method="POST" action="" enctype='multipart/form-data'  onsubmit="return validate()">
                
                     
                 <center>
                     <img class="add" src="images/add2.png">
                 <table>
                    <tr>
                        <td>Name:</td>
                        <td><input placeholder="Name" name="n" id="name"/></td>
                    </tr>
                     <tr>
                        <td>Email:</td>
                        <td><input placeholder="Email" name="email" id="email"/></td>
                    </tr>
                     <tr>
                        <td>Contact number:</td>
                        <td><input placeholder="Contact Number" name="number" id="number"/></td>
                    </tr>
                     <tr>
                        <td>Address:</td>
                        <td><input placeholder="Address" name="address" id="address"/></td>
                    </tr>
                    <tr>
                    <td><p>Select image: </p></td>
                    <td><input style="height:30px; " type='file' name='file' id="file" /></td>
            </tr>
            <tr>
                <td>Notes:</td>
                <td>
                    <input placeholder="Type notes" name="notes" id="notes"/>
                </td>
            </tr>
            <tr>
                        <td></td>
                        <td><input style="width:200px" type='submit' value='Save Contact' name='but_upload'></td>
                    </tr>
             </table>
                     </center>
            </form>
            
             
        </div>
    </body>
</html>
