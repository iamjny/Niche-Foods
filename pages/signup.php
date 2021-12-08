<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" type="text/css" href="../css/index.css">
  	<link rel="stylesheet" type="text/css" href="../css/user.css">

    <title>Sign Up</title>
  </head>

  <body>
    <div class="main">
      <div class="navbar">
        <h1 class="company_name">
          <i class="fa fa-spoon" aria-hidden="true"></i> Niche Foods
        </h1>
        <div>
          <a href="../index1.html">Home</a>
          <a href="signup.html">Sign Up</a>
          <a href="login.html">
            <i class="fa fa-user-circle" aria-hidden="true"></i> Login
          </a>
          <a href="#">
            <i class="fas fa-shopping-basket"></i>
          </a>
          <a href="./backstore/inventory.html">Backstore</a>
        </div>
      </div>
      <div class="content">
        <div class="banner">
        </div>
        <div class="user">
          <div class="title">
            <h1>
              Sign Up
            </h1>
          </div>
        	<div class="form">
            <form action="process_signup.php" method="POST">
                <span>
                  <strong>Please fill in this form to create an account!</strong>
                </span>
                <br/><br/>
                <label>First Name</label>
                <br/>
                <input type ="text" name="first_name" placeholder="First name">
                <br/>
                <label>Last Name</label>
                <br/>
                <input type ="text" name="last_name" placeholder="Last name">
                <br/>
                <label>Email Address</label>
                <br/>
                <input type="email" name="email" placeholder="Email address">
                <br/>
                <label>Password</label>
                <br/>
                <input type="password" name="password" placeholder="Password">
                <br/>
                <label>Confirm Password</label>
                <br/>
                <input type="password" name="cnf_password" placeholder="Confirm Password">
                <br/>
                <input style="width: 5%;" type="checkbox">
                <label>I have read the terms and conditions</label>
                <br/><br/>
                <button type="submit">Sign up</button>
            </form>
            <br/><br/>
          	<p>Already have an account?
              <br/>
            	<a href="login.html">Log In</a>
            </p>
        	</div>
        </div>
      </div>
    </div>
  </body>

  <footer>
    <div class="text">
    <h3>Niche Foods</h3>
      <p>Premium niche foods cultivated from local sources at affordable prices</p>
      <p>2475 Rue des Regrattiers, Montréal, QC H1Z 4P2</p>
      <p>Mon-Fri  8:30 - 20:30</p>
    </div>
    <p class="text-center">&nbsp &copy; 2001-2021 Niche Foods</p>
  </footer>
</html>
