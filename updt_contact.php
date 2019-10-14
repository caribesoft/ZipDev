<?php
error_reporting(E_ALL & ~E_NOTICE);
include 'php/getname.php';

$contactid   = $_POST["contactid"];
$name        = $_POST["name"];
$surname     = $_POST["surname"];


 $db->Consultar("UPDATE phonebook SET name='$name', surname='$surname' 
 	WHERE recid = '$contactid' ");

  $qryResult = 'ok';
  echo json_encode($qryResult);


?>
