<?php
error_reporting(E_ALL & ~E_NOTICE);
include 'php/getname.php';

$number        = $_POST["number"];
$phnid	       = $_POST["phnid"];


 $db->Consultar("UPDATE phones SET phone='$number' WHERE recid = '$phnid' ");

  $qryResult = 'ok';
  echo json_encode($qryResult);


?>
