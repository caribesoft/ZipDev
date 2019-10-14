<?php
error_reporting(E_ALL & ~E_NOTICE);
include 'php/getname.php';

$name        = $_POST["name"];
$surname     = $_POST["surname"];


 $db->Consultar("INSERT INTO phonebook (`name` , `surname`) VALUES ('$name','$surname')");

  $qryResult = 'ok';
  echo json_encode($qryResult);


?>
