<?php 
$hostName = 'db4free.net';
$userName = 'roooo0t';
$passWord = '12345678';
$port = '3306';
$databaseName = 'heroku1';
$connect = new mysqli($hostName, $userName, $passWord, $databaseName);
if(!$connect)
{
    echo "connect that bai";
}
else
{
    echo "connect sucess";
}
 ?>