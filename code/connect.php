<?php

$dbname = "zenith";
$username ="root";
$password ="";
$servername ="localhost";

try{
$db= new PDO(
    "mysql:host=$servername;dbname=$dbname",$username,$password);
//echo "connexion etablie";
}
catch(PDOException $e){
echo " connexion failed!";
echo $e->getMessage();
}

?>
