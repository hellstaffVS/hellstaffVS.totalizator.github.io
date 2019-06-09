<?php
$dbc = mysqli_connect('localhost', 'mysql', 'mysql', 'total');
if(!isset($_COOKIE['user_id'])) {
	if(isset($_POST['submit'])) {
		$user_username = mysqli_real_escape_string($dbc, trim($_POST['username']));
		$user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));
		 if(!empty($user_username) && !empty($user_password)) {
			$query = "SELECT `user_id` , `username` FROM `signup` WHERE username = '$user_username' AND password = ('$user_password')";
				$data = mysqli_query($dbc,$query);

					if ($user_username == 'Admin' && $user_password == 'Admin') {
						$row = mysqli_fetch_assoc($data);
						setcookie('user_id', $row['user_id'], time() + (60*60*24*30));
						setcookie('username', $row['username'], time() + (60*60*24*30));
						$home_url = 'http://' . $_SERVER['HTTP_HOST'];
						header('Location: admin.php');
					}

				 else if(mysqli_num_rows($data) == 1) {
				$row = mysqli_fetch_assoc($data);
				setcookie('user_id', $row['user_id'], time() + (60*60*24*30));
				setcookie('username', $row['username'], time() + (60*60*24*30));
				$home_url = 'http://' . $_SERVER['HTTP_HOST'];
				header('Location: kind_of_parlays.php');
			}
			else {
				echo 'Неправильні логін чи пароль';
			}	
		}
		else {
			echo 'Неправильні логін чи пароль';
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
		<?php
			if(empty($_COOKIE['username'])) {
		?>	
			<p class="title">Курсова</p>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="signup_form">
				
				<input type="text" name="username" placeholder="ВВЕДІТЬ ВАШЕ ІМ'Я">
				
				<input type="password" name="password" placeholder="ВВЕДІТЬ ВАШ ПАРОЛЬ">
				<button type="submit" name="submit">Вхід</button>
			</form>
		<?php
			}
			else {
		?>
			<div class="buttons">
				<p><a href="kind_of_parlays.php">Зробити ставку</a></p>
				<p><a href="exit.php">Вийти(<?php echo $_COOKIE['username']; ?>)</a></p>
			</div>
		<?php	
			}
		?>
	</div>
</body>
</html>