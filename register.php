<?php include('database.php') ?>

<html>
<head>
	<title>Create user</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Registeration</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="uname" value="<?php echo $uname; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="upassword_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="upassword_2">
		</div>
		
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="uemail" value="<?php echo $uemail; ?>">
		</div>
		
		<div>
			<label>Type</label>
			<br>
			&nbsp;&nbsp;<input type="radio" name="utype" value="1"<?php echo $utype1;?>>admin<br>
			&nbsp;&nbsp;<input type="radio" name="utype" value="2"<?php echo $utype2;?>> hod<br>
			&nbsp;&nbsp;<input type="radio" name="utype" value="3"<?php echo $utype3;?>> faculty<br>
			&nbsp;&nbsp;<input type="radio" name="utype" value="4"<?php echo $utype4;?>> student<br>
			
		</div>
		<div>
			<label>Department</label>
			<br>
			
			&nbsp;&nbsp;<input type="radio" name="udept" value="cse"<?php echo $udeptcse;?>>CSE<br>
			&nbsp;&nbsp;<input type="radio" name="udept" value="it"<?php echo $udeptit;?>>IT<br>
			&nbsp;&nbsp;<input type="radio" name="udept" value="ece"<?php echo $udeptece;?>> ECE<br>
			&nbsp;&nbsp;<input type="radio" name="udept" value="eee"<?php echo $udepteee;?>> EEE<br>
			
			
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