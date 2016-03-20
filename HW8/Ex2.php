<!DOCTYPE html>
<html>
<body>

<?php
//The comand 'echo' outputs 'Hello'
echo 'Hello';
echo '<br>';

function myTest() {//my first PHP function
     $x = 8;
     $y = 9;
     $z = $x + $y;
     return $z;
} 
$myYear = myTest(); 
echo 'I am '.$myYear.' years old.';
// run function
// // output the new value for variable $z
?>

   
</body>
</html>

