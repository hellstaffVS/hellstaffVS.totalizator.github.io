<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
	<script type="script" src="js/script.js"></script>
</head>
<body>
  <div class="wrap">
    <div class="parlay">
       <div class="h_title">
        <h1>Курсова робота 1-КТ-16, Козінця Е. Сахарчука В.</h1>
      </div>
		  <div class="h_title">
        <h1>Ласкаво просимо, <?php echo $_COOKIE['username']; ?> </h1>
      </div>
      <div class="form_four">
				<?php 
					$dbc = mysqli_connect('localhost', 'mysql', 'mysql', 'total');
          //Виводимо Інпути
          $username_id = mysqli_real_escape_string($dbc, trim($_POST['nam']));                      
          //Беремо Імена ставок
          $selectRacing = $_POST['selectRacing'];
          $query20 = "SELECT $selectRacing FROM `$selectRacing`";     
          $result20 = mysqli_query($dbc, $query20); 
          if($result20){
            while ($row = mysqli_fetch_row($result20)){
              if ($row[0] != '' && $row[0] != '0') {
                //Заносимо ставку в БД
                $sad = $row[0];
                $horse_sum = $_POST['' .$sad. ''];
                if ($horse_sum != '') {
                  $parlays_query ="INSERT INTO `parlays` (username, horse, sum, type)
                  VALUES ('$username_id', '$sad', '$horse_sum', '$selectRacing')";
                  mysqli_query($dbc,$parlays_query);
                  echo  '<p class="winner_count" >Ви поставили на ' . $sad . ', '. $horse_sum . 'грн.<br></p>' ;
                }
              }
            }
          }
        ?>
      <div class="obr_buttons">
        <a href="kind_of_parlays.php" class="button_prev"> Назад </a>     
        <a href="exit.php" class="obr_parlay_button">Вийти(<?php echo $_COOKIE['username']; ?>)</a>
      </div>
      <form action="result.php" method="POST">
        <input type="hidden" name="selectRacing" value="<?php echo $selectRacing; ?>">
        <input type="hidden" name="num" value="<?php echo $_COOKIE['username']; ?>">
        <p><button type="submit" class="result_button"> Результати</button></p>
      </form>
    </div>
    
    </div>
  </div>
</body>
</html>