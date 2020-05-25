<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Age</label>
  	  <input type="text" name="age" value="<?php echo $age; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Sex</label>
  	  <input type="radio" name="gender" value="Male">Male</input>
  	  <input type="radio" name="gender" value="Female">Female</input>
  	</div>

  	<div class="input-group">
  	  <label>Phone Number</label>
  	  <input type="text" name="phone" value="<?php echo $phone; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Text Area</label>
  	  <textarea rows="4" cols="50" name="address" value="<?php echo $address; ?>"></textarea>
  	</div>





  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>




  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>