<?php
namespace app\traits;
trait connect{
    public function findSignal($phone_name){
        echo $phone_name." Looking for Signal ...<br><br><br>";
    }
    public function bindToSignal($name,$ip){

        $is_found = strpos($name,"Cisco 411");
        echo $is_found;
        if($is_found === false)
        {
            echo $ip." could not bind to Cisco net for ".$name."<br><br><br>";
        }
        else{
            echo $ip." bind to Cisco net successful for ".$name."<br><br><br>";
        }
    }
}
