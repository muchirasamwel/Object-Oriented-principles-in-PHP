<?php
namespace app\classes;
/*
 * any class that implements this interface must define these methods
 */
interface phoneInterface{
    public function ring();
    public function sayName();
}

class Phone implements phoneInterface {
    public $os = '';
    public $ringer='';
    public $name='';
    function __construct($os,$ringer,$name)
    {
        $this->os = $os;
        $this->ringer = $ringer;
        $this->name = $name;
    }
    public function ring()
    {
        echo "phone Ringing ".$this->ringer."<br><br><br>";
    }
    public function sayName()
    {
        echo "OOH it looks like this is a ".$this->name."<br><br><br>";
    }
}
//class account{
//    protected $bal;
//    public function __construct($acc,$bal)
//    {
//
//    }
//    public function getBal()
//    {
//
//    }
//    private function calTax()
//    {
//        returntax
//    }
//    public function getTax(){
//
//    }
//
//
//}
//class bstatement extends account {
//
//}
//
//$acc1=new bstatement("12333","0");
//$acc1->bal;