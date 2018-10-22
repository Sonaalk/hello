<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration Page for User</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="server.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Id</label>
  	  <input type="id" name="id" value="<?php echo $id; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Rollno</label>
  	  <input type="rollno" name="rollno" value="<?php echo $rollno; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Firstname</label>
  	  <input type="fname" name="fname">
  	</div>
  	<div class="input-group">
  	  <label>Lastname</label>
  	  <input type="lname" name="lname">
  	</div>
	  <div class="input-group">
  	  <label>Avg_Cgpa</label>
  	  <input type="cgpa" name="cgpa" value="<?php echo $cgpa; ?>">
  	</div>
	  <div class="input-group">
  	  <label>Major</label>
  	  <input type="major" name="major" value="<?php echo $major; ?>">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	
  </form>
</body>
</html>
