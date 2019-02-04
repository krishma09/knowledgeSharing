<!DOCTYPE html>
<html>
<body>

<?php
$str = "Hello";
echo md5($str).'<br>';


$ab= md5($str);
echo md5($str).'<br>';


if (md5($str) == $ab)
  {
  echo "<br>Hello world!";
  
  }
  
  

?>
  
</body>
</html>