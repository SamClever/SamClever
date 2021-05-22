<?php
$host ="localhost";
$user ="root";
$password ="";
$db ="Swahaba_academy2";
$con = new mysqli ($host,$user,$password,$db);

if(!$con) {
    echo "error in connection";
}

?>