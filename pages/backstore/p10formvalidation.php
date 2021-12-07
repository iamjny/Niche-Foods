<?php
$fname = $lname = $password = $email = "";
$errors = array('fname'=>'', 'lname'=>'', 'password'=>'', 'email'=>'');

if(_$SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["name"])) {
    $errors['fname'] = "First name is required";
  } else {
    $fname = $_POST["fname"];
	if(!preg_match('/^[A-Za-z\s]+$/',$fname))
        {
            $errors['fname'] = 'Illegal product title.';
        }
  }
  
  if (empty($_POST["last_name"])) {
    $errors['lname'] = "Last name is required";
  } else {
    $lname = $_POST["last_name"];
	if(!preg_match('/^[A-Za-z\s]+$/',$lname))
        {
            $errors['lname'] = 'Illegal product title.';
        }
  }
  
  if (empty($_POST["password"])) {
    $errors['password'] = "Password is required";
  } else {
    $password = $_POST["password"];
	if(!preg_match('/^[A-Za-z\s]+$/',$password))
        {
            $errors['password'] = 'Illegal product title.';
        }
  }
  
  $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
  if (empty($_POST["email"])) {
    $errors['email'] = "Email is required";
  } else {
	  $email = $_POST["email"];
	  if (!preg_match ($pattern, $email) ){  
		$errors['email'] = "Email is not valid."
  }
}
?>
