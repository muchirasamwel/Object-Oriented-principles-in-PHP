<?php
/*
 * this is the best way to create namespaces i one file
 * Here i have two namespaces  */
namespace test\data {
    class phone
    {
        public $name;

        public function __construct($name)
        {
            $this->name = $name;
        }

        public function sayname()
        {
            echo "OOH it looks like this is a ".$this->name."<br>";
        }
    }
}

namespace phones\ipPhone{
    use test\data\phone;//am requiring phone class from the test\data namespace
    class ciscoPhone extends phone {
        private $ipaddress;
        public function __construct($name,$ip)
        {
            $this->name = $name;
            $this->ipaddress=$ip;

        }
        public function test($address){
            echo '<b>'.$this->name."</b> is Pinging <b>'$address' </b>from <b>".$this->ipaddress."</b><br>";
        }
    }
}