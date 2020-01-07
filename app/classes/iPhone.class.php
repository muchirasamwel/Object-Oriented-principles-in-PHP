<?php
namespace app\classes;
use app\traits\connect;
require_once ("app/traits/phonesTraits.php");
class iPhone extends Phone {
    use connect;
    public function siri()
    {
        echo "siri Available <br>";
    }
}
