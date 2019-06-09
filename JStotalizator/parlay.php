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
              <h1>Ласкаво просимо, <?php echo $_COOKIE['username']; ?> </h1>
            </div>
      <form action="obr_parlays.php" method="POST" class="formm form_three">
        <input type="hidden">
          <?php 
						$dbc = mysqli_connect('localhost', 'mysql', 'mysql', 'total');
            //Виводимо Інпути
            $username_id = mysqli_real_escape_string($dbc, trim($_POST['nam']));
            $selectRacing = $_POST['select_racing'];
            $query1 = "SELECT $selectRacing FROM `$selectRacing`";
            $result1 = mysqli_query($dbc, $query1); 
            if($result1){
              $horse_count = 0;
              while ($row = mysqli_fetch_row($result1)){
                if ($row[0] != '' && $row[0] != '0') {
                  $horse_count = $horse_count + 1; 
                  echo ' <div class="parlay_item">
                  <input type="text" placeholder="' . $row[0] . '" name="' . $row[0] .'">
                  </div> ';
                }
              }
            }                       
          ?>		
  			<input type="hidden" name="nam" value="<?php echo $_COOKIE['username']; ?>">
  			<input type="hidden" name="selectRacing" value="<?php echo $selectRacing; ?>">
  			<button name="submit" type="submit" value="Вибрати">Поставити</button>
  			<div class="parlay_buttons">
          <a href="kind_of_parlays.php" class="parlay_button"> Назад </a>        
          <a href="exit.php" class="parlay_button">Вийти(<?php echo $_COOKIE['username']; ?>)</a>
        </div>
  		</form>
  	</div>
  </div>
</body>
</html>