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
        <?php
        // put your code here
        $password = 'abc123';
        echo md5($password) . '<br>';
        echo sha1($password) . '<br>';
        echo hash('md5',$password) . '<br>';
        echo hash('sha1',$password) . '<br>';
        echo hash('ripemd128',$password) . '<br>';
        printf("%s\n",hash('ripemd128',$password));
        printf("%s\n",hash('sha256',$password));
        printf("%s\n",hash('sha512',$password));
        $b64 = base64_encode($password);
        echo $b64 . '<br>';
        echo base64_decode($b64) . '<br>';
        
        include_once 'Encryption.php';
        $encryption = new Encryption();
       // $aesHash = $encryption->aesCrypt($password, 'e');
        //echo $aesHash . '<br>';
       // $aesPlain = $encryption->aesCrypt($aesHash, 'd');
       // echo $aesPlain . '<br>';
       $encryption->generateKey();
        //$keys = $encryption->retrieveKey();
        //echo $encryption->rsaCrypt('abc123', $keys['private'], $keys['public'], 1, 'e') . '<br>';
        //echo 'AnyTest';
        ?>
    </body>
</html>
