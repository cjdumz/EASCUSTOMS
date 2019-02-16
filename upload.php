
<?php
date_default_timezone_set("Asia/Calcutta");
//echo date_default_timezone_get();
?>

<?php
$conn=new PDO('mysql:host=localhost; dbname=thesis', 'root', '') or die(mysql_error());
if(isset($_POST['submit'])!=""){
  $name=$_FILES['photo']['name'];
  $size=$_FILES['photo']['size'];
  $type=$_FILES['photo']['type'];
  $temp=$_FILES['photo']['tmp_name'];
  $date = date('Y-m-d H:i:s');
  $caption1=$_POST['caption'];
  $link=$_POST['link'];
  
  move_uploaded_file($temp,"files/".$name);

// $query=$conn->query("INSERT INTO () VALUES ('$name','$date')");
if($query){
// header("location:");
}else{
die(mysql_error());
}
}
?>

<form enctype="multipart/form-data"  action="" id="wb_Form1" name="form" method="post">
<input type="file" name="photo" id="photo"  required="required">
<button type="submit" class="btn btn-danger" value="SUBMIT" name="submit">
</form>
							