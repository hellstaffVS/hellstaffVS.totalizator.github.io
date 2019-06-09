<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Курсова робота 1-КТ-16, Козінця Е. Сахарчука В.</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php  
	$dbc = mysqli_connect('localhost', 'mysql', 'mysql', 'total');
  $username_id = $_COOKIE['username'];
	$selectRacing = $_POST['selectRacing'];
	$winner_name = "SELECT winner FROM kind_of_racing WHERE kind = '$selectRacing'";
  $resultWinner = mysqli_query($dbc, $winner_name) or die("ОшибкаМаржи ");
  while ( $row9 = mysqli_fetch_row($resultWinner) ) {
    $winner_horse_name = $row9[0];
  }
  mysqli_free_result($resultWinner);  
  // отримуємо виграшного коня
	$query8 = "SELECT sum FROM parlays WHERE horse = '$winner_horse_name' AND  username = '$username_id' AND type = '$selectRacing'";
	$result8 = mysqli_query($dbc, $query8) or die("Ошибка36 ");
	while ( $row8 = mysqli_fetch_row($result8) ) {
	  $count_winner = $count_winner + $row8[0];
	}
	mysqli_free_result($result8);
	// отримуємо ставку поточного юзера на даного коня
	$query8 = "SELECT sum FROM parlays WHERE horse = '$winner_horse_name' AND type = '$selectRacing'";
	$result8 = mysqli_query($dbc, $query8) or die("Ошибка36 ");
	while ( $row8 = mysqli_fetch_row($result8) ) {
	  $count_all_wim_horse = $count_all_wim_horse + $row8[0];
	}
	mysqli_free_result($result8);
	// сума виграшного коня поставлена усіма юзерами
	$query9 = "SELECT sum FROM parlays WHERE type = '$selectRacing'";
	$result9 = mysqli_query($dbc, $query9) or die("Ошибка36 ");
	$count_all = 0;
	while ( $row9 = mysqli_fetch_row($result9) ) {
	  $count_all = $count_all + $row9[0];
	}
	mysqli_free_result($result9);
	// вся сума поставлена на перегони
	$sum_margi = "SELECT marzha FROM kind_of_racing WHERE kind = '$selectRacing'";
	$resultMarzha = mysqli_query($dbc, $sum_margi) or die("ОшибкаМаржи ");
	while ( $row9 = mysqli_fetch_row($resultMarzha) ) {
	  $summ_margi = $row9[0];
	}
	mysqli_free_result($resultMarzha);
	// отримуємо суму маржі
	$result_your_sum = $count_all * (1 - $summ_margi) / $count_all_wim_horse * $count_winner;
?>
<div class="wrap result_wrap">
		<h1  class="winner_count_result" >Ласкаво просимо, <?php echo $_COOKIE['username']; ?> </h1>
		<p class="winner_count_result"  style="padding-top: 20px" >Тип перегонів - <?php echo $selectRacing; ?></p>
		<p class="winner_count_result" >Переможець - <?php echo $winner_horse_name ?></p>
		<p  class="winner_count_result" style="padding-top: 20px" >Сума поставлена всіма гравцями - <?php echo $count_all; ?></p>
		<p class="winner_count_result" >Сума поставлена Вами на виграшного коня - <?php echo $count_winner ?></p>
		<p class="winner_count_result" >Сума поставлена всіма гравцями на виграшного коня - <?php echo $count_all_wim_horse ?></p>
		<p class="winner_count_result" >Ваш виграш - <?php echo $result_your_sum ?></p>
	</div>
</body>
</html>