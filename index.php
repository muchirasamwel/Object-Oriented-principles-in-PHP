<?php
use app\classes\Phone;
use app\classes\iPhone;
use app\classes\Techno ;
use app\classes\ciscoPhone;
use app\traits\connect;
function __autoload($class_name){
    $class=str_replace("\\","/",$class_name);
    if(file_exists($class. '.class.php'))
    {
        include($class. '.class.php');
    }
    else if(file_exists($class. '.php'))
    {
        include($class. '.php');
    }
}
echo "<h1>CLasses/encapsulation/Namespaces/Auto load/</h1>";
//instantiate object iPhone
$iphone6=new iPhone("apple","Chreeeeew !","iphone 6");

//instantiate object Techno
$technoP5=new Techno('Android 4.4','Cliiing !!',"43434","Techno P5");

//call function playStore found in techno
echo "<b>calling function playStore from Techno p5. function found in Techno class</b><br>";

echo $technoP5->playStore();
//instantiate object Techno
$camonx=new Techno('Android 9.0','Cliiing !!',"111001","camon X");

echo "<b>calling function playStore from Camon X. function found in Techno class</b><br>";
//call function playStore found in techno
echo $camonx->playStore();



echo "<b>calling function sayName from Techno. function found in Phone class</b><br>";
$camonx->sayName();

echo "<b>calling function ring on iPhone . function is found in Phone class</b><br>";
$iphone6->ring();

//instantiate a cisco phone
$cisco1=new ciscoPhone("Cisco-OS","Grrrrh!","127.0.23.23","Cisco 411 ");
echo "<b>calling function sayName from ciscoPhone. function found in Phone class</b><br>";

$cisco1->sayName();

echo "<b>calling function test from cisco. function found in ciscoPhone class</b><br>";

$cisco1->test("198.23.45.56");
echo "<b><h1>Traits In use</h1></b><br>";
echo "<b>calling function find signal from cisco. function found in traits connect</b><br>";


$cisco1->findSignal( $cisco1->name);
echo "<b>calling function find bindtosignal from cisco. function found in traits connect</b><br>";

$cisco1->bindToSignal( $cisco1->name,"127.3.4.5");

echo "<b>calling function find signal from iphone. function found in traits connect</b><br>";

$iphone6->findSignal($iphone6->name,"127.3.4.5");

echo "<b>calling function find bindtosignal from iphone. function found in traits connect</b><br>";

$iphone6->bindToSignal($iphone6->name,"127.3.4.5");

