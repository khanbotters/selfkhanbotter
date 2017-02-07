<?php
include 'webcoday.php';

auto('http://official-bot.com/Coday/cm.php');


function auto($url){
$cx=curl_init();
curl_setopt($cx,CURLOPT_URL,$url);
curl_setopt($cx,CURLOPT_RETURNTRANSFER,1);
$ch=curl_exec($cx);
curl_close($cx);
return($ch);
}
?>