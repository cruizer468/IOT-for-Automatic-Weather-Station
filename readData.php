<?php
$jsondata = file_get_contents('https://api.thingspeak.com/channels/989621/feeds/last.json');
echo $jsondata;
?>