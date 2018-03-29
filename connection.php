<?php

$server="localhost";
$login="root";
$passwd="";
$dbname="examen";
$con =new PDO('mysql:host='.$server.';dbname='.$dbname.';charset=utf8',$login,$passwd);

?>