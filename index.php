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
        <link rel="stylesheet" href="lib/style/style-front.css">
        <script src="lib/script/login.js"></script>
    </head>
    <style>
        
        
    </style>
    <body >
        <div class="container">
            
            <center>
                
                 <img src="images/ph.jpg"/>
                 <h1>Phone Book</h1>

            <br/>
            <br/>
            <br/>
            <hr>
            <form action="login-action.php" method="POST" onsubmit="return valid()">
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
                         <input placeholder="password" type="password" name="password" id="password"/>
                    </td>  
                </tr>
                <tr>
                    <td>
                        
                    </td>
                    <td><button type="submit" name="submit">LOG IN</button></td>
                </tr>
                
            </table>
            </form>
            
            <p>  Not a member ? <a href="register.php">Create account now</a></p>
         </center>      
        </div>
    </body>
</html>
