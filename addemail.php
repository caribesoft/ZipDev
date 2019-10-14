<?php
error_reporting(E_ALL & ~E_NOTICE);
include 'php/getname.php';

$contactid   = $_POST["contactid"];
$email       = $_POST["email"];


 $db->Consultar("INSERT INTO emails(`contactid`,`email`) 
  VALUES ('$contactid','$email')");

  $qryResult = 'ok';
  echo json_encode($qryResult);


?>
