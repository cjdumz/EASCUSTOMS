	<form method = "POST" action="year.php">
	
  <select name="date">
  <?php
  for ($i = 2002; $i <= date('Y'); $i++){
      echo '<option value="'.$i.'">'.$i.'</option>';
    }
  ?>      
</select>
	<input type="submit" target="year.php" /> 
	</form>	