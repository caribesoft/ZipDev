<?php
error_reporting(E_ALL & ~E_NOTICE);
include 'php/getname.php';

$email   = $_POST["email"];
$emid	 = $_POST["emid"];


 $db->Consultar("UPDATE emails SET email='$email' WHERE recid = '$emid' ");

  $qryResult = 'ok';
  echo json_encode($qryResult);

?>
