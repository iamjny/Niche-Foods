<?php

$email          =  $_POST["email"];
$password       =  $_POST["password"];
$last_name      =  $_POST["last_name"];
$username       =  $_POST["first_name"];
$first_name     =  $_POST["first_name"];
$cnf_password   =  $_POST["cnf_password"];

if (isset($email) && !empty($email) && isset($password) && !empty($password) && isset($last_name) && !empty($last_name) && isset($first_name) && !empty($first_name) && isset($cnf_password) && !empty($cnf_password)) {
    
    $flag = true;
    
    $xml=simplexml_load_file("users.xml") or die("Error: Cannot create object");
    
    foreach($xml->children() as $user) {

        if($user->username == $username && $user->password == $password){
            // User is alredy exsit
            $flag = false;
            echo "User is alredy registred...";
            // header("Location: http://localhost/NicheFoods/");
        }
    }

    if($flag){
        $content = file_get_contents("users.xml");
        $sxe = new SimpleXMLElement($content);

        $user = $sxe->addChild('user');
        $user->addChild('username',$first_name);
        $user->addChild('password', $password);
        $user->addChild('firstName', $first_name);
        $user->addChild('lastName', $last_name);
        $user->addChild('email', $email);
        $user->addChild('isadmin', 'false');
        
        $dom = new DOMDocument;
        $dom->preserveWhiteSpace = FALSE;
        $dom->formatOutput = TRUE;
        $dom->loadXML($sxe->asXML());

        //Save XML as a file
        $dom->save('users.xml');

        echo "User registred successfully...";
        // Redirect Code
    }
   
    

}