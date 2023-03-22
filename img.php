<?php

//get unique identifier from link (?pid=xxx)
$name = $_GET["pid"];
//get IP from visitor
$ip = $_SERVER['REMOTE_ADDR'];
//create random file with the info
$fName = uniqid() . '.txt';

//open file and put info into it
$myfile = fopen($fName, "w");
$txt = $name . "\n" . $ip;
fwrite($myfile, $txt);
fclose($myfile);

//directory of image file to show
$name = 'black.png';
$fp = fopen($name, 'rb');

// send the right headers
header("Content-Type: image/png");
header("Content-Length: " . filesize($name));

// dump the picture and stop the script
fpassthru($fp);
exit;
