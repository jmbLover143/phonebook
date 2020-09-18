<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Phone Book</title>
        <link rel="shortcut icon" href="images/ph.jpg">
        <link rel="stylesheet" href="lib/style/style-register.css">
        <script src="lib/script/register.js"></script>  
    </head>
    
    <body >
        <div class="container">
            
            <center>
                
                 <img src="images/ph.jpg"/>
                 <h1>Phone Book</h1>
            <br/>
            <br/>
            <br/>
            <hr>
           
            <form action="reg.php" method="POST" onsubmit="return valid()">
                <table>
                <tr>
                    <td>
                        username:
                    </td>
                    <td>
                        <input placeholder="username" type="text" name="username" id="username"/>
                    </td>
                        
                </tr>
                <tr>
                    <td>
                        password:
                    </td>
                     <td>
                         <input placeholder="password" type="text" name="password" id="password"/>
                    </td>  
                </tr>
                <tr>
                    <td>
                        Name:
                    </td>
                     <td>
                         <input placeholder="Name" type="text" name="name" id="name"/>
                    </td>  
                </tr>
                <tr>
                    <td>
                        
                    </td>
                    <td><button type="submit" name="submit">REGISTER NOW</button></td>
                </tr>
            </table>
            </form>
            
            <p>  Already account ? <a href="index.php">Log In now</a></p>
         </center>      
        </div>
    </body>
</html>
