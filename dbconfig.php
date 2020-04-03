<?php
$serverName="localhost";
$userName="MLM";
$password="mlm@1234";
$dbname="mlm";

$connection=mysqli_connect($serverName,$userName,$password,$dbname);
if(!$connection)
{
    echo mysqli_connect_error($connection);
}
?>