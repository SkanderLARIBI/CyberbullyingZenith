<?php
session_start();
include "connect.php";
if (isset($_POST['username'])&& isset($_POST['password'])) {
	function validate($data){
		$data = trim($data); //tna7i les espace fonction predf
		$data = stripslashes($data);//tna7i antislashe
		$data = htmlspecialchars($data);//tbadel les caracteres special lel code html 
		return $data;
	}
$username = validate($_POST['username']);
$password = validate($_POST['password']);
if (empty($username)) {
	header("location: ../conn.php");
	exit();

 }else if(empty($password)) {
	header("location: ../conn.php");
	exit();
 }else{
         //admine
         $query2 = "SELECT * FROM victims WHERE firstname = :firstname ";  
         $statement2 = $db->prepare($query2);  
         $statement2->execute(  array(  'firstname'     =>     $_POST["username"],  )  );  
         $count2 = $statement2->rowCount();

         if($count2 > 0) {
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
              header("location: ../profil.php");  
         }else{
                header("location: ../conn.php");
                exit();
                }
         }   
        }
    else{
header("location: ../conn.php");
exit();
}

?>