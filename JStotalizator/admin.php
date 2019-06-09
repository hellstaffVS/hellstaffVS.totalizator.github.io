<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Курсова робота 1-КТ-16, Козінця Е. Сахарчука В.</title>
	<link rel="stylesheet" href="css/style.css">
<?php 
  $dbc = mysqli_connect('localhost', 'mysql', 'mysql', 'total');
    $horse_end = $_POST['horse_end'];
    $racing_end = $_POST['racing_end'];
    $racing_racing = $_POST['nam'];
    // ДОБАВЛЯЄМО ТИП ПЕРЕГОННІВ
    for ($i=0; $i <= $racing_end; $i++) { 
      $racing_name = $_POST['racing_'. $i . ''];
      if ($racing_name != '') {
        $addcolumn1 ="CREATE TABLE $racing_name (
          $racing_name TEXT
        )";
        $addcolumn2 = "INSERT INTO `kind_of_racing` (kind)   VALUES ('$racing_name')";
        $columnresult1 = mysqli_query($dbc, $addcolumn1) ;
        $columnresult2 = mysqli_query($dbc, $addcolumn2) ;
      }
    }
      // ДОБАВЛЯЄМО УЧАСНИКА У ПОТРІБНИЙ ТИП ПЕРЕГОНІВ         
      for ($i=0; $i <= $horse_end; $i++) { 
        $horse_name = $_POST['horse_'. $i . ''];
        $racing_va = $_POST['select_racing'];
        $marzha = $_POST['marzha'];
        $winner = $_POST['winner'];
        if ($horse_name != '') {
          $addcolumn ="INSERT INTO $racing_va ($racing_va) VALUES ('$horse_name')";
          $columnresult = mysqli_query($dbc, $addcolumn); 
        }
        // ВВОДИМО СУМУ МАРЖІ
        if ($marzha != '') {
          $addcolumnMarzha = "UPDATE kind_of_racing SET marzha = '$marzha' WHERE kind = '$racing_va'";
          $columnresultMarzha = mysqli_query($dbc,$addcolumnMarzha);
        }
        // ВВОДИМО ПЕРЕМОЖЦЯ
        if ($winner != '') {
          $addcolumnMarzha = "UPDATE kind_of_racing SET winner = '$winner' WHERE kind = '$racing_va'";
          $columnresultMarzha = mysqli_query($dbc,$addcolumnMarzha);
        } 
      }
?>
</head>
<body>
  <div class="h_title">
        <h1>Курсова робота 1-КТ-16, Козінця Е. Сахарчука В.</h1>
      </div>
	<div class="wrap">
		<div class="admin">
      <!-- ВВОДИМО НОВИХ УЧАСНИКІВ -->
     <div class="admin_one">
      <div class="one_a">
        <div class="h_title">
            <p>Виберіть тип перегонів, до якого ви хочете добавити гонщика</p>
          </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class=" add">
         <div class="form_one_wrap">  <a class="add_form_field">Добавити <?php echo $select_racing; ?> &nbsp; <span style="font-size:16px; font-weight:bold;">+ </span></a>
           <select name="select_racing">
           <?php 
             $query1 = "SELECT kind FROM `kind_of_racing`";
             $result1 = mysqli_query($dbc, $query1); 
             if($result1){
               while ($row = mysqli_fetch_row($result1)){
                 echo '<option id="'; 
                 echo $row[0] . '" name="';
                 echo $row[0] .'">' . $row[0] . '</option>';
               }
             }    
       
           ?>
           </select>
           <div class="form_add_wrap">
            
               <input type="text" class="add_input" name="horse_0" placeholder="Ім'я гонщика">
               <input type="hidden" name="nam" id="txt"value="<?php echo $_COOKIE['username']; ?>">
          
            
               <input type="text" class="add_input" name="marzha" placeholder="Введіть суму маржі">
               <input type="text" class="add_input" name="winner" placeholder="Введіть переможця">
            
           </div>
         </div>
         <button type="submit" id="btn" class="save" name="submit">Зберегти</button>          
       </form>
     </div>
       <?php 
         $delete_table = $_POST['delete_table'];
         $select_table = $_POST['select_table'];
         $delete_item = $_POST['delete_item'];
         //ВИДАЛЕННЯ ВИДУ ПЕРЕГОНІВ З ЗАГАЛЬНОЇ ТАБЛИЦІ
         $delete = "DELETE FROM `kind_of_racing` WHERE `kind_of_racing`.`kind` = '$delete_table'";   
         $resultDelete = mysqli_query($dbc, $delete); 
         //ВИДАЛЕННЯ РЯДКА З ТАБЛИЦІ
         $deleteItem = "DELETE FROM `$select_table` WHERE `$select_table`.`$select_table` = '$delete_item'";   
         $resultDeleteItem = mysqli_query($dbc, $deleteItem);
         //ВИДАЛЕННЯ ТАБЛИЦІ ВИДУ ПЕРЕГОНІВ
         $deleteTable = "DROP TABLE $delete_table";   
         $resultDeleteTable = mysqli_query($dbc, $deleteTable);
       ?>

              <!-- ДОБАВЛЯЄМО НОВИЙ ТИП ПЕРЕГОНІВ -->
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="form_two">
                <div class="form_two_wrap">
                  <input type="hidden" name="nam" value="<?php echo $_COOKIE['username']; ?>">
                  <a class="add_form_field_two add_form_field">Добавити тип перегонів &nbsp; <span style="font-size:16px; font-weight:bold;">+ </span></a>
                  <input type="text" class="add_input" placeholder="Добавити новий тип перегонів" name="racing_0">
                </div>
                <button id="btn_two" type="submit">Добавити</button>
                <p><a href="exit.php" class="obr_parlay_button">Вийти(<?php echo $_COOKIE['username']; ?>)</a></p>
              </form>
              

       <div class="delete">
        <!-- ВИДАЛЕННЯ ГОНЩИКА -->
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          <div class="h_title">
            <p>Виберіть тип перегонів, з якого ви хочете видалити учасника</p>
          </div>
          
          <select name="select_table" class="select_table">
          <?php
            $query1 = "SELECT kind FROM `kind_of_racing`";
            $result1 = mysqli_query($dbc, $query1); 
            if($result1){
              while ($row = mysqli_fetch_row($result1)){
                echo '<option id="'; 
                echo $row[0] . '" name="';
                echo $row[0] .'">' . $row[0] . '</option>';
              }
            }    
          ?>
          </select>
          <input type="text" placeholder="Введіть учасника" name="delete_item" class="add_input_del">
          <button type="submit" class="save">Видалити</button>
        </form>
         <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
           <select name="delete_table" class="select_table">
           <!-- ВИБИРАЄМО ЯКУ ТАБЛИЦЮ ВИДАЛЯЄМО -->
           <?php 
             $query1 = "SELECT kind FROM `kind_of_racing`";    
             $result1 = mysqli_query($dbc, $query1); 
             if($result1){
               while ($row = mysqli_fetch_row($result1)){
                 echo '<option id="'; 
                 echo $row[0] . '" name="';
                 echo $row[0] .'">' . $row[0] . '</option>';
               }
             }    
           ?>
           </select>
           <button type="submit" class="save">Видалити</button>
         </form>
         
       </div>
     </div>

    </div>
  <script src="js/jquery-3.3.1.min.js"></script>
