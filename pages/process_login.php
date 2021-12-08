<?php

$username =  $_POST["username"];
$password =  $_POST["password"];

if (isset($username) && !empty($username) && isset($password) && !empty($password)) {

    $xml=simplexml_load_file("users.xml") or die("Error: Cannot create object");
    
    foreach($xml->children() as $user) {

        if($user->username == $username && $user->password == $password && $user->isadmin == "true"){
            // User is Admin
            // echo "User is Admin";
            header("Location: http://localhost/NicheFoods/pages/backstore/inventory.html");
        } else if($user->username == $username && $user->password == $password){
            // User is Normal
            // echo "User is normal user";
            header("Location: http://localhost/NicheFoods/");
        }
    }
    echo "Invalid Username or password";
}