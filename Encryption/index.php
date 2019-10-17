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
        $password = 'abc123';
        // Experimenting hash
        echo 'MD5:'.md5($password) . '<br>';
        echo 'MD5:'.hash('md5',$password) . '<br>';
        echo 'SHA-1:'.sha1($password) . '<br>'; 
        echo 'SHA-1:'.hash('sha1',$password) . '<br>';
        echo 'MD-128:'.hash('ripemd128',$password) . '<br>';
        echo 'SHA-256:'.hash('sha256',$password) . '<br>';
        echo 'SHA-512:'.hash('sha512',$password) . '<br>';        
        $b64 = base64_encode($password);
        echo 'B64:'.$b64 . '<br>';
        echo 'Plain:'.base64_decode($b64) . '<br>';
        
        include_once 'Encryption.php';
        $encryption = new Encryption();
        // Applying AES technique
        $aesHash = $encryption->aesCrypt($password, 'e');
        echo $aesHash . '<br>';
        $aesPlain = $encryption->aesCrypt($aesHash, 'd');
        echo $aesPlain . '<br>';
        
        // Applying RSA technique
        $encryption->generateKey();
        $keys = $encryption->retrieveKey();
        $rsaCipher=$encryption->rsaCrypt('abc123', $keys['private'], $keys['public'], 1, 'e');
        echo $rsaCipher. '<br>';
        $rsaPlain=$encryption->rsaCrypt($rsaCipher, $keys['private'], $keys['public'], 1, 'd');
        echo $rsaPlain. '<br>';
        ?>
    </body>
</html>