<!-- СКРИПТ ДЛЯ ГЕНЕРАЦІЇ ІНПУТІВ НА ВВЕДЕНЯ УЧАСНИКА ПЕРЕГОНІВ -->
  <script>	
  $(document).ready(function() {
    var max_fields      = 10;
    var wrapper         = $(".form_one_wrap"); 
    var add_button      = $(".add_form_field"); 
    var add_submit      = $("#btn");   	
    var x = 1; 
    var number = 0;
    $(add_button).click(function(e){ 
      e.preventDefault();
      number = number + 1; 
      if(x < max_fields){ 
        x++;
        $(wrapper).append('<div><input type="text" class="add_input" placeholder="Ім*я гонщика" name = "horse_'+number+'"/><a href="#" class="delete_input">Delete</a></div>'); //ДОБАВЛЯЄМО ІНПУТИ           
      }
      else{
        alert('ВИ ПЕРЕВИЩИЛИ ЛІМІТ');
      }
    }); 
    $(wrapper).on("click",".delete_input", function(e){ 
        e.preventDefault(); $(this).parent('div').remove(); x--;
    });
    $(add_submit).click(function(e){ 
    	$(wrapper).append('<div><input type="hidden" name = "horse_end" value="'+number+'"/></div>'); //add input box
    });
  });
  // ДОБАВЛЯЄМО ВИДИ ПЕРЕГОНІВ
  $(document).ready(function() {
    var max_fields_two      = 10;
    var wrapper_two         = $(".form_two_wrap"); 
    var add_button_two      = $(".add_form_field_two"); 
    var add_submit_two      = $("#btn_two");   
    var x_two = 1; 
    var number_two = 0;
    $(add_button_two).click(function(e){ 
      e.preventDefault();
      number_two = number_two + 1;
      if(x_two < max_fields_two){ 
        x_two++;
        $(wrapper_two).append('<div><input type="text" placeholder="Введіть тип перегонів" class="add_input" name = "racing_'+number_two+'"/><a href="#" class="delete_input">Delete</a></div>'); //ДОБАВЛЯЄМО ІНПУТ     
      }
      else{
        alert('You Reached the limits')
      }
    });
    $(wrapper_two).on("click",".delete_input", function(e){ 
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
    $(add_submit_two).click(function(e){ 
      $(wrapper_two).append('<div><input type="hidden" name = "racing_end" value="'+number_two+'"/></div>'); //ДОБАВЛЯЄМО ІНПУТ
    });
  });
  </script>
</body>
</html>