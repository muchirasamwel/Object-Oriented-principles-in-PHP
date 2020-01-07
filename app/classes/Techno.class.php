<?php
namespace app\classes;
class Techno extends Phone {
    private $build;
    function __construct($os,$ringer,$build,$name)
    {
        $this->build = $build;
        $this->os = $os;
        $this->ringer = $ringer;
        $this->name = $name;
    }

    function playStore  (){
        echo $this->name." Techno Ready for Play on build ".$this->build."<br><br><br>";
    }
}