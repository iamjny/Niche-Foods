<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
  	<link rel="stylesheet" type="text/css" href="../css/user.css">

    <title>Login</title>
  </head>

  <body>
    <div class="main">
      <div class="navbar">
        <h1 class="company_name">
          <i class="fa fa-spoon" aria-hidden="true"></i> Niche Foods
        </h1>
        <div>
          <a href="../index.php">Home</a>
          <a href="signup.php">Sign Up</a>
          <a href="login.php">
            <i class="fa fa-user-circle" aria-hidden="true"></i> Login
          </a>
          <a href="#">
            <i class="fas fa-shopping-basket"></i>
          </a>
          <a href="./backstore/inventory.php">Backstore</a>
        </div>
      </div>
      <div class="content">
        <div class="banner">
        </div>
        <div class="user">
          <div class="title">
            <h1>
              Log in
            </h1>
          </div>
        	<div class="form">
            <form action="process_login.php" method="POST">
                <span>
                  <strong>Please fill in this form to log in!</strong>
                </span>
                <br/><br/>
                <label>Username</label>
                <br/>
                <input type="text" name="username" placeholder="Username">
                <br/>
                <label>Password</label>
                <br/>
                <input type="password" name="password" placeholder="Password">
                <br/>
                Remember me
                <input type="checkbox" />
                <button type="submit">Login</button>
                <br/><br/>
            </form>
            <button class="forgot_password">Forgot password?</button>
                <br/><br/>
            <br/><br/>
          	<p>Dont have an account?
              <br/>
            	<a href="signup.php">Sign Up</a>
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
      <p>Mon-Fri 8:30 - 20:30</p>
    </div>
    <p class="text-center">&nbsp &copy; 2001-2021 Niche Foods</p>
  </footer>
</html>
