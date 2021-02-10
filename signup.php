<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="POST" action="" enctype="multipart/form-data"  autocomplete="off">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" >
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
	  
	  <label>Profile Picture</label>
        <div class="input-group">
            
            <input type="file" name="image">

        </div>
     
  	<div class="input-group">
  	  <button type="submit" class="btn" name="add">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
  <?php
if(isset($_POST['add'])){
    include('server.php');
    $username=$_POST['username'];
    $email=$_POST['email'];
	$password=$_POST['password'];
	$image = $_FILES['image']['name'];
	$image_temp = $_FILES['image']['tmp_name'];

	move_uploaded_file($image_temp,"profile/$image");
    $qry="INSERT INTO `signup`(`username`, `email`, `password`,`image`) VALUES ('$username','$email','$password','$image')";
    $run=mysqli_query($conn,$qry);
    if(!$run){
        ?><script>document.getElementById("demo").innerHTML = "Not Success";</script><?php
     }
    else{
         header('Location: login.php');
    }
}
?>
</body>
</html>
