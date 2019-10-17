<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Encryption
 *
 * @author aashgar
 */
class Encryption {
   // Using AES
    public function aesCrypt($data, $action='e') {
        $encryptMethod = 'AES-256-CBC';
        $key = hash('sha1','aashgar secret key');
        $iv = hash('md5','aashgar secret iv');
        if($action == 'e')
            $out = openssl_encrypt($data, $encryptMethod, $key, 0, $iv);
        else if($action == 'd')
            $out = openssl_decrypt ($data, $encryptMethod, $key, 0, $iv);        
        return $out;  
    }
    
  // Using RSA
    public function generateKey() {
        $config = array(
            "digest_alg" => "sha512",
            "private_key_bits" => 1024,
            "private_key_type" => OPENSSL_KEYTYPE_RSA,
        );
      $res = openssl_pkey_new($config);
      openssl_pkey_export($res, $private);
      $public = openssl_pkey_get_details($res);
      file_put_contents('private.key', $private);
      file_put_contents('public.key', $public['key']);  
    }
    
    public function retrieveKey() {
        $private = file_get_contents('private.key');
        $public = file_get_contents('public.key');
        return array('private'=>$private, 'public'=>$public);
    }
    
    public function rsaCrypt($data,$private, $public, $method='1',$action='e') {
        $out = 'Hello';
        if($method == 1){
            if($action=='e')
                openssl_private_encrypt($data, $out, $private);
            else if ($action=='d')           
                openssl_public_decrypt($data, $out, $public);
        }
        else if($method == 2){
            if($action=='e')
               openssl_public_encrypt($data, $out, $public);
            else if ($action=='d')
            openssl_private_decrypt($data, $out, $private);
        }
        return $out;
    }    
}
