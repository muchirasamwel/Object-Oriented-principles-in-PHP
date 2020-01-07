<?php
namespace app\classes;
use app\traits\connect;
require_once ("app/traits/phonesTraits.php");
class ciscoPhone extends Phone {
    use connect;
    private $ipaddress;
    function __construct($os,$ringer,$ip,$name)
    {
        $this->os = $os;
        $this->ringer = $ringer;
        $this->name = $name;
        $this->ipaddress=$ip;
    }
    public function test($address){
        echo '<b>'.$this->name."</b> is Pinging <b>'$address' </b>from <b>".$this->ipaddress."</b><br><br><br>";
    }
}