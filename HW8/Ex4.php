<!DOCTYPE html>
<html>
<body>
<?php  
echo 'Find the solution of the equation: <br>6x^2-4x+1=0';
function myRoots1 () {
    $a = 6
    $b = -4
    $c = 1
    $D = $b^2-4*$a*$c
    $x1 = (-b+sqrt($D))/(2*#a)
    $x2 = (-b-sqrt($D))/(2*#a) 
}
  myRoot1 ()

function myRoots2 () {
    $a = 3
    $b = 4
    $c = -10
    $D = $b^2-4*$a*$c
    $x1 = (-b+sqrt($D))/(2*#a)
    $x2 = (-b-sqrt($D))/(2*#a) 
}
  myRoots2 ()

function myRoots3 () {
    $a = 8
    $b = -10
    $c = 4
    $D = $b^2-4*$a*$c
    $x1 = (-b+sqrt($D))/(2*#a)
    $x2 = (-b-sqrt($D))/(2*#a) 
}
  myRoot3 ()

function myRoots4 () {
    $a = -7
    $b = -8
    $c = 14
    $D = $b^2-4*$a*$c
    $x1 = (-b+sqrt($D))/(2*#a)
    $x2 = (-b-sqrt($D))/(2*#a) 
}
  myRoot4 ()
 ?>
</body>
</html>