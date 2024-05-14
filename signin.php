
<?php
if($_SERVER['REQUEST_METHOD'] == "POST" )
  {

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    if(!empty($email) && !empty($password) && !is_numeric($email))
    {
      $query = "insert into user(name,email,password) values('$name','$email','$password')";
      
      mysqli_query($conn, $query);

      echo"<script type='text/javascript'> alert('Succesfully Logged')</script>";
    }
    else
    {
      echo"<script type='text/javascript'> alert('Please enter valid information')</script>";
    }
  }
    ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div class="signup-container">
      <h2>Sign In</h2>
      <form method="POST" action="submit_survey.php">
        <input
          type="text"
          id="first_name"
          name="name"
          placeholder="Full Name"
          required
        />
        <input
          type="email"
          id="email"
          name="email"
          placeholder="Email"
          required
        />
        <input
          type="password"
          id="password"
          name="password"
          placeholder="Password"
          required
          minlength="8"
          maxlength="16"
        />
        <input href="./index.html" name="" type="submit" value="Submit" />
        <!-- <a href="./signin.php" type="submit" class="btn btn-primary mt-3 mb-3 col-5"> Sign in</a> -->
      </form>
    </div>
  </body>
</html>
