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
        <link rel="stylesheet" href="lib/style/records.css">
    </head>
  
    <body >
        <div class="container">
            <center>
                <a href="logout.php"><button class="tabs">LOG OUT</button></a>
                 <a href="records.php"><button class="tabs" style="color:black">RECORDS</button></a>
                 <a href="home.php"><button   class="tabs">ADD CONTACT</button></a>
             
            
             </center>
            <center>
                <h1>Phone Book</h1>
                 <img src="images/ph.jpg"/>
            </center>  
                 
                     
                 <center>
                     <div class="hold">
                              
                         
                         <table>
                     <tr>
                         <td class="head" style="width:200px; ">NAME</td>
                         <td class="head"style="width:70px; "> PROFILE</td>
                             <td class="head" style="width:180px;">EMAIL</td>
                             <td class="head" style="width:150px; ">CONTACT NO.</td>
                             
                             <td class="head" style="width:auto">ADDRESS</td>
                             <td class="head" style="width:auto;">NOTES</td>
                             <td class="head" style="width:80px; ">DELETE</td>
                             <td class="head" style="width:80px; ">UPDATE</td>
                 </tr>
                 <?php
                  include ("connection.php");                
                $query = "Select id,name,email,address,number,image,notes From contact Where username = '$_SESSION[username]' order by id DESC";
                $result = mysqli_query($conn, $query);    
                $count=0;
                
                if($result -> num_rows > 0){
                    while($row = $result -> fetch_assoc()){
                        echo"<tr>
                            <td>" . $row['name'] . "</td>
                        <td><img class='zoom' style='height:40px;width:68px' src='images/". $row['image'] ."'/></td>
                        
                        <td>" . $row['email'] . "</td>
                        <td>" . $row['number'] . "</td>
                        <td>" . $row['address'] . "</td>    
                        <td>" . $row['notes'] . "</td>
                                                     <td><a href='contact-delete.php?id=" . $row['id'] . "'><button name='id' style='background-color:#f26257' type='button'>DELETE</button></td></a>
                         <td><a href='update-contact.php?id=$row[id]&name=$row[name]&image=$row[image]&email=$row[email]&number=$row[number]&address=$row[address]&notes=$row[notes]'><button name='id' style='background-color: #5d98f0;' type='button'>UPDATE</button></td></a>
 </tr>";
                        $count = $count + 1;
    }                
}              
                ?>
              </table>
                     </div>
                     <p>Total contact(s):<?php echo $count?></p>
                     </center>
             
             
        </div>
    </body>
</html>
