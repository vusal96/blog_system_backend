<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="bootstrap.css">
</head>

	<style>
		body{

			background: #EDEFF0;
		}
		button{
			padding: 10px 50px;
			background: #6ea038;
			outline: none;
			text-decoration: none;
			margin: 20px 0;
			border-radius: 5px;
			color: white;
		}
		
		img, button, p, h3{
			text-align: center;
		}
		img{
			border-radius: 100%;
			border: 3px solid lightblue;
			margin-top: 10px;
		}
		input{
			display: block;
			width: 90%;
			margin: 10px 0 0 15px;
			padding: 5px;
			border-radius: 5px;
		}
		

		#admin{
			border-radius: 5px;
			background: white;
			text-align: center;
			margin-top: 30px;
			color : #7F8FA4
		}
		p{
			margin: 0px 0 20px 0;
		}
		

	</style>

<body>

	<?php 

		session_start();
		if(isset($_SESSION['ready'])){
			header('Location:../crud/index.php');
		}

	 ?>

	<div class="container">
		<div class="col-md-4 col-md-offset-4">
			<div id="admin">
				<img src="image.png">
				<h3>Admin Login</h3>
				<p>Sign in to your account</p>
				<form action="check.php" method="post">
					<input type="text" placeholder="Email Adress" name="email">
					<input type="password" placeholder="Password" name="password">
					<button type="submit" name="submitCheck">Sign in</button>
				</form>
				
			</div>
		</div>
	</div>

	<?php 

		if (isset($_SESSION['checkmsg'])) {
			?>
			<div class="alert alert-danger $_SESSION['type] ?>">
				<p><?= $_SESSION['checkmsg'] ?></p>
			</div>
			<?php
			unset($_SESSION['checkmsg']);
			unset($_SESSION['type']);
		}
	?>
	<?php 

		if (isset($_SESSION['checkmsg1'])) {
			?>
			<div class="alert alert-danger $_SESSION['type] ?>">
				<p><?= $_SESSION['checkmsg1'] ?></p>
			</div>
			<?php
			unset($_SESSION['checkmsg1']);
			unset($_SESSION['type']);
		}
	?>
	<?php 

		if (isset($_SESSION['checkmsg2'])) {
			?>
			<div class="alert alert-danger $_SESSION['type] ?>">
				<p><?= $_SESSION['checkmsg2'] ?></p>
			</div>
			<?php
			unset($_SESSION['checkmsg2']);
			unset($_SESSION['type']);
		}
	?>
	
</body>
</html>
