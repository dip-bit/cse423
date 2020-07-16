<!DOCTYPE html>
<html>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
  <label for="">Value:</label><br>
  <input type="text" name="value"><br><br>
  <input type="submit" name="submit" value="Submit">
</form> 
</body>
</html>
<?php
if(isset( $_POST['submit'])){
$value = $_POST['value'];
function name($string) {
  echo "We Love ".$string." and today is ".date("m.d.Y")."<br>";
}
name($value);
}
?>