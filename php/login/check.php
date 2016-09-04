<?php 

	if (isset($_POST['submitCheck'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	session_start();
		if (!empty($email) && !empty($password)) {
			if ($email == 'admin') {
				if ($password == 'admin' ) {
					$_SESSION['login']=true;
					header('Location:../crud/index.php');
				
				}else{
					$_SESSION['checkmsg2'] = 'Parol yanlisdir';
					header('Location:index.php');
				}
			}else{
				$_SESSION['checkmsg1'] = 'Email yanlisdir';
				header('Location: index.php');
			}
			
		}else{
			
			$_SESSION['checkmsg'] = 'Butun xanalari doldurun!';
			header('Location:index.php');
		}
	}else{
		header('Location:index.php');
	}

 ?>