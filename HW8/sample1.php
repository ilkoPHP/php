<?php
$sex = 'male';
$name = 'Stefan';

switch($sex){
    case 'female':{
        echo 'Mrs.' . $name;
    }
   break;
    case 'male':{
        echo 'Mr.' . $name;
    }
    break;
    default:{
        echo 'Hi,' . $name;
        
}
?>