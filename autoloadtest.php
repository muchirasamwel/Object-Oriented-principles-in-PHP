<?php
function __autoload($class_name){
    if(file_exists('classes/' .$class_name. '.class.php'))
    {
        require('classes/' .$class_name. '.class.php');
    }
}
use test\data\phone;
$iphone6=new phone("apple","Chreeeeew !");

$camonx=new Techno('Android','Cliiing !!',"43434");

echo $camonx->playstore();
echo $iphone6->ring();
