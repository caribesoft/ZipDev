<?php
error_reporting(E_ALL & ~E_NOTICE);
include 'php/getname.php';

if ($_SERVER['REQUEST_METHOD'] == "POST"){
	if(!empty($_POST["name"]) && !empty($_POST["surname"])){
		$name        = $_POST["name"];
		$surname     = $_POST["surname"];

		 $db->Consultar("INSERT INTO phonebook (`name` , `surname`) 
		 	VALUES ('$name','$surname')");
	}	
	$qryResult = 'OK';
	echo json_encode($qryResult);

}else{
	$qryResult = 'Try again from the registration form...';
	echo json_encode($qryResult);
}	

//. CHECK INTEGEITY 
/*
$db->beginTransaction();

 try{
   $db->Consultar("INSERT INTO phonebook (`name` , `surname`) 
    	VALUES ('$name','$surname')");
   $db->commit();
     // ALL GOOD 
    }catch(Exception $ex){
     // Something wrong
 	 $db->rollback();
     $ex->getMessage();
   }
 */



?>
