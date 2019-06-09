<?php
	$dbc = mysqli_connect('localhost', 'mysql', 'mysql', 'total') OR DIE('Ошибка подключения к базе данных');
	if(isset($_POST['submit'])){
		$username = mysqli_real_escape_string($dbc, trim($_POST['username']));
		$password1 = mysqli_real_escape_string($dbc, trim($_POST['password1']));
		$password2 = mysqli_real_escape_string($dbc, trim($_POST['password2']));
		if(!empty($username) && !empty($password1) && !empty($password2) && ($password1 == $password2)) {
			$query = "SELECT * FROM `signup` WHERE username = '$username'";
			$data = mysqli_query($dbc, $query);
			if(mysqli_num_rows($data) == 0) {
				$query ="INSERT INTO `signup` (username, password) VALUES ('$username', ('$password2'))";
				mysqli_query($dbc,$query);
				header('Location: signup.php');
				mysqli_close($dbc);
				exit();
			}
			else {
				echo 'Логин уже существует';
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Totalizator</title>
	<link rel="stylesheet" href="css/style.css">	
</head>
<body>
	<div class="wrapper">
		<p class="title">Курсова</p>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="signup_form">
		
		<input type="text" name="username" placeholder="Введіть Ваше ім'я">
		
		<input type="password" name="password1" placeholder="Введіть Ваш пароль">
		
		<input type="password" name="password2" placeholder="Введіть Ваш пароль ще раз">
		<button type="submit" name="submit">Реєстрація</button>
		</form>
	</div>
</body>
</html>