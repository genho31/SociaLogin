<?php 

require __DIR__ . '/vendor/autoload.php';

  $config = array( 
    "base_url" => "http://localhost:8080/LoginSocial/src/hybrid.php",  
     "providers" => array (
        "Facebook" => array ( 
          "enabled" => true,
          "keys"    => array ( "id" => "722828277791447", "secret" => "8cdb30ce461f34ef7b9804630e2dd381" ), 
          "scope"   => "email, user_about_me, user_birthday, user_hometown" // optional
    )));    
    
    $hybridauth = new Hybrid_Auth( $config );
    
    $adapter = $hybridauth->authenticate( "Facebook" );  
    
    $user_profile = $adapter->getUserProfile(); 

    echo "<pre>";
    print_r($user_profile);