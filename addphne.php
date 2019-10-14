<?php
error_reporting(E_ALL & ~E_NOTICE);
include 'php/getname.php';

$contactid   = $_POST["contactid"];
$number      = $_POST["number"];


 $db->Consultar("INSERT INTO phones(`contactid`,`phone`) 
  VALUES ('$contactid','$number')");

  $qryResult = 'ok';
  echo json_encode($qryResult);


?>
