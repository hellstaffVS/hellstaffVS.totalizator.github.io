<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Курсова робота 1-КТ-16, Козінця Е. Сахарчука В.</title>
	<link rel="stylesheet" href="css/style.css">
	<script type="script" src="js/script.js"></script>
</head>
<body>
		<div class="parlay">
			<div class="h_title">
        <h1>Ласкаво просимо, <?php echo $_COOKIE['username']; ?> </h1>
      </div>
      <!-- обрати тип ставок -->
      <form action="parlay.php" method="POST" class="form_two">
      <select name="select_racing" class="select_racing">
        <?php 
          $dbc = mysqli_connect('localhost', 'mysql', 'mysql', 'total');
          $sql = "SHOW COLUMNS FROM horses"; 
          $query1 = "SELECT kind FROM `kind_of_racing`";
          $result1 = mysqli_query($dbc, $query1); 
          if($result1)
          {
            while ($row = mysqli_fetch_row($result1))
            {
               echo '<option id="'; 
               echo $row[0] . '" name="';
               echo $row[0] .'">' . $row[0] . '</option>';
            }
          }    
        ?>
      </select>
      <button id="btn_two" type="submit" value="POST">Вибрати</button>
      <p><a href="signup.php" class="button">Змінити аккаунт</a></p>
      </form>
      <div class="results_block">
        <p>
          <?php 
            echo $your_parlay . $you_winn_sum . $wins;
          ?>
        </p>
      </div>
			<div class="buttons">
				<p><a href="exit.php">Вийти  (<?php echo $_COOKIE['username']; ?>)</a></p>
				
        <p><button type="submit" class="show_results">Результати</button></p>
			</div>
    </div>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script>
    $(document).ready(function() {
      var link = $('.show_results');
      var results_block = $('.results_block');
      var form = $('.formm');
      link.click(function(){
        link.toggleClass('show_results_active');
        results_block.toggleClass('results_block_active');
        form.toggleClass('form_active');
      });
    });
  </script>
</body>
</html>