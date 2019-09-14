<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div style="text-align: center;
            font-size: 20px">
            <form action="index.php" method="POST">
          User Name:<input type="text" name="userName" value="" /><br>
          Password:<input type="text" name="password" value="" /><br>
          <input type="submit" value="OK" />
         
            </form>        
        </div>
        <?php
        // put your code here
        $userName = stripslashes($_POST['userName']);
        $password = stripslashes($_POST['password']);
        include_once 'dbConnection.php';
        $conn=new dbConnection();
        if($conn->verifyUser($userName, $password))
            header ("Location:admin.php");
        else 
            echo "ERROR ...."
        ?>
    </body>
</html>
